<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800"><i class="fas fa-users"></i> <?= $title; ?></h1>
    <!-- <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div> -->

    <hr class="border border-dark border-5 mt-0">

    <table class="table table-bordered">
        <thead class="table-dark">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Lengkap</th>
            <th class="text-center">Username</th>
            <th class="text-center">Level</th>
            <th class="text-center">Action</th>
    
        </tr>
        </thead>
            <tr>
                <td scope="row" class="text-center">1</td>
                <td class="text-center"> Raihan Rachmadani </td>
                <td class="text-center"> Coba </td>
                <td class="text-center"> Admin </td>
                <td class="text-center">
                    <a  class="btn btn-sm btn-success mb-3">Edit</a>
                    <a  class="btn btn-sm btn-danger mb-3">Delete</a>
                </td>
            </tr>
        
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->