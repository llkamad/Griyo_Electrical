<?php
include 'koneksi.php';


//delete Tipe Rumah
if (isset($_POST['delTR'])) {
    $id = $_POST['delete_idTR'];
    $queryDelTR = "DELETE FROM `tipe rumah` WHERE id_tiperumah='$id'";
    $query_run = mysqli_query($koneksi, $queryDelTR);

    if ($query_run) {
        echo "<script> alert('Data terhapus'); </script>";
        header("Location:tiperumah.php");
    } else {
        echo "<script> alert('Data tidak terhapus'); </script>";
    }
}

//delete agen
if (isset($_POST['delAgen'])){
    $id = $_POST['delete_idAgen'];
    $queryDelTR = "DELETE FROM `agen` WHERE id='$id'";
    $query_run = mysqli_query($koneksi, $queryDelTR);

    if ($query_run) {
        echo "<script> alert('Data terhapus'); </script>";
        header("Location:agen.php");
    } else {
        echo "<script> alert('Data tidak terhapus'); </script>";
    }
}


//delete desain
if(isset($_POST['delDes'])){
    $id = $_POST['delete_idDes'];
    $queryDelDes = "DELETE FROM `desain progress & legalitas` WHERE id='$id'";
    $query_run = mysqli_query($koneksi, $queryDelDes);

    if ($query_run) {
        echo "<script> alert('Data terhapus'); </script>";
        header("Location:desainprogress.php");
    } else {
        echo "<script> alert('Data tidak terhapus'); </script>";
    }
}

// if(isset($_POST['deletedata'])){
//     echo('asd');
//     $id = $_POST['delete_id'];

//     $queryDelTR = "DELETE FROM `tipe rumah` WHERE id_tiperumah='$id'";
//     $query_run = mysqli_query($koneksi,$queryDelTR);

//     if($query_run){
//         echo '<script> alert("Data terhapus"); </script>';
//         header("Location:tiperumah.php");
//     }else{
//         echo '<script> alert("Data tidak terhapus"); </script>';
//     }
// }
