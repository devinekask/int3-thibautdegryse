require('../src/css/style.css');
import './js/script.js';

// import Product from "./js/model/Material.js";
// {
//   const $filterForm = document.querySelector(`.filter__form`);
//   const $products = document.querySelector(`.book__layout`);

//   const init = () => {
//     if ($filterForm) {
//       $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
//     }
//   };

//   const handleLoadProducts = (data) => {
//     $products.innerHTML = data
//       .map((product) => createProduct(product))
//       .join(``);
//   };

//   const createProduct = (productObj) => {
//     const product = new Product(productObj);
//     return product.createHTML();
//   };

//   const handleSubmitFilterForm = (e) => {
//     console.log();
//     e.preventDefault();
//     const qs = new URLSearchParams([
//       ...new FormData($filterForm).entries(),
//     ]).toString();
//     fetch(`${$filterForm.getAttribute("action")}?${qs}`, {
//       headers: new Headers({
//         Accept: `application/json`,
//       }),
//       method: "get",
//     })
//       .then((r) => r.json())
//       .then((data) => handleLoadProducts(data));
//     window.history.pushState(
//       {},
//       "",
//       `${window.location.href.split("?")[0]}?${qs}`
//     );
//   };

//   document.querySelector(`.button--filter`).classList.add("has-js");

//   const $book = document.querySelector(`.input--filter`);
//   if ($book) {
//     $book.addEventListener(`keyup`, handleSubmitFilterForm);
//   }

//   init();
// }
