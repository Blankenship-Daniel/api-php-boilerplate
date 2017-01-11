<?php
require_once( 'Api.class.php' );

class CommentsApi extends Api {

    function __construct() {
        parent::__construct();
    }

    protected function create() {
        echo 'create comment';
    }

    protected function read() {
        echo 'read comment';
    }

    protected function update() {
        echo 'update comment';
    }

    protected function delete() {
        echo 'delete comment';
    }
}
?>
