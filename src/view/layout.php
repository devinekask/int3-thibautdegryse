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
      <div style="display: flex; align-items: center; justify-content: space-between; background: black; color: white; position: fixed; top: 0; left: 0; width: 100%; padding: 0.5em; font-size: 12px; font-family: sans-serif;">
         <span>This is a fictional project, a student assignment for the Bachelor's degree <a href="https://devine.be" style="color: white;">Devine</a></span><button style="border: 0; padding: 0; background: black; color: white; margin: 0 0.5em; padding: 0 0.5em; cursor: pointer; font-size: 12px; " onclick="(function(btn){btn.parentNode.style.display='none'; localStorage.setItem('hide-devine-student-project-banner', '1'); return false;})(this);return false;">x</button><script>if (localStorage.getItem('hide-devine-student-project-banner') === '1') document.currentScript.parentNode.style.display = 'none';</script>
      </div>
      <header>
         <nav>
            <div class="container">
               <ul class="navigation__list">
                  <span class="home--home">
                     <li class="navigation__item"> <a class="link__item--home" href="index.php"> <span class="hidden">home</span> </a> </li>
                     <li class="navigation__item"> <a class="link__item link__item--text" href="index.php">home </a></li>
                  </span>
                  <li class="navigation__item"> <a class="link__item" href="index.php?page=about">over ons</a></li>
                  <li class="navigation__item"> <a class="link__item" href="index.php?page=kits">bouw kits </a></li>
                  <li class="navigaton__item"><a class="link__item" href="index.php?page=tutorial"> <span class="navigation__item--button">probeer onze tutorial</span> </a></li>
               </ul>
            </div>
         </nav>
      </header>
      <main class="content">
         <?php echo $content;?>
      </main>
      <footer class="footer">
         <p>Thibaut Degryse &copy; - 2021 Integration 3 - Mini Maker Faire</p>
         </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"
         integrity="sha512-BB7rb8ZBAxtdJdB7nwDijJH9NC+648xSzviK9Itm+5APTtdpgKz1+82bDl4znz/FBhd0R7pJ/gQtomnMpZYzRw=="
         crossorigin="anonymous"></script>

      <?php echo $js; ?>
   </body>
</html>

