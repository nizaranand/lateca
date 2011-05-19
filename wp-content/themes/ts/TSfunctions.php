<?php 
function iii_options(){
$themename = "The Standard";
$shortname = "iii";
$zm_categories_obj = get_categories('hide_empty=0');
$zm_categories = array();
foreach ($zm_categories_obj as $zm_cat) {
	$zm_categories[$zm_cat->cat_ID] = $zm_cat->category_nicename;
}
$categories_tmp = array_unshift($zm_categories, "Select a category:");	
$number_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10", "12","14", "16", "18", "20" );
$options = array (



	array(  "name" => "Image slider settings",
            "type" => "heading",
			"desc" => "This section customizes the sliding panel area and the number of panels to be displayed.",
			),

	array( 	"name" => "Image Slider Category",
			"desc" => "Select the category from which you want to display the thumbnails.",
			"id" => $shortname."_gldcat",
			"std" => "Select a category:",
			"type" => "select",
			"options" => $zm_categories),

	array(	"name" => "Number of sliding panels",
			"desc" => "Select the number of images to display .",
			"id" => $shortname."_gldct",
			"std" => "Select a Number:",
			"type" => "select",
			"options" => $number_entries),

    array(  "name" => "Welcome message",
           "type" =>  "heading",
			"desc" => "This section lets you display a custom welcome message to your site visitors.",
       ),
	   
	array("name" => "Welcome message",
			"desc" => "Enter some text here.",
            "id" => $shortname."_welcom",
            "std" => "Welcome to my website..",
            "type" => "textarea"),
            
    array(  "name" => "Header Titles For Main Page",
           "type" =>  "heading",
			"desc" => "This section lets you display a custom header titles for greater personalization of your blog.",
       ),
	   
	array("name" => "Header Bottom Left",
			"desc" => "Enter some text here.",
            "id" => $shortname."_headerLeft",
            "std" => "Stuff We Do Great",
            "type" => "text"),      
    
            
    array("name" => "Header Middle",
			"desc" => "Enter some text here.",
            "id" => $shortname."_headerMiddle",
            "std" => "From Our Blog",
            "type" => "text"),
            
    array("name" => "Header Right",
			"desc" => "Enter some text here.",
            "id" => $shortname."_headerRight",
            "std" => "Our Amazing Team",
            "type" => "text"),
            
    array("name" => "Header Bottom Left",
			"desc" => "Enter some text here.",
            "id" => $shortname."_headerBL",
            "std" => "Monthly Archive",
            "type" => "text"),


	array("name" => "Header Bottom Middle",
			"desc" => "Enter some text here.",
            "id" => $shortname."_headerBM",
            "std" => "Our Inspiration",
            "type" => "text"),


	array("name" => "Header Bottom Right",
			"desc" => "Enter some text here.",
            "id" => $shortname."_headerBR",
            "std" => "Follow Us",
            "type" => "text"),
            
    array(  "name" => "Stuff We Do Great List",
           "type" =>  "heading",
			"desc" => "This section allows you to list your qualifications under the Stuff We Do Great section.  If you don't have that many things to list, just leave the sections blank.",
       ),
       
    array("name" => "SWDG 1",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg1",
            "std" => "",
            "type" => "text"),
            
    array("name" => "SWDG 2",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg2",
            "std" => "",
            "type" => "text"),
            
    array("name" => "SWDG 3",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg3",
            "std" => "",
            "type" => "text"),
            
            
    array("name" => "SWDG 4",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg4",
            "std" => "",
            "type" => "text"),
            
    array("name" => "SWDG 5",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg5",
            "std" => "",
            "type" => "text"),
            
    array("name" => "SWDG 6",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg6",
            "std" => "",
            "type" => "text"),
            
    array("name" => "SWDG 7",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg7",
            "std" => "",
            "type" => "text"),
            
    array("name" => "SWDG 8",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg8",
            "std" => "",
            "type" => "text"),
            
    array("name" => "SWDG 9",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg9",
            "std" => "",
            "type" => "text"),
            
     array("name" => "SWDG 10",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg10",
            "std" => "",
            "type" => "text"),
            
     array("name" => "SWDG 11",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg11",
            "std" => "",
            "type" => "text"),
            
     array("name" => "SWDG 12",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg12",
            "std" => "",
            "type" => "text"),
            
    array("name" => "SWDG 13",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg13",
            "std" => "",
            "type" => "text"),
            
    array("name" => "SWDG 14",
			"desc" => "Enter some text here.",
            "id" => $shortname."_swdg14",
            "std" => "",
            "type" => "text"),

            
    array(  "name" => "Footer message",
           "type" =>  "heading",
			"desc" => "This section lets you display a custom footer message to your site visitors.",
       ),
            
    array("name" => "Footer message",
			"desc" => "Enter some text here.",
            "id" => $shortname."_footer",
            "std" => "Something clever...",
            "type" => "textarea"),    							

  	     

	array(  "name" => "Feedburner Settings",
            "type" => "heading",
			"desc" => " Provide a feedburner email subscription form for your site users .",

       ),
	array(	"name" => "Your feedburner URI",
			"desc" => "Enter your feedburner URI here ( Case sensitive ).",
            "id" => $shortname."_feed",
            "std" => "",
            "type" => "text"),   	


	 
   );

update_option('iii_template',$options);update_option('iii_themename',$themename);update_option('iii_shortname',$shortname);  
		  
	}
