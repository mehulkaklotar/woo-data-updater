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
		error_log('WOOCOMMERCE DATA UPDATER STARED!');
		error_log('PLEASE DO NOT CLOSE THE TERMINAL UNTIL PROCESS FINISHES. THE PROCESS USES WOOCOMMERCE DATA UPDATER CLASSES AND FUNCTIONS SO IT WILL RUN THE PROCESS AND AT THE END WILL TRY TO REDIRECT SOMEWHERE WHICH IS A FEATURE IN POST REQUEST DATA UPDATER. IF THE PROCESS DOES THIS, CONSIDER YOUR DATA UPDATER RUN SUCCESSFULLY.');
		$_GET['do_update_woocommerce'] = 'yes';
		$wc_install                    = new WC_Install();
		$wc_install->install_actions();
	}
}

WP_CLI::add_command( 'wc-data', 'Wc_Data_Update_CLI_Command' );

