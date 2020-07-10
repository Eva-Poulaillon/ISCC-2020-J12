
<html>
  <head>
    <meta charset="utf-8">
    <title>mon-mini-site</title>
  </head>
  <body>

  <nav>
  <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=1">Acceuil</a> |
  <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=2">Page2</a> |
  <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_01/mini-site-routing.php?page=3">Page3</a> |
</nav>
<?php

  if($_GET['page']==1) 
  {
       echo '<h1> '.Acceuil.' </h1>';   
  }


       if($_GET['page']==2)
       {
             echo '<h1> '.Page2.' </h1>';
       }

             if($_GET['page']==3)
            {
             echo '<h1> '.Page3.' </h1>';
            }

?>
  </body>
</html>
