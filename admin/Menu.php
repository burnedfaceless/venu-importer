<?php

class Menu {
	private $menu_page;

	public function __construct( $menu_page ) {
		$this->menu_page = $menu_page;
	}

	public function init() {
		add_action( 'admin_menu', array( $this, 'add_menu_page' ) );
	}

	public function add_menu_page() {
		add_menu_page(
			'Venu Importer',
			'Venu Importer',
			'manage_options',
			'vi-custom-admin-page',
			array( $this->menu_page, 'render' )
		);
	}
}