add_action('init','iii_options'); 	

/*STANDARD FUNCTION UPDATES*/

function mytheme_add_admin() {

$options =  get_option('iii_template'); $themename =  get_option('iii_themename');$shortname =  get_option('iii_shortname');    



    if ( $_GET['page'] == basename(__FILE__) ) {

    

        if ( 'save' == $_REQUEST['action'] ) {



                foreach ($options as $value) {

                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }



                foreach ($options as $value) {

                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }



                header("Location: themes.php?page=TSfunctions.php&saved=true");

                die;



        } else if( 'reset' == $_REQUEST['action'] ) {



            foreach ($options as $value) {

                delete_option( $value['id'] ); 

                update_option( $value['id'], $value['std'] );}



            header("Location: themes.php?page=TSfunctions.php&reset=true");

            die;



        }

    }



      add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');



}



function mytheme_admin() {



   $options =  get_option('iii_template');$themename =  get_option('iii_themename');$shortname =  get_option('iii_shortname');  



    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';

    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';

    
?>

<!-- Custom Admin HTML -->

<div class="wrap">

<h2 style="font-size:32px; color:#21759b !important;"><?php echo $themename; ?> theme options</h2>
<form method="post">
<table class="optiontable" style="font-family:Arial;">
<?php foreach ($options as $value) { 
if ($value['type'] == "text") { ?>

    <tr align="left"> 

    <th scope="row" style="font-size:12px;"><?php echo $value['name']; ?>:</th>

    <td>

        <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"  style="font-size:12px;" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" size="40" />

				

    </td>

	

</tr>

<tr><td colspan=2> <small><?php echo $value['desc']; ?> </small> <hr /></td></tr>



<?php } elseif ($value['type'] == "textarea") { ?>

<tr align="left"> 

    <th scope="row"><?php echo $value['name']; ?>:</th>

    <td>

                   <textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="50" rows="8"/>

				   <?php if ( get_settings( $value['id'] ) != "") { echo stripslashes (get_settings( $value['id'] )); } 

				   else { echo $value['std']; 

				   } ?>

</textarea>



				

    </td>

	

</tr>

<tr><td colspan=2> <small><?php echo $value['desc']; ?> </small> <hr /></td></tr>





<?php } elseif ($value['type'] == "select") { ?>



    <tr align="left"> 

        <th scope="top"><?php echo $value['name']; ?>:</th>

	        <td>

            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">

                <?php foreach ($value['options'] as $option) { ?>

                <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; }?>><?php echo $option; ?></option>

                <?php } ?>

            </select>

			

        </td>

	

</tr>

<tr><td colspan=2> <small><?php echo $value['desc']; ?> </small> <hr /></td></tr>







<?php } elseif ($value['type'] == "heading") { ?>



   <tr valign="top"> 

		    <td colspan="2" style="text-align: left; margin-bottom:0;"><h2 style="font-family: arial; padding-bottom:0; font-size: 18px; color:#9cacb3;"><?php echo $value['name']; ?></h2></td>

		</tr>

<tr><td colspan=2> <small> <p style="color:#555; font-family:Palatino; font-style:italic; margin:0 0;" > <?php echo $value['desc']; ?> </P> </small> <hr /></td></tr>



<?php } ?>

<?php 

}

?>

</table>

<p class="submit">

<input name="save" type="submit" value="Save changes" />    

<input type="hidden" name="action" value="save" />

</p>

</form>

<form method="post">

<p class="submit">

<input name="reset" type="submit" value="Reset" />

<input type="hidden" name="action" value="reset" />

</p>

</form>

<h2>Preview (updated when options are saved)</h2>

<iframe src="../?preview=true" width="100%" height="600" ></iframe>

<?php

}

add_action('admin_menu', 'mytheme_add_admin'); ?>