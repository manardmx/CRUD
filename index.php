<?php
require_once('userOpration.php');
$user = new UserOpration ();
$users =$user->getAll();
?>
<html>
    <head>
     <style>
        #table_css{
            font-family: Arial;
            border-collapse: collapse;
            width:100%;
        }
        #table_css td,th{
            border: 1px solid #ddd;
            padding: 8px;
        }
        #table_css,tr:hover{
            background-color:#ddd;
        }
        #table_css th{
            padding-top:12px;
            padding-bottom 12px;
            text-align:left;
            background-color:#04AA6D;
            color:white;
        }
     </style>
    </head>
    <body>
    <br>
     <button style="display:block;margin-left:auto;margin-right:auto;background-color:green;"><a href="userInsert.php" style="color:white;text-decoration: none">Insert users</a></button>
        <br>
        <h1 style="text-align:center">Users info</h1>
    <table id="table_css">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i=1; ?>
                    <?php foreach($users as $row):  ?>
                        <tr>
                            <td><?php echo $row['firstName']; ?></td>
                            <td><?php echo $row['lastName']; ?> 
                            <td><?php echo $row['address']; ?></td>
                            <td>
                               <button style="background-color:red;"> <a style="background-color:red;color:white;text-decoration: none" href="delete.php?id=<?php echo $row['id'];?>">Delete</a></button>
                               <button style="background-color:blue;"> <a style="color:white;text-decoration: none" href="edit.php?id=<?php echo $row['id'];?>">Edit</a></button>
                            </td>
                        </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>
 
    </body>
</html>