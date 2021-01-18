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
                  <li class="navigation__item"> <a class="link__item--home" href="index.php"> <span class="hidden">home</span> </a> </li>
                  <li class="navigation__item"> <a class="link__item" href="index.php">home </a></li>
                  <li class="navigation__item"> <a class="link__item" href="index.php?page=about">over ons</a></li>
                  <li class="navigation__item"> <a class="link__item" href="index.php?page=kits">bouw kits </a></li>
               </ul>
            </div>
         </nav>
      </header>
      <main class="content">
         <?php echo $content;?>
      </main>
      <footer>
         <div class="footer__kleur"></div>
      </footer>
      <?php echo $js; ?>
   </body>
</html>