var date = new Date();
var monthNames = ["January","February","March","April","May","June","July","August","September","October","November","December"];
var month = monthNames[date.getMonth()];
var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday",]
var day = dayNames[date.getDay()];
var time = date.getTime();
var dateNum = date.getDate();
var year = date.getFullYear();

var hours = date.getHours();
var AmOrPm = hours >= 12 ? 'pm' : 'am';
hours = (hours % 12) || 12;
var minutes = date.getMinutes() ;
var finalTime = "Time  - " + hours + ":" + minutes + " " + AmOrPm; 
finalTime

var dDay = document.getElementById("day");
dDay.textContent = day + ", " + month + " " + dateNum + ", " + year + ", " + hours + ":" + minutes + " " + AmOrPm;


var printReport = document.getElementById("print");
var back = document.getElementById("reportBack");

 printReport.addEventListener('click', function(){
    printReport.style.display = "none";
    back.style.display = "none";
    setTimeout(function() {
        printReport.style.display = "inline";
        back.style.display = "inline";
        }, 1000);
    window.print();
 })