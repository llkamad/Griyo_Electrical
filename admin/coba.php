<?php


include "koneksi.php";

if (isset($_POST["input"])) {
    var_dump($_POST);
    // $namatipe  = $_POST["namatipe"];
    // $luastanah = $_POST["luastanah"];
    // $luasbangunan1 = $_POST["luasbangunan1"];
    // $luasbangunan2 = $_POST["luasbangunan2"];
    // $kamartidur1 = $_POST["kamartidur1"];
    // $kamartidur2 = $_POST["kamartidur2"];
    // $kamarmandi = $_POST["kamarmandi"];
    // $ruangtamu = $_POST["ruangtamu"];
    // $dapur = $_POST["dapur"];
    // $tamanindoor = $_POST["tamanindoor"];
    // $tamanoutdoor = $_POST["tamanoutdoor"];
    // $cartport = $_POST["cartport"];

    // $query = "INSERT INTO 'tipe rumah'  
    // VALUES 
    // ('$namatipe','$luastanah','$luasbangunan1',
    // '$luasbangunan2','$kamartidur1','$kamartidur2',
    // '$kamarmandi','$ruangtamu','$dapur','$tamanindoor',
    // '$tamanoutdoor','$cartport')
    // ";
    // mysqli_query($koneksi, $query);
}

if (isset($_POST["tambah"])) {
    var_dump($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP:</label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data!</button>
            </li>
        </ul>

    </form>



    <form method="POST">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Input</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class=" form-group">
                <label for="namatipe" class="col-form-label">Nama Tipe</label>
                <input type="text" class="form-control" id="namatipe" name="namatipe">
            </div>
            <div class="form-group">
                <label for="luastanah" class="col-form-label">Luas Tanah</label>
                <input type="number" class="form-control" id="luastanah" name="luastanah">
            </div>
            <div class="form-group">
                <label for="luasbangunan1" class="col-form-label">Luas Bangunan 1</label>
                <input type="number" class="form-control" id="luasbangunan1" name="luasbangunan1">
            </div>
            <div class="form-group">
                <label for="luasbangunan2" class="col-form-label">Luas Bangunan 2</label>
                <input type="number" class="form-control" id="luasbangunan2" name="luasbangunan2">
            </div>
            <div class="form-group">
                <label for="kamartidur1" class="col-form-label">Kamar Tidur 1</label>
                <input type="number" class="form-control" id="kamartidur1" name="kamartidur1">
            </div>
            <div class="form-group">
                <label for="kamartidur2" class="col-form-label">Kamar Tidur 2</label>
                <input type="number" class="form-control" id="kamartidur2" name="kamartidur2">
            </div>
            <div class="form-group">
                <label for="kamarmandi" class="col-form-label">Kamar Mandi</label>
                <input type="number" class="form-control" id="kamarmandi" name="kamarmandi">
            </div>
            <div class="form-group">
                <label for="ruangtamu" class="col-form-label">Ruang Tamu</label>
                <input type="number" class="form-control" id="ruangtamu" name="ruangtamu">
            </div>
            <div class="form-group">
                <label for="ruangtamu" class="col-form-label">Ruang Keluarga</label>
                <input type="number" class="form-control" id="ruangtamu" name="ruangtamu">
            </div>
            <div class="form-group">
                <label for="dapur" class="col-form-label">Dapur</label>
                <input type="number" class="form-control" id="dapur" name="dapur">
            </div>
            <div class="form-group">
                <label for="tamanindoor" class="col-form-label">Taman Indoor</label>
                <input type="number" class="form-control" id="tamanindoor" name="tamanindoor">
            </div>
            <div class="form-group">
                <label for="tamanindoor" class="col-form-label">Taman Outdoor</label>
                <input type="number" class="form-control" id="tamanoutdoor" name="tamanoutdoor">
            </div>
            <div class="form-group">
                <label for="carport" class="col-form-label">Cartport</label>
                <input type="number" class="form-control" id="cartport" name="cartport">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary" name="input">Input</button>
        </div>
    </form>

</body>

</html>