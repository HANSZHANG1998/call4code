<?php
	include('connection.php');

  $country = $_GET['country'];
  $sql ="select * from co2_emission where country_name = '$country'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $data = $row['desc'];

  }else{
    echo "No data found";

}
?>
<div style="margin:0 auto" >
<img src="static/img/predict/<?php echo $country;?>.png">
<p><?php echo $data;?></p>
</div>
