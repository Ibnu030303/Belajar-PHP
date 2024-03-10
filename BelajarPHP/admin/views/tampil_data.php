
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Master Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item ">Master Data</li>
                <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary mb-4 mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Data
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-center" id="exampleModalLabel">Tambah Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="controllers/proses_input_data.php" method="POST">
                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Nama</label>
                                                        <input type="text" name="name" placeholder="Masukan Nama" id="name" class="form-control" required autofocus>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label">NIM</label>
                                                        <input type="number" name="NIM" placeholder="Masukkan NIM" class="form-control" id="nim" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jurusan" class="form-label">Jurusan:</label><br>
                                                        <select name="jurusan" id="jurusan" style="width: 100%; text-align:center;" required>
                                                            <option value="">Pilih Jurusan</option>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <table class="table table-bordered table-striped table-hover mt-5 hover" id="tableData">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col" class="text-center">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">Jurusan</th>
                                            <th scope="col" colspan="">Aksi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once '../connection.php';
                                        $query = mysqli_query($connection, "SELECT * FROM mahasiswa");
                                        $no = 0;
                                        while ($hasil = mysqli_fetch_array($query)) {
                                            $no++;
                                        ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no ?></td>
                                                <td><?= $hasil['Nama'] ?></td>
                                                <td><?= $hasil['NIM'] ?></td>
                                                <td><?= $hasil['Jurusan'] ?></td>
                                                <td class="text-center ms-2" colspan="">
                                                    <a href="" onclick="editdata('<?= $hasil['Id'] ?>')" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                        <i class="fa fa-edit" style="font-size:25px; color:#2f7bff"></i>

                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="controllers/proses_hapus_data.php?id=<?= $hasil['Id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus <?= $hasil['Nama'] ?>')">
                                                        <i class="fa fa-trash-o" style="font-size:25px; color:red"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-center" id="exampleModalLabel">Edit Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="" id="hasil">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Reports -->
            </div>
        </div><!-- End Left side columns -->
        </div>
    </section>

</main><!-- End #main -->

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>


<script>
    function editdata(a) {
        $.ajax({
            type: 'post',
            url: 'views/edit_data.php',
            data: {
                id: a
            },
            success: function(response) {
                $('#hasil').html(response);
            }
        });
    }

    $(document).ready(function() {
        $('#tableData').DataTable();
    });
</script>