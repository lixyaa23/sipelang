<form action="<?= base_url('tilang/tambah_aksi') ?>" method="POST">
<div class="form-group">
        <label>ID Tilang</label>
        <input type="text" name="id_tilang" class="form-control">
        <?= form_error('id_tilang', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
        <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"></textarea>
        <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Pasal</label>
        <input type="text" name="pasal" class="form-control">
        <?= form_error('pasal', '<div class="text-small text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Denda</label>
        <input type="text" name="denda" class="form-control">
        <?= form_error('denda', '<div class="text-small text-danger">', '</div>'); ?>
    </div>

    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
</div>
</form>