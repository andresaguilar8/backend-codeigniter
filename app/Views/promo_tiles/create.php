<!DOCTYPE html>
<html>
<head>
    <title>Create Promo Tile</title>
    
    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" width="16" height="16" fill="currentColor">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <strong><?= session('error') ?></strong>
        </div>
    <?php endif; ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Create New Promo Tile</h1>
        <form action="<?php echo site_url('promo_tiles/create'); ?>" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="description">Image</label>
                <textarea class="form-control" id="image_url" name="image_url" rows="1" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
            <a href="<?php echo site_url('promo_tiles'); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
