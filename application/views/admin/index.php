<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- <div class="card mb-3 col-lg-6 bg-primary">
        <div class="row g-0">
            <div class="col-md-4">
                <button class="btn btn-primary">tes</button>
            </div>
        </div>
    </div> -->

    <div class="content">
    
    <div class="row">
        <div class="col-sm mb-2">
            <div class="card bg-gradient-primary">
                <div class="card-body text-center">
                    <h5 class="card-title text-white">Gatau di isi opo</h5>
                    <p class="card-text text-gray-500">With supporting text below as a natural lead-in to additional content.</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card col-sm-6 bg-gradient-info">
                <div class="card-body">
                <i class="fas fa-envelope-open"></i>
                    <h5 class="card-title text-gray-800">Surat Masuk</h5>
                    <p class="card-text text-gray-900">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card bg-gradient-success">
                <div class="card-body">
                    <h5 class="card-title text-white">Surat Keluar</h5>
                    <p class="card-text text-white">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <div class="card bg-gradient-warning">
                <div class="card-body">
                    <h5 class="card-title text-gray-800">Disposisi</h5>
                    <p class="card-text text-gray-900">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div> -->

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-lg-4">
            <div class="card text-white bg-gradient-success h-100">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
            
                    <div class="card-body">
                            <p class="h4 mb-2 text-white">
                                <i class="fas fa-envelope-open"></i>
                                Surat Masuk
                            </p>
                        <!-- <h5 class="card-title">Surat Masuk</h5> -->
                            <p class="card-text mt-3">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="<?= base_url('user/suratMasuk'); ?>">
                        <button class="btn btn-primary"> Selengkapnya </button>
                        </a>
                    </div>
                    <div class="card-footer bg-gradient-secondary">
                        <small class="text-white">Last updated 3 mins ago</small>
                    </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-gradient-danger h-100">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                            <p class="h4 mb-2 text-white">
                                <i class="fas fa-envelope"></i>
                                Surat Keluar
                            </p>
                        <!-- <h5 class="card-title">Surat Masuk</h5> -->
                        <p class="card-text mt-3">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer bg-gradient-secondary">
                        <small class="text-white">Last updated 3 mins ago</small>
                    </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-gradient-warning h-100">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                            <p class="h4 mb-2 text-white">
                                <i class="fas fa-sticky-note"></i>
                                Disposisi
                            </p>
                        <!-- <h5 class="card-title">Surat Masuk</h5> -->
                        <p class="card-text mt-3">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer bg-gradient-secondary">
                        <small class="text-white">Last updated 3 mins ago</small>
                    </div>
            </div>
        </div>
</div>

</div>

</div>
<!-- /.container-fluid -->




</div>
<!-- End of Main Content -->