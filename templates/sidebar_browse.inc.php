<h4><?php echo _('Browse By'); ?></h4>
<form id="browse_type" name="browse_type" action="#" method="post">
<select name="type" onchange="ajaxPut('browse_type','<?php echo Config::get('ajax_url'); ?>?action=browse_type');return true;" >
	<option value="song"><?php echo _('Song Title'); ?></option>
	<option value="album"><?php echo _('Albums'); ?></option>
	<option value="artist"><?php echo _('Artist'); ?></option>
	<option value="genre"><?php echo _('Genre'); ?></option>
</select>
<hr />