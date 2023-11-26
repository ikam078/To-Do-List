<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPDATE</title>
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<!-- get data -->
<?php
$id = $_GET['id'];
include "config.php";

$sql = mysqli_query($con, "SELECT * FROM `table_todo` WHERE `id` = '$id'");
$data = mysqli_fetch_array($sql);
?>
<body class="bg-primary">
    <form action="up.php" method="post">
        <div class="container">
            <div class="row justify-content-center bg-white m-auto mt-3 rounded shadow col-md-6">
                <h1 class="text-center text-primary font-monospace p-2 ">TO-DO LIST</h1>
                <div class="col-8 pb-4">
                    <input type="text" value="<?php echo $data['Act_List'] ?>" name="list" class="form-control shadow border-warning text-warning">
                </div>
                <div class="col-2 pb-4">
                    <button class="btn btn-warning shadow text-light"><i class="fa-solid fa-check"></i></button>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>