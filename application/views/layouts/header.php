<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help Desk</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/semantic-2.3/semantic.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css?v=2">

    <?php if (isset($modulecss)) : ?>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php echo ($modulecss . '?v='. rand(1, 999999) ); ?>">
    <?php endif;?>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/jquery-3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/semantic-2.3/semantic.min.js"></script>
    

    <script>const BASE_URL = "<?php echo base_url(); ?>";</script>
</head>
<body>

<div id="app">
    <div class="ui bottom attached segment pushable">

        

        <?php
            $this->load->view('layouts/sidebar.php');
        ?>

        <div class="pusher"  style="width: calc(100% - 260px);">
            <div id="container">