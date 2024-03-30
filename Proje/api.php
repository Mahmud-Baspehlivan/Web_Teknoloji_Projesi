<?php

//step1
$cSession = curl_init(); 
//step2
curl_setopt($cSession,CURLOPT_URL,"http://www.omdbapi.com/?apikey=ddd0615c&t=godfather");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5

$result = json_decode($result);

?>
<html>
<head>
</head>
<body>
<h4><?=$result->Title?></h4>
<img src="<?= $result->Poster ?>" alt="">
</body>
</html>