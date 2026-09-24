

<?php $__env->startSection('title', 'Profil Sekolah'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">

    
    <div class="text-center mb-5">
        <?php if(!empty($profil->logo)): ?>
            <img src="<?php echo e(asset('storage/' . $profil->logo)); ?>"
                 alt="Logo <?php echo e($profil->nama_sekolah); ?>"smk 1 cijati
                 width="100" height="100"
                 style="object-fit: contain;"
                 class="mb-3">
        <?php endif; ?>
        <h1 class="fw-bold"><?php echo e($profil->nama_sekolah ?? 'SMKN 1 Cijati'); ?></h1>
    </div>

    
    <div class="mb-4">
        <h4 class="fw-bold border-bottom pb-2">Visi</h4>
        <p><?php echo e($profil->visi ?? '-'); ?></p>
    </div>

    
    <div class="mb-4">
        <h4 class="fw-bold border-bottom pb-2">Misi</h4>
        <p><?php echo e($profil->misi ?? '-'); ?></p>
    </div>

    
    <div class="mb-4">
        <h4 class="fw-bold border-bottom pb-2">Sejarah</h4>
        <p><?php echo e($profil->sejarah ?? '-'); ?></p>
    </div>

    
<?php if(session('admin_id')): ?>
    <div class="text-end">
        <a href="<?php echo e(route('profil.edit')); ?>" class="btn btn-warning">
            Edit Profil
        </a>
    </div>
<?php endif; ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-ukk-rosidah\resources\views/profil.blade.php ENDPATH**/ ?>