<?php 

//date:untuk menampilkan tanggal dengan format tertentu

echo date("l,d-M-Y");

//TIme
//UNIX timetamp/EPOCH time
//detik yang sudah berjalan
echo time();
echo date("l", time()-60*60*40*100);

//mktime
//membuat sendri detik
//mktime (0,0,0,0,0,0) = jam,detik,bulan,tanggal,tahun
//
echo date ("l", mktime(0,0,0,8,25,1990));

//strotime
echo strtotime ("l", ("25 aug 1985"));
?>