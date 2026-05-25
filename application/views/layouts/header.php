<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title><?php echo isset($title) ? $title : 'CRUD Mahasiswa'; ?></title> 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css?v='.time()); ?>">
</head> 
<body> 
    <div class="navbar"> 
        <div class="navbar-brand">CRUD Mahasiswa CI3</div> 
        <a href="<?php echo site_url('mahasiswa'); ?>">Data Mahasiswa</a> 
        <a href="<?php echo site_url('mahasiswa/tambah'); ?>">Tambah Data</a> 
    </div> 
  
    <div class="container"> 
 
