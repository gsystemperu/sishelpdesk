            </div>
        </div>

    </div>
</div>
        
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js?v=<?php echo rand(1, 999999); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/utils.js?v=<?php echo rand(1, 999999); ?>"></script>

    <!-- Loading JS files for Controllers operations -->
    <?php if (isset($modulejs)) : ?>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/<?php echo ($modulejs . '?v='. rand(1, 999999) ); ?>"></script>
    <?php endif;?>

</body>
</html>