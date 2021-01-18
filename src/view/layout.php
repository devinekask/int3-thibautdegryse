<!DOCTYPE html>
<html lang="nl">
   <head>
      <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
      <meta charset="utf-8">
      <meta name="description" content="mini maker faire">
      <meta name="keywords" content="makers, gent, makerfaire">
      <link rel="shortcut icon" type="image/x-icon" href="https://images.squarespace-cdn.com/content/v1/5e0f7d0053de411909fccb19/1578107700464-KYNMR9IJ8WDNRNIJYM36/ke17ZwdGBToddI8pDm48kL_6G9w3UNhXw5D5JxENj8lZw-zPPgdn4jUwVcJE1ZvWEtT5uBSRWt4vQZAgTJucoTqqXjS3CfNDSuuf31e0tVGWer889w-vGKgLDqzxZcvvDVwj21w7zPHZNhD_3Lh45O87Nsj43NRAr6WuWZv5DKs/favicon.ico?format=100w"/>
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
                  <li class="navigation__item"> <a class="link__item" href="index.php?page=kits">opbouw kits </a></li>
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