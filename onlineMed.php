<!DOCTYPE html>
<html>
<head> 
    <title>CFF-Home</title>
    <link rel="stylesheet" href="homePage.css">
    <script>
function myFunction() {
  alert("Please Enter your USER ID.");
}
</script>

    </head>
    
    <body>
    <header>
        
        <img src="IMG-20190310-WA0009.jpg" align=left width="" height="35px">
        <p align="right" id="donate"> <a href="" target="_blank">DONATE</a> </p>
        <br>
        
    
        </header>
        <div class="head">
<b>    
    <a href="" id="home">   &nbsp; &nbsp; &nbsp;HOME &nbsp; &nbsp; &nbsp;   &nbsp; </a>                  
<a href="">&nbsp; &nbsp; &nbsp; CANCER&nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; </a> 
<a href="">&nbsp; &nbsp;&nbsp; TYPES OF CANCER&nbsp;  &nbsp;  &nbsp; &nbsp; </a>

    <a href="">&nbsp; &nbsp; &nbsp; ONLINE MEDICINE&nbsp; &nbsp;  &nbsp;</a>
    <a href="">&nbsp; &nbsp; &nbsp; NURSING.COM&nbsp;  &nbsp;  &nbsp;  </a>

    <a href="">&nbsp; &nbsp; &nbsp; AWARENESS&nbsp; &nbsp; &nbsp; 
             </a>
<a href="">&nbsp; &nbsp; &nbsp; DONATION&nbsp;  &nbsp;  &nbsp; </a>

    <a href="">&nbsp; &nbsp; &nbsp; SIGN UP&nbsp; &nbsp; &nbsp;</a>
    <a href=""> &nbsp; CONTACT&nbsp; &nbsp;  </a>
            </b>
            
</div>
        
  
<center>
        
<?php
$p1=$_POST['product1'];
$name=$_POST['name'];
$p2=$_POST['product2'];
$p3=$_POST['product3'];
$pz1=$_POST['prize1'];
$pz2=$_POST['prize2'];
$pz3=$_POST['prize3'];
$servername="localhost";
$username="root";
$password="";
$con=new mysqli($servername,$username,$password);
mysqli_select_db($con,"OnlineMed");
    
$sql="INSERT INTO Cart (Name,Product1,Product2,Product3,Prize1,Prize2,Prize3) VALUES ('$name','$p1','$p2','$p3','$pz1','$pz2','$pz3')";
  

    if($name)
    {
if($con->query($sql)===TRUE)
{
        ?><marquee><p id="text"><?php echo "Added To Cart Successfully!!"?></p></marquee><?php ; 

}
    }
    else
{
    echo "Enter Your User ID";
}
        $con->close();
        ?>
        <br>
        <a href="onlinemed.html"><img src="Cart-icon.png" width="70px" height="70px"></a>
        </center>
    </body>
        