<?php

/**
 * Create WP-CLI custom command. This class load if wp command fired from terminal.
 * Implements gravity form entries export command
 */
class Wc_Data_Update_CLI_Command extends WP_CLI_Command {

	/**
	 * WooCommerce Data Update when version update
	 *
	 * ## OPTIONS
	 *
	 *
	 * ## EXAMPLES
	 *
	 *     wp wc-data update
	 *
	 *
	 */
	function update( $args, $assoc_args ) {
		$_GET['do_update_woocommerce'] = 'yes';
		$wc_install                    = new WC_Install();
		$wc_install->install_actions();
	}
}

WP_CLI::add_command( 'wc-data', 'Wc_Data_Update_CLI_Command' );

