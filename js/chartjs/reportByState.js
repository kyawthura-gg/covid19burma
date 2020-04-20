$(document).ready(function () {
    var Confirm = new Array();
    var Labels = new Array();
    var Deaths = new Array();
    var Recovered = new Array();
    $(document).ready(function () {
        $.get(urlState, function (response) {
            response.forEach(function (data) {
                Confirm.push(data.confirm_case);
                Labels.push(data.state);
                Deaths.push(data.deaths);
                Recovered.push(data.recovered);
            });
            var progress = document.getElementById('animationProgress');
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels: Labels,
                    datasets: [{
                            label: 'Confirmed Cases',
                            fill: true,
                            borderColor: 'hsl(348, 100%, 61%)',
                            backgroundColor: 'hsl(348, 100%, 61%)',
                            data: Confirm
                        },
                        {
                            label: 'Deaths',
                            fill: true,
                            borderColor: 'hsl(0, 0%, 86%)',
                            backgroundColor: 'hsl(0, 0%, 86%)',
                            data: Deaths
                        }
                    ]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Confirmed cases by states',
                        fontColor: "white",
                        fontSize: 17,
                    },
                    legend: {
                        display: true,
                        labels: {
                            fontColor: 'white',
                        }
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                fontColor: "white",
                                fontSize: 14,
                                // stepSize: 1,
                                // beginAtZero: true
                            },
                            gridLines: {
                                display: false,
                            }
                        }],
                    },
                    animation: {
                        duration: 2000,
                        onProgress: function (animation) {
                            progress.value = animation.currentStep / animation.numSteps;
                        },
                        onComplete: function () {
                            window.setTimeout(function () {
                                progress.value = 0;
                            }, 500);
                        }
                    }
                }
            });
        });
    });
});



// var barChartData = {
//     labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
//     datasets: [{
//         label: 'Dataset 1',
//         backgroundColor: window.chartColors.red,
//         data: [
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor()
//         ]
//     }, {
//         label: 'Dataset 2',
//         backgroundColor: window.chartColors.blue,
//         data: [
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor()
//         ]
//     }, {
//         label: 'Dataset 3',
//         backgroundColor: window.chartColors.green,
//         data: [
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor(),
//             randomScalingFactor()
//         ]
//     }]

// };
// window.onload = function() {
//     var ctx = document.getElementById('canvas').getContext('2d');
//     window.myBar = new Chart(ctx, {
//         type: 'bar',
//         data: barChartData,
//         options: {
//             title: {
//                 display: true,
//                 text: 'Chart.js Bar Chart - Stacked'
//             },
//             tooltips: {
//                 mode: 'index',
//                 intersect: false
//             },
//             responsive: true,
//             scales: {
//                 xAxes: [{
//                     stacked: true,
//                 }],
//                 yAxes: [{
//                     stacked: true
//                 }]
//             }
//         }
//     });
// };