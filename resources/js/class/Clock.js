module.exports = class Clock {
     calculate() {
       const date = new Date();
       const hours = date.getHours();
       const minutes = date.getMinutes();

       return `${ this.parseHours(hours) }:${ this.parseMinutes(minutes) }`;
     }

     parseMinutes(minutes) {
       let minuteString = "";

       if (minutes < 10) {
          minuteString = `0${ minutes }`
       } else {
          minuteString = minutes;
       }

       return minuteString;
     }

     parseHours(hours) {
       let hourString = "";

       if (hours > 12) {
         hours = hours - 12;
         hourString = String(hours);
       }

       if (hours < 10) {
         hourString = `0${ hours }`;
       }

       return hourString;
     }
}