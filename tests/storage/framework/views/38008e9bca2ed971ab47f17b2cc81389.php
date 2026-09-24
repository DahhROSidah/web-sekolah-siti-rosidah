

<?php $__env->startSection('title', 'Data Jurusan'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Jurusan</h2>
        <?php if(session('admin_id')): ?>
    <a href="<?php echo e(route('jurusan.create')); ?>" class="btn btn-primary">
        + Tambah Jurusan
    </a>
<?php endif; ?>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="row g-3">
        <?php $__empty_1 = true; $__currentLoopData = $jurusans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-3 col-sm-6">
                <div class="card h-100">
                    <?php if($jurusan->gambar): ?>
                        <img src="<?php echo e(asset('storage/' . $jurusan->gambar)); ?>"
                             class="card-img-top"
                             alt="<?php echo e($jurusan->nama_jurusan); ?>" pmr
                             style="height: 160px; object-fit: cover;">
                    <?php else: ?>
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="height: 160px;">
                            <span class="text-muted">Tidak ada gambar</span>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <h6 class="card-title"><?php echo e($jurusan->nama_jurusan); ?></h6>
                        <p class="card-text text-muted small">
                            <?php echo e(Str::limit($jurusan->deskripsi, 80)); ?>

                        </p>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <a href="<?php echo e(route('jurusan.show', $jurusan->id)); ?>" class="btn btn-sm btn-info">
                            Detail
                        </a>
                        <a href="<?php echo e(route('jurusan.edit', $jurusan->id)); ?>" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form action="<?php echo e(route('jurusan.destroy', $jurusan->id)); ?>"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus jurusan ini?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12">
                <p class="text-center text-muted">Belum ada data jurusan.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-ukk-rosidah\resources\views/Jurusan.blade.php ENDPATH**/ ?>