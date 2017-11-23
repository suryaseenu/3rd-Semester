<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel = "stylesheet" type = "text/css" href = "project.css">
	<link rel = "stylesheet" type = "text/css" href = "showcase.css">
	<script src="project1.js"></script>
	<style type="text/css">
		*body{
			font-family: Helvetica;
		}
	</style>
</head>
<body>
	<center>
		<div id = "wrapper">
			<div id = "navbar">
				<div>
					<img class="logo" src="cellcity1.png"/>
				</div>
				<div class = "searchwrapper">
					<input list="searchbox" type ="search" placeholder="  Search Brand" class = "searchbox" id = "mysearch">
					<datalist id="searchbox">
						<option id = "opt1" value="Apple">
						<option id = "opt2" value="Google">
						<option id = "opt3" value="Htc">
						<option id = "opt4" value="OnePlus">
						<option id = "opt5" value="Samsung">
					</datalist>
					<input type="button" id="btn" class = "searchbutton" onclick="searchfn()" value="Search" />
				</div>
				<div>
				<a id="home" href = "project.php">Home</a>
				</div>
				<div>
					<a id = "linkref" href = "cart.php">Cart</a>
				</div>
				<div>
					<a id = "linkrefsignin" href = "signup.php">Sign Out</a>
					<span><img class = "avatar" src="avatar.png"></span>
				</div>
			</div>
		</div>
		<br/><br/><br/></center>
		<br/><br/><br/><br/>
		<center><h1 style="font-family: Helvetica;">Shopping Cart</h1>
	</center>
	
	<center>
			<table cellpadding="20" cellspacing="30" border = "0">
				<tr>
					<td id="one">
						
						<center>
							<h3>Samsung Galaxy S8</h3>
						<img src="gs8.jpg" alt="Galaxy S8" style = "height: 100%;"> <br /> <br /></center>

						<label> Price: </label> <b class="green">Rs. 65,000</b><br /><br />
						<a href="submit.php"><button class="cart" onclick="conf()"> Buy </button></a>
						<button class="comment" id= "rem" onclick="remov1()"> Remove From Cart</button>
						
					</td>
					<td id="two">
						
						<center>
							<h3>iPhone X</h3>
						<img src="iphonexdesign1.jpg" alt="Galaxy Note 8" style = "height: 100%;"/> <br /> <br /></center>
						<label> Price: </label> <b class="green">Rs. 89,000</b><br /><br />
						<a href="submit.php"><button class="cart"> Buy </button></a>
						<button class="comment" id= "rem" onclick="remov2()"> Remove From Cart</button>
					
					</td>
					<td id="three">
						
						<center>
							<h3>Oneplus 5T</h3>
						<img src="op5t.jpg" alt="Galaxy J3 Pro" style = "height: 100%;"/> <br /> <br /></center>
						<label> Price: </label> <b class="green">Rs. 39,990</b><br /><br />
						<a href="submit.php"><button class="cart"> Buy </button></a>
						<button class="comment" id= "rem" onclick="remov3()"> Remove From Cart</button>
					
					</td>
				</tr>
			</table>

	<center>
		<footer style=" position: static; bottom: 0; left: 0; right: 0;">
            <p ><a id = "footref" href = "aboutus.php">About Us</a>
            <a id = "footref" href = "FAQ.php">FAQ</a>
            <a id = "footref" href="privacy_policy.php">Privacy Policy</a>
            <a id = "footref" href="contactus.php">Contact Us</a>
        </footer>
	</center>
<script type="text/javascript">
	var x = document.getElementById('one');
	var y = document.getElementById('two');
	var z = document.getElementById('three')
	function remov1(){
		var res = confirm ("Are you sure you want to delete this item?");
		if(res){
		x.parentNode.removeChild(x);
		}
	}
	function remov2(){
		var res = confirm ("Are you sure you want to delete this item?");
		if(res){
		y.parentNode.removeChild(y);
		}
	}
	function remov3(){
		var res = confirm ("Are you sure you want to delete this item?");
		if(res){
		z.parentNode.removeChild(z);
		}
	}
	function conf(){
		confirm ("Do you want to confirm purchase?");
	}
</script>
</body>
</html>