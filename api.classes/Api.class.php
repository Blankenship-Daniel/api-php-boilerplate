<?php
require_once( 'Request.class.php' );

/**
 * An example request will look like the following:
 *  http://localhost/api/v1/songs.php
 */
abstract class Api {
    protected $request;

    function __construct() {
        $this->request = new Request( $_SERVER[ 'REQUEST_METHOD' ] );
        $this->handleRequest( $this->request->getOperationType() );
    }

    protected function handleRequest( $request ) {
        try {
            call_user_func( array( $this, $request ) );
        }
        catch ( Exception $e ) {
            echo $e->getMessage();
        }
    }

    abstract protected function create ();
    abstract protected function read   ();
    abstract protected function update ();
    abstract protected function delete ();
}
?>
