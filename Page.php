<?php
/** 
 * Page.php
 * 
 * Simplist way to set up a webpage with dynamic templates.
 * 
 * @param $get 'user submitted get request'
 * @since 0.1
 *
 * Example: 
 *
 * include('Page.php');
 * $page = new Page( $_GET['page'] );
 * $content = $page->request;
 * $title = $page->title;
*/

class Page {

	private $disallowed_paths = array( 'header', 'footer' );
	private $name;

	public $request = 'home'; // Default Page
	public $title;
	
	// Class Page requires a single $_GET request as an argument.
	public function __construct( $get ){
		$this->name = $get;
		$this->title = ucfirst( $this->request );

		if ( !empty( $this->name ) ) {
			$tmp_name = basename( $this->name );

			if ( !in_array( $tmp_name, $this->disallowed_paths ) &&
			file_exists('templates/' . $tmp_name . '.html') ) {
				$this->request = $tmp_name;
				$this->title = ucfirst( $tmp_name );
			}
		}
	}
}
?>