@extends('layouts.app')

@section('content')

<div class="chart">
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.min.js"></script>

<script type="text/javascript">
    var width = 500,
        height = 500;

    var color = d3.scale.category20();

    var force = d3.layout.force()
        .charge(-120)
        .linkDistance(80)
        .size([width, height]);

    var svg = d3.select(".chart").append("svg")
        .attr("width", width)
        .attr("height", height);

    var mis = document.getElementById('mis').innerHTML;
    graph = JSON.parse(mis);

    force.nodes(graph.nodes)
        .links(graph.links)
        .start();

    var link = svg.selectAll(".link")
        .data(graph.links)
        .enter().append("line")
        .attr("class", "link")
        .style("stroke-width", function(d) {
            return Math.sqrt(d.value);
        });

    var node = svg.selectAll(".node")
        .data(graph.nodes)
        .enter().append("g")
        .attr("class", "node")
        .call(force.drag);

    node.append("circle")
        .attr("r", function(d, i) {
            return i % 2 == 0 ? 10 : 8
        })
        .style("fill", function(d) {
            return color(d.group);
        })

    node.append("text")
        .attr("text-anchor", "middle")
        .attr("dy", ".35em")
        .text(function(d) {
            return d.group
        });

    force.on("tick", function() {
        link.attr("x1", function(d) {
                return d.source.x;
            })
            .attr("y1", function(d) {
                return d.source.y;
            })
            .attr("x2", function(d) {
                return d.target.x;
            })
            .attr("y2", function(d) {
                return d.target.y;
            });

        d3.selectAll("circle").attr("cx", function(d) {
                return d.x;
            })
            .attr("cy", function(d) {
                return d.y;
            });

        d3.selectAll("text").attr("x", function(d) {
                return d.x;
            })
            .attr("y", function(d) {
                return d.y;
            });

    });
</script>

@endsection