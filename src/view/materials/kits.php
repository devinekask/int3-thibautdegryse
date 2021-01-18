<img class="about__grid about__grid--kits" src="assets/grids/about-grid1920.svg" alt="header grid image">


<article>
<div class="container">
    <h1 class="titel ">stel je eigen <br> bouwkit samen</h1>
     <p class="tekst tekst--kits">
        Om het voor niemand moeilijk te maken kan je hier alle materialen aanduiden die je al hebt 
        of niet nodig hebt. Wij stellen zo een gepersonaliseerde kit samen speciaal voor jouw strandstoeltje!
     </p>
     </div>

     <div class="info__container container--shop">

     <div class="container">
<div class="grid__wrap">
        <?php foreach ($materials as $material):?>
            
         <section class="materiaal__container">
             <div class="align">
         <img class="materiaal__afbeelding" src="<?php echo $material['afbeelding'] ?>" alt=" materiaal <?php echo $material['naam']?>" width="250" height="250">
         <div class="materiaal__content">
            <h2 class="materiaal__titel"><?php echo $material['naam'] ?></h2>
            <p class="materiaal__omschrijving"><?php echo $material['omschrijving'] ?></p>
            <p class="materiaal__prijs">€<?php echo $material['prijs'] ?></p>
            </div>
            </div>
         </section>
         
        <?php endforeach?>
    </div>
        </div>
        </div>
</article>
