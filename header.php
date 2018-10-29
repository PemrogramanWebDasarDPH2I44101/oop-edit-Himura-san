<!DOCTYPE html>
<html>
    <head>
        <title>Tugas - <?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css\bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Tugas OOP</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?php if ($_GET['content'] == "tambah") { echo "active"; } ?>">
                        <a class="nav-link" href="index.php?content=tambah">Tambah </a>
                    </li>
                    <li class="nav-item <?php if ($_GET['content'] == NULL) { echo "active"; } ?>">
                        <a class="nav-link" href="index.php">View </a>
                    </li>
                </ul>
            </div>
        </nav>