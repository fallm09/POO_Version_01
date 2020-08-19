<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TEST | BANQUE DU PEUPLE | IN SYSTEM</title>
    <link rel="stylesheet" href="../../public/css/main.css">
    <link rel="stylesheet" href="../../public/css/style.css">
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
                <li class="active"><a href="#"><i class="fas fa-user-tie"></i>Creer un Client</a></li>
                <li><a href="createAccount.php"><i class="fas fa-address-card"></i>Creer un Compte</a></li>
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
                        <h2>BANQUE DU PEUPLE <span class="breadcrumb">>> Creation CLient</span></h2>
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
                <form method="POST" id="inscription" action="../controller/clientController.php">

                    <select name="typeclient" id="typeC">
                        <option value="clientmoral">client moral</option>
                        <option value="clientphysique"> client physique </option>
                        <option value="clientSalarie">client salarie</option>
                        <option value="clientNSalarie">client non salarie</option>
                    </select>

                    <fieldset id="client_moral">
                        <legend>client moral</legend>
                        <div id="container">

                            <p>
                                <label for="name">Nom</label>
                                <input type="text" name="nomClientMoral" id="name">
                                <span id="nom_manquant"></span>
                            </p>

                            <p style="display: none">
                                <label for="Prenom">Prenom</label>
                                <input type="text" name="Prenom" id="Prenom" disabled value='prenom'>
                                <span id="Prenom_manquant"></span>
                            </p>
                            <p>
                                <label for="adresse">adresse</label>
                                <input type="text" name="adresseClientMoral" id="adresse">
                                <span id="adresse_manquant"></span>
                            </p>
                            <p>
                                <label for="email">email</label>
                                <input type="text" name="emailClientMoral" id="email">
                                <span id="email_manquant"></span>
                            </p>
                            <p>
                                <label for="telephone">telephone</label>
                                <input type="number" name="telephoneClientMoral" id="telephone">
                                <span id="telephone_manquant"></span>
                            </p>
                            <p style="display: none">
                                <label for="entreprise">entreprise</label>
                                <input type="text" name="entreprise" name='entreprise' disabled id="entreprise">
                                <span id="entreprise_manquant"></span>
                            </p>
                            <p>
                                <label for="social">raison social</label>
                                <input type="text" name="raisonSocialClientMoral" id="raisonSocial">
                                <span id="social_manquant"></span>
                            </p>
                            <div>

                                <p style="color: red;" id="erreur"></p>
                            </div>

                    </fieldset>

                    <br>

                    <fieldset id="client_physique">
                        <legend>client physique </legend>
                        <div id="wrapper1">
                            <p>
                                <label for="name">Nom</label>
                                <input type="text" name="nomclientphysique" id="name1">
                                <span id="name1_manquant"> </span>
                            </p>

                            <p>
                                <label for="Prenom">Prenom</label>
                                <input type="text" name="Prenomclientphysique" id="Prenom1">
                                <span id=prenom1_manquant> </span>
                            </p>
                            <p>
                                <label for="adresse">adresse</label>
                                <input type="text" name="adresseclientphysique" id="adresse1">
                                <span id="adresse1_manquant"> </span>
                            </p>
                            <p>
                                <label for="email">email</label>
                                <input type="text" name="emailclientphysique" id="email1">
                                <span id="email1_manquant"></span>
                            </p>
                            <p>
                                <label for="telephone">telephone</label>
                                <input type="number" name="telephoneclientphysique" id="telephone1">
                                <span id="telephone1_manquant"></span>
                                <p>
                                    <label for="salaire">salaire</label>
                                    <input type="number" name="salaireclientphysique" id="salaire1">
                                    <span id="salaire1_manquant"> </span>

                                    <p style="display: none">
                                        <label for="compte">compte</label>
                                        <input type="text" name="compte" disabled id="compte" id="compte1">
                                        <span id="compte1_manquant"> </span>
                                    </p>
                                    <p>
                                        <label for="profession">profession</label>
                                        <input type="text" name="professionclientphysique" id="profession1">
                                        <span id="profession1_manquant"></span>
                                    </p>

                        </div>

                    </fieldset>

                    <fieldset id="non_salarie">
                        <legend>client non salarie</legend>
                        <div id="">
                            <p>
                                <label for="name">Nom</label>
                                <input type="text" name="name" id="name2">
                                <span id="name2_manquant"> </span>
                            </p>

                            <p>
                                <label for="Prenom">Prenom</label>
                                <input type="text" name="Prenom" id="Prenom2">
                                <span id="Prenom2_manquant"> </span>
                            </p>
                            <p>
                                <label for="adresse">adresse</label>
                                <input type="text" name="adresse" id="adresse2">
                                <span id="adresse2_manquant"> </span>
                            </p>

                            <p>
                                <label for="telephone">telephone</label>
                                <input type="number" name="telephonephysique" id="telephone2">
                                <span id="telephone2_manquant"> </span>
                            </p>

                            <div>

                            </div>

                            <p style="color: red;" id="erreur"></p>

                        </div>

                    </fieldset>

                    <br>
                    <fieldset id="client_salarie">
                        <legend>client salaire</legend>
                        <div id="physique">
                            <p>
                                <label for="name">Nom</label>
                                <input type="text" name="nom" id="name3">
                                <span id="name3_manquant"> </span>

                            </p>

                            <p>
                                <label for="Prenom">Prenom</label>
                                <input type="text" name="Prenom" id="Prenom3">
                                <span id="Prenom3_manquant"></span>
                            </p>
                            <p>
                                <label for="adresse">adresse</label>
                                <input type="text" name="adresse" id="adresse3">
                                <span id="adresse3_manquant"> </span>
                            </p>

                            <p>
                                <label for="telephone">telephone</label>
                                <input type="number" name="telephone" id="telephone3">
                                <span id="telephone3_manquant"> </span>
                                <p>
                                    <label for="CNI">CNI</label>
                                    <input type="number" name="CNI" id="CNI">
                                    <span id="CNI_manquant"></span>
                                </p>
                                <p>
                                    <label for="email">email</label>
                                    <input type="text" name="email" id="email3">
                                    <span id="email3_manquant"></span>
                                </p>

                        </div>

                    </fieldset>

                    <div>
                        <input type="text" hidden name="typeclient1" id="typeclient1">
                        <input type="submit" id="envoyer3" name='valider' value="Validation">
                    </div>
                </form>

</body>

</html>​
<!-- FIN CONTENU CENTRAL -->
</div>
<!-- ENDING MAIN CONTENT -->
</div>
<!-- ENDING CONTAINER GENERAL -->

<!-- Main JS -->
<script src="../../public/js/global.js"></script>
<script src="../../public/js/app.js"></script>
</body>

</html>