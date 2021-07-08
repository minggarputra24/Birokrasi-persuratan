<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800"><i class="fas fa-inbox"></i> <?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <hr class="border border-dark border-5 mt-1">
    
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Surat Dari</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" name="name" placeholder="Asal Surat">
                <?= form_error('name', '<small class="text-danger pl-3">', ' </small>'); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Tanggal Surat</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" name="name" placeholder="Tanggal Surat Masuk">
                <?= form_error('name', '<small class="text-danger pl-3">', ' </small>'); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">No Surat</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" name="name" placeholder="Nomor Surat">
                <?= form_error('name', '<small class="text-danger pl-3">', ' </small>'); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Diterima Tanggal</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" name="name" placeholder="Tanggal Surat Diterima">
                <?= form_error('name', '<small class="text-danger pl-3">', ' </small>'); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">No Agenda</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" name="name" placeholder="No Agenda">
                <?= form_error('name', '<small class="text-danger pl-3">', ' </small>'); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Perihal</label>
        <div class="col-sm-10">
            <input type="name" class="form-control" id="name" name="name" placeholder="Perihal">
                <?= form_error('name', '<small class="text-danger pl-3">', ' </small>'); ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Lampiran</label>
        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Silahkan Masukkan File</label>
                            </div>
                        </div>
    </div>
    <hr>
    <a href="#" class="btn btn-success mb-3">
        Tambah Data
    </a>

    <a href="<?= base_url('user/suratMasuk');?>" class="btn btn-danger mb-3">
        Batal
    </a>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->