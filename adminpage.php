<?php
	if($_POST['wpjflb_hidden'] == 'Y') {
		//Form data sent
		$fpagename = $_POST['wpjflb_fpagename'];
		update_option('wpjflb_fpagename', $fpagename);

		$fwidth = $_POST['wpjflb_fwidth'];
		update_option('wpjflb_fwidth', $fwidth);

		$fheight = $_POST['wpjflb_fheight'];
		update_option('wpjflb_fheight', $fheight);

		$fconnections = $_POST['wpjflb_fconnections'];
		update_option('wpjflb_fconnections', $fconnections);

		$fbackground = $_POST['wpjflb_fbackground'];
		update_option('wpjflb_fbackground', $fbackground);

		$fcolorscheme = $_POST['wpjflb_fcolorscheme'];
		update_option('wpjflb_fcolorscheme', $fcolorscheme);

		$fheader = $_POST['wpjflb_fheader'];
		update_option('wpjflb_fheader', $fheader);

		$fstream = $_POST['wpjflb_fstream'];
		update_option('wpjflb_fstream', $fstream);

		$fonlyfpage = $_POST['wpjflb_fonlyfpage'];
		update_option('wpjflb_fonlyfpage', $fonlyfpage);

		?>
		<div class="updated"><p style="text-align: center; font-weight: bold; color: #008000;"><strong><?php _e('Data Has Been Saved For Wp J Facebook Likebox Settings.' ); ?></strong></p></div>
		<?php
	} else {
		//Normal page display
		$fpagename = get_option('wpjflb_fpagename');
		$fwidth = get_option('wpjflb_fwidth');
		$fheight = get_option('wpjflb_fheight');
		$fconnections = get_option('wpjflb_fconnections');
		$fbackground = get_option('wpjflb_fbackground');
		$fcolorscheme = get_option('wpjflb_fcolorscheme');
        $fheader = get_option('wpjflb_fheader');
        $fstream = get_option('wpjflb_fstream');
        $fonlyfpage = get_option('wpjflb_fonlyfpage');
	}


?>
<div class="wrap">
<form name="wpjflb_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
    <input type="hidden" name="wpjflb_hidden" value="Y">
<table border="0" cellpadding="0" cellspacing="0" width="90%" align="center" style="margin-right: auto ! important; margin-left: auto ! important; margin-top: 20px; margin-bottom: 20px;">
    <tr>
        <td width="100%" valign="top" style="text-align: center; background: #333333; color: #FFFFFF; line-height: 25px;">
            <?php    echo "<b>" . __( 'Wp J Facebook Likebox Settings', 'wpjflb_admin' ) . "</b>"; ?>
        </td>
    </tr>
    <tr>
        <td width="100%" valign="top" style="border: 1px solid #CCCCCC; padding: 10px; box-shadow: 2px 2px 8px 1px #CCCCCC; border-radius: 0px 0px 5px 5px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                <tr>
                    <td height="35" width="20%" valign="middle"><?php _e("<b>Facebook Page Name:</b>" ); ?></td>
                    <td height="35" width="60%" valign="middle"><input type="text" name="wpjflb_fpagename" value="<?php echo $fpagename; ?>" size="20"></td>
                    <td height="35" width="20%" valign="middle" style="color: #008000; font-weight: bold;"><?php _e(" ex: JExtensionsDownload" ); ?></td>
                </tr>
                <tr>
                    <td height="35" width="20%" valign="middle"><?php _e("<b>Width:</b>" ); ?></td>
                    <td height="35" width="60%" valign="middle"><input type="text" name="wpjflb_fwidth" value="<?php echo $fwidth; ?>" size="20"></td>
                    <td height="35" width="20%" valign="middle" style="color: #008000; font-weight: bold;"><?php _e(" ex: 400" ); ?></td>
                </tr>
                <tr>
                    <td height="35" width="20%" valign="middle"><?php _e("<b>Height:</b>" ); ?></td>
                    <td height="35" width="60%" valign="middle"><input type="text" name="wpjflb_fheight" value="<?php echo $fheight; ?>" size="20"></td>
                    <td height="35" width="20%" valign="middle" style="color: #008000; font-weight: bold;"><?php _e(" ex: 400" ); ?></td>
                </tr>
                <tr>
                    <td height="35" width="20%" valign="middle"><?php _e("<b>Connections:</b>" ); ?></td>
                    <td height="35" width="60%" valign="middle"><input type="text" name="wpjflb_fconnections" value="<?php echo $fconnections; ?>" size="20"></td>
                    <td height="35" width="20%" valign="middle" style="color: #008000; font-weight: bold;"><?php _e(" ex: 50" ); ?></td>
                </tr>
                <tr>
                    <td height="35" width="20%" valign="middle"><?php _e("<b>Background:</b>" ); ?></td>
                    <td height="35" width="60%" valign="middle"><input type="text" name="wpjflb_fbackground" value="<?php echo $fbackground; ?>" size="20"></td>
                    <td height="35" width="20%" valign="middle" style="color: #008000; font-weight: bold;"><?php _e(" ex: #000000" ); ?></td>
                </tr>
                <tr>
                    <td height="35" width="20%" valign="middle"><?php _e("<b>Colorscheme:</b>" ); ?></td>
                    <td height="35" width="60%" valign="middle">
                        <select name="wpjflb_fcolorscheme" id="wpjflb_fcolorscheme">
        	                <option <?php if($fcolorscheme=='light'){ echo 'selected="selected"'; } ?> value="light">Light</option>
        	                <option <?php if($fcolorscheme=='dark'){ echo 'selected="selected"'; } ?> value="dark">Dark</option>
                        </select>
                    </td>
                    <td height="35" width="20%" valign="middle" style="color: #008000; font-weight: bold;"><?php _e(" ex: Dark" ); ?></td>
                </tr>
                <tr>
                    <td height="35" width="20%" valign="middle"><?php _e("<b>Header:</b>" ); ?></td>
                    <td height="35" width="60%" valign="middle">
                        <select name="wpjflb_fheader" id="wpjflb_fheader">
                	        <option <?php if($fheader=='false'){ echo 'selected="selected"'; } ?> value="false">No</option>
                	        <option <?php if($fheader=='true'){ echo 'selected="selected"'; } ?> value="true">Yes</option>
                        </select>
                    </td>
                    <td height="35" width="20%" valign="middle" style="color: #008000; font-weight: bold;"><?php _e(" ex: No" ); ?></td>
                </tr>
                <tr>
                    <td height="35" width="20%" valign="middle"><?php _e("<b>Stream:</b>" ); ?></td>
                    <td height="35" width="60%" valign="middle">
                        <select name="wpjflb_fstream" id="wpjflb_fstream">
                	        <option <?php if($fstream=='false'){ echo 'selected="selected"'; } ?> value="false">No</option>
                	        <option <?php if($fstream=='true'){ echo 'selected="selected"'; } ?> value="true">Yes</option>
                        </select>
                    </td>
                    <td height="35" width="20%" valign="middle" style="color: #008000; font-weight: bold;"><?php _e(" ex: No" ); ?></td>
                </tr>
                <tr>
                    <td height="35" width="20%" valign="middle"><?php _e("<b>Show Only On Front Page:</b>" ); ?></td>
                    <td height="35" width="60%" valign="middle">
                        <select name="wpjflb_fonlyfpage" id="wpjflb_fonlyfpage">
                	        <option <?php if($fonlyfpage=='0'){ echo 'selected="selected"'; } ?> value="0">No</option>
                	        <option <?php if($fonlyfpage=='1'){ echo 'selected="selected"'; } ?> value="1">Yes</option>
                        </select>
                    </td>
                    <td height="35" width="20%" valign="middle" style="color: #008000; font-weight: bold;"><?php _e(" ex: Yes" ); ?></td>
                </tr>
            </table>

        	<p class="submit" style="margin: auto;text-align: center;">
        	    <input class="button-primary" type="submit" name="Submit" value="<?php _e('Save Data', 'wpjflb_admin' ) ?>" />
        	</p>
            <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                <tr>
                    <td width="100%" colspan="3" valign="middle" height="20" align="right" style="background: #DDDDDD;padding: 5px;">
                        <b>Short Code : [wpjflb]</b><br /> <b>Php Function: wpjflb_loadpagefnc();</b>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</form>
</div>