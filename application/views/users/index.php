<!-- page content -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">

            <div class="col-md-7">
                <h1 class="text-white">Belajar Coding From Zero to Hero</h1>
                <p class="lead text-white mt-3">Semua yang kamu butuhkan untuk memulai belajar <code>coding</code> dan meningkatkan keahlian codingmu hingga mahir dengan alur belajar yang super jelas dan terarah.</p>
                <a href="<?= base_url('auth/register'); ?>" class="btn btn-outline-warning mt-4 mb-4">Join With Us</a>
            </div>

            <div class="col-md-5">
                <img class="img-fluid" src="<?= base_url('assets/kk/'); ?>assets/jumbotron.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title text-center">Staff Pengajar</h3>
                    <p class="lead">Mari lihat siapa saja yang mengajar <br> di kelas ini.</p>
                    <a href="#" class="btn btn-primary">Lihat Staff</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title">Yang Mendaftar</h3>
                    <p class="lead">Sudah lebih dari <span class="badge badge-danger">200</span> Orang yang bergabung bersama
                        kami.</p>
                    <a href="#" class="btn btn-primary">Lihat Pengguna</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title">Materi yang Diberikan</h3>
                    <p class="lead">Lihat materi apa saja yang kami berikan disini.</p>
                    <a href="#" class="btn btn-primary">Lihat Materi</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 mt-4">
            <div class="card">
                <h5 class="card-header">Apa yang kalian dapatkan disini.?</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary mt-5">Lihat Fasilitas</a>
                </div>
            </div>
        </div>

        <div class="col-lg-7">

            <div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner img-thumbnail">
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/kk/'); ?>assets/1.jpg" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item">
                        <img src="<?= base_url('assets/kk/'); ?>assets/2.jpg" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item">
                        <img src="<?= base_url('assets/kk/'); ?>assets/5.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

</div>