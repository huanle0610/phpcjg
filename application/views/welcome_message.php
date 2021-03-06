<?php echo $this->load->view('header'); ?>
<?php echo $this->load->view('topbar'); ?>
<div class="w960">
    <h1>Welcome to CodeIgniter!</h1>
    <p>
        The page you are looking at is being generated dynamically by CodeIgniter.
    </p>
    <p>
        If you would like to edit this page you'll find it located at:
    </p>
    <code>
        system/application/views/welcome_message.php
    </code>
    <p>
        The corresponding controller for this page is found at:
    </p>
    <code>
        system/application/controllers/welcome.php
    </code>
    <p>
        If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.
    </p>
</div>
<!--
<script type="text/javascript" src="<?php echo $this->config->item('js_path');?>login.js?v=<?php echo $this->config->item('version');?>"></script>
-->
<?php echo $this->load->view('footer'); ?>
