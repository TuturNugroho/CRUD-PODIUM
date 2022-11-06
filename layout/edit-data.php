<?php
include("../koneksi.php");
$database = new database();

$id = $_GET['id'];
$query = mysqli_query($database->conn, "SELECT * FROM users where id = '$id'");
while ($x = $query->fetch_array()) {
    $id = $x['id'];
    $user = $x['user'];
    $email = $x['email'];
    $pass = $x['pass'];
}
?>
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
                <form action="../prosesdata.php?aksi=update" method="post" style="margin: 150px 0 0 400px">

                    <div class="mb-31">
                        <h3>Edit Data</h3>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <label for="nama" class="form-label">Name</label>
                        <input type="nama" class="form-control" id="nama" placeholder="Enter Name" name="user" style="width: 300px" value="<?php echo $user; ?>" />
                        <br />
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" style="width: 300px" value="<?php echo $email; ?>" />
                        <br />
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" style="width: 300px" value="<?php echo $pass; ?>" />
                        <br />

                        <button type="submit" class="btn btn-light" style="background-color: white; color: #7579e7">
                            Simpan
                        </button>
                        <br />
                        <br />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>