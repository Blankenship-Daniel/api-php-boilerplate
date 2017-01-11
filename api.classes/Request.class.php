<?php
class Request {
    private $requestType;
    private $operationType = array(
        "post"      =>  "create",
        "get"       =>  "read",
        "put"       =>  "update",
        "delete"    =>  "delete"
    );

    function __construct( $requestType ) {
        $this->requestType = strtolower( $requestType );
    }

    public function is( $type ) {
        return $this->requestType === $type;
    }

    public function getRequest() {
        return $this->requestType;
    }

    public function getOperationType() {
        return $this->operationType[ $this->requestType ];
    }
}
?>
