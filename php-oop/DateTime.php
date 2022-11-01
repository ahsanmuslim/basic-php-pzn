<?php

$date = new DateTime();
$date->setDate(2020,1,3);
$date->setTime(12,12,30);

//mengurangi 1 tahun
$date->add(new DateInterval("P1Y"));

//mengurangi 1 bulan 
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$date->add($minusOneMonth);

var_dump($date);

//merubah timezona
$now = new DateTime();
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

//merubah format date time menjadi String 
$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini adalah $string" . PHP_EOL;

//merubah dari string menjadi format Date time 
$waktu = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-12 10:10:10", new DateTimeZone("Asia/Jakarta"));
if($waktu){
    var_dump($waktu);
} else {
    echo "Format tanggal salah " . PHP_EOL;
}
