<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>dossier images</title>
</head>
<body>
<h1>Affichage des images uploadées</h1>

<div class="container">
    <div class="row">
    <?php
    $it = new FilesystemIterator('uploads/');
    foreach ($it as $fileinfo) {
        $image=$fileinfo->getFilename();
        echo "
            <div class=\"col-3 card\" style=\"width: 10rem;\">
                <img class=\"card-img-top\" src=\"uploads/$image\"  alt=\"Card image cap\">
                <div class=\"card-body\">
                    <p class=\"card-text\">$image</p>
                    <form action=\"#\" method=\"post\">
                        <input type=\"hidden\" name=\"imageToDelete\" value=\"$image\"/>
                        <input type=\"submit\" id=\"delete\" name=\"delete\" value=\"delete\">
                    </form>
                </div>
            </div>";
    }
    ?>
    </div>
    
    <?php

    if(!empty($_POST)){
        $imageToDelete=$_POST["imageToDelete"];
        unlink('uploads/'.$imageToDelete);
        header('location:upload.php');
    }
    
    ?>
</div>
<div>
    <a href="..">Back home</a>
</div>
    
    


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
