<?php
    require("class.php");
    $nim = $_GET['nim'];
    $result = $data -> view_edit($nim);

    $row = $result -> fetch(PDO::FETCH_ASSOC);
?>
<div class="container w-25">
    <div class="row pt-2">
        <div class="col">
            <h1 class="text-center">Tambah Data</h1>
            <hr>
            <form action="class.php?edit_data=<?php echo $nim;?>" method="post">
                <div class="form-group">
                    <label for="inputNIM">NIM</label>
                    <input type="text" id="inputNIM" class="form-control" name="nim" pattern="\d*" value="<?php echo $row['nim'];?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input type="text" id="inputNama" class="form-control" name="nama" value="<?php echo $row['nama'];?>" placeholder="Masukkan Nama..">
                </div>
                <div class="form-group">
                    <label for="inputDate">Tanggal Lahir</label>
                    <input type="date" id="inputDate" class="form-control" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Edit">
                    <input type="reset" class="btn btn-danger" value="Reset">
                </div>
            </form>
        </div>
    </div>
</div>