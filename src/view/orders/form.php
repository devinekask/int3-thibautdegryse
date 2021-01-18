<div class="container--form">
<div class="container">
    <article class="form__grid">
        <h1 class="hidden">bestelgegevens</h1>
    
    <form method="POST"  action="index.php?page=form">
    <input type="hidden" name="action" value="insertOrder">


<section>
    <h2 class="form__titel">gegevens</h2>

    <div class="form">

    <div class="input__wrapper">
    <label class="form__label" for="naam">naam</label>
    <input class="form__input" placeholder="placeholder" required type="text" id="naam" name="naam" value="<?php if(!empty($_POST['naam'])){ echo $_POST['naam'];} ?>">
    </div>

<div class="input__wrapper">
    <label class="form__label" for="postcode">postcode</label>
    <input class="form__input" placeholder="placeholder" required type="text" id="postcode" name="postcode" value="<?php if(!empty($_POST['postcode'])){ echo $_POST['postcode'];} ?>">
</div>

<div class="input__wrapper">
    <label class="form__label" for="straat">straat</label>
    <input class="form__input" placeholder="placeholder" required type="text" id="straat" name="straat" value="<?php if(!empty($_POST['straat'])){ echo $_POST['straat'];} ?>">
</div>

<div class="input__wrapper">

    <label class="form__label" for="nr">nr.</label>
    <input class="form__input" placeholder="placeholder" required type="text" id="nr" name="nr" value="<?php if(!empty($_POST['nr'])){ echo $_POST['nr'];} ?>">
</div>

<div class="input__wrapper">

    <label class="form__label" for="bus">bus</label>
    <input class="form__input" placeholder="placeholder" type="text" id="bus" name="bus" value="<?php if(!empty($_POST['bus'])){ echo $_POST['bus'];} ?>">
</div>

<div class="input__wrapper">
    <label class="form__label" for="datum">datum</label>
    <input class="form__input" placeholder="placeholder" required type="date" id="datum" name="datum" value="<?php if(!empty($_POST['datum'])){ echo $_POST['datum'];} ?>">
    </div>

<div class="input__wrapper">
    <label class="form__label" for="telefoon">telefoon</label>
    <input class="form__input" placeholder="placeholder" required type="tel" id="telefoon" name="telefoon" value="<?php if(!empty($_POST['telefoon'])){ echo $_POST['telefoon'];} ?>">
</div>

<div class="input__wrapper">
    <label class="form__label" for="email">email</label>
    <input class="form__input" placeholder="placeholder" required type="email" id="email" name="email" value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];} ?>">
</div>
</div>
    </section>



<!-- 
    <section>
    <h2 class="form__titel">betalen</h2>

    <label for="bancontact">bancontact</label>
    <input type="radio" id="bancontact" name="betaaloptie" value="<?php if(!empty($_POST['betaaloptie'])){ echo $_POST['betaaloptie'];} ?>>

    <label for="paypal">paypal</label>
  <input type="radio" id="paypal" name="betaaloptie" value="<?php if(!empty($_POST['betaaloptie'])){ echo $_POST['betaaloptie'];} ?>>

  <label for="mastercard">mastercard</label>
  <input type="radio" id="mastercard" name="betaaloptie" value="<?php if(!empty($_POST['betaaloptie'])){ echo $_POST['betaaloptie'];} ?>>

    
    </section> -->




    <div>
                        <input type="submit" value="Ik bevestig mijn aankoop!"></input>
                    </div>

        
    </form>
    </article>
</div>
</div>