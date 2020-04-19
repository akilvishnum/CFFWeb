<!DOCTYPE html>
<html>
<head>
    <title>Online Medicine-CFF</title>
    <link rel="stylesheet" href="onlineMed.css"></head>
    
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

    <a href="">&nbsp;  &nbsp; SIGN UP&nbsp;  &nbsp;</a>
    <a href="">&nbsp; &nbsp; &nbsp; CONTACT&nbsp; &nbsp;  </a>
            </b>
            
</div>
    <br>
        <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <center>
        <p id="text">MAKE YOUR CHANGES HERE!</p>
        <hr>
    <?php  
    $servername="localhost";
$username='root';
$password='';
$con=mysqli_connect("$servername",$username,$password); 
    $n=$_POST['name'];

mysqli_select_db($con,'OnlineMed');
$query_select="select Product1,Product2,Product3 from Cart where Name='$n' ";
$result=mysqli_query($con,$query_select);
?>
    <form action="update2.php" method="post">
        <p>Enter Medicine Name:
        <select name="medi" id="input">
            <?php
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{?>
	<option><?php echo $row['Product1'];?></option>
            <option><?php echo $row['Product2'];?></option>
            <option><?php echo $row['Product3'];?></option>
<?php
}
?>
</select>
            </p>
        <p>Enter Quantity:<input type="text" id="input" name="quantity"></p>
        <input type="submit" value="Submit" id="button">
            
            
        
            
            
            
            
           
        </form></body>
</html> 