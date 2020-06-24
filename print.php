<?php

require_once 'vendor/autoload.php';
	if($_POST){
		$name = $_POST['name'];
		$date = $_POST['date'];
		$police_station_name = $_POST['police_station_name'];
		$police_station_area = $_POST['police_station_area'];
		$father_name = $_POST['father_name'];
		$mother_name = $_POST['mother_name'];

		$national_id = $_POST['national_id'];
		$present_address = $_POST['present_address'];
		$permanent_address = $_POST['permanent_address'];
		$description = $_POST['description'];
		$mobile_no = $_POST['mobile_no'];
	}

$html = "<!DOCTYPE html>
<html>
<head>
	<title>General Diary</title>
</head>
<body>
	<div class='blog'>
		<div class='container'>
			<div>
				<p style=\"text-align:center;\">
				<img src=\"images/Bangladesh_police.jpg\" alt=\"\" class=\'center\'>
				</p>
			</div>
		   <div>
		   		<h4>Date: <u>".$date."</u></h4>
		   </div>

		   <div>
		   		<p>To</p>
				<p>Officer In Charge</p>
				<p>".$police_station_name." Police Station</p>
				<p>".$police_station_area."</p>
		   </div>
		   <div>
		   		<p>Subject: Application for entry of a General Diary</p>
		   </div>
		   <div>
		   		<p>Dear Sir</p>
		   		<p>I, Mr <u>".$name."</u> , son of <u>".$father_name."</u> and <u>".$mother_name.",</u> National Id: ".$national_id.", Present Address: <u>".$present_address."</u>, Permanent Address: <u>".$permanent_address."</u>.</p>
		   		<p>I am Convinced That ".$description."</p>
		   </div>
		   <div>
		   		<p>In the circumstances, I hereby kindly request you to take necessary steps regarding their said matter and entry the said matter as a general Diary with your police Station and oblige me
				thereby.
				</p>
		   </div>
		   <div>
		   		<p>Yours truly,</p>
					<p>_________</p>
					<p>Mr. <u>".$name."</u></p>
					<p>Corresponding Address: ".$present_address."</p>
					<p>Cell No. ".$mobile_no."</p>
		   </div>

		</div>

	</div>
</body>
</html>";
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();