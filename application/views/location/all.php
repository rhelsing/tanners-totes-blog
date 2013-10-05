<h1 class="pad_left">Map</h1>
        <div id="pane">
        <div id="pane_nav">
	        <a href="<?php echo base_url('index.php/admin/location/'); ?>" class="select">All Locations</a>
	        <a href="<?php echo base_url('index.php/admin/location/new/'); ?>">New Location</a>
	        <a href="<?php echo base_url('index.php/admin/city/'); ?>">Manage Cities</a>
	        <a href="<?php echo base_url('index.php/admin/city/new/'); ?>">New City</a>
        </div>
        
        	<table>
	        	<tr>
		        	<th>Name &#9662;</th>
		        	<th>City ID</th>
		        </tr>
		        <?php 
		        foreach($locations as $location){
		        	echo "<tr>";
		        	echo "<td>".$location->name."</td>";
		        	echo "<td>".$location->city_id.'<a href="'.base_url('index.php/admin/location/delete/'.$location->id).'" class="pw_button small right red"><img src="'.base_url().'img/icons/Garbage-Closed-16.png" alt="Customize-01-16" width="16" height="16" /></a><a href="'.base_url('index.php/admin/location/edit/'.$location->id).'" class="pw_button small right"><img src="'.base_url().'img/icons/Data-Edit-16.png" alt="Customize-01-16" width="16" height="16" /></a>'."</td>";
		        	echo "</tr>";
		        }
		        ?>
			</table>
			
			<!--
			<ul class="pure-paginator">
    <li><a class="pure-button prev" href="#">&#171;</a></li>
    <li><a class="pure-button" href="#">1</a></li>
    <li><a class="pure-button pure-button-active" href="#">2</a></li>
    <li><a class="pure-button" href="#">3</a></li>
    <li><a class="pure-button" href="#">4</a></li>
    <li><a class="pure-button" href="#">5</a></li>
    <li><a class="pure-button next" href="#">&#187;</a></li>
    	</ul>
    	-->
			<!-- Submit -->
			<!-- Submit -->
			<div class="clear"></div>

        </div>  