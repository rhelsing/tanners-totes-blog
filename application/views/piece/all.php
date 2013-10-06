<h1 class="pad_left">Other Content</h1>
        <div id="pane">
        <div id="pane_nav">
	        <a href="<?php echo base_url('index.php/admin/piece/'); ?>" class="select">All Content</a>
        </div>
        
        	<table>
	        	<tr>
		        	<th>Section &#9662;</th>
		        	<th>Content</th>
		        </tr>
		        <?php 
		        foreach($pieces as $piece){
		        	echo "<tr>";
		        	echo "<td>".$piece->name."</td>";
		        	echo "<td>".$piece->content.'<a href="'.base_url('index.php/admin/piece/edit/'.$piece->id).'" class="pw_button small right"><img src="'.base_url().'img/icons/Data-Edit-16.png" alt="Customize-01-16" width="16" height="16" /></a>'."</td>";
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