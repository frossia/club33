<?php

 // These are our callback functions for each settings option GROUP described above.
 function jwl_setting_section_callback_function1() {
 	_e('<p>&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>Description</u></strong><span style="margin-left:200px;"><strong><u>Enable</u></strong></span><span style="margin-left:20px;"><strong><u>Image</u></strong></span><span style="margin-left:35px;"><strong><u>Help</u></strong></span><span style="margin-left:20px;"><strong><u>Row Selection</u></strong></span></p>','jwl-ultimate-tinymce');
 }
 function jwl_setting_section_callback_function2() {
 	_e('<p>&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>Description</u></strong><span style="margin-left:200px;"><strong><u>Enable</u></strong></span><span style="margin-left:20px;"><strong><u>Image</u></strong></span><span style="margin-left:35px;"><strong><u>Help</u></strong></span><span style="margin-left:20px;"><strong><u>Row Selection</u></strong></span></p>','jwl-ultimate-tinymce');
 }
 function jwl_setting_section_callback_function8() {
 	_e('Over-ride the settings for the content editor (tinymce).<br /><br />Consider this a "last resort".  If nothing else works at making the content editor replicate the front end of the website... these settings will certainly do the trick.<br /><br />','jwl-ultimate-tinymce');
 }
 function jwl_setting_section_callback_function9() {
 	_e('These options will support other plugins\' buttons, if installed.','jwl-ultimate-tinymce');
 }
 function jwl_setting_section_callback_function3() {
 	_e(' ','jwl-ultimate-tinymce');
 }
 function jwl_setting_section_callback_function4() {
 	_e(' ','jwl-ultimate-tinymce');
 }
 function jwl_setting_section_callback_function5() {
 	_e('Below are a few of my recommendations for themes and plugins.  These have been tested by me personally, and have grabbed my attention.','jwl-ultimate-tinymce');
 }
 
 // Begin callback functions	 
 function jwl_fontselect_callback_function() {
	 $options = get_option('jwl_options_group1');
    echo '<input name="jwl_options_group1[jwl_fontselect_field_id]" id="fontselect" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_fontselect_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/fontselect.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/fontselect.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_fontselect_dropdown'])) {
			$options_fontselect = $options['jwl_fontselect_dropdown'];
			}
			$items_fontselect = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_fontselect_dropdown][row]' onchange=';'>";
			foreach($items_fontselect as $item_fontselect) {
				$selected_fontselect = ($options_fontselect['row']==$item_fontselect) ? 'selected="selected"' : '';
				echo "<option value='$item_fontselect' $selected_fontselect>$item_fontselect</option>";
			}
			echo "</select>";
 }
 
 function jwl_fontsizeselect_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_fontsizeselect_field_id]" id="fontsize" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_fontsizeselect_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/fontsizeselect.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/fontsize.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_fontsizeselect_dropdown'])) {
			$options_fontsizeselect = $options['jwl_fontsizeselect_dropdown'];
			}
			$items_fontsizeselect = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_fontsizeselect_dropdown][row]'>";
			foreach($items_fontsizeselect as $item_fontsizeselect) {
				$selected_fontsizeselect = ($options_fontsizeselect['row']==$item_fontsizeselect) ? 'selected="selected"' : '';
				echo "<option value='$item_fontsizeselect' $selected_fontsizeselect>$item_fontsizeselect</option>";
			}
			echo "</select>";
 }
 
 function jwl_cut_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_cut_field_id]" id="cut" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_cut_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/cut.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/cut.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_cut_dropdown'])) {
			$options_cut = $options['jwl_cut_dropdown'];
			}
			$items_cut = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_cut_dropdown][row]'>";
			foreach($items_cut as $item_cut) {
				$selected_cut = ($options_cut['row']==$item_cut) ? 'selected="selected"' : '';
				echo "<option value='$item_cut' $selected_cut>$item_cut</option>";
			}
			echo "</select>";
 }
 
 function jwl_copy_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_copy_field_id]" id="copy" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_copy_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/copy.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/copy.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_copy_dropdown'])) {
			$options_copy = $options['jwl_copy_dropdown'];
			}
			$items_copy = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_copy_dropdown][row]'>";
			foreach($items_copy as $item_copy) {
				$selected_copy = ($options_copy['row']==$item_copy) ? 'selected="selected"' : '';
				echo "<option value='$item_copy' $selected_copy>$item_copy</option>";
			}
			echo "</select>";
 }
 
 function jwl_paste_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_paste_field_id]" id="paste" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_paste_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/paste.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/paste.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_paste_dropdown'])) {
			$options_paste = $options['jwl_paste_dropdown'];
			}
			$items_paste = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_paste_dropdown][row]'>";
			foreach($items_paste as $item_paste) {
				$selected_paste = ($options_paste['row']==$item_paste) ? 'selected="selected"' : '';
				echo "<option value='$item_paste' $selected_paste>$item_paste</option>";
			}
			echo "</select>";
 }
 
 function jwl_backcolorpicker_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_backcolorpicker_field_id]" id="backcolorpicker" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_backcolorpicker_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/backcolorpicker.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/bg.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_backcolorpicker_dropdown'])) {
			$options_backcolorpicker = $options['jwl_backcolorpicker_dropdown'];
			}
			$items_backcolorpicker = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_backcolorpicker_dropdown][row]'>";
			foreach($items_backcolorpicker as $item_backcolorpicker) {
				$selected_backcolorpicker = ($options_backcolorpicker['row']==$item_backcolorpicker) ? 'selected="selected"' : '';
				echo "<option value='$item_backcolorpicker' $selected_backcolorpicker>$item_backcolorpicker</option>";
			}
			echo "</select>";
 }
 
 function jwl_forecolorpicker_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_forecolorpicker_field_id]" id="forecolorpicker" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_forecolorpicker_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/forecolorpicker.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/fg.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_forecolorpicker_dropdown'])) {
			$options_forecolorpicker = $options['jwl_forecolorpicker_dropdown'];
			}
			$items_forecolorpicker = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_forecolorpicker_dropdown][row]'>";
			foreach($items_forecolorpicker as $item_forecolorpicker) {
				$selected_forecolorpicker = ($options_forecolorpicker['row']==$item_forecolorpicker) ? 'selected="selected"' : '';
				echo "<option value='$item_forecolorpicker' $selected_forecolorpicker>$item_forecolorpicker</option>";
			}
			echo "</select>";
 }
 
 function jwl_advhr_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_advhr_field_id]" id="hr" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_advhr_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/hr.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/hr.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_advhr_dropdown'])) {
			$options_advhr = $options['jwl_advhr_dropdown'];
			}
			$items_advhr = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_advhr_dropdown][row]'>";
			foreach($items_advhr as $item_advhr) {
				$selected_advhr = ($options_advhr['row']==$item_advhr) ? 'selected="selected"' : '';
				echo "<option value='$item_advhr' $selected_advhr>$item_advhr</option>";
			}
			echo "</select>";
 }
 
 function jwl_visualaid_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_visualaid_field_id]" id="visualaid" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_visualaid_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/visualaid.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/visual.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_visualaid_dropdown'])) {
			$options_visualaid = $options['jwl_visualaid_dropdown'];
			}
			$items_visualaid = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_visualaid_dropdown][row]'>";
			foreach($items_visualaid as $item_visualaid) {
				$selected_visualaid = ($options_visualaid['row']==$item_visualaid) ? 'selected="selected"' : '';
				echo "<option value='$item_visualaid' $selected_visualaid>$item_visualaid</option>";
			}
			echo "</select>";
 }
 
 function jwl_anchor_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_anchor_field_id]" id="anchor" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_anchor_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/anchor.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/anchor.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_anchor_dropdown'])) {
			$options_anchor = $options['jwl_anchor_dropdown'];
			}
			$items_anchor = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_anchor_dropdown][row]'>";
			foreach($items_anchor as $item_anchor) {
				$selected_anchor = ($options_anchor['row']==$item_anchor) ? 'selected="selected"' : '';
				echo "<option value='$item_anchor' $selected_anchor>$item_anchor</option>";
			}
			echo "</select>";
 }
 
 function jwl_sub_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_sub_field_id]" id="sub" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_sub_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/sub.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/sub.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_sub_dropdown'])) {
			$options_sub = $options['jwl_sub_dropdown'];
			}
			$items_sub = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_sub_dropdown][row]'>";
			foreach($items_sub as $item_sub) {
				$selected_sub = ($options_sub['row']==$item_sub) ? 'selected="selected"' : '';
				echo "<option value='$item_sub' $selected_sub>$item_sub</option>";
			}
			echo "</select>";
 }
 
 function jwl_sup_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_sup_field_id]" id="sup" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_sup_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/sup.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/sup.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_sup_dropdown'])) {
			$options_sup = $options['jwl_sup_dropdown'];
			}
			$items_sup = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_sup_dropdown][row]'>";
			foreach($items_sup as $item_sup) {
				$selected_sup = ($options_sup['row']==$item_sup) ? 'selected="selected"' : '';
				echo "<option value='$item_sup' $selected_sup>$item_sup</option>";
			}
			echo "</select>";
 }
 
 function jwl_search_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_search_field_id]" id="search" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_search_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/search.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/search.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_search_dropdown'])) {
			$options_search = $options['jwl_search_dropdown'];
			}
			$items_search = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_search_dropdown][row]'>";
			foreach($items_search as $item_search) {
				$selected_search = ($options_search['row']==$item_search) ? 'selected="selected"' : '';
				echo "<option value='$item_search' $selected_search>$item_search</option>";
			}
			echo "</select>";
 }
 
 function jwl_replace_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_replace_field_id]" id="replace" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_replace_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/replace.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/replace.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_replace_dropdown'])) {
			$options_replace = $options['jwl_replace_dropdown'];
			}
			$items_replace = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_replace_dropdown][row]'>";
			foreach($items_replace as $item_replace) {
				$selected_replace = ($options_replace['row']==$item_replace) ? 'selected="selected"' : '';
				echo "<option value='$item_replace' $selected_replace>$item_replace</option>";
			}
			echo "</select>";
 }
  
 function jwl_datetime_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_datetime_field_id]" id="datetime" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_datetime_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/datetime.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:32px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/datetime.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_datetime_dropdown'])) {
			$options_datetime = $options['jwl_datetime_dropdown'];
			}
			$items_datetime = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_datetime_dropdown][row]'>";
			foreach($items_datetime as $item_datetime) {
				$selected_datetime = ($options_datetime['row']==$item_datetime) ? 'selected="selected"' : '';
				echo "<option value='$item_datetime' $selected_datetime>$item_datetime</option>";
			}
			echo "</select>";
 }
 
 function jwl_nonbreaking_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_nonbreaking_field_id]" id="nonbreaking" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_nonbreaking_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/nonbreaking.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/nonbreaking.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_nonbreaking_dropdown'])) {
			$options_nonbreaking = $options['jwl_nonbreaking_dropdown'];
			}
			$items_nonbreaking = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_nonbreaking_dropdown][row]'>";
			foreach($items_nonbreaking as $item_nonbreaking) {
				$selected_nonbreaking = ($options_nonbreaking['row']==$item_nonbreaking) ? 'selected="selected"' : '';
				echo "<option value='$item_nonbreaking' $selected_nonbreaking>$item_nonbreaking</option>";
			}
			echo "</select>";
 }
 
 function jwl_mailto_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_mailto_field_id]" id="mailto" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_mailto_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/mailto.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/mailto.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_mailto_dropdown'])) {
			$options_mailto = $options['jwl_mailto_dropdown'];
			}
			$items_mailto = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_mailto_dropdown][row]'>";
			foreach($items_mailto as $item_mailto) {
				$selected_mailto = ($options_mailto['row']==$item_mailto) ? 'selected="selected"' : '';
				echo "<option value='$item_mailto' $selected_mailto>$item_mailto</option>";
			}
			echo "</select>";
 }
 
 function jwl_layers_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_layers_field_id]" id="layers" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_layers_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/layers.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/layers.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_layers_dropdown'])) {
			$options_layers = $options['jwl_layers_dropdown'];
			}
			$items_layers = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_layers_dropdown][row]'>";
			foreach($items_layers as $item_layers) {
				$selected_layers = ($options_layers['row']==$item_layers) ? 'selected="selected"' : '';
				echo "<option value='$item_layers' $selected_layers>$item_layers</option>";
			}
			echo "</select>";
 }
 
 function jwl_span_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_span_field_id]" id="span" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_span_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/span.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/span.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_span_dropdown'])) {
			$options_span = $options['jwl_span_dropdown'];
			}
			$items_span = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_span_dropdown][row]'>";
			foreach($items_span as $item_span) {
				$selected_span = ($options_span['row']==$item_span) ? 'selected="selected"' : '';
				echo "<option value='$item_span' $selected_span>$item_span</option>";
			}
			echo "</select>";
 }
 
 function jwl_equation_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_equation_field_id]" id="equation" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_equation_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/equation.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/equation.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_equation_dropdown'])) {
			$options_equation = $options['jwl_equation_dropdown'];
			}
			$items_equation = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_equation_dropdown][row]'>";
			foreach($items_equation as $item_equation) {
				$selected_equation = ($options_equation['row']==$item_equation) ? 'selected="selected"' : '';
				echo "<option value='$item_equation' $selected_equation>$item_equation</option>";
			}
			echo "</select>";
 }
 
 function jwl_encode_callback_function() {
	 $options = get_option('jwl_options_group1');
 	echo '<input name="jwl_options_group1[jwl_encode_field_id]" id="encode" type="checkbox" value="1" class="one" ' . checked( 1, isset($options['jwl_encode_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/encode.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/encode.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_encode_dropdown'])) {
			$options_encode = $options['jwl_encode_dropdown'];
			}
			$items_encode = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group1[jwl_encode_dropdown][row]'>";
			foreach($items_encode as $item_encode) {
				$selected_encode = ($options_encode['row']==$item_encode) ? 'selected="selected"' : '';
				echo "<option value='$item_encode' $selected_encode>$item_encode</option>";
			}
			echo "</select>";
 }
 
