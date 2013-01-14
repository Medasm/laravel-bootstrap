<?php if (Session::has('status')) : ?>
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo Session::get('status'); ?>
</div>
<?php endif; ?>
