<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="http://<?php echo $_SERVER[HTTP_HOST]; ?>">
    <link rel="stylesheet" href="res/css/style.css">
  </head>
  <body>
    <div class="inner-body">
      <div class="header">
        <?php include($_SERVER['DOCUMENT_ROOT']."/view/navbar.php"); ?>
      </div>
