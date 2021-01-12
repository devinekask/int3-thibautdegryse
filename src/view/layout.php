

<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
    <meta charset="utf-8">
    <meta name="description" content="mini maker faire">
    <meta name="keywords" content="makers, gent, makerfaire">
    <?php echo $css;?>
  </head>
  <body>
    <header>
        <nav>
          <div class="container">
            <ul class="navigation__list">
              <li> <a class="home--image" href="index.php">home</li>
              <li> <a href="index.php">home</li>
              <li> <a href="index.php?page=diy">diy</li>
              <li> <a href="index.php?page=kit">kits</li>
           </ul>
          </div>
       
        </nav>
     

     
    </header>
    <main class="content">
      <div class=container>
       <?php echo $content;?>
      </div>
    </main>
 
    <?php echo $js; ?>
  </body>
</html>

