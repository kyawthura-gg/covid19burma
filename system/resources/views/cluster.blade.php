@extends('layouts.app')

@section('content')
<div class="container">
	<div id="chartdiv"></div>
	
</div>
<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
height:750px;
}
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/plugins/forceDirected.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/dark.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<script type="text/javascript" src="./js/cluster.js"></script>
@endsection