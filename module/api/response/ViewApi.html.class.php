<?php

class ViewApi extends HtmlResponse
{
    function __construct()
    {
        $user = Security::Authentication()->GetCurrentUser()->GetUserId();
        if(!$user){
            echo json_encode(array());
            exit();
        }
    }

    function ProcessRequest()
    {   
        $Mod = 'api';
        $Bus = $_GET['business']->SqlString()->Raw();
        $Obj = GtfwDispt()->load->business($Bus, $Mod);
        $Obj->index();
    }

    // INSERT INTO `gtfw_module` 
    // (
    //     `module_id`, 
    //     `module`, 
    //     `module_sub_module`, 
    //     `module_action`, 
    //     `module_type`, 
    //     `module_desc`, 
    //     `module_access`, 
    //     `module_menu_id`, 
    //     `module_application_id`, 
    //     `module_action_id`, 
    //     `insert_user_id`, 
    //     `insert_timestamp`, 
    //     `update_user_id`, 
    //     `update_timestamp`
    // ) VALUES (
    //     NULL, 
    //     'api', 
    //     'api', 
    //     'view', 
    //     'html', 
    //     'API', 
    //     'all', 
    //     NULL, 
    //     '1', 
    //     '1',
    //     NULL, 
    //     NULL, 
    //     NULL, 
    //     NULL
    // );
}

?>
