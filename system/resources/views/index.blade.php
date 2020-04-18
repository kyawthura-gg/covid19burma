@extends('layouts.app')

@section('content')
<div class="content">
    <div id="quote" class="help-container" style="display: none">
        <p style="color:#c9c9f5">🧼လက်ကို ဆပ်ပြာနှင့် ရေဖြင့် မကြာခဏဆေးကြောပါ။</p>
    </div>
    <div class="columns">
        <div class="column is-one-quarter">
            <div class="tabs is-toggle is-fullwidth" id="tabs">
                <ul>
                    <li class="is-active" data-tab="1">
                        <a>
                            <span class="icon is-small"><i class="fas fa-map-marker-alt"></i></span>
                            <span>Myanmar</span>
                        </a>
                    </li>
                    <li data-tab="2">
                        <a>
                            <span class="icon is-small"><i class="fas fa-globe-americas"></i></span>
                            <span>Global</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="tab-content">
                <div class="total-box sub-tab is-active" data-content="1">
                    <div class="columns pb-15">
                        <div class="right-line column">
                            <p class="box-title">Total</p>
                            <div>
                                <label class="case-font" id="confirmed">0</label>
                                <span class="none" id="mm-confrim">{{$total_confirm}}</span>
                                <p>CONFIRMED 🤕</p>
                            </div>
                            <div>
                                <label class="death-font" id="deaths">0</label>
                                <span class="none" id="mm-deaths">{{$deaths}}</span>
                                <p>DEATHS 💔</p>
                            </div>
                            <div>
                                <label class="recover-font" id="recovered">0</label>
                                <span class="none" id="mm-recovered">{{$recovered}}</span>
                                <p>RECOVERED 🤩</p>
                            </div>

                        </div>
                        <div class="column ml-20">
                            <p class="box-title">Today</p>
                            <div>
                                <span class="case-font">+</span><label class="case-font" id="confirmed">{{$today_confirm}}</label>
                                <p>CONFIRMED 🤕</p>
                            </div>
                            <div>
                                <span class="death-font">+</span><label class="death-font" id="deaths">{{$today_deaths}}</label>
                                <p>DEATHS 💔</p>
                            </div>
                            <div>
                                <span class="recover-font">+</span><label class="recover-font" id="recovered">{{$today_recovered}}</label>
                                <p>RECOVERED 🤩</p>
                            </div>
                        </div>
                    </div>
                    <div class="columns is-vcentered is-centered">
                        <label class="recover-font is-size-4" id="active">0</label>
                        <span class="none" id="mm-active">{{$active}}</span>
                        &nbsp;&nbsp;&nbsp;<p class="box-title">Active 😰</p>
                    </div>
                </div>
                <div class="sub-tab" data-content="2">
                    <div class="total-box magin-box">
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
                        <div>
                            <label class="recover-font" id="golobal-active">0</label>
                            <p>Active 😰</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="total-box" style="margin-top: 20px; display:none;">
                <canvas id="myChart" width="400" height="400"></canvas>
                <progress id="animationProgress" max="1" value="0" style="width: 100%"></progress>
            </div>
        </div>
        <div class="column is-one-quarter">
            <x-map :state="$state" />
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
                                    No
                                </th>
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
                            @foreach ($cases as $case)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $case->state }}</td>
                                <td>{{ $case->date_confirm }}</td>
                                <td>{{ $case->confirm_case  }}</td>
                                <td>{{ $case->deaths }}</td>
                                <td>{{ $case->recovered }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $cases->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./js/quota.js?v=c298c7fa213d"></script>
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
                    14,
                    4,
                    1,
                    1,
                    2,
                    1,
                ]
            }, {
                label: 'Dead',
                fill: false,
                borderColor: '#ad2b26',
                backgroundColor: '#ad2b26',
                data: [
                    2,
                    1,
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