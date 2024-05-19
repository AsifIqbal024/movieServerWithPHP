<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>The Movie Server</title>
</head>

<body>
    <?php
    require('./config.php');
    if ($mysqli->connect_error) {
        die("INTRUDER ALERT! Connection not authorized: " . $mysqli->connect_error);
    }

    $sql = "SELECT * FROM movies_list";
    $result = $mysqli->query($sql);

    if (!$result) {
        die("Error: " . $mysqli->error);
    }
    include("./config.php");
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="moviesContainer">
            <div class="movieItem">
                <?php echo "<img class='moviePoster' width='250' height='250' src ='" . $row["Image"] . "'> <br>" . "ID: " . $row["ID"] . "<br>" . " Movie Name: " . $row["Name"] . "<br>" . " Release Year: " . $row["Year"] . "<br>" . " Movie Genre: " . $row["Genre"] . "<br>" . "<br>" . "<br>"; ?>
            </div>
        </div>
    <?php
    }
    ?>

</body>

</html>