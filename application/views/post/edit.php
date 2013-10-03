<h1 class="pad_left">Posts</h1>
        <div id="pane">
        <div id="pane_nav">
	        <a href="./">All Posts</a>
	        <a href="../new">New Post</a>
        </div>
        
        	<div id="form_header">Editing Post "<?php echo $post->name; ?>"</div>
        
        	<form method="post" action="../update/<?php echo $post->id; ?>">
        
        <!-- Form Block -->
            <legend>Main Info</legend>
            <div class="pure-g">
	            <div class="pure-u-1-3 f_i">
		            <span class="seperate_end"><label>Title</label>
		            <input type="text" name="name" value="<?php echo $post->name; ?>" /></span>
		         </div>
		         <div class="pure-u-2-3 f_i">
		            <span class="seperate_end"><label>Content</label>
		            <input type="text" name="content" value="<?php echo $post->content; ?>" /></span>
		         </div>
		      </div>
		    <!-- Form Block -->
		    
		    <!-- Form Block -->
            <legend>Slider Options</legend>
            <div class="pure-g">
	            <div class="pure-u-1-4 f_i">
		            <span class="seperate_end"><label>On / Off (1/0)</label>
		            <input type="text" name="in_slider" value="<?php echo $post->in_slider; ?>" /></span>
		         </div>
		         <div class="pure-u-1-4 f_i">
		            <span class="seperate_end"><label>Title</label>
		            <input type="text" name="slider_title" value="<?php echo $post->slider_title; ?>" /></span>
		         </div>
		         <div class="pure-u-1-4 f_i">
		            <span class="seperate_end"><label>Caption</label>
		            <input type="text" name="slider_caption" value="<?php echo $post->slider_caption; ?>" /></span>
		      </div>
		      <div class="pure-u-1-4 f_i">
		            <span class="seperate_end"><label>Image</label>
		            <input type="text" name="slider_image_url" value="<?php echo $post->slider_image_url; ?>" /></span>
		      </div>
		  </div>
		    <!-- Form Block -->
		    
		    <!-- Submit -->
			<div class="f_i pad_right"><button type="submit" class="pw_button">Submit</button>
			<!-- Submit -->
			<div class="clear"></div>
		</form>

        </div>  