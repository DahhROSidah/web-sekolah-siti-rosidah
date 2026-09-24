

<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>


<div class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="fw-bold">
            <?php echo e($profil->nama_sekolah ?? 'SMKN 1 Cijati'); ?>

        </h1>
        <p class="lead">
            Mencetak generasi unggul, berkarakter, dan siap bersaing di dunia kerja maupun industri.
        </p>
        <a href="<?php echo e(route('profil')); ?>" class="btn btn-light btn-lg mt-2">
            Lihat Profil Sekolah
        </a>
    </div>
</div>


<?php if(isset($profil)): ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 mb-4">
            <h4 class="fw-bold">Visi</h4>
            <p><?php echo e(Str::limit($profil->visi, 200)); ?></p>
        </div>
        <div class="col-md-6 mb-4">
            <h4 class="fw-bold">Misi</h4>
            <p><?php echo e(Str::limit($profil->misi, 200)); ?></p>
        </div>
    </div>
</div>
<?php endif; ?>


<div class="bg-light py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Jurusan / Program Keahlian</h2>
        <div class="row g-3">
            <?php $__empty_1 = true; $__currentLoopData = $jurusans ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-3 col-sm-6">
                    <div class="card h-100 text-center shadow-sm">
                        <?php if($jurusan->gambar): ?>
                            <img src="<?php echo e(asset('storage/' . $jurusan->gambar)); ?>"
                                 class="card-img-top"
                                 alt="<?php echo e($jurusan->nama_jurusan); ?>"
                                 style="height: 150px; object-fit: cover;">
                        <?php endif; ?>
                        <div class="card-body">
                            <h6 class="card-title"><?php echo e($jurusan->nama_jurusan); ?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-center text-muted">Belum ada data jurusan.</p>
            <?php endif; ?>
        </div>
    </div>
</div>


<div class="container py-5">
    <h2 class="text-center fw-bold mb-4">Ekstrakurikuler</h2>
    <div class="row g-3">
        <?php $__empty_1 = true; $__currentLoopData = $ekstrakurikulers ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ekstra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-3 col-sm-6">
                <div class="card h-100 text-center shadow-sm">
                    <?php if($ekstra->logo): ?>
                        <img src="<?php echo e(asset('storage/' . $ekstra->logo)); ?>"
                             class="card-img-top"
                             alt="<?php echo e($ekstra->nama_ekstra); ?>"
                             style="height: 150px; object-fit: cover;">
                    <?php endif; ?>
                    <div class="card-body">
                        <h6 class="card-title"><?php echo e($ekstra->nama_ekstra); ?></h6>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-center text-muted">Belum ada data ekstrakurikuler.</p>
        <?php endif; ?>
    </div>
</div>


<div class="bg-light py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Galeri Sekolah</h2>
        <div class="row g-3">
            <?php $__empty_1 = true; $__currentLoopData = $galeries ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-3 col-sm-6">
                    <img src="<?php echo e(asset('storage/' . $galery->file_foto)); ?>"
                         class="img-fluid rounded shadow-sm"
                         alt="<?php echo e($galery->judul_foto); ?>"
                         style="height: 150px; width: 100%; object-fit: cover;">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-center text-muted">Belum ada foto galeri.</p>
            <?php endif; ?>
        </div>
        <div class="text-center mt-3">
            <a href="<?php echo e(route('galery')); ?>" class="btn btn-outline-primary">
                Lihat Semua Foto
            </a>
        </div>
    </div>
</div>


<div class="container py-5">
    <h2 class="text-center fw-bold mb-4">Berita Terbaru</h2>
    <div class="row g-3">
        <?php $__empty_1 = true; $__currentLoopData = $beritas ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <?php if($berita->gambar): ?>
                        <img src="<?php echo e(asset('storage/' . $berita->gambar)); ?>"
                             class="card-img-top"
                             alt="<?php echo e($berita->judul); ?>"
                             style="height: 180px; object-fit: cover;">
                    <?php endif; ?>
                    <div class="card-body">
                        <h6 class="card-title"><?php echo e($berita->judul); ?></h6>
                        <p class="card-text text-muted small">
                            <?php echo e(Str::limit(strip_tags($berita->isi_berita), 100)); ?>

                        </p>
                        <a href="<?php echo e(route('berita.show', $berita->slug ?? $berita->id)); ?>"
                           class="btn btn-sm btn-primary">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-center text-muted">Belum ada berita.</p>
        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-ukk-rosidah\resources\views/Home.blade.php ENDPATH**/ ?>