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
   <div style="display: flex; align-items: center; justify-content: space-between; background: black; color: white; position: fixed; top: 0; left: 0; width: 100%; padding: 0.5em; font-size: 12px; font-family: sans-serif;"><span>This is a fictional project, a student assignment for the Bachelor's degree <a href="https://devine.be" style="color: white;">Devine</a></span><button style="border: 0; padding: 0; background: black; color: white; margin: 0 0.5em; padding: 0 0.5em; cursor: pointer; font-size: 12px; " onclick="(function(btn){btn.parentNode.style.display='none'; localStorage.setItem('hide-devine-student-project-banner', '1'); return false;})(this);return false;">x</button><script>if (localStorage.getItem('hide-devine-student-project-banner') === '1') document.currentScript.parentNode.style.display = 'none';</script></div>

      <header>
         <nav>
            <div class="container">
               <ul class="navigation__list">
                  <li class="navigation__item"> <a class="link__item--home" href="index.php"> <span class="hidden">home</span> </a> </li>
                  <li class="navigation__item"> <a class="link__item" href="index.php">home </a></li>
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
         <div class="container container--sponsor">
            <img src="assets/sponsors/accent.png" width="150" height="65" alt="sponsor van de makerfaire">
            <img src="assets/sponsors/flanders.png" width="150" height="65" alt="sponsor van de makerfaire">
            <img src="assets/sponsors/gent.png" width="150" height="96" alt="sponsor van de makerfaire">
            <img src="assets/sponsors/make.png" width="150" height="75" alt="sponsor van de makerfaire">
            <img src="assets/sponsors/tentzetter.png" width="150" height="52" alt="sponsor van de makerfaire">
            <img src="assets/sponsors/uni.png" width="150" height="65" alt="sponsor van de makerfaire">
            <img src="assets/sponsors/velleman.png" width="150" height="64" alt="sponsor van de makerfaire">
         </div>
      </footer>
      <?php echo $js; ?>
   </body>
</html>