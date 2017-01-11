<?php
require_once( 'Api.class.php' );

class VotesApi extends Api {

    function __construct() {
        parent::__construct();
    }

    protected function create() {
        echo 'create vote';
    }

    protected function read() {
        echo 'read vote';
    }

    protected function update() {
        echo 'update vote';
    }

    protected function delete() {
        echo 'delete vote';
    }
}
?>
