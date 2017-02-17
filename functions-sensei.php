<?php
/**
/*********************
* Sensei Integration
*********************/

/**
* Declare that your theme now supports Sensei
*/
add_action( ‘after_setup_theme’,’customizr_sensei_support’ );
function customizr_sensei_support () {
add_theme_support( ‘sensei’ );
}

/**
* Remove the default Sensei wrappers
*/
global $woothemes_sensei;
remove_action( ‘sensei_before_main_content’, array( $woothemes_sensei->frontend, ‘sensei_output_content_wrapper’ ), 10 );
remove_action( ‘sensei_after_main_content’, array( $woothemes_sensei->frontend, ‘sensei_output_content_wrapper_end’ ), 10 );

/**
* Add The customizr custom Sensei content wrappers
*/
add_action(‘sensei_before_main_content’,’customizr_sensei_wrapper_start’, 10);
add_action(‘sensei_after_main_content’,’customizr_sensei_wrapper_end’, 10);

function customizr_sensei_wrapper_start (){
do_action( ‘__before_main_wrapper’ ); ##hook of the header with get_header
?>

<div id=”main-wrapper” class=”<?php echo apply_filters( ‘tc_main_wrapper_classes’ , ‘container’ ) ?>”>

<?php do_action( ‘__before_main_container’); ?>
<div class=”container” role=”main”>
<div class=”<?php echo apply_filters( ‘tc_column_content_wrapper_classes’ , ‘row column-content-wrapper’ ) ?>”>
<?php do_action( ‘__before_article_container’); ##hook of left sidebar?>
<div id=”content” class=”<?php echo tc__f( ‘__screen_layout’ , tc__f ( ‘__ID’ ) , ‘class’ ) ?> article-container”>
<?php do_action (‘__before_loop’);##hooks the heading of the list of post : archive, search… ?>
<?php
}

function customizr_sensei_wrapper_end (){
echo ‘</div> <!– end #content–>’;
echo ‘</div> <!– end .row–>’;
echo ‘</div> <!– end .container–>’;
echo ‘</div> <!– end #main-wrapper–>’;
}

/**
* remove default sensei titles
*/
global $woothemes_sensei;
remove_action( ‘sensei_course_single_title’, array( $woothemes_sensei->frontend , ‘sensei_single_title’ ), 10 );
remove_action( ‘sensei_lesson_single_title’, array( $woothemes_sensei->frontend , ‘sensei_single_title’ ), 10 );
remove_action( ‘sensei_quiz_single_title’, array( $woothemes_sensei->frontend, ‘sensei_single_title’ ), 10 );
remove_action( ‘sensei_message_single_title’, array( $woothemes_sensei->frontend, ‘sensei_single_title’ ), 10 );

/**
* Add custom customizr title:
*/
add_action( ‘sensei_course_single_title’, ‘customizr_single_title’, 10 );
add_action( ‘sensei_lesson_single_title’, ‘customizr_single_title’, 10 );
add_action( ‘sensei_quiz_single_title’, ‘customizr_single_title’, 10 );
add_action( ‘sensei_message_single_title’, ‘customizr_single_title’ , 10 );

function customizr_single_title() {
?>
<header class=”entry-header”>
<h1 class=”entry-title “><?php the_title(); ?> </h1>
<hr class=”featurette-divider __before_content”>
</header>
<?php
}

/***************************
* // END Sensei Integration
****************************/
