<!DOCTYPE html>
<html>
  <head>
    <title>JS Countdown</title>
  </head>
  <body>
    <span id="days">00</span>
    <span id="hours">00</span>
     <span id="minutes">00</span>
      <span id="seconds">00</span>
      
    <script src="countdown.js"></script>
  <script>
    countdown('09/30/2017 11:49:00',['days','hours','minutes','seconds'],function(){
      console.log('ok')
    });
  </script>
   <?php 
   session_start();
  $x = 100;
  $_SESSION['sessionVar'] = $x;
  echo "$x";
?>
  </body>
</html>