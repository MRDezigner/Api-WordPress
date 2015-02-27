<?php


/**
 * CMB Theme Options
 * @version 0.1.0
 */
class CustomTheme_Admin {

    /**
     * Option key, and option page slug
     * @var string
     */
    protected static $key = 'config_theme';

    /**
     * Prefix for all fields
     * @var string
     */
    protected static $prefix = 'twpb_config_theme_';

    /**
     * Array of metaboxes/fields
     * @var array
     */
    protected static $theme_options = array();
    protected static $teste_options = array();

    /**
     * Options Page title
     * @var string
     */
    protected $title = '';

    /**
     * Constructor
     * @since 0.1.0
     */
    public function __construct() {
        // Set our title
        $this->title = __('Opções do Site', 'CustomTheme');
    }

    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks() {
        add_action('admin_init', array($this, 'init'));
        add_action('admin_menu', array($this, 'add_options_page'));
    }

    /**
     * Register our setting to WP
     * @since  0.1.0
     */
    public function init() {
        register_setting(self::$key, self::$key);
    }

    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page() {
        add_theme_page($this->title, $this->title, 'manage_options', self::$key, array($this, 'admin_page_display'), '', 55);
        remove_submenu_page('themes.php', 'customize.php'); //editor
    }

    /**
     * Admin page markup. Mostly handled by CMB
     * @since  0.1.0
     */
    public function admin_page_display() {
        ?>
        <div class="wrap cmb_options_page <?php echo self::$key; ?>">
            <h2 style="padding-bottom: 20px;"><?php echo esc_html(get_admin_page_title()); ?></h2>

            <style type="text/css">
                .tab {
                    width: 98%;
                }
                .tab .tab__head {
                    margin: 0;
                    padding: 0;
                    float: left;
                    list-style: none;
                    height: 32px;
                    border-bottom: 1px solid #ccc;
                    width: 100%;
                }
                .tab .tab__head li {
                    float: left;
                    margin: 0 1px 0 0;
                    cursor: pointer;
                    padding: 0px 20px;
                    height: 32px;
                    line-height: 31px;
                    color: #333;
                    border-bottom: 0px;
                    overflow: hidden;
                    position: relative;
                    border-top-left-radius: 5px;
                    border-top-right-radius: 5px;
                    background-color: #e5e5e5;
                }
                .tab .tab__head li:hover {
                    background-color: #e5e5e5;
                    color: #000;
                }
                .tab .tab__head li.active {
                    border: 1px solid #ccc;
                    background-color: #fff;
                    color: #333;
                    border-bottom: 1px solid #fff;
                    display: block;
                }
                .tab .tab__container {
                    border: 1px solid #ccc;
                    border-top: 0px;
                    clear: both;
                    float: left;
                    width: 100%;
                }
                .tab .tab__content {
                    background-color: #FFFFFF;
                    padding: 20px;
                    display: none;
                }
            </style>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $(".tab__content").hide();
                    $(".tab__content:first").show();

                    $(".tab__head li").click(function() {
                      $(".tab__content").hide();
                      var activeTab = $(this).attr("rel"); 
                      $("#"+activeTab).fadeIn();        
                      $(".tab__head li").removeClass("active");
                      $(this).addClass("active");
                    });
                });
            </script>

            <div class="tab">

                <ul class="tab__head">
                    <li class="active" rel="tab1">Geral</li>
                    <!--li rel="tab2"></li-->
                </ul>

                <div class="tab__container">

                    <div id="tab1" class="tab__content">
                        <?php cmb_metabox_form(self::option_fields(), self::$key); ?>
                    </div>
                    <!-- #tab1 -->

                    <!--div id="tab2" class="tab__content">
                    </div-->
                    <!-- #tab2 -->

                </div>
            </div>

        </div>

        <?php
    }

    /**
     * Defines the theme option metabox and field configuration
     * @since  0.1.0
     * @return array
     */
    public static function option_fields() {

        // Only need to initiate the array once per page-load
        if (!empty(self::$theme_options))
            return self::$theme_options;

        self::$theme_options = array(
            'id' => 'options_theme_metabox',
            'show_on' => array(
                'key' => 'options-page',
                'value' => array(self::$key)
            ),
            'context' => 'normal',
            'priority' => 'high',
            'show_names' => true,
            'fields' => array(
                array(
                    'name' => 'Logo',
                    'type' => 'file',
                    'id' => self::$prefix . 'logo',
                    'on_front' => true,
                ),
                array(
                    'name' => 'Sobre (Rodapé)',
                    'type' => 'textarea_small',
                    'id' => self::$prefix . 'sobre_footer',
                    'on_front' => true,
                ),
                array(
                    'name' => 'Facebook',
                    'type' => 'text_medium',
                    'id' => self::$prefix . 'rede_facebook',
                    'on_front' => true,
                ),
                array(
                    'name' => 'Twitter',
                    'type' => 'text_medium',
                    'id' => self::$prefix . 'rede_twitter',
                    'on_front' => true,
                ),
                array(
                    'name' => 'Instagram',
                    'type' => 'text_medium',
                    'id' => self::$prefix . 'rede_instagram',
                    'on_front' => true,
                ),
                array(
                    'name' => 'Youtube',
                    'type' => 'text_medium',
                    'id' => self::$prefix . 'rede_youtube',
                    'on_front' => true,
                ),
                array(
                    'name' => 'Linkedin',
                    'type' => 'text_medium',
                    'id' => self::$prefix . 'rede_linkedin',
                    'on_front' => true,
                )
            ),
        );

        return self::$theme_options;
    }


    /**
     * Make public the protected $key variable.
     * @since  0.1.0
     * @return string  Option key
     */
    public static function key() {
        return self::$key;
    }

}

// Get it started
$CustomTheme_Admin = new CustomTheme_Admin();
$CustomTheme_Admin->hooks();

/**
 * Wrapper function around cmb_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function CustomTheme_get_option($key = '') {
    return cmb_get_option(CustomTheme_Admin::key(), $key);
}

?>