<?php
// $_GET["id"] didapat dari url yang bernama id
// $_GET id yang ditransferkan ke variable id
// alu $_GET["id"] disimpan ke dalam variable $id

$id = $_GET["id"];
// id akan dipakai untuk mencari index array yang dipilih
require "../data/rs.php";
?>
<!doctype html> 
<html lang="en"> 
    <head> 
        <!-- Required meta tags --> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <!-- Bootstrap CSS --> 
        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- 
        1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
        <!-- MY Style --> 
        <link rel="stylesheet" href="../assets/css/stylee.css">
        <title>Rs</title> 
    </head> 
    <body> 

        <?php 
        include 'navbar.php'; 
        ?> 

        <div class="container my-5"> 
            <form action="" method="POST"> 
                <div class="row"> 
                    <div class="col-md-6 col-sm-12"> 
                        <div class="mb-2">
                            <label for="no-transaksi" class="form-label">No. Transaksi</label>
                            <input type="text" id="no-transaksi" class="form-control" value="<?=mt_rand()?>" readonly> 
                        </div> 
                        <div class="mb-2"> 
                            <label for="tanggal-transaksi" class="form-label">Tanggal Transaksi</label> 
                            <input type="date" id="tanggal-transaksi" class="form-control" required> 
                        </div> 
                        <div class="mb-2"> 
                            <label for="nama-customer" class="form-label">Nama Customer</label> 
                            <input type="text" id="nama-customer" class="form-control" required> 
                        </div> 
                        <div class="mb-2"> 
                            <label for="merek" class="form-label">Pilih Film</label> 
                            <input type="text" id="produk" class="form-control" value="<?= $rs[$id][0] ?>" readonly> 
                        </div> 
                       
                        <div class="mb-4"> 
                            <label for="harga" class="form-label">Harga</label> 
                            <input type="text" id="harga" class="form-control" value="<?= $rs[$id][2] ?>" readonly> 
                        </div> 
                        <div class="mb-3">
                            <label for="no-transaksi" class="form-label">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah"class="form-control" value="" required>
                        </div>
                        <div class="my-2"> 
                            <button type="button" class="btn btn-sm btn-dark" onclick="hitungTotal()">Hitung Total Harga</button> 
                            <!-- Onclick = name dalam php -->
                        </div> 
                    </div> 
                   
                </div> 
                <hr> 
                <div class="mb-2"> 
                    <label for="total-harga" class="form-label">Total Harga</label> 
                    <input type="text" id="total-harga" class="form-control" readonly> 
                </div> 
                <div class="row"> 
                    <div class="col-6"> 
                        <div class="mb-2"> 
                            <label for="pembayaran" class="form-label">Pembayaran</label> 
                            <input type="text" id="pembayaran" class="form-control" required> 
                        </div> 
                        <button type="button" class="btn btn-sm btn-dark" onclick="hitungKembalian()">Hitung Kembalian</button> 
                    </div> 
                    <div class="col-6"> 
                        <div class="mb-2"> 
                            <label for="kembalian" class="form-label">Kembalian</label> 
                            <input type="text" id="kembalian" class="form-control" readonly>
                        </div> 
                        <button type="button" class="btn btn-sm btn-dark w-100" onclick="simpan()">Simpan Transaksi</button> 
                    <!-- Onclick = name dalam php -->
                    </div> 
                </div> 
            </form> 
        </div> 

        <?php 
            include 'footer.php'; 
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min .js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
        <script> 
            // HITUNG TOTAL HARGA 
            // hitungTotal dari Onclick
            function hitungTotal() { 
                //selector itu untuk mencari
                //#harga itu dari id di inputan atas
                let harga = parseInt(document.querySelector('#harga').value); 
                let jumlah = parseInt(document.querySelector('#jumlah').value); 
                
                    let totalHarga = harga * jumlah; 
                    document.getElementById("total-harga").value = totalHarga; 
                
                // if (jumlah > 0) { 
                //     let totalHarga = harga * jumlah; 
                // document.getElementById("total-harga").value = totalHarga; 
                // } else { 
                // alert("Wajib diisi");
                
                // } 
            } 
            
            // HITUNG KEMBALIAN 
            function hitungKembalian() { 
                let total = parseInt(document.getElementById("total-harga").value); 
                let pembayaran = parseInt(document.getElementById("pembayaran").value); 
                if (pembayaran >= total) { 
                    let kembalian = pembayaran - total; 
                    document.getElementById("kembalian").value = kembalian; 
                } else { 
                    alert("Uang Tidak Cukup"); 
                } 
            } 
            // SIMPAN TRANSAKSI 
            function simpan() { 
                alert('Data Berhasil Disimpan'); 
                window.location = 'home.php'; 
            } 
        </script> 
    </body> 
</html>
            