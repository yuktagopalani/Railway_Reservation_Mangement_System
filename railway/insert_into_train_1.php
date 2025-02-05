<html>

<head>
    <title>IRRMS</title>
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="icon" href="public/assets/rail.png" sizes="40x40" type="image/svg">
    <!-- Link to Bootstrap-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <!-- Link to font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        $(function() {
            $("#navid").load("partials/header.php");
            $("#footid").load("partials/footer.php");
        });
    </script>
</head>

<body style="background-image: linear-gradient(-225deg, #B7F8DB 0%, #50A7C2 100%);">
    <div id="navid"></div>
    <form action="insert_into_train_2.php" method="post">

        Train Name: <input type="text" name="tname" required><br>

        Starting Point: <select id="sp" name="sp" required>
            <?php

            require "db.php";

            $cdquery = "SELECT sname FROM station";
            $cdresult = mysqli_query($conn, $cdquery);

            echo " <option value = \"\" > </option>";

            while ($cdrow = mysqli_fetch_array($cdresult)) {
                $cdTitle = $cdrow['sname'];
                echo " <option value = \"$cdTitle\" > $cdTitle </option>";
            }
            ?>
        </select><br>

        Starting Time: <input type="time" name="st" required><br>

        Destination Point: <select id="dp" name="dp" required>
            <?php

            require "db.php";

            $cdquery = "SELECT sname FROM station";
            $cdresult = mysqli_query($conn, $cdquery);

            echo " <option value = \"\" ></option>";

            while ($cdrow = mysqli_fetch_array($cdresult)) {
                $cdTitle = $cdrow['sname'];
                echo " <option value = \"$cdTitle\" > $cdTitle </option>";
            }
            ?>
        </select><br>

        Destination Time: <input type="time" name="dt" required><br>

        Day of Arrival: <input type="text" name="dd" required><br>

        <input type="submit">
        <div id="footid"></div>
</body>

</html>