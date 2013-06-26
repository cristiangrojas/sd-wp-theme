<?php
// create custom plugin settings menu
add_action('admin_menu', 'skyali_create_menu');

function skyali_create_menu() {

	//create new top-level menu
	add_theme_page('Theme Settings', 'Broadcast Options', 'administrator', 'theme_settings', 'skyali_settings_page');

	//call register settings function
	if(!isset($_GET['event'])){
	add_action( 'admin_init', 'register_mysettings');
	}
	add_action('admin_init', 'skypanel_add_scripts');
	
}

function skypanel_add_scripts() {
	if(@$_GET['page'] == 'theme_settings'){
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style("skypanel",  get_template_directory_uri()."/scripts/admin/css/style.css", false, "1.0", "all");
	wp_enqueue_style("tipTip",  get_template_directory_uri()."/scripts/admin/css/tipTip.css", false, "1.0", "all");
	wp_enqueue_script("Sortable",  get_template_directory_uri()."/scripts/admin/js/jquery.sortable.js", false, "1.0", "all");
	wp_enqueue_script("tipTipJS",  get_template_directory_uri()."/scripts/admin/js/jquery.tipTip.js", false, "1.0", "all");
	wp_enqueue_script("ColorPicker",  get_template_directory_uri()."/scripts/admin/js/colorpicker.js", false, "1.0", "all");
	wp_enqueue_script("Tabify",  get_template_directory_uri()."/scripts/admin/js/jquery.tabify.js", false, "1.0", "all");
	wp_enqueue_script("Skyali Custom Js",  get_template_directory_uri()."/scripts/admin/js/custom.js", false, "1.0", "all");

	
	}
}



if(!isset($_GET['event'])){
	include_once('load_option_array.php');
}

if(!isset($_GET['event'])){
function register_mysettings() {
	//register our settings
	global $options_array;
	global $prefixs;
		foreach($options_array as $opt){
			$opt_name = $opt[1];
			$opt_name = $prefixs.$opt_name;
			$opt_name = strtolower($opt_name);
			$opt_name = str_replace(' ', '_', $opt_name);
			if(isset($_POST[$opt_name])){
		register_setting('skyali-settings-group', ''.$opt_name.'');
		}
	}
}
}

function my_admin_scripts() {
wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');
}

function my_admin_styles() {
wp_enqueue_style('thickbox');
}

if (isset($_GET['page']) && $_GET['page'] == 'theme_settings') {
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');

}


//$array = array('name'=>'id','name','subject','black'=>'id','name','subject');

/* Insert Mysql */

//if($_post['sqlimport_ll'] == 'true'){
	
//$wpdb->insert('wp_options', 


//echo ' <br /> LAST QUERY:'.$wpdb->last_query; displays last query from the wp_options table so you'll what happened last in the table

//$saved_options is all of the options from the demo saved and converted into arrays from the database sql using the export feature my phpadmin

//foreach ($saved_options as $display){
	//this will display the options in another array form so you can copy and paste the options above into the "import demo" array.
	/*echo '<br />';
	echo  "array('option_id' => 'NULL','option_name' => array('name'=>'$display[0]'), 'option_value' => '$display[1]', 'autoload' => 'yes'),";*/
//}



function skyali_settings_page() {
?>

<?php
 //pages & sub pages 
$default_page = 'General';
$default_sub_page = 'Logo Design';
$main_page = @$_GET['main_page'];
$pages = array('General' => array('Logo Design', 'Theme Styling', 'Footer Options', 'Top Menu', 'Categories'), 'Home Page' => array('Featured','Blog Posts','Other Categories','Spotlight'), 'Post Page' => array('Post Settings'), 'Miscellaneous' => array('468 x 60', 'Contact Email', 'Tracking Code') );
?>


<?php if(@$_GET['event'] == 'settings'){ ?>

<form method="get" action="<?php echo get_template_directory_uri(); ?>/scripts/admin/save_settings.php" id="skyali_form">

<?php } else {  ?>

<form method="post" action="options.php#tab-link" id="skyali_form">

<?php } ?>

<?php settings_fields( 'skyali-settings-group' ); ?> 

<!--<input type="submit" class="button-primary"  id="save_settings" value="Save Changes"/>-->

<div id="container">

<div id="header">

<img src="<?php echo get_template_directory_uri(); ?>/scripts/admin/css/images/skypanel.png" class="logo" />

<div class="header_right">

<img src="<?php echo get_template_directory_uri(); ?>/scripts/admin/css/images/support_docs_icon.png" class="icon" />


<a href="<?php echo get_template_directory_uri(); ?>/help/index.html" target="_blank"><?php _e('Need Help?','skyali'); ?></a>

<!-- <img src="<?php echo get_template_directory_uri(); ?>/scripts/admin/css/images/import.png" class="icon" />

<?php 

echo '<a href="'.$_SERVER['PHP_SELF'].'?page=theme_settings&sqlimport_ll=true">Import Demo Options</a>';

?>
-->
<!-- <img src="<?php echo get_template_directory_uri(); ?>/scripts/admin/css/images/more_themes.png" class="icon" />

<a href="#"><?php _e('More Themes','skyali'); ?></a> -->

</div><!-- #header_right -->

</div><!-- #header -->

<div id="skypanel_navigation">

<ul>

<?php $pages_i = 1; ?>

<?php foreach($pages as $page){
	
	$key = array_search($page,$pages);
	
	if(@$_GET['main_page'] == $key){
	
	$active = 'class="active"';
	
	}
	else{
		$active = '';
	}
	
	if(empty($_GET['main_page'])){
		if($pages_i == 1){
		$active =  'class="active"';
		}
	}
	
	echo '<li><a href="?page=theme_settings&main_page='.$key.'&sub_page=logo_design" '.$active.'>'.$key.'</a></li>';
	
	$pages_i++;
} 

?>

</ul>

</div><!-- #navigation -->

<div id="content">

<?php if(empty($_GET['event'])){ ?>

<ul class="menu" id="menu">

<?php 

$sub_page_num = 1;

if($main_page != ''){
	$get_main_page = $main_page;
}
else{
	$get_main_page = $default_page;
} 

foreach ($pages[$get_main_page] as $sub_page){
	
	if($sub_page_num == 1){
		$first_link = ' class="first_link"';
		$first_li = ' class="active"';
	}else{
		$first_link = '';
		$first_li = '';
	}
	$sub_page_link = str_replace(' ', '_',$sub_page);
	$sub_page_link = strtolower($sub_page_link);
	echo '<li'.$first_li.'><a href="#'.$sub_page_link.'"'.$first_link.'>'.$sub_page.'</a></li>';
	
	$sub_page_num++;
	
}

?>

</ul>

<?php } ?>

<div id="inside">

<ol>

<?php 

if(@$_GET['event'] == 'settings'){
include_once('theme_settings.php');
}
else{
//include the theme options
include_once('theme_options.php');
}
?>

</ol>

</div><!-- #inside -->

<div id="save_footer_holder">

<div id="save_footer">

<input type="submit" value="" name="options_save" class="options_save" />

</div><!-- #save_footer -->

</div><!-- #save_footer_holder -->

</div><!-- #content -->

</div><!-- #container -->

</form>

<?php // file writing under here ?>

<?php } ?>