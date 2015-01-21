<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        </head>
    <body>

<?php
if ($_POST) {
    require 'DropboxUploader.php';
    $uploader = new DropboxUploader('amine.mirawi@gmail.com','chelsea121190');
    $uploader->upload($_FILES['cv']['tmp_name'], $_POST['destination'], $_FILES['cv']['name']);
    $uploader->upload($_FILES['lm']['tmp_name'], $_POST['destination'], $_FILES['lm']['name']);
   
}
?>       
     
      <form method="POST" enctype="multipart/form-data">
    <dl>
        <dt><label for="Nom">Nom & Prenom</label></dt>
        <dd><input type="text" id="nom" name="nom"></dd>
        <dt><label for="password">Adresse Mail</label></dt>
        <dd><input type="text" id="Mail" name="Mail"></dd>
        <dt><label for="Relephone">Telephone</label></dt>
        <dd><input type="text" id="Telephone" name="Telephone">
        </dd>
        <br>
        <dt><label for="cv"></label>CV</dt>
        <dd><input type="file" id="cv" name="cv"></dd>
        <dt><label for="lm"></label>Lettre de motitvation</dt>
        <dd><input type="file" id="lm" name="lm"></dd> 
        <br>
        <br>
        <dd><input type="submit" value="Envoyer Vos Données!"></dd>
    </dl>
</form>
         

        
        <?php
        //https://github.com/AmineMirawi/Cloud.git
        // put your code here
        ?>
    </body>
</html>
