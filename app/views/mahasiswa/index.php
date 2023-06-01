<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="cari nama mahasiswa.." name="keyword" id="keyword" autocomplete="off" aria-describedby="button-addon2">
            <button class="btn btn-primary" type="submit" id=tombolCari">Cari</button>
        </div>
        </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
            <?php foreach($data['mhs'] as $mhs) :?>
                <li class="list-group-item ">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'];?>" class="badge bg-danger float-end ms-1" onclick="return confirm('yakin?')";>Hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge bg-success float-end ms-2 tampilModalEdit" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Edit</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end ms-2">Detail</a>
            </li>
            <?php endforeach; ?>
            </ul>
                

                
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="number" class="form-control" id="nim" name="nim" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select id="jurusan" class="form-select" name="jurusan">
                <option value="Teknik Multimedia & Jaringan">Teknik Multimedia & Jaringan</option>
                <option value="Teknik Komputer & Jaringan">Teknik Komputer & Jaringan</option>
                <option value="Teknik Rekayasa Jaringan Telekomunikasi">Teknik Rekayasa Jaringan Telekomunikasi</option>
                <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
             </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>