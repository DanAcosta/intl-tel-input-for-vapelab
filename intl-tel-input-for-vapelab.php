<?php
/**
 * Plugin Name: International Phone Input for VapeLab
 * Description: Adds a flag dropdown to phone input, displays a relevant placeholder and provides formatting/validation methods.
 * Version:2.3.9
 * Author: VapeLab
 * Author URI: https://vapelab.mx/
 * Text Domain: intl-tel-input-for-vapelab
 * Domain Path: /languages
 *
 * Copyright: © 2022 VapeLab, México.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace VapeLab\WooCommerce\Settings;

defined('ABSPATH') || exit;

define( 'VL_IPI_PLUGIN', __FILE__ );

require_once(__DIR__ . '/includes/autoloader.php');
	
(new InternationalPhoneInput(
		__FILE__, 
		'International Phone Input for VapeLab',
        'Adds a flag dropdown to phone input, displays a relevant placeholder and provides formatting/validation methods', 
		'2.1.4'
	)
)->register();

add_action( 'wp_ajax_vl_validate_wa', array('VapeLab\WooCommerce\Settings\InternationalPhoneInput', 'validate_wa_callback')  );
add_action( 'wp_ajax_nopriv_vl_validate_wa', array('VapeLab\WooCommerce\Settings\InternationalPhoneInput', 'validate_wa_callback')  );