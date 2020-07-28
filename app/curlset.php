<?php

class Curlset{

    var $target;
    var $content_type = 'application/x-www-form-urlencoded; charset=UTF-8';
    var $payload = '';
    var $method = 'POST';

    public function call(){
        $Reports = new Reports();
        try {

            $curl = curl_init();

            curl_setopt( $curl, CURLOPT_URL, $this->target );
            curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: ' . $this->content_type ) );
            if ( $this->method == 'POST' ):
                curl_setopt( $curl, CURLOPT_POST, 1 );
                curl_setopt( $curl, CURLOPT_POSTFIELDS, $this->payload );
            elseif ( $this->method != 'GET' ):
                curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, $this->method );
                curl_setopt( $curl, CURLOPT_POSTFIELDS, $this->payload );
            endif;
            curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
            curl_setopt( $curl, CURLOPT_NOSIGNAL, 1 );
            curl_setopt( $curl, CURLOPT_TIMEOUT_MS, 60000 );
            curl_setopt( $curl, CURLOPT_TIMEOUT, 60 );

            $server_output = curl_exec ( $curl );
            curl_close( $curl );
            $jsonToArr = json_decode( $server_output, true );
            
            $Reports->log( "Payload: " . $this->payload . " || Server_output: " . $server_output );
            print "Payload: " . $this->payload . " || Server_output: " . $server_output . "\n\r";

        } catch( Exception $e ) {
            $Reports->log( "Error: " . $e->getCode() . ' ' . $e->getMessage() );
            print $e->getCode() . ' ' . $e->getMessage();
        }
    }
}