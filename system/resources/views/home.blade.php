@extends('layouts.app')

@section('content')
<div class="content">
    <div id="quote" class="help-container">
                        <p style="color:#c9c9f5">🧼လက်ကို ဆပ်ပြာနှင့် ရေဖြင့် မကြာခဏဆေးကြောပါ။</p>
                    </div>
        <div class="columns">
            <div class="column is-one-quarter">
                <div class="total-box box-h">
                    <div class="right-line box-flex">
                        <label>In Myanmar</label>
                        <div>
                            <label class="case-font" id="confirmed">0</label>
                            <p>CONFIRMED 🤕</p>
                        </div>
                        <div>
                            <label class="death-font" id="deaths">0</label>
                            <p>DEATHS 💔</p>
                        </div>
                        <div>
                            <label class="recover-font" id="recovered">0</label>
                            <p>RECOVERED 🤩</p>
                        </div>
                    </div>
                    <div class="box-flex ml-20">
                        <label>In World</label>
                        <div>
                            <label class="case-font" id="golobal-confirmed">0</label>
                            <p>CONFIRMED 🤕</p>
                        </div>
                        <div>
                            <label class="death-font" id="golobal-deaths">0</label>
                            <p>DEATHS 💔</p>
                        </div>
                        <div>
                            <label class="recover-font" id="golobal-recovered">0</label>
                            <p>RECOVERED 🤩</p>
                        </div>
                    </div>
                    

                </div>
                <div class="total-box" style="margin-top: 20px;">
                    <!-- <label class="burma-font">Informations</label>
                    <div class="mt-10">
                        <a style="margin-right: 10px;" href="https://www.mohs.gov.mm/">Link to WHO</a><a
                            href="https://www.mohs.gov.mm/">Link to
                            MOHS</a>
                    </div>
                    <div class="mt-10">
                        <labe class="contact-font">09 54577874</label>
                            <p>Emgerceny contact</p>
                    </div> -->
                    <canvas id="myChart" width="400" height="400"></canvas>
                    <progress id="animationProgress" max="1" value="0" style="width: 100%"></progress>
                </div>

            </div>
            <div class="column is-one-quarter">
                <x-map />
                <div class="description" style="text-align: left;">
                </div>
                <div class="status-div">
                    <div>
                        <label class="status-label one_10"></label>
                        <p>1 - 10</p>
                    </div>
                    <div>
                        <label class="status-label ten_30"></label>
                        <p>10 - 30</p>
                    </div>
                    <div>
                        <label class="status-label thirty_99"></label>
                        <p>30 - 99</p>
                    </div>
                    <div>
                        <label class="status-label plus"></label>
                        <p>100+</p>
                    </div>

                </div>
            </div>
            <div class="column">
                <div class="total-box">
                    <div class="table-container">
                        <table class="table-background-color">
                            <thead>
                                <tr>
                                    <th>
                                        State
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Cases
                                    </th>
                                    <th>
                                        Deaths
                                    </th>
                                    <th>
                                        Recovered
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Chin</td>
                                    <td>24 March 2020</td>
                                    <td>+1</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Yangon</td>
                                    <td>24 March 2020</td>
                                    <td>+1</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Yangon</td>
                                    <td>25 March 2020</td>
                                    <td>+1</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Mandalay</td>
                                    <td>27 March 2020</td>
                                    <td>+1</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Yangon</td>
                                    <td>27 March 2020</td>
                                    <td>+1</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Yangon</td>
                                    <td>28 March 2020</td>
                                    <td>+2</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Naypyitaw</td>
                                    <td>28 March 2020</td>
                                    <td>+1</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Yangon</td>
                                    <td>29 March 2020</td>
                                    <td>+2</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Yangon</td>
                                    <td>30 March 2020</td>
                                    <td>+3</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Shan</td>
                                    <td>30 March 2020</td>
                                    <td>+1</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Yangon</td>
                                    <td>31 March 2020</td>
                                    <td>0</td>
                                    <td>+1</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Yangon</td>
                                    <td>31 March 2020</td>
                                    <td>+1</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Yangon</td>
                                    <td>01 April 2020</td>
                                    <td>+1</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Bago</td>
                                    <td>02 April 2020</td>
                                    <td>+4</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Yangon</td>
                                    <td>04 April 2020</td>
                                    <td>+1</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
<script>
    var progress = document.getElementById('animationProgress');
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'horizontalBar',
            data: {
                labels: ['Yangon', 'Bago', 'Mandalay', 'Nay Pyi Taw', 'Chin', 'Shan'],
                datasets: [{
                    label: 'Confirmed Cases',
                    fill: true,
                    borderColor: '#eb7a5d',
                    backgroundColor: '#eb7a5d',
                    data: [
                        13,
                        4,
                        1,
                        1,
                        1,
                        1,
                    ]
                }, {
                    label: 'Dead',
                    fill: false,
                    borderColor: '#ad2b26',
                    backgroundColor: '#ad2b26',
                    data: [
                        1,
                        0,
                        0,
                        0,
                        0,
                        0,
                    ]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Dead and confirmed cases by States',
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
                    yAxes: [{
                        ticks: {
                            fontColor: "white",
                            fontSize: 14,
                            // stepSize: 1,
                            // beginAtZero: true
                        }
                    }],
                },
                animation: {
                    duration: 2000,
                    onProgress: function(animation) {
                        progress.value = animation.currentStep / animation.numSteps;
                    },
                    onComplete: function() {
                        window.setTimeout(function() {
                            progress.value = 0;
                        }, 2000);
                    }
                }
            }
        });
</script>
@endsection
