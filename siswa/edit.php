<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Data Kelas</div>
                <div class="col-4">
                    <a href="?m=kelas&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <?php
            include_once('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM grades WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            $r = mysqli_fetch_assoc($result);
            ?>
            <div class="card-body">
                <form action="?m=kelas&s=update" method="post">
                    <div class="mb-2">
                        <input type="text" class="form-control" name="grade" value="<?= $r['grade'] ?>" placeholder="Nama Kelas" required autofocus>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="room" value="<?= $r['room'] ?>" placeholder="Ruangan">
                    </div>
                    <div class="mb-2">
                        <input type="number" class="form-control" name="capacity" value="<?= $r['capacity'] ?>" placeholder="Kapasitas Ruangan">
                    </div>
                    <div class="mb-2">
                        <input type="number" class="form-control" name="fill" value="<?= $r['fill'] ?>" placeholder="Jumlah Siswa (Terisi)">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                    </div>
                    <div class="mb-2">
                        <input type="reset" class="btn btn-warning">
                        <input type="submit" value="Update" class="btn btn-primary" name="update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>