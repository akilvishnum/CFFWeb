<!DOCTYPE html>
<html>
<head> 
    <title>CFF-Home</title>
    <link rel="stylesheet" href="homePage.css">
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
        <br>
        <br>
        <p align="center"><img src="vector-breast-cancer-awareness-poster.jpg"  width="" height=""></p>
        
        
        
        <center> 
        
        <?php
$name=$_POST['name'];
$email=$_POST['email'];
$sm=$_POST['sm'];
$ta=$_POST['textarea'];
$handle=$_POST['handle'];
$servername="localhost";
$username="root";
$password="";
$con=new mysqli($servername,$username,$password);

mysqli_select_db($con,"Story");
$sql="INSERT INTO cancerstory (Name,Email,SM,Handle,Story) VALUES ('$name','$email','$sm','$handle','$ta')";

        if($con->query($sql)===TRUE)
        {
            echo "<marquee><p> YOUR STORY IS PUBLISHED </p></marquee>";
        }
            $con->close();
?>
            <p id="donate"><a href="">Find Your Story!   Here....</a></p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            </center>
           </body>
        <footer class="footer">
            <p>Helpline:123456789 | Queries: admin@cff.com</p>
            </footer>
            
        
