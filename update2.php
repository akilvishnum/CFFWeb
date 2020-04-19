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
    
    
    
    <?php  
    $akil=$_POST['medi'];
    $vishnu=$_POST['quantity'];
    $servername="localhost";
$username='root';
$password='';
$con=mysqli_connect("$servername",$username,$password); 
    

mysqli_select_db($con,'OnlineMed');
$query_select="update Cart set Prize1='$vishnu' where Product1='$akil' ";
$result=mysqli_query($con,$query_select);
    
    
    
    
    $query_select1="update Cart set Prize2='$vishnu' where Product2='$akil' ";
$result1=mysqli_query($con,$query_select1);
    
    
    
    
    $query_select2="update Cart set Prize3='$vishnu' where Product3='$akil' ";
$result2=mysqli_query($con,$query_select2);
?>
    <center>
        <p di="text">CART UPDATED SUCCESSFULLY! HAPPY SHOPPING</p>
        <hr>
        
                <pre>
           <p> <a href="onlinemed.html"><img src="order-management-market-store-cart-trolley-shopping-1-5185.png" width="70px" height="70px"></a>              <a href=""><img src="pay.png" width="70px" height="70px"></a>               <a href="up.html"><img src="history-edit-512.png" width="70px" height="70px"></a></p>
         </pre>
        <p><b>CART&nbsp;|</b>&nbsp;<b>PAY&nbsp;|</b>&nbsp;<b>EDIT</b></p>
    </center>