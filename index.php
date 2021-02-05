<?php
    include("controller_tp2.php");
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<title>LA MANU - PARTIE 8 PHP - TP2</title>
        <style type="text/css">
            body {
                background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
            }
            .alert {
                padding:.10rem 1.25rem;
            }
            #formul {
                background-color: white;
                border-radius: 10px;
            }
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            }
        </style>
	</head>
	<body>
        <div class="container justify-align-center p-4">
            <div class="row p-1">
                <div class="col-sm-2">    
                </div>
                <div class="col-sm-8 container justify-align-center p-4 shadow" id="formul">
                <form class="row g-3 needs-validation" novalidate action="index.php" method="POST" enctype="multipart/form-data">       
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">
                        <h3>Formulaire d'inscription</h3><br><br>
                    </div>
                    <div class="col-md-2"></div>

                    <div class="col-md-6"> 
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control <?php if($message_nom!='') echo 'is-invalid'; ?>" id="nom" name="nom" value="<?php echo $nom; ?>" required>
                        <?php
                        if($message_nom!='') echo $message_nom;
                        ?>
                    </div>
                    <div class="col-md-6">   
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control <?php if($message_prenom!='') echo 'is-invalid'; ?>" id="prenom" name="prenom" value="<?php echo $prenom; ?>" required>
                        <?php
                        if($message_prenom!='') echo $message_prenom;
                        ?>
                    </div>
                    <div class="col-md-4"> 
                        <label for="datenaiss" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control <?php if($message_datenaiss!='') echo 'is-invalid'; ?>" id="datenaiss" name="datenaiss" value="<?php echo $datenaiss; ?>" required>
                        <?php
                        if($message_datenaiss!='') echo $message_datenaiss;
                        ?>
                    </div>
                    <div class="col-md-4">   
                        <label for="paysnaiss" class="form-label">Pays de naissance</label>
                        <select id="paysnaiss" name="paysnaiss" class="form-control  <?php if($message_paysnaiss!='') echo 'is-invalid'; ?>">
                            <?php
                            foreach($pays as $cle=>$valeur){
                                echo '<option value="'.$valeur.'">'.$valeur.'</option>';
                             }
                            ?>
                        </select>
                        <?php
                        if($message_paysnaiss!='') echo $message_paysnaiss;
                        ?>
                    </div>
                    <div class="col-md-4">   
                        <label for="natio" class="form-label">Nationalité</label>
                        <input type="text" class="form-control <?php if($message_natio!='') echo 'is-invalid'; ?>" id="natio" name="natio" value="<?php echo $natio; ?>" required>
                        <?php
                        if($message_natio!='') echo $message_natio;
                        ?>
                    </div>
                    <div class="col-md-6"> 
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control <?php if($message_adresse!='') echo 'is-invalid'; ?>" id="adresse" name="adresse" value="<?php echo $adresse; ?>" required>
                        <?php
                        if($message_adresse!='') echo $message_adresse;
                        ?>
                    </div>
                    <div class="col-md-2"> 
                        <label for="cp" class="form-label">Code Postal</label>
                        <input type="text" class="form-control <?php if($message_cp!='') echo 'is-invalid'; ?>" id="cp" name="cp" value="<?php echo $cp; ?>" required>
                        <?php
                        if($message_cp!='') echo $message_cp;
                        ?>
                    </div>
                    <div class="col-md-4"> 
                        <label for="ville" class="form-label">Ville</label>
                        <input type="text" class="form-control <?php if($message_ville!='') echo 'is-invalid'; ?>" id="ville" name="ville" value="<?php echo $ville; ?>" required>
                        <?php
                        if($message_ville!='') echo $message_ville;
                        ?>
                    </div>
                    <div class="col-md-6"> 
                        <label for="courriel" class="form-label">Email</label>
                        <input type="text" class="form-control <?php if($message_courriel!='') echo 'is-invalid'; ?>" id="courriel" name="courriel" value="<?php echo $courriel; ?>" required>
                        <?php
                        if($message_courriel!='') echo $message_courriel;
                        ?>
                    </div>
                    <div class="col-md-6">   
                        <label for="tel" class="form-label">Téléphone</label>
                        <input type="text" class="form-control <?php if($message_tel!='') echo 'is-invalid'; ?>" id="tel" name="tel" value="<?php echo $tel; ?>" required>
                        <?php
                        if($message_tel!='') echo $message_tel;
                        ?>
                    </div>
                    <div class="col-md-6">   
                        <label for="diplome" class="form-label">Diplôme</label>
                        <select id="diplome" name="diplome" class="form-control <?php if($message_diplome!='') echo 'is-invalid'; ?>">
                                            <option value="1">Sans</option>
                                            <option value="2">Bac</option>7
                                            <option value="3">Bac +2</option>
                                            <option value="4">Bac +3 ou supérieur</option>
                        </select>
                        <?php
                        if($message_diplome!='') echo $message_diplome;
                        ?>
                    </div>
                    <div class="col-md-6">   
                        <label for="numpole" class="form-label">Numéro Pôle Emploi</label>
                        <input type="text" class="form-control <?php if($message_numpole!='') echo 'is-invalid'; ?>" id="numpole" name="numpole" value="<?php echo $numpole; ?>" required>
                        <?php
                        if($message_numpole!='') echo $message_numpole;
                        ?>
                    </div>
                    <div class="col-md-6">   
                        <label for="badge" class="form-label">Nombre de badge(s)</label>
                        <select id="badge" name="badge" class="form-control <?php if($message_badge!='') echo 'is-invalid'; ?>">
                        <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                        </select>
                        <?php
                        if($message_badge!='') echo $message_badge;
                        ?>
                    </div>
                    <div class="col-md-6">   
                        <label for="codac" class="form-label">Lien Codecademy</label>
                        <input type="text" class="form-control <?php if($message_codac!='') echo 'is-invalid'; ?>" id="codac" name="codac" value="<?php echo $codac; ?>" required>
                        <?php
                        if($message_numpole!='') echo $message_numpole;
                        ?>
                    </div>
                    <div class="col-md-12">   
                        <label for="question1" class="form-label">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                        <TEXTAREA type="text" class="form-control <?php if($message_question1!='') echo 'is-invalid'; ?>" id="question1" name="question1" rows=4 cols=23 required><?php echo $question1; ?></TEXTAREA>
                        <?php
                        if($message_question1!='') echo $message_question1;
                        ?>
                    </div>
                    <div class="col-md-12">   
                        <label for="question2" class="form-label">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                        <TEXTAREA type="text" class="form-control <?php if($message_question2!='') echo 'is-invalid'; ?>" id="question2" name="question2" rows=4 cols=23 required><?php echo $question2; ?></TEXTAREA>
                        <?php
                        if($message_question2!='') echo $message_question2;
                        ?>
                    </div>
                    <div class="col-md-12">   
                        <label for="question3" class="form-label">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                        <TEXTAREA type="text" class="form-control <?php if($message_question3!='') echo 'is-invalid'; ?>" id="question3" name="question3" rows=4 cols=23 required><?php echo $question3; ?></TEXTAREA>
                        <?php
                        if($message_question3!='') echo $message_question3;
                        ?>
                    </div>
                        <input type="submit" value="Valider" name="valid" id="valid" class="btn btn-primary">
                        <?php
                            if($message_ok!='') echo $message_ok;
                        ?>
                </form>
                </div>
                <div class="col-sm-2">    
                </div>
            </div>
        </div>                                             
	</body>
    <script>
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>
</html>