// Begin Callback functions for each individual setting registered in code above.
// Callback Functions for Row 4 Buttons
 
 function jwl_styleselect_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_styleselect_field_id]" id="styleselect" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_styleselect_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/styleselect.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/styleselect.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_styleselect_dropdown'])) {
			$options_styleselect = $options['jwl_styleselect_dropdown'];
			}	
			$items_styleselect = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_styleselect_dropdown][row]'>";
			foreach($items_styleselect as $item_styleselect) {
				$selected_styleselect = ($options_styleselect['row']==$item_styleselect) ? 'selected="selected"' : '';
				echo "<option value='$item_styleselect' $selected_styleselect>$item_styleselect</option>";
			}
			echo "</select>";
 }
 
 function jwl_tableDropdown_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_tableDropdown_field_id]" id="tableDropdown" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_tableDropdown_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/tableDropdown.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:67px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/tableDropdown.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_tableDropdown_dropdown'])) {
			$options_tableDropdown = $options['jwl_tableDropdown_dropdown'];
			}
			$items_tableDropdown = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_tableDropdown_dropdown][row]'>";
			foreach($items_tableDropdown as $item_tableDropdown) {
				$selected_tableDropdown = ($options_tableDropdown['row']==$item_tableDropdown) ? 'selected="selected"' : '';
				echo "<option value='$item_tableDropdown' $selected_tableDropdown>$item_tableDropdown</option>";
			}
			echo "</select>";
 }
 
 function jwl_emotions_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_emotions_field_id]" id="emotions" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_emotions_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/emotions.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/emotions.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_emotions_dropdown'])) {
			$options_emotions = $options['jwl_emotions_dropdown'];
			}
			$items_emotions = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_emotions_dropdown][row]'>";
			foreach($items_emotions as $item_emotions) {
				$selected_emotions = ($options_emotions['row']==$item_emotions) ? 'selected="selected"' : '';
				echo "<option value='$item_emotions' $selected_emotions>$item_emotions</option>";
			}
			echo "</select>";
 }
 
 function jwl_image_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_image_field_id]" id="image" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_image_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/image.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/image.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_image_dropdown'])) {
			$options_image = $options['jwl_image_dropdown'];
			}
			$items_image = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_image_dropdown][row]'>";
			foreach($items_image as $item_image) {
				$selected_image = ($options_image['row']==$item_image) ? 'selected="selected"' : '';
				echo "<option value='$item_image' $selected_image>$item_image</option>";
			}
			echo "</select>";
 }
 
 function jwl_preview_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_preview_field_id]" id="preview" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_preview_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/preview.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/preview.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_preview_dropdown'])) {
			$options_preview = $options['jwl_preview_dropdown'];
			}	
			$items_preview = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_preview_dropdown][row]'>";
			foreach($items_preview as $item_preview) {
				$selected_preview = ($options_preview['row']==$item_preview) ? 'selected="selected"' : '';
				echo "<option value='$item_preview' $selected_preview>$item_preview</option>";
			}
			echo "</select>";
 }
 
 function jwl_cite_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_cite_field_id]" id="cite" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_cite_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/cite.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/cite.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_cite_dropdown'])) {
			$options_cite = $options['jwl_cite_dropdown'];
			}	
			$items_cite = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_cite_dropdown][row]'>";
			foreach($items_cite as $item_cite) {
				$selected_cite = ($options_cite['row']==$item_cite) ? 'selected="selected"' : '';
				echo "<option value='$item_cite' $selected_cite>$item_cite</option>";
			}
			echo "</select>";
 }
 
 function jwl_abbr_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_abbr_field_id]" id="abbr" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_abbr_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/abbr.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/abbr.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_abbr_dropdown'])) {
			$options_abbr = $options['jwl_abbr_dropdown'];
			}	
			$items_abbr = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_abbr_dropdown][row]'>";
			foreach($items_abbr as $item_abbr) {
				$selected_abbr = ($options_abbr['row']==$item_abbr) ? 'selected="selected"' : '';
				echo "<option value='$item_abbr' $selected_abbr>$item_abbr</option>";
			}
			echo "</select>";
 }
 
 function jwl_acronym_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_acronym_field_id]" id="acronym" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_acronym_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/acronym.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/acronym.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
		if (isset($options['jwl_acronym_dropdown'])) {
			$options_acronym = $options['jwl_acronym_dropdown'];
			}	
			$items_acronym = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_acronym_dropdown][row]'>";
			foreach($items_acronym as $item_acronym) {
				$selected_acronym = ($options_acronym['row']==$item_acronym) ? 'selected="selected"' : '';
				echo "<option value='$item_acronym' $selected_acronym>$item_acronym</option>";
			}
			echo "</select>";
 }
 
 function jwl_del_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_del_field_id]" id="del" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_del_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/del.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/del.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_del_dropdown'])) {
			$options_del = $options['jwl_del_dropdown'];
			}	
			$items_del = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_del_dropdown][row]'>";
			foreach($items_del as $item_del) {
				$selected_del = ($options_del['row']==$item_del) ? 'selected="selected"' : '';
				echo "<option value='$item_del' $selected_del>$item_del</option>";
			}
			echo "</select>";
 }
 
 function jwl_ins_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_ins_field_id]" id="ins" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_ins_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/ins.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/ins.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_ins_dropdown'])) {
			$options_ins = $options['jwl_ins_dropdown'];
			}	
			$items_ins = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_ins_dropdown][row]'>";
			foreach($items_ins as $item_ins) {
				$selected_ins = ($options_ins['row']==$item_ins) ? 'selected="selected"' : '';
				echo "<option value='$item_ins' $selected_ins>$item_ins</option>";
			}
			echo "</select>";
 }
 
 function jwl_attribs_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_attribs_field_id]" id="attribs" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_attribs_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/attribs.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/attrib.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_attribs_dropdown'])) {
			$options_attribs = $options['jwl_attribs_dropdown'];
			}
			$items_attribs = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_attribs_dropdown][row]'>";
			foreach($items_attribs as $item_attribs) {
				$selected_attribs = ($options_attribs['row']==$item_attribs) ? 'selected="selected"' : '';
				echo "<option value='$item_attribs' $selected_attribs>$item_attribs</option>";
			}
			echo "</select>";
 }
 
 function jwl_styleprops_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_styleprops_field_id]" id="styleprops" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_styleprops_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/styleprops.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/styleprops.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_styleprops_dropdown'])) {
			$options_styleprops = $options['jwl_styleprops_dropdown'];
			}	
			$items_styleprops = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_styleprops_dropdown][row]'>";
			foreach($items_styleprops as $item_styleprops) {
				$selected_styleprops = ($options_styleprops['row']==$item_styleprops) ? 'selected="selected"' : '';
				echo "<option value='$item_styleprops' $selected_styleprops>$item_styleprops</option>";
			}
			echo "</select>";
 }
 
 function jwl_code_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_code_field_id]" id="code" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_code_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/code.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/code.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_code_dropdown'])) {
			$options_code = $options['jwl_code_dropdown'];
			}	
			$items_code = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_code_dropdown][row]'>";
			foreach($items_code as $item_code) {
				$selected_code = ($options_code['row']==$item_code) ? 'selected="selected"' : '';
				echo "<option value='$item_code' $selected_code>$item_code</option>";
			}
			echo "</select>";
 }
 
 function jwl_codemagic_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_codemagic_field_id]" id="codemagic" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_codemagic_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/codemagic.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/codemagic.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_codemagic_dropdown'])) {
			$options_codemagic = $options['jwl_codemagic_dropdown'];
			}		
			$items_codemagic = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_codemagic_dropdown][row]'>";
			foreach($items_codemagic as $item_codemagic) {
				$selected_codemagic = ($options_codemagic['row']==$item_codemagic) ? 'selected="selected"' : '';
				echo "<option value='$item_codemagic' $selected_codemagic>$item_codemagic</option>";
			}
			echo "</select>";
 }
 
 function jwl_html5_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_html5_field_id]" id="html5" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_html5_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/html5.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/html5.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_html5_dropdown'])) {
			$options_html5 = $options['jwl_html5_dropdown'];
			}		
			$items_html5 = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_html5_dropdown][row]'>";
			foreach($items_html5 as $item_html5) {
				$selected_html5 = ($options_html5['row']==$item_html5) ? 'selected="selected"' : '';
				echo "<option value='$item_html5' $selected_html5>$item_html5</option>";
			}
			echo "</select>";
			// NEW FEATURE
			?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/new.png" style="margin-bottom:-3px;margin-left:10px;" title="New Feature" /><?php
 }
 
 function jwl_media_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_media_field_id]" id="media" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_media_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/media.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/media.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_media_dropdown'])) {
			$options_media = $options['jwl_media_dropdown'];
			}	
			$items_media = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_media_dropdown][row]'>";
			foreach($items_media as $item_media) {
				$selected_media = ($options_media['row']==$item_media) ? 'selected="selected"' : '';
				echo "<option value='$item_media' $selected_media>$item_media</option>";
			}
			echo "</select>";
 }
 
 function jwl_youtube_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_youtube_field_id]" id="youtube" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_youtube_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/youtube.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/youtube.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_youtube_dropdown'])) {
			$options_youtube = $options['jwl_youtube_dropdown'];
			}	
			$items_youtube = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_youtube_dropdown][row]'>";
			foreach($items_youtube as $item_youtube) {
				$selected_youtube = ($options_youtube['row']==$item_youtube) ? 'selected="selected"' : '';
				echo "<option value='$item_youtube' $selected_youtube>$item_youtube</option>";
			}
			echo "</select>";
 }
 
 function jwl_youtubeIframe_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_youtubeIframe_field_id]" id="youtubeIframe" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_youtubeIframe_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/youtubeIframe.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/youtubeIframe.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_youtubeIframe_dropdown'])) {
			$options_youtubeIframe = $options['jwl_youtubeIframe_dropdown'];
			}	
			$items_youtubeIframe = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_youtubeIframe_dropdown][row]'>";
			foreach($items_youtubeIframe as $item_youtubeIframe) {
				$selected_youtubeIframe = ($options_youtubeIframe['row']==$item_youtubeIframe) ? 'selected="selected"' : '';
				echo "<option value='$item_youtubeIframe' $selected_youtubeIframe>$item_youtubeIframe</option>";
			}
			echo "</select>";
 }
 
 function jwl_imgmap_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_imgmap_field_id]" id="imgmap" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_imgmap_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/imgmap.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/imgmap.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_imgmap_dropdown'])) {
			$options_imgmap = $options['jwl_imgmap_dropdown'];
			}	
			$items_imgmap = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_imgmap_dropdown][row]'>";
			foreach($items_imgmap as $item_imgmap) {
				$selected_imgmap = ($options_imgmap['row']==$item_imgmap) ? 'selected="selected"' : '';
				echo "<option value='$item_imgmap' $selected_imgmap>$item_imgmap</option>";
			}
			echo "</select>";
 }
 
 function jwl_visualchars_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_visualchars_field_id]" id="visualchars" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_visualchars_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/visualchars.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/visualchars.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_visualchars_dropdown'])) {
			$options_visualchars = $options['jwl_visualchars_dropdown'];
			}	
			$items_visualchars = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_visualchars_dropdown][row]'>";
			foreach($items_visualchars as $item_visualchars) {
				$selected_visualchars = ($options_visualchars['row']==$item_visualchars) ? 'selected="selected"' : '';
				echo "<option value='$item_visualchars' $selected_visualchars>$item_visualchars</option>";
			}
			echo "</select>";
 }
 
 function jwl_print_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_print_field_id]" id="print" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_print_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/print.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/print.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_print_dropdown'])) {
			$options_print = $options['jwl_print_dropdown'];
			}	
			$items_print = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_print_dropdown][row]'>";
			foreach($items_print as $item_print) {
				$selected_print = ($options_print['row']==$item_print) ? 'selected="selected"' : '';
				echo "<option value='$item_print' $selected_print>$item_print</option>";
			}
			echo "</select>";
 }
 
 function jwl_shortcodes_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_shortcodes_field_id]" id="shortcodes" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_shortcodes_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/shortcodes.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/shortcodes.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_shortcodes_dropdown'])) {
			$options_shortcodes = $options['jwl_shortcodes_dropdown'];
			}	
			$items_shortcodes = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_shortcodes_dropdown][row]'>";
			foreach($items_shortcodes as $item_shortcodes) {
				$selected_shortcodes = ($options_shortcodes['row']==$item_shortcodes) ? 'selected="selected"' : '';
				echo "<option value='$item_shortcodes' $selected_shortcodes>$item_shortcodes</option>";
			}
			echo "</select>";
 }
 
 function jwl_loremipsum_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_loremipsum_field_id]" id="loremipsum" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_loremipsum_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/loremipsum.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/loremipsum.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_loremipsum_dropdown'])) {
			$options_loremipsum = $options['jwl_loremipsum_dropdown'];
			}	
			$items_loremipsum = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_loremipsum_dropdown][row]'>";
			foreach($items_loremipsum as $item_loremipsum) {
				$selected_loremipsum = ($options_loremipsum['row']==$item_loremipsum) ? 'selected="selected"' : '';
				echo "<option value='$item_loremipsum' $selected_loremipsum>$item_loremipsum</option>";
			}
			echo "</select>";
			// NEW FEATURE
			?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/new.png" style="margin-bottom:-3px;margin-left:10px;" title="New Feature" /><?php
 }
 
 function jwl_w3cvalidate_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_w3cvalidate_field_id]" id="w3cvalidate" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_w3cvalidate_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/w3cvalidate.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/w3cvalidate.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_w3cvalidate_dropdown'])) {
			$options_w3cvalidate = $options['jwl_w3cvalidate_dropdown'];
			}	
			$items_w3cvalidate = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_w3cvalidate_dropdown][row]'>";
			foreach($items_w3cvalidate as $item_w3cvalidate) {
				$selected_w3cvalidate = ($options_w3cvalidate['row']==$item_w3cvalidate) ? 'selected="selected"' : '';
				echo "<option value='$item_w3cvalidate' $selected_w3cvalidate>$item_w3cvalidate</option>";
			}
			echo "</select>";
			// NEW FEATURE
			?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/new.png" style="margin-bottom:-3px;margin-left:10px;" title="New Feature" /><?php
 }
 
 function jwl_clker_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_clker_field_id]" id="clker" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_clker_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/clker.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/clker.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_clker_dropdown'])) {
			$options_clker = $options['jwl_clker_dropdown'];
			}	
			$items_clker = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_clker_dropdown][row]'>";
			foreach($items_clker as $item_clker) {
				$selected_clker = ($options_clker['row']==$item_clker) ? 'selected="selected"' : '';
				echo "<option value='$item_clker' $selected_clker>$item_clker</option>";
			}
			echo "</select>";
			// NEW FEATURE
			?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/new.png" style="margin-bottom:-3px;margin-left:10px;" title="New Feature" /><?php
 }
 
 function jwl_acheck_callback_function() {
	 $options = get_option('jwl_options_group2');
 	echo '<input name="jwl_options_group2[jwl_acheck_field_id]" id="acheck" type="checkbox" value="1" class="two" ' . checked( 1, isset($options['jwl_acheck_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/acheck.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:66px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/acheck.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_acheck_dropdown'])) {
			$options_acheck = $options['jwl_acheck_dropdown'];
			}	
			$items_acheck = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList2' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group2[jwl_acheck_dropdown][row]'>";
			foreach($items_acheck as $item_acheck) {
				$selected_acheck = ($options_acheck['row']==$item_acheck) ? 'selected="selected"' : '';
				echo "<option value='$item_acheck' $selected_acheck>$item_acheck</option>";
			}
			echo "</select>";
			// NEW FEATURE
			?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/new.png" style="margin-bottom:-3px;margin-left:10px;" title="New Feature" /><?php
 }
 
