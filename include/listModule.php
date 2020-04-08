<?php 
$idAsDelete;
$sql = "SELECT * FROM module";

$req = $conn->query( $sql) or die($conn->error);


while($row = $req->fetch_assoc()){
$dateStart = date("d-m-Y", strtotime($row['module_date_start']));
$dateEnd = date("d-m-Y", strtotime($row['module_date_end']));

?>
&nbsp;&nbsp;&nbsp;&nbsp;

<div class="col"><form action="index.php" method="POST">
<div class="card text-white bg-primary " style="max-width:40rem;">
<div class="card-header font-weight-bold"><?php echo $row['nom_module'];?></div>
<div class="card-body bg-secondary">
<h5 class="card-title"> n°  <input hidden readonly type="text" class="bg-primary border-hidden" value="<?php echo $row['numero_module'];?>" name="numero_module"> <?php echo $row['numero_module'];?>    </h5>
<p class="card-text">Type de module: <?php echo $row['type_module'];?></p>
<p class="card-text">Frequence d'entretien: <?php echo $row['module_frequence_enntretien'];?></p>
<p class="card-text">Start: <?php echo $dateStart;?></p>
<p class="card-text">End: <?php echo $dateEnd;?></p>
<p class="card-text"><?php echo $row['description_module'];?></p>
</div>
<button type="submit" name="submit" class="btn btn-danger">Supprimer</button>
</div>
</form></div>

&nbsp;&nbsp;&nbsp;&nbsp;

<?php
    } 

    if(isset($_POST['submit'])){

        $idAsDelete = $_POST['numero_module'];

        if($query = mysqli_query($conn,"DELETE FROM `module` WHERE `numero_module` = $idAsDelete;")){
    }else{
    echo "Failure" . mysqli_error($conn);
    }
    echo "<meta http-equiv='refresh' content='0'>";
    }   

?>