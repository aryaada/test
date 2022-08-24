<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php $this->load->view('nav') ?>
<?php foreach($akun as $row): ?>
<div class="container">
    <h1 class="mt-4"><?= $row->name; ?></h1>
    <a href="<?= base_url('akun/edit/'.$row->username) ?>" class="btn btn-primary mb-4">Edit</a>&nbsp;&nbsp;<a href="<?= base_url('akun/hapus/'.$row->username) ?>" class="btn btn-danger mb-4">Delete</a>
    <table class="table table-bordered">
        <tr>
            <th scope="row">Username</th>
            <td><?= $row->username; ?></td>
        </tr>
        <tr>
            <th scope="row">Name</th>
            <td><?= $row->name; ?></td>
        </tr>
        <tr>
            <th scope="row">Role</th>
            <td colspan="2"><?= $row->role; ?></td>
        </tr>
    </table>
</div>
<?php endforeach; ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>