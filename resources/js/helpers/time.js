const TimeUI = require("../class/TimeUI");
const timeUI = new TimeUI();

const Clock = require("../class/Clock");
const clock = new Clock();

const MyDate = require("../class/MyDate");
const myDate = new MyDate();

function runClock() {
     const date = myDate.calculate();
     const time = clock.calculate();
     timeUI.writeData(date, time);
}

setInterval(() => {
     runClock();
}, 1000);

// module.exports = runClock;
