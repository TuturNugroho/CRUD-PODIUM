<?php
session_start();

class database
{
    protected $host = "localhost";
    protected $uname = "root";
    protected $pass = "";
    protected $database = "batur";
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);
        if ($this->conn) {
        }
        //     echo "Koneksi Database initialized";
        // } else {
        //     echo "KoneksiDatabase not initialized";
        // }
        return $this->conn;
    }
    public function tampil_data()
    {
        $conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);
        $data = mysqli_query($conn, "SELECT * from users");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    public function regis_users($user, $email, $pass)
    {

        $conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);
        mysqli_query($conn, "INSERT INTO users(user,email, pass, rolee) values('$user','$email','$pass','admin')");
    }
    public function tambah_data($user, $email, $pass)
    {
        $conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);
        mysqli_query($conn, "INSERT INTO users(user,email, pass, rolee) values('$user','$email','$pass','admin')");
    }
    public function edit($id)
    {
        $conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);
        $data = mysqli_query($conn, "SELECT * from users where id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    public function update($id, $user, $email, $pass)
    {
        $conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);
        $query = mysqli_query($conn, "UPDATE users set user='$user',email='$email', pass='$pass' where id='$id'");
        return $query;
    }
    public function hapus($id)
    {
        $conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);
        $query = mysqli_query($conn, "DELETE from users where id='$id'");
        return $query;
    }

    public function login_user($user, $pass)
    {
        $conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);
        $query = mysqli_query($conn, "SELECT * FROM users WHERE user = '$user'");
        // $data = mysqli_fetch_array($query, MYSQLI_ASSOC);
        $data = $query->fetch_array();
        // $passhash = password_hash($data['pass'], PASSWORD_DEFAULT);
        if ($pass === $data['pass']) {
            $_SESSION['login_user'] = $data['user'];
            // echo "<script>
            // alert('login berhasil');
            // window.location.href = 'dashboard-super.php';
            // </script>";
            if ($data['rolee'] === 'super') {


?>


                <script>
                    alert('login berhasil');
                    window.location.href = "dashboard-super.php";
                </script>
            <?php
            } else if ($data['rolee'] === 'admin') {
            ?>
                <script>
                    alert('login berhasil');
                    window.location.href = "dashboard-admin.php";
                </script>
<?php
            }
        } else {
            echo "<script>
            alert('login gagal');
            window.location.href = 'login.php';
            </script>";
        }
    }


    //Artikel
    public function tampil_artikel()
    {
        $conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);
        $data = mysqli_query($conn, "SELECT * from artikel");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    public function artikel_input($judul, $isi)
    {
        $conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);
        mysqli_query($conn, "INSERT into artikel values('','$judul','$isi')");
    }
    public function update_artikel($id, $judul, $isi)
    {
        $conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);
        $query = mysqli_query($conn, "UPDATE artikel set judul='$judul',isi='$isi' where id='$id'");
        return $query;
    }
    public function hapus_artikel($id)
    {
        $conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);
        $query = mysqli_query($conn, "DELETE from artikel where id='$id'");
        return $query;
    }
}
?>