<?php include 'partials/_header.php'; ?>
<article>

  <section class="sectionBlack" id="aPropos">
    <h2><i class="fa-solid fa-circle-user"></i>&nbsp;&nbsp;A propos de moi</h2>
    <?php include 'partials/_apropos.php' ?>
  </section>

  <div class="lineBarre"></div>

  <section class="sectionWhite" id="parcours">
    <h2 class="h2Clair"><i class="fa-solid fa-route"></i>&nbsp;&nbsp;Parcours</h2>
    <?php include 'partials/_parcours.php' ?>
  </section>

  <div class="lineBarre"></div>

  <section class="sectionBlack" id="projets">
    <?php include 'partials/_projets.php' ?>
  </section>

  <div class="lineBarre"></div>

  <section class="sectionWhite" id="competences">
    <h2 class="h2Clair"><i class="fa-solid fa-code"></i>&nbsp;&nbsp;Compétences</h2>
    <?php include 'partials/_competences.php' ?>
  </section>

  <div class="lineBarre"></div>

  <section class="sectionBlack" id="veille">
    <h2><i class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;Veille et technologie</h2>
    <?php include 'partials/_veille.php' ?>
  </section>

  <div class="lineBarre"></div>

  <div id="scrollUp">
    <a href="#top"><img src="pictures/to_top.webp"></a>
  </div>

</article>
<?php include 'partials/_footer.php'; ?>