<div id="clear-fix"></div>
	<footer>
    <div id="footer-wrapper">
        <div id="widget-left">
        <?php 
if ( dynamic_sidebar('Footer vänster') ) : 
else : 
?>
<?php endif; ?>
</div><!--end widget-left-->
<div id="widget-center">
<?php 
if ( dynamic_sidebar('Footer mitten') ) : 
else : 
?>
<?php endif; ?>
</div><!--end widget-center-->
<div id="widget-right">
<?php 
if ( dynamic_sidebar('Footer höger') ) : 
else : 
?>
<?php endif; ?>
</div><!--end widget-right-->
    </div><!--end footer-wrapper-->
	</footer>
</div><!--end big-wrapper-->