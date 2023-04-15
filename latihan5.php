<?php
$tugas = $_POST['txttugas'];
$uts = $_POST['txtuts'];
$uas = $_POST['txtuas'];

$na = ((2*$tugas) + (3*$uts) + (5*$uas)) / 10;
if ($na >= 80) {
echo "Nilai Huruf :A";
} elseif ($na >= 75) {
echo "Nilai Huruf :B+";
} elseif ($na >= 70) {
echo "Nilai Huruf :B";
}elseif ($na >= 65) {
echo "Nilai Huruf :C+";
}elseif ($na >= 60) {
echo "Nilai Huruf :C";
}elseif ($na >= 55) {
echo "Nilai Huruf :D";
} else {
echo "Nilai Huruf :E";
}
?>