<?php
 
class GetUser extends Database
{
    public function __construct($connectionNumber = 0)
    {
        parent::__construct($connectionNumber);
    }

    public function index()
    {
    	$data= $this->getUser();
    	echo json_encode($data);
    	exit();
    }

    private function getUser()
    {
    	$query = "
            SELECT 
                *
            FROM `gtfw_user`
            LIMIT 1
        ";

        return $this->Open($query, array());
    }
}