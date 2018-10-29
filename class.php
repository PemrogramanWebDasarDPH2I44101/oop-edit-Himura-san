<?php
    class Proses {
        private $pdo;
        
        public function __construct() {
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db   = "db_tugas";

            try {
                $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
                $this->pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                print("Koneksi bermasalah : " . $e -> getMessage() . "<br>");
            }
        }

        public function tambah_data($nim, $nama, $tgl_lahir) {
            $sql = $this->pdo -> prepare("SELECT * FROM tb_mahasiswa WHERE nim = '$nim'");
            $sql -> execute();
            $row = $sql -> rowcount();
            if ($row == 0) {
                $stmt = $this->pdo -> prepare("INSERT INTO tb_mahasiswa VALUES ('$nim', '$nama', '$tgl_lahir')");
                $stmt -> execute();

                if ($stmt) {
                    ?>
                    <script>
                        alert("Data berhasil dibuat..");
                        location = "index.php";
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("Data gagal dibuat..");
                        location = "index.php?content=tambah";
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    alert("NIM telah terpakai..");
                    location = "index.php?content=tambah";
                </script>
                <?php
            }
        }

        public function delete_data($nim) { 
            $stmt = $this->pdo -> prepare("DELETE FROM tb_mahasiswa WHERE nim = '$nim'");
            $stmt -> execute();

            if ($stmt) {
                ?>
                <script>
                    alert("Data berhasil dihapus..");
                    location = "index.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Data gagal dihapus..");
                    location = "index.php";
                </script>
                <?php
            }
        }

        public function edit_data($nim, $nama, $tgl_lahir) {
            $stmt = $this->pdo -> prepare("UPDATE tb_mahasiswa SET nama = '$nama', tgl_lahir = '$tgl_lahir' WHERE nim = '$nim'");
            $stmt -> execute();

            if ($stmt) {
                ?>
                <script>
                    alert("Data berhasil diubah..");
                    location = "index.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Data gagal diubah..");
                    location = "index.php";
                </script>
                <?php
            }
        }
        
        public function view_data() {
            $stmt = $this->pdo -> prepare("SELECT * FROM tb_mahasiswa");
            $stmt -> execute();
            return $stmt;
        }

        public function view_edit($nim) {
            $stmt = $this->pdo -> prepare("SELECT * FROM tb_mahasiswa WHERE nim = '$nim'");
            $stmt -> execute();
            return $stmt;
        }
    }

    $data = new Proses();
    if (isset($_GET['tambah_data'])) {
        $data -> tambah_data($_POST['nim'], $_POST['nama'], $_POST['tgl_lahir']);
    }
    if (isset($_GET['delete'])) {
        $data -> delete_data($_GET['delete']);
    }
    if (isset($_GET['edit_data'])) {
        $data -> edit_data($_GET['edit_data'], $_POST['nama'], $_POST['tgl_lahir']);
    }
?>