// Callback Functions for Other Plugin Buttons

 function jwl_wp_photo_album_callback_function() {
	 $options = get_option('jwl_options_group9');
	if (is_plugin_active('wp-photo-album-plus/wppa.php')) {
 	echo '<input name="jwl_options_group9[jwl_wp_photo_album_field_id]" id="wp_photo_album" type="checkbox" value="1" class="three" ' . checked( 1, isset($options['jwl_wp_photo_album_field_id']), false ) . ' /> ';
	?><img title="WPPA+ Photo Album" src="<?php echo plugin_dir_url( __FILE__ ) ?>img/wppa.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/wppa.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
			if (isset($options['jwl_wp_photo_album_dropdown'])) {
			$options_wp_photo_album = $options['jwl_wp_photo_album_dropdown'];
			}	
			$items_wp_photo_album = array("Row 1", "Row 2", "Row 3", "Row 4");
			echo "<select class='actionList3' id='row' style='width:80px;margin-left:27px;' name='jwl_options_group9[jwl_wp_photo_album_dropdown][row]'>";
			foreach($items_wp_photo_album as $item_wp_photo_album) {
				$selected_wp_photo_album = ($options_wp_photo_album['row']==$item_wp_photo_album) ? 'selected="selected"' : '';
				echo "<option value='$item_wp_photo_album' $selected_wp_photo_album>$item_wp_photo_album</option>";
			}
			echo "</select>";
	} else {
	echo '<em>';
	_e('Not Installed','jwl-ultimate-tinymce');
	echo '</em>';
 	}
 }

 // Callback functions for miscellaneous options and features
 // Function and Settings for Tinymce editor color changes
 
 function jwl_tinycolor_css_callback_function() {
	 $options = get_option('jwl_options_group3');
	$options2 = isset($options['jwl_tinycolor_css_field_id']);
	$items = array("Default", "Pink", "Green", "Dark&Green", "Dark&Pink", "Rainbow", "Steel");
	echo "<select id='tinycolor' name='jwl_options_group3[jwl_tinycolor_css_field_id][tinycolor]'>";
	foreach($items as $item) {
		$selected = ($options2['tinycolor']==$item) ? 'selected="selected"' : '';
		echo "<option value='$item' $selected>$item</option>";
	}
	echo "</select>";
	?><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/tinycolor.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><span style="float:right;"><?php _e('Don\'t miss the <a target="_blank" href="http://www.plugins.joshlobe.com/wp-admin-colors/">WP Admin Colors</a> addon.','jwl-ultimate-tinymce'); ?></span><?php 
 }
 
 function change_mce_colors() {
   $options3 = get_option('jwl_options_group3');
   $options4 = $options3['jwl_tinycolor_css_field_id'];
   $current_option = strtolower($options4['tinycolor']);
   $colorurl = plugin_dir_url( __FILE__ ) . 'css/change_mce_'.$current_option.'.css';  // Color Options
   wp_register_style('tiny_color_mce', $colorurl, '', 1.0, 'screen');
   wp_enqueue_style('tiny_color_mce');
 }
 add_action('admin_head', 'change_mce_colors');
 
 function jwl_tinymce_nextpage_callback_function() {
	 $options = get_option('jwl_options_group3');
 	echo '<input name="jwl_options_group3[jwl_tinymce_nextpage_field_id]" id="tinymce_nextpage" type="checkbox" value="1" class="four" ' . checked( 1, isset($options['jwl_tinymce_nextpage_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/page_break.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/nextpage.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><span style="margin-left:15px;"><em><?php _e('Adds a button to "break" posts into multiple pages.','jwl-ultimate-tinymce'); ?></em></span><?php
 }
 
 function jwl_postid_callback_function() {
	 $options = get_option('jwl_options_group3');
 	echo '<input name="jwl_options_group3[jwl_postid_field_id]" id="postid" type="checkbox" value="1" class="four" ' . checked( 1, isset($options['jwl_postid_field_id']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Adds ID column to post/page admin list.','jwl-ultimate-tinymce'); ?></em></span><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/postid.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
 }
 
 function jwl_shortcode_callback_function() {
	 $options = get_option('jwl_options_group3');
 	echo '<input name="jwl_options_group3[jwl_shortcode_field_id]" id="shortcode" type="checkbox" value="1" class="four" ' . checked( 1, isset($options['jwl_shortcode_field_id']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Use all shortcodes in widget areas too.','jwl-ultimate-tinymce'); ?></em></span><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/widgetshortcode.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
 }
 
 function jwl_php_widget_callback_function() {
	 $options = get_option('jwl_options_group3');
 	echo '<input name="jwl_options_group3[jwl_php_widget_field_id]" id="media" type="checkbox" value="1" class="four" ' . checked( 1, isset($options['jwl_php_widget_field_id']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Adds a widget which can be used to insert PHP code.','jwl-ultimate-tinymce'); ?></em></span><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/php.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
 }
 
 function jwl_linebreak_callback_function() {
	 $options = get_option('jwl_options_group3');
 	echo '<input name="jwl_options_group3[jwl_linebreak_field_id]" id="linebreak" type="checkbox" value="1" class="four" ' . checked( 1, isset($options['jwl_linebreak_field_id']), false ) . ' /> ';
	?><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/linebreak.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><span style="padding-left:10px;"><?php _e('Simply use the <b>[break]</b> shortcode','jwl-ultimate-tinymce');
 }
 
 function jwl_columns_callback_function() {
	 $options = get_option('jwl_options_group3');
 	echo '<input name="jwl_options_group3[jwl_columns_field_id]" id="columns" type="checkbox" value="1" class="four" ' . checked( 1, isset($options['jwl_columns_field_id']), false ) . ' /> ';
	?><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/columns.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><span style="padding-left:10px;"><?php _e('Use to create magazine-style columns.','jwl-ultimate-tinymce'); ?></span><?php
 }
 
 function jwl_defaults_callback_function() {
	 $options = get_option('jwl_options_group3');
 	echo '<input name="jwl_options_group3[jwl_defaults_field_id]" id="defaults" type="checkbox" value="1" class="four" ' . checked( 1, isset($options['jwl_defaults_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>advlink/advlink.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/advlink.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><span style="padding-left:10px;"><?php _e('Adds the Advanced Link button to editor.','jwl-ultimate-tinymce'); ?></span><?php
 }
 
 function jwl_div_callback_function() {
	 $options = get_option('jwl_options_group3');
 	echo '<input name="jwl_options_group3[jwl_div_field_id]" id="div" type="checkbox" value="1" class="four" ' . checked( 1, isset($options['jwl_div_field_id']), false ) . ' /> ';
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/div_clear.png" style="margin-left:10px;margin-bottom:-5px;" /><span style="margin-left:10px;"><span style="margin-left:5px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/divclear.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><span style="padding-left:10px;"><?php _e('Adds the Clear Div Buttons.','jwl-ultimate-tinymce'); ?></span><?php 
 }
 
 function jwl_autop_callback_function() {
	 $options = get_option('jwl_options_group3');
 	echo '<input name="jwl_options_group3[jwl_autop_field_id]" id="autop" type="checkbox" value="1" class="four" ' . checked( 1, isset($options['jwl_autop_field_id']), false ) . ' /> ';
	?><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/autop.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><span style="margin-left:15px;"><?php _e('(Disable wpautop) - <b>Read the help file first</b>.','jwl-ultimate-tinymce'); ?></span><?php 
 }
 
 function jwl_cursor_callback_function() {
	 $options = get_option('jwl_options_group3');
 	echo '<input name="jwl_options_group3[jwl_cursor_field_id]" id="cursor" type="checkbox" value="1" class="four" ' . checked( 1, isset($options['jwl_cursor_field_id']), false ) . ' /> ';
	?><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/cursor.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><span style="margin-left:15px;"><em><?php _e('Restore scrollbar position after saving post/page content.','jwl-ultimate-tinymce'); ?></em></span><?php 
 }
 
 function jwl_signoff_callback_function() {
	_e('Use the editor below to create content which can be inserted into a post/page using the <b>[signoff]</b> shortcode.','jwl-ultimate-tinymce');
	?><span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/signoff.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
 } 
 
// Functions for Admin Panel Options
function jwl_tinymce_add_stylesheet_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<input name="jwl_options_group4[jwl_tinymce_add_stylesheet]" id="jwl_tinymce_add_stylesheet" type="checkbox" value="1" class="five" ' . checked( 1, isset($options['jwl_tinymce_add_stylesheet']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('If availble in your theme, loads the editor-style.css file.','jwl-ultimate-tinymce'); ?></em></span><?php
	// NEW FEATURE
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/new.png" style="margin-bottom:-3px;margin-left:10px;" title="New Feature" />
	<span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/editor_style.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
}
function jwl_tinymce_excerpt_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<input name="jwl_options_group4[jwl_tinymce_excerpt]" id="jwl_tinymce_excerpt" type="checkbox" value="1" class="five" ' . checked( 1, isset($options['jwl_tinymce_excerpt']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Enables Ultimate Tinymce in the excerpt area of Posts.','jwl-ultimate-tinymce'); ?></em></span><?php
	// NEW FEATURE
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/new.png" style="margin-bottom:-3px;margin-left:10px;" title="New Feature" /><?php
}
function jwl_hide_html_tab_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<input name="jwl_options_group4[jwl_hide_html_tab]" id="hide_html" type="checkbox" value="1" class="five" ' . checked( 1, isset($options['jwl_hide_html_tab']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Removes the HTML tab from the content editor, rendering it unusuable','jwl-ultimate-tinymce'); ?></em></span><?php
	// NEW FEATURE
	?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/new.png" style="margin-bottom:-3px;margin-left:10px;" title="New Feature" /><?php
}
function jwl_dashboard_widget_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<input name="jwl_options_group4[jwl_dashboard_widget]" id="dashboard" type="checkbox" value="1" class="five" ' . checked( 1, isset($options['jwl_dashboard_widget']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Adds a dashboard widget with a News Feed from Ultimate Tinymce.','jwl-ultimate-tinymce'); ?></em></span><?php
}
function jwl_admin_bar_link_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<input name="jwl_options_group4[jwl_admin_bar_link]" id="adminbar" type="checkbox" value="1" class="five" ' . checked( 1, isset($options['jwl_admin_bar_link']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Adds a link to the admin bar for quick access to the Tinymce Settings Page.','jwl-ultimate-tinymce'); ?></em></span><?php
}
function jwl_content_css_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<input name="jwl_options_group4[jwl_content_css]" id="contentcss" type="checkbox" value="1" class="five" ' . checked( 1, isset($options['jwl_content_css']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Click help icon for detailed information.','jwl-ultimate-tinymce'); ?></em></span>
	<span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/content_css.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
}
function jwl_pluginslist_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<input name="jwl_options_group4[jwl_pluginslist_css]" id="pluginslistcss" type="checkbox" value="1" class="five" ' . checked( 1, isset($options['jwl_pluginslist_css']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Disables the css styling on the admin plugins listing page.','jwl-ultimate-tinymce'); ?></em></span><?php
}
function jwl_tinymce_refresh_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<input name="jwl_options_group[jwl_tinymce_refresh]" id="tinymcerefresh" type="checkbox" value="1" class="five" ' . checked( 1, isset($options['jwl_tinymce_refresh']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Disables the force caching of tinymce on page reload.','jwl-ultimate-tinymce'); ?></em></span><?php
}

