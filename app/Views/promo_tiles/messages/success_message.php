<?php if (session()->has('success')): ?>
        <div id="successMessage" class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" width="16" height="16" fill="currentColor">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <?= session('success') ?>
        </div>
        <?php 
endif; ?>

<script>
    var $j = jQuery.noConflict();
    $j('#successMessage').delay(3000).fadeOut('slow', function() {
        $(this).remove(); 
    });
</script>