<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=".../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="judulModal">Tambah Buku</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
      
              <form action="http://localhost/phpmvc/public/koleksi/tambah" method="post">
              <div class="mb-3">
                  <label for="judul" class="form-label">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul">
              </div>
      
              <div class="mb-3">
                  <label for="pengarang" class="form-label">Pengarang</label>
                  <input type="text" class="form-control" id="pengarang" name="pengarang">
              </div>
      
              <div class="mb-3">
                  <label for="penerbit" class="form-label">Penerbit</label>
                  <input type="text" class="form-control" id="penerbit" name="penerbit">
              </div>
      
              <div class="mb-3">
                  <label for="terbit" class="form-label">Terbit</label>
                  <input type="text" class="form-control" id="terbit" name="terbit">
              </div>
      
              <div class="mb-3">
                  <label for="halaman" class="form-label">Halaman</label>
                  <input type="text" class="form-control" id="halaman" name="halaman">
              </div>
      
              <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" id="deskripsi" name="deskripsi">
              </div>
      
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
              <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</body>
</html><?php /**PATH C:\Users\My Device\Downloads\minilibrary\resources\views/form.blade.php ENDPATH**/ ?>