<?= $this->include('layout/header'); ?>
<div style="margin-left:220px;padding:20px;">
  <h2>Tambah Data Kapal</h2>
  <form action="/kapal/simpan" method="post">
    <label>Nama Kapal</label><br>
    <input type="text" name="nama_kapal" required><br><br>

    <label>Tanda Selar</label><br>
    <input type="text" name="tanda_selar" required><br><br>

    <label>Tanggal Tiba</label><br>
    <input type="date" name="tanggal_tiba" required><br><br>

    <label>Tanggal Berangkat</label><br>
    <input type="date" name="tanggal_berangkat"><br><br>

    <button type="submit">Simpan</button>
  </form>
</div>
<?= $this->include('layout/footer'); ?>
