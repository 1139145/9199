<?php
  if (isset($_GET['get']))
  {
    if ($_GET['get'] == 'level')
    {
      if (isset($_GET['id']))
      {
        if (intval($_GET['id']) == 112)
        {
          include($_SERVER['DOCUMENT_ROOT']."/view/licence/2/sil.php");
          return;
        }
      }
    }
  }

  include($_SERVER['DOCUMENT_ROOT']."/view/home.php");
?>
