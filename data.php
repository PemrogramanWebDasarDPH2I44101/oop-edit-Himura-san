<div class="container">
    <div class="row pt-2">
        <div class="col">
            <h1 class="text-center pb-2">View Data</h1>
            <table class="table table-hover table-striped text-center">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require("class.php");
                        $result = $data -> view_data();

                        while($row = $result -> fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <tr>
                                <td><?php echo $row['nim'];?></td>
                                <td><?php echo $row['nama'];?></td>
                                <td><?php echo $row['tgl_lahir'];?></td>
                                <td><a href="index.php?content=edit&nim=<?php echo $row['nim'];?>"><input type="button" class="btn btn-primary" value="Edit"></a> | <a href="class.php?delete=<?php echo $row['nim'];?>" onclick="return confirm('Apakah anda yakin ingin menhapus data ini..?');"><input type="button" class="btn btn-danger" value="Delete"></a></td>
                            </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
