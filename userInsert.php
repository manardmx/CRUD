<?php
if(isset($_POST['save'])){
  require_once('userOpration.php');
  $user = new UserOpration ();
  $user->firstName=$_POST['firstName'];
  $user->lastName=$_POST['lastName'];
  $user->address=$_POST['address'];
  $user->insert();
  echo 'ooo';
  echo "<script>alert('data saved successfuly');document.location='index.php'</script>";
}
?>
<html>
    <head>
    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
    </head>
    <body>
      <div>
      <h3>Insert user data here</h3>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <label for="fname">First Name</label>
     <input type="text" name="firstName" id=""placeholder="Your name..">
     <label for="lname">Last Name</label>
      <input type="text" name="lastName" id=""placeholder="Your last name..">
      <label for="lname">Address</label>
      <input type="text" name="address" id=""placeholder="Your address..">
        <input type="submit" value="save" name="save">
      </div>
    </form>
    </body>
</html>