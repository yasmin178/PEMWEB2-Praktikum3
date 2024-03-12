<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <form action="hasil_nilaipraktikum.php" method="post">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-8">
                        <select id="matakuliah" name="matakuliah" class="custom-select">
                            <option value="">Pilih Mata Kuliah</option>
                            <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                            <option value="Basis Data I">Basis Data I</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Statistika">Statistika</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="praktikum1" class="col-4 col-form-label">Nilai Praktikum 1</label>
                    <div class="col-8">
                        <input id="praktikum1" name="praktikum1" placeholder="Nilai Praktikum 1" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="praktikum2" class="col-4 col-form-label">Nilai Praktikum 2</label>
                    <div class="col-8">
                        <input id="praktikum2" name="praktikum2" placeholder="Nilai Praktikum 2" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="praktikum3" class="col-4 col-form-label">Nilai Praktikum 3</label>
                    <div class="col-8">
                        <input id="praktikum3" name="praktikum3" placeholder="Nilai Praktikum 3" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit"  class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            <hr>
        </div>
    </div>
</div>
</body>
</html>