<?php

	$name = $_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$url = 'https://script.google.com/macros/exec?service=AKfycbw7gKzP-WYV2F5mc9RaR7yE3Ve1yN91Tjs91hp_jHSE02dSv9w&nama='.$name.'&tanggal='.$tanggal;
	$content = file_get_contents($url);
	$json = json_decode($content, true);

	if ($json['status']=='error'){
		exit("Data tidak ditemukan");
	}
	
	$lahir=explode(",",$json['data']['lahir']);
	
	$name="<br/>
			<table> 
				
				<tr>
					<td>Nama</td>
					<td>:&nbsp;</td>
					<td>".$json['data']['nama']."</td>
				</tr>
				<tr>
					<td>Hari Lahir</td>
					<td>:&nbsp;</td>
					<td>".$lahir[0]."</td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>:&nbsp;</td>
					<td>".$lahir[1]."</td>
				</tr>
				<tr>
					<td>Usia</td>
					<td>:&nbsp;</td>
					<td>".$json['data']['usia']."</td>
				</tr>
				<tr>
					<td>Zodiak</td>
					<td>:&nbsp;</td>
					<td>".$json['data']['zodiak']."</td>
				</tr>
			</table>
			
		";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo $name;
?>