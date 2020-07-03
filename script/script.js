

// CountdownSR

var countDownDateSR = new Date("Jul 08, 2020 15:00:00").getTime();


var x = setInterval( ()=> {

  
  var now = new Date().getTime();
  var distance = countDownDateSR - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    

  
// Output the result in an element with id="demo"
try{
document.getElementById("countdownSR").innerHTML = days + " jours " + hours + " heures "
+ minutes + " minutes " + seconds + " secondes ";
}catch(e){
 
}
// If the count down is over, write some text 
if (distance < 0) {
  clearInterval(x);
  document.getElementById("countdownSR").innerHTML = "EXPIRED";
}
}, 1000);


