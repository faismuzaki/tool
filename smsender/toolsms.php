<?php
echo "Create By nolepteam! Wait";
echo ".";
sleep(1);
echo ".";
sleep(1);
echo ". \n\n";
sleep(1);
echo "nomor tujuan : ";
$no = trim(fgets(STDIN));
echo "Pesan yang ingin dikirim : ";
$msg = trim(fgets(STDIN));

function send($no,$msg)
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://nolep.website/rest-api/smsender/server1.php?no='.$no.'&msg='.$msg.'');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

	$result = curl_exec($ch);
	return $result;
}
$wow = str_replace(" ", "%20", $msg);
$sender = send($no,$wow);
print_r($sender);
