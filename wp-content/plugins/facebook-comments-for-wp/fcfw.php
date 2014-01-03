<?php
/*
Plugin Name: Facebook Comments For WP
Plugin URI: http://www.erayalakese.com/facebook-comments-for-wp/
Description: This plugins adds Facebook Comments Plugin to your blog, instead of original Wordpress Comment Form.
Author: Eray Alakese
Version: 1.2
Author URI: http://www.erayalakese.com/
*/

add_action("admin_menu", "fcfw");
function fcfw()
{
	add_options_page('Facebook Comments For WP', 'Facebook Comments For WP', 'manage_options', 'fcfw', 'fcfw_main');
}

function fcfw_main()
{
	global $wpdb;
	if($_POST["submit"])
	{
		update_option("fcfw-appID",$_POST["appID"]);
		update_option("fcfw-data-num-posts",$_POST["data-num-posts"]);
		update_option("fcfw-data-width",$_POST["data-width"]);
	}
?>
	<h1>Facebook Comments For WP</h1>
	<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST" style="width:400px">
	<table class="widefat">

	<tr>
	<td>Facebook appID</td><td><input type="input" name="appID" value="<?php echo get_option("fcfw-appID"); ?>" /></td>
	</tr>

	<tr>
	<td>Number Of Comments</td><td><input type="input" name="data-num-posts" value="<?php echo get_option("fcfw-data-num-posts"); ?>" /></td>
	</tr>

	<tr>
	<td>Comments Panel Width (in px)</td><td><input type="input" name="data-width" value="<?php echo get_option("fcfw-data-width"); ?>" /></td>
	</tr>

	<tr>
	<td><input type="submit" class="button-primary" name="submit" /></td>
	</tr>

	</table>
	</form>

	<h1>Functions</h1>
	<table class="widefat" style="width:400px;">
	
	<tr>
	<td><code>fcfw_show()<code></td><td>Adds comment form to recent page<br /><small>Use this on your theme instead of <code>comments_template()</code></small></td>
	</tr>

	<tr>
	<td><code>fcfw_comment_count()<code></td><td>Prints comments count</td>
	</tr>

	</table>

	<span style="float:right;">Developer : <a href="http://www.erayalakese.com"><em>Eray Alakese</em></a> <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.erayalakese.com&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=142492109193732" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe></span>
<?php	
}

function fcfw_show()
{
	global $post;
	echo "<div class='fb-comments' data-href='{$post->guid}' data-num-posts='".get_option("fcfw-data-num-posts")."' data-width='".get_option("fcfw-data-width")."'></div>";
}

function fcfw_comment_count()
{
	global $post;
	echo "<fb:comments-count href={$post->guid}></fb:comments-count>";
}

add_action('wp_head', 'fcfw_head');
function fcfw_head()
{
	echo "<div id='fb-root'></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = '//connect.facebook.net/en_US/all.js#xfbml=1&appId=239078979473951';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>";
}
