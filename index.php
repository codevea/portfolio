<?php include 'partials/_header.php'; ?>
<article>
  <h2 class="h2Article">Portfolio | Vrecq Nathalie</h2>


  <section class="sectionBlack" id="aPropos">
    <h2><i class="fa-solid fa-circle-user"></i> &nbsp; &nbsp; A propos de moi</h2>
    <?php include 'partials/_apropos.php' ?>
  </section>

  <div class="lineBarre"></div>

  <section class="sectionWhite" id="parcours">
    <h2 class="h2Clair"><i class="fa-solid fa-route"></i> &nbsp; &nbsp; Parcours</h2>
    <?php include 'partials/_parcours.php' ?>
  </section>

  <div class="lineBarre"></div>

  <section class="sectionBlack" id="projets">
    <?php include 'partials/_projets.php' ?>
  </section>

  <div class="lineBarre"></div>

  <section class="sectionWhite" id="competences">
    <h2 class="h2Clair"><i class="fa-solid fa-code"></i> &nbsp; &nbsp; Compétences</h2>
    <?php include 'partials/_competences.php' ?>
  </section>

  <div class="lineBarre"></div>

  <section class="sectionBlack" id="veille">
    <h2><i class="fa-solid fa-circle-info"></i> &nbsp; &nbsp;Veille et technologie</h2>
    <?php include 'partials/_veille.php' ?>
  </section>

  <section class="sectionWhite" id="contact">
    <h2 class="h2Clair"><i class="fa-solid fa-address-card"></i> &nbsp; &nbsp; Contact</h2>
    <?php include 'partials/_contact.php' ?>
  </section>

  <div class="lineBarre"></div>

  <div id="scrollUp">
    <a href="#top"><img src="pictures/to_top.webp" alt="Ascenseur"></a>
  </div>

</article>
<?php include 'partials/_footer.php'; ?>