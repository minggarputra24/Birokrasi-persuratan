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

    <!-- <table class="table table-bordered table-striped">
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
        </thead> -->
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>