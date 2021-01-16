

<!DOCTYPE html>
<html lang="nl">
   <head>
      <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
      <meta charset="utf-8">
      <meta name="description" content="mini maker faire">
      <meta name="keywords" content="makers, gent, makerfaire">
      <title><?php echo $title?></title>
      <?php echo $css;?>
   </head>
   <body>
      <header>
         <nav>
            <div class="container">
               <ul class="navigation__list">
                  <a class="home__image" href="index.php"></a>
                  <li> <a class="navigation__item" href="index.php">home </a></li>
                  <li> <a class="navigation__item" href="index.php?page=about">over ons</a></li>
                  <li> <a class="navigation__item" href="index.php?page=kits">opbouw kits </a></li>
               </ul>
            </div>
         </nav>
      </header>
      <main class="content">
         <div class=container>
         <?php echo $content;?>
      </main>
      <?php echo $js; ?>
   </body>
</html>

