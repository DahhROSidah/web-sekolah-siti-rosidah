

<?php $__env->startSection('title', 'Tambah Galery'); ?>

<?php $__env->startSection('content'); ?>

<div style="
    padding:50px 8%;
    background:#f5f7fa;
    min-height:80vh;
">

    <div style="
        max-width:600px;
        margin:auto;
        background:white;
        padding:30px;
        border-radius:12px;
        box-shadow:0 4px 15px rgba(0,0,0,.08);
    ">

        <h1>Tambah Foto Galery</h1>

        <?php if($errors->any()): ?>
            <div style="
                background:#f8d7da;
                color:#842029;
                padding:15px;
                border-radius:8px;
                margin-bottom:20px;
            ">

                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

            </div>
        <?php endif; ?>

        <form
            action="<?php echo e(route('galery.store')); ?>"
            method="POST"
            enctype="multipart/form-data"
        >

            <?php echo csrf_field(); ?>

            <div style="margin-bottom:20px;">

                <label>Judul Foto</label>

                <input
                    type="text"
                    name="judul_foto"
                    value="<?php echo e(old('judul_foto')); ?>"
                    required
                    style="
                        width:100%;
                        padding:12px;
                        margin-top:8px;
                        border:1px solid #ccc;
                        border-radius:6px;
                    "
                >

            </div>


            <div style="margin-bottom:20px;">

                <label>Foto</label>

                <input
                    type="file"
                    name="file_foto"
                    accept=".jpg,.jpeg,.png"
                    required
                    style="
                        width:100%;
                        padding:12px;
                        margin-top:8px;
                    "
                >

                <small>
                    Format JPG, JPEG, PNG. Maksimal 5 MB.
                </small>

            </div>


            <button
                type="submit"
                style="
                    background:#198754;
                    color:white;
                    border:none;
                    padding:12px 20px;
                    border-radius:7px;
                    cursor:pointer;
                "
            >
                Simpan
            </button>


            <a
                href="<?php echo e(route('galery')); ?>"
                style="
                    margin-left:10px;
                    text-decoration:none;
                "
            >
                Kembali
            </a>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-ukk-rosidah\resources\views/admin/galery/create.blade.php ENDPATH**/ ?>