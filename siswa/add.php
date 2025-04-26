<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Data Kelas</div>
                <div class="col-4">
                    <a href="?m=kelas&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=kelas&s=save" method="post">
                    <div class="mb-2">
                        <input type="text" class="form-control" name="grade" placeholder="Nama Kelas" required autofocus>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="room" placeholder="Ruangan">
                    </div>
                    <div class="mb-2">
                        <input type="number" class="form-control" name="capacity" placeholder="Kapasitas Ruangan">
                    </div>
                    <div class="mb-2">
                        <input type="number" class="form-control" name="fill" placeholder="Jumlah Siswa (Terisi)">
                    </div>
                    <div class="mb-2">
                        <input type="reset" class="btn btn-warning">
                        <input type="submit" value="Simpan" class="btn btn-primary" name="save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>