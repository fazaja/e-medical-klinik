<section class="konten mt2">
    <div class="container-fluid">
        <div class="card border-secondary">
            <div class="card-header bg-secondary text-white">
                <?= $title; ?>

                <a href="<?=base_url('User'); ?>" class="btn btn-success btn-sm float-right"> Kembali </a>
            </div>
        
            <div class="card-body">
            <form method="POST" action="<?=base_url('User/insert'); ?>">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</section>

