import {
    CountUp
} from "./counterup.js";
const options = {
    duration: 5
};
window.onload = function() {
    var confirm = new CountUp("confirmed", 21, options);
    confirm.start();
    var deaths = new CountUp("deaths", 1);
    deaths.start();
    var recovered = new CountUp("recovered", 1);
    recovered.start();
    const apiUrl = "https://covidapi.info/api/v1/global";
    // const urlParams = new URLSearchParams(apiUrl);
    // // const product = urlParams.getAll('result');
    // console.log(urlParams);
    var confirm = new CountUp("golobal-confirmed", 1197405, options);
    confirm.start();
    var deaths = new CountUp("golobal-deaths", 64606);
    deaths.start();
    var recovered = new CountUp("golobal-recovered", 246152);
    recovered.start();
};