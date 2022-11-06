<?php
include("../koneksi.php");
$database = new database();


$user_check = $_SESSION['login_user'];

$timeout = 1;
$logout = 'login.php';

$timeout = $timeout * 36000;

if (isset($_SESSION['start_session'])) {
    $elapsed_time = time() - $_SESSION['start_session'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script type='text/javascript'>alert('Sesi telah Berakhir');window.location='$logout'</script>";
    }
}
$_SESSION['start_session'] = time();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard Admin Super</title>
</head>
<style>
    nav {
        background-color: #b1b2ff;
    }

    nav .navbar-nav li a {
        text-decoration: none;
        color: white;
    }

    nav .d-flex a {
        text-decoration: none;
        color: white;
    }

    nav .d-flex {
        color: white;
    }


    table {
        margin-top: 80px;
        margin-left: -100px;
    }

    button a {
        color: white;
        text-decoration: none;
    }

    button a:hover {
        color: bisque;

    }

    .btn-secondary {
        margin-top: 100px;
        margin-left: 650px;
    }

    #sidebar {
        position: fixed;
        top: 50px;
        left: 220px;
        width: 220px;
        /* height: 600px; */
        margin-top: 20px;
        margin-left: -220px;
        border: none;
        border-radius: 0;
        overflow-y: auto;
        background-color: #7579E7;
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
    }

    .side-bar li a {
        color: #eee;
        width: 220px;
        text-decoration: none;
        font-size: 20px;
        margin-top: 50px;
        width: 220px;
    }

    .side-bar li a svg {
        margin-left: 20px;
        margin-top: 5px;
        align-items: center;
    }

    .side-bar li a:hover,
    .side-bar li a:focus {
        background-color: #9AB3F5;
    }


    .tmargin {
        margin-top: 15px;
    }

    .program {
        margin-left: 200px;
        margin-top: 70px;
    }

    .program .card {
        position: absolute;
        border: none;
        background-color: none;
        box-shadow: 0 4px 8px 0 rgba(151, 151, 151, 0.464);

    }

    .program .card h5 {
        color: black;
    }

    .program .card-text {
        color: black;
    }

    .program .card-text a {
        align-items: center;
    }

    .program .card-body {
        background-color: #7579E7;
    }

    .program .card-body:hover {
        background-color: #9AB3F5;
    }

    .program .card-body h5 {
        color: white;
    }

    .program .card-body p {
        color: white;
    }

    .card-body a {
        color: #fdeedc;
        text-decoration: none;
    }

    footer {
        background-color: #b1b2ff;
        /* margin-bottom: 500px; */
        margin-top: 350px;
        margin-left: 200px;
    }

    footer h5 {
        color: #202040;
    }

    footer p {
        color: #202040;
    }

    footer a {
        color: white;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <!--Navbar Brand-->
            <a class="navbar-brand" href="index.html">
                <img src="icon/podium-putih.png" alt="" />
            </a>

            <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="episode-page.html">Episode</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trending-page.html">Trending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                </div>
            </div> -->

            <form class="d-flex">
                <a href="login-page.html"><?php echo $user_check; ?></a> &nbsp; | &nbsp;

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(240, 248, 255, 1);transform: msFilter">
                    <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                </svg>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <div id="sidebar">
                    <div class="container-fluid tmargin">
                        <!-- <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." />
                            <span class="input-group-btn">
                                <button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                        </div> -->
                    </div>

                    <ul class="nav navbar-nav side-bar">
                        <li class="side-bar tmargin"><a href="dashboard-admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(240, 248, 255, 1);transform: msFilter">
                                    <path d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z"></path>
                                </svg>&nbsp;</span>Dashboard</a></li>
                        <li class="side-bar"><a href="../artikel/input-artikel.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(240, 248, 255, 1);transform: msFilter">
                                    <path d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm-1 4v2h-5V7h5zm-5 4h5v2h-5v-2zM4 19V5h7v14H4z"></path>
                                </svg>&nbsp;
                                </span>Content</a></li>
                        <li class="side-bar"><a href="../artikel/pages.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(240, 248, 255, 1);transform: msFilter">
                                    <path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm10 0h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM10 13H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm8 1h-2v2h-2v2h2v2h2v-2h2v-2h-2z"></path>
                                </svg>&nbsp;</span>Pages</a></li>
                        <li class="side-bar"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(240, 248, 255, 1);transform: msFilter">
                                    <path d="M20 6c0-2.168-3.663-4-8-4S4 3.832 4 6v2c0 2.168 3.663 4 8 4s8-1.832 8-4V6zm-8 13c-4.337 0-8-1.832-8-4v3c0 2.168 3.663 4 8 4s8-1.832 8-4v-3c0 2.168-3.663 4-8 4z"></path>
                                    <path d="M20 10c0 2.168-3.663 4-8 4s-8-1.832-8-4v3c0 2.168 3.663 4 8 4s8-1.832 8-4v-3z"></path>
                                </svg>&nbsp;</span>Application</a></li>
                        <li class="side-bar tmargin" style="margin-top: 300px"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(240, 248, 255, 1);transform: msFilter">
                                    <path d="m2 12 5 4v-3h9v-2H7V8z"></path>
                                    <path d="M13.001 2.999a8.938 8.938 0 0 0-6.364 2.637L8.051 7.05c1.322-1.322 3.08-2.051 4.95-2.051s3.628.729 4.95 2.051 2.051 3.08 2.051 4.95-.729 3.628-2.051 4.95-3.08 2.051-4.95 2.051-3.628-.729-4.95-2.051l-1.414 1.414c1.699 1.7 3.959 2.637 6.364 2.637s4.665-.937 6.364-2.637c1.7-1.699 2.637-3.959 2.637-6.364s-.937-4.665-2.637-6.364a8.938 8.938 0 0 0-6.364-2.637z"></path>
                                </svg>&nbsp;</span>Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">

                <div class="container ">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($database->tampil_data() as $x) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td><?php echo $x['user']; ?></td>
                                    <td><?php echo $x['email']; ?></td>
                                    <td><?php echo $x['pass']; ?></td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="program">
                <div class="section-team">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem">

                                <div class="card-body">
                                    <h5 class="card-title">Artikel</h5>
                                    <p class="card-text">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Fugiat, minima.
                                    </p>
                                    <a href="../artikel/input-artikel.php">See Details>></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem">

                                <div class="card-body">
                                    <h5 class="card-title">Podcast</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sint, libero!
                                    </p>
                                    <a href="#">See Details>></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem">

                                <div class="card-body">
                                    <h5 class="card-title">Trafic</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Omnis, velit.
                                    </p>
                                    <a href="#">See Details>></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-white text-center p-3">
        <div class="container text-center text-md-center">
            <div class="row tect-center text-md-left">
                <div class="col -md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img src="icon/podium-putih.png" alt="" />
                    <br />
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Episode</h5>

                    <p>
                        <a href="#" class="" style="text-decoration: none">Horror</a>
                    </p>
                    <p>
                        <a href="#" class="" style="text-decoration: none">Daily</a>
                    </p>
                    <p>
                        <a href="#" class="" style="text-decoration: none">Humor</a>
                    </p>
                    <p>
                        <a href="#" class="" style="text-decoration: none">love</a>
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Trending</h5>

                    <p>
                        <a href="#" class="" style="text-decoration: none">Life-style</a>
                    </p>
                    <p>
                        <a href="#" class="" style="text-decoration: none">Health</a>
                    </p>
                    <p>
                        <a href="#" class="" style="text-decoration: none">Sport</a>
                    </p>
                    <p>
                        <a href="#" class="" style="text-decoration: none">Motivation</a>
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Blog</h5>

                    <p>
                        <a href="#" class="" style="text-decoration: none">Sport</a>
                    </p>
                    <p>
                        <a href="#" class="" style="text-decoration: none">Motivation</a>
                    </p>
                    <p>
                        <a href="#" class="" style="text-decoration: none">Horror</a>
                    </p>
                    <p>
                        <a href="#" class="" style="text-decoration: none">Daily</a>
                    </p>
                </div>
            </div>
            <hr class="mb-4" />
            <div class="row align-items-center">
                <div class="">
                    <p class="text-center">
                        Created with love &#169;
                        <a href="https://www.instagram.com/tuturn__/" class="fw-bold">Podium</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- <p>Created with love by <a href="https://www.instagram.com/temanwaktu_official/" class="text-white fw-bold">TemanWaktuOfficial</a></p> -->
    </footer>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>