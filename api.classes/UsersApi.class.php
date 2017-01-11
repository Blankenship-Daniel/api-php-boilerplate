<?php
require_once( 'Api.class.php' );

class UsersApi extends Api {

    function __construct() {
        parent::__construct();
    }

    protected function create() {
        echo 'create user';
    }

    protected function read() {
        echo 'read user';
    }

    protected function update() {
        echo 'update user';
    }

    protected function delete() {
        echo 'delete user';
    }
}
?>
