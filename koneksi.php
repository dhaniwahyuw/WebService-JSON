<?php
    error_reporting(0);
	
	header ('Connect-Type: application/json ; charset=utf8');
	header ('Access-Control-Allow-Origin: *');
	header ('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header ('Access-Control-Allow-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	
	//connection
	include('connection.php');
	//SQL
	$sql="select * from mytable";
	$query=mysql_query($sql0) or die(mysql_error());
	$res[mytable]-array();
	while($data=mysql_fetch_array($query))
	{
	       $ft[id]=$data[id];
		   $ft[kategori]=$data[kategori];
		   $ft[nama]=$data[nama];
		   $ft[deskripsi]=$data[kategori];
		   $ft[harga]=$data[harga];
		   $ft[berat]=$data[berat];
		   $ft[gambar]=$data[gambar];
		   $ft[stok]data[stok];
		   $ft[produk0ukuran]=$data[produk0ukuran];
		   $ft[produk0warna]=$data[produk0warna];
		   $ft[produk0bahan]=$data[produk0bahan];
		   $ft[produk0tipe]=$data[produk0tipe];
		   array_push($res[["mytable"],$ft);
		   
    }
	echo json_encode($res);
?>


http://webservicedhaniwahyu.rf.gd/