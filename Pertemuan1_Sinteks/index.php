<?php
//pertemuan 1 -Sinteks

//stander outpus
//echo,print = echo "Muhammad";
//print_r    = print_r ("Muhammad");
//var_dump   = var_dumb ("Muhammad"); = yang ditampilkan output, tipe data, ukuran

//penulisan sinteks php
//1. php di dalam html
//2. html di dalam php

//tipe data  dan variabal
//variabal
//tidak boleh diawal dengan angka, tapi boleh mengandung angka
$nama1="muhammad";
echo "hello $nama1";

//operator
//aritmatika 
//+-*/%
$x=10;
$y=20;
echo $x * $y;

//penggunaan string
//.
$nama_dpn="muh";
$nama_blk="asip";
echo $nama_dpn . "".$nama_blk;

//assignment
//=,+=, -+, *+, /+
//$x=1;

//perbandingan
//<,>,<=,>=,==,!=
var_dump(1=="1");

//identitas
//===,!===
var_dump(1==="1");

//Logika
//&&,||,!

$z=30;
var_dump($z<20 || $z %2 ==0)


?>