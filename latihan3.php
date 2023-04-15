<?php
$na = 60;
echo "Nilai Akhir : $na <br>";
if ($na>= 80){
    echo"Nilai huruf : A";
}elseif($na>=70){
    echo"Nilai huruf : B";
}elseif($na>=60){
    echo"Nilai huruf : C";
}else{
    echo"Nilai huruf : D";
}
echo "<a href='form1.php'>Kembali</a>";