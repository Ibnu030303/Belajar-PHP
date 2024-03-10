<?php 

    $Id = $_POST['id'];
    
    require_once '../../connection.php';

    $query = mysqli_query($connection, "SELECT * FROM mahasiswa WHERE Id=$Id");

    while($hasil = mysqli_fetch_array($query)) {

?>

<form action="controllers/proses_edit_data.php" method="POST">
    <div class="">
        <input type="hidden" name="Id" value="<?= $hasil['Id']?>" id="id" class="form-control">
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="col-form-label">Nama</label>
        <input type="text" name="name" value="<?= $hasil['Nama']?>" id="name" class="form-control" required autofocus>
    </div>
    <div class="mb-3">
        <label for="message-text" class="col-form-label">NIM</label>
        <input type="number" name="NIM" value="<?= $hasil['NIM']?>" class="form-control" id="nim" required>
    </div>
    <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan:</label><br>
        <select name="jurusan" id="jurusan" style="width: 100%; text-align:center;" required>
            <option value="<?= $hasil['Jurusan']?>"><?= $hasil['Jurusan']?></option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Hukum">Hukum</option>
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>

<?php 
    }
?>