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

<div class="container">
    <?php foreach($post as $row): ?>
    <form class="m-4" action="<?= base_url('post/update') ?>" method="post">
        <input type="text" class="form-control" name="idpost" value="<?= $row->idpost; ?>" hidden readonly>
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="<?= $row->title; ?>">
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" name="content"><?= $row->content; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </form>
    <?php endforeach; ?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?= base_url('styles/ckeditor/ckeditor.js') ?>"></script>
<script>
    CKEDITOR.replace('content');
</script>
</body>
</html>