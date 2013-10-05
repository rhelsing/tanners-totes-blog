<h1 class="pad_left">Posts</h1>
        <div id="pane">
        <div id="pane_nav">
	        <a href="<?php echo base_url('index.php/admin/post/'); ?>" class="select">All Posts</a>
	        <a href="<?php echo base_url('index.php/admin/post/new/'); ?>">New Post</a>
	        <a href="<?php echo base_url('index.php/admin/post/images/'); ?>">Manage Images</a>
        </div>
        
        	<table>
	        	<tr>
		        	<th>Name &#9662;</th>
		        	<th>Content</th>
		        	<th>Date</th>
		        	<th>Slider</th>
		        </tr>
		        <?php 
		        foreach($posts as $post){
		        	echo "<tr>";
		        	echo "<td>".$post->name."</td>";
		        	echo "<td>".substr(strip_tags($post->content), 0, 40)."</td>";
		        	echo "<td>".$post->date."</td>";
		        	echo "<td>".$post->in_slider.'<a href="'.base_url('index.php/admin/post/delete/'.$post->id).'" class="pw_button small right red"><img src="'.base_url().'img/icons/Garbage-Closed-16.png" alt="Customize-01-16" width="16" height="16" /></a><a href="'.base_url('index.php/admin/post/edit/'.$post->id).'" class="pw_button small right"><img src="'.base_url().'img/icons/Data-Edit-16.png" alt="Customize-01-16" width="16" height="16" /></a>'."</td>";
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