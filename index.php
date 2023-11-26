<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TO-DO LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
</head>

<body class="bg-warning">
    <form action="insert.php" method="post">
        <div class="container">
            <div class="row justify-content-center bg-white m-auto mt-3 rounded shadow col-md-6">
                <h1 class="text-center text-warning font-monospace p-2 ">TODO LIST</h1>
                <div class="col-8 pb-4">
                    <input type="text" name="list" class="form-control shadow border-primary text-primary">
                </div>
                <div class="col-2 pb-4">
                    <button class="btn btn-primary shadow"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </form>


    <!-- get data from local host -->
    <?php
    include "config.php";
    $sql = mysqli_query($con, "SELECT * FROM `table_todo`");

    $i = 1;
    ?>

    <!-- tampilkan data -->
    <div class="container">
        <div class=" m-auto col-8 mt-3 shadow ">
            <table class="table">
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($sql)) {

                    ?>

                        <tr>
                            <td class="bg-primary text-light col-1 text-center rounded" ><?php echo $i++ ?></td>
                            <td class="bg-info fs-8"><?php  echo $row['Act_List']?></td>
                            <td 4style="width: 10%;"><a href="update.php? id=<?php echo $row['id'] ?>" class="btn btn-outline-success"><i class="fa-regular fa-pen-to-square fa-fade"></i></a></td>
                            <td style="width: 10%;"><a href="delete.php? id= <?php echo $row['id'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>

                    <?php
                    };
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>