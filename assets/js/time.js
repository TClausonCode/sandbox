
startTime();
function startTime() {
    var today = new Date();
    var hour = today.getHours();
    var minute = today.getMinutes();
    var second = today.getSeconds();
    
    var weekDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    var day = today.getDate();
    var months = ["January","Feburary","March","April","May","June","July","August","September","October","November","December"];
    var year = today.getFullYear();
    
    minute = checkTime(minute);
    second = checkTime(second);
  
    document.getElementById('clock').innerHTML = hour + ":" + minute + ":" + second;
  
    if(day === 1){
      document.getElementById('todaysDate').innerHTML = "Today is "+weekDays[today.getDay()]+", the "+day+"st of "+months[today.getMonth()]+", "+year;
    }
    if(day === 2){
      document.getElementById('todaysDate').innerHTML = "Today is "+weekDays[today.getDay()]+", the "+day+"nd of "+months[today.getMonth()]+", "+year;
    }
    if(day === 3){
      document.getElementById('todaysDate').innerHTML = "Today is "+weekDays[today.getDay()]+", the "+day+"rd of "+months[today.getMonth()]+", "+year;
    }
    else{
      document.getElementById('todaysDate').innerHTML = "Today is "+weekDays[today.getDay()]+", the "+day+"th of "+months[today.getMonth()]+", "+year;
    }
  
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i} // add zero in front of numbers < 10
    return i;
}