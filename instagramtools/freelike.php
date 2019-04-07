<?php
echo "Url Foto Instagram antum : ";
$sadboys = trim(fgets(STDIN));
function validasi($sadboys)
{	
 $ch=curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://nolep.website/rest-api/freelike/index.php?url=".$sadboys."");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 $result = curl_exec($ch);
 return $result;
}
$iz = validasi($sadboys);
print_r($iz);