@extends('layouts.app')

@section('content')
<div class="content">
    <div id="quote" class="help-container" style="display: none">
        <p style="color:#c9c9f5">🧼လက်ကို ဆပ်ပြာနှင့် ရေဖြင့် မကြာခဏဆေးကြောပါ။</p>
    </div>
    <div class="sub-tab columns">
        <div class="column is-4">
            <div class="total-box">
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
            <div class="total-box" style="margin-top: 20px; padding:10px">
                <canvas id="myChart" width="400" height="400"></canvas>
                <progress id="animationProgress" max="1" value="0" style="display: none"></progress>
            </div>
        </div>
        <div class="column is-3">
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
        <div class="column is-5">
            <div class="total-box">
                <div class="table-container">
                    <table class="table-background-color">
                        <thead>
                            <tr>
                                <th>
                                    State
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
                                <td>{{ $case->state }}</td>
                                <td>{{ $case->confirm_case  }}</td>
                                <td>{{ $case->deaths }}</td>
                                <td>{{ $case->recovered }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column is-6">
            <div class="total-box" style="margin-top: 20px; padding:10px">
                <canvas id="reportDate" width="400" height="400"></canvas>
                <progress id="animationProgressDate" max="1" value="0" style="display: none"></progress>
            </div>
        </div>
        <div class="column is-6">
            <div class="total-box" style="margin-top: 20px; padding:10px">
                <canvas id="reportDeaths" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="./js/quota.js?v=c298c7fa213d"></script>
<script>
    var urlState = "{{url('reportByState')}}";
    var urlDate = "{{url('reportByDate')}}";
</script>
<script type="text/javascript" src="{{ asset('js/chartjs/reportByState.js?v=c298c6f8233d')}}"></script>
<script type="text/javascript" src="{{ asset('js/chartjs/reportByDate.js?v=c298c6f8233d')}}"></script>
@endsection