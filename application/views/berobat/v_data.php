<section class="konten mt2">
    <div class="container-fluid">
        <div class="card border-secondary">
            <div class="card-header bg-secondary text-white">
                <?= $title; ?>

                <a href="<?=base_url('Berobat/tambah'); ?>" class="btn btn-success btn-sm float-right"> Tambah </a>
            </div>
        
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Rekam Medis</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no='1'; foreach($berobat as $r){ ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $r['tgl_berobat']; ?></td>
                                    <td><?= $r['nama_pasien']; ?></td>
                                    <td><?= $r['umur']; ?></td>
                                    <td><?= $r['jenis_kelamin']; ?></td>
                                    <td><?= $r['nama_dokter']; ?></td>
                                    <td align='center'>
                                        <a href="<?= base_url();?>berobat/rekam/<?= $r['id_berobat']; ?>" class="btn btn-success btn-sm" > Rekam </a>
                                    </td>
                                    <td>
                                        <a href="<?=base_url().'Berobat/edit/'.$r['id_berobat'];?>" 
                                            class="btn btn-warning btn-sm"> Ubah </a> |
                                        <a href="<?=base_url().'Berobat/hapus/'.$r['id_berobat'];?>" 
                                            class="btn btn-danger btn-sm"> Hapus </a>
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

