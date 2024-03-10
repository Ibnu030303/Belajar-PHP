<?php

$Id = $_POST['id'];

require_once '../../connection.php';

$query = mysqli_query($connection, "SELECT * FROM user WHERE Id=$Id");

while ($hasil = mysqli_fetch_array($query)) {

?>
    <form action="controllers/user_edit.php" method="POST">
        <div class="">
            <input type="hidden" name="id" value="<?= $hasil['id'] ?>" id="id" class="form-control">
        </div>
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Username</label>
            <input type="text" name="username" value="<?= $hasil['Username'] ?>" id="username" class="form-control" required autofocus>
        </div>
        <div class="mb-3">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="password" name="password" value="<?= $hasil['Password'] ?>" class="form-control" id="password" required>
            <input type="checkbox" id="showPassword" class="mt-3"> Show Password<br>
        </div>
        <div class="mb-3">
            <label for="level" class="form-label">User Level</label><br>
            <select name="level" id="level" style="width: 100%; text-align:center;" required>
                <option value="<?= $hasil['Level'] ?>"><?= $hasil['Level'] ?></option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
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

<script>
    $(document).ready(function() {
        // Toggle password visibility
        $("#showPassword").click(function() {
            var passwordField = $("#password");
            var passwordFieldType = passwordField.attr('type');

            if (passwordFieldType == 'password') {
                passwordField.attr('type', 'text');
            } else {
                passwordField.attr('type', 'password');
            }
        });
    });
</script>