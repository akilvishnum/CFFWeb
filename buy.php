<!DOCTYPE html> 
<html>
    <head>
        
        <title>CFF-Home</title>
    <link rel="stylesheet" href="buy.css">
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
            <br>
            <br>
            <img src="Cart-icon.png" width="70px" height="70px">
      <p id="text">Your Cart!</p>
        
        
        
        <?php
$name=$_POST['name'];


$servername="localhost";
$username='root';
$password='';
$con=mysqli_connect("$servername",$username,$password); 
    

mysqli_select_db($con,'OnlineMed');
$query_select="select * from Cart where Name='$name'";
$result=mysqli_query($con,$query_select);
?>
<table id="cart">
<tr>
	
	<th>Products</th>
	<th>Quantity</th>
	<th>Prize</th>
	
</tr>
<?php
    $total=0;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
?>
    
    
<tr>
    <td><?php echo $row['Product1'];
        $a= $row['Product1'];?></td>
    <td><?php echo $row['Prize1']; ?></td>
    <?php
        $query_select1="select Prize from Medicine where Med_Name='$a'";
    $cost1=mysqli_query($con,$query_select1);
 while($result1=mysqli_fetch_array($cost1,MYSQLI_ASSOC))
 {
 ?>
    <td><?php echo $result1['Prize'];$total=$total+( $result1['Prize']*$row['Prize1']);}?></td>
    </tr>
    

    
    
    
    <tr>
    <td><?php echo $row['Product2']; $b= $row['Product2']; ?>
    <td><?php echo $row['Prize2']; ?></td>
        <?php
        $query_select2="select Prize from Medicine where Med_Name='$b'";
    $cost2=mysqli_query($con,$query_select2);
 while($result2=mysqli_fetch_array($cost2,MYSQLI_ASSOC))
 {
 ?>
    <td><?php echo $result2['Prize'];  $total=$total+( $result2['Prize']*$row['Prize2']); }?></td>
    </tr>
    
    
    
    
    
     <tr>
    <td><?php echo $row['Product3'];$c= $row['Product3']; ?>
    <td><?php echo $row['Prize3']; ?></td>
         <?php
        $query_select3="select Prize from Medicine where Med_Name='$c'";
    $cost3=mysqli_query($con,$query_select3);
 while($result3=mysqli_fetch_array($cost3,MYSQLI_ASSOC))
 {
 ?>
    <td><?php echo $result3['Prize'];    $total=$total+( $result3['Prize']*$row['Prize3']);}?></td>
         
    </tr>
    <?php
}
    ?>
    <tr  ><td colspan="3" id="total" align="center"><?php
    echo"Total:$total /-";
    ?></td></tr>
    </table>
    
    
    
    
 
   
       
    <center>
        <pre>
           <p> <a href="onlinemed.html"><img src="order-management-market-store-cart-trolley-shopping-1-5185.png" width="70px" height="70px"></a>              <a href=""><img src="pay.png" width="70px" height="70px"></a>               <a href="up.html"><img src="history-edit-512.png" width="70px" height="70px"></a></p>
         </pre>
            </center>
        </body>
             <footer class="footer">
            <p>Helpline:123456789 | Queries: admin@cff.com</p>
            </footer>
        
            
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </html>