function jwl_qr_code_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<input name="jwl_options_group4[jwl_qr_code]" id="jwl_qr_code" type="checkbox" value="1" class="five" ' . checked( 1, isset($options['jwl_qr_code']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Displays unique qr code at bottom of each post','jwl-ultimate-tinymce'); ?></em></span><?php
}

function jwl_qr_code_pages_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<input name="jwl_options_group4[jwl_qr_code_pages]" id="jwl_qr_code_pages" type="checkbox" value="1" class="five" ' . checked( 1, isset($options['jwl_qr_code_pages']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Displays unique qr code at bottom of each page','jwl-ultimate-tinymce'); ?></em></span><?php
}

function jwl_qr_code_text_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<div class="jwl_hide">';
	echo 'Choose QR Text Color:<br />';
	echo '<input type="text" id="jwl_qr_code_text" class="color" name="jwl_options_group4[jwl_qr_code_text]" value="' . $options['jwl_qr_code_text'] . '" />';
	echo '</div';
}

function jwl_qr_code_bg_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<div class="jwl_hide">';
	echo 'Choose QR Title Background Color:<br />';
	echo '<input type="text" class="color" name="jwl_options_group4[jwl_qr_code_bg]" value="' . $options['jwl_qr_code_bg'] . '" />';
	echo '</div';
}

