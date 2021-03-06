<?php slot('title', __('Specimen individuals overview'));  ?>
<?php include_partial('specimen/specBeforeTab', array('specimen' => $specimen, 'mode'=>'individuals_overview', 'view' => $view_only));?>
<?php if(count($individuals)==0):?>
  <h2><?php echo __('Currently, there are no individuals');?></h2>
<?php else : ?>
<div>
<ul id="error_list" class="error_list" style="display:none">
  <li></li>
</ul>
</div>

<table class="catalogue_table<?php if($view_only) echo '_view' ; ?>">
  <thead style="<?php echo (count($individuals))?'':'display: none;';?>">
    <tr>
      <th>
	<?php echo __('Type');?>
      </th>
      <th>
	<?php echo __('Sex');?>
      </th>
      <th>
	<?php echo __('State');?>
      </th>
      <th>
	<?php echo __('Stage');?>
      </th>
      <th>
	<?php echo __('Social status');?>
      </th>
      <th>
	<?php echo __('Rock form');?>
      </th>
      <th colspan="5">
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($individuals as $i => $individual):?>
      <tr class="spec_individuals">
	<td><?php echo $individual->getTypeFormated();?></td>
	<td>
	  <?php echo $individual->getSexFormated();?>
	</td>
	<td>
	  <?php echo $individual->getStateFormated();?>
	</td>
	<td>
	  <?php echo $individual->getStageFormated();?>
	</td>
	<td>
	  <?php echo $individual->getSocialStatusFormated();?>
	</td>
	<td>
	  <?php echo $individual->getRockFormFormated();?>
	</td>
  <td colspan="3">
    <?php echo link_to(image_tag('blue_eyel.png'),'individuals/view?id='.$individual->getId(), array('title'=>__('View this individual')));?>
  </td>
  <?php if(!$view_only) : ?>	    
	  <td>
	    <?php echo link_to(image_tag('edit.png'),'individuals/edit?id='.$individual->getId(), array('title'=>__('Edit this individual')));?>
	  </td>
	  <td>
      <?php echo link_to(image_tag('duplicate.png',array('title'=>'Duplicate this individual')), 'individuals/edit?spec_id='.$individual->getSpecimenRef().
        '&duplicate_id='.$individual->getId(),array('class' => 'duplicate_link')) ?>	
	  </td>
	  <td class="row_delete">
	    <?php echo link_to(image_tag('remove.png'),'catalogue/deleteRelated?table=specimen_individuals&id='.$individual->getId(), array('class'=>'row_delete', 'title'=>__('Delete this individual')));?>
	  </td>
  <?php endif ; ?>	
	<td>
	  <?php echo link_to(
            $individual->getWithParts() ? image_tag('slide_right_enable.png') : image_tag('slide_right_enable_empty.png') 
            ,'parts/overview?id='.$individual->getId(), array('class'=>'part_detail_slide', 'title'=>__('Go to parts overview')));?>
	</td>
  <?php if (!$view_only): ?>	
	<td>
	  <?php echo link_to(image_tag('slide_right_enable_new.png'),'parts/edit?indid='.$individual->getId(), array('class'=>'part_detail_slide', 'title'=>__('Edit a new part')));?>
	</td>
	<?php endif ; ?>
      </tr>
    <?php endforeach;?>
  </tbody>
  <?php if (!$view_only): ?> 
  <tfoot>
    <tr>
      <td colspan='10'>
	<div class="add_spec_individual">
	  <a href="<?php echo url_for('individuals/edit?spec_id='.$specimen->getId());?>" id="add_spec_individual"><?php echo __('Add New');?></a>
	</div>
      </td>
    </tr>
  </tfoot>
  <?php endif ; ?>  
</table>

<script  type="text/javascript">

function addError(html)
{
  $('ul#error_list').find('li').text(html);
  $('ul#error_list').show();
}

function removeError()
{
  $('ul#error_list').hide();
  $('ul#error_list').find('li').text(' ');
}

$(document).ready(function () {  
  $('body').duplicatable({duplicate_href: '<?php echo url_for('specimen/confirm');?>'});

  $('body').catalogue({}); 
  $("a.row_delete").click(function(){
     if(confirm($(this).attr('title')))
     {
       currentElement = $(this);
       removeError();
       $.ajax({
               url: $(this).attr('href'),
               success: function(html) {
		      if(html == "ok" )
		      {
			currentElement.closest('tr').remove();
			if($('table.catalogue_table').find('tbody').find('tr.spec_individuals:visible').size() == 0)
			{
			  $('table.catalogue_table').find('thead').hide();
			}
		      }
		      else
		      {
			addError(html); //@TODO:change this!
		      }
		},
               error: function(xhr){
		  addError('Error!  Status = ' + xhr.status);
               }
             }
            );
    }
    return false;
  });
});
</script>
<?php endif ; ?>
<?php include_partial('specimen/specAfterTab');?>
