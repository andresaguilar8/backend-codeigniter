<!DOCTYPE html>
<html>
<head>
    <title>Promo Tiles</title>
    <!-- TODO: remove style -->

    <style>
        .alert {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            display: none;
        }
    </style>

    <?php if (session()->has('success')): ?>
        <div id="successMessage" class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" width="16" height="16" fill="currentColor">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <?= session('success') ?>
        </div>
        <?php 
    endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" width="16" height="16" fill="currentColor">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <strong><?= session('error') ?></strong>
        </div>
    <?php endif; ?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- //TODO: move script -->
    <script>
        var $j = jQuery.noConflict();
        $j('#successMessage').delay(3000).fadeOut('slow', function() {
            $(this).remove(); 
        });
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Promo Tiles</h1>
        <a class="btn btn-primary mb-3" href="<?php echo site_url('promo_tiles/create'); ?>">Create New Promo Tile</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($promoTiles as $promoTile): ?>
                <tr>
                <td><?php echo $promoTile['title']; ?></td>
                <td><?php echo $promoTile['description']; ?></td>
                    <td>
                        <a class="btn btn-info btn-sm" href="<?php echo site_url('promo_tiles/view/'.$promoTile['id']); ?>">View</a>
                        <a class="btn btn-primary btn-sm" href="<?php echo site_url('promo_tiles/edit/'.$promoTile['id']); ?>">Edit</a>
                        <a class="btn btn-danger btn-sm" href="<?php echo site_url('promo_tiles/delete/'.$promoTile['id']); ?>" onclick="return confirm('Are you sure you want to delete this promo tile?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
