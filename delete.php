<?php
require_once('userOpration.php');
if(isset($_GET['id'])){
    $user = new UserOpration ();
    $users =$user->delete($_GET['id']);
  echo "<script>alert('data deleted successfuly');document.location='index.php'</script>";

}
