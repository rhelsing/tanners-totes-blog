<h1 class="pad_left">Other Content</h1>
        <div id="pane">
        <div id="pane_nav">
	        <a href="<?php echo base_url('index.php/admin/piece/'); ?>" >All Content</a>
        </div>
        
        	<div id="form_header">New Piece</div>
        
        	<form method="post" action="<?php echo base_url('index.php/admin/piece/save/'); ?>">
        
        <!-- Form Block -->
            <legend>Piece</legend>
            <div class="pure-g">
	            <div class="f_i">
		            <span class="seperate_end">
		            <input type="text" name="name" placeholder="Title" /></span>
		         </div>
		         <div style="height:20px;"></div>
		         <div class="f_i">
		            <span class="seperate_end">
		            <input type="text" name="content" placeholder="Content" /></span>
		         </div>
		         <div style="height:20px;"></div>
		    
		    <!-- Submit -->
			<div class="f_i pad_right"><button type="submit" class="pw_button">Submit</button>
			<!-- Submit -->
			<div class="clear"></div>
		</form>

        </div>  