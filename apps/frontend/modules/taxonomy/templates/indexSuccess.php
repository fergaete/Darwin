<div class="page">
    <h1><?php echo __('Taxon Search');?></h1>
    <?php include_partial('catalogue/chooseItem', array('searchForm' => $searchForm, 'is_choose' => false)) ?>
    <br /><br />
    <div class='new_link'>
      <a href="<?php echo url_for('taxonomy/new') ?>"><?php echo __('New');?></a>
    </div>
</div>