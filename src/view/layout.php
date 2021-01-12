

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
      <div class="container">
        <nav>
         <ul class="navigation__list">
          <li> <a class="home--image" href="index.php">home</li>
          <li> <a href="index.php">home</li>
          <li> <a href="index.php?page=diy">diy</li>
          <li> <a href="index.php?page=kit">kits</li>
         </ul>
        </nav>
      </div>
     

     
    </header>
    <main class="content">
      <?php echo $content;?>
    </main>
 
    <?php echo $js; ?>
  </body>
</html>

