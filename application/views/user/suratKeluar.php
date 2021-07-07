<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div> -->

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">No. Surat</th>
            <th class="text-center">Tgl Surat</th>
            <th class="text-center">Asal Surat</th>
            <th class="text-center">Deskripsi</th>
            <th colspan="4" class="text-center">Aksi</th>
        </tr>
        </thead>
        
            <tr>
                <td scope="row" class="text-center">1</td>
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
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->