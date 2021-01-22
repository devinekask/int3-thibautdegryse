<div class="container">
    <div class="container--kits">
        <article>
            <section>
            <div class="intro__wrapper">
            <div>
            <h2 class="kits__titel">alle essentiele onderdelen, allemaal verkrijgbaar!</h2>
            <p class="kits__inleiding">
            Omdat we weten dat niet iedereen al het nodige materiaal heeft hebben we alle materialen in 3 pakketen opgedeeld. 
            Hier kan je snel kiezen welke materialen je juist nodig hebt. 
            Allemaal tot bij jou thuis geleverd zodat je niet hoeft te sukkelen met onbruikbare onderdelen.
            </p>
            </div>
            <img class="flamingo" src="assets/images/flamingopakket-1920.png" alt="een flamingo met een volledig makerspakket">
            </div>
            <div class="buttons--kit">
            <a class="button button--tut" href="index.php?page=form">ik ga betalen</a>
            <a class="button button--tut" href="index.php?page=tutorial">probeer onze tutorial</a>
            </div>
            </section>









            <section class="kit__section">
                <div>
                <div class="kit__wrapper">
                <h2 class="kits__subtitel">makers pakket</h2>
                <p class="kits__inleiding">
                    Het makers pakket heeft dingen.
                </p>
                </div>

                <img class="kit__grid" src="assets/grids/kit-grid1-1920.svg" alt="">
                <div class="materiaal__grid">


                    <?php foreach ($makers as $maker):?>
                        
                    <div class="materiaal__wrapper">
                        <img width="166" height="166" src="<?php echo $maker['afbeelding']?>" alt="">
                        <p class="materiaal__naam"><?php echo $maker['naam'];?></p>
                        </div>

                        <?php endforeach?>
                        </div>
                        </div>

             <div>
                <img src="assets/images/kit-rec-1920.svg" alt="">
                <div class="prijs__wrapper">

                <form method="post" action="index.php?page=form">
                <input type="hidden" name="product_naam" value="maker_pakket"/>
                <button class="button button--meer" type="submit" name="action" value="add">makers pakket kopen</button>
                </form>

                <p>prijs in euro</p>
                </div>
                </div>
            </section>





            <section class="kit__section">
                <div>
                <div class="kit__wrapper">
                <h2 class="kits__subtitel">beginner pakket</h2>
                <p class="kits__inleiding">
                    Het beginners pakket heeft dingen.
                </p>
                </div>

                <img class="kit__grid" src="assets/grids/kit-grid2-1920.svg" alt="">
                <div class="materiaal__grid">


                    <?php foreach ($materials as $material):?>
                        
                    <div class="materiaal__wrapper">
                        <img width="166" height="166" src="<?php echo $material['afbeelding']?>" alt="">
                        <p class="materiaal__naam"><?php echo $material['naam'];?></p>
                        </div>

                        <?php endforeach?>
                        </div>
                        </div>

             <div>
                <img src="assets/images/kit-rec-1920.svg" alt="">
                <div class="prijs__wrapper">
                <a class=" button button--meer" href="index.php?page=form">beginner pakket kopen</a>
                <p>prijs in euro</p>
                </div>
                </div>
            </section>
        </article>
    </div>
</div>

