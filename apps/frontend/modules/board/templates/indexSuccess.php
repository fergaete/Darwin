<?php slot('title', __('Dashboard'));  ?>

<?php include_partial('widgets/list', array('widgets' => $widgets, 'category' => 'board')) ?>
<div class="board">

 <?php include_partial('widgets/screen', array(
	'widgets' => $widgets,
	'encod' => false,
	'category' => 'boardwidget',
	'columns' => 2,
	'options' => array()
	)); ?>
</div>
