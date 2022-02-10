<!DOCTYPE html>
<html>
<head>
  <title>Biodata Diri</title>
</head>
<body>
  <?php
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $nrp = $_POST['nrp'];
  $kelas= $_POST['kelas'];
  $jk = $_POST['jk'];
  $ttl = $_POST['ttl'];
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
  $no = $_POST['no'];
  $email = $_POST['email'];
  ?>

  <h2 align="center">BIODATA MAHASISWA</h2>
  <h3 align="center"><i>Politeknik Elektronika Negeri Surabaya</i></h3>
  <hr />
  <br>
  <table width="745" border="1" cellspacing="0" cellpadding="5" align="center">
    <tr align="center" bgcolor="#decd9e">
      <td width="174">DATA DIRI</td>
      <td width="353">KETERANGAN</td>
      <td width="232">FOTO</td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><?php echo $nama; ?></td>
      <td rowspan="11" align="center"><img src="aqila.jpg" width="210"></td>
    </tr>
    <tr>
      <td>Jurusan</td>
      <td><?php echo $jurusan ?></td>
    </tr>
    <tr>
      <td>NRP</td>
      <td><?php echo $nrp ?></td>
    </tr>
    <tr>
      <td>Kelas</td>
      <td><?php echo $kelas ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><?php echo $jk ?></td>
    </tr>
    <tr>
      <td>Tempat, Tanggal Lahir</td>
      <td><?php echo $ttl ?>
    </tr>
    <tr>
      <td>Agama</td>
      <td><?php echo $agama ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><?php echo $alamat ?></td>
    </tr>
    <tr>
      <td>No. Hp</td>
      <td><?php echo $no ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $email ?></td>
    </tr>
  </table>
</body>
</html>