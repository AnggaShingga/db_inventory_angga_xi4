<?php 

$conn= mysqli_connect('localhost','root','','db_inventory_angga_xi4');

if(!$conn){
    die("Koneksi Gagal". mysqli_connect_error());
}