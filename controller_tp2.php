<?php
    function age($date) { 
        $age = date('Y') - intval($date); 
        if (date('md') < date('md', strtotime($date))) { 
           return $age - 1; 
        } 
        return $age; 
   } 

    $pays = array( 
        "Andorre-la-Vieille" => "Andorre", 
        "Abou Dhabi" => "Emirats arabes unis", 
        "Kaboul" => "Afghanistan", 
        "Saint-John's" => "Antigua-et-Barbuda", 
        "The Valley" => "Anguilla", 
        "Tirana" => "Albanie", 
        "Erevan" => "Arménie", 
        "Willemstad" => "Antilles néerlandaises", 
        "Luanda" => "Angola", 
        "Buenos Aires" => "Argentine", 
        "Pago Pago" => "Samoa Américaines", 
        "Vienne" => "Autriche", 
        "Canberra" => "Australie", 
        "Oranjestad" => "Aruba", 
        "Bakou" => "Azerbaïdjan", 
        "Sarajevo" => "Bosnie-Herzégovine", 
        "Bridgetown" => "Barbade", 
        "Dacca" => "Bangladesh", 
        "Bruxelles" => "Belgique", 
        "Sofia" => "Bulgarie", 
        "Manama" => "Bahreïn", 
        "Bujumbura" => "Burundi", 
        "Porto Novo" => "Bénin", 
        "Hamilton" => "Bermudes", 
        "Bandar Seri Begawan" => "Brunei Darussalam", 
        "La Paz" => "Bolivie", 
        "Brasilia" => "Brésil", 
        "Nassau" => "Bahamas", 
        "Thimphou" => "Bhoutan", 
        "Gaborone" => "Botswana", 
        "Minsk" => "Biélorussie", 
        "Belmopan" => "Belize", 
        "Ottawa" => "Canada", 
        "Bantam" => "Iles cocos", 
        "Kinshasa" => "Congo", 
        "Bangui" => "République Centrafricaine", 
        "Brazzaville" => "Congo", 
        "Berne" => "Suisse", 
        "Yamoussoukro" => "Côte d'Ivoire", 
        "Avarua" => "Iles Cook", 
        "Santiago" => "Chili", 
        "Yaoundé" => "Cameroun", 
        "Pékin" => "Chine", 
        "Santa Fe de Bogota" => "Colombie", 
        "San José" => "Costa Rica", 
        "Prague" => "Tchécoslovaquie", 
        "La Havane" => "Cuba", 
        "Praia" => "Cap-Vert", 
        "Flying Fish Cove" => "Ile Christmas", 
        "Nicosie" => "Chypre", 
        "Prague" => "République Tchèque", 
        "Berlin" => "Allemagne", 
        "Djibouti" => "Djibouti", 
        "Copenhague" => "Danemark", 
        "Roseau" => "Dominique", 
        "Saint-Domingue" => "République Dominicaine", 
        "Alger" => "Algérie", 
        "Quito" => "Equateur", 
        "Tallin" => "Estonie", 
        "Le Caire" => "Egypte", 
        "El Aiun" => "Sahara occidental", 
        "Asmara" => "Erythrée", 
        "Madrid" => "Espagne", 
        "Addis-Abeba" => "Ethiopie", 
        "Helsinki" => "Finlande", 
        "Suva" => "Fidji", 
        "Stanley" => "Iles Falklands", 
        "Palikir" => "Micronésie", 
        "Torshavn" => "Ile Feroe", 
        "Paris" => "France", 
        "Libreville" => "Gabon", 
        "Saint-Georges" => "Grenade", 
        "Tbilissi" => "Géorgie", 
        "Cayenne" => "Guyane Française", 
        "Accra" => "Ghana", 
        "Gibraltar" => "Gibraltar", 
        "Nuuk" => "Groënland", 
        "Banjul" => "Gambie", 
        "Conakry" => "Guinée", 
        "Basse-Terre" => "Guadeloupe", 
        "Ath&eagrave;nes" => "Grèce", 
        "Guatemala" => "Guatemala", 
        "Agaà±na" => "Guam", 
        "Bissau" => "Guinée-Bissao", 
        "Georgetown" => "Guyane", 
        "Tegucigalpa" => "Honduras", 
        "Zagreb" => "Croatie", 
        "Port-au-Prince" => "Haïti", 
        "Budapest" => "Hongrie", 
        "Jakarta" => "Indonésie", 
        "Dublin" => "Irlande", 
        "Tel-Aviv" => "Israël", 
        "New Delhi" => "Inde", 
        "Bagdad" => "Iraq", 
        "Téhéran" => "Iran", 
        "Reykjavik" => "Islande", 
        "Rome" => "Italie", 
        "Kingston" => "Jamaïque", 
        "Amman" => "Jordanie", 
        "Tokyo" => "Japon", 
        "Nairobi" => "Kenya", 
        "Bichkek" => "Kirghistan", 
        "Ouagadougou" => "Burkina Faso", 
        "Bairiki" => "Kiribati", 
        "Moroni" => "République comorienne", 
        "Basseterre" => "Saint-Christophe-et-Niévès", 
        "Pyongyang" => "Corée du Nord", 
        "Séoul" => "Corée du Sud", 
        "Koweït" => "Koweït", 
        "George Town" => "Iles Caïmans", 
        "Astana" => "Kazakhstan", 
        "Vientiane" => "Laos", 
        "Beyrouth" => "Liban", 
        "Castries" => "Sainte-Lucie", 
        "Vaduz" => "Liechtenstein", 
        "Colombo" => "Sri Lanka", 
        "Monrovia" => "Libéria", 
        "Maseru" => "Lesotho", 
        "Vilnius" => "Lituanie", 
        "Luxembourg" => "Luxembourg", 
        "Riga" => "Lettonie", 
        "Triploi" => "Libye", 
        "Rabat" => "Maroc", 
        "Monaco" => "Monaco", 
        "Chisinau" => "Moldavie", 
        "Antananarivo" => "Madagascar", 
        "Dalap-Uliga-Darrit" => "Marshall", 
        "Skopje" => "Macédoine", 
        "Oulan-Bator" => "Mongolie", 
        "Macao" => "Makau", 
        "Garapan" => "Ile Mariana du nord", 
        "Nouakchott" => "Mauritanie", 
        "Plymouth" => "Monteserrat", 
        "La Valette" => "Maurice", 
        "Malé" => "Maldives", 
        "Lilongwe" => "Malawi", 
        "Mexico" => "Mexique West", 
        "Kuala Lumpur" => "Malaisie", 
        "Maputo" => "Mozambique", 
        "Windhoek" => "Namibie", 
        "Nouméa" => "Nouvelle-Calédonie", 
        "Niamey" => "Niger", 
        "Kingston" => "Ile de Norfolk", 
        "Abuja" => "Nigeria", 
        "Managua" => "Nicaragua", 
        "Amsterdam" => "Pays-Bas", 
        "Oslo" => "Norvège", 
        "Katmandou" => "Népal", 
        "Yaren" => "Nauru", 
        "Alofi" => "Niue", 
        "Wellington" => "Nouvelle-Zélande", 
        "Mascate" => "Oman", 
        "Panama" => "Panama", 
        "Lima" => "Pérou", 
        "Papeete" => "Polynésie Française", 
        "Port Moresby" => "Papouasie - Nouvelle Guinée", 
        "Manille" => "Philippines", 
        "Islamabad" => "Pakistan", 
        "Varsovie" => "Pologne", 
        "Saint-Pierre" => "St. Pierre and Miquelon", 
        "Adamstown" => "Pitcairn", 
        "San Juan" => "Porto Rico", 
        "aucune" => "Palestine", 
        "Lisbonne" => "Portugal", 
        "Koror" => "Palau", 
        "Asomption" => "Paraguay", 
        "Doha" => "Qatar", 
        "Malabo" => "Guinée équatoriale", 
        "Saint-Denis" => "Réunion", 
        "Bucarest" => "Roumanie", 
        "Kigali" => "Rwanda", 
        "Riyad" => "Arabie saoudite", 
        "Honiara" => "Iles Salomon", 
        "Victoria" => "Seychelles", 
        "Khartoum" => "Soudan", 
        "Stockholm" => "Suède", 
        "Singapour" => "Singapour", 
        "Jamestown" => "Saint Hélène", 
        "Ljubljana" => "Slovénie", 
        "Bratislava" => "Slovaquie", 
        "Freetown" => "Sierra Leone", 
        "Saint-Marin" => "Saint-Marin", 
        "Dakar" => "Sénégal", 
        "Mogadiscio" => "Somalie", 
        "Paramaribo" => "Suriname", 
        "Sao Tomé" => "Sao Tomé-et-Principe", 
        "Moscou" => "Union Soviétique", 
        "San Salvador" => "Salvador", 
        "Damas" => "Syrie", 
        "Mbabane" => "Swaziland", 
        "Cockburn Town" => "Turks et caicos", 
        "Ndjamena" => "République du Tchad", 
        "Lomé" => "Togo", 
        "Bangkok" => "Thaïlande", 
        "Grozny" => "Tchétchénie", 
        "aucune" => "Iles Tokelau", 
        "Achgabat" => "Turkménistan", 
        "Tunis" => "Tunisie", 
        "Nuku'alofa" => "Tonga", 
        "Dili" => "Timor-oriental", 
        "Ankara" => "Turquie", 
        "Port d'Espagne" => "Trinité-et-Tobago", 
        "Fongafale" => "Tuvalu", 
        "Taipei" => "Taiwan", 
        "Dodoma" => "Tanzanie", 
        "Kiev" => "Ukraine", 
        "Kampala" => "Ouganda", 
        "Londres" => "Royaume-Uni", 
        "Washington" => "Etats Unis d'Amérique", 
        "Montevideo" => "Uruguay", 
        "Tachkent" => "Ousbékistan", 
        "Cité du Vatican" => "Vatican", 
        "Kingstown" => "Saint-Vincent-et-les Grenadines", 
        "Caracas" => "Vénézuela", 
        "Charlotte Amalie" => "Iles vierges américaines", 
        "Road Town" => "Iles vierges britanniques ", 
        "Hanoi" => "Viêt-Nam", 
        "Port-Vila" => "Vanuatu", 
        "Mata-Utu" => "Wallis et Futuna", 
        "Apia" => "Samoa occidentales", 
        "Sanaa" => "Yémen", 
        "Mamoudzou" => "Mayotte", 
        "Belgrade" => "Yougoslavie", 
        "Pretoria" => "Afrique du Sud", 
        "Lusaka" => "Zambie", 
        "Harare" => "Zimbabwe"); 

    asort($pays);
    $message_nom='';
    $message_prenom='';
    $message_datenaiss='';
    $message_paysnaiss='';
    $message_natio='';
    $message_adresse='';
    $message_cp='';
    $message_ville='';
    $message_courriel='';
    $message_tel='';
    $message_diplome='';
    $message_numpole='';
    $message_badge='';
    $message_codac='';
    $message_question1='';
    $message_question2='';
    $message_question3='';
    $message_ok='';
    $post='';
    $err=0;
    if(isset($_POST['nom'])) { $nom= htmlspecialchars($_POST['nom']); $post='1'; } else $nom = '';
    if(isset($_POST['prenom'])) { $prenom = htmlspecialchars($_POST['prenom']); $post='1'; } else $prenom = '';
    if(isset($_POST['datenaiss'])) { $datenaiss = htmlspecialchars($_POST['datenaiss']); $post='1'; } else $datenaiss= '';
    if(isset($_POST['paysnaiss'])) { $paysnaiss = htmlspecialchars($_POST['paysnaiss']); $post='1'; } else $paysnaiss = '';
    if(isset($_POST['natio'])) { $natio = htmlspecialchars($_POST['natio']); $post='1'; } else $natio = '';
    if(isset($_POST['adresse'])) { $adresse = htmlspecialchars($_POST['adresse']); $post='1'; } else $adresse = '';
    if(isset($_POST['cp'])) { $cp = htmlspecialchars($_POST['cp']); $post='1'; } else $cp = '';
    if(isset($_POST['ville'])) { $ville = htmlspecialchars($_POST['ville']); $post='1'; } else $ville = '';
    if(isset($_POST['courriel'])) { $courriel = htmlspecialchars($_POST['courriel']); $post='1'; } else $courriel = '';
    if(isset($_POST['tel'])) { $tel = htmlspecialchars($_POST['tel']); $post='1'; } else $tel = '';
    if(isset($_POST['diplome'])) { $diplome = htmlspecialchars($_POST['diplome']); $post='1'; } else $diplome = '';
    if(isset($_POST['numpole'])) { $numpole = htmlspecialchars($_POST['numpole']); $post='1'; } else $numpole = '';
    if(isset($_POST['badge'])) { $badge = htmlspecialchars($_POST['badge']); $post='1'; } else $badge = '';
    if(isset($_POST['codac'])) { $codac = htmlspecialchars($_POST['codac']); $post='1'; } else $codac = '';
    if(isset($_POST['question1'])) { $question1 = htmlspecialchars($_POST['question1']); $post='1'; } else $question1 = '';
    if(isset($_POST['question2'])) { $question2 = htmlspecialchars($_POST['question2']); $post='1'; } else $question2 = '';
    if(isset($_POST['question3'])) { $question3 = htmlspecialchars($_POST['question3']); $post='1'; } else $question3 = '';
    if($post=='1') {
        if($nom=='')
        {
            $message_nom = '<div class="invalid-feedback">Veuillez renseigner votre nom svp.</div>';
            $err=1;
        }   
        if(strlen($nom)>100)
        {
            $message_nom = '<div class="invalid-feedback">Votre nom doit faire 100 caractères maximum.</div>';
            $err=1;
        }       
        if(!preg_match("#^[a-zA-Z-éèçê'àâôûîù ]+$#", $nom))
        {
            $message_nom = '<div class="invalid-feedback">Le format de votre nom est incorrect.</div>';
            $err=1;
        }
        if($prenom=='')
        {
            $message_prenom = '<div class="invalid-feedback">Veuillez renseigner votre prénom svp.</div>';
            $err=1;
        }  
        if(strlen($prenom)>100)
        {
            $message_prenom = '<div class="invalid-feedback">Votre prénom doit faire 100 caractères maximum.</div>';
            $err=1;
        }     
        if(!preg_match("#^[a-zA-Z-éèêàç'âôûîù ]+$#", $prenom))
        {
            $message_prenom = '<div class="invalid-feedback">Le format de votre prénom est incorrect.</div>';
            $err=1;
        }
        if($datenaiss=='')
        {
            $message_datenaiss = '<div class="invalid-feedback">Veuillez renseigner votre date de naissance svp.</div>';
            $err=1;
        }  
        if(strlen($datenaiss)!=10)
        {
            $message_datenaiss = '<div class="invalid-feedback">Le format de votre date de naissance est incorrect.</div>';
            $err=1;
        }  
        if(age($datenaiss)<18 || age($datenaiss)>=100)
        {
            $message_datenaiss = '<div class="invalid-feedback">Votre âge doit être compris entre 18 et 99 ans.</div>';
            $err=1;
        } 
        if(!preg_match("`(\d{4})-(\d{1,2})-(\d{1,2})`", $datenaiss))
        {
            $message_datenaiss = '<div class="invalid-feedback">Le format de votre date de naissance est incorrect.</div>';
            $err=1;
        }
        if($paysnaiss=='' || !in_array($paysnaiss,$pays))
        {
            $message_paysnaiss = '<div class="invalid-feedback">Veuillez renseigner votre pays de naissance svp.</div>';
            $err=1;
        }  
        if($natio=='')
        {
            $message_natio = '<div class="invalid-feedback">Veuillez renseigner votre nationalité svp.</div>';
            $err=1;
        }   
        if(strlen($natio)>100)
        {
            $message_natio = '<div class="invalid-feedback">Votre nationalité doit faire 100 caractères maximum.</div>';
            $err=1;
        }       
        if(!preg_match("#^[a-zA-Z-éèêçà'âôûîù ]+$#", $natio))
        {
            $message_natio = '<div class="invalid-feedback">Le format de votre nationalité est incorrect.</div>';
            $err=1;
        }
        if($adresse=='')
        {
            $message_adresse = '<div class="invalid-feedback">Veuillez renseigner votre adresse svp.</div>';
            $err=1;
        }   
        if(strlen($adresse)>100)
        {
            $message_adresse= '<div class="invalid-feedback">Votre adresse doit faire 100 caractères maximum.</div>';
            $err=1;
        }       
        if(!preg_match("#^[0-9a-zA-Z-éèêà'çâôûîù ]+$#", $adresse))
        {
            $message_adresse = '<div class="invalid-feedback">Le format de votre adresse est incorrect.</div>';
            $err=1;
        }
        if($cp=='')
        {
            $message_cp = '<div class="invalid-feedback">Veuillez renseigner votre code postal svp.</div>';
            $err=1;
        }  
        if(strlen($cp)!=5)
        {
            $message_cp = '<div class="invalid-feedback">Votre code postal doit nécessairement comporter 5 chiffres</div>';
            $err=1;
        }  
        if(!preg_match("#^[0-9]+$#", $cp))
        {
            $message_cp = '<div class="invalid-feedback">Le format de votre code postal est incorrect.</div>';
            $err=1;
        }
        if($ville=='')
        {
            $message_ville = '<div class="invalid-feedback">Veuillez renseigner votre ville svp.</div>';
            $err=1;
        }   
        if(strlen($ville)>100)
        {
            $message_ville = '<div class="invalid-feedback">Votre ville doit faire 100 caractères maximum.</div>';
            $err=1;
        }       
        if(!preg_match("#^[a-zA-Z-éèêàâ'çôûîù ]+$#", $ville))
        {
            $message_ville = '<div class="invalid-feedback">Le format de votre ville est incorrect.</div>';
            $err=1;
        }
        if($courriel=='')
        {
            $message_courriel = '<div class="invalid-feedback">Veuillez renseigner votre adresse mail svp.</div>';
            $err=1;
        }   
        if(strlen($courriel)>100)
        {
            $message_courriel = '<div class="invalid-feedback">Votre adresse mail doit faire 100 caractères maximum.</div>';
            $err=1;
        }       
        if(!preg_match("#^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$#", $courriel))
        {
            $message_courriel = '<div class="invalid-feedback">Le format de votre adresse mail est incorrect.</div>';
            $err=1;
        }
        if($tel=='')
        {
            $message_tel = '<div class="invalid-feedback">Veuillez renseigner votre num de tél. svp.</div>';
            $err=1;
        }
        if(strlen($tel)!=10)
        {
            $message_tel = '<div class="invalid-feedback">Votre num de tél doit nécessairement comporter 10 chiffres</div>';
            $err=1;
        }
        if(!preg_match("#^[0-9]+$#", $tel))
        {
            $message_tel = '<div class="invalid-feedback">Le format de votre num de tél. est incorrect.</div>';
            $err=1;
        }
        if($diplome=='' || ($diplome!='1' && $diplome!='2' && $diplome!='3' && $diplome!='4'))
        {
            $message_diplome = '<div class="invalid-feedback">Veuillez renseigner le niveau de votre dernier diplôme obtenu.</div>';
            $err=1;
        }
        if($numpole=='')
        {
            $message_numpole = '<div class="invalid-feedback">Veuillez renseigner votre num Pôle Emploi svp.</div>';
            $err=1;
        }  
        if(strlen($numpole) != 8)
        {
            $message_numpole = '<div class="invalid-feedback">Votre num Pôle Emploi doit faire 8 caractères.</div>';
            $err=1;
        }  
        if(!preg_match("#^[0-9]{7}[A-Za-z]$#", $numpole))
        {
            $message_numpole = '<div class="invalid-feedback">Le format de votre num Pôle Emploi est incorrect.</div>';
            $err=1;
        }
        if($badge =='' || ($badge !='0' && $badge !='1' && $badge !='2' && $badge !='3' && $badge !='4' && $badge !='5' && $badge !='6'))
        {
            $message_badge = '<div class="invalid-feedback">Veuillez renseigner votre nombre de badge(s) svp.</div>';
            $err=1;
        }  
        if($codac=='')
        {
            $message_codac = '<div class="invalid-feedback">Veuillez renseigner votre lien Codecademy svp.</div>';
            $err=1;
        }   
        if(strlen($codac)>100)
        {
            $message_codac = '<div class="invalid-feedback">Votre lien Codecademy doit faire 100 caractères maximum.</div>';
            $err=1;
        }       
        if(!preg_match("#^(https?:\/\/)?www.codecademy.com\/[a-zA-Z0-9(\.\?)?]#", $codac))
        {
            $message_codac = '<div class="invalid-feedback">Le format du lien de votre profil Codecademy est incorrect.</div>';
            $err=1;
        }
        if($question1=='')
        {
            $message_question1 = '<div class="invalid-feedback">Veuillez répondre à la question svp.</div>';
            $err=1;
        }   
        if(strlen($question1)>500)
        {
            $message_question1 = '<div class="invalid-feedback">Votre réponse doit faire 500 caractères maximum.</div>';
            $err=1;
        }       
        if(!preg_match("#^[a-zA-Z-éèçê'àâôûîù ]+$#", $question1))
        {
            $message_question1 = '<div class="invalid-feedback">Le format de votre réponse est incorrecte.</div>';
            $err=1;
        }
        if($question2=='')
        {
            $message_question2 = '<div class="invalid-feedback">Veuillez répondre à la question svp.</div>';
            $err=1;
        }   
        if(strlen($question2)>500)
        {
            $message_question1 = '<div class="invalid-feedback">Votre réponse doit faire 500 caractères maximum.</div>';
            $err=1;
        }       
        if(!preg_match("#^[a-zA-Z-éèçê'àâôûîù ]+$#", $question2))
        {
            $message_question2 = '<div class="invalid-feedback">Le format de votre réponse est incorrecte.</div>';
            $err=1;
        }
        if($question3=='')
        {
            $message_question1 = '<div class="invalid-feedback">Veuillez répondre à la question svp.</div>';
            $err=1;
        }   
        if(strlen($question3)>500)
        {
            $message_question3 = '<div class="invalid-feedback">Votre réponse doit faire 500 caractères maximum.</div>';
            $err=1;
        }       
        if(!preg_match("#^[a-zA-Z-éèçê'àâôûîù ]+$#", $question3))
        {
            $message_question3 = '<div class="invalid-feedback">Le format de votre réponse est incorrecte.</div>';
            $err=1;
        }
        if($err==0)
        {
            $message_ok = '<p><div class="alert alert-success">Votre inscription a bien été prise en compte, merci.</div></p>';
        }
    } 
?>