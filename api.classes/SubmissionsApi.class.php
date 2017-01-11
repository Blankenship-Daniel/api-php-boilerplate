<?php
require_once( 'Api.class.php' );

class SubmissionsApi extends Api {

    function __construct() {
        parent::__construct();
    }

    protected function create() {
        echo 'create submission';
    }

    protected function read() {
        echo 'read submission';
    }

    protected function update() {
        echo 'update submission';
    }

    protected function delete() {
        echo 'delete submission';
    }
}
?>
