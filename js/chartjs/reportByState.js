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
                        fill: true,
                        borderColor: 'hsl(348, 100%, 61%)',
                        backgroundColor: 'hsl(348, 100%, 61%)',
                        data: Confirm
                    }, ]
                },
                options: {
                    title: {
                        display: true,
                        text: byStateTitle,
                        fontColor: "white",
                        fontSize: 17,
                    },
                    legend: {
                        display: false,
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