@extends('layouts.app')

@section('content')
<style>
  /* .chart {
    width: 100%;
    height: 750px;
  }

  svg {
    cursor: default;
  } */

  .link {
    fill: white;
    stroke: white;
    stroke-width: 1px;
  }

  /* .chart svg {
    width: 1000px
  } */

  g text {
    fill: #e3e1e1;
  }

  .cluster-tooltip {
    opacity: 0;
    position: absolute;
    z-index: 10;
    font-size: 18px;
    font-weight: 500;
    border-radius: 10px;
    border: 1px solid white;
    color: white;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 20px;
    padding-left: 20px;
    background: black;
  }

  .legend text {
    font-size: 14px;
    font-weight: bold;
    fill: gray;
  }

  .legend .legend--male-color {
    fill: #1e8dfc;
  }

  .legend .legend--female-color {
    fill: #fc7e1e;
  }
</style>
<div class="container">
  <article class="message is-warning" style="margin-bottom: 3px">
    <div class="message-body">
      <strong>Cluster</strong> is still under process.
    </div>
  </article>
  <div class="cluster chart"></div>
</div>
<!-- Styles -->


<!-- Resources -->
<script src="{{ asset('js/d3.js') }}"></script>
<script type="text/javascript">
  // To Case 14 is link with source. 
  var width = 1000,
    height = 900;

  var color = d3.scale.category20();

  var force = d3.layout.force()
    .charge(-120)
    .linkDistance(100)
    .size([width, height]);

  // var zoom = d3.behavior.zoom()
  //   .scaleExtent([1, 10])
  //   .on("zoom", zoomed);

  var svg = d3.select(".chart").append("svg")
    .attr("width", width)
    // .call(zoom)
    .attr("viewBox", '10 100 1000 750')
    .attr("height", height);
  legend = svg.append('g')
    .attr('class', 'legend');

  male = legend.append('g')
    .attr('class', 'legend legend--male');

  male.append('rect')
    .attr('class', 'legend legend--color legend--male-color')
    .attr('height', '20px')
    .attr('width', '20px')

  male.append('text')
    .attr('class', 'legend legend--text')
    .attr('text-anchor', 'start')
    .text('Male');

  female = legend.append('g')
    .attr('class', 'legend legend--female');

  female.append('rect')
    .attr('class', 'legend legend--color legend--female-color')
    .attr('height', '20px')
    .attr('width', '20px')

  female.append('text')
    .attr('class', 'legend legend--text')
    .attr('text-anchor', 'start')
    .text('Female');

  d3.json("js/graph.json", function(error, graph) {
    if (error) throw error;
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
      .attr("id", "circleBasicTooltip")
      .attr("r", function(d) {
        return d.value;
      })
      .style("display", function(d) {
        if (d.gender == "none") {
          return "none";
        }
      })
      .style("fill", function(d) {
        if (d.gender == "Male") {
          return "#1e8dfc";
        } else if (d.gender == "Female") {
          return "#fc7e1e";
        } else if (d.gender == "unknown") {

        }

        node.append("text")
          .attr("class", "text-name")
          .attr("text-anchor", "middle")
          .attr("dy", ".35em")
          .style("display", function(d) {
            if (d.gender == "none") {
              return "none";
            }
          })
          .text(function(d) {
            return d.case
          });
      })



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

      d3.selectAll("circle")
        .attr("cx", function(d) {
          return d.x;
        })
        .attr("cy", function(d) {
          return d.y;
        });

      d3.selectAll("text.text-name").attr("x", function(d) {
          return d.x;
        })
        .attr("y", function(d) {
          return d.y;
        });
      d3.selectAll("g.node")
        .on("mouseover", mouseover)
        .on("mousemove", mousemove)
        .on("mouseleave", mouseleave);

      d3.selectAll('.legend--color')
        .attr('x', width - 100)
        .attr('y', height - 60);
      d3.selectAll('.legend--text')
        .attr('x', width - 100 + 25)
        .attr('y', height - 60 + 14);
      d3.select('.legend--female')
        .attr('transform', 'translate(0' + ',' + 25 + ')');

    });
  });



  var tooltip = d3.select(".chart")
    .append("div")
    .attr("class", "cluster-tooltip")
  // .style("opacity", 0)

  // Three function that change the tooltip when user hover / move / leave a cell
  var mouseover = function(d) {
    width = window.innerWidth;
    var left = d3.event.pageX;
    tooltip
      .style("opacity", 1)
      .html("Case: " + d.case+"<br />Age: " + d.age + "<br />Gender: " + d.gender)
      .style("top", ((d3.event.pageY) - 50) + "px")
    if (width > 700) {
      tooltip
        .style("left", left + "px")
    } else {
      console.log(left);
      if (left > 250) {
        tooltip
          .style("left", left - 100 + "px")
      } else {
        tooltip
          .style("left", left + "px")
      }
    }
  }
  var mousemove = function(d) {
    width = window.innerWidth;
    var left = d3.event.pageX;
    tooltip
      .style("opacity", 1)
      .html("Case: " + d.case+"<br />Age: " + d.age + "<br />Gender: " + d.gender)
      .style("top", ((d3.event.pageY) - 50) + "px")
    if (width > 700) {
      tooltip
        .style("left", left + "px")
    } else {
      console.log(left);
      if (left > 250) {
        tooltip
          .style("left", left - 100 + "px")
      } else {
        tooltip
          .style("left", left + "px")
      }
    }
  }
  var mouseleave = function(d) {
    tooltip
      .style("opacity", 0)
  }

  resize();
  d3.select(window).on("resize", resize);

  function resize() {
    width = window.width, height = window.height;
    svg.attr("width", width).attr("height", height);
    force.size([width, height]).resume();
  }

  // function zoomed() {
  //   svg.attr("transform", "translate(" + d3.event.translate + ")scale(" + d3.event.scale + ")");
  // }
</script>

@endsection