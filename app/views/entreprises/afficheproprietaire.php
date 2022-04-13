<?php
require APPROOT . '/views/includes/head.php';
?><div class="navbar dark">
    <?php
    require APPROOT . '/views/includes/navigation.php';
    ?>
  
</div>
<div class="container">
    <?php if (isLoggedIN()) : ?>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">entreprise</th>
                <th scope="col">prepondant</th>
                <th scope="col">adresse</th>
                <th scope="col">telephone</th>
                <th scope="col">niena</th>
                <th scope="col">date</th>
            
                <th scope="col">organigrame</th>
                <th scope="col">cautisationsocial</th>
                <th scope="col">nombreEnployer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['affiche'] as $affiche) : ?>
                <tr>

                    <td> <?php echo $affiche->nom
                            ?></td>
                    <td> <?php echo $affiche->prenom_nom_repondtant
                            ?></td>
                    <td> <?php echo $affiche->adresse
                            ?></td>
                    <td> <?php echo $affiche->telel
                            ?></td>
                    <td> <?php echo $affiche->niena
                            ?></td>
                    <td> <?php echo $affiche->datecreation
                            ?></td>
                            <td> <?php echo $affiche->organigrame
                            ?></td>
                            <td> <?php echo $affiche->cautisationsocial
                            ?></td>
                            <td> <?php echo $affiche->nombreEnployer
                            ?></td>
                            <td><a class="btn btn-success" href="<?php echo URLROOT."/entreprises/modifier/".$affiche->id ?>">modifier</a> 
                            <a class="btn btn-danger" href="<?php echo URLROOT."/entreprises/suprimer/".$affiche->id?>">suprimer</a> </td>
                            

                </tr>


            <?php endforeach; ?>
        </tbody>
    </table>
        
    <?php endif ?>
    
</div>
