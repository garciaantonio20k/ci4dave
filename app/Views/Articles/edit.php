<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>New Article<?= $this->endSection() ?>

<?= $this->section('content') ?>


<h1>Edit Article</h1>
<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach (session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
<?= form_open('articles/update/'.$article['id']) ?>
<label for="title">Title</label>
<input type="text" id="title" name="title" value="<?=old('title')?>">
<label for="content">Content</label>
<textarea id="content" name="content"><?=old('content')?></textarea>
<input type="submit" value="Save">
<?= form_close() ?>

<?= $this->endSection() ?>


