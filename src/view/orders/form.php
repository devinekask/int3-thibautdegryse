<div class="color__form">
<div class="container">
    <div class="container--form">

    <article>
        <h1 class="hidden">bestellen</h1>
    
    <form class="form__grid" method="POST"  action="index.php?page=form">
    <input type="hidden" name="action" value="insertOrder">

<section class="form__gegevens">
    <h2 class="form__titel">gegevens</h2>

    <div class="input__wrapper">
        <label class="form__label" for="naam">naam</label>
        <input class="form__input form__input--naam" placeholder="Mark Maker" required type="text" id="naam" name="naam" value="<?php if(!empty($_POST['naam'])){ echo $_POST['naam'];} ?>">
    </div> 

    <div class="input__wrapper">
        <label class="form__label" for="postcode">postcode</label>
        <input class="form__input" placeholder="gemeente / postcode" required type="text" id="postcode" name="postcode" value="<?php if(!empty($_POST['postcode'])){ echo $_POST['postcode'];} ?>">
</div>

<div class="address__wrapper">
    <div class="input__wrapper">
        <label class="form__label" for="straat">straat</label>
        <input class="form__input form__input--straat" placeholder="Chinastraat" required type="text" id="straat" name="straat" value="<?php if(!empty($_POST['straat'])){ echo $_POST['straat'];} ?>">
</div>
        <div class="input__wrapper">
        <label class="form__label" for="nr">nr.</label>
        <input class="form__input form__input--nrbus" placeholder="2" required type="text" id="nr" name="nr" value="<?php if(!empty($_POST['nr'])){ echo $_POST['nr'];} ?>">
</div>
        <div class="input__wrapper">
        <label class="form__label" for="bus">bus</label>
        <input class="form__input form__input--nrbus" placeholder="2A" type="text" id="bus" name="bus" value="<?php if(!empty($_POST['bus'])){ echo $_POST['bus'];} ?>">
</div>
</div>


        <div class="input__wrapper">
        <label class="form__label" for="datum">datum</label>
        <input class="form__input" required type="date" id="datum" name="datum" value="<?php if(!empty($_POST['datum'])){ echo $_POST['datum'];} ?>">
</div>
        <div class="input__wrapper">
        <label class="form__label" for="telefoon">telefoon</label>
        <input class="form__input" placeholder="0498123456" required type="tel" id="telefoon" name="telefoon" value="<?php if(!empty($_POST['telefoon'])){ echo $_POST['telefoon'];} ?>">
</div>

<div class="input__wrapper">
        <label class="form__label" for="email">email</label>
        <input class="form__input" placeholder="mark.maker@faire.be" required type="email" id="email" name="email" value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];} ?>">
        </div>
    </section>


    <section class="form__betalen">
        <h2 class="form__titel">betalen</h2>

        <div class="radio__wrapper">
        <input class="radio__input" type="radio" id="betaaloptie1"
            name="optie" value="bancontact">
            <label class="form__label" for="betaaloptie1">bancontact<img class="payment__optie" src="assets/images/bancontact.png" alt=""></label>

            </div>

        <div class="radio__wrapper">
            <input class="radio__input" type="radio" id="betaaloptie2"
            name="optie" value="paypal">
            <label class="form__label" for="betaaloptie2">paypal<img class="payment__optie" src="assets/images/paypal.png" alt=""></label>

            </div>

        <div class="radio__wrapper">            
            <input class="radio__input" type="radio" id="betaaloptie3"
            name="optie" value="mastercard">
            <label class="form__label" for="betaaloptie3">mastercard<img class="payment__optie" src="assets/images/mastercard.png" alt=""></label>
            </div>
    </section>



        <section class="form__winkelmandje">
            <h2 class="form__titel">winkelmandje</h2>
            <div class="winkelmandje__container">
                <dl class="order__lijst">
                    <div class="winkelmandje__lijst">
                    <dt>drijfband</dt>
                        <dd class="winkelmandje__prijs">€12</dd>
                    </div>
                    <div class="winkelmandje__lijst">
                    <dt>drijfband</dt>
                        <dd class="winkelmandje__prijs">€12</dd>
                    </div>
                </dl> 
            </div>
         <input class="button--verder" type="submit" value="Ik ga betalen">
        </section>
        <input class="button--verder hidden--button" type="submit" value="Ik ga betalen">



        
    </form>
    </article>
    </div>
</div>
</div>
