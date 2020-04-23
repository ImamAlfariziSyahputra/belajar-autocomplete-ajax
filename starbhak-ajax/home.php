<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar AutoComplete Ajax di SMK Taruna Bhakti</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        #resultlist {
    position: absolute;
    width: 81%;
    max-width: 89%;
    cursor: pointer;
    overflow-y: auto;
    max-height: 400px;
    box-sizing: border-box;
    z-index: 1001;
}
.link-class:hover {
    background-color: #f1f1f1;
    cursor: pointer;
}
    </style>
</head>
<body>
    <div class="container">
        <h1 align="center">PHP AJAX SMK Taruna Bhakti</h1>
        <h2 align="center" class="mb-4 mt-4">Autocomplete Dengan Gambar dan Ajax</h2>
        <div align="center">
            <input type="text" name="" id="nama_siswa" placeholder="Cari Nama Siswa..." class="form-control">
        </div>
        <ul class="list-group" id="resultlist"></ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="script.js"></script>

    

</body>
</html>
