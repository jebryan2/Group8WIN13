 
<?php 
   require 'cart.php'; 

?>




<html>

 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Netmart</title>
		<link href="../css/main.css" rel="stylesheet" type="text/css">   <!--css file one level up-->
              <link href="../css/focusin.css" rel="stylesheet" type="text/css"> <!--change background of input-->
		

 </head>
 <body class ="body_color">
<div id='wrapper'>
	<div id="header">                        <!-- main header-->
						
				<div id="topheader">	         <!-- top header-->

                                                                         <form action = 'login.php' method='POST'>
							                         <p> Username:<input type="text" name ="username">
										     Password:<input type="password" name="password"><br>
										   <input type="submit" value="Sign In"> 
										   </form>

										   <a href="register.php">Register</a> 
										<a href="member.php">Member Page</a> 
										    
					        </div id="topheader" >

							
				<a href="../index1.html">	
				<img src=../img/netmartlogo.jpeg alt="Smiley face" height="150" width="500"> <!-- link back to index page--> 
			       </a>
				<br>
				
								     <h1> 	<a href ="../index1.html">home</a>
										<a href ="../aboutus.html">about us</a>
										<a href ="../ourservices.html">our services</a>
                                                                      <a href ="../contactus.html">contact us</a> </h1>
                                                                     
								     </h1>	
				<h3>
							   
							   <a href="camera.php">Cameras</a>			
							   <a href="cellphones.php">Cellphones</a>						 
							   <a href="software.php">Software</a>						  
							   <a href="PC&laptop.php">PCs & Laptops</a>						  
							   <a href="television.php">Television</a>
					   
				</h3>
		       
															
										
		</div id ="header">
	<div id ="body">

	<h1>Your cart</h1>




    <?php

	
	



	cart1(); 
	

	"<br/>" ; 
	echo "<h2> Products</h2>" ; 

	products1(); 

	
	
	
	 
    ?>

</div id ="body">
             

	</div id ="wrapper">



 </body>

</html>



