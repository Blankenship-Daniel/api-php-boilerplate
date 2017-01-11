<?php
require_once( 'Api.class.php' );
require_once( __DIR__ . '/../storage/SQLConnection.class.php' );

class SongsApi extends Api {
    private $conn;

    function __construct() {
        parent::__construct();
    }

    protected function create() {
        echo 'create song';
    }

    protected function read() {
        echo 'read song';
        $this->conn = SQLConnection::connect();
        $stmt = $this->conn->prepare( "SELECT * FROM songs ORDER BY id ASC LIMIT 10" );
        $status = $stmt->execute();

        if ($status) {
            var_dump( $stmt->fetchAll( PDO::FETCH_ASSOC ) );
        }
    }

    protected function update() {
        echo 'update song';
    }

    protected function delete() {
        echo 'delete song';
    }
}
?>
