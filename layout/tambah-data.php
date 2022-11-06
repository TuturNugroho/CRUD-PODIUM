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

    <div class="container-fluid">
        <div class="row">
            <div style="background-color: #7579e7; color: white">
                <form action="../prosesdata.php?aksi=tambah-data" method="post" style="margin: 150px 0 0 400px">
                    <div class="mb-31">
                        <h3>Tambah Data</h3>

                        <label for="nama" class="form-label">Name</label>
                        <input type="nama" class="form-control" id="nama" placeholder="Enter Name" name="user" style="width: 300px" />
                        <br />
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" style="width: 300px" />
                        <br />
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" style="width: 300px" />
                        <br />

                        <button type="submit" class="btn btn-light" style="background-color: white; color: #7579e7">
                            Tambah
                        </button>
                        <br />
                        <br />
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