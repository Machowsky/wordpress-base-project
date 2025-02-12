<?php

class API_Data_Fetcher {
    private $api_url;

    public function __construct() {
        $this->api_url = get_option('api_data_api_url', '');
    }

    public function fetch_data() {
        $response = wp_remote_get( $this->api_url );

        // echo '<pre>';
        // var_dump($response);
        // echo '<pre>';


        if ( is_wp_error( $response ) ) {
            return [];
        }

        $body = wp_remote_retrieve_body( $response );
        return json_decode( $body, true );
    }
}