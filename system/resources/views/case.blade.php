@extends('layouts.app')

@section('content')
<style>
    circle {
        stroke-width: 1.5px;
    }

    line {
        stroke: #999;
    }
</style>
<script src="{{ asset('js/d3.js')}}"></script>
<div class="container">
    <div class="columns">
    </div>
</div>
<script>
    var width = 960,
        height = 500,
        radius = 6;

    var fill = d3.scale.category20();

    var force = d3.layout.force()
        .gravity(.05)
        .charge(-240)
        .linkDistance(50)
        .size([width, height]);

    var svg = d3.select("body").append("svg")
        .attr("viewBox", [-width / 2, -height / 2, width, height]);

    d3.json("js/graph.json", function(error, graph) {
        if (error) throw error;

        var link = svg.selectAll("line")
            .data(graph.links)
            .enter().append("line")
            .attr("stroke-width", d => Math.sqrt(d.value));

        // const link = svg.append("g")
        //     .attr("stroke", "#999")
        //     .attr("stroke-opacity", 0.6)
        //     .selectAll("line")
        //     .data(graph.links)
        //     .join("line")
        //     .attr("stroke-width", d => Math.sqrt(d.value));

        var node = svg.selectAll("circle")
            .data(graph.nodes)
            .enter().append("circle")
            .attr("r", radius - .75)
            .style("fill", function(d) {
                return fill(d.group);
            })
            .style("stroke", function(d) {
                return d3.rgb(fill(d.group)).darker();
            })
            .call(force.drag);

        force
            .nodes(graph.nodes)
            .links(graph.links)
            .on("tick", tick)
            .start();

        function tick() {
            node.attr("cx", function(d) {
                    return d.x = Math.max(radius, Math.min(width - radius, d.x));
                })
                .attr("cy", function(d) {
                    return d.y = Math.max(radius, Math.min(height - radius, d.y));
                });

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
        }
    });
</script>
@endsection