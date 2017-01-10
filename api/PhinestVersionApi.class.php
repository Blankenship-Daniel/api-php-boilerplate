<?php
require_once( 'Api.class.php' );

class PhinestVersionApi extends Api {

    function __construct() {
        parent::__construct();
    }

    public function create( $noun ) {
        echo 'create';
    }

    public function read( $noun ) {
        echo 'read';
    }

    public function update( $noun ) {
        echo 'update';
    }

    public function delete( $noun ) {
        echo 'delete';
    }
}
?>
