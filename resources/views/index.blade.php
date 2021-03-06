@extends('layouts.app')

@section('content')
<div class="content">
    <div class="sub-tab columns">
        <div class="column is-3">
            <div class="total-box" data-aos="fade-right" data-aos-delay="200">
                <div class="columns pb-15">
                    <div class="right-line column">
                        <p class="box-title">{{__('home.total')}} </p>
                        <div>
                            <label class="case-font" id="confirmed">0</label>
                            <span class="none" id="mm-confrim">{{$total_confirm}}</span>
                            <p>{{__('home.confirmed')}} 🤕</p>
                        </div>
                        <div>
                            <label class="death-font" id="deaths">0</label>
                            <span class="none" id="mm-deaths">{{$deaths}}</span>
                            <p>{{__('home.deaths')}} 💔</p>
                        </div>
                        <div>
                            <label class="recover-font" id="recovered">0</label>
                            <span class="none" id="mm-recovered">{{$recovered}}</span>
                            <p>{{__('home.recovered')}} 🤩</p>
                        </div>

                    </div>
                    <div class="column ml-20">
                        <p class="box-title">{{__('home.today')}} </p>
                        <div>
                            <span class="case-font"><i class="fas fa-arrow-up fa-xs"></i>&nbsp;</span><label class="case-font" id="confirmed">{{$today_confirm}}</label>
                            <p>{{__('home.confirmed')}} 🤕</p>
                        </div>
                        <div>
                            <span class="death-font"><i class="fas fa-arrow-up fa-xs"></i>&nbsp;</span><label class="death-font" id="deaths">{{$today_deaths}}</label>
                            <p>{{__('home.deaths')}} 💔</p>
                        </div>
                        <div>
                            <span class="recover-font"><i class="fas fa-arrow-up fa-xs"></i>&nbsp;</span><label class="recover-font" id="recovered">{{$today_recovered}}</label>
                            <p>{{__('home.recovered')}} 🤩</p>
                        </div>
                    </div>
                </div>
                <div class="columns is-vcentered is-centered">
                    <label class="recover-font is-size-4" id="active">0</label>
                    <span class="none" id="mm-active">{{$active}}</span>
                    &nbsp;&nbsp;&nbsp;<p class="box-title">{{__('home.active')}} 😰</p>
                </div>
            </div>
            <div class="total-box" style="margin-top: 20px; padding:10px" data-aos="fade-up" data-aos-delay="500">
                <canvas id="reportDate" width="400" height="400"></canvas>
                <progress id="animationProgressDate" max="1" value="0" style="display: none"></progress>
            </div>
        </div>
        <div class="column is-4" data-aos="fade-up" data-aos-delay="700">
            <x-map :state="$state" />
            <div class="description" style="text-align: left;">
            </div>
            <div class="status-div" data-aos="fade-up" data-aos-delay="1000">
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
        <div class="column is-5" data-aos="fade-up" data-aos-delay="1400">
            <div class="total-box">
                <div class="table-container">
                    <table class="table-background-color">
                        <thead>
                            <tr>
                                <th>
                                    {{__('home.state')}}
                                </th>
                                <th>
                                    {{__('home.confirmed')}}
                                </th>
                                <th>
                                    {{__('home.deaths')}}
                                </th>
                                <th>
                                    {{__('home.recovered')}}
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
</div>
<script>
    var urlState = "{{url('reportByState')}}";
    var byStateTitle = "{{trans('home.confirmbystate')}}";
    var dailyTitle = "{{trans('home.dailycases')}}";
    var urlDate = "{{url('reportByDate')}}";
    var confirmed = "{{trans('home.confirmed')}}";
    var deaths = "{{trans('home.deaths')}}";
    var recovered = "{{trans('home.recovered')}}";
</script>
<script type="text/javascript" src="{{ asset('js/chartjs/reportByDate.js?v=c298cs6safa8233d')}}"></script>
@endsection