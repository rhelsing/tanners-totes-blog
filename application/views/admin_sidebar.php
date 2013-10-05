 <div class="static">
        <div class="header">
            Welcome back!<a href="#"><img src="<?php echo base_url(); ?>img/lock.png" alt="lock" width="17" height="16" /> Log Out</a>
        </div>   
        <div class="menu">
        	<h1><img src="<?php echo base_url(); ?>img/logo.png" /></h1> 
            <a href="#" ><img src="<?php echo base_url(); ?>img/dashboard.png" alt="dashboard" width="19" height="18" /> Dashboard</a>
            <a href="#" <?php if($s=="posts"){ echo 'class="select"'; } ?>><img src="<?php echo base_url(); ?>img/organization.png" alt="organization" width="19" height="18" /> Posts</a>
            <a href="#"><img src="<?php echo base_url(); ?>img/members.png" alt="members" width="19" height="18" /> Quotes</a>
            <a href="#"><img src="<?php echo base_url(); ?>img/transactions.png" alt="transactions" width="19" height="18" /> Map</a>
            <a href="#"><img src="<?php echo base_url(); ?>img/file.png" alt="file" width="19" height="18" /> Other Content</a>
        </div>  
    </div>