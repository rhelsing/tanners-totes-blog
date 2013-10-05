 <div class="static">
        <div class="header">
            Welcome back!<a href="#"><img src="<?php echo base_url(); ?>img/lock.png" alt="lock" width="17" height="16" /> Log Out</a>
        </div>   
        <div class="menu">
        	<h1><img src="<?php echo base_url(); ?>img/logo.png" width="160px" /></h1> 
            <a href="<?php echo base_url('index.php/admin/'); ?>" <?php if($s=="dashboard"){ echo 'class="select"'; } ?> ><img src="<?php echo base_url(); ?>img/dashboard.png" alt="dashboard" width="19" height="18" /> Dashboard</a>
            <a href="<?php echo base_url('index.php/admin/post'); ?>" <?php if($s=="posts"){ echo 'class="select"'; } ?>><img src="<?php echo base_url(); ?>img/organization.png" alt="organization" width="19" height="18" /> Posts</a>
            <a href="<?php echo base_url('index.php/admin/quote'); ?>" <?php if($s=="quotes"){ echo 'class="select"'; } ?>><img src="<?php echo base_url(); ?>img/members.png" alt="members" width="19" height="18" /> Quotes</a>
            <a href="<?php echo base_url('index.php/admin/location'); ?>" <?php if($s=="map"){ echo 'class="select"'; } ?>><img src="<?php echo base_url(); ?>img/transactions.png" alt="transactions" width="19" height="18" /> Map</a>
            <a href="<?php echo base_url('index.php/admin/piece'); ?>" <?php if($s=="other"){ echo 'class="select"'; } ?>><img src="<?php echo base_url(); ?>img/file.png" alt="file" width="19" height="18" /> Other Content</a>
        </div>  
    </div>