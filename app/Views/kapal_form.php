<?= $this->include('layout/header'); ?>

<style>
/* === AREA UTAMA === */
.main-content {
  background-color: #f5f8ff;
  min-height: calc(100vh - 80px);
  padding: 10px 40px; /* dikurangi padding atas biar lebih naik */
  margin-left: 220px;
  display: flex;
  justify-content: center;
  align-items: flex-start;
}

/* === KARTU FORM === */
.form-card {
  background: #fff;
  width: 100%;
  max-width: 700px;
  padding: 35px 50px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  margin-top: 0; /* naikkan sedikit (0 dari sebelumnya 10px) */
}

/* === JUDUL === */
.form-card h2 {
  text-align: center;
  color: #0D47A1;
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
}

/* === FORM === */
form {
  display: flex;
  flex-direction: column;
  gap: 18px;
}

form label {
  font-weight: 600;
  color: #333;
  margin-bottom: 5px;
}

form input, form select {
  width: 100%;
  padding: 10px 12px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 15px;
  transition: all 0.2s ease;
}

form input:focus, form select:focus {
  border-color: #1565C0;
  box-shadow: 0 0 4px rgba(21,101,192,0.3);
  outline: none;
}

/* === TOMBOL === */
.btn-submit {
  background-color: #1565C0;
  color: white;
  border: none;
  padding: 12px 0;
  border-radius: 8px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.3s ease;
  margin-top: 10px;
}

.btn-submit:hover {
  background-color: #0b47a1;
}
</style>


<div class="main-content">
  <div class="form-card">
    <h2>🛳️ Tambah Data Kapal</h2>

    <form action="<?= base_url('/kapal/simpan'); ?>" method="post">
      <div>
        <label for="nama_kapal">Nama Kapal:</label>
        <input type="text" name="nama_kapal" id="nama_kapal" placeholder="Masukkan nama kapal..." required>
      </div>

      <div>
        <label for="tanda_selar">Tanda Selar:</label>
        <input type="text" name="tanda_selar" id="tanda_selar" placeholder="Masukkan tanda selar..." required>
      </div>

      <div>
        <label for="tanggal_tiba">Tanggal Tiba:</label>
        <input type="date" name="tanggal_tiba" id="tanggal_tiba" required>
      </div>

      <div>
        <label for="tanggal_berangkat">Tanggal Berangkat:</label>
        <input type="date" name="tanggal_berangkat" id="tanggal_berangkat">
      </div>

      <div>
        <label for="status">Status:</label>
        <select name="status" id="status" required>
          <option value="TIBA">TIBA</option>
          <option value="BERLAYAR">BERLAYAR</option>
        </select>
      </div>

      <button type="submit" class="btn-submit">💾 Simpan</button>
    </form>
  </div>
</div>

<?= $this->include('layout/footer'); ?>