function jwl_qr_code_bg_main_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<div class="jwl_hide">';
	echo 'Choose QR Main Background Color:<br />';
	echo '<input type="text" class="color" name="jwl_options_group4[jwl_qr_code_bg_main]" value="' . $options['jwl_qr_code_bg_main'] . '" />';
	echo '</div';
}

function jwl_qr_code_content_callback_function() {
	 $options = get_option('jwl_options_group4');
	echo '<div class="jwl_hide">';
	echo 'Choose QR Content Text:<br />';	
	if (isset($options['jwl_qr_code_content'])) {
	wp_editor( $options["jwl_qr_code_content"], 'content-id', array( 'textarea_name' => 'jwl_options_group4[jwl_qr_code_content]', 'media_buttons' => false, 'tinymce' => array( 'theme_advanced_buttons1' => 'formatselect,forecolor,|,bold,italic,underline,|,bullist,numlist,blockquote,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,|,spellchecker,wp_adv', 'theme_advanced_buttons3' => '', 'theme_advanced_buttons4' => '' ) ) );
	} else {
	wp_editor( 'Use this unique QR (Quick Response) code with your smart device. The code will save the url of this webpage to the device for mobile sharing and storage.', 'content-id', array( 'textarea_name' => 'jwl_options_group4[jwl_qr_code_content]', 'media_buttons' => false, 'tinymce' => array( 'theme_advanced_buttons1' => 'formatselect,forecolor,|,bold,italic,underline,|,bullist,numlist,blockquote,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,|,spellchecker,wp_adv', 'theme_advanced_buttons3' => '', 'theme_advanced_buttons4' => '' ) ) );
	}
}

