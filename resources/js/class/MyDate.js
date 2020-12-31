module.exports = class MyDate {
     constructor() {
          this.days = [
               "Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"
          ];

          this.months = [
               "Ene", "Feb", "Mar", "Abr",
               "May", "Jun", "Jul", "Ago",
               "Sep", "Oct", "Nov", "Dic"
          ];
     }
     calculate() {
          const date = new Date();
          const currentDate = date.getDate();
          const currentDay = date.getDay();
          const currentMonth = date.getMonth();
          const currentYear = date.getFullYear();

          return `${ this.days[currentDay] }, ${ currentDate } ${ this.months[currentMonth] } ${ currentYear }`;
     }
}
