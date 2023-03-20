<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Zoo</title>
</head>
<body>
<form action="createZoo.php" method="post">
        <div>
            <label for="name">Nom du zoo : </label>
            <input type="text" name="name" id="name" min="2" max="99">
        </div>

        <div>
            <label for="maxEnclosure">Nombre d'enclos maximum : </label>
            <input type="number" name="maxEnclosure" id="maxEnclosure" min="1" max="20">
        </div>

        <br><br>

        <div>
            <label for="employee">Employee :</label>
            <input type="text" name="employee" id="employee" min="2" max="99">
        </div>

        <div>
            <label for="employeeAge">Age : </label>
            <input type="number" name="employeeAge" id="employeeAge" min="18" max="99">
        </div>

        <div>
            <label for="gender">Sexe :</label>

            <select name="gender" id="gender">
                <option value="male">Homme</option>
                <option value="female">Femme</option>
            </select>
        </div>
        
        <button type="submit">Play</button>
    </form>
</body>
</html>