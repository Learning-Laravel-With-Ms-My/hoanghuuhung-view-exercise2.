// JavaScript to handle sidebar toggling
document.addEventListener("DOMContentLoaded", function () {
    const sidebarDropdowns = document.querySelectorAll('.sidebar-dropdown');
    sidebarDropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function () {
            const submenu = this.nextElementSibling;
            submenu.classList.toggle('show');
            this.querySelector('.fa-angle-right').classList.toggle('rotate');
        });
    });
});

window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "AP and AR Balanced"
        },
        axisX: {
            valueFormatString: "MMM"
        },
        axisY: {
            prefix: "$",
            labelFormatter: addSymbols
        },
        toolTip: {
            shared: true
        },
        legend: {
            cursor: "pointer",
            itemclick: toggleDataSeries
        },
        data: [
            {
                type: "column",
                name: "Doanh số thực tế",
                showInLegend: true,
                xValueFormatString: "MMMM YYYY",
                yValueFormatString: "$#,##0",
                dataPoints: [
                    { x: new Date(2016, 0), y: 20000 },
                    { x: new Date(2016, 1), y: 30000 },
                    { x: new Date(2016, 2), y: 25000 },
                    { x: new Date(2016, 3), y: 70000, indexLabel: "Gia hạn cao" },
                    { x: new Date(2016, 4), y: 50000 },
                    { x: new Date(2016, 5), y: 35000 },
                    { x: new Date(2016, 6), y: 30000 },
                    { x: new Date(2016, 7), y: 43000 },
                    { x: new Date(2016, 8), y: 35000 },
                    { x: new Date(2016, 9), y: 30000 },
                    { x: new Date(2016, 10), y: 40000 },
                    { x: new Date(2016, 11), y: 50000 }
                ]
            },
            {
                type: "line",
                name: "Doanh số mong đợi",
                showInLegend: true,
                yValueFormatString: "$#,##0",
                dataPoints: [
                    { x: new Date(2016, 0), y: 40000 },
                    { x: new Date(2016, 1), y: 42000 },
                    { x: new Date(2016, 2), y: 45000 },
                    { x: new Date(2016, 3), y: 45000 },
                    { x: new Date(2016, 4), y: 47000 },
                    { x: new Date(2016, 5), y: 43000 },
                    { x: new Date(2016, 6), y: 42000 },
                    { x: new Date(2016, 7), y: 43000 },
                    { x: new Date(2016, 8), y: 41000 },
                    { x: new Date(2016, 9), y: 45000 },
                    { x: new Date(2016, 10), y: 42000 },
                    { x: new Date(2016, 11), y: 50000 }
                ]
            },
            {
                type: "area",
                name: "Lợi nhuận",
                markerBorderColor: "white",
                markerBorderThickness: 2,
                showInLegend: true,
                yValueFormatString: "$#,##0",
                dataPoints: [
                    { x: new Date(2016, 0), y: 5000 },
                    { x: new Date(2016, 1), y: 7000 },
                    { x: new Date(2016, 2), y: 6000 },
                    { x: new Date(2016, 3), y: 30000 },
                    { x: new Date(2016, 4), y: 20000 },
                    { x: new Date(2016, 5), y: 15000 },
                    { x: new Date(2016, 6), y: 13000 },
                    { x: new Date(2016, 7), y: 20000 },
                    { x: new Date(2016, 8), y: 15000 },
                    { x: new Date(2016, 9), y: 10000 },
                    { x: new Date(2016, 10), y: 19000 },
                    { x: new Date(2016, 11), y: 22000 }
                ]
            }]
    });
    chart.render();

    function addSymbols(e) {
        var suffixes = ["", "K", "M", "B"];
        var order = Math.max(Math.floor(Math.log(Math.abs(e.value)) / Math.log(1000)), 0);

        if (order > suffixes.length - 1)
            order = suffixes.length - 1;

        var suffix = suffixes[order];
        return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
    }

    function toggleDataSeries(e) {
        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        } else {
            e.dataSeries.visible = true;
        }
        e.chart.render();
    }

}


// Dữ liệu mẫu cho biểu đồ 1
const data1 = {
    labels: ['Red', 'Blue', 'Yellow'],
    datasets: [{
        data: [300, 50, 100],
        backgroundColor: ['red', 'blue', 'yellow'],
        hoverOffset: 4
    }]
};

// Tạo biểu đồ 1
const ctx1 = document.getElementById('donutChart1').getContext('2d');
const donutChart1 = new Chart(ctx1, {
    type: 'doughnut',
    data: data1,
    options: {
        responsive: true
    }
});

// Dữ liệu mẫu cho biểu đồ 2
const data2 = {
    labels: ['A', 'B', 'C'],
    datasets: [{
        data: [200, 100, 150],
        backgroundColor: ['green', 'orange', 'purple'],
        hoverOffset: 4
    }]
};

// Tạo biểu đồ 2
const ctx2 = document.getElementById('donutChart2').getContext('2d');
const donutChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: data2,
    options: {
        responsive: true
    }
});
