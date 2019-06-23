<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	td{
		padding: 5px;
	}
	</style>
</head>
<body>

<div id="container">
	<center><h1>Regisration</h1></center>


<form method="post" enctype="multipart/form-data">

<table border="1" align="center">
	
	<tr>
		<td>
			<label>User Name</label>
		</td>
		<td>
			<input type="text" name="username">
		</td>
	</tr>
	<tr>
		<td>
			<label>Password</label>
		</td>
		<td>
			<input type="Password" name="password">
		</td>
	</tr>
	<tr>
		<td>
			<label>Gender</label>
		</td>
		<td>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
		</td>
	</tr>
	<tr>
		<td>
			<label>mobile</label>
		</td>
		<td>
			<input type="text" name="mobile" >
		</td>
	</tr>
	<tr>
		<td>
			<label>Hobby</label>
		</td>
		<td>
			<input type="checkbox" name="hobby" value="Reading">Reading
			<!-- <input type="checkbox" name="chk[]" value="Music">Music
			<input type="checkbox" name="chk[]" value="Cricket">Cricket
			<input type="checkbox" name="chk[]" value="outing">outing -->
		</td>
	</tr>
	<tr>
		<td>
			<label>City</label>
		</td>
		<td>
			<select name="city">
				<option value="">--Select Country--</option>
				<option value="India">India</option>
				<option value="UK">UK</option>
				<option value="USA">USA</option>
			</select>
		</td>
	</tr>
	<!-- <tr>
		<td>
			<label>Education</label>
		</td>
		<td>

			<select name="Education" multiple="">
				<option value="">--Select Education--</option>
				<option value="10">10Th</option>
				<option value="12">12th</option>
				<option value="Graducation">Graducation</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<label>Address</label>
		</td>
		<td>
			<textarea cols="30" rows="5"></textarea>
		</td>
	</tr>

	<tr>
		<td>
			<label>Profile Pic</label>
		</td>
		<td>
			<input type="file" name="Image" accept="image/*" >
		</td>
	</tr>
	<tr>
		<td>
			<label>DOB</label>
		</td>
		<td>
			<input type="Date" name="DOB">
		</td>
	</tr>
	<tr>
		<td>
			<label>Age</label>
		</td>
		<td>
			<input type="number" name="Age">
		</td>
	</tr> -->
	<tr>
		<td>
			<label>Email</label>
		</td>
		<td>
			<input type="email" name="email">
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Registration" name="Registration">
			<input type="reset" value="Cancel" >
		</td>
	</tr>
</table>
</form>
	<br>
</div>

</body>
</html>