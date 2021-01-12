
class Book {
  constructor(productObject) {
    this.id = productObject['id'];
    this.naam = productObject['naam'];
    this.afbeelding = productObject['afbeelding'];
    this.auteur = productObject['auteur'];
    this.omschrijving = productObject['omschrijving'];
    this.prijs = productObject['prijs'];
    this.kleineomschrijving = productObject['kleineomschrijving'];

  }

  createHTML() {
    return ` <li><a class="book__link" href="index.php?page=detailsBook&amp;id=${this.id};
    ">
    <section class="book__wrap">
      <div class="context__wrap">
        <div class="title-price">
          <h3 class="book__title">${this.naam}</h3>
          <div class="red__box">
            <p class="price">€${this.prijs}</p>
          </div>
        </div>
        <p class="book__author">${this.auteur}</p>
        <p class="book__description--small">${this.kleineomschrijving}</p>
      </div>
      <img  class="image" srcset="${this.afbeelding}.png 1920w, <?php echo $book['afbeelding']?>xsmaller.png 768w" 
        sizes="(max-width: 1920px) 1920px, 768px"
        src="${this.afbeelding}.png"
        alt="book cover of ${this.naam} by ${this.auteur}">
    </section>
  </a></li>`;
  }
}
export default Book;









