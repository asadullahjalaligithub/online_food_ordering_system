<?php 
session_start();
include('connection.php');
 $idd=$_GET['food_id'];
if(isset($_SESSION['id']))
{
$q=mysqli_query($con,"select tblvendor.fld_name,tbfood.fldimage, tblvendor.fldvendor_id, tblvendor.fld_email from tblvendor inner join tbfood on tblvendor.fldvendor_id=tbfood.fldvendor_id where tbfood.food_id='$idd'");
$res=mysqli_fetch_assoc($q);
$e=$res['fld_email'];
$img=$res['fldimage'];

unlink("image/restaurant/$e/foodimages/$img");

//rmdir("image/$e");

if(mysqli_query($con,"delete  from  tbfood where food_id='$idd' "))
{
	
	

    header( "refresh:5;url=food.php" );
 

	
}
else
{
	echo "failed to delete";
}
}
else
{
	header("location:vendor_login.php");
}
?>
<html>
  <head>
     <title>Admin control panel</title>

     <?php include('links.php'); ?>
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
  
  </head>
  
    
	<body>
	  <div class="container" style="margin:0px auto;text-align:center;">
     <p style="color:green;"> Please Wait While We Are Erasing Data</p>
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