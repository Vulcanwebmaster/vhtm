    <div id="footer">
        <div id="copyright">
            <a href="http://www.websitebanhang.net">NIW Shopping Cart</a> &copy; Copyright <?php  echo date("Y"); ?> - <a href="http://www.niw.com.vn">NIW</a> -  All rights Reserved
        </div>
        <div id="version">
            <a href="#top"><?php print $this->lang->line('general_top')?></a> |
            <a href="<?php print base_url()?>user_guide"><?php print $this->lang->line('general_documentation')?></a> |
            Version <?php print Kaimonokago_VERSION?></div>
    </div>
</div>
<?php print $this->bep_assets->get_footer_assets();?>
</body>
</html>