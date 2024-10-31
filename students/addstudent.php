<?php
include "../template/mainheader.php";
?>
<h1>Add New Student</h1>
<form action="" method="post">
    <div class="mb-3">
        <label for="namadepan" class="form-label">Nama Depan</label>
        <input type="text" class="form-control" id="namadepan" placeholder="namadepan">
    </div>

    <div class="mb-3">
        <label for="prodi" class="form-label">Nama Prodi</label>
        <input type="text" class="form-control" id="prodi" placeholder="prodi">
    </div>

    <div class="mb-3">
        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin">
            <label class="form-check-label" for="jeniskelamin">
                Laki-Laki
            </label>
        </div>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin">
            <label class="form-check-label" for="jeniskelamin">
                Perempuan
            </label>
        </div>
    </div>

    <div class="mb-3">
        <button type="button" class="btn btn-primary">Simpan</button>
    </div>
</form>

<?php
include "../template/mainfooter.php";
?>
