.<?php
if(isset($_GET['id'])){

  //geting the user data from user opration
  require_once('userOpration.php');
  $user = new UserOpration();
  $row=$user->getOne($_GET['id']);

  //sending user info to user opration for the update
  if(isset($_POST["Edit"])){
    $user->firstName=$_POST['firstName'];
    $user->lastName=$_POST['lastName'];
    $user->address=$_POST['address'];
    $user->id=$_GET['id'];
    $user->edit();
  }
 
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
      <h3>Update user data here</h3>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <label for="fname">First Name</label>
        <input type="text" name="firstName" value="<?php echo $row['firstName']?>">
        <label for="lname">Last Name</label>
        <input type="text" name="lastName" value="<?php echo $row['lastName']?>">
        <label for="lname">Address</label>
        <input type="text" name="address" value="<?php echo $row['address']?>">
        <input type="submit" value="Edit" name="Edit">
      </form>
    </div>
    </body>
</html>