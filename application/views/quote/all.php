<h1 class="pad_left">Quotes</h1>
        <div id="pane">
        <div id="pane_nav">
	        <a href="<?php echo base_url('index.php/admin/quote/'); ?>" class="select">All Quotes</a>
	        <a href="<?php echo base_url('index.php/admin/quote/new/'); ?>">New Quote</a>
        </div>
        
        	<table>
	        	<tr>
		        	<th>Author &#9662;</th>
		        	<th>Quote</th>
		        </tr>
		        <?php 
		        foreach($quotes as $quote){
		        	echo "<tr>";
		        	echo "<td>".$quote->author."</td>";
		        	echo "<td>".$quote->quote.'<a href="'.base_url('index.php/admin/quote/delete/'.$quote->id).'" class="pw_button small right red"><img src="'.base_url().'img/icons/Garbage-Closed-16.png" alt="Customize-01-16" width="16" height="16" /></a><a href="'.base_url('index.php/admin/quote/edit/'.$quote->id).'" class="pw_button small right"><img src="'.base_url().'img/icons/Data-Edit-16.png" alt="Customize-01-16" width="16" height="16" /></a>'."</td>";
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