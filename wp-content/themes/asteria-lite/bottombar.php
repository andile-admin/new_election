<?php global $asteria;?>

<?php if ( asteria_is_mobile() && (!empty($asteria['hide_mob_rightsdbr'])) ) { ?>
	<?php }else{ ?>
<div id="bottombar">
    <div class="widgets">          
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom bar') ) : ?> 
            <?php endif; ?>
            </div>
    </div>
<?php } ?>