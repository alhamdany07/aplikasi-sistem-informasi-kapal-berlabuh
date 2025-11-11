<?= $this->include('layout/header'); ?>

<style>
.dashboard {
    text-align: center;
    padding: 60px 30px;
}
.dashboard h1 {
    font-size: 26px;
    font-weight: 600;
    color: #0D47A1;
    margin-bottom: 15px;
}
.dashboard p {
    color: #333;
    font-size: 15px;
    line-height: 1.7;
    max-width: 600px;
    margin: 0 auto;
}
.dashboard img {
    margin-top: 20px;
    width: 80%;
    max-width: 750px;
    border-radius: 10px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.1);
}
</style>

<div class="dashboard">
    <h1>Selamat Datang di Sistem Pelabuhan Nusantara Merauke</h1>
    <p>
        Pelabuhan Nusantara di Merauke, Papua adalah Pelabuhan Perikanan Nusantara (PPN) Merauke. Pelabuhan ini memiliki peran strategis sebagai Pelabuhan Perikanan Lingkar Luar Wilayah Perairan Indonesia (Outer Ring Fishing Port) di perbatasan Indonesia dengan Papua New Guinea dan Australia, serta berperan penting dalam pengembangan perikanan tangkap di wilayah timur.
    <img src="<?= base_url('assets/img/pelabuhan.jpg'); ?>" alt="Pelabuhan Merauke">
</div>

<?= $this->include('layout/footer'); ?>
