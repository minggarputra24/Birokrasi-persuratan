<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div> -->

    <hr class="border-dark border-5 mt-1">
    <a href="#" class="btn btn-primary mb-3">
    <i class="fas fa-envelope-open-text"></i>
    Tambah Surat Masuk Baru
    </a>
    
    <div class="input-group rounded mb-3">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
        aria-describedby="search-addon" />
            <span class="input-group-text border-5" id="search-addon">
                <i class="fas fa-search"></i>
            </span>
    </div>

    <!-- <div class="dropdown show mb-3">
        <span>Show : </span>
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
        </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" option value="10">10</a>
            <a class="dropdown-item" option value="50">50</a>
            <a class="dropdown-item" href="#">100</a>
            </div>
    </div> -->

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th class="text-center">No. Urut</th>
            <th class="text-center">Tgl</th>
            <th class="text-center">No. Agenda</th>
            <th class="text-center">Tgl. Surat Masuk</th>
            <th class="text-center">No. Surat</th>
            <th class="text-center">Alamat Pengirim</th>
            <th class="text-center">Perihal Surat</th>
            <th colspan="4" class="text-center">Aksi</th>
        </tr>
        </thead>
        
            <tr>
                <td scope="row" class="text-center">1</td>
                <td class="text-center"> contoh</td>
                <td class="text-center"> contoh</td>
                <td class="text-center"> contoh</td>
                <td class="text-center"> contoh</td>
                <td class="text-center"> contoh</td>
                <td class="text-center"> contoh</td>
                <td class="text-center">
                    <a  class="btn btn-sm btn-success mb-2">Update</a>
                    <a  class="btn btn-sm btn-danger mb-2">Delete</a> <br>
                    <a  class="btn btn-sm btn-warning mb-3">Print</a>
                    <a  class="btn btn-sm btn-info mb-3">Disposisi</a>
                </td>
            </tr>
        
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->