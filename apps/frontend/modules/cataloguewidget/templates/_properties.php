<?php slot('widget_title',__('Properties'));  ?>
<table class="catalogue_table">
  <thead>
    <tr>
      <th><?php echo __('Type');?></th>
      <th><?php echo __('Sub-Type');?></th>
      <th><?php echo __('Qualifier');?></th>
      <th><?php echo __('Date From');?></th>
      <th><?php echo __('Date To');?></th>
      <th><?php echo __('Values');?></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($properties as $property):?>
    <tr>
      <td>
	  <a class="link_catalogue" title="<?php echo __('Edit Properties');?>" href="<?php echo url_for('property/add?table='.$table.'&rid='.$property->getId().'&id='.$eid); ?>">
	    <?php echo $property->getPropertyType();?>
	  </a>
      </td>
      <td><?php echo $property->getPropertySubType();?></td>
      <td><?php echo $property->getPropertyQualifier();?></td>
      <td><?php echo $property->getFromDateMasked();?></td>
      <td><?php echo $property->getToDateMasked();?></td>
      <td>
	<?php if( count($property->PropertiesValues) ):?>
	  <a href="#" class="display_value"><?php echo format_number_choice('[1]Show 1 Value|(1,+Inf]Show %1% Values', array('%1%' => count($property->PropertiesValues) ), count($property->PropertiesValues));?></a>
	  <a href="#" class="hidden hide_value"><?php echo __('Hide Values');?></a>
	  <ul class="hidden">
	    <?php foreach($property->PropertiesValues as $value):?>
	      <li>
		<?php echo $value->getPropertyValue();?> <?php echo $property->getPropertyUnit();?> 
		<?php if($value->getPropertyAccuracy() != ""):?>
		  ( +- <?php echo $value->getPropertyAccuracy();?> <?php echo $property->getPropertyAccuracyUnit();?>)
		<?php endif;?>
	      </li>
	    <?php endforeach;?>    
	  </ul>
	<?php else:?>
	  <?php echo __('No Values');?>
	<?php endif;?>
      </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>

<script>
$('.display_value').click(function()
{
  $(this).parent().find('ul').slideDown();
  $(this).parent().find('.hide_value').show();
  $(this).hide();
  return false;
});
$('.hide_value').click(function()
{
  $(this).parent().find('ul').slideUp();
  $(this).parent().find('.display_value').show();
  $(this).hide();
  return false;
});


</script>
<br />
<?php echo image_tag('add_green.png');?><a title="<?php echo __('Add Properties');?>" class="link_catalogue" href="<?php echo url_for('property/add?table='.$table.'&id='.$eid); ?>"><?php echo __('Add');?></a>