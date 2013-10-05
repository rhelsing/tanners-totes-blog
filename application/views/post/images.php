<h1 class="pad_left">Posts</h1>
        <div id="pane">
        <div id="pane_nav" style="margin-bottom:30px;">
	        <a href="<?php echo base_url('index.php/admin/post/'); ?>">All Posts</a>
	        <a href="<?php echo base_url('index.php/admin/post/new/'); ?>">New Post</a>
	        <a href="<?php echo base_url('index.php/admin/post/images/'); ?>" class="select">Manage Images</a>
        </div>
        
        	<form action="<?php echo base_url(); ?>upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br><br>
<input type="submit" name="submit" value="Submit"><br><br>
</form>

                    <?php
if ($handle = opendir('./images/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != ".DS_Store") {
            echo "<img src='".base_url()."images/".$entry."' width='200px' style='float:left; margin-left:10px; margin-bottom:10px;' />";
            //show image and url
        }
    }
    closedir($handle);
}
?>
			
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