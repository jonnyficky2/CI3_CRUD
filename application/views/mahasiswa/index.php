<div class="card">
 <div class="card-header">
 <div>
 <h1>Data Mahasiswa</h1>
 <p>Halaman ini menampilkan data mahasiswa yang sudah disimpan ke database.</p>
 </div>
 <a class="btn btn-primary" href="<?php echo site_url('mahasiswa/tambah'); ?>">+ Tambah Mahasiswa</a>
 </div>
 <?php if ($this->session->flashdata('success')) : ?>
 <div class="alert success"><?php echo $this->session->flashdata('success'); ?></div>
 <?php endif; ?>
 <div class="table-responsive">
 <table>
 <thead>
 <tr>
 <th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Program Studi</th>
<th>Jenis Kelamin</th>
<th>Semester</th>
<th>No HP</th>
 <th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php if (!empty($mahasiswa)) : ?>
 <?php $no = 1; foreach ($mahasiswa as $mhs) : ?>
 <tr>
 <td><?php echo $no++; ?></td>
<td><?php echo htmlspecialchars($mhs->nim, ENT_QUOTES, 'UTF-8'); ?></td>
 <td><?php echo htmlspecialchars($mhs->nama, ENT_QUOTES, 'UTF-8'); ?></td>
 <td><?php echo htmlspecialchars($mhs->prodi, ENT_QUOTES, 'UTF-8'); ?></td>
 <td><?php echo htmlspecialchars($mhs->jenis_kelamin, ENT_QUOTES, 'UTF-8'); ?></td>
 <td><?php echo htmlspecialchars($mhs->semester, ENT_QUOTES, 'UTF-8'); ?></td>
 <td><?php echo htmlspecialchars($mhs->no_hp, ENT_QUOTES, 'UTF-8'); ?></td>
 <td class="aksi">
 <a class="btn btn-warning" href="<?php echo site_url('mahasiswa/edit/' . $mhs->id); 
?>">Edit</a>
 <a class="btn btn-danger" href="<?php echo site_url('mahasiswa/hapus/' . $mhs->id); ?>" 
onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
 </td>
 </tr>
 <?php endforeach; ?>
 <?php else : ?>
 <tr>
 <td colspan="8" class="empty">Belum ada data mahasiswa.</td>
 </tr>
 <?php endif; ?>
 </tbody>
 </table>
 </div>
</div>