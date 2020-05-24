@extends('layouts.app')

@section('content')
<div class="content">
    <div class="columns">
        <div class="column is-4">
            <div class="total-box">
                <canvas id="caseReport" width="400" height="400"></canvas>
                <progress id="caseAnimationProgress" max="1" value="0" style="display: none"></progress>
            </div>
        </div>
        <div class="column is-4">
            <div class="total-box">
                <canvas id="deathReport" width="400" height="400"></canvas>
                <progress id="deathAnimationProgress" max="1" value="0" style="display: none"></progress>
            </div>
        </div>
        <div class="column is-4">
            <div class="total-box">
                <canvas id="recoverReport" width="400" height="400"></canvas>
                <progress id="recoverAnimationProgress" max="1" value="0" style="display: none"></progress>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column is-4">
            <div class="total-box">
                <canvas id="reportDate" width="400" height="400"></canvas>
                <progress id="animationProgressDate" max="1" value="0" style="display: none"></progress>
            </div>
        </div>
        <div class="column is-4">
            <div class="total-box">
                <canvas id="myChart" width="400" height="400"></canvas>
                <progress id="animationProgress" max="1" value="0" style="display: none"></progress>
            </div>
        </div>
        <div class="column is-4">
            <div class="total-box">
                <canvas id="activeReport" width="400" height="400"></canvas>
                <progress id="activeAnimationProgress" max="1" value="0" style="display: none"></progress>
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
    var daily = "{{trans('home.daily')}}";
</script>
<script type="text/javascript" src="{{ asset('js/chartjs/caseReport.js?v=c298cs6saaafa8233d')}}"></script>
<script type="text/javascript" src="{{ asset('js/chartjs/deathReport.js?v=c298cs6saaafa8233d')}}"></script>
<script type="text/javascript" src="{{ asset('js/chartjs/recoverReport.js?v=c298acs6saafa8233d')}}"></script>
<script type="text/javascript" src="{{ asset('js/chartjs/reportByDate.js?v=c298cs6saafa8233d')}}"></script>
<script type="text/javascript" src="{{ asset('js/chartjs/reportByState.js?v=c298csasas6safa8233d')}}"></script>
<script type="text/javascript" src="{{ asset('js/chartjs/activeReport.js?v=c298acs6saafa8233d')}}"></script>
@endsection