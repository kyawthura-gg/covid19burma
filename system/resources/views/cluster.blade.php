@extends('layouts.app')

@section('content')
<div class="container">
  <article class="message is-warning">
    <div class="message-body">
      <strong>Cluster</strong> haven't been updated since 06 April 2020
    </div>
  </article>
  <div id="chartdiv"></div>
</div>
<!-- Styles -->
<style>
  #chartdiv {
    width: 100%;
    height: 750px;
  }
</style>

<!-- Resources -->
<script src="./js/core.js"></script>
<script src="./js/charts.js"></script>
<script src="./js/forceDirected.js"></script>
<script type="text/javascript" src="./js/dark.js"></script>
<script type="text/javascript" src="./js/animated.js"></script>
<script type="text/javascript" src="./js/cluster.js?v=c298c6f8233d"></script>
@endsection