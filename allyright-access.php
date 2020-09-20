<?php 

/**
 * Plugin Name: Ally Right Access 
 * Description: We help to access and make sure access for all
 * Plugin URI: www.allyright.com
 * Author Name: Mizanur Rahman
 * Author URI: www.mywebsite.com
 * Version: 1.0
 * License: GPL2 
 * License URI: www.linse.com
 */

 if (! define('ABSPATH')){
     exit; 
 }

/**
 * The main Plugin class
 */

 final class Allyright {

    /**
     * Definding version of the plugin
     */
    const $version = '1.0'; 
    
    /**
     * Constuctor
     */
     private function __construct(){
            $this->define_constants(); 

            register_activation_hook( __FILE__, [$this, 'activate'] ); 

            add_action( 'plugins_loaded', [$this, 'init_plugin'] ); 
     }

     /**
      * Initialize a single instance
      * return \Allyright
      */

     public static function init(){
        static $instance = false; 
        if (! $instance) {
            $instance = new self(); 
        }

        return $instance; 
     }

     public function define_constants(){
         define('ALLYRIGHT_VERSION', self::version); 
         define('ALLYRIGHT_FILE', __FILE__); 
         define('ALLYRIGHT_PATH', __DIR__); 
         define('ALLYRIGHT_URL', plugins_url( '', ALLYRIGHT_FILE )); 
         define('ALLYRIGHT__ASSETS', ALLYRIGHT_URL . '/assets' ); 
     }

     /**
      * inintialize the plugin after loaded 
      */

     public function init_plugin(){
         
     }

     /**
      * Do somework when plugin is installing
      * return void
      */

     public function activate(){

        $installed = get_option('allyright_installed'); 

        if (!installed) {
            update_option( 'allyright_installed', time() );
        }
            update_option( 'allyright_version', ALLYRIGHT_VERSION); 
     }
 }

 /**
  * Initialize the main plugin
  * return \Allyright
  */

  function allyright(){
      return Allyright::init(); 
  }

  /**
   * Start the plugin 
   */
  allyright(); 