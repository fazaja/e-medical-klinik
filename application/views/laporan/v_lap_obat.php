<html>
    <head>
        <title><?= $title; ?></title>

        <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
        <h3 class="mb-0">E MEDICAL KLINIK</h3>
            <small>Jl. KENANGA</small>
            <hr>

            <h4 class="text-center">LAPORAN DATA OBAT</h4>

            <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Obat</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no='1'; foreach($obat as $r){ ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $r['nama_obat']; ?></td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>

            <table width="100%">
                <thead>
                    <tr>
                        <td></td>
                        <td></td>
                        <td width="300px">
                            <p>
                                Dumai, <?= date('d M Y');?>
                                <br>
                                Direktur
                                <br>
                                <br>
                                <br>
                                <br>
                                ________________________
                            </p>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>

    </body>
</html>