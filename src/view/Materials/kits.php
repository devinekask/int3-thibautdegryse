<article>
    <h1 class="titel">stel je eigen kit samen</h1>
     <p class="pagina__omschrijving">
        Om het voor niemand moeilijk te maken kan je hier alle materialen aanduiden die je al hebt 
        of niet nodig hebt. Wij stellen zo een gepersonaliseerde kit samen speciaal voor jouw strandstoeltje!
     </p>
     <p class="totaal__prijs">
         €... prijs van de kit
     </p>
     
    <div class="grid__container">
        <?php foreach ($materials as $material):?>
         <section class="materiaal">
            <h2 class="materiaal__titel"><?php echo $material['naam'] ?></h2>
            <img src="#" alt="afbeelding" width="#" height="#">
            <p class="materiaal__omschrijving"><?php echo $material['beschrijving'] ?></p>
            <p class="materiaal__prijs">€<?php echo $material['prijs'] ?></p>
         </section>
        <?php endforeach?>
    </div>
    </article>