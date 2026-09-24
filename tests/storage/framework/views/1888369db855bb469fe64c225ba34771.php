

<?php $__env->startSection('title', 'Galery - SMKN 1 CIJATI'); ?>

<?php $__env->startSection('content'); ?>

<style>
    .galery-container {
        padding: 50px 8%;
        background: #f5f7fa;
        min-height: 80vh;
    }

    .galery-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        gap: 20px;
    }

    .galery-header h1 {
        margin: 0;
        font-size: 32px;
    }

    .btn-tambah {
        background: #198754;
        color: white;
        padding: 12px 20px;
        text-decoration: none;
        border-radius: 8px;
    }

    .btn-tambah:hover {
        background: #157347;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 8px;
        background: #d1e7dd;
        color: #0f5132;
    }

    .galery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .galery-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,.08);
    }

    .galery-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
    }

    .galery-content {
        padding: 20px;
    }

    .galery-content h3 {
        margin-top: 0;
        margin-bottom: 15px;
    }

    .aksi {
        display: flex;
        gap: 8px;
        margin-top: 15px;
    }

    .btn-edit,
    .btn-hapus {
        border: none;
        padding: 9px 14px;
        border-radius: 6px;
        cursor: pointer;
        text-decoration: none;
        color: white;
    }

    .btn-edit {
        background: #0d6efd;
    }

    .btn-hapus {
        background: #dc3545;
    }

    .kosong {
        background: white;
        padding: 40px;
        text-align: center;
        border-radius: 10px;
    }

    @media (max-width: 900px) {
        .galery-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .galery-grid {
            grid-template-columns: 1fr;
        }

        .galery-header {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>

<div class="galery-container">

    <div class="galery-header">

        <div>
            <h1>Galery</h1>
            <p>Dokumentasi kegiatan SMKN 1 CIJATI</p>
        </div>

        <a href="<?php echo e(route('galery.create')); ?>" class="btn-tambah">
            + Tambah Foto
        </a>

    </div>


    <?php if(session('success')): ?>
        <div class="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>


    <?php if($galeries->count() > 0): ?>

        <div class="galery-grid">

            <?php $__currentLoopData = $galeries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="galery-card">

                    <?php if($galery->file_foto): ?>
                        <img
                            src="<?php echo e(asset('storage/' . $galery->file_foto)); ?>"
                            alt="<?php echo e($galery->judul_foto); ?>"
                        >
                    <?php else: ?>
                        <div style="
                            height:220px;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            background:#eee;
                        ">
                            Tidak ada foto
                        </div>
                    <?php endif; ?>

                    <div class="galery-content">

                        <h3>
                            <?php echo e($galery->judul_foto); ?>

                        </h3>

                        <div class="aksi">

                            <a
                                href="<?php echo e(route('galery.edit', $galery->id)); ?>"
                                class="btn-edit"
                            >
                                Edit
                            </a>

                            <form
                                action="<?php echo e(route('galery.destroy', $galery->id)); ?>"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus foto ini?')"
                            >

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button
                                    type="submit"
                                    class="btn-hapus"
                                >
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    <?php else: ?>

        <div class="kosong">
            <h3>Belum ada foto</h3>
            <p>Silakan tambahkan foto galery.</p>
        </div>

    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-ukk-rosidah\resources\views/galery.blade.php ENDPATH**/ ?>