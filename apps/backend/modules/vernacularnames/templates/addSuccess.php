<?php include_javascripts_for_form($form) ?>
<div id="vernacular_screen">
  <?php echo form_tag('vernacularnames/add?table='.$sf_request->getParameter('table').'&id='.$sf_request->getParameter('id'). ($form->getObject()->isNew() ? '': '&rid='.$form->getObject()->getId() ) , array('class'=>'edition qtiped_form'));?>
  <?php echo $form['referenced_relation'];?>
  <?php echo $form['record_id'];?>
  <table>
    <tbody>
      <tr>
        <td colspan="2">
          <?php echo $form->renderGlobalErrors() ?>
        </td>
      </tr>
      <tr>
        <th class="top_aligned"><?php echo $form['community']->renderLabel();?></th>
        <td>
          <?php echo $form['community']->renderError(); ?>
          <?php echo $form['community'];?>
        </td>
      </tr>
    </tbody>
  </table>
  <table class="encoding property_values">
    <thead>
      <tr>
        <th colspan="2"><label><?php echo __('Vernacular name');?></label></th>
      </tr>
    </thead>
    <tbody id="property">
      <?php foreach($form['VernacularNames'] as $form_value):?>
        <?php include_partial('vernacular_names_values', array('form' => $form_value));?>
      <?php endforeach;?>
      <?php foreach($form['newVal'] as $form_value):?>
        <?php include_partial('vernacular_names_values', array('form' => $form_value));?>
      <?php endforeach;?>
    </tbody>
  </table>
  <div class='add_value'>
    <a href="<?php echo url_for('vernacularnames/addValue'. ($form->getObject()->isNew() ? '': '?id='.$form->getObject()->getId()) );?>/num/" id="add_prop_value"><?php echo __("Add Value") ; ?></a>
  </div>
  <table class="bottom_actions">
    <tfoot>
      <tr>
        <td>
          <a href="#" class="cancel_qtip"><?php echo __('Cancel');?></a>
          <?php if(! $form->getObject()->isNew()):?>
            <a class="widget_row_delete" href="<?php echo url_for('catalogue/deleteRelated?table=class_vernacular_names&id='.$form->getObject()->getId());?>" title="<?php echo __('Are you sure ?') ?>">
              <?php echo __('Delete');?>
            </a>
          <?php endif;?>
          <input id="submit" type="submit" value="<?php echo __('Save');?>" />
        </td>
      </tr>
    </tfoot>
  </table>
</form>

<script  type="text/javascript">
  function addPropertyValue(event)
  {
    hideForRefresh('#vernacular_screen');
    event.preventDefault();
    $.ajax(
    {
      type: "GET",
      url: $(this).attr('href')+ (0+$('.property_values tbody#property tr').length),
      success: function(html)
      {
        $('.property_values tbody#property').append(html);
        showAfterRefresh('#vernacular_screen');
      }
    });
    return false;
  }

  $(document).ready(function () {

    $('.clear_prop').live('click', clearPropertyValue);

    $('#add_prop_value').click(addPropertyValue);

    $('form.qtiped_form').modal_screen();
  });
</script>
</div>
