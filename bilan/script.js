//approche objet

var chart = am4core.create("containerChart", "PieChart");

// Create pie series
var series = chart.series.push(new am4charts.PieSeries());
series.dataFields.value = "somme";
series.dataFields.category = "budget";

// Add data
chart.data = [{
    "budget": "Course",
    "somme": 100
}, {
    "budget": "Sortie",
    "somme": 100
}, {
    "budget": "Bar",
    "somme": 200
}];


chart.innerRadius = am4core.percent(40);
chart.legend = new am4charts.Legend();