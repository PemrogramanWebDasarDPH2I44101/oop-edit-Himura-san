<?php
    if (isset($_GET['content'])) {
        if ($_GET['content'] == "tambah") {
            $title = "Tambah Data";
        }

        if ($_GET['content'] == "edit") {
            $title = "Edit Data";
        }
    } else {
        $title = "View Data";
    }

    require("header.php");
    if (isset($_GET['content'])) {
        if ($_GET['content'] == "tambah") {
            require("tambah.php");
        }

        if ($_GET['content'] == "edit") {
            require("edit.php");
        }
    } else {
        require("data.php");
    }
    require("footer.php");
?>
