<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forme</title>
</head>

<body>
<h1>Forme</h1>

<p>

<form method="post">
    Ime:<br>
    <input type="text" name="ime"><br>
    Prezime:<br>
    <input type="text" name="prezime"><br>
    Spol:<br>
    <input type="radio" name="spol" value="M">Muško<br>
    <input type="radio" name="spol" value="Ž">Žensko<br>
    <input type="radio" name="spol" value="JD">Nešto treće<br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_POST['spol'] == 'M')
{
    echo 'Vaše ime je: ' . "<p class='musko'>" . htmlspecialchars($_POST["ime"]) . '<br>';
    echo 'Vaše prezime je: ' . htmlspecialchars($_POST["prezime"]) . '<br>';
    echo 'Spol: ' . htmlspecialchars($_POST["spol"]) . "</p class='musko'><br>";
}

elseif ($_POST['spol'] == 'Ž')
{
    echo 'Vaše ime je: ' . "<p class='zensko'>" . htmlspecialchars($_POST["ime"]) . '<br>';
    echo 'Vaše prezime je: ' . htmlspecialchars($_POST["prezime"]) . '<br>';
    echo 'Spol: ' . htmlspecialchars($_POST["spol"]) . "</p class='zensko'><br>";
}

elseif ($_POST['spol'] == 'JD')
{
    echo 'Vaše ime je: ' . "<p class='jd'>" . htmlspecialchars($_POST["ime"]) . '<br>';
    echo 'Vaše prezime je: ' . htmlspecialchars($_POST["prezime"]) . '<br>';
    echo 'Spol: ' . htmlspecialchars($_POST["spol"]) . "</p class='jd'><br>";
}


//echo 'Vaše ime je: ' . "<p class='musko" . htmlspecialchars($_POST["ime"]) . '<br>';
//echo 'Vaše prezime je: ' . htmlspecialchars($_POST["prezime"]) . '<br>';
//echo 'Spol: ' . htmlspecialchars($_POST["spol"]) . '<br>';

if ($_POST['spol'] == 'M')
{
    echo ('Vi ste pravi muškarac!');
}
elseif ($_POST['spol'] == 'Ž')
{
    echo ('Vi ste prava žena!');
}
elseif  ($_POST['spol'] == 'JD')
{
    echo ('Što ste vi!?');
}


if ($_POST['ime'] and $_POST['prezime'] == '')
{
    echo ('Niste unesli ime i prezime!');
}
elseif ($_POST['ime'] == '')
{
    echo ('Niste unesli ime!');
}
elseif ($_POST['prezime'] == '')
{
    echo('Niste unesli prezime!');
}
else
{
    echo('');
}
?>

</p>
</body>
</html>
