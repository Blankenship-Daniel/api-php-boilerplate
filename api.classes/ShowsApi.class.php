<?php
require_once( 'Api.class.php' );

class ShowsApi extends Api {

    function __construct() {
        parent::__construct();
    }

    protected function create() {
        echo 'create show';
    }

    protected function read() {
        echo 'read show';
    }

    protected function update() {
        echo 'update show';
    }

    protected function delete() {
        echo 'delete show';
    }
}
?>
