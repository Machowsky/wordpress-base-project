<?php

class API_Data_Shortcode {
    public function __construct() {
        add_shortcode( 'api_data', [ $this, 'render_shortcode' ] );
    }

    public function render_shortcode() {
        // Fetch data from the API.
        $fetcher = new API_Data_Fetcher();
        $data = $fetcher->fetch_data();

        if ( empty( $data ) ) {
            return '<p>No data available.</p>';
        }

        // Render data as HTML.
        ob_start();
        
        echo '<ul>';
        foreach ( $data as $item ) {
            echo '<li>' . esc_html( $item ) . '</li>';
        }
        echo '</ul>';
        return ob_get_clean();
    }
}