<?php
include("koneksi.php");
$sql=" select * from pemrogramanweb4tia";
$proses = mysqli_query($koneksi,$sql);
?>
<table border>
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Nilai Tugas</th>
<th>Nilai UTS</th>
<th>Nilai UAS</th>
<th>NIlai Akhir</th>
<th>NIlai Huruf</th>

</tr>
<?php
while($isi=mysqli_fetch_assoc ($proses)) :?>

<tr>
<td><?php echo $isi['nim'];?> </td>

    <td><?php echo $isi['nama'];?> </td>
    <td><?php echo $isi['ntugas'];?> </td>
    <td><?php echo $isi['nuts']?> </td>
    <td><?php echo $isi['nuas'];?> </td>
    <td><?php echo $isi['na'];?> </td>
    <td><?php echo $isi['nh'];?> </td>

    <td>
        <a href="ubah.php?x=<?php echo $isi['nim'];?>">UBAH</a>
        <a href="delete.php?x=<?php echo $isi['nim'];?>">DELETE</a>
    </td>


</tr>
<?php
endwhile;
?>
</table>

<a href="simpan.php">TAMBAH DATA</a>
