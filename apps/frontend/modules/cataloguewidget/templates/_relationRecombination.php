<?php slot('widget_title',__('Recombination'));  ?>
<table class="catalogue_table">
  <thead>
    <th>
     Combination of
    </th>
  </thead>
  <tbody>
  <?php foreach($relations as $renamed):?>
  <tr>
    <td>
      <a class="link_catalogue" title="<?php echo __('Recombination');?>" href="<?php echo url_for('catalogue/relation?type=recombined&table='.$table.'&id='.$eid.'&relid='.$renamed[0]) ?>"><?php echo $renamed[5]//Rec Name?></a>
    </td>
  </tr>
  <?php endforeach;?>
  </tbody>
</table>
  <?php if(count($relations) <=1 ):?>
    <br />
    <?php echo image_tag('add_green.png');?><a title="<?php echo __('Recombination');?>" class="link_catalogue" href="<?php echo url_for('catalogue/relation?type=recombined&table='.$table.'&id='.$eid) ?>"><?php echo __('Add');?></a>
  <?php endif;?>