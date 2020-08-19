<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>TEST | BANQUE DU PEUPLE | IN SYSTEM</title>
  <link rel="stylesheet" href="../../public/css/main.css">
  <link rel="stylesheet" href="../../public/css/stylee.css">
  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
  <!-- STARTING : CONTAINER GENERAL -->
  <div class="wrapper">
    <!-- STARTING : SIDEBAR -->
    <div class="sidebar">
      <h2><img class="sidebar_logo" src="../../public/img/BP-LOGO-SVG-WHITE.svg" alt="LOGO BANQUE DU PEUPLE" title="Vous d'Abord"></h2>
      <ul>
        <li><a href="../../index.php"><i class="fas fa-home"></i>Accueil</a></li>
        <li class=""><a href="createClient.php"><i class="fas fa-user-tie"></i>Creer un Client</a></li>
        <li class="active"><a href="#"><i class="fas fa-address-card"></i>Creer un Compte</a></li>
        <li><a href="#"><i class="fas fa-exchange-alt"></i>Faire un Virement</a></li>
      </ul>
      <div class="extra_option">
        <a href="javascript:return false;" title="Changer de Langue"><i class="fas fa-language"></i></a>
        <a href="javascript:return false;" title="Afficher Aide"><i class="fas fa-question-circle"></i></a>
        <a href="javascript:return false;" title="Se Déconnecter"><i class="fas fa-power-off"></i></a>
      </div>
    </div>
    <!-- ENDING : SIDEBAR -->

    <!-- STARTING : MAIN CONTENT -->
    <div class="main_content">
      <div class="header">
        <div class="next_nav">
          <!-- MENU HAUT - PARTIE GAUCHE -->
          <div class="display_header">
            <h2>BANQUE DU PEUPLE <span class="breadcrumb">>> Creation Compte</span></h2>
          </div>
          <!-- MENU HAUT - PARTIE DROITE -->
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-clock" aria-hidden="true"></i> <span class="">Time / Date</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-comments" aria-hidden="true"></i> <span class="">Support</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="">
                <i class="fas fa-user" aria-hidden="true"></i> <span class="">Account</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- // CONTENU CENTRAL :  -->
      <div class="info">
<form method="POST" id="compte_pour_client" action="../controller/Comptecontroller.php">
          
          <select name="typecompte" id="typeX">
            <option value="compteepargnexeweul">compte epargne xeweul</option>
            <option value="comptecourant"> compte courant </option>
            <option value="comptebloque">compte bloque</option>
          </select>

          <fieldset id="compte_epargne_xeweul">
             <legend>compte epargne xeweul </legend>
                <div id="wrapper1">
              <p>
                <label for="fraisdO">frais d'ouverture</label>
                <input type="text" name="frais1" id="frais_d_ouverture">
                <span id="ouverture_manquant"></span>
              </p>

              <p>
                <label for="numero_Agence">numero agence</label>
                <input type="text" name="agence" id="numero_agence">
                <span id="NumAgence_manquant"> </span>
              </p>
              <p>
                <label for=" cleRib"> cle rib</label>
                <input type="text" name="rib" id="cle_rib">
                <span id="clerib_manquant"> </span>
              </p>
              <p>
                <label for="numeroCompte">numero compte</label>
                <input type="text" name="numero" id="numer_compte">
                <span id="compte_manquant"></span>
              </p>
          </fieldset>

          <fieldset id="compte_courant">
            <legend>compte Courant </legend>
            <div id="container">
              <p>
                <label for="agios"> Agios</label>
                <input type="text" name="agios" id="agios1">
                <span id="agios_manquant"> </span>
              </p>

              <p>
                <label for="numeroAgence">numero agence</label>
                <input type="text" name="agence" id="numero_agence1">
                <span id="NumAgence1_manquant"> </span>
              </p>
              <p>
                <label for=" cleR"> cle rib</label>
                <input type="text" name="rib" id="cle_rib1">
                <span id="clerib1_manquant"> </span>
              </p>
              <p>
                <label for="numeroCompte">numero compte</label>
                <input type="text" name="numero" id="numer_compte1">
                <span id="compte1_manquant"></span>
              </p>
          </fieldset>

          <fieldset id="compte_bloque">
            <legend>compte bloque </legend>
            <div id="">
              <p>
                <label for="fraisdOu">frais d'ouverture</label>
                <input type="text" name="frais" id="frais_ouverture1">
                <span id="ouverture_manquant1"></span>
              </p>

              <p>
                <label for="duree_de_blocage">duree de blocage</label>
                <input type="text" name="blocage" id="dure_de_blocage">
                <span id="dure_manquant"> </span>
              </p>
              <p>
                <label for="delai_de_blocag"> delai de blocage</label>
                <input type="text" name="delai" id="delai_de_blocage">
                <span id="delai_manquant"> </span>
              </p>
              <p>
                <label for=" clerib"> cle rib</label>
                <input type="text" name="rib" id="cle_rib2"  disabled id="clerib">
                <span id="clerib2_manquant"> </span>
              </p>
              <p>
                <label for="numeAgence">numero agence</label>
                <input type="text" name="agence1" id="numero_agence2">
                <span id="NumAgence_manquant2"> </span>
              </p>
              <p>
                <label for="numeroCompte">numero compte</label>
                <input type="text" name="numeroCompte" id="numer_compte">
                <span id="compte_manquant"></span>
              </p>
          </fieldset>
          <div>
            <input type="text" hidden name="typeclient1" id="typeclient1">
            <input type="submit" id="envoyer2" name='valider' value="Validation">
          </div>

      </div>

      </fieldset>
      </form>
    </div>
    <!-- FIN CONTENU CENTRAL -->
  </div>
  <!-- ENDING MAIN CONTENT -->
  </div>
  <!-- ENDING CONTAINER GENERAL -->

  <!-- Main JS -->
  <script src="../../public/js/global.js"></script>
  <script src="../../public/js/compte.js"></script>

</body>

</html>