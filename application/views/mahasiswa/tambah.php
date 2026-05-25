<div class="card form-card">
 <h1>Tambah Data Mahasiswa</h1>
 <p>Isi form di bawah ini untuk menambahkan data mahasiswa baru.</p>
 <?php if (validation_errors()) : ?>
 <div class="alert error"><?php echo validation_errors(); ?></div>
 <?php endif; ?>
 <?php echo form_open('mahasiswa/simpan'); ?>
 <div class="form-group">
 <label>NIM</label>
 <input type="text" name="nim" value="<?php echo set_value('nim'); ?>" placeholder="Contoh: 221001">
 </div>
 <div class="form-group">
 <label>Nama Mahasiswa</label>
 <input type="text" name="nama" value="<?php echo set_value('nama'); ?>" placeholder="Masukkan nama mahasiswa">
 </div>
 <div class="form-group">
 <label>Program Studi</label>
 <input type="text" name="prodi" value="<?php echo set_value('prodi'); ?>" placeholder="Contoh: Teknik 
Informatika">
 </div>
 <div class="form-group">
 <label>Jenis Kelamin</label>
 <select name="jenis_kelamin">
 <option value="">-- Pilih Jenis Kelamin --</option>
 <option value="Laki-laki" <?php echo set_select('jenis_kelamin', 'Laki-laki'); ?>>Laki-laki</option>
 <option value="Perempuan" <?php echo set_select('jenis_kelamin', 'Perempuan'); ?>>Perempuan</option>
 </select>
 </div>
 <div class="form-group">
 <label>Semester</label>
 <input type="number" name="semester" value="<?php echo set_value('semester'); ?>" placeholder="Contoh: 3">
 </div>
 <div class="form-group">
 <label>Alamat</label>
 <textarea name="alamat" rows="4" placeholder="Masukkan alamat mahasiswa"><?php echo set_value('alamat'); 
?></textarea>
 </div>
 <div class="form-group">
 <label>No HP</label>
 <input type="text" name="no_hp" value="<?php echo set_value('no_hp'); ?>" placeholder="Contoh: 081234567890">
 </div>
 <div class="button-group">
 <button type="submit" class="btn btn-primary">Simpan</button>
 <a href="<?php echo site_url('mahasiswa'); ?>" class="btn btn-secondary">Kembali</a>
 </div>
 <?php echo form_close(); ?>
</div>