
<html>
  <head>
     <title>Admin control panel</title>

     <?php include('links.php'); ?>t>
  <style>
  h1 {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
  </style>
  <script>
    $("dcoument").ready(function(){
		
		if(confirm("Please login With your New Password")== true)
		{
			window.location.href="admin.php";
		}
		
	});
  </script>
  
  </head>
  
    
	<body>
	  <div class="container" style="margin:0px auto;text-align:center;">
     <p style="color:green;"> Please Wait While We Are Updating</p>
	 <img src="img/lg.walking-clock-preloader.gif"/></div>
	   <h1><time>00</time></h1>
<script>
var h1 = document.getElementsByTagName('h1')[0],
    start = document.getElementById('start'),
    stop = document.getElementById('stop'),
    clear = document.getElementById('clear'),
    seconds = 0, minutes = 0, hours = 0,
    t;

function add() {
    seconds++;
    if (seconds >= 60) {
        seconds = 0;
        minutes++;
        if (minutes >= 60) {
            minutes = 0;
            hours++;
        }
    }
    
    h1.textContent =   (seconds > 9 ? seconds : "0" + seconds);

    timer();
}
function timer() {
    t = setTimeout(add, 1000);
}
timer();



</script>

	</body>
</html>