<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<!-- list category page -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-dark" style="border-radius:15px 15px 0px 0px;">
                <div class=" d-flex justify-content-end mb-2">
                    <a href="<?=route_to('category_create')?>" class="btn btn-md btn-info">
                        <i class="fa fa-plus"></i> 
                        Create record
                    </a>
                </div> 
            </div>
            <div class="card-body">
                <?php if (session()->getFlashdata('message')): ?>
                    <div class="alert alert-info">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php endif; ?>
                <table id="generalTable" class="table table-bordered table-striped dt-responsive nowrap w-100">
                    <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i= 1;?>
                        <?php foreach ($categories as $data): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $data['name'] ?></td>
                                <td>
                                    <div class="btn-group-sm">
                                        <a href="<?= route_to('category_edit', $data['id']) ?>"
                                            class="btn btn-warning text-white">
                                            <i class="far fa-edit"></i>
                                            Edit
                                        </a>
                                        <a href="#" onclick="modalDelete('Category', '<?= $data['name'] ?>', 'category/<?= $data['id'] ?>', '<?= route_to('category_list') ?>')" class="btn btn-danger f-12">
                                            <i class="far fa-trash-alt"></i>
                                            Delete
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<?= $this->endSection(); ?>



