
<!DOCTYPE html>
<html lang="en" dir="ltr" style="">
<head>
  <meta charset="utf-8">
  <title>UBAH DATA BUKU</title>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/style/style.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"/>
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/bg/logo.png">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700;800&display=swap" rel="stylesheet"/>

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

  <div class="contact-section">
    <br><br><br>
    <form class="contact-form" action="" method="post"  enctype="multipart/form-data">
      <br><br><br>

      <input type="hidden" name="id_buku" value="<?= $buku['id_buku']; ?>">

      <input type="text" name="judul_buku" title="Judul Buku" maxlength="30" class="contact-form-text" placeholder="Judul Buku" value="<?= $buku['judul_buku']; ?>" required>

      <input type="text" name="penulis" title="Penulis" maxlength="12" class="contact-form-text" placeholder="Penulis" value="<?= $buku['penulis']; ?>" required>

      <input type="text" name="penerbit" title="Penerbit" maxlength="12" class="contact-form-text" placeholder="Penerbit" value="<?= $buku['penerbit']; ?>" required>



      <input type="text" name="tahun_terbit" title="Tahun Terbit" maxlength="100" class="contact-form-text" placeholder="Tahun Terbit" value="<?= $buku['tahun_terbit']; ?>" required>



      <br>
      <input type="submit" class="contact-form-btn" name="ubah" value="SIMPAN">
      <a href="<?= base_url(); ?>index.php"><font class="contact-form-btn" value="KEMBALI" style="margin-right: 10px;" size="2">KEMBALI</font></a>

    </form><br><br>
  </div>
  <script src="<?= base_url(); ?>assets/style/app.js"></script>


</body>

</html>
