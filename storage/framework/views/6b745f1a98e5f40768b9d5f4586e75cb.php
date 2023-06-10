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
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: navy;">
        <div class="container">
            <a href="<?php echo e(route('barang.index')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> LIST BARANG</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <a href="<?php echo e(route('welcome')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> BIODATA MAHASISWA</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4><?php echo e($pageTitle); ?></h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0"> SELAMAT DATANG DI HOME </h4>
        </div>
    </div>
    <br>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <h4>DREAM CAR</h4>
                <div class="card">
                    <img src="https://paultan.org/image/2021/06/W463-Brabus-900-Rocket-Edition_Exterior-43-630x330.jpg" alt="Destination image" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">BRABUS G63 900 ROCKET</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>DREAM BIKE</h4>
                <div class="card">
                    <img src="https://www.cycleworld.com/resizer/JvFR7qo5JlU9NiHX-3N9bgTNRH0=/1440x0/filters:focal(969x770:979x780)/cloudfront-us-east-1.images.arcpublishing.com/octane/SMF4X53O4ZAXTO6APKF26L6KCQ.jpg" alt="Destination image" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">TRIUMPH ROCKET 3 GT</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>DREAM HOUSE</h4>
                <div class="card">
                    <img src="https://st.hzcdn.com/simgs/pictures/exteriors/woodland-point-main-house-carl-vernlund-img~44e1e2480cb3e1ae_9-2757-1-48c79d9.jpg" alt="Destination image" class="card-img-top" >
                    <div class="card-body">
                        <h3 class="card-title">WOODLAND MANSION</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\KULIAH\Semester 6\Pemrograman Framework\UTS\UTS\resources\views/home.blade.php ENDPATH**/ ?>