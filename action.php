

<?php
echo "Thanks for submiting the data<pre>";

$firstarray = array(1 => 'Site Visit', 2 => 'Dealer/sub-dealer Visit', 3 => 'Influencer Visit', 4 => 'Technical Meet', 5 => 'Lead Generated');
$data = '';
$data[0] = $_POST['datetime'];
$_POST['first'] = $firstarray[$_POST['first']];
if(!$_POST['yourname']) {
	$data['yourname'] = '-';
} else {
	$data[1] = $_POST['yourname'];
}

if(!$_POST['yourdistrict']) {
	$data[2] = '-';
} else {
	$data[2] = $_POST['yourdistrict'];
}

if(!$_POST['first']) {
	$data[3] = '-';
} else {
	$data[3] = $_POST['first'];
}

if(!$_POST['second']) {
	$data[4] = '-';
} else {
	$data[4] = $_POST['second'];
}

if(!$_POST['third']) {
	$data[5] = '-';
} else {
	$data[5] = $_POST['third'];
}

if(!$_POST['text1']) {
	$data[6] = '-';
} else {
	$data[6] = $_POST['text1'];
}
if(!$_POST['text2']) {
	$data[7] = '-';
} else {
	$data[7] = $_POST['text2'];
}
if(!$_POST['text3']) {
	$data[8] = '-';
} else {
	$data[8] = $_POST['text3'];
}
if(!$_POST['text4']) {
	$data[9] = '-';
} else {
	$data[9] = $_POST['text4'];
}
if(!$_POST['text5']) {
	$data[10] = '-';
} else {
	$data[10] = $_POST['text5'];
}
if(!$_POST['text6']) {
	$data[11] = '-';
} else {
	$data[11] = $_POST['text6'];
}
ksort($data);
// echo '<pre>';print_r($data);exit;
$file = fopen("vinitng.csv","a");
fputcsv($file,$data);
fclose($file);
?>