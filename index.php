<?php
session_start();
include 'connection.php';

if (isset($_SESSION['id'])){
	$id = $_SESSION['id'];
	$res = mysql_query("SELECT `name` FROM `users` WHERE id='$id'");
	$arr = mysql_fetch_array($res);
	$name = $arr['name'];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ac Catering</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel=@import "/style/main.css" screen;>
		<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
		<script type="text/javascript">
		  $(document).ready(function() {
		    $("a.ancLinks").click(function () { 
		      var elementClick = $(this).attr("href");
		      var destination = $(elementClick).offset().top;
		      $('html,body').animate( { scrollTop: destination }, 1100 );
		      return false;
		    });
		  });
			function check() {
			obj_form=document.forms.booking;
			obj_pole_name =obj_form.name;
			obj_pole_surname =obj_form.surname;
			obj_pole_email =obj_form.email;
			obj_pole_phone =obj_form.phone;
			obj_pole_plan =obj_form.plan;

			if (obj_pole_name.value==""){
			alert ("Please write your name!"); 
			return;
			}
			if (obj_pole_surname.value==""){
			alert ("Please write your surname!"); 
			return;
			}
			txt = obj_pole_email.value;
			if (txt==""){
			alert ("Please write E-mail!");
			return;
			}
			if (obj_pole_phone.value==""){
			alert ("Please write your surname!"); 
			return;
			}
			textMessage=obj_pole_plan.value;
			if (textMessage==""){
			alert ("Write your plan!");
			return;
			} 
			obj_form.submit();
			}
		</script>
	</head>
	<body>
		<div class="header">
			<div class="logo">
				<img src="img/logo.png" style = "width:150px; height:56px;"/>
			</div>
			<div class="menu">
				<ul>
					<li><a class="ancLinks" href="index.php">Home</a></li>
					<li><a class="ancLinks" href="#Second">About us</a></li>
					<li><a class="ancLinks" href="#Third">Menu</a></li>
					<li><a class="ancLinks" href="#Fourth">Our Team</a></li>
					<li><a class="ancLinks" href="#Fifth">Contact us</a></li>
				</ul>
			</div>
			<?php
			if(!isset($_SESSION['id'])){
				?>
			<div class="login">
				<ul>
                	<li><a href="login.php">Log in</a></li>
            	</ul>
			</div>
			<?php
		}else{
			?>
			<div class = "login">
				<ul>
					<li><a href="user_page.php"><?=$name?></a></li>
					<li><a href="log_out.php">Log out</a></li>
				</ul>
			</div>
			<?php
			}
			?>
		</div>

		<div class="page1" id="First">
			<div class="page1_bg">
			</div>
		</div>

		<div class="page2" id="Second">
			<div class="page2 bg1">
			</div>
			<div class="page2 info">
				<div class="page2 info content">
					<h1>About us</h1>
					<hr align="center" width="250" size="2" color="#ffffff" /><br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="page2 bg2">
			</div>
		</div>

		<div class="page3" id="Third">
			<div class="menutitle">
				Menu
			</div>
		<?php
		        $res = mysql_query("SELECT * FROM `menu` WHERE 1");
        		$arr = mysql_fetch_array($res);
        		$arr=array();
			    while ($row=mysql_fetch_array($res)){
			        $arr[]=$row;
			    }			    
			        ?>
			<div class="menu1">
				<ul>
					<h4>TAVUK YEMEKLERI</h4>
					<?php foreach ($arr as $food) {
						if ($food['type']=='one') {
						?>
					<li>
						<?php
			            if(isset($_SESSION['id']) && $id == 1){
			            ?>
						<a id="link" href="delete_food.php?id=<?=$food['id'] ?>">Delete</a>
                		<a id="link" href="edit_food.php?id=<?=$food['id']?>">Edit</a>
                		<?php
                	}
                	?>
						<a href="index.php#Third"><?=$food['name']?></a></li>
					<?php
				}
			}
					?>
				</ul>
			</div>
			<div class="menu2">
				<ul>
					<h4>ET YEMEKLERI</h4>
					<?php foreach ($arr as $food) {
						if ($food['type']=='two') {
						?>
					<li>
						<?php
			            if(isset($_SESSION['id']) && $id == 1){
			            ?>
						<a id="link" href="delete_food.php?id=<?=$food['id'] ?>">Delete</a>
                		<a id="link" href="edit_food.php?id=<?=$food['id']?>">Edit</a>
                		<?php
                	}
                	?>
						<a href="index.php#Third"><?=$food['name']?></a></li>
					<?php
				}
			}
					?>
				</ul>
			</div>
			<div class="menu3">
				<ul>
					<h4>KÖFTELER</h4>
					<?php foreach ($arr as $food) {
						if ($food['type']=='three') {
						?>
					<li>
						<?php
			            if(isset($_SESSION['id']) && $id == 1){
			            ?>
						<a id="link" href="delete_food.php?id=<?=$food['id'] ?>">Delete</a>
                		<a id="link" href="edit_food.php?id=<?=$food['id']?>">Edit</a>
                		<?php
                	}
                	?>
						<a href="index.php#Third"><?=$food['name']?></a></li>
					<?php
				}
			}
					?>
				</ul>
			</div>
			<div class="menu4">
				<ul>
					<h4>ÇORBALAR</h4>
					<?php foreach ($arr as $food) {
						if ($food['type']=='four') {
						?>
					<li>
						<?php
			            if(isset($_SESSION['id']) && $id == 1){
			            ?>
						<a id="link" href="delete_food.php?id=<?=$food['id'] ?>">Delete</a>
                		<a id="link" href="edit_food.php?id=<?=$food['id']?>">Edit</a>
                		<?php
                	}
                	?>
						<a href="index.php#Third"><?=$food['name']?></a></li>
					<?php
				}
			}
					?>
				</ul>
			</div>
			<div class="menu5">
				<ul>
					<h4>TATLILAR</h4>
					<?php foreach ($arr as $food) {
						if ($food['type']=='five') {
						?>
					<li>
						<?php
			            if(isset($_SESSION['id']) && $id == 1){
			            ?>
						<a id="link" href="delete_food.php?id=<?=$food['id'] ?>">Delete</a>
                		<a id="link" href="edit_food.php?id=<?=$food['id']?>">Edit</a>
                		<?php
                	}
                	?>
						<a href="index.php#Third"><?=$food['name']?></a></li>
					<?php
				}
			}
					?>
				</ul>
			</div>
			<div class="menu6">
				<ul>
					<h4>İçecekler</h4>
					<?php foreach ($arr as $food) {
						if ($food['type']=='six') {
						?>
					<li>
						<?php
			            if(isset($_SESSION['id']) && $id == 1){
			            ?>
						<a id="link" href="delete_food.php?id=<?=$food['id'] ?>">Delete</a>
                		<a id="link" href="edit_food.php?id=<?=$food['id']?>">Edit</a>
                		<?php
                	}
                	?>
						<a href="index.php#Third"><?=$food['name']?></a></li>
					<?php
				}
			}
					?>
				</ul>
			</div>
		</div>
		<div class="page4" id="Fourth">
				<div class="info">
					<div class="content">
						<h1>Our Team</h1>
						<hr align="center" width="250" size="2" color="#ffffff" /><br />
						<h3>Our team is our best asset.</h3>
						Chefs, waiters and bartenders – they are all top talents, experts in invigorating events and aficionados of providing service.
					</div>
				</div>
		</div>	
		<div class="page5" id="Fifth">
			<div class="menutitle"> Make reservations & Contact Us</div>
			<div class = "form">
				<form name="booking" onSubmit="check(); return(false);" method = "get" action="check.php">
					<label for="name"><strong>First Name *</strong></label><br>
					<input type = "text" class = "firstfour" name = "name"><br><br>
					<label for="surname"><strong>Last Name *</strong></label><br>
					<input type = "text" class = "firstfour" name = "surname"><br><br>
					<label for="email"><strong>Email Address *</strong></label><br>
					<input type = "email" class = "firstfour" name = "email"><br><br>
					<label for="phone"><strong>Phone *</strong></label><br>
					<input type = "tel" class = "firstfour" name = "phone"><br><br>
					<label for="people"><strong>For how many people? *</strong></label><br>
					<select name="people">
  						<option>1</option>
  						<option>2</option>
  						<option>3</option>
  						<option>4</option>
  						<option>5</option>
  						<option>6</option>
  						<option>7</option>
  						<option>8</option>
  						<option>9</option>
  						<option>10</option>
  						<option>11</option>
  						<option>12</option>
  						<option>13</option>
  						<option>14</option>
  						<option>15</option>
  						<option>16</option>
  						<option>17</option>
  						<option>18</option>
  						<option>19</option>
  						<option>20</option>
  						<option>21</option>
  						<option>22</option>
  						<option>23</option>
  						<option>24</option>
  						<option>25</option>
  						<option>26</option>
  						<option>27</option>
  						<option>28</option>
  						<option>29</option>
  						<option>30</option>
					</select><br><br>
					<label for="date"><strong>Date *</strong></label><br>
					<input type="date" name="date"><br><br>
					<label for="time"><strong>Time *</strong></label><br>
					<input type="time" name="time"><br><br>
					<label for="plan"><strong>Party Package Selection</strong></label><br>
					<textarea type="text" name="plan" rows="4"></textarea><br><br>
					<label for="more"><strong>Tell us more about the party you're planning! *</strong></label><br>
					<textarea type="text" name="more" rows="4"></textarea><br><br>
					<input type = "submit" name="submit" value="Submit"></input>
				</form>
			</div>
			<div class="Contact_us"><strong>
					1/1 st.Abylaikhana<br>
					Kaskelen, Almaty<br>
					Kazakhstan<br><br>
					Tel.: 8(778)910-50-60<br>
					Email: AC_Catering@gmail.com<br></strong>
					<br></br>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2908.0592117249653!2d76.66723851502725!3d43.20824738910709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38834f7675d8a6c3%3A0x7b7d14aec270c056!2z0KPQvdC40LLQtdGA0YHQuNGC0LXRgiDQodGD0LvQtdC50LzQsNC9INCU0LXQvNC40YDQtdC70Y8!5e0!3m2!1sru!2skz!4v1463414462816" width="550" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		
		<div class="footer">
			<div class="menu_bar">
				<ul>
					<h2>MENU</h2>
					<hr align="left" width="200px" size="3" color="black" /><br />
					<li><a class="ancLinks" href="index.php">Home</a></li>
					<li><a class="ancLinks" href="#Second">About us</a></li>
					<li><a class="ancLinks" href="#Third">Menu</a></li>
					<li><a class="ancLinks" href="#Fourth">Our Team</a></li>
					<li><a class="ancLinks" href="#Fifth">Contact us</a></li>
				</ul>
			</div>
			<div class="social">
				<ul>
					<h2>Social Networks</h2>
					<hr align="left" width="250px" size="3" color="black" /><br />
					<li><a href="">Facebook</a></li>
					<li><a href="">Instagram</a></li>
				</ul>
			</div>
			<div class="contact">
				<ul>
					<h2>Contact Us</h2>
					<hr align="left" width="200px" size="3" color="black" /><br />
					<h3>8(778)910-50-60</h3>
					<h3>AC_Catering@gmail.com<h3>
				</ul>
			</div>
			<p>Copyright © 2016 AC Catering Inc. All rights reserved.</p>
		</div>
	</body>
</html>