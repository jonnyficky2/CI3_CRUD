<?php

$conn = new mysqli("localhost", "root", "", "ci3_crud_mahasiswa");

if($conn->connect_error){
    die("Koneksi gagal");
}

echo "Database connect sukses";