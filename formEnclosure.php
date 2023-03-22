<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Enclosure</title>

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

</head>
<body>
    <section>
        <div class="container mt-5">
            <form action="createEnclosure.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom de l'enclos : </label>
                    <input class="form-control" type="text" name="name" id="name" min="2" max="99" required>
                </div>

                <?php if ($_POST['newEnclosure']=='aviary') { ?>
                    <div class="mb-3">
                        <label for="height" class="form-label">Hauteur en mètre de la Volière : </label>
                        <input class="form-control" type="number" name="height" id="height" min="1" max="100" step="0.01" required>
                    </div>
                <?php } ?>

                <?php if ($_POST['newEnclosure']=='aquarium') { ?>
                    <div class="mb-3">
                        <label for="salinity" class="form-label">Salinité de l'aquarium : </label>
                        <input class="form-control" type="number" name="salinity" id="salinity" min="1" max="15" step="0.01" required>
                    </div>
                <?php } ?>


                
                <button type="submit" class="btn btn-primary mt-3">Créer</button>
            </form>
        </div>
    </section>
</body>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>  </body>
</html>