<?= $this->include('layout/header'); ?>

<style>
h2 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #111;
    display: flex;
    align-items: center;
    gap: 10px;
}
h2::before { content: "🛳️"; font-size: 24px; }
.btn-tambah {
    background: #1976D2;
    color: white;
    border: none;
    padding: 10px 18px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s;
}
.btn-tambah:hover { background: #0D47A1; }

table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    overflow: hidden;
    margin-top: 20px;
}
th {
    background: #1565C0;
    color: white;
    font-weight: 600;
    padding: 12px;
    text-align: center;
}
td {
    text-align: center;
    padding: 10px;
    border-bottom: 1px solid #eee;
}
tr:hover td { background-color: #f2f8ff; }
.btn-edit {
    background: #43A047;
    color: white;
    padding: 6px 12px;
    border-radius: 5px;
    text-decoration: none;
}
.btn-hapus {
    background: #E53935;
    color: white;
    padding: 6px 12px;
    border-radius: 5px;
    text-decoration: none;
}
</style>

<h2>Tabel Data Kapal Berangkat</h2>
<a href="<?= base_url('kapal/tambah'); ?>" class="btn-tambah">+ Tambah Data Kapal Berangkat</a>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kapal</th>
            <th>Tanda Selar</th>
            <th>Tanggal Berangkat</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($kapal)): ?>
            <?php $no = 1; foreach ($kapal as $k): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= esc($k['nama_kapal']); ?></td>
                    <td><?= esc($k['tanda_selar']); ?></td>
                    <td><?= esc(date('d M Y', strtotime($k['tanggal_berangkat']))); ?></td>
                    <td style="color:#2E7D32;font-weight:600;"><?= esc(strtoupper($k['status'])); ?></td>
                    <td>
                        <a href="<?= base_url('kapal/edit/'.$k['id_kapal']); ?>" class="btn-edit">✏️ Edit</a>
                        <a href="<?= base_url('kapal/hapus/'.$k['id_kapal']); ?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn-hapus">🗑️ Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">Belum ada data kapal berangkat.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->include('layout/footer'); ?>