// Callback functions for the Tinymce Content Editor Over-rides
function jwl_tinymce_modifications_callback_function() {
	 $options = get_option('jwl_options_group8');
 	echo '<input name="jwl_options_group8[jwl_tinymce_modifications]" id="tinymce_modifications" type="checkbox" value="1" class="eight" ' . checked( 1, isset($options['jwl_tinymce_modifications']), false ) . ' /> ';
	?><span style="margin-left:15px;"><em><?php _e('Enable','jwl-ultimate-tinymce'); ?></em></span>
    <span style="margin-left:10px;"><a href="javascript:popcontact('<?php echo plugin_dir_url( __FILE__ ) ?>js/popup-help/tinymce_modify.php')"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>img/popup-help.png" style="margin-bottom:-5px;" title="Click for Help" /></a></span><?php
}

function jwl_tinymce_background_color_callback_function() {
	$options2 = get_option('jwl_options_group8');
	if (empty($options2['jwl_tinymce_background_color_hex'])) {
		echo '<input name="jwl_options_group8[jwl_tinymce_background_color_hex]" value="#FFFFFF" id="tinymce_background_color_hex" type="text" />';
	?><span style="margin-left:15px;"><em><?php _e('Enter Hex Number (ex. #FFFFFF)','jwl-ultimate-tinymce'); ?></em></span><?php 
	} else {
		echo '<input name="jwl_options_group8[jwl_tinymce_background_color_hex]" value="'.$options2['jwl_tinymce_background_color_hex'].'" id="tinymce_background_color_hex" type="text" />';
	?><span style="margin-left:15px;"><em><?php _e('Enter Hex Number (ex. #FFFFFF)','jwl-ultimate-tinymce'); ?></em></span><?php 
	}
}

