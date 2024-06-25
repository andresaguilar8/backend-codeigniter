<?php if (session()->has('error')): ?>
        <div id="errorMessage" class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" width="16" height="16" fill="currentColor">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <?php if (is_string(session('error'))): ?>
                <strong><?= session('error') ?></strong>
            <?php elseif (is_array(session('error'))): ?>
                <strong><?= implode('<br>', session('error')) ?></strong>
            <?php endif; ?>
        </div>
<?php endif; ?>
    
<script>
    var $j = jQuery.noConflict();
    $j('#errorMessage').delay(3000).fadeOut('slow', function() {
        $(this).remove(); 
    });
</script>