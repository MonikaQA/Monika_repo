<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<script>
function validateForm() {
    var x = document.forms["myForm"]["e_name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
<body>  


<h2>NEW EMPLOYEE REGISTRATION</h2>
<p><span class="error">* required field.</span></p>
<form name="myform" method="post" action="hello.php" onsubmit="return validateForm()">  
  Name: <input type="text" name="e_name" value="">
  <span class="error">* </span>
  <br><br>
employee id: <input type="text" name="e_id" value="">
  <span class="error">* </span>
  <br><br>
  joining date: <input type="text" name="j_date" value="">
  <span class="error"></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<h2>Your Input:</h2><br><br><br><br>
</body>
</html>