function jwl_tinymce_font_color_callback_function() {
	$options2 = get_option('jwl_options_group8');
	if (empty($options2['jwl_tinymce_font_color_hex'])) {
		echo '<input name="jwl_options_group8[jwl_tinymce_font_color_hex]" value="#000000" id="tinymce_font_color_hex" type="text" />';
	?><span style="margin-left:15px;"><em><?php _e('Enter Hex Number (ex. #000000)','jwl-ultimate-tinymce'); ?></em></span><?php 
	} else {
		echo '<input name="jwl_options_group8[jwl_tinymce_font_color_hex]" value="'.$options2['jwl_tinymce_font_color_hex'].'" id="tinymce_font_color_hex" type="text" />';
	?><span style="margin-left:15px;"><em><?php _e('Enter Hex Number (ex. #000000)','jwl-ultimate-tinymce'); ?></em></span><?php 
	}
}

function jwl_tinymce_fontsize_callback_function() {
	$options2 = get_option('jwl_options_group8');
	if (empty($options2['jwl_tinymce_fontsize'])) {
		echo '<input name="jwl_options_group8[jwl_tinymce_fontsize]" value="13px" id="tinymce_fontsize" type="text" />';
	?><span style="margin-left:15px;"><em><?php _e('Enter Font Size (ex. 12px, 14pt, 1.2em)','jwl-ultimate-tinymce'); ?></em></span><?php 
	} else {
		echo '<input name="jwl_options_group8[jwl_tinymce_fontsize]" value="'.$options2['jwl_tinymce_fontsize'].'" id="tinymce_fontsize" type="text" />';
	?><span style="margin-left:15px;"><em><?php _e('Enter Font Size (ex. 12px, 14pt, 1.2em)','jwl-ultimate-tinymce'); ?></em></span><?php 
	}
}

function jwl_tinymce_font_callback_function() {
	?><span style="color:#F00;"><em><?php _e('Available Soon in Ultimate Tinymce PRO Version','jwl-ultimate-tinymce'); ?></em></span><?php
}

function jwl_tinymce_lineheight_callback_function() {
	?><span style="color:#F00;"><em><?php _e('Available Soon in Ultimate Tinymce PRO Version','jwl-ultimate-tinymce'); ?></em></span><?php
}

function jwl_tinymce_direction_callback_function() {
	?><span style="color:#F00;"><em><?php _e('Available Soon in Ultimate Tinymce PRO Version','jwl-ultimate-tinymce'); ?></em></span><?php
}

function jwl_tinymce_padding_callback_function() {
	?><span style="color:#F00;"><em><?php _e('Available Soon in Ultimate Tinymce PRO Version','jwl-ultimate-tinymce'); ?></em></span><?php
}

function jwl_tinymce_margin_callback_function() {
	?><span style="color:#F00;"><em><?php _e('Available Soon in Ultimate Tinymce PRO Version','jwl-ultimate-tinymce'); ?></em></span><?php
}

?>