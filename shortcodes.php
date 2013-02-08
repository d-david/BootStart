<?php

add_action('media_buttons','add_sc_select',11);
function add_sc_select(){
    global $shortcode_tags;
     /* ------------------------------------- */
     /* enter names of shortcode to exclude bellow */
     /* ------------------------------------- */
    $exclude = array("wp_caption", "embed", "gallery");
    echo '&nbsp;<select id="sc_select"><option>Shortcode</option>';
    foreach ($shortcode_tags as $key => $val){
            if(!in_array($key,$exclude)){
            $shortcodes_list .= '<option value="['.$key.'][/'.$key.']">'.$key.'</option>';
            }
        }
     echo $shortcodes_list;
     echo '</select>';
}
add_action('admin_head', 'button_js');
function button_js() {
        echo '<script type="text/javascript">
        jQuery(document).ready(function(){
           jQuery("#sc_select").change(function() {
                          send_to_editor(jQuery("#sc_select :selected").val());
                          return false;
                });
        });
        </script>';
}


//register shortcodes

add_shortcode('one_thurd', 'one_thurd');
add_shortcode('two_thurd', 'two_thurd');
add_shortcode('one_fourth', 'one_fourth');
add_shortcode('one_sixth', 'one_sixth');
add_shortcode('five_sixth', 'five_sixth');
add_shortcode('one_half', 'one_half');
add_shortcode('tree_fourth', 'tree_fourth');
add_shortcode( 'slider', 'dd_slider_shortcode' );
add_shortcode('button_large', 'button_large');
add_shortcode('button_medium', 'button_medium');
   add_shortcode('button_small', 'button_small');


function register_shortcodes(){
   add_shortcode('one_thurd', 'one_thurd');
   add_shortcode('two_thurd', 'two_thurd');
   add_shortcode('one_fourth', 'one_fourth');
   add_shortcode('one_sixth', 'one_sixth');
   add_shortcode('five_sixth', 'five_sixth');
   add_shortcode('one_half', 'one_half');
   add_shortcode('tree_fourth', 'tree_fourth');
   add_shortcode('button_large', 'button_large');
   add_shortcode('button_medium', 'button_medium');
   add_shortcode('button_small', 'button_small');
   add_shortcode( 'slider', 'dd_slider_shortcode' );
}


function one_thurd( $atts, $content = null ) {
   return '<div class="span4 col">'.$content.'</div>';
}

function two_thurd( $atts, $content = null ) {
   return '<div class="span8 col">'.$content.'</div>';
}

function one_fourth( $atts, $content = null ) {
   return '<div class="span3 col">'.$content.'</div>';
}

function tree_fourth( $atts, $content = null ) {
   return '<div class="span9 col">'.$content.'</div>';
}

function one_half( $atts, $content = null ) {
   return '<div class="span6 col">'.$content.'</div>';
}

function one_sixth( $atts, $content = null ) {
   return '<div class="span2 col">'.$content.'</div>';
}

function five_sixth( $atts, $content = null ) {
   return '<div class="span10 col">'.$content.'</div>';
}

function button_large( $atts, $content = null ) {
   return '<button class="btn btn-large btn-primary" type="button">'.$content.'</button>';
}

function button_medium( $atts, $content = null ) {
   return '<button class="btn btn-primary" type="button">'.$content.'</button>';
}

function button_small( $atts, $content = null ) {
   return '<button class="btn btn-small btn-primary" type="button">'.$content.'</button>';
}

function dd_slider_shortcode() {
        ob_start();
        dd_slider_template();
        $slider = ob_get_clean();
        return $slider;
    }

?>