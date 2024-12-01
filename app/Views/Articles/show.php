<?= $this->extend('layouts/default') ?>
<?= $this->section('title') ?>Articles<?= $this->endSection() ?>

<?= $this->section('content') ?>


<h1><?= esc($article['title']) ?></h1>
<p><?= esc($article['content']) ?></p>

<a href="<?=site_url('/articles')?>">Go Back</a>
<?= $this->endSection() ?>


