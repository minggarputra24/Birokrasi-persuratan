<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Surat dari</th>
            <th class="text-center">Tgl Surat</th>
            <th class="text-center">No. Surat</th>
            <th class="text-center">Diterima tanggal</th>
            <th class="text-center">No. Agenda</th>
            <th class="text-center">Perihal</th>
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
                    <a  class="btn btn-sm btn-success mb-3">Update</a>
                    <a  class="btn btn-sm btn-danger mb-3">Delete</a>
                    <a  class="btn btn-sm btn-warning mb-3">Print</a>
                </td>
            </tr>
        
    </table>
    
    <!-- <hr class="border border-dark border-5"> -->

    <h4>Diteruskan Kepada : </h4>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Sub Bagian Tata Usaha
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
            Seksi Keamanan Penerbangan dan Pelayanan Darurat
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
            Seksi Teknik dan Pelayanan Jasa
        </label>
    </div>

    <hr class="border border-dark border-5">

    <u class="h4">Isi Disposisi</u>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
            Tindak Lanjut
        </label>

        
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
            Untuk Diketahui
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
            UMP
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
            Hadir
        </label>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->