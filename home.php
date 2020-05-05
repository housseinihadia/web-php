<?php
session_start();



?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="home.css" >

</head>
<body>
  <div id="main">
  <h1 style="background-color:#6495ed;color: white;"><?php echo $_SESSION['name']?>-online</h1>
  <div class="output">
      <?php    $sql="SELECT * FROM posts";
      $result=$conn->query($sql);
      if($result->num_row >0){
      	//output data of each row
      	while($row=$result->feath_assos()){
      		echo "" . $row["name"] . " " . " :: " .$row["msg"] . "--" .$row["date"] . "<br>";
      		echo "<br>";
      	}
      } else{
      	echo "0 results";

      }
      $conn->closed();

      ?>
  </div>

  <form method="post" action="send.php">
  <textarea name="msg" placeholder="type to send massage" class="form-control"></textarea><br>
  <input type="submit" value="send">
  </form><br>
<form action="logout.php">
<input style="width:100%;background-color:#6495ed;color:white;font-size:20px;" type="submit" value="logout" >
</form>
  </div>


</body>



</html>