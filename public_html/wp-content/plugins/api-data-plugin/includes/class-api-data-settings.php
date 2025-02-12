<?php

class API_Data_Settings {
    public function __construct() {
        add_action( 'admin_menu', [ $this, 'add_settings_page' ] );
        add_action( 'admin_init', [ $this, 'register_settings' ] );
    }

    public function add_settings_page() {
        add_options_page(
            'API Data Settings',
            'API Data',
            'manage_options',
            'api-data-settings',
            [ $this, 'render_settings_page' ]
        );
    }

    public function register_settings() {
        register_setting( 'api_data_settings', 'api_data_api_url' );

        add_settings_section(
            'api_data_main_section',
            'Main Settings',
            null,
            'api-data-settings'
        );

        add_settings_field(
            'api_data_api_url',
            'API URL',
            [ $this, 'render_api_url_field' ],
            'api-data-settings',
            'api_data_main_section'
        );
    }

    public function render_api_url_field() {
        $value = get_option( 'api_data_api_url', '' );
        echo '<input type="text" name="api_data_api_url" value="' . esc_attr( $value ) . '" />';
    }

    public function render_settings_page() {
        echo '<div class="wrap">';
        echo '<h1>API Data Settings</h1>';
        echo '<form method="post" action="options.php">';
        settings_fields( 'api_data_settings' );
        do_settings_sections( 'api-data-settings' );
        submit_button();
        echo '</form>';
        echo '</div>';
    }
}