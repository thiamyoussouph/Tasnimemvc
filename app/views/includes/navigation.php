
  <nav class="top-nav">
  <li>
         <img style="height: 23px;" src="<?php echo URLROOT; ?>/public/img/logo.png "alt="" srcset="">
        </li>
    <ul>
    
        <li>
            <a href="<?php echo URLROOT; ?>/index">Acceuil</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/entreprises">Listentreprise</a>
        </li>
        <li><a class="btn btn-green" href="<?php echo URLROOT; ?>/entreprises/ajoute">ajouter entreprise</a>
        
        </li>
    
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Deconnexion</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Connexion</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
