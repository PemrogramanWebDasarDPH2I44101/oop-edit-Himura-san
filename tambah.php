<div class="container w-25">
    <div class="row pt-2">
        <div class="col">
            <h1 class="text-center">Tambah Data</h1>
            <hr>
            <form action="class.php?tambah_data=mahasiswa" method="post">
                <div class="form-group">
                    <label for="inputNIM">NIM</label>
                    <input type="text" id="inputNIM" class="form-control" name="nim" pattern="\d*" placeholder="Masukkan NIM..">
                </div>
                <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input type="text" id="inputNama" class="form-control" name="nama" placeholder="Masukkan Nama..">
                </div>
                <div class="form-group">
                    <label for="inputDate">Tanggal Lahir</label>
                    <input type="date" id="inputDate" class="form-control" name="tgl_lahir">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Tambah">
                    <input type="reset" class="btn btn-danger" value="Reset">
                </div>
            </form>
        </div>
    </div>
</div>