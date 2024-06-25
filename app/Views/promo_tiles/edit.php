<!DOCTYPE html>
<html>
<head>
    <title>Edit Promo Tile</title>
    <link rel="stylesheet" href="../../css/styles.css">

    <?php include 'header.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php include 'messages/error_message.php'; ?>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Edit Promo Tile</h1>
        <form action="<?php  echo base_url('promo_tiles/edit/'.$promoTile['id']);  ?>" method="post">

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $promoTile['title']; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required><?php echo $promoTile['description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="description">Image</label>
                <textarea class="form-control" id="image_url" name="image_url" rows="1" required><?php echo $promoTile['image_url']; ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?php echo base_url('promo_tiles'); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
