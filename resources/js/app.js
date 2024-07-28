import "./bootstrap";
import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);
import * as bootstrap from "bootstrap";

document.getElementById('hamburgerBtn').addEventListener('click', function() {
    document.getElementById('sidebar').style.width = '250px';
});

document.getElementById('closeBtn').addEventListener('click', function() {
    document.getElementById('sidebar').style.width = '0';
});

   // Numero di card che vuoi creare
   var numCards = 9;

   // Selettore del contenitore dove inserire le card
   var cardContainer = document.getElementById('card-container');

   // Ciclo for per creare le card
   for (var i = 1; i <= numCards; i++) {
       // Creazione di un elemento div con classi Bootstrap
       var card = document.createElement('div');
       card.className = 'col-md-4';

       // Inserimento del contenuto della card
       card.innerHTML = `
           <div class="card mb-5">
               <div class="card-body ">
                   <h5 class="card-title">Card Title ${i}</h5>
                   <p class="card-text">Descrizione della card numero ${i}.</p>
                   <a href="#" class="btn btn-primary">Scopri di più</a>
               </div>
           </div>
       `;

       // Aggiunta della card al contenitore
       cardContainer.appendChild(card);
   }