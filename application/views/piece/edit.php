<h1 class="pad_left">Other Content</h1>
        <div id="pane">
        <div id="pane_nav">
	        <a href="<?php echo base_url('index.php/admin/piece/'); ?>" >All Content</a>
        </div>
        
        	<div id="form_header">Edit <?php echo $piece->name; ?></div>
        
        	<form method="post" action="<?php echo base_url('index.php/admin/piece/update/'.$piece->id); ?>">
        
        <!-- Form Block -->
            <legend><?php echo $piece->name; ?></legend>
            <div class="pure-g">
	            <div class="f_i">
		            <span class="seperate_end">
		            <input type="text" name="content" placeholder="Content" value="<?php echo $piece->content; ?>" /></span>
		         </div>
		         <div style="height:20px;"></div>
		    
		    <!-- Submit -->
			<div class="f_i pad_right"><button type="submit" class="pw_button">Submit</button>
			<!-- Submit -->
			<div class="clear"></div>
		</form>

        </div>  