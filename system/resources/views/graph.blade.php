@extends('layouts.app')

@section('content')
<div class="content">
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
                <canvas id="caseReport" width="400" height="400"></canvas>
                <progress id="casaeAnimationProgress" max="1" value="0" style="display: none"></progress>
            </div>
        </div>
    </div>
</div>
@endsection