    <div id="footer">
        <div id="copyright">
            <a href="http://www.cecilieokada.com/blog">NIW</a> &copy; Copyright <?php  echo date("Y"); ?> - All rights Reserved
        </div>
        <div id="version">
            <a href="#top"><?php print $this->lang->line('general_top')?></a> |
            <a href="<?php print base_url()?>user_guide"><?php print $this->lang->line('general_documentation')?></a> |
            Version</div>
    </div>
</div>
<?php print $this->bep_assets->get_footer_assets();?>
</body>
</html>