<?php
$server='localhost';
$user='root';
$password='';
$db='login';
$con=mysqli_connect($server,$user,$password,$db);


if(isset($_POST['submit'])){
    $user=$_POST['user'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $corona=$_POST['corona'];
    $ex=$_POST['ex'];
  
    $chk= "";
    foreach($corona as $chk1){
      $chk .= $chk1.",";
    }
     $insert =" INSERT INTO covin19 (name,email,phone,sym,mes) VALUES('$user',
          ' $email','$phone','$chk','$ex') ";
  
          $query= mysqli_query($con,$insert);
          if($query){
            header('Location: thank.php');
        }
        else{
            ?>
             <script>
                alert("no sucss");
        </script>
        <?php
        }
     
  }

?>