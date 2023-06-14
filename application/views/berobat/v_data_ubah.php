<section class="content mt2">  <!--Membuat Data User-->
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-secondary text-white">
                <?= $title; ?>

                <a href="<?= base_url('Berobat'); ?>" class="btn btn-success btn-sm float-right">Kembali</a>
            </div>

            <div class="card-body">
                <form method="POST" action="<?= base_url('Berobat/update'); ?>" >
                    <input type="hidden" name='id_berobat' value="<?= $edit['id_berobat']; ?>">
                     
                    <div class="form-group">
                        <label for="" >Tanggal Berobat</label>
                        <input type="date" name="tgl_berobat" value="<?= $edit['tgl_berobat']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pasien</label>
                        <select name="pasien" id="" class="form-control" required>
                            <?php 
                                foreach($pasien as $r){
                                    if ($r['id_pasien']==$edit['id_pasien']){
                                        $aktif = "selected";
                                    }
                                    else{
                                        $aktif = "";
                                    }                         
                            ?>
                            <option value="<?= $r['id_pasien'];?>" <?= $aktif; ?>>
                                <?= $r['nama_pasien']; ?>
                            </option>
                            <?php } ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="">Dokter Tujuan</label>
                        <select name="dokter" id=""  class="form-control" required>
                            <?php 
                            foreach($dokter as $r){ 
                                if ($r['id_dokter']==$edit['id_dokter']){
                                    $aktif = "selected";
                                }else{
                                    $aktif = "";
                                }
                            ?>
                            <option value="<?= $r['id_dokter'];?>" <?= $aktif;?>>
                            <?=$r['nama_dokter'];?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Data</button>      
                </form>
            </div>
        </div>
    </div>
</section>