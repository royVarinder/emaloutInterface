<?php 

function emalout_all_bussinesses(){
	header("Access-Control-Allow-Origin: *");
include("../Config/config.php");

  $sql = 'SELECT * FROM `emalout_bussinesses`';
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $arr[] = $row;
  }
  echo json_encode($arr);
} else {
  echo "[]";
}
}
emalout_all_bussinesses();

?>



