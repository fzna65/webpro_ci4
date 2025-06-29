<?php 
$nilai = 60;
$A = "Sangat Baik";
$B = "Baik";
$C = "Cukup";
$D = "Kurang";
$E = "Sangat Kurang";
if($nilai >= 80){
    $predikat = $A;
} elseif($nilai >= 70 && $nilai <= 80){
    $predikat = $B;
} elseif($nilai >= 60 && $nilai <= 70){
    $predikat = $C;
} elseif($nilai >= 50 && $nilai <= 60){
    $predikat = $D;
} elseif($nilai <= 50){
    $predikat = $E;
} else{
    echo "nilai yang anda masukan salah";
}
echo "$predikat";
?>