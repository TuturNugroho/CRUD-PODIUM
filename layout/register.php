<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link type="image/x-icon" rel="icon" href="icon/icon.png" />
    <title>Halaman Register </title>
    <style>
        body {
            background-color: #7579e7;
            color: white;
        }

        nav {
            background-color: #7579e7;
        }

        div .row {
            align-items: center;
        }
    </style>
</head>

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
            </div>

            <form class="d-flex">
                <a href="login-page.html">Login </a> &nbsp; | &nbsp;
                <a href="register-page.html">Register</a>
            </form> -->
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div style="background-color: #7579e7; color: white">
                <form action="../prosesdata.php?aksi=tambah" method="post" style="margin: 150px 0 0 400px">
                    <div class="mb-31">
                        <h3>Hello Again!</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
                            maiores velit alias.
                        </p>
                        <label for="nama" class="form-label">Name</label>
                        <input type="nama" class="form-control" id="nama" placeholder="Enter Name" name="user" style="width: 300px" />
                        <br />
                        <label for="email" class="form-label">Name</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" style="width: 300px" />
                        <br />
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" style="width: 300px" />
                        <br />

                        <button type="submit" class="btn btn-light" style="background-color: white; color: #7579e7">
                            Login
                        </button>
                        <br />
                        <br />
                        <span>Anda tidak Memiliki Akun? Klik
                            <a href="login.php" style="text-decoration: none; color: #A3D8F4">Login</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
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