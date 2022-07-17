<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>sire Form</title>
 
  <style type="text/css">
    
    .card-inner{
      background-color: grey;
      margin: auto;
      width: 300px;
      padding: 20px;
    }
    .input          {
      height: 25px;
      border-radius: 5px; 
      padding: 4px;
      border: solid thin #aaa;
      width: 80%;
    }
  </style>


 
</head>
<body>
<?PHP 
include_once('connection.php');

?>


  <center>
  <div class="container" >
    <div class="card-inner">
      <form action=""  method="POST">
        <h3>Sire Form</h3>
       
        <div class="form-group">
          <div class="form-wrapper"> 
           
            <input type="text" name="s_color"  value="<?php if (isset($s_color)){echo $s_color;}  ?>" placeholder="Sire color" class="input" required><br><br>
           
          </div>

          <div class="form-wrapper">
          
            <input type="text" name="s_breed" value="<?php if (isset($s_breed)){ echo $s_breed;} ?>" placeholder="Sire breed" class="input" required ><br><br>
            
          </div>
        </div>

        <div class="form-wrapper">
       
          <input type="text" name="s_bloodline" value="<?php if(isset($s_bloodline)){ echo $s_bloodline;} ?>" placeholder="Sire bloodline" class="input" required  ><br><br>
           
        </div>

        <div class="form-wrapper">
     
          <input type="text" name="s_address" value="<?php if(isset($s_address)){echo $s_address;} ?>" placeholder="Address" class="input"  required ><br><br>
          
        </div>

       <?php 
      //  $update=false;
       if(isset($_REQUEST['edit'])):
        ?>
        <input type="hidden" name="id" value=<?PHP echo  $_REQUEST['edit']?>>
        <button type="submit" name="Save_update"  autocomplete="off" >Update</button>
        <?php else: ?>
        <button type="submit" name="Save"  autocomplete="off" >Submit</button>
        <?php endif; ?>
        
      </form>
    </div>
  </div>
</center>




</body>
</html>

<?php


if(isset($_POST['Save_update']))
{
  $s_color = $_POST['s_color'];
  $s_breed = $_POST['s_breed'];
  $s_bloodline = $_POST['s_bloodline'];
  $s_address= $_POST['s_address']; 

  $sql ="UPDATE sire SET s_color='$s_color', s_breed='$s_breed', s_bloodline='$s_bloodline',s_address='$s_address' WHERE s_id=$_POST[id]";

if (mysqli_query($conn, $sql)) {
   header("location: redir.php");
 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

if (isset($_POST['Save'])) 
{
$s_color = $_POST['s_color'];
$s_breed = $_POST['s_breed'];
$s_bloodline = $_POST['s_bloodline'];
$s_address= $_POST['s_address']; 



$sql = "INSERT INTO sire (s_color, s_breed, s_bloodline,s_address)
VALUES ('$s_color', '$s_breed', '$s_bloodline', '$s_address')";
if (mysqli_query($conn, $sql)) {
   header("location: redir.php");
 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}


mysqli_close($conn); 
?>



<!--<?php

   
?>-->
    
 