

<?php $__env->startSection('title', 'Data Guru'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Guru</h2>
        <?php if(session('admin_id')): ?>
    <a href="<?php echo e(route('guru.create')); ?>" class="btn btn-primary">
        + Tambah Guru
    </a>
<?php endif; ?>
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
                <th style="width: 100px;">Foto</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th style="width: 180px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td>
                        <?php if($guru->foto): ?>
                            <img src="<?php echo e(asset('storage/' . $guru->foto)); ?>"
                                 alt="<?php echo e($guru->nama); ?>"
                                 width="60" height="60"
                                 style="object-fit: cover; border-radius: 6px;">
                        <?php else: ?>
                            <span class="text-muted">-</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($guru->nip ?? '-'); ?></td>
                    <td><?php echo e($guru->nama); ?></td>
                    <td><?php echo e($guru->jabatan); ?></td>
                    <td>
                        <a href="<?php echo e(route('guru.show', $guru->id)); ?>" class="btn btn-sm btn-info">
                            Detail
                        </a>
                        <a href="<?php echo e(route('guru.edit', $guru->id)); ?>" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form action="<?php echo e(route('guru.destroy', $guru->id)); ?>"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus data guru ini?');">
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
                    <td colspan="6" class="text-center">Belum ada data guru.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-ukk-rosidah\resources\views/Guru.blade.php ENDPATH**/ ?>