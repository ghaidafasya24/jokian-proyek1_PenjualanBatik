<?php
require "../../../Server/Config/Read/categoryRead.php";
$id = $_GET['id'];

$category = query("SELECT * FROM categories WHERE id_category = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Data Category</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../../Assets/css/dashboard.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include '../Partials/navbar.php'; ?>


    <div id="layoutSidenav">
        <?php include '../Partials/sidebar.php'; ?>

        <div id="layoutSidenav_content">
            <main>

                <div class="container-fluid px-4">
                    <h1 class="mt-4">Edit Data Category</h1>
                    <hr>
                    <br>
                    <form action="../../../Server/Config/Update/updateCategory.php" method="post">
                        <input type="hidden" value="<?= $category['id_category']; ?>" name="id">
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="category_name" name="category" value="<?= $category['category']; ?>">
                        </div>

                        <hr>

                        <button type="button" class="btn btn-secondary" onclick="window.location.href = 'category.php';">Back</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </main>

        </div>




    </div>
    </div>
    <script src="../../Assets/js/table.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>