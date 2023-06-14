<section width="600px"class="content mt2">  <!--Membuat Data User-->
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-secondary text-white">
                <?= $title; ?>

                <a href="<?= base_url('Dokter'); ?>" class="btn btn-success btn-sm float-right">Kembali</a>
            </div>

            <div class="card-body">
                <form method="POST" action="<?= base_url('Dokter/update'); ?>" >
                    <input type="hidden" name='id_dokter' value="<?= $r['id_dokter']; ?>">
                    <div class="form-group">
                        <label for="" >Nama Dokter</label>
                        <input type="text" name="nama_dokter" value="<?= $r['nama_dokter'];?>" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>