<h1 class="pad_left">Map</h1>
        <div id="pane">
        <div id="pane_nav">
	        <a href="<?php echo base_url('index.php/admin/location/'); ?>">All Locations</a>
	        <a href="<?php echo base_url('index.php/admin/location/new/'); ?>" class="select">New Location</a>
	        <a href="<?php echo base_url('index.php/admin/city/'); ?>">Manage Cities</a>
	        <a href="<?php echo base_url('index.php/admin/city/new/'); ?>">New City</a>
        </div>
        
        	<div id="form_header">New Location</div>
        
        	<form method="post" action="<?php echo base_url('index.php/admin/location/save/'); ?>">
        
        <!-- Form Block -->
            <legend>Location</legend>
            <div class="pure-g">
	            <div class="f_i">
		            <span class="seperate_end">
		            <input type="text" name="name" placeholder="Location Name" /></span>
		         </div>
		         <div style="height:20px;"></div>
		         <div class="f_i">
		            		         <select name="city_id">
		            		         	<?php 
		        foreach($cities as $city){
		        	echo '<option value="'.$city->id.'">'.$city->city.'</option>';
		        }
		        ?>
</select>
		         </div>
		         <div style="height:20px;"></div>
		    
		    <!-- Submit -->
			<div class="f_i pad_right"><button type="submit" class="pw_button">Submit</button>
			<!-- Submit -->
			<div class="clear"></div>
		</form>

        </div>  