<?php
$host     = "radioloho.gkstreamen.nl";
$port     = "8044";
$U     = "admin";
$Pdoo     = "devnull";

$URL = "http://$host:$port/7.html";

    $c = curl_init();
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c,CURLOPT_USERAGENT, "SHOUTcast Whats Playing (Mozilla Compatible)");
    curl_setopt($c, CURLOPT_URL, $URL);
    $contents = curl_exec($c);
    curl_close($c);

    $what = explode(",",$contents);
    echo "Listeners $what[0]<br>
    Currently Playing on the radio: $what[6]<br>";
?> 