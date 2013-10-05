<script src="<?php echo base_url('js/ckeditor.js'); ?>"></script>
<h1 class="pad_left">Posts</h1>
        <div id="pane">
        <div id="pane_nav">
	        <a href="<?php echo base_url('index.php/admin/post/'); ?>">All Posts</a>
	        <a href="<?php echo base_url('index.php/admin/post/new/'); ?>" class="select">New Post</a>
	        <a href="<?php echo base_url('index.php/admin/post/images/'); ?>">Manage Images</a>
        </div>
        
        	<div id="form_header">New Post</div>
        
        	<form method="post" action="<?php echo base_url('index.php/admin/post/save/'); ?>">
        
        <!-- Form Block -->
            <legend>Main Info</legend>
            <div class="pure-g">
	            <div class="f_i">
		            <span class="seperate_end">
		            <input type="text" name="name" placeholder="Title" /></span>
		         </div>
		         <div style="height:20px;"></div>
		         <div class="pure-g">
		         	<div class="pure-u-3-4 f_i">
		            <textarea name="content" class="ckeditor"></textarea>
		        	</div>
		        	<div class="pure-u-1-4 f_i" style="overflow:scroll; height:300px;">
		            <h3 class="pad_left">Images</h3>
		            <?php
if ($handle = opendir('./images/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != ".DS_Store") {
            echo "<img src='".base_url()."images/".$entry."' width='200px' style='margin-left:10px;' /></br>";
            //show image and url
        }
    }
    closedir($handle);
}
?>
		        	</div>
		         </div>
		      </div>
		    <!-- Form Block -->
		    
		    <!-- Form Block -->
            <legend>Slider Options</legend>
            <div class="pure-g">
	            <div class="pure-u-1-4 f_i">
		            <span class="seperate_end"><label>On / Off (1/0)</label>
		            <input type="text" name="in_slider" /></span>
		         </div>
		         <div class="pure-u-1-4 f_i">
		            <span class="seperate_end"><label>Title</label>
		            <input type="text" name="slider_title" /></span>
		         </div>
		         <div class="pure-u-1-4 f_i">
		            <span class="seperate_end"><label>Caption</label>
		            <input type="text" name="slider_caption" /></span>
		      </div>
		      <div class="pure-u-1-4 f_i">
		            <span class="seperate_end"><label>Image</label>
		            <input type="text" name="slider_image_url" /></span>
		      </div>
		  </div>
		    <!-- Form Block -->
		    
		    <!-- Submit -->
			<div class="f_i pad_right"><button type="submit" class="pw_button">Submit</button>
			<!-- Submit -->
			<div class="clear"></div>
		</form>

        </div>  