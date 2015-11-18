<?php 
  $title = "Institut Supérieur d'Informatique";
  $lastmod = mktime(20, 3, 34, 11, 1, 2015);
  $filename = "home";
  include($_SERVER['DOCUMENT_ROOT']."/controller/counter.php");
  include($_SERVER['DOCUMENT_ROOT']."/view/header.php"); 
?>
  <div class="main">
    <ul>
      <li>
        Licence
        <ul>
          <li>
            Deuxième année
            <ul>
              <li>
                <a href="level/112">Systèmes informatiques et logiciels (SIL)</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/view/footer.php"); ?>
