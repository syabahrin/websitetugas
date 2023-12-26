<?php error_reporting(0); ?> 
<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8"> 
	<title>Tugas PHP 3</title> 
  <p>1. Kode : BRG001 TOPI Rp. 15.000</p>
  <p>2. Kode : BRG002 TSHIRT Rp. 96.000</p>
  <p>3. Kode : BRG003 JEANS Rp. 320.000</p>
  <h5>NB : Jika Total Belanja Anda Lebih Dari Rp 500.000, Maka Anda Mendapatkan Diskon</h5>
</head> 
<body> 

	<hr>  
    <div style="margin-bottom: 10px;">
		<form action="" method="post"> 
		<label><b>Kode Barang :</b></label> 
		<input type="text" name="kode" placeholder="Masukkan Kode Barang" required> 
		<label><b>Jumlah Beli :</b></label>
		<input type="text" name="jumlah_beli" required> 
		<button name="submit" type="submit">Submit</button> 
		</form> 
	</div> 
	<hr> 

</body> 
</html>

<?php
 //Kode
 $kode = $_POST['kode'];
 if ($kode == 'BRG001') 
 { 
  $nama_barang = "TOPI"; 
  $harga = "Rp 15.000"; 
  $jumlah_beli = $_POST ['jumlah_beli']; 
  $total_barang = $jumlah_beli*15000; 
  if ($total_barang >= 500000) 
   { 
    $diskon = $total_barang * 5/100; 
    $total_bayar = $total_barang-$diskon; 
    $ket = "Selamat Anda Mendapatkan Diskon 5%"; 
    } 
  elseif ($total_barang < 500000) 
    {
     $total_barang = $jumlah_beli*15000; 
     $total_bayar = $total_barang; 
     $ket = "Maaf Anda Tidak Mendapatkan Diskon"; 
    } 
  else 
    { 
     $total_barang = "-"; 
     $diskon = "-"; 
     $total_bayar = "-"; 
     $ket = "Kode Yang Anda Masukkan Salah";
    } 
 }

 elseif ($kode == 'BRG002') 
 { 
  $nama_barang = "TSHIRT"; 
  $harga = "Rp 96.000"; 
  $jumlah_beli = $_POST ['jumlah_beli']; 
  $total_barang = $jumlah_beli*96000; 
  if ($total_barang >= 500000) 
   { 
    $diskon = $total_barang * 5/100; 
    $total_bayar = $total_barang-$diskon; 
    $ket = "Selamat Anda Mendapatkan Diskon 5%"; 
   } 
 elseif ($total_barang < 500000) 
   { 
    $total_barang = $jumlah_beli*96000; 
    $total_bayar = $total_barang; 
    $ket = "Maaf Anda Tidak Mendapatkan Diskon"; 
   } 
   else 
   { 
    $total_barang = "-"; 
    $diskon = "-"; 
    $total_bayar = "-"; 
    $ket = "Kode Yang Anda Masukkan Salah"; 
   } 
}

 elseif ($kode == 'BRG003') 
 { 
  $nama_barang = "JEANS"; 
  $harga = "Rp 320.000"; 
  $jumlah_beli = $_POST ['jumlah_beli']; 
  $total_barang = $jumlah_beli*320000; 
  if ($total_barang >= 500000) 
   { 
    $diskon = $total_barang * 5/100; 
    $total_bayar = $total_barang-$diskon; 
    $ket = "Selamat Anda Mendapatkan Diskon 5%"; 
   }
  elseif ($total_barang < 500000) 
   {
    $total_barang = $jumlah_beli*320000; 
    $total_bayar = $total_barang; 
    $ket = "Maaf Anda Tidak Mendapatkan Diskon";
   }
   else 
   {
    $total_barang = "-"; 
    $diskon = "-"; 
    $total_bayar = "-"; 
    $ket = "Kode Yang Anda Masukkan Salah"; 
   } 
}

 else 
  {
   $nama_barang = "-"; 
   $harga = "-"; 
 }

//OUTPUT 

echo "<br>"; 
echo "Kode Barang 		      :".$kode."<br><br>"; 
echo "Nama Barang           :".$nama_barang."<br><br>"; 
echo "Harga                 :".$harga."<br><br>";
echo "Jumlah Beli           :".$jumlah_beli."<br><br>";
echo "Total Per-Barang      :Rp. $total_barang"."<br><br>"; 
echo "Keterangan            :".$ket."<br><br>"; 
echo "Total Bayar 		      :Rp. $total_bayar"."<br><br>";

?>