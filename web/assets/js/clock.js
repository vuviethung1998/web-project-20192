var countDownDate = new Date(Date.now() + 6);

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="countdown-clock"
  document.getElementById("countdown-clock").innerHTML =  "00:" + seconds + "s";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    location.href = 'http://localhost:8082/index.php?controller=players&action=render_room_main_host'
  }
}, 1000);