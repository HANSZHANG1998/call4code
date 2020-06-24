<?php
	include('connection.php');

  getCO2($conn);

  function getCO2($conn){
  $abbr = $_GET['data'];
  $sql ="select * from co2_emission where abbr = '$abbr'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $data =['data'=>$row['2015']];
  	$str=json_encode($data,JSON_UNESCAPED_UNICODE);
  	echo $str;
  }else{
    $data =['data'=>0];
    $str=json_encode($data,JSON_UNESCAPED_UNICODE);
    echo $str;
  }


}


?>
