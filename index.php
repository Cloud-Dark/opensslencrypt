
<?php

	$data= '
aku pengen kamu, iya kamuuuuuuu
  ';
  $date = new DateTime();
  $result = $date->format('ymdhis');
	$key = md5($result);
  echo "key: $key";
	?>
<br>
	<?php
	$method="AES-128-CTR";
	$key =  $result;
	$iv="RLv~K1a37)OOb49@9q[5cI9P/mGfmm9c|5r_20q(b[sP9l*Hl88FfCWN~_2r]o2q";
	$option=0;

	echo "Data sebelum dienkripsi = $data <br/>";

	$dataTerenkripsi=openssl_encrypt($data, $method, $key, $option, $iv);
	echo "Data setelah dienkripsi = $dataTerenkripsi<br/>";

	$dataDecrypt=openssl_decrypt($dataTerenkripsi, $method, $key, $option, $iv);
	echo "Data terenkripsi ketika di decrypt = $dataDecrypt";

?>
<br>

<?php
// $json = $dataDecrypt;
//
// $obj = json_decode($json);
// print $obj->{'name'};
// print $obj->{'age'};
// print $obj->{'city'};
 ?>
