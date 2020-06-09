# gtfw-module-api
GTFW Module API Helper

# module
INSERT INTO `gtfw_module` 
    (
        `module_id`, 
        `module`, 
        `module_sub_module`, 
        `module_action`, 
        `module_type`, 
        `module_desc`, 
        `module_access`, 
        `module_menu_id`, 
        `module_application_id`, 
        `module_action_id`, 
        `insert_user_id`, 
        `insert_timestamp`, 
        `update_user_id`, 
        `update_timestamp`
    ) VALUES (
        NULL, 
        'api', 
        'api', 
        'view', 
        'html', 
        'API', 
        'all', 
        NULL, 
        '1', 
        '1',
        NULL, 
        NULL, 
        NULL, 
        NULL
    );

# ----
    url/index.php?mod=api&sub=api&act=view&typ=html&business=GetUser
    
