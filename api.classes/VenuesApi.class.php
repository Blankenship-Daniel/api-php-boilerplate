<?php
require_once( 'Api.class.php' );

class VenuesApi extends Api {

    function __construct() {
        parent::__construct();
    }

    protected function create() {
        echo 'create venue';
    }

    protected function read() {
        echo 'read venue';
    }

    protected function update() {
        echo 'update venue';
    }

    protected function delete() {
        echo 'delete venue';
    }
}
?>
