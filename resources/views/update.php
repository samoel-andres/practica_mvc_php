<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form class="form-control mt-4" method="POST">
                    <?php foreach ($variables['user'] as $item) { ?>
                        <div class="form-group mb-3">
                            <label class="form-label" for="uid">User ID</label>
                            <input class="form-control" type="text" name="uid" value="<?php echo $item['uid'] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">User name</label>
                            <input class="form-control mb-2" type="text" name="name" value="<?php echo $item['name'] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="lastname">User lastname</label>
                            <input class="form-control mb-2" type="text" name="lastname" value="<?php echo $item['lastname'] ?>">
                        </div>
                    <?php } ?>
                    <div class="row justify-content-around">
                        <input type="hidden" name="action" value="index">
                        <input class="col-md-5 btn btn-secondary" type="submit" value="Back">
                        <input class="col-md-5 btn btn-success" type="submit" name="action" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>