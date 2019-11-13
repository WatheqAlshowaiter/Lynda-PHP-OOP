<!DOCTYPE html>
<html lang="utf-8">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Courses <?php echo isset($page_title) ? "- " . h($page_title) : ""; ?></title>
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" media="all" href="<?= url_for('/css/lib/normalize.css?v=01') ?>">
  <link rel="stylesheet" media="all" href="<?= url_for('/css/lib/skeleton.css?v=01') ?>">
  <link rel="stylesheet" media="all" href="<?= url_for('/css/public.css?v=01') ?>">
  <link rel="icon" type="image/png" href="<?= url_for('/images/logo.png') ?>">
</head>

<body>

  <div class="container">
    <div class="row">
      <header class=column">
        <img class="main-logo" src="<?php echo url_for('/images/Watheq_logo.svg') ?>" height= /><br />
        <h1>
          <a href="<?php echo url_for('/index.php'); ?>">
            كورساتي
          </a>
        </h1>
      </header>
    </div>