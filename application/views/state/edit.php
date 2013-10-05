<h1 class="pad_left">Map</h1>
        <div id="pane">
        <div id="pane_nav">
	        <a href="<?php echo base_url('index.php/admin/location/'); ?>">All Locations</a>
	        <a href="<?php echo base_url('index.php/admin/location/new/'); ?>">New Location</a>
	        <a href="<?php echo base_url('index.php/admin/city/'); ?>">Manage Cities</a>
	        <a href="<?php echo base_url('index.php/admin/city/new/'); ?>">New City</a>
        </div>
        
        	<div id="form_header">New State</div>
        
        	<form method="post" action="<?php echo base_url('index.php/admin/state/update/'.$state->id); ?>">
        
        <!-- Form Block -->
            <legend>State</legend>
            <div class="pure-g">
	            <div class="f_i">
		            <span class="seperate_end">
		            <input type="text" name="state" placeholder="State Abbreviation" value="<?php echo $state->state; ?>" /></span>
		         </div>
		         <div style="height:20px;"></div>
		    
		    <!-- Submit -->
			<div class="f_i pad_right"><button type="submit" class="pw_button">Submit</button>
			<!-- Submit -->
			<div class="clear"></div>
		</form>

        </div>  