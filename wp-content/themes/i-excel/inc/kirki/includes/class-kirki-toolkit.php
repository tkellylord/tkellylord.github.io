<?php
/**
 * The main Kirki object
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2015, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Early exit if the class already exists
if ( class_exists( 'Kirki_Toolkit' ) ) {
	return;
}

class Kirki_Toolkit {

	/** @var Kirki The only instance of this class */
	public static $instance = null;

	public static $version = '1.0.2';

	public $font_registry = null;
	public $scripts       = null;
	public $api           = null;
	public $styles        = array();

	/**
	 * Access the single instance of this class
	 * @return Kirki
	 */
	public static function get_instance() {
		if ( null == self::$instance ) {
			self::$instance = new Kirki_Toolkit();
		}
		return self::$instance;
	}

	/**
	 * Shortcut method to get the translation strings
	 */
	public static function i18n() {

		$i18n = array(
			'background-color'      => __( 'Background Color', 'i-excel' ),
			'background-image'      => __( 'Background Image', 'i-excel' ),
			'no-repeat'             => __( 'No Repeat', 'i-excel' ),
			'repeat-all'            => __( 'Repeat All', 'i-excel' ),
			'repeat-x'              => __( 'Repeat Horizontally', 'i-excel' ),
			'repeat-y'              => __( 'Repeat Vertically', 'i-excel' ),
			'inherit'               => __( 'Inherit', 'i-excel' ),
			'background-repeat'     => __( 'Background Repeat', 'i-excel' ),
			'cover'                 => __( 'Cover', 'i-excel' ),
			'contain'               => __( 'Contain', 'i-excel' ),
			'background-size'       => __( 'Background Size', 'i-excel' ),
			'fixed'                 => __( 'Fixed', 'i-excel' ),
			'scroll'                => __( 'Scroll', 'i-excel' ),
			'background-attachment' => __( 'Background Attachment', 'i-excel' ),
			'left-top'              => __( 'Left Top', 'i-excel' ),
			'left-center'           => __( 'Left Center', 'i-excel' ),
			'left-bottom'           => __( 'Left Bottom', 'i-excel' ),
			'right-top'             => __( 'Right Top', 'i-excel' ),
			'right-center'          => __( 'Right Center', 'i-excel' ),
			'right-bottom'          => __( 'Right Bottom', 'i-excel' ),
			'center-top'            => __( 'Center Top', 'i-excel' ),
			'center-center'         => __( 'Center Center', 'i-excel' ),
			'center-bottom'         => __( 'Center Bottom', 'i-excel' ),
			'background-position'   => __( 'Background Position', 'i-excel' ),
			'background-opacity'    => __( 'Background Opacity', 'i-excel' ),
			'ON'                    => __( 'ON', 'i-excel' ),
			'OFF'                   => __( 'OFF', 'i-excel' ),
			'all'                   => __( 'All', 'i-excel' ),
			'cyrillic'              => __( 'Cyrillic', 'i-excel' ),
			'cyrillic-ext'          => __( 'Cyrillic Extended', 'i-excel' ),
			'devanagari'            => __( 'Devanagari', 'i-excel' ),
			'greek'                 => __( 'Greek', 'i-excel' ),
			'greek-ext'             => __( 'Greek Extended', 'i-excel' ),
			'khmer'                 => __( 'Khmer', 'i-excel' ),
			'latin'                 => __( 'Latin', 'i-excel' ),
			'latin-ext'             => __( 'Latin Extended', 'i-excel' ),
			'vietnamese'            => __( 'Vietnamese', 'i-excel' ),
			'serif'                 => _x( 'Serif', 'font style', 'i-excel' ),
			'sans-serif'            => _x( 'Sans Serif', 'font style', 'i-excel' ),
			'monospace'             => _x( 'Monospace', 'font style', 'i-excel' ),
		);

		$config = apply_filters( 'kirki/config', array() );

		if ( isset( $config['i18n'] ) ) {
			$i18n = wp_parse_args( $config['i18n'], $i18n );
		}

		return $i18n;

	}

	/**
	 * Shortcut method to get the font registry.
	 */
	public static function fonts() {
		return self::get_instance()->font_registry;
	}

	/**
	 * Constructor is private, should only be called by get_instance()
	 */
	private function __construct() {
	}

}
