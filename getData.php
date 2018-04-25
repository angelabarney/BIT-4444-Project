<?php
  require_once("db.php");

$sql ="select Apartment_Name, Rent from apartments";

$result = $mydb->query($sql);

$data = array();
for($x=0; $x<mysqli_num_rows($result); $x++) {
  $data[] = mysqli_fetch_assoc($result);
}

echo json_encode($data);

?>
