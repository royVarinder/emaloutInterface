<?php 

function emalout_upload_bussiness(){
include("../Config/config.php");

if($_POST) {

// DECLARING VARIABLES OF DATA 
$yourName = $_POST['yourName'];
$yourContact = $_POST['yourContact'];
$selectWeekDays = $_POST['selectWeekDays'];
$selectFeature = $_POST['selectFeature'];
$selectCategoryId = $_POST['selectCategory'];
$openingDays = $_POST['openingDays'];
$features = $_POST['features'];
$district = $_POST['district'];
$emailAddress = $_POST['emailAddress'];
$city = $_POST['city'];
$bussinessName = $_POST['bussinessName'];
$bussinessContact = $_POST['bussinessContact'];
$address = $_POST['address'];

$sql = "INSERT INTO `emalout`.`emalout_bussinesses`(user_name,user_contact,buss_name,buss_contact,category_id,buss_address,buss_city,buss_district,features,weekdays)
VALUES (
        '$yourName',
        '$yourContact',
        '$bussinessName',
        '$bussinessContact',
        '$selectCategoryId',
        '$address',
        '$city',
        '$district',
        '$features',
        '$openingDays'
    )";

if ($conn->query($sql) === TRUE) {
  echo TRUE;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}

}

emalout_upload_bussiness();

?>
<!-- 

Error: INSERT INTO `emalout`.`emalout_bussinesses` 
(id,
 user_name, 
 user_contact,
  buss_name, 
  buss_contact,
   category_id,
    buss_address,
     buss_city,
      buss_district,
       features, 
       weekdays
       ) VALUES ('id' 'sffsd', '3434', 'sfddf', '3434', '6', 'sfsdfsdf', 'Malout', 'Sri Muktsar Sahib' '24/7 Service' 'Wednesday' )
Column count doesn't match value count at row 1 -->