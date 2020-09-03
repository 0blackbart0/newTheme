<?php   get_header(); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <form class="justify-content-center">
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
                        <input id="postleitzahl" class="form-control" type="number" name="postleitzahl">
                    </div>
                    <div class="form-group col-8">
                        <label for="ort">Ort:</label>
                        <input id="ort" class="form-control" type="text" name="ort">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="telefon">Telefonnummer:</label>
                        <input id="telefon" class="form-control" type="tel" name="telefon">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group">
                        <label for="kontoinhaber">Kontoinhaber:</label>
                        <input id="kontoinhaber" class="form-control" type="text" name="kontoinhaber">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="kreditinstitut">Kredidinstitut:</label>
                        <input id="kreditinstitut" class="form-control" type="text" name="kreditinstitut">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="bic">BIC:</label>
                        <input id="bic" class="form-control" type="text" name="bic">
                    </div>
                    <div class="form-group">
                        <label for="iban">Iban:</label>
                        <input id="iban" class="form-control" type="text" name="iban">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<p>test</p>

<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php get_footer(); ?>