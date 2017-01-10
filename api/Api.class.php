<?php
abstract class Api {
    protected $request;
    protected $noun;

    function __construct() {
        $this->request = $_REQUEST['request'];
        $this->noun = $_REQUEST['noun'];

        $this->handleRequest( $this->request, $this->noun );
    }

    protected function handleRequest( $request, $noun ) {
        try {
            call_user_func( array( $this, $request ), $noun );
        }
        catch ( Exception $e ) {
            echo $e->getMessage();
        }
    }

    abstract protected function create ( $noun );
    abstract protected function read   ( $noun );
    abstract protected function update ( $noun );
    abstract protected function delete ( $noun );
}
?>
