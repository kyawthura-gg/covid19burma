am4core.ready(function() {
    // Themes begin
    am4core.useTheme(am4themes_dark);
    am4core.useTheme(am4themes_animated);
    // Themes end
    var chart = am4core.create("chartdiv", am4plugins_forceDirected.ForceDirectedTree);
    var networkSeries = chart.series.push(new am4plugins_forceDirected.ForceDirectedSeries())
    networkSeries.dataFields.linkWith = "linkWith";
    networkSeries.dataFields.name = "name";
    networkSeries.dataFields.id = "name";
    networkSeries.dataFields.value = "value";
    networkSeries.dataFields.children = "children";
    networkSeries.nodes.template.label.text = "{name}"
    networkSeries.fontSize = 8;
    networkSeries.linkWithStrength = 0;
    var nodeTemplate = networkSeries.nodes.template;
    nodeTemplate.tooltipText = `[bold] {name}[/]
    ---------------
    Age: {Age}
    Gender: {Gender}  `;
    nodeTemplate.fillOpacity = 1;
    nodeTemplate.label.hideOversized = true;
    nodeTemplate.label.truncate = true;
    var linkTemplate = networkSeries.links.template;
    linkTemplate.strokeWidth = 2;
    linkTemplate.strokeOpacity = 1;
    var linkHoverState = linkTemplate.states.create("hover");
    linkHoverState.properties.strokeOpacity = 1;
    linkHoverState.properties.strokeWidth = 2;
    nodeTemplate.events.on("over", function(event) {
        var dataItem = event.target.dataItem;
        dataItem.childLinks.each(function(link) {
            link.isHover = true;
        })
    })
    nodeTemplate.events.on("out", function(event) {
        var dataItem = event.target.dataItem;
        dataItem.childLinks.each(function(link) {
            link.isHover = false;
        })
    })
    networkSeries.data = [{
        "name": "CASE 1",
        "value": 30,
        "Gender": "Male",
        "Age": "36",
        "children": [{
            "name": "CASE 23",
            "value": 20,
            "Gender": "Female",
            "Age": "58"
        }]
    }, {
        "name": "CASE 2",
        "value": 20,
        "Gender": "Male",
        "Age": "26"
    }, {
        "name": "CASE 3",
        "value": 30,
        "Gender": "Male",
        "Age": "26",
        "children": [{
            "name": "CASE 6",
            "value": 20,
            "Gender": "Male",
            "Age": "29"
        }]
    }, {
        "name": "CASE 4",
        "value": 20,
        "Gender": "Male",
        "Age": "33"
    }, {
        "name": "CASE 5",
        "value": 30,
        "Gender": "Male",
        "Age": "69",
        "children": [{
            "name": "CASE 10",
            "value": 20,
            "Gender": "Male",
            "Age": "20"
        }]
    }, {
        "name": "CASE 7",
        "value": 20,
        "Gender": "Female",
        "Age": "58",
    }, {
        "name": "CASE 8",
        "value": 30,
        "Gender": "Female",
        "Age": "60",
        "linkWith": ["CASE 15"],
        "children": [{
            "name": "CASE 11",
            "value": 20,
            "Gender": "Female",
            "Age": "66",
        }, {
            "name": "CASE 12",
            "value": 20,
            "Gender": "Male",
            "Age": "69",
        }, {
            "name": "CASE 13",
            "value": 20,
            "Gender": "Female",
            "Age": "61",
        }]
    }, {
        "name": "CASE 9",
        "value": 20,
        "Gender": "Male",
        "Age": "44",
    }, {
        "name": "CASE 14",
        "value": 20,
        "Gender": "Male",
        "Age": "24",
    }, {
        "name": "CASE 15",
        "value": 30,
        "Gender": "Female",
        "Age": "20",
        "children": [{
            "name": "CASE 17",
            "value": 20,
            "Gender": "Male",
            "Age": "47",
        }, {
            "name": "CASE 18",
            "value": 20,
            "Gender": "Male",
            "Age": "10",
        }, {
            "name": "CASE 19",
            "value": 20,
            "Gender": "Female",
            "Age": "8",
        }, {
            "name": "CASE 20",
            "value": 20,
            "Gender": "Female",
            "Age": "18",
        }]
    }, {
        "name": "CASE 16",
        "value": 20,
        "Gender": "Female",
        "Age": "63",
    }, {
        "name": "CASE 21",
        "value": 20,
        "Gender": "Female",
        "Age": "24",
        "children": [{
            "name": "CASE 22",
            "value": 20,
            "Gender": "Femle",
            "Age": "51",
        }, ]
    }, {
        "name": "CASE 24",
        "value": 30,
        "Gender": "Male",
        "Age": "32",
        "children": [{
            "name": "CASE 36",
            "value": 20,
            "Gender": "Male",
            "Age": "33",
        }, {
            "name": "CASE 41",
            "value": 20,
            "Gender": "Male",
            "Age": "38",
        }, {
            "name": "CASE 62",
            "value": 20,
            "Gender": "Female",
            "Age": "30",
        }, {
            "name": "CASE 63",
            "value": 20,
            "Gender": "Male",
            "Age": "65",
        }, {
            "name": "CASE 42",
            "value": 20,
            "Gender": "Female",
            "Age": "43",
        }, {
            "name": "CASE 43",
            "value": 20,
            "Gender": "Female",
            "Age": "41",
        }, {
            "name": "CASE 44",
            "value": 20,
            "Gender": "Female",
            "Age": "32",
        }, {
            "name": "CASE 20",
            "value": 20,
            "Gender": "Male",
            "Age": "54",
        }, {
            "name": "CASE 46",
            "value": 20,
            "Gender": "Male",
            "Age": "44",
        }, {
            "name": "CASE 47",
            "value": 20,
            "Gender": "Female",
            "Age": "50",
        }, {
            "name": "CASE 48",
            "value": 20,
            "Gender": "Male",
            "Age": "31",
        }, {
            "name": "CASE 49",
            "value": 20,
            "Gender": "Male",
            "Age": "35",
        }, {
            "name": "CASE 50",
            "value": 20,
            "Gender": "Male",
            "Age": "41",
        }, {
            "name": "CASE 51",
            "value": 20,
            "Gender": "Male",
            "Age": "49",
        }, {
            "name": "CASE 52",
            "value": 20,
            "Gender": "Female",
            "Age": "40",
        }, {
            "name": "CASE 69",
            "value": 20,
            "Gender": "Male",
            "Age": "34",
        }, {
            "name": "CASE 70",
            "value": 20,
            "Gender": "Female",
            "Age": "31",
        }, {
            "name": "CASE 74",
            "value": 20,
            "Gender": "Male",
            "Age": "63",
        }, {
            "name": "CASE 75",
            "value": 20,
            "Gender": "Female",
            "Age": "35",
        }, {
            "name": "CASE 76",
            "value": 20,
            "Gender": "Male",
            "Age": "20",
        }, {
            "name": "CASE 77",
            "value": 20,
            "Gender": "Female",
            "Age": "33",
        }, {
            "name": "CASE 84",
            "value": 20,
            "Gender": "Male",
            "Age": "40",
        }, {
            "name": "CASE 89",
            "value": 20,
            "Gender": "Male",
            "Age": "50",
        }, {
            "name": "CASE 90",
            "value": 20,
            "Gender": "Female",
            "Age": "57",
        }, {
            "name": "CASE 91",
            "value": 20,
            "Gender": "Male",
            "Age": "60",
        }, {
            "name": "CASE 94",
            "value": 20,
            "Gender": "Male",
            "Age": "39",
        }]
    }, {
        "name": "CASE 25",
        "value": 20,
        "Gender": "Male",
        "Age": "55",
    }, {
        "name": "CASE 26",
        "value": 20,
        "Gender": "Female",
        "Age": "56",
        "linkWith": ["CASE 63"],
    }, {
        "name": "CASE 27",
        "value": 20,
        "Gender": "Female",
        "Age": "24",
    }, {
        "name": "CASE 34",
        "value": 20,
        "Gender": "Male",
        "Age": "20",
        "linkWith": ["CASE 35"],
        "linkWith": ["CASE 36"],
    }, {
        "name": "CASE 35",
        "value": 20,
        "Gender": "Mmale",
        "Age": "24",
        "linkWith": ["CASE 37"],
    }, {
        "name": "CASE 37",
        "value": 20,
        "Gender": "Male",
        "Age": "44",
        "linkWith": ["CASE 34"],
    }, ];
});