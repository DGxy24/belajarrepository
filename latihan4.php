<?php
$na = $_POST['txtna'];
echo "Nilai Akhir: $na <br>";
if ($na >= 80) { echo "Nilai Huruf :A";
} elseif ($na >= 70) {
echo "Nilai Huruf :B";
} elseif ($na >= 60) {
echo "Nilai Huruf :C";
} else {
echo "Nilai Huruf :D";
}
echo"<a href='form1.php'>Kembali</a>";