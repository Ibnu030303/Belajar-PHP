<main id="main" class="main">

    <div class="pagetitle">
        <h1>User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active">User</li>
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
                                <h5 class="card-title">Form User Registrasion</h5>
                                <!-- Horizontal Form -->
                                <form action="controllers/register.php" method="POST">
                                    <div class="row mb-3">
                                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="username" class="form-control" id="username" autocompleted>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control" id="inputPassword">
                                        </div>
                                    </div>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">User Level</legend>
                                        <div class="col-sm-10">
                                            <select name="level" id="level">
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form><!-- End Horizontal Form -->
                            </div>
                        </div>
                    </div>
                </div><!-- End Reports -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-hover mt-5 hover" id="tableData">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col" class="text-center">No</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Level</th>
                                            <th scope="col" colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once '../connection.php';

                                        $query = mysqli_query($connection, "SELECT * FROM user");
                                        $no = 0;
                                        while ($hasil = mysqli_fetch_array($query)) {
                                            $no++;
                                        ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no ?></td>
                                                <td><?= $hasil['Username'] ?></td>
                                                <td><?= $hasil['Level'] ?></td>
                                                <td class="text-center">
                                                    <a href="" onclick="viewuser('<?= $hasil['id'] ?>')" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                        <i class="fa fa-edit" style="font-size: 25px"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="controllers/user_delete.php?id=<?= $hasil['id']?>" class="">
                                                        <i class="fa fa-trash" style="font-size: 25px;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-center" id="exampleModalLabel">Tampil Data</h5>
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
                    </div>
                </div><!-- End Reports -->
            </div>
        </div><!-- End Left side columns -->
        </div>
    </section>

</main><!-- End #main -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
    function viewuser(a) {
        $.ajax({
            type: 'post',
            url: 'views/view_user.php',
            data: {
                id: a
            },
            success: function(response) {
                $('#hasil').html(response);
            }
        });
    }
</script>