<?php slot('widget_title', __('My Saved Search'));  ?>
<li class="widget">
    <div class="widget_top_button">
        <?php echo image_tag('widget_box_expand_button.png', 'alt=Close');?><?php echo image_tag('widget_close.png', 'alt=Collapse');?>
	</div>
	<div class="widget_top_bar">
		<div class="widget_top_bar_button">
            <?php echo image_tag('widget_refresh.png', 'alt=Refresh');?>
            <a href="#" class="widget_close" ><?php echo image_tag('widget_close.png', 'alt=Close');?></a>
		</div>
		<span><?php include_slot('widget_title') ?></span>
	</div>
	<div class="widget_content">
        <?php include_component('boardwidget', 'savedSearch') ?>
    <div class="widget_bottom_button">
		<?php echo image_tag('widget_box_expand_up_button.png', 'alt=Collapse');?>
	</div>
</li>