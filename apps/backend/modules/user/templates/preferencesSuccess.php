<?php slot('title', __('Edit Preferences widgets'));  ?>
<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<div class="page edition">
 <h1><?php echo __('My Preferences');?></h1>
  <?php echo form_tag('user/preferences');?>
    <table class="user_table">
      <thead>
        <tr>
          <th colspan="2"><?php echo __("Search in Specimens");?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>
          <?php echo $form['search_cols_specimen']->renderLabel();?>
          <?php if($sf_user->getHelpIcon()) : ?>          
            <div class="help_ico" alt="<?php echo $form['search_cols_specimen']->renderHelp();?>"></div>
          <?php endif ; ?>
          </th>
          <td><div class="search_cols_specimen" ><table><?php echo $form['search_cols_specimen'];?></table></div></td>
        </tr>
        <tr>
          <th>
            <?php echo $form['search_cols_individual']->renderLabel();?>
            <?php if($sf_user->getHelpIcon()) : ?>          
              <div class="help_ico" alt="<?php echo $form['search_cols_individual']->renderHelp();?>"></div>
            <?php endif ; ?>
          </th>
          <td><div class="search_cols_individual" ><table><?php echo $form['search_cols_individual'];?></table></div></td>
        </tr>
        <tr>
          <th>
            <?php echo $form['search_cols_part']->renderLabel();?>
            <?php if($sf_user->getHelpIcon()) : ?>          
              <div class="help_ico" alt="<?php echo $form['search_cols_part']->renderHelp();?>"></div>
            <?php endif ; ?>
          </th>
          <td><div class="search_cols_part" ><table><?php echo $form['search_cols_part'];?></table></div></td>
        </tr>
      </tbody>
      <thead>
        <tr>
          <th colspan="2"><?php echo __("Board Widgets");?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>
            <?php echo $form['board_spec_rec_pp']->renderLabel();?>
            <?php if($sf_user->getHelpIcon()) : ?>
              <div class="help_ico" alt="<?php echo $form['board_spec_rec_pp']->renderHelp();?>"></div>
            <?php endif ; ?>
          </th>
          <td><?php echo $form['board_spec_rec_pp'];?></td>
        </tr>
        <tr>
          <th>
            <?php echo $form['board_search_rec_pp']->renderLabel();?>
            <?php if($sf_user->getHelpIcon()) : ?>            
              <div class="help_ico" alt="<?php echo $form['board_search_rec_pp']->renderHelp();?>"></div>
            <?php endif ; ?>
          </th>
          <td><?php echo $form['board_search_rec_pp'];?></td>
        </tr>
      </tbody>
      <thead>
        <tr>
          <th colspan="2"><?php echo __("Forms");?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>
            <?php echo $form['help_message_activated']->renderLabel();?>
            <?php if($sf_user->getHelpIcon()) : ?>            
              <div class="help_ico" alt="<?php echo $form['help_message_activated']->renderHelp();?>"></div>
            <?php endif ; ?>
          </th>
          <td><?php echo $form['help_message_activated'];?></td>
        </tr>
        <tr> 
      </tbody>
      <tfoot>
        <tr>
          <td colspan='2'>
            <input type="submit" />
          </td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
