<!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Coba-Coba Test Bootstrap >< </title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        <body>
        <nav class="navbar navbar-expand-sm bg-light">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tampil_siswa.php">Data Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tampil_kelas.php">Data Kelas</a>
            </li>
            </ul>
        </nav>
<body>
    <h3>Tambah Kelas</h3>
    <br>
    <form action="proses_tambah_kelas.php" method="post">
        nama kelas:
        <input type="text" name="nama_kelas" value="" class="form-control">
        <br>
        kelompok :
        <input type="text" name="kelompok" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="tambah kelas" class="btn btn-primary">
    </form>
    <script> src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>"</script>
</body>
</html>