<?php
include "koneksi.php";


// Tambah tipe rumah
if (isset($_POST["inputTR"])) {
    $namatipe  = $_POST["namatipe"];
    $harga = $_POST['harga'];
    $luastanah = $_POST["luastanah"];
    $luasbangunan1 = $_POST["luasbangunan1"];
    $luasbangunan2 = $_POST["luasbangunan2"];
    $kamartidur1 = $_POST["kamartidur1"];
    $kamartidur2 = $_POST["kamartidur2"];
    $kamarmandi = $_POST["kamarmandi"];
    $ruangtamu = $_POST["ruangtamu"];
    $ruangkeluarga = $_POST["ruangkeluarga"];
    $dapur = $_POST["dapur"];
    $tamanindoor = $_POST["tamanindoor"];
    $tamanoutdoor = $_POST["tamanoutdoor"];
    $carport = $_POST["carport"];
    $deskripsi = $_POST["deskripsi"];

    $queryInTR = "INSERT INTO `tipe rumah` (`nama_tipe`, `harga`, `luas_tanah(m2)`, `luas_bangunan(m2)`, `luas_bangunan2(m2)`, `kamar_tidur`, `kamar_tidur2`, `kamar_mandi`, `ruang_tamu`, `ruang_keluarga`, `dapur`, `taman_indoor`, `taman_outdoor`, `carport`, `desc_pro`) 
    VALUES 
    ('$namatipe','$harga',$luastanah,$luasbangunan1,$luasbangunan2,
    $kamartidur1,$kamartidur2,$kamarmandi,$ruangtamu,$ruangkeluarga,
    $dapur,$tamanindoor,$tamanoutdoor,$carport, '$deskripsi');";


    mysqli_query($koneksi, $queryInTR);
    header('Location: tiperumah.php');
}

// Input Agen 
if (isset($_POST["inputAgen"])) {
    //function upload gambar
    function upload(){
        $namafile = $_FILES["fotoAgen"]["name"];
        $ukuranFile = $_FILES["fotoAgen"]["size"];
        $error = $_FILES["fotoAgen"]["error"];
        $tmpName = $_FILES["fotoAgen"]["tmp_name"];


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

    $namaagen  = $_POST["namaAgen"];

    //upload gambar
    $fotoAgen = upload();
    if(!$fotoAgen){
        return false;
    }

    // $foto = $_POST["fotoAgen"];
    $notelp = $_POST["noTelp"];
    $ig = $_POST["ig"];
    $queryInAgen = "INSERT INTO `agen` (`nama`, `foto`, `no_telp`,`instagram`)
    VALUES 
    ('$namaagen','$fotoAgen','$notelp','$ig');";

    mysqli_query($koneksi, $queryInAgen);
    header('Location: agen.php');
}

//input desain 
if (isset($_POST["inputDesain"])) {
    function uploadDes(){
        $namafile = $_FILES["fotoDesain"]["name"];
        $ukuranFile = $_FILES["fotoDesain"]["size"];
        $error = $_FILES["fotoDesain"]["error"];
        $tmpName = $_FILES["fotoDesain"]["tmp_name"];


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
    
    $tipe  = $_POST["tipe"];
    $fotoDesain = uploadDes();
    if(!$fotoDesain){
        return false;
    }
    $desk = $_POST["desk"];

    $queryInDes = "INSERT INTO `desain progress & legalitas` (`tipe`, `foto`,`deskripsi`) 
    VALUES 
    ('$tipe','$fotoDesain','$desk');";


    mysqli_query($koneksi, $queryInDes);
    header('Location: desainprogress.php');
}

?>