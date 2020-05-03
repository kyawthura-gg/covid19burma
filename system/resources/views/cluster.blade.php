@extends('layouts.app')

@section('content')
<style>
  .chart {
    width: 100%;
    height: 750px;
  }

  svg {
    cursor: default;
  }

  .link {
    fill: white;
    stroke: white;
    stroke-width: 1px;
  }

  .chart svg {
    width: 1000px
  }

  g text {
    fill: #e3e1e1;
  }
</style>
<div class="container">
  <article class="message is-warning">
    <div class="message-body">
      <strong>Cluster</strong> is still under process.
    </div>
  </article>
  <div class="chart"></div>
</div>
<!-- Styles -->


<!-- Resources -->
<script src="{{ asset('js/d3.js') }}"></script>
<script type="application/json" id="mis">
  {
    "nodes": [{
        "case": 1,
        "gender": "none",
        "age": "36",
        "value": 15
      }, {
        "case": 1,
        "gender": "Male",
        "age": "36",
        "value": 15
      }, {
        "case": 2,
        "gender": "Male",
        "age": "26",
        "value": 15
      },
      {
        "case": 3,
        "gender": "Male",
        "age": "26",
        "value": 15
      },
      {
        "case": 4,
        "gender": "Male",
        "age": "33",
        "value": 15
      },
      {
        "case": 5,
        "gender": "Male",
        "age": "69",
        "value": 15
      },
      {
        "case": 6,
        "gender": "Male",
        "age": "29",
        "value": 15
      },
      {
        "case": 7,
        "gender": "Female",
        "age": "58",
        "value": 15
      },
      {
        "case": 8,
        "gender": "Female",
        "age": "60",
        "value": 15
      },
      {
        "case": 9,
        "gender": "Male",
        "age": "44",
        "value": 15
      },
      {
        "case": 10,
        "gender": "Male",
        "age": "45",
        "value": 15
      },
      {
        "case": 11,
        "gender": "Female",
        "age": "66",
        "value": 15
      },
      {
        "case": 12,
        "gender": "Male",
        "age": "65",
        "value": 15
      },
      {
        "case": 13,
        "gender": "Female",
        "age": "61",
        "value": 15
      },
      {
        "case": 14,
        "gender": "Male",
        "age": "24",
        "value": 15
      },
      {
        "case": 15,
        "gender": "Female",
        "age": "45",
        "value": 15
      },
      {
        "case": 16,
        "gender": "Female",
        "age": "63",
        "value": 15
      },
      {
        "case": 17,
        "gender": "Male",
        "age": "47",
        "value": 15
      },
      {
        "case": 18,
        "gender": "Male",
        "age": "10",
        "value": 15
      },
      {
        "case": 19,
        "gender": "Female",
        "age": "8",
        "value": 15
      },
      {
        "case": 20,
        "gender": "Female",
        "age": "18",
        "value": 15
      },
      {
        "case": 21,
        "gender": "Female",
        "age": "24",
        "value": 15
      },
      {
        "case": 22,
        "gender": "Female",
        "age": "51",
        "value": 15
      },
      {
        "case": 23,
        "gender": "Female",
        "age": "58",
        "value": 15
      },
      {
        "case": 24,
        "gender": "Male",
        "age": "32",
        "value": 15
      },
      {
        "case": 25,
        "gender": "Male",
        "age": "55",
        "value": 15
      },
      {
        "case": 26,
        "gender": "Female",
        "age": "56",
        "value": 15
      },
      {
        "case": 27,
        "gender": "Female",
        "age": "24",
        "value": 15
      },
      {
        "case": 28,
        "gender": "Male",
        "age": "63",
        "value": 15
      },
      {
        "case": 29,
        "gender": "Male",
        "age": "26",
        "value": 15
      },
      {
        "case": 30,
        "gender": "Female",
        "age": "58",
        "value": 15
      },
      {
        "case": 31,
        "gender": "Female",
        "age": "49",
        "value": 15
      },
      {
        "case": 32,
        "gender": "Male",
        "age": "38",
        "value": 15
      },
      {
        "case": 33,
        "gender": "Female",
        "age": "29",
        "value": 15
      },
      {
        "case": 34,
        "gender": "Male",
        "age": "20",
        "value": 15
      },
      {
        "case": 35,
        "gender": "Male",
        "age": "24",
        "value": 15
      },
      {
        "case": 36,
        "gender": "Male",
        "age": "33",
        "value": 15
      },
      {
        "case": 37,
        "gender": "Male",
        "age": "44",
        "value": 15
      },
      {
        "case": 38,
        "gender": "Female",
        "age": "78",
        "value": 15
      },
      {
        "case": 39,
        "gender": "Male",
        "age": "85",
        "value": 15
      },
      {
        "case": 40,
        "gender": "Female",
        "age": "68",
        "value": 15
      },
      {
        "case": 41,
        "gender": "Male",
        "age": "38",
        "value": 15
      },
      {
        "case": 42,
        "gender": "Female",
        "age": "43",
        "value": 15
      },
      {
        "case": 43,
        "gender": "Female",
        "age": "41",
        "value": 15
      },
      {
        "case": 44,
        "gender": "Female",
        "age": "32",
        "value": 15
      },
      {
        "case": 45,
        "gender": "Male",
        "age": "54",
        "value": 15
      },
      {
        "case": 46,
        "gender": "Male",
        "age": "44",
        "value": 15
      },
      {
        "case": 47,
        "gender": "Female",
        "age": "50",
        "value": 15
      },
      {
        "case": 48,
        "gender": "Male",
        "age": "31",
        "value": 15
      },
      {
        "case": 49,
        "gender": "Male",
        "age": "35",
        "value": 15
      },
      {
        "case": 50,
        "gender": "Male",
        "age": "41",
        "value": 15
      },
      {
        "case": 51,
        "gender": "Male",
        "age": "49",
        "value": 15
      },
      {
        "case": 52,
        "gender": "Female",
        "age": "40",
        "value": 15
      },
      {
        "case": 53,
        "gender": "Male",
        "age": "31",
        "value": 15
      },
      {
        "case": 54,
        "gender": "Female",
        "age": "7",
        "value": 15
      },
      {
        "case": 55,
        "gender": "Male",
        "age": "40",
        "value": 15
      },
      {
        "case": 56,
        "gender": "Female",
        "age": "33",
        "value": 15
      },
      {
        "case": 57,
        "gender": "Female",
        "age": "39",
        "value": 15
      },
      {
        "case": 58,
        "gender": "Female",
        "age": "46",
        "value": 15
      },
      {
        "case": 59,
        "gender": "Female",
        "age": "23",
        "value": 15
      },
      {
        "case": 60,
        "gender": "Male",
        "age": "39",
        "value": 15
      },
      {
        "case": 61,
        "gender": "Male",
        "age": "38",
        "value": 15
      },
      {
        "case": 62,
        "gender": "Female",
        "age": "30",
        "value": 15
      },
      {
        "case": 63,
        "gender": "Male",
        "age": "65",
        "value": 15
      },
      {
        "case": 64,
        "gender": "Male",
        "age": "23",
        "value": 15
      },
      {
        "case": 65,
        "gender": "Female",
        "age": "57",
        "value": 15
      },
      {
        "case": 66,
        "gender": "Female",
        "age": "75",
        "value": 15
      },
      {
        "case": 67,
        "gender": "Female",
        "age": "27",
        "value": 15
      },
      {
        "case": 68,
        "gender": "Male",
        "age": "37",
        "value": 15
      },
      {
        "case": 69,
        "gender": "Male",
        "age": "34",
        "value": 15
      },
      {
        "case": 70,
        "gender": "Female",
        "age": "31",
        "value": 15
      },
      {
        "case": 71,
        "gender": "Female",
        "age": "32",
        "value": 15
      },
      {
        "case": 72,
        "gender": "Female",
        "age": "27",
        "value": 15
      },
      {
        "case": 73,
        "gender": "Female",
        "age": "29",
        "value": 15
      },
      {
        "case": 74,
        "gender": "Male",
        "age": "63",
        "value": 15
      },
      {
        "case": 75,
        "gender": "Female",
        "age": "35",
        "value": 15
      },
      {
        "case": 76,
        "gender": "Male",
        "age": "20",
        "value": 15
      },
      {
        "case": 77,
        "gender": "Female",
        "age": "33",
        "value": 15
      },
      {
        "case": 78,
        "gender": "Male",
        "age": "67",
        "value": 15
      },
      {
        "case": 79,
        "gender": "Male",
        "age": "43",
        "value": 15
      },
      {
        "case": 80,
        "gender": "Male",
        "age": "28",
        "value": 15
      },
      {
        "case": 81,
        "gender": "Female",
        "age": "28",
        "value": 15
      },
      {
        "case": 82,
        "gender": "Female",
        "age": "38",
        "value": 15
      },
      {
        "case": 83,
        "gender": "Male",
        "age": "63",
        "value": 15
      },
      {
        "case": 84,
        "gender": "Male",
        "age": "40",
        "value": 15
      },
      {
        "case": 85,
        "gender": "Male",
        "age": "77",
        "value": 15
      },
      {
        "case": 86,
        "gender": "Male",
        "age": "78",
        "value": 15
      },
      {
        "case": 87,
        "gender": "Male",
        "age": "62",
        "value": 15
      },
      {
        "case": 88,
        "gender": "Female",
        "age": "47",
        "value": 15
      },
      {
        "case": 89,
        "gender": "Male",
        "age": "50",
        "value": 15
      },
      {
        "case": 90,
        "gender": "Female",
        "age": "57",
        "value": 15
      },
      {
        "case": 91,
        "gender": "Male",
        "age": "60",
        "value": 15
      },
      {
        "case": 92,
        "gender": "Male",
        "age": "24",
        "value": 15
      },
      {
        "case": 93,
        "gender": "Male",
        "age": "36",
        "value": 15
      },
      {
        "case": 94,
        "gender": "Male",
        "age": "39",
        "value": 15
      },
      {
        "case": 95,
        "gender": "Male",
        "age": "1",
        "value": 15
      },
      {
        "case": 96,
        "gender": "Male",
        "age": "43",
        "value": 15
      },
      {
        "case": 97,
        "gender": "Female",
        "age": "43",
        "value": 15
      },
      {
        "case": 98,
        "gender": "Female",
        "age": "20",
        "value": 15
      },
      {
        "case": 99,
        "gender": "Male",
        "age": "38",
        "value": 15
      },
      {
        "case": 100,
        "gender": "Male",
        "age": "44",
        "value": 15
      },
      {
        "case": 101,
        "gender": "Male",
        "age": "60",
        "value": 15
      },
      {
        "case": 102,
        "gender": "Male",
        "age": "42",
        "value": 15
      },
      {
        "case": 103,
        "gender": "Male",
        "age": "31",
        "value": 15
      },
      {
        "case": 104,
        "gender": "Female",
        "age": "35",
        "value": 15
      },
      {
        "case": 105,
        "gender": "Female",
        "age": "44",
        "value": 15
      },
      {
        "case": 106,
        "gender": "Male",
        "age": "26",
        "value": 15
      },
      {
        "case": 107,
        "gender": "Female",
        "age": "54",
        "value": 15
      },
      {
        "case": 108,
        "gender": "Female",
        "age": "85",
        "value": 15
      },
      {
        "case": 109,
        "gender": "Male",
        "age": "37",
        "value": 15
      },
      {
        "case": 110,
        "gender": "Male",
        "age": "63",
        "value": 15
      },
      {
        "case": 111,
        "gender": "Female",
        "age": "54",
        "value": 15
      },
      {
        "case": 112,
        "gender": "Female",
        "age": "29",
        "value": 15
      },
      {
        "case": 113,
        "gender": "Female",
        "age": "65",
        "value": 15
      },
      {
        "case": 114,
        "gender": "Male",
        "age": "52",
        "value": 15
      },
      {
        "case": 115,
        "gender": "Male",
        "age": "19",
        "value": 15
      },
      {
        "case": 116,
        "gender": "Male",
        "age": "17",
        "value": 15
      },
      {
        "case": 117,
        "gender": "Female",
        "age": "10",
        "value": 15
      },
      {
        "case": 118,
        "gender": "Female",
        "age": "31",
        "value": 15
      },
      {
        "case": 119,
        "gender": "Female",
        "age": "31",
        "value": 15
      },
      {
        "case": 120,
        "gender": "Female",
        "age": "21",
        "value": 15
      },
      {
        "case": 121,
        "gender": "Female",
        "age": "21",
        "value": 15
      },
      {
        "case": 122,
        "gender": "Male",
        "age": "28",
        "value": 15
      },
      {
        "case": 123,
        "gender": "Female",
        "age": "18",
        "value": 15
      },
      {
        "case": 124,
        "gender": "Male",
        "age": "45",
        "value": 15
      },
      {
        "case": 125,
        "gender": "Male",
        "age": "18",
        "value": 15
      },
      {
        "case": 126,
        "gender": "Male",
        "age": "47",
        "value": 15
      },
      {
        "case": 127,
        "gender": "Female",
        "age": "24",
        "value": 15
      },
      {
        "case": 128,
        "gender": "Male",
        "age": "54",
        "value": 15
      },
      {
        "case": 129,
        "gender": "Female",
        "age": "31",
        "value": 15
      },
      {
        "case": 130,
        "gender": "Female",
        "age": "65",
        "value": 15
      },
      {
        "case": 131,
        "gender": "Female",
        "age": "28",
        "value": 15
      },
      {
        "case": 132,
        "gender": "Male",
        "age": "80",
        "value": 15
      },
      {
        "case": 133,
        "gender": "Male",
        "age": "45",
        "value": 15
      },
      {
        "case": 134,
        "gender": "Male",
        "age": "35",
        "value": 15
      },
      {
        "case": 135,
        "gender": "Female",
        "age": "35",
        "value": 15
      },
      {
        "case": 136,
        "gender": "Male",
        "age": "25",
        "value": 15
      },
      {
        "case": 137,
        "gender": "Female",
        "age": "31",
        "value": 15
      },
      {
        "case": 138,
        "gender": "Male",
        "age": "53",
        "value": 15
      },
      {
        "case": 139,
        "gender": "Female",
        "age": "26",
        "value": 15
      },
      {
        "case": 140,
        "gender": "Female",
        "age": "39",
        "value": 15
      },
      {
        "case": 141,
        "gender": "Male",
        "age": "28",
        "value": 15
      },
      {
        "case": 142,
        "gender": "Male",
        "age": "35",
        "value": 15
      },
      {
        "case": 143,
        "gender": "Female",
        "age": "87",
        "value": 15
      },
      {
        "case": 144,
        "gender": "Male",
        "age": "24",
        "value": 15
      },
      {
        "case": 145,
        "gender": "Male",
        "age": "48",
        "value": 15
      },
      {
        "case": 146,
        "gender": "Male",
        "age": "32",
        "value": 15
      },
      {
        "case": 147,
        "gender": "Male",
        "age": "43",
        "value": 15
      },
      {
        "case": 148,
        "gender": "Male",
        "age": "19",
        "value": 15
      },
      {
        "case": 149,
        "gender": "Male",
        "age": "15",
        "value": 15
      },
      {
        "case": 150,
        "gender": "Female",
        "age": "18",
        "value": 15
      },
      {
        "case": 151,
        "gender": "Female",
        "age": "25",
        "value": 15
      },
      {
        "case": 152,
        "gender": "Female",
        "age": "32",
        "value": 15
      },
      {
        "case": 153,
        "gender": "Female",
        "age": "19",
        "value": 15
      },
      {
        "case": 154,
        "gender": "Female",
        "age": "20",
        "value": 15
      },
      {
        "case": 155,
        "gender": "Male",
        "age": "48",
        "value": 15
      }


    ],
    "links": [{
      "source": 3,
      "target": 6,
      "value": 2
    }, {
      "source": 5,
      "target": 10,
      "value": 2
    }, {
      "source": 8,
      "target": 11,
      "value": 2
    }, {
      "source": 8,
      "target": 12,
      "value": 2
    }, {
      "source": 8,
      "target": 13,
      "value": 2
    }]
  }
</script>
<script type="text/javascript">
  // To Case 14 is link with source. 
  var width = 1000,
    height = 900;

  var color = d3.scale.category20();

  var force = d3.layout.force()
    .charge(-120)
    .linkDistance(100)
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
    })

  node.append("text")
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