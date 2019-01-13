<?php 
require('UserInfo.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>UserInfo Demo</title>
	<style>
table {
	margin-top: 20px;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
h2{font-family: sans-serif,'Helvetica';}
</style>

</head>
<body>
<center><h2>UserInfo demo</h2></center>


	<table>
		<tr>
			<th>Time</th>
			<th>Ip</th>
			<th>Device</th>
			<th>Os</th>
			<th>Browser</th>
			<th>Port</th>
			<th>Location</th>
			<th>Directory</th>
		</tr>
		<tr>
			<td><?= UserInfo::get_time();?></td>
			<td><?= UserInfo::get_ip();?></td>
			<td><?= UserInfo::get_device();?></td>
			<td><?= UserInfo::get_os();?></td>
			<td><?= UserInfo::get_browser();?></td>
			<td><?= UserInfo::get_port();?></td>
			<td><?= UserInfo::get_location();?></td>
			<td><?= UserInfo::get_directory();?></td>
		</tr>
	</table>

	<?
	include('connect.php');

	$sql = 'INSERT INTO user_info (time, ip, device, os, browser, port, location, directory) VALUES (:time, :ip, :device, :os, :browser, :port, :location, :directory)';
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['time' => UserInfo::get_time(), 'ip' => UserInfo::get_ip(), 'device' => UserInfo::get_device(), 'os' => UserInfo::get_os(), 'browser' => UserInfo::get_browser(), 'port' => UserInfo::get_port(), 'location' => UserInfo::get_location(), 'directory' => UserInfo::get_directory()]);

	echo "User Info Stored";
	?>

</body>
</html>