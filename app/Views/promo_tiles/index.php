<!DOCTYPE html>
<html>
<head>
    <title>Promo Tiles</title>

    <link rel="stylesheet" href="../css/styles.css">

    <?php include 'header.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php include 'messages/error_message.php'; ?>
    <?php include 'messages/success_message.php'; ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Promo Tiles</h1>
        <a class="btn btn-primary mb-3" href="<?php echo base_url('promo_tiles/create'); ?>">Create New Promo Tile</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image URL</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($promoTiles as $promoTile): ?>
                    <tr>
                    <td><?php echo $promoTile['title']; ?></td>
                    <td><?php echo $promoTile['description']; ?></td>
                    <td><?php echo $promoTile['image_url']; ?></td>
                        <td>
                            <button class="btn btn-info btn-sm view-promo-tile-btn" data-id="<?php echo $promoTile['id']; ?>" data-title="<?php echo $promoTile['title']; ?>" data-description="<?php echo $promoTile['description']; ?>" data-image="<?php echo $promoTile['image_url']; ?>">View</button>
                            <a class="btn btn-primary btn-sm" href="<?php echo base_url('promo_tiles/edit/'.$promoTile['id']); ?>">Edit</a>
                            <button class="btn btn-danger btn-sm delete-promo-tile-btn" data-id="<?php echo $promoTile['id']; ?>">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
                
    <!-- View Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Promo Tile Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Title:</strong> <span id="viewTitle"></span></p>
                    <p><strong>Description:</strong> <span id="viewDescription"></span></p>
                    <p><strong>Image URL:</strong> <span id="viewImage"></span></p>
                    <img id="viewImagePreview" src="" alt="Image Preview" style="max-width: 100%;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this promo tile?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script> 
        $(document).ready(function() {
            $('.view-promo-tile-btn').on('click', function() {
                var title = $(this).data('title');
                var description = $(this).data('description');
                var image = $(this).data('image');

                $('#viewTitle').text(title);
                $('#viewDescription').text(description);
                $('#viewImage').text(image);
                $('#viewImagePreview').attr('src', image);
                $('#viewModal').modal('show');
            });

            var promoTileId;
            $('.delete-promo-tile-btn').on('click', function() {
                promoTileId = $(this).data('id');
                $('#deleteModal').modal('show');
            });

            $('#confirmDeleteBtn').on('click', function() {
                window.location.href = '<?php echo base_url('promo_tiles/delete/'); ?>' + promoTileId;
            });

        });
    </script>
</body>
</html>
