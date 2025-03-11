@include('template.header')


<section  class="subscribe_section">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Ajouter un <span>Article Vêtimentaire</span>
        </h2>
      </div>
      <div class="content">
        <form action="#">
          <div class="user-details">
            <div class="input-box">
              <input type="text" placeholder="Entrez le nom de l'article" required>
            </div>
            <div class="input-box">
              <textarea placeholder="Décrivez l'article" required></textarea>
            </div>
            <div class="input-box">
              <input type="number" placeholder="Entrez le prix de l'article" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Entrez la taille" required>
            </div>
            <div class="input-box">
              <input type="text" placeholder="Entrez la couleur de l'article" required>
            </div>
            <div class="input-box">
             <input type="text" placeholder="Entrez la quantité disponible" required>
           </div>
            <div class="input-box">
              <input type="file" required placeholder="Choisir une image de l'article">
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Ajouter l'article">
          </div>
          <div class="input-box">
           
         </div> 
        </form>
      </div>
    </div>
  </section>



@include('template.footer')