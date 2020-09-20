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
     * Constuctor
     */
     private function __construct(){

     }

     /**
      * Initialize a single instance
      * return \Allyright
      */

     public static function init(){
        static $instance = false; 
        if (! $instance) {
            $instance = new selft(); 
        }

        return $instance; 
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