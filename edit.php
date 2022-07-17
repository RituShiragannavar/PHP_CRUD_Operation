<!DOCTYPE html>
<html>
<head>
	<title></title>


 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<!--display code-->

</head>
<body>


  <div class="container">

  		

  	<div class="col-lg-12">
        <h1 class="text-center" >Table Data</h1>

        <br>

        <div>
  			<button class="btn btn-primary"  ><a href ="sire.php" class="text-white "
      >Add New</a></button>
  		</div><br>

        <table class="table table-striped table-hover">

            <tr class="bg-dark text-white">
              <th>Id</th>	
              <th>Sire Color</th>
              <th>Sire breed</th>
              <th>Sire bloodline</th>
               <th>address</th>
               <th>Update</th>
               <th>Delete</th>
            </tr>


<?php

   
      include_once('connection.php');
      
      $sql=new mysqli('localhost','root','','chicken') or die(mysqli_error($sql));
      $result=$sql->query("select * from sire") or die($sql->error);




  while ($row=$result->fetch_assoc()):  ?>
  <tr>
  	<td><?php echo $row['s_id']; ?></td>
    <td><?php echo $row['s_color']; ?></td>
    <td><?php echo $row['s_breed']; ?></td>
    <td><?php echo $row['s_bloodline']; ?></td>
    <td><?php echo $row['s_address']; ?></td>
    <td><button class="btn btn-info"><a href ="sire.php?edit=<?php echo $row['s_id']; ?>" class="text-white "
      >Edit</a></button></td>




     <td> <button class="btn-danger btn"><a href="connection.php?delete=<?php echo $row['s_id']; ?>" class="text-white">
        Delete</a></button>
    </td>
  </tr>

<?php
 endwhile; ?>

  
</table></div>




</body>
</html>