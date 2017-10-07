
<html>
<head><title>
	</title>
</head>
<body bgcolor="grey">

<nav class = "navigation">
    <a href ="new.php">Main File </a>|
    <a href ="login.html">Display Page</a>|
    <a href ="insert.php">Insert</a>
</nav>
<center><h2> FORM </h2></center>
<foam>
	<fieldset>
    <legend>Information</legend>
    <p>
    	<pre>
 Name : <input type="text" name="fname"><br>

 Gender:<br>
             </mark><input type="radio" name="gender" value="male" checked> Male<br>
             </mark><input type="radio" name="gender" value="female"> Female<br>
             </mark><input type="radio" name="gender" value="other"> Other<br>
        </pre>
  <pre>      
 Email :     <input type="email" name="email"> <br><br>
 Birth :     <input type ="date" name="birth"><br><br>
 Address:    <input type="text" name="address"><br><br>
 City:       <input type="text" name="city"><br><br>
 Province:   <input type="text" name="province"><br><br>
 PostalCode: <input type="text" name="fname"><br><br>
 Website:    <input type="email" name="website"> <br><br>
 AnnualPay:  <input type="number" name="quantity"><br><br>
</pre>
</p>

  <input type="submit" value="Submit" onclick="back()">

</fieldset> 
</form>
<script>
function back(){
	window.location="third.php"
}
</script>

</body>
</html>
</body>
</html>