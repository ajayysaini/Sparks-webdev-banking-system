<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body {
    background-color: rgb(9 21 84);
    background-image: url(images/mn.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    object-fit: cover;
}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center {
    display: inline-block;
    background-color: #71e1fd;
    padding: 50px;
    border: 2px ridge #7af3fc;
    }
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Rohit"){
				 var arr=["Mohit","Anjani","Priya","Shivani","Sonali","Vikash","Arti","Nitesh","Puja"];
				 }
				 else if(a==="Mohit"){
					var arr=["Rohit","Anjani","Priya","Shivani","Sonali","Vikash","Arti","Nitesh","Puja"];
				}
				else if(a==="Anjani"){
					var arr=["Rohit","Mohit","Priya","Shivani","Sonali","Vikash","Arti","Nitesh","Puja"];
				}
				else if(a==="Priya"){
					var arr=["Rohit","Mohit","Anjani","Shivani","Sonali","Vikash","Arti","Nitesh","Puja"];
				 }
				 else if(a==="Shivani"){
					var arr=["Rohit","Mohit","Anjani","Priya","Sonali","Vikash","Arti","Nitesh","Puja"];
				 }
				 else if(a==="Sonali"){
					var arr=["Rohit","Mohit","Anjani","Priya","Shivani","Vikash","Arti","Nitesh","Puja"];
				 }
				 else if(a==="Vikash"){
					var arr=["Rohit","Mohit","Anjani","Priya","Shivani","Sonali","Arti","Nitesh","Puja"];
				 }
				 else if(a==="Arti"){
					var arr=["Rohit","Mohit","Anjani","Priya","Shivani","Sonali","Vikash","Nitesh","Puja"];
				 }
				 else if(a==="Nitesh"){
					var arr=["Rohit","Mohit","Anjani","Priya","Shivani","Sonali","Vikash","Arti","Puja"];
				 }
				 else if(a==="Puja"){
				 var arr=["Rohit","Mohit","Anjani","Priya","Shivani","Sonali","Vikash","Arti","Nitesh"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#ffffff;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left" style="font-weight:bold;">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Rohit">Rohit</option>
			<option value="Mohit">Mohit</option>
			<option value="Anjani">Anjani</option>
			<option value="Priya">Priya</option>
			<option value="Shivani">Shivani</option>
			<option value="Sonali">Sonali</option>
			<option value="Vikash">Vikash</option>
			<option value="Arti">Arti</option>
			<option value="Nitesh">Nitesh</option>
			<option value="Puja">Puja</option>
		</select><br><br>
		<label for="receiver" align="left" style="font-weight:bold;">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left" style="font-weight:bold;">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover" style="font-weight:bold;">HOME</button>
	</a>
</div>
</body>
</html>