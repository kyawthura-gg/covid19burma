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
    networkSeries.fontSize = 12;
    networkSeries.linkWithStrength = 0;
    var nodeTemplate = networkSeries.nodes.template;
    nodeTemplate.tooltipText = "{name}";
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
        "value": 45,
    }, {
        "name": "CASE 2",
        "value": 45,
    }, {
        "name": "CASE 3",
        "value": 70,
        "children": [{
            "name": "CASE 6",
            "value": 45
        }]
    }, {
        "name": "CASE 4",
        "value": 45,
    }, {
        "name": "CASE 5",
        "value": 70,
        "children": [{
            "name": "CASE 10",
            "value": 45
        }]
    }, {
        "name": "CASE 7",
        "value": 45,
    }, {
        "name": "CASE 8",
        "value": 70,
        "linkWith": ["CASE 15"],
        "children": [{
            "name": "CASE 11",
            "value": 45
        }, {
            "name": "CASE 12",
            "value": 45
        }, {
            "name": "CASE 13",
            "value": 45
        }]
    }, {
        "name": "CASE 9",
        "value": 45,
    }, {
        "name": "CASE 10",
        "value": 45,
    }, {
        "name": "CASE 14",
        "value": 45,
    }, {
        "name": "CASE 15",
        "value": 70,
        "children": [{
            "name": "CASE 17",
            "value": 45
        }, {
            "name": "CASE 18",
            "value": 45
        }, {
            "name": "CASE 19",
            "value": 45
        }, {
            "name": "CASE 20",
            "value": 45
        }]
    }, {
        "name": "CASE 16",
        "value": 45,
    }, {
        "name": "CASE 21",
        "value": 45,
        "children": [{
            "name": "CASE 22",
            "value": 45
        }, ]
    }, ];
});