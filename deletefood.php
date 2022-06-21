<?php 
include('connection.php');
//echo $id=$_GET['id'];
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$q=mysqli_query($con,"select tbfood.fldimage,tblvendor.fld_email from tbfood inner join tblvendor on tbfood.fldvendor_id=tbfood.fldvendor_id where food_id='$id' ");
    $res=mysqli_fetch_assoc($q);
    $e=$res['fld_email'];
    $img=$res['fldimage'];
	unlink("image/restaurant/$e/foodimages/$img");
	if(mysqli_query($con,"delete  from  tbfood where food_id='$id' "))
     {
	
	
       
       header( "refresh:5;url=dashboard.php" );
 

	
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






//rmdir("image/$e/foodimages");
//rmdir("image/$e");

if(mysqli_query($con,"delete  from  tbfood where food_id='$id' "))
{
	
	

    header( "refresh:5;url=dashboard.php" );
 

	
}
else
{
	echo "failed to delete";
}
?>
<html>
  <head>
     <title>Hotel</title>
	
     <?php include('links.php'); ?>  <style>
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
     <p style="color:green;"> Please Wait We Are Updating</p>
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
