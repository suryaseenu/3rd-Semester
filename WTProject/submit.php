<!DOCTYPE html>
<html>
<head>
	<title>Thank You</title>
	<link rel = "stylesheet" type = "text/css" href = "project.css">
	<link rel = "stylesheet" type = "text/css" href = "signup.css">
	<script src="project.js"></script>
	<style type="text/css">
		.block{
			width:30%;
			background-color: white;
			border:none;
			border-radius: 10px;
			font-family: 'Helvetica';
			padding: 3%;
			margin-left: 31.5%;
			margin-right: 30%;
		}
		li{
			font-family: "Trebuchet MS";
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
		<br/><br/><br/>
	</center>
<br/><br/><br>
		<center><h1 style="font-family: 'Helvetica';">Your Purchase Was Successful!</h1></center><br><br>
			<div class = block>
				<center><h3>Delivery Details</h3></center>
				<ul>
					<li>Delivery within 2-3 working days.</li>
					<li>Cash On Delivery</li>
					<li>In stock</li>
					<li>Gift wrap available</li>
				</ul>
				<center><p>Thank you for shopping at CellCity</p></center>
			</div>

		<center>
		<footer style="position: absolute;bottom: 0px; left:0px; right: 0px;">
            <p ><a id = "footref" href = "aboutus.php">About Us</a>
            <a id = "footref" href = "FAQ.php">FAQ</a>
            <a id = "footref" href="privacy_policy.php">Privacy Policy</a>
            <a id = "footref" href="contactus.php">Contact Us</a>
        </footer>
	</center>
</body>
</html>