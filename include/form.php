<?php

$nomModule;
$numero_module;
$description_module;
$type_module;
$module_frequence_entretien;
$module_frequence_format;
$module_date_start;
$module_date_end;

?>

<div class="container border border-primary py-3 rounded">

    <form action="ajouterModule.php" method="POST">

        <div class="form-row">
            <div class="form-group">
                <label for="inputNameModule">Nom du module</label>
                <input type="text" class="form-control" id="inputNameModule" placeholder="Nom" name="inputNameModule" required>
            </div>

            &nbsp;&nbsp;&nbsp;&nbsp;

            <div class="form-group">
                <label for="inputSerialNumber">Numero de serie</label>
                <input type="number" min="1" class="form-control" id="inputSerialNumber" placeholder="152638545" required
                    name="inputSerialNumber">
            </div>

        </div>


        <div class="form-row">
            <div class="form-group">
                <label for="inputTypeModule">Type</label>
                <input type="text" class="form-control" id="inputTypeModule"
                    placeholder="ex: repeteur, capteur de temperateur" name="inputTypeModule" required>
            </div>
        </div>

        <div class="form-row">

            <div class="form-group">
                <label for="inputFrequence">Frequence d'entretien</label>
                <input type="number" min="1" class="form-control" id="inputFrequence" placeholder="2" name="inputFrequence" required>

            </div>

            <div class="form-group">
                <div class="col-auto my-1">
                    <label class="mr-sm-2" for="inputFormatFrequence">Preference</label>
                    <select class="custom-select mr-sm-2" id="inputFormatFrequence" name="inputFormatFrequence" required>
                        <option selected>Format</option>
                        <option value="jours">jours</option>
                        <option value="mois">mois</option>
                        <option value="annees">annees</option>
                    </select>
                </div>

            </div>
        </div>


        <div class="form-row">

            <div class="form-group">
                <label for="inputDateStart">Date de mise en place</label>
                <input type="date" class="form-control" id="inputDateStart" name="inputDateStart" placeholder="yyyy/MM/dd">
            </div>

            &nbsp;&nbsp;&nbsp;&nbsp;

            <div class="form-group">
                <label for="inputDateEnd">Date d'expiration</label>
                <input type="date" class="form-control" id="inputDateEnd" name="inputDateEnd" placeholder="yyyy/MM/dd">
            </div>
        </div>

        <div class="form-group">
            <label for="inputDescriptionModule">Description</label>
            <textarea class="form-control" id="inputDescriptionModule" rows="2"
                placeholder="Module captant le puissance du signal wifi" name="inputDescriptionModule"></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary" value="register">Ajouter Module</button>

    </form>
</div>

<?php

if(isset($_POST['submit'])){
    
$nomModule = $_POST['inputNameModule'];
$numero_module = $_POST['inputSerialNumber'];
$description_module = $_POST['inputDescriptionModule'];
$type_module = $_POST['inputTypeModule'];
$module_frequence_entretien = $_POST['inputFrequence'].$_POST['inputFormatFrequence'];
$module_date_start = $_POST['inputDateStart'];
$module_date_end=$_POST['inputDateEnd'];


if($query = mysqli_query($conn,"INSERT INTO `module`(`nom_module`, `numero_module`, `description_module`, `type_module`, `module_frequence_enntretien`, `module_date_start`, `module_date_end`)
VALUES ('$nomModule','$numero_module','$description_module','$type_module','$module_frequence_entretien','$module_date_start','$module_date_end')")){
    echo "Success";
}else{
    echo "Failure" . mysqli_error($conn);
}
}

 ?>

    