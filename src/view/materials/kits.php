<div class="container">
   <div class="container--kits">
      <article>
         <h1 class="hidden">pakket shop</h1>
         <section>
            <div class="intro__wrapper">
               <div>
                  <h2 class="kits__titel">alle essentiele onderdelen, allemaal verkrijgbaar!</h2>
                  <p class="kits__inleiding">
                     Omdat we weten dat niet iedereen al het nodige materiaal heeft hebben we alle materialen in 2 pakketen opgedeeld. 
                     Hier kan je snel kiezen welke materialen je juist nodig hebt. 
                     Allemaal tot bij jou thuis geleverd zodat je niet hoeft te sukkelen met onbruikbare onderdelen.
                  </p>
               </div>
               <img class="flamingo" src="assets/images/flamingopakket-1920.webp" alt="een flamingo met een volledig makerspakket" width="616" height="426">
            </div>
            <div class="buttons--kit">
               <a class="button button--tut" href="index.php?page=tutorial">probeer onze tutorial</a>
            </div>
         </section>
         <section class="kit__section">
            <div>
               <div class="kit__wrapper">
                  <div class="wrapwrap">
                     <div>
                        <h3 class="kits__subtitel">maker pakket</h3>
                        <p class="kits__inleiding">
                           Het maker pakket bevat alles wat een ervaren maker waarschijnlijk niet meteen in huis heeft. 
                           Deze materialen zijn ofwel moeilijk te vinden of niet veel voorkomend. 
                           Check voor je besteld zeker eens thuis als je al dan niet vervangende materialen hebt.
                           Zo houden we samen c02 uitstoot en de afvalberg klein!
                        </p>
                     </div>
                     <div class="kit__image--wrapper">
                        <picture>
                           <source srcset="assets/images/makerpakket-320.webp" media="(max-width: 320px)">
                           <source srcset="assets/images/makerpakket-414.webp" media="(max-width: 414px)">
                           <img class="pakket__foto" src="assets/images/makerpakket-1920.webp" alt="veel dozen naast een strandstoel">
                        </picture>
                        <div class="prijs__wrapper">
                           <a class=" button button--meer" href="index.php?page=form">makerpakket kopen</a>
                           <p class="pakket__prijs">€35</p>
                        </div>
                     </div>
                  </div>
               </div>
               <img class="kit__grid" src="assets/grids/kit-grid1-1920.svg" alt="een grid achtergrond voor de lijst van materialen">
               <div class="materiaal__grid">
                  <?php foreach ($makers as $maker):?>
                  <div class="materiaal__wrapper">
                     <img width="166" height="166" src="<?php echo $maker['afbeelding']?>" alt="<?php echo $maker['naam']?>">
                     <p class="materiaal__naam"><?php echo $maker['naam'];?></p>
                  </div>
                  <?php endforeach?>
               </div>
            </div>
         </section>
         <section class="kit__section">
            <div>
               <div class="kit__wrapper">
                  <div class="wrapwrap">
                     <div>
                        <h3 class="kits__subtitel">beginner pakket</h3>
                        <p class="kits__inleiding">
                           Het beginners pakket bezit alle onderdelen die je als een niet-maker of beginend maker misschien niet zou hebben. 
                           Controleer thuis zeker eens als je deze onderdelen toch zou hebben, in oude toestellen bijvoorbeeld! Recycleren is de boodschap!
                        </p>
                     </div>
                     <div class="kit__image--wrapper">
                        <picture>
                           <source srcset="assets/images/beginnerpakket-320.webp" media="(max-width: 320px)">
                           <source srcset="assets/images/beginnerpakket-414.webp" media="(max-width: 414px)">
                           <img class="pakket__foto" src="assets/images/beginnerpakket-1920.webp" alt="veel dozen naast een strandstoel">
                        </picture>
                        <div class="prijs__wrapper">
                           <a class=" button button--meer" href="index.php?page=form">beginner pakket kopen</a>
                           <p class="pakket__prijs">€85</p>
                        </div>
                     </div>
                  </div>
               </div>
               <img class="kit__grid" src="assets/grids/kit-grid2-1920.svg" alt="een grid achtergrond voor de lijst van materialen">
               <div class="materiaal__grid">
                  <?php foreach ($materials as $material):?>
                  <div class="materiaal__wrapper">
                     <img width="166" height="166" src="<?php echo $material['afbeelding']?>" alt="<?php echo $material['naam']?>">
                     <p class="materiaal__naam"><?php echo $material['naam'];?></p>
                  </div>
                  <?php endforeach?>
               </div>
            </div>
         </section>
      </article>
   </div>
</div>

