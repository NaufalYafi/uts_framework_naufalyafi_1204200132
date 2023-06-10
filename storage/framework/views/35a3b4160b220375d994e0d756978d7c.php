<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata Mahasiswa</title>
    <style>
        .jumbotron {
            background-image: url('https://wallpaperaccess.com/full/1431610.jpg');
            background-size: cover;
            background-position: center center;
            height: 388px;
        }
        .card {
            margin-bottom: 30px;
        }
    </style>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1 style="color: white">BIODATA MAHASISWA</h1>
            <img class="img-thumbnail" src="<?php echo e(Vite::asset('resources/images/gigachad.png')); ?>" alt="image" style="width: 200px; height: 200px;">
            <h4 style="color: white">NAMA : LUKMAN SATRIYO BAGUS WICAKSONO</h4>
            <h4 style="color: white">NIM : 1204200086</h4>
            <h4 style="color: white">KELAS : IS-03-03</h4>
        </div>
    </div>

    <div class="col-md-2 offset-md-5 mt-4">
        <div class="d-grid gap-2">
            <a class="btn btn-dark" style="background-color: navy; color: gold;" href="<?php echo e(url('home')); ?>">Home</a>
        </div>
    </div>
    <hr>

    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <h4>SEKOLAH</h4>
                <div class="card">
                    <img src="https://akcdn.detik.net.id/community/media/visual/2021/10/22/it-telkom-surabaya.jpeg?w=700&q=90" alt="Destination image" class="card-img-top" style="height: 200px">
                    <div class="card-body">
                        <h3 class="card-title">INSTITUT TEKNOLOGI TELKOM SURABAYA</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>PENDIDIKAN</h4>
                <div class="card">
                    <img src="https://www.dice.com/binaries/content/gallery/dice/insights/2017/12/shutterstock_517670749-1024x613.jpg" alt="Destination image" class="card-img-top" style="height: 200px">
                    <div class="card-body">
                        <h3 class="card-title">S1 SISTEM INFORMASI</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>DREAM JOB</h4>
                <div class="card">
                    <img src="https://img.freepik.com/free-vector/influencer-recording-new-video_23-2148526236.jpg?w=2000" alt="Destination image" class="card-img-top" style="height: 200px">
                    <div class="card-body">
                        <h3 class="card-title">TECH INFLUENCER</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\KULIAH\Semester 6\Pemrograman Framework\UTS\UTS\resources\views/welcome.blade.php ENDPATH**/ ?>