<div class="card form-card">
 <h1>Edit Data Mahasiswa</h1>
 <p>Ubah data mahasiswa sesuai kebutuhan, lalu klik tombol update.</p>
 <?php if (validation_errors()) : ?>
 <div class="alert error"><?php echo validation_errors(); ?></div>
 <?php endif; ?>
 <?php echo form_open('mahasiswa/update/' . $mhs->id); ?>
 <input type="hidden" name="id" value="<?php echo $mhs->id; ?>">
 <div class="form-group">
 <label>NIM</label>
 <input type="text" name="nim" value="<?php echo set_value('nim', $mhs->nim); ?>">
 </div>
 <div class="form-group">
 <label>Nama Mahasiswa</label>
 <input type="text" name="nama" value="<?php echo set_value('nama', $mhs->nama); ?>">
 </div>
 <div class="form-group">
 <label>Program Studi</label>
 <input type="text" name="prodi" value="<?php echo set_value('prodi', $mhs->prodi); ?>">
 </div>
 <div class="form-group">
 <label>Jenis Kelamin</label>
 <select name="jenis_kelamin">
 <option value="">-- Pilih Jenis Kelamin --</option>
 <option value="Laki-laki" <?php echo set_select('jenis_kelamin', 'Laki-laki', $mhs->jenis_kelamin == 'Lakilaki'); ?>>Laki-laki</option>
 <option value="Perempuan" <?php echo set_select('jenis_kelamin', 'Perempuan', $mhs->jenis_kelamin == 
'Perempuan'); ?>>Perempuan</option>
 </select>
 </div>
 <div class="form-group">
 <label>Semester</label>
 <input type="number" name="semester" value="<?php echo set_value('semester', $mhs->semester); ?>">
 </div>
 <div class="form-group">
 <label>Alamat</label>
 <textarea name="alamat" rows="4"><?php echo set_value('alamat', $mhs->alamat); ?></textarea>
 </div>
  <input type="hidden" name="id" value="<?php echo $mhs->id; ?>">
 <div class="form-group">
 <label>No HP</label>
 <input type="text" name="no_hp" value="<?php echo set_value('no_hp', $mhs->no_hp); ?>">
 </div>
 
 <div class="button-group">
    
    <button type="submit" class="btn btn-primary">
        Simpan
    </button>

    <a href="<?= site_url('mahasiswa') ?>" class="btn btn-secondary">
        Kembali
    </a>

</div>