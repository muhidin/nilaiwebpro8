<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Data Siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <?php
            include_once('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM students WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            $r = mysqli_fetch_assoc($result);
            ?>
            <div class="card-body">
                <form action="?m=siswa&s=update" method="post">
                    <div class="mb-2">
                        <input type="text" class="form-control" name="nis" value="<?= $r['nis'] ?>" placeholder="Nomor Induk Siswa" required autofocus>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="name" value="<?= $r['name'] ?>" placeholder="Nama Siswa" required>
                    </div>
                    <div class="mb-2">
                        <label for="">Jenis Kelamin: &nbsp;</label>
                        <input type="radio" name="gender" value="Laki-laki" <?= $r['gender'] == 'Laki-laki' ? 'checked' : '' ?>> Laki-laki &nbsp;
                        <input type="radio" name="gender" value="Perempuan" <?= $r['gender'] == 'Perempuan' ? 'checked' : '' ?>> Perempuan
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="pob" value="<?= $r['pob'] ?>" placeholder="Tempat Lahir (isi dengan nama Kabupaten/Kota)">
                    </div>
                    <div class="mb-2">
                        <input type="date" class="form-control" name="dob" value="<?= $r['dob'] ?>" placeholder="Tanggal Lahir">
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="phone" value="<?= $r['phone'] ?>" placeholder="Telepon">
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="email" value="<?= $r['email'] ?>" placeholder="Email">
                    </div>
                    <div class="mb-2">
                        <select name="grade_id" class="form-control" required>
                            <option value="">Pilih Kelas</option>
                            <?php
                            include_once("config.php");
                            $sql = "SELECT * FROM grades";
                            $result = mysqli_query($conn, $sql);
                            while ($r1 = mysqli_fetch_assoc($result)) {
                                echo '<option value="'.$r1['id'].'" '.($r['grade_id'] == $r1['id'] ? 'selected' : '').'>'.$r1['grade'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-2">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="reset" class="btn btn-warning">
                        <input type="submit" value="Update" class="btn btn-primary" name="update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>