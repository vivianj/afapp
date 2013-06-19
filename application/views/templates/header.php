<!DOCTYPE html>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Products</title>
        <?php echo link_tag('public/css/bootstrap.min.css'); ?>
        <?php echo link_tag('public/css/afapp.css'); ?>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/public/js/boostrap.min.js"></script>
    </head>
    <body>
        <div class="nav-header">
            <h1>Our AF App</h1>
            <?php if($this->session->userdata('nickname') != ''): ?>
            <div class="navbar text-right">Welcome <?php echo $this->session->userdata('nickname'); ?> | <?php echo anchor('Login/log_out', 'Log out', 'class="btn btn-mini"') ?></div>
            <?php endif; ?>
        </div>

