<?php include_partial('widgets/list', array('widgets' => $widgets, 'category' => 'loanitem','eid'=> $form->getObject()->getId() )); ?>
<?php slot('title', __('Edit Loan Item'));  ?>
<?php $action = 'loanitem/update?id='.$form->getObject()->getId() ;?>
<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>
<div class="page">
    <h1 class="edit_mode"><?php echo __('Edit Loan Item');?></h1>
    <?php include_partial('loan/tabs', array('loan'=> $form->getObject()->getLoan(), 'item' => $form->getObject())); ?>
    <div class="tab_content">
      <?php echo form_tag($action, array('class'=>'edition loanitem_form','enctype'=>'multipart/form-data'));?>

        <?php include_partial('widgets/screen', array(
          'widgets' => $widgets,
          'category' => 'loanitemwidget',
          'columns' => 1,
          'options' => array('eid' => $form->getObject()->getId(), 'table' => 'loan_items')
          )); ?>
        <p class="clear"></p>
        <p class="form_buttons">
          &nbsp;<a href="<?php echo url_for('loan/index') ?>"><?php echo __('Cancel');?></a>
          <input type="submit" value="<?php echo __('Save');?>" id="submit_loan"/>
        </p>
      </form>
    </div>
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
        $('body').catalogue({}); 
        $('#submit_loan').click(function() 
        {
          form = $(this).closest('form') ;
          form.removeAttr('target') ;
          form.attr('action', '<?php echo url_for($action) ; ?>') ;
          form.submit() ;
        });        
      });
    </script>   
</div>
