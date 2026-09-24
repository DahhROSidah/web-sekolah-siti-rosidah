<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $__env->yieldContent('title', 'SMKN 1 CIJATI'); ?>
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fb;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .nav-link {
            font-weight: 500;
        }

        main {
            min-height: 80vh;
        }

        footer {
            background: #212529;
            color: white;
            padding: 25px 0;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                SMKN 1 CIJATI
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('profil')); ?>">
                            Profil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('jurusan')); ?>">
                            Jurusan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('guru')); ?>">
                            Guru
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('ekstrakurikuler')); ?>">
                            Ekstrakurikuler
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('galery')); ?>">
                            Galeri
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('berita')); ?>">
                            Berita
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


    
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>


    
    <footer>
        <div class="container text-center">
            <p class="mb-0">
                © <?php echo e(date('Y')); ?> SMKN 1 CIJATI
            </p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html><?php /**PATH C:\laragon\www\web-ukk-rosidah\resources\views/layouts/app.blade.php ENDPATH**/ ?>