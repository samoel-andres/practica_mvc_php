<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- content -->
    <div class="container">
        <!-- title -->
        <h1>Registros</h1>

        <!-- description -->
        <span> Este es un ejemplo del patron MVC usando PHP con un simple CRUD en MySQL.</span>

        <!-- alerts -->
        <?php if (!empty($variables['removed']) == true) { ?>
            <div class="mt-4 alert alert-success alert-dismissible fade show" role="alert">
                Usuario eliminado correctamente!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } else if (!empty($variables['updated']) == true) { ?>
            <div class="mt-4 alert alert-success alert-dismissible fade show" role="alert">
                Usuario actualizado correctamente!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } else if (!empty($variables['added']) == true) { ?>
            <div class="mt-4 alert alert-success alert-dismissible fade show" role="alert">
                Usuario agregado correctamente!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <!-- new record -->
        <div class="row mt-4">
            <form method="POST">
                <div class="d-flex">
                    <div class="form-group me-1">
                        <input class="form-control" type="text" name="name" placeholder="User name">
                    </div>
                    <div class="form-group me-1">
                        <input class="form-control" type="text" name="lastname" placeholder="User lastname">
                    </div>
                    <input type="hidden" name="action" value="create">
                    <input class="btn btn-light border" type="submit" value="Add user">
                </div>
            </form>
        </div>

        <!-- data -->
        <table class="table mt-4">
            <thead class="table-dark">
                <tr>
                    <th scope="col">UID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Lasname</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($variables['users'] as $item) { ?>
                    <tr>
                        <td><?php echo $item['uid'] ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['lastname'] ?></td>
                        <td>
                            <form class="me-1" method="POST">
                                <input type="hidden" name="uid" value="<?php echo $item['uid'] ?>">
                                <input type="submit" class="btn btn-danger" name="action" value="Remove">
                                <input type="submit" class="btn btn-success" name="action" value="Update">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>