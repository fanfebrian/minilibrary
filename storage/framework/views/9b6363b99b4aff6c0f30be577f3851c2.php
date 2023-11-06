
<?php $__env->startSection('main'); ?>
<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <div class="card-body p-4">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Judul</label>
        <p>Tuliskan Judul Buku</p>
        <input type="email" class="form-control" id="exampleFormControlInput1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis</label>
        <p>Tuliskan Jenis Buku</p>
        <input type="email" class="form-control" id="exampleFormControlInput1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
        <p>Tuliskan Nama Pengarang Buku</p>
        <input type="email" class="form-control" id="exampleFormControlInput1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
        <p>Tuliskan Penerbit Buku</p>
        <input type="email" class="form-control" id="exampleFormControlInput1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Terbit</label>
        <p>Tuliskan Tanggal dan Tahun Terbit</p>
        <input type="email" class="form-control" id="exampleFormControlInput1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Halaman</label>
        <p>Tuliskan Berapa Halaman Buku</p>
        <input type="email" class="form-control" id="exampleFormControlInput1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Stok</label>
        <p>Tuliskan Stok Buku</p>
        <input type="email" class="form-control" id="exampleFormControlInput1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <p>Tuliskan Deskripsi Buku Secara Singkat</p>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
      </div>
      <div class="mb-3">
        <label for="formFileMultiple" class="form-label">Foto</label>
        <p>Masukan Foto Sampul Depan Buku</p>
        <input class="form-control" type="file" id="formFileMultiple" multiple>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 1%">Batalkan</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\My Device\Downloads\minilibrary\resources\views/tambah-buku.blade.php ENDPATH**/ ?>