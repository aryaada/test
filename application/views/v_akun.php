<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php $this->load->view('nav') ?>

<div class="container">
    <a href="<?= base_url('akun/add_akun') ?>" class="btn btn-success mb-4 mt-4">Create Account</a>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Name</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach($akun as $row): ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->username; ?></td>
                <td><?= $row->name; ?></td>
                <td><?= $row->role; ?></td>
                <td><a href="<?= base_url('akun/detail/'.$row->username) ?>">View</a>&nbsp;&nbsp;<a href="<?= base_url('akun/edit/'.$row->username) ?>">Edit</a>&nbsp;&nbsp;<a href="<?= base_url('akun/hapus/'.$row->username) ?>">Delete</a></td>
            </tr>
            <?php $no++;?>
            <?php endforeach; ?>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</body>
</html>