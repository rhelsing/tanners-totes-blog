<h1 class="pad_left">Quotes</h1>
        <div id="pane">
        <div id="pane_nav">
	        <a href="<?php echo base_url('index.php/admin/quote/'); ?>">All Quotes</a>
	        <a href="<?php echo base_url('index.php/admin/quote/new/'); ?>" class="select">New Quote</a>
        </div>
        
        	<div id="form_header">New Quote</div>
        
        	<form method="post" action="<?php echo base_url('index.php/admin/quote/save/'); ?>">
        
        <!-- Form Block -->
            <legend>Quote</legend>
            <div class="pure-g">
	            <div class="f_i">
		            <span class="seperate_end">
		            <input type="text" name="author" placeholder="Quote Author" /></span>
		         </div>
		         <div style="height:20px;"></div>
		         <div class="f_i">
		            <span class="seperate_end">
		            <input type="text" name="quote" placeholder="Quote" /></span>
		         </div>
		         <div style="height:20px;"></div>
		    
		    <!-- Submit -->
			<div class="f_i pad_right"><button type="submit" class="pw_button">Submit</button>
			<!-- Submit -->
			<div class="clear"></div>
		</form>

        </div>  