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
echo "Jumlah spamming (max 10) : ";
$jum = trim(fgets(STDIN));

function send($no)
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://nolep.website/rest-api/smspamming/smspamming.php?no='.$no.'');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

	$result = curl_exec($ch);
	return $result;
}
for($i=0; $i<$jum; $i++) { 
sleep(3);
$sending = send($no);
print_r($sending);
}