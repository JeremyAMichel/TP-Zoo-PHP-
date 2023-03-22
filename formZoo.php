<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Zoo</title>

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

</head>
<body>
    <section>
        <div class="container mt-5">
            <form action="createZoo.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom du zoo : </label>
                    <input class="form-control" type="text" name="name" id="name" min="2" max="99" required>
                </div>

                <div class="mb-5">
                    <label for="maxEnclosure" class="form-label">Nombre d'enclos maximum : </label>
                    <input class="form-control" type="number" name="maxEnclosure" id="maxEnclosure" min="1" max="20" required>
                </div>



                <div class="mt-3 mb-3">
                    <label for="employee" class="form-label">Employee :</label>
                    <input class="form-control" type="text" name="employee" id="employee" min="2" max="99" required>
                </div>

                <div class="mb-3">
                    <label for="employeeAge" class="form-label">Age : </label>
                    <input class="form-control" type="number" name="employeeAge" id="employeeAge" min="18" max="99" required>
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Sexe :</label>

                    <select class="form-select" name="gender" id="gender">
                        <option value="male">Homme</option>
                        <option value="female">Femme</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Play</button>
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