<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $id = $_GET['id'];
    $kodeproduk = $_POST['kodeproduk'];
    $namaproduk = $_POST['namaproduk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $telepon = $_POST['telepon'];
    $internet = $_POST['internet'];
    $tv = $_POST['tv'];
    $paket = $_POST['paket'];

    
    $insert = $db->query('INSERT INTO produk 
                        (kode_produk,nama_produk,keterangan,harga,telepon,internet,tv,paket) 
                        VALUES 
                        ("'.$kodeproduk.'","'.$namaproduk.'","'.$keterangan.'","'.$harga.'","'.$telepon.'","'.$internet.'","'.$tv.'","'.$paket.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index2.php?m=barang&s=kelolaproduk"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }

}else if ($aksi == 'update') {
    $id = $_GET['id'];
    $kodeproduk = $_POST['kodeproduk'];
    $namaproduk = $_POST['namaproduk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $telepon = $_POST['telepon'];
    $internet = $_POST['internet'];
    $tv = $_POST['tv'];
    $paket = $_POST['paket'];
    
    $update = $db->query('UPDATE produk SET kode_produk="'.$kodeproduk.'",
                                            nama_produk="'.$namaproduk.'",
                                            keterangan="'.$keterangan.'",
                                            harga="'.$harga.'",
                                            telepon="'.$telepon.'",
                                            internet="'.$internet.'",
                                            tv="'.$tv.'",
                                            paket="'.$paket.'"
                                            WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index2.php?m=barang&s=kelolaproduk"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM produk WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index2.php?m=barang&s=kelolaproduk"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// PROSES CHANGE PASSWORD
}