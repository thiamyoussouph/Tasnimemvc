<?php
   require APPROOT . '/views/includes/head.php';
?><div class="navbar dark">
<?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <img src="fmme.jpg" alt="">
      <div class="col-8 mt-5">
     
      
           <form style="margin-top:7%" action="<?php echo URLROOT;?>/entreprises/modifier/<?php echo $data['affiche']->id?>"
            method="post">
          
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom de l'entreprise</label>
              <input type="text" class="form-control" id="nometreprise" name="nom" value="<?php echo $data['affiche']->nom?>" aria-describedby="emailHelp">
              <span class="invalidFeedback"><?php echo $data["nomError"]; ?></span>
            
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Siege de l'entreprise</label>
                <input type="text" class="form-control" id="siegeetreprise" name="adresse"value="<?php echo $data['affiche']->adresse?>" aria-describedby="emailHelp">
                <span class="invalidFeedback"><?php echo $data["adresseError"]; ?></span>
            </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">prenon et non repondant</label>
                <input type="text" class="form-control" id="siegeetreprise"  name="prenom_nom_repondtant" value="<?php echo $data['affiche']->prenom_nom_repondtant?>" aria-describedby="emailHelp">
                <span class="invalidFeedback"><?php echo $data["prenom_nom_repondtantError"]; ?></span>
            </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="Telephoneetreprise" name="telel" value="<?php echo $data['affiche']->telel?>" aria-describedby="emailHelp">
                <span class="invalidFeedback"><?php echo $data["telelError"]; ?></span>
            </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NINEA</label>
                <input type="text" class="form-control" id="siegeetreprise"  name="niena" value="<?php echo $data['affiche']->niena?>"aria-describedby="emailHelp">
                <span class="invalidFeedback"><?php echo $data["nienaError"]; ?></span>
            </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">date de Creation</label>
                <input type="date" class="form-control" id="siegeetreprise" name="datecreation" value="<?php echo $data['affiche']->datecreation?>" aria-describedby="emailHelp">
                <span class="invalidFeedback"><?php echo $data["datecreationError"]; ?></span>
            </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre Enployer</label>
                <input type="text"  class="form-control" id="siegeetreprise" name="nombreEnployer"value="<?php echo $data['affiche']->nombreEnployer?>" aria-describedby="emailHelp">
                <span class="invalidFeedback"><?php echo $data["nombreEnployerError"]; ?></span>
            </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="organigrame" value="<?php echo $data['affiche']->organigrame?>"value="1" id="organigramme">
                <label class="form-check-label" for="exampleCheck1">Avez-vous un organigramme ?</label>
              </div>
             
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" name="cautisationsocial" id="dispositifFormation"value="1">
              <label class="form-check-label" for="exampleCheck1">Avez-vous un Dispositif de cotisation social ?</label>
            </div>
            
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="pqgeWep" value="1" id="pqgeWep"value="1">
                <label class="form-check-label" for="pqgeWep">Avez-vous un page wep ?</label>
              </div>
              <!-- <select class="form-select" name="quartiere_id" aria-label="Default select example">
                <option selected>Selectionner un quartier</option>
                @foreach ($quartier as $q)
                <option value="{{ $q->id }}">{{ $q->nom }}</option>
                @endforeach                
              </select> -->
            <button type="submit" class="btn btn-success">modifier </button>
          </form>
      </div>
</body>
</html>
    