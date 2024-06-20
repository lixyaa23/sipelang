
<?= $this->session->flashdata('pesan'); ?>

<div class="card">
    <div class="card-header">
        <a href="<?= base_url('tilang/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data Tilang</a>
        <a href="<?= base_url('tilang/print') ?>" class="btn btn-info btn-sm"><i class="fas fa-print"></i> Print</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>ID Tilang</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Pasal</th>
                    <th>Denda</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach($tilang as $ttl) : ?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $ttl->id_tilang ?></td>
                        <td><?= $ttl->nama ?></td>
                        <td><?= $ttl->alamat ?></td>
                        <td><?= $ttl->pasal ?></td>
                        <td><?= $ttl->denda ?></td>
                        <td>
                            <button data-toggle="modal" data-target="#edit<?= $ttl->id_tilang ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                            <a href="<?= base_url('tilang/delete/' . $ttl->id_tilang) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin mengahapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>

<!-- Modal -->
<?php foreach($tilang as $ttl) { ?>
<div class="modal fade" id="edit<?= $ttl->id_tilang ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('tilang/edit/' . $ttl->id_tilang) ?>" method="POST">
                <div class="form-group">
                        <label>ID Tilang</label>
                        <input type="text" name="id_tilang" class="form-control" value="<?= $ttl->id_tilang ?>">
                        <?= form_error('id_tilang', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $ttl->nama ?>">
                        <?= form_error('nama', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control"><?= $ttl->alamat ?></textarea>
                        <?= form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Pasal</label>
                        <input type="text" name="pasal" class="form-control" value="<?= $ttl->pasal ?>">
                        <?= form_error('pasal', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                        <label>Denda</label>
                        <input type="text" name="denda" class="form-control" value="<?= $ttl->denda ?>">
                        <?= form_error('denda', '<div class="text-small text-danger">', '</div>'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
  </div>
</div>
<?php } ?>
