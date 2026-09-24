

<?php $__env->startSection('title', 'Data Ekstrakurikuler'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
       <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Ekstrakurikuler</h2>

    <?php if(session('admin_id')): ?>
        <a href="<?php echo e(route('ekstrakurikuler.create')); ?>" class="btn btn-primary">
            + Tambah Ekstrakurikuler
        </a>
    <?php endif; ?>
</div>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 50px;">No</th>
                <th style="width: 100px;">Logo</th>
                <th>Nama Ekstra</th> pmr
                <th>Deskripsi</th>
                <th>Pembina</th>
                <th style="width: 180px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $ekstrakurikulers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ekstra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td>
                        <?php if($ekstra->logo): ?>
                            <img src="<?php echo e(asset('storage/' . $ekstra->logo)); ?>"
                                 alt="<?php echo e($ekstra->nama_ekstra); ?>"rohis
                                 width="60" height="60"
                                 style="object-fit: cover; border-radius: 6px;">
                        <?php else: ?>
                            <span class="text-muted">-</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($ekstra->nama_ekstra); ?></td>pramuka
                    <td><?php echo e(Str::limit($ekstra->deskripsi, 80)); ?></td>
                    <td><?php echo e($ekstra->pembina); ?></td>
                    <td>
                        <a href="<?php echo e(route('ekstrakurikuler.show', $ekstra->id)); ?>" class="btn btn-sm btn-info">
                            Detail
                        </a>
                        <a href="<?php echo e(route('ekstrakurikuler.edit', $ekstra->id)); ?>" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form action="<?php echo e(route('ekstrakurikuler.destroy', $ekstra->id)); ?>"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus ekstrakurikuler ini?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="text-center">Belum ada data ekstrakurikuler.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-ukk-rosidah\resources\views/Ekstrakurikuler.blade.php ENDPATH**/ ?>