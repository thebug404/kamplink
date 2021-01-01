module.exports = class TimeUI {
     constructor() {
          this.imageBox = document.getElementById("image-section");
          this.timeBox = document.getElementById("time-section");
          this.dateBox = document.getElementById("date-section");
     }

     /**
      * 
      * @param {string} date 
      * @param {string} time 
      */
     writeData(date, time) {
          if (this.dateBox && this.timeBox && this.imageBox) {
               this.timeBox.textContent = time;
               this.dateBox.textContent = date;

               const hours = new Date().getHours();

               if (hours >= 0 && hours < 14) {
                    this.imageBox.src = "/icons/dawn.svg";
               }

               if (hours >= 14 && hours < 18) {
                    this.imageBox.src = "/icons/sunset.svg"
               }

               if (hours >= 18 && hours < 24) {
                    this.imageBox.src = "/icons/night.svg"
               }
          }
     }
}
