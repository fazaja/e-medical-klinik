<section class="content mt2">  <!--Membuat Data User-->
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-secondary text-white">
                <?= $title; ?>

                <a href="<?= base_url('Pasien'); ?>" class="btn btn-success btn-sm float-right">Kembali</a>
            </div>

            <div class="card-body">
                <form method="POST" action="<?= base_url('Pasien/update'); ?>" >
                    <input type="hidden" name='id_pasien' value="<?= $r['id_pasien']; ?>">
                    <div class="form-group">
                        <label for="" >Nama Pasien</label>
                        <input type="text" name="nama_pasien" value="<?= $r['nama_pasien'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" value="<?= $r['jenis_kelamin'];?>" id="" class="form-control" required>
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Umur</label>
                        <input type="text" name="umur" value="<?= $r['umur'];?>" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>