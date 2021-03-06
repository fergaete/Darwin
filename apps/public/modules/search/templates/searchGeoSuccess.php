<?php slot('title', __('Search Specimens/Rocks/Minerals'));  ?>  
<div class="page">
<h1><?php echo __("Specimen search criteria");?></h1>
<?php echo form_tag('search/search', array('class'=>'publicsearch_form'));?>
  <h2 class="title"><?php echo __("Classifications") ?></h2>
  <?php echo $form->renderGlobalErrors(); ?>
  <div class="borded">
    <?php echo $form->renderHiddenFields(); ?>
    <table id="classifications">
      <thead>
        <tr>
          <th></th>
          <th><?php echo __("Scientific Name") ?></th>  
          <th><?php echo __("Common Name") ?></th>  
          <th><?php echo __("Level") ?></th>  
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $form['taxon_name']->renderLabel();?> :</td>
          <td><?php echo $form['taxon_name'];?></td>
          <td><?php echo $form['taxon_common_name'];?></td>
          <td><?php echo $form['taxon_level_ref'];?></td>
        </tr>
        <tr>
          <td><?php echo $form['chrono_name']->renderLabel();?> :</td>
          <td><?php echo $form['chrono_name'];?></td>  
          <td><?php echo $form['chrono_common_name'];?></td>  
          <td><?php echo $form['chrono_level_ref'];?></td>     
        </tr>
        <tr>
          <td><?php echo $form['litho_name']->renderLabel();?> :</td>
          <td><?php echo $form['litho_name'];?></td>  
          <td><?php echo $form['litho_common_name'];?></td>  
          <td><?php echo $form['litho_level_ref'];?></td>     
        </tr> 
        <tr>
          <td><?php echo $form['lithology_name']->renderLabel();?> :</td>
          <td><?php echo $form['lithology_name'];?></td>  
          <td><?php echo $form['lithology_common_name'];?></td>  
          <td><?php echo $form['lithology_level_ref'];?></td>     
        </tr> 
        <tr>
          <td><?php echo $form['mineral_name']->renderLabel();?> :</td>
          <td><?php echo $form['mineral_name'];?></td>  
          <td><?php echo $form['mineral_common_name'];?></td>  
          <td><?php echo $form['mineral_level_ref'];?></td>     
        </tr>                          
      </tbody>
    </table>
  </div>
  <table id="coll_and_countries">
    <tbody>
      <tr>
        <td>
          <div class="small_space_right">
            <h2 class="title"><?php echo __("Collections") ?></h2>
            <div class="borded framed">
            <table class="double_table collections">
              <tbody>
                <tr>
                  <td>
                    <div class="treelist">
                                  <?php echo $form['collection_ref'] ; ?>        
                    </div>
                    <div class="check_right">
                      <input type="button" class="result" value="<?php echo __('Clear') ; ?>" id="clear_collections">
                    </div>
                        </td>
                      </tr>
                    </tbody>
            </table>
          </div>
        </td>
        
        <td>
          <h2 class="title"><?php echo __("Countries") ?></h2>
          <div class="borded framed">
          <table id="gtu_search" class="double_table tag">
            <thead>
              <tr><th colspan="2"><?php echo __('Tags') ; ?></th></tr>
            </thead>
            <tbody>              
              <tr class="tag_line">
                <td>
                  <?php echo $form['tags'];?>
                  <div class="tag_info"><span class="tag_info"><?php echo __('Please use ";" as tag separator.');?></span></div>
                  <div class="purposed_tags" id="purposed_tags">
                  </div>
                </td>
                <td>
                  <?php echo image_tag('remove.png', 'alt=Delete class=clear_prop id=clear_tag'); ?>
                </td>
              </tr>
              <script  type="text/javascript">
                $('textarea.tag_line').bind('keydown click',purposeTags);
                $('#clear_tag').click(function(){
                    $('textarea.tag_line').val('');
                });
                function purposeTags(event)
                {
                  if (event.type == 'keydown')
                  {
                    var code = (event.keyCode ? event.keyCode : event.which);
                    if (code != 59 /* ;*/ && code != $.ui.keyCode.SPACE ) return;
                  }        
                  parent_el = $(this).closest('tr');

                  if($(this).val() == '') return;
                  $(this).find('#purposed_tags').html('<img src="/images/loader.gif" />');
                  $.ajax({
                    type: "GET",
                    url: "<?php echo url_for('search/purposeTag');?>" + '/value/'+ $(this).val(),
                    success: function(html)
                    {
                      parent_el.find('#purposed_tags').html(html);
                      parent_el.find('#purposed_tags').show();
                    }
                  });
                }

                $('#purposed_tags li').live('click',function()
                { 
                  input_el = $('textarea.tag_line');
                  if(input_el.val().match("\;\s*$"))
                    input_el.val( input_el.val() + $(this).text() );
                  else
                    input_el.val( input_el.val() + " ; " +$(this).text() );
                  input_el.trigger('click');
                });    
              </script>
            </tbody>
          </table>
          </div>
        </td>  
      </tr>
    </tbody>
  </table>
  <div style="text-align:right">
    <?php echo link_to(__('Clear'),'@geoSearch');?>
    <input type="submit" name="submit" id="submit" value="<?php echo __('Search'); ?>" class="search_submit">
  </div>
</div>  
</form>
<script type="text/javascript">
$(document).ready(function () {
    $('.treelist li:not(li:has(ul)) img.tree_cmd').hide();
    $('.collapsed').click(function()
    {
        $(this).hide();
        $(this).siblings('.expanded').show();
        $(this).parent().siblings('ul').show();
    });
    
    $('.expanded').click(function()
    {
        $(this).hide();
        $(this).siblings('.collapsed').show();
        $(this).parent().siblings('ul').hide();
    });
    $('.treelist li input[type=checkbox]').click(function()
    {
      class_val = $(this).closest('li').attr('class');
      if(! $(this).is(':checked'))
        $('.'+class_val).find(':checkbox').not($(this)).removeAttr('checked');
      else
        $('.'+class_val).find(':checkbox').not($(this)).attr('checked','checked');  
    });
    $('#clear_collections').click(function()
    {
          $('table.collections').find(':checkbox').removeAttr('checked');    
    });   
  var num_fld = 1;
  $('.and_tag').click(function()
  {
    $.ajax({
      type: "GET",
      url: $(this).attr('href') + '/num/' + (num_fld++) ,
      success: function(html)
      {
        $('table#gtu_search > tbody .and_row').before(html);
      }
    });
    return false;
  });    
  $('#reset').click(function()
  {
    document.location.href = "<?php echo url_for('search/index') ; ?>" ;
  });
});  
</script>
