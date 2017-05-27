<?php
/**
 * Contact Info Widget
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Contact_Info_Widget
 * @author    Jessica Dieuique <jessica.dieuique@gmail.com>
 * @license   GPL-2.0+
 * @link      https://github.com/jesstice/inhabitent
 * @copyright 2017 Jessica Dieuique
 *
 * @wordpress-plugin
 * Plugin Name:       Inhabitent Contact Info Widget
 * Plugin URI:        https://github.com/jesstice/inhabitent
 * Description:       A handy contact info widget for Inhabitent.
 * Version:           1.0.0
 * Author:            Jessica Dieuique
 * Author URI:        https://github.com/jesstice
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

class Contact_Info_Widget extends WP_Widget {

		/**
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'contact-info';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		parent::__construct(
			$this->get_widget_slug(),
			'Inhabitent Contact Information',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Add the store\'s contact information.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
		$phone_number = empty( $instance['phone_number'] ) ? '' : apply_filters( 'widget_title', $instance['phone_number'] );
		$email = empty( $instance['email'] ) ? '' : apply_filters( 'widget_title', $instance['email'] );
		$address = empty( $instance['address'] ) ? '' : apply_filters( 'widget_title', $instance['address'] );
		$social_media = $instance[ 'social_media' ] ? 'true' : 'false';

		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['phone_number'] = strip_tags( $new_instance['phone_number'] );
		$instance['email'] = strip_tags( $new_instance['email'] );		
		$instance['address'] = strip_tags( $new_instance['address'] );
		$instance[ 'social_media' ] = $new_instance[ 'social_media' ];

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Contact Info',
				'phone_number' => '',
				'email' => '',
				'address' => '',
				'social_media' => ''
			)
		);

		$title = strip_tags( $instance['title'] );
		$phone_number = strip_tags( $instance['phone_number'] );
		$email = strip_tags( $instance['email'] );
		$address = strip_tags( $instance['address'] );
		$social_media = strip_tags( $instance['social_media'] );

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

// TODO: Remember to change 'Contact_Info_Widget' to match the class name definition
add_action( 'widgets_init', function(){
     register_widget( 'Contact_Info_Widget' );
});
