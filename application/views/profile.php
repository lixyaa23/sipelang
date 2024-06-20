<div class="container">
    <h1><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <div class="card-header">
                            <h3><?= isset($user['nama']) ? $user['nama'] : 'Amalia Nur Alifah'; ?></h3>
                        </div>
                        <tr>
                            <th>NIP</th>
                            <td><?= isset($user['nip']) ? $user['nip'] : '2224089215'; ?></td>
                        </tr>
                        <tr>
                            <th>Satker</th>
                            <td><?= isset($user['satker']) ? $user['satker'] : 'KEJAKSAAN NEGERI PURWAKARTA'; ?></td>
                        </tr>
                        <tr>
                            <th>Bidang</th>
                            <td><?= isset($user['bidang']) ? $user['bidang'] : 'KELOMPOK JABATAN FUNGSIONAL'; ?></td>
                        </tr>
                        <tr>
                            <th>Jabatan</th>
                            <td><?= isset($user['jabatan']) ? $user['jabatan'] : 'KEPALA KELOMPOK JABATAN FUNGSIONAL 1'; ?></td>
                        </tr>
                        <tr>
                            <th>Eselon</th>
                            <td><?= isset($user['eselon']) ? $user['eselon'] : 'Non Eselon'; ?></td>
                        </tr>
                        <tr>
                            <th>Pangkat</th>
                            <td><?= isset($user['pangkat']) ? $user['pangkat'] : 'Muda Wira'; ?></td>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <td><?= isset($user['nik']) ? $user['nik'] : '899992775'; ?></td>
                        </tr>
                        <tr>
                            <th>Telp (WhatsApp)</th>
                            <td><?= isset($user['telp']) ? $user['telp'] : '0895343415665'; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= isset($user['email']) ? $user['email'] : 'amalia@kejaksaan.go.id'; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
