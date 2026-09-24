

<?php $__env->startSection('title', 'Daftar Berita'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="text-2xl font-bold mb-6">Berita Terbaru</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php $__empty_1 = true; $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <?php if($berita->gambar): ?>
                    <img src="<?php echo e(asset('storage/' . $berita->gambar)); ?>" alt="<?php echo e($berita->judul); ?>" class="w-full h-40 object-cover">
                <?php endif; ?>

                <div class="p-4">
                    <h2 class="font-semibold text-lg mb-2">
                        <a href="<?php echo e(route('berita.show', $berita->slug)); ?>" class="hover:text-blue-600">
                            <?php echo e($berita->judul); ?>

                        </a>
                    </h2>
                    <p class="text-sm text-gray-500 mb-2">
                        <?php echo e($berita->penulis ?? 'Admin'); ?> &middot; <?php echo e($berita->created_at->diffForHumans()); ?>

                    </p>
                    <p class="text-gray-700 text-sm">
                        <?php echo e(Str::limit(strip_tags($berita->isi), 100)); ?>

                    </p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="col-span-3 text-center text-gray-500">Belum ada berita.</p>
        <?php endif; ?>
    </div>

    <div class="mt-8">
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-ukk-rosidah\resources\views/berita.blade.php ENDPATH**/ ?>