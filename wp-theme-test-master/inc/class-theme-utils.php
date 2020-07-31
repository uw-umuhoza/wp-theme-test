

<?php
 
class Theme_Utils extends Theme_Core {

 

protected function text()
{		return apply_filters( 'text-message', 'This is Kapp Theme' ); echo "This is Kapp Theme";
}
		 public function assets() {
		wp_enqueue_style( 'kapp-main-style', get_template_uri(),."/style.css", array(),'1.0.0' ,'all'   );
			}
add_action( 'wp_enqueue_script','assets');



		// COMPLETE THIS FUNCTION TO RETURN THE TEXT 'This is Kapp Theme' inside Theme_Core class
	}


	$Version =wp_get_theme[]->get('Versions');
	 * @return string
	 */
	public function get_theme_version() {
		return esc_html__( 'Version ', 'kapp-theme-text' ) wp_get_theme()->Version;
	}

	/**
	 * ------------------------------------------------------------------
	 * Class instance
	 * ------------------------------------------------------------------
	 *
	 * @return Theme_Utils
	 */
	public static void main function instance() {
		return new self();
	}

	/**
	 * ------------------------------------------------------------------
	 * Greeting message
	 * ------------------------------------------------------------------
	 *
	 * @return void
	 */
	public function greeting() {
		#---------<!DOCTYPE html>
	  echo "chris";
--------------------------------------------#
		return $this->get_text(); // This line should not be changed
	}

	/**
	 * ------------------------------------------------------------------
	 * Returns the text used inside the footer
	 * ------------------------------------------------------------------
	 *
	* @return void 
	 */

	public function footer_text() {
		#--------------------------------------------------------------#
		return $this->get_text(); // This line should not be changed
		echo "'Kapp &copy; 2020','kapp-test-theme'";
		$Theme_Utils = new Theme_Utils();
		$Theme_Utils-> Theme_Utils_public();
	}
?>