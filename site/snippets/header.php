<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->metaTitle()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $page->metadesk()->isNotEmpty() ? $page->metadesk()->text() : $site->description()->text(); ?>">
  <meta name="author" content="<?= $site->author()->html() ?>">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"  /> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <?= css('assets/css/jquery.fullpage.min.css') ?>
  <?= snippet('style') ?>

</head>
<body class="<?= $page->intendedTemplate(); ?>">
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="logo">
        <a href="<?= url() . '#' . $page->slug(); ?>" rel="home" class="pull-left"><?php snippet('logo') ?></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="timeline">
          <?php snippet('overlay') ?>
        </div>
      </div>
    </div>
  </div>
</header>