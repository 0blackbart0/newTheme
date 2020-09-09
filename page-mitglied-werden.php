<?php   get_header(); ?>

<?php 

$error = NULL;

if(isset($_POST['submit'])){
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $geburtsdatum = $_POST['geburtsdatum'];
    $geschlecht = $_POST['geschlecht'];
    $strasse = $_POST['strasse'];
    $hausnummer = $_POST['hausnummer'];
    $postleitzahl = $_POST['postleitzahl'];
    $ort = $_POST['ort'];
    $telefon = $_POST['telefon'];
    $email = sanitize_email( $_POST['email']);
    $kontoinhaber = $_POST['kontoinhaber'];
    $kreditinstitut = $_POST['kreditinstitut'];
    $bic = $_POST['bic'];
    $iban = $_POST['iban'];

    $message = 'Name: ' . $vorname .' ' . $nachname. "\ngeboren am:" . $geburtsdatum . "\ngeschlecht: " . $geschlecht . "\n Wohnort: " . $strasse . ' ' . $hausnummer . "\n" . $postleitzahl . ' ' .$ort;


    console_log('ok');

    mail($email, 'test betreff', $message, 'From: ktb.test@yahoo.com');

}

?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-sm-10 my-5">
            <?php if (have_posts()) : while ( have_posts(  )) : the_post(); ?>
                <h4><?php the_title(); ?></h4>
                <div class="mt-3"><?php the_content(); ?></div>
            <?php endwhile; endif; ?>
        </div>
        <div class="col-md-10 col-lg-8">
            <form class="justify-content-center" action="" method="post">
                <h4>Anschrift:</h4>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="vorname">Vorname:</label>
                        <input type="text" class="form-control" id="vorname" placeholder="Vorname" name="vorname">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="nachname">Nachname:</label>
                        <input type="text" class="form-control" id="nachname" placeholder="Nachname" name="nachname">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="geburtsdatum">Geburtsdatum:</label>
                        <input type="date" class="form-control" id="geburtsdatum" name="geburtsdatum">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="geschlecht">Geschlecht:</label>
                        <select name="geschlecht" id="geschlecht" class="custom-select custom-select-sm">
                            <option value="" selected disabled>bitte wählen..</option>
                            <option value="m">Männlich</option>
                            <option value="w">Weiblich</option>
                            <option value="d">Divers</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-8">
                        <label for="strasse">Straße:</label>
                        <input id="strasse" class="form-control" type="text" name="strasse">
                    </div>
                    <div class="form-group col-4">
                        <label for="hausnummer">Hausnummer:</label>
                        <input id="hausnummer" class="form-control" type="text" name="hausnummer">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-4">
                        <label for="postleitzahl">Postleitzahl:</label>
                        <input id="postleitzahl" class="form-control" type="text" name="postleitzahl"
                            pattern="[0-9]{5}">
                    </div>
                    <div class="form-group col-8">
                        <label for="ort">Ort:</label>
                        <input id="ort" class="form-control" type="text" name="ort">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-5">
                        <label for="telefon">Telefonnummer:</label>
                        <input id="telefon" class="form-control" type="tel" name="telefon">
                    </div>
                    <div class="form-group col-sm-7">
                        <label for="email">Email:</label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>
                </div>

                <hr>

                <h4>Kontodaten:</h4>
                <div class="form-row">
                    <div class="form-group col-8">
                        <label for="kontoinhaber">Kontoinhaber:</label>
                        <input id="kontoinhaber" class="form-control" type="text" name="kontoinhaber">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-8">
                        <label for="kreditinstitut">Kredidinstitut:</label>
                        <input id="kreditinstitut" class="form-control" type="text" name="kreditinstitut">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="bic">BIC:</label>
                        <input id="bic" class="form-control" type="text" name="bic">
                    </div>
                    <div class="form-group col-sm-8">
                        <label for="iban">Iban:</label>
                        <input id="iban" class="form-control" type="text" name="iban">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="submit">Abschicken</button>
            </form>
        </div>
    </div>
</div>


<?php get_footer(); ?>