import {
    CountUp
} from "./counterup.js";
const options = {
    duration: 5
};
window.onload = function() {
    var confirm = new CountUp("confirmed", 27, options);
    confirm.start();
    var deaths = new CountUp("deaths", 3, options);
    deaths.start();
    var recovered = new CountUp("recovered", 0);
    recovered.start();
    const apiUrl = "https://covidapi.info/api/v1/global";
    var gConfirmed = 0;
    var gDeaths = 0;
    var gRecovered = 0;
    fetch(apiUrl).then(res => res.json()).then(data => data.result).then(function(covidData) {
        gConfirmed = covidData.confirmed;
        gDeaths = covidData.deaths;
        gRecovered = covidData.recovered;
        console.log(gConfirmed);
        var confirm = new CountUp("golobal-confirmed", gConfirmed, options);
        confirm.start();
        var deaths = new CountUp("golobal-deaths", gDeaths);
        deaths.start();
        var recovered = new CountUp("golobal-recovered", gRecovered);
        recovered.start();
    })
};