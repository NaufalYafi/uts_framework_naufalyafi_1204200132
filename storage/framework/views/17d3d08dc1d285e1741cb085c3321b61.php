<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <style>
        .card {
            margin-bottom: 30px;
        }
    </style>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: rgb(0, 0, 0);">
        <div class="container">
            <a href="<?php echo e(route('barang.index')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> LIST
                BARANG TOKO AFINDA</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <a href="<?php echo e(route('welcome')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i> KEMBALI KE PROFIL MAHASISWA</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4><?php echo e($pageTitle); ?></h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0"> SELAMAT DATANG DI TOKO AFINDA</h4>
        </div>
    </div>
    <br>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <h4>ALAT TULIS</h4>
                <div class="card">
                    <img src="<?php echo e(Vite::asset('resources/images/download (3).jpg')); ?>" alt="image"
                        alt="Destination image" class="card-img-top" style="height: 200px">
                    <div class="card-body">
                        <h3 class="card-title">BULPOIN, PENSIL, PENGHAPUS, BUKU, PENGGARIS</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>SEMBAKO</h4>
                <div class="card">
                    <img src="<?php echo e(Vite::asset('resources/images/learning_img.png')); ?>" alt="image"
                        alt="Destination image" class="card-img-top" style="height: 200px">
                    <div class="card-body">
                        <h3 class="card-title">BERAS, MINYAK, GULA, TEH, KECAP, SAOS</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>FOTO COPY</h4>
                <div class="card">
                    <img src="<?php echo e(Vite::asset('resources/images/PUSATFOTOKOPI-5-Fungsi-Mesin-Fotocopy-yang-Jarang-Orang-Tahu-1200x900-1-1.jpg')); ?>"
                        alt="image" alt="Destination image" class="card-img-top" style="height: 200px">
                    <div class="card-body">
                        <h3 class="card-title">PRINT, FOTOCOPY, KERTAS HVS, JILID, BENER</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH C:\Users\Asus\OneDrive\Dokumen\coding\semester 6\Framework\uts_framework_naufalyafi_1204200132\resources\views/home.blade.php ENDPATH**/ ?>