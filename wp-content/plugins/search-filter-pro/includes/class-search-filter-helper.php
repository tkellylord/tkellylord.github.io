<?php

/**
 * Fired during plugin activation
 *
 * @link       http://www.designsandcode.com
 * @since      1.0.0
 *
 * @package   
 * @subpackage 
 */

class Search_Filter_Helper {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */

	public static $log_time_start = array();
	public static $log_time_finish = array();
	public static $log_time_total = array();
	public static $log_time_running = array();
	public static $has_wpml_checked = false;
	public static $has_wpml = false;

	public function __construct()
	{

	}

	public static function start_log($name = "")
    {
        self::$log_time_start[$name] = microtime(true);
    }
    public static function log($str = "")
    {
        /*echo "<pre>";
        echo $str;
        echo "</pre>";
        echo "<hr />";*/
        //<br />********************************<br />";
    }

    public static function finish_log($name = "", $display = true, $important = false)
    {
        self::$log_time_finish[$name] = microtime(true);
        self::$log_time_total[$name] = self::$log_time_finish[$name] - self::$log_time_start[$name];

        if($display) {
            self::print_log($name, false, $important);
        }
        else
        {
            return self::$log_time_total[$name];
        }
    }
    public static function add_time_running($name = "", $name_to_add = "", $display = false)
    {
        if(!isset(self::$log_time_running[$name]))
        {
            self::$log_time_running[$name] = 0;
        }


        self::$log_time_running[$name] += self::$log_time_total[$name_to_add];

        if($display) {
            self::print_log($name, true, $important);
        }
    }
    public static function get_time_running($name = "", $display = true, $important = false)
    {
        if(!isset(self::$log_time_running[$name]))
        {
            self::$log_time_running[$name] = 0;
        }


        if($display) {
            self::print_log($name, true, $important);
        }
    }
    public static function print_log($name = "", $running = false, $important = false)
    {
        //echo "<br /><br />********************************<br />
        if($important)
        {
            echo "<strong>";
        }

        if(!$running)
        {
            $time_var = self::$log_time_total[$name];
        }
        else
        {
            $time_var = self::$log_time_running[$name];
        }

        echo "SFLOG | $name: " . round($time_var, 3) . " seconds
        <br />********************************<br />";
        if($important)
        {
            echo "</strong>";
        }
    }

	//Search_Filter_Helper::json_encode()
	public static function json_encode($obj)
	{
		if(function_exists('wp_json_encode'))
		{//introduced WP 4.1
			return wp_json_encode($obj);
		}
		else 
		{
			return json_encode($obj);
		}
		/*else
		{
			return false;
		}*/
		
	}
	
	public static function has_wpml()
	{
		//filter is for WPML v 3.5 and over
		//keep icl_object as a check for older WPML and also other plugins which declare the same functions for compatibility

        if(!self::$has_wpml_checked)
        {
            self::$has_wpml_checked = true;

            /*if(self::has_polylang())
            {
                self::$has_wpml = true;
            }
            else {*/
                if ((has_filter('wpml_object_id') || (function_exists('icl_object_id')))) {
                    self::$has_wpml = true;
                }
            //}
        }

        return self::$has_wpml;
	}
	public static function has_polylang()
	{
		//global $polylang;
        if ( defined( 'POLYLANG_VERSION' ) ) {
		//if(isset($polylang)) {

			return true;
		}
				
		return false;
	}
	
	public static function wpml_object_id($id = 0, $type = '', $return_original = '', $lang_code = '')
	{
		$lang_id = 0;
		
		if(has_filter('wpml_object_id'))
		{
			if($lang_code!="")
			{
				$lang_id = apply_filters( 'wpml_object_id', $id, $type, $return_original, $lang_code );
			}
			else
			{
				$lang_id = apply_filters( 'wpml_object_id', $id, $type, $return_original );
			}
		}
		else if(function_exists('icl_object_id'))
		{
			if($lang_code!="")
			{
				$lang_id = icl_object_id($id, $type, $return_original, $lang_code);
			}
			else
			{
				$lang_id = icl_object_id($id, $type, $return_original);
			}
		}
		
		return $lang_id;
	}
	public static function wpml_post_language_details($post_id = 0)
	{
		$lang_details = array();

		if(has_filter('wpml_post_language_details'))
		{
			$lang_details = apply_filters( 'wpml_post_language_details', "", $post_id );
		}
		else if(function_exists('wpml_get_language_information'))
		{

			$lang_details = wpml_get_language_information($post_id);
		}
		
		return $lang_details;
	}
	
	public static function wpml_post_language_code($post_id)
	{
        //if its actually polylang use their function instead
        if((self::has_polylang())&&(function_exists('pll_get_post_language')))
        {
            return pll_get_post_language($post_id);
        }

		$lang_details = Search_Filter_Helper::wpml_post_language_details($post_id);
		if($lang_details)
		{
			return $lang_details['language_code'];
		}
		else
		{
			return "";
		}
	}

	public static function get_settings_meta($sfid)
    {
        $settings = get_post_meta( $sfid , '_search-filter-settings' , true );

        if(!isset($settings['results_url']))
        {
            $settings['results_url'] = get_post_meta( $sfid , '_search-filter-results-url' , true );
        }

        if(!isset($search_form_settings["enable_taxonomy_archives"]))
        {
            $search_form_settings["enable_taxonomy_archives"] = 0;
        }

        return $settings;
    }
	public static function get_fields_meta($sfid)
    {
        $fields = get_post_meta( $sfid , '_search-filter-fields' , true );

        return $fields;
    }
}
