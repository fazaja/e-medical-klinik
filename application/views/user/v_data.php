<section class="konten mt2">
    <div class="container-fluid">
        <div class="card border-secondary">
            <div class="card-header bg-secondary text-white">
                <?= $title; ?>

                <a href="<?=base_url('User/tambah'); ?>" class="btn btn-success btn-sm float-right"> Tambah </a>
            </div>
        
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no='1'; foreach($user as $r){ ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $r['username']; ?></td>
                                    <td><?= $r['password']; ?></td>
                                    <td><?= $r['nama_lengkap']; ?></td>
                                    <td>
                                        <a href="<?=base_url().'User/edit/'.$r['id'];?>" class="btn btn-warning btn-sm"> Ubah </a> |
                                        <a href="<?=base_url().'User/hapus/'.$r['id'];?>" class="btn btn-danger btn-sm"> Hapus </a>
                                    </td>
                                </tr>
                            <?php $no++; } ?>    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

