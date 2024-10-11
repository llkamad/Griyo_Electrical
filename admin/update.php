<?php

include 'koneksi.php';

// Update Tipe Rumah
if (isset($_POST['editTR'])) {
    $id = $_POST['idTR'];
    $namatipe = $_POST['namatipe'];
    $harga = $_POST['harga'];
    $luastanah = $_POST['luastanah'];
    $luasbangunan1 = $_POST['luasbangunan1'];
    $luasbangunan2 = $_POST['luasbangunan2'];
    $kamartidur1 = $_POST['kamartidur1'];
    $kamartidur2 = $_POST['kamartidur2'];
    $kamarmandi = $_POST['kamarmandi'];
    $ruangtamu = $_POST['ruangtamu'];
    $ruangkeluarga = $_POST['ruangkeluarga'];
    $dapur = $_POST['dapur'];
    $tamanindoor = $_POST['tamanindoor'];
    $tamanoutdoor = $_POST['tamanoutdoor'];
    $carport = $_POST['carport'];
    $deskripsi = $_POST['deskripsi'];


    $queryUpTR = "UPDATE `tipe rumah` SET
        `nama_tipe` = '$namatipe',
        `harga` = '$harga',
        `luas_tanah(m2)` = '$luastanah', 
        `luas_bangunan(m2)` = '$luasbangunan1',
        `luas_bangunan2(m2)` = '$luasbangunan2',
        `kamar_tidur` = '$kamartidur1',
        `kamar_tidur2` = '$kamartidur2',
        `kamar_mandi` = '$kamarmandi',
        `ruang_tamu`= '$ruangtamu',
        `ruang_keluarga` = '$ruangkeluarga',
        `dapur` = '$dapur',
        `taman_indoor` = '$tamanindoor',
        `taman_outdoor` = '$tamanoutdoor',
        `carport` = '$carport',
        `desc_pro` = '$deskripsi'
    WHERE `tipe rumah`.`id_tiperumah`='$id' ";

    $query_run = mysqli_query($koneksi, $queryUpTR);

    if ($query_run) {
        echo "<script> alert('Data Terupdate'); </script>";
        header("Location:tiperumah.php");
    } else {
        echo "<script> alert('Data tidak terhapus'); </script>";
    }
}

// Update Agen 
if (isset($_POST['editAgen'])) {
    // var_dump($_POST);
    // die(var_dump($_POST));
    $id = $_POST['idAgen'];
    $namaAgen = $_POST['namaAgen'];
    $fotoLama = $_POST['fotoLama'];

    //cek user pilih foto atau tidak 
    if ($_FILES['foto']['error'] === 4) {
        $fotoAgen = $fotoLama;
    }else{
        function uploadUp(){
            $namafile = $_FILES["foto"]["name"];
            $ukuranFile = $_FILES["foto"]["size"];
            $error = $_FILES["foto"]["error"];
            $tmpName = $_FILES["foto"]["tmp_name"];
    
    
            if($error === 4){
                echo "<script>
                    alert('pilih gambar terlebih dahulu!');
                    </script>";
    
                return false;
            }
    
    
            $ekstensiGambarValid = ["jpg","jpeg","png"];
            $ekstensiGambar = explode(".",$namafile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
                echo "<script>
                    alert('yang anda upload bukan gambar!');
                    </script>";
                return false;
            }
    
    
            // if($ukuranFile > 1000000){
            //     echo "<script>
            //         alert('ukuran gambar terlalu besar');
            //         </script>";
            //     return false;
            // }
    
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensiGambar;
            
            move_uploaded_file($tmpName,"img/agen/" . $namaFileBaru);
            return $namaFileBaru;
        }
    
        $fotoAgen = uploadUp();
        if(!$fotoAgen){
            return false;
        }
    }

    $noTelp = $_POST['noTelp'];
    $ig = $_POST['ig'];

    $queryUpTR = "UPDATE `agen` SET
        `nama` = '$namaAgen',
        `foto` = '$fotoAgen', 
        `no_telp` = '$noTelp',
        `instagram` = '$ig'
    WHERE `agen`.`id`='$id' ";

    $query_run = mysqli_query($koneksi, $queryUpTR);

    if ($query_run) {
        echo "<script> alert('Data Terupdate'); </script>";
        header("Location:agen.php");
    } else {
        echo "<script> alert('Data tidak terhapus'); </script>";
    }
}

//update desain progress
if (isset($_POST['editDes'])) {
    // var_dump($_FILES);
    // die(var_dump($_POST));
    $id = $_POST['idDesain'];
    $tipe = $_POST['tipe'];
    $fotoLama = $_POST['fotoLamaDes'];
    $desk = $_POST['desk'];

    //cek user pilih foto atau tidak 
    if ($_FILES['fotoDes']['error'] === 4) {
        $fotoDes = $fotoLama;
    }else{
        function uploadUpDes(){
            $namafile = $_FILES["fotoDes"]["name"];
            $ukuranFile = $_FILES["fotoDes"]["size"];
            $error = $_FILES["fotoDes"]["error"];
            $tmpName = $_FILES["fotoDes"]["tmp_name"];
    
    
            if($error === 4){
                echo "<script>
                    alert('pilih gambar terlebih dahulu!');
                    </script>";
    
                return false;
            }
    
    
            $ekstensiGambarValid = ["jpg","jpeg","png"];
            $ekstensiGambar = explode(".",$namafile);
            $ekstensiGambar = strtolower(end($ekstensiGambar));
            if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
                echo "<script>
                    alert('yang anda upload bukan gambar!');
                    </script>";
                return false;
            }
    
    
            // if($ukuranFile > 1000000){
            //     echo "<script>
            //         alert('ukuran gambar terlalu besar');
            //         </script>";
            //     return false;
            // }
    
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensiGambar;
            
            move_uploaded_file($tmpName,"img/progress/" . $namaFileBaru);
            return $namaFileBaru;
        }
    
        $fotoDes = uploadUpDes();
        if(!$fotoDes){
            return false;
        }
    }

    $queryUpDes = "UPDATE `desain progress & legalitas` SET
        `tipe` = '$tipe',
        `foto` = '$fotoDes', 
        `deskripsi` = '$desk'
    WHERE `desain progress & legalitas`.`id`='$id' ";

    $query_run = mysqli_query($koneksi, $queryUpDes);

    if ($query_run) {
        echo "<script> alert('Data Terupdate'); </script>";
        header("Location:desainprogress.php");
    } else {
        echo "<script> alert('Data tidak terhapus'); </script>";
    }
}