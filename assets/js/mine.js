function getChartColor() {
    return "#FFFFFF";
}

// General configuration for the charts with Line gradientStroke
function getOptions(showX, showY) {
    return {
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        tooltips: {
            bodySpacing: 4,
            mode: "nearest",
            intersect: 0,
            position: "nearest",
            xPadding: 10,
            yPadding: 10,
            caretPadding: 10
        },
        responsive: true,
        scales: {
            yAxes: [{
                    display: showY,
                    gridLines: {
                        zeroLineColor: "transparent",
                        drawBorder: false
                    }
                }],
            xAxes: [{
                    display: showX,
                    gridLines: {
                        zeroLineColor: "transparent",
                        display: false
                    },
                    ticks: {
                        padding: 10,
                        fontColor: "rgba(255,255,255,0.5)",
                        fontStyle: "bold"
                    }
                }]
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 15,
                bottom: 15
            }
        }
    };
}

function getLabel(type) {
    switch (type) {
        case "year":
            return createMonthsLabel();
        case "month":
            return createMonthDaysLabel();
        case "week":
            return createWeekDaysLabel();
        case "day":
            return createTimesLabel();
        default:
            return type;
    }
}

function createMonthsLabel() {
    return ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
}

function createMonthDaysLabel() {
    return ["1st", "2nd", "3rd", "4th", "5th", "6th", "7th", "8th", "9th", "10th", "11th", "12th",
        "13th", "14th", "15th", "16th", "17th", "18th", "19th", "20th", "21st", "22nd", "23rd", "24th"
                , "25th", "26th", "27th", "28th", "29th", "30th", "31th"];
}

function createWeekDaysLabel() {
    return ["Monday", "Tuesday", "Wednesday", "Thurday", "Friday", "Saturday", "Sunday"];
}

function createTimesLabel() {
    return ["Midnight(12AM - 6AM)", "Morning(6AM - 12PM)", "Afternoon(12PM - 4PM)", "Evening(4PM - 7PM)", "Night(7PM - 12AM)"];
}

function toggle_hidden(id) {
    if (document.getElementById(id).hasAttribute('hidden')) {
        document.getElementById(id).removeAttribute('hidden');
    } else {
        document.getElementById(id).setAttribute('hidden', 'hidden');
    }
}

function change_id(id) {
    document.getElementById("request_item_id").value = id;
}

function load(url, id, section) {
    $("#" + section).html('<h4 class="text-center text-muted">Loading Please...</h4>');
    document.getElementById(section + '_link').click();
    $.ajax({
        url: url,
        data: {id: id},
        type: "POST",
        success: function (data) {
            $("#" + section).html(data);
            document.getElementById(section + '_link').click();
        }
    }).fail(function () {
        showNotification("top", "center", "Network Error", "danger", "travel_info");
        $("#" + section).html('<h4 class="text-center text-muted">Network Error !!!</h4>');
    });
}

function add_to_cart(url, id) {
    $.ajax({
        url: url + "market/add_to_cart",
        data: {price_id: id},
        type: "POST",
        success: function (data) {
            var response = JSON.parse(data);
            $("#cart_size").html(response.data > 99 ? "99+": response.data);
            if (response.message === "Success") {
                showNotification("top", "center", "Added Successfully", "info", "ui-1_check");
            } else {
                showNotification("top", "center", "Out of Stock", "warning", "travel_info");
            }
        }
    }).fail(function () {
        showNotification("top", "center", "Network Error", "danger", "travel_info");
    });
}

function load_tip(url) {
    $.ajax({
        url: url + "seller_helper/load_json_tip",
        type: "GET",
        success: function (data) {
            var tip = JSON.parse(data);
            showNotification("bottom", screen.width > 700 ? "right" : "center",
                    "<b><u>" + tip.tip_subject + "</u></b><p>" + tip.tip_body + "</p>",
                    "info", "business_bulb-63", (24 * 60 * 60 * 1000));
        }
    }).fail(function () {
        showNotification("top", "center", "Network Error", "danger", "travel_info");
    });
}

function showNotification(from, align, text, type, icon, time = 500) {
    if (text === null || text === "" || text === " ")
        return;
    $.notify({
        icon: 'now-ui-icons ' + icon,
        message: text
    }, {
        type: type,
        timer: time,
        placement: {
            from: from,
            align: align
        }
    });
}

function getRandomColor() {
    return "#" + Math.random().toString(16).slice(2, 8).toUpperCase();
}

function initChart(chartId, chartType, labelType, label, data) {
    var color = chartId === "chart_egg" ? "#FFFFFF" : getRandomColor();
    var ctx = document.getElementById(chartId).getContext("2d");
    gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
    gradientStroke.addColorStop(0, hexToRGB(color, 0.5));
    gradientStroke.addColorStop(1, getChartColor());
    gradientFill = ctx.createLinearGradient(0, 170, 0, 50);
    gradientFill.addColorStop(0, hexToRGB(color, 0.4));
    gradientFill.addColorStop(1, hexToRGB(color, 0.1));
    myChart = new Chart(ctx, {
        type: chartType,
        responsive: true,
        data: {
            labels: getLabel(labelType),
            datasets: [{
                    label: label,
                    borderColor: color,
                    pointBorderColor: "#FFF",
                    pointBackgroundColor: color,
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 1,
                    pointRadius: 4,
                    fill: true,
                    backgroundColor: gradientFill,
                    borderWidth: 2,
                    data: data
                }]
        },
        options: getOptions(chartId === "chart_egg", chartType === "bar" || chartType === "line")
    });
}