import {
    CountUp
} from "./counterup.js";
const options = {
    duration: 5
};
window.onload = function() {
    var confirm = new CountUp("confirmed", 20, options);
    confirm.start();
    var deaths = new CountUp("deaths", 1);
    deaths.start();
    var recovered = new CountUp("recovered", 1);
    recovered.start();
};