<?php
$config = array(
    /* 数据库配置 */
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址    
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '',  // 密码
    'DB_PORT'   => '3306', // 端口    
    'DB_NAME'   => 'english', // 数据库名    
    'DB_PREFIX' => 'en_', // 数据库表前缀 

    /* 加密前缀 */
    'PWD_KEY'   => 'cc_baguawu_520',   // 用户注册加密前缀
    'ADMIN_KEY' => 'cc_!@#$%_admin',   // 后台加密串

    'DEFAULT_AJAX_RETURN' => 'JSON',  // $this->ajaxRetrun配置
);
if (DEV) {
    return $config;die;
}
return array(
    /* 数据库配置 */
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址    
    'DB_USER'   => 'a0103212306', // 用户名
    'DB_PWD'    => '4ada57df',  // 密码
    'DB_PORT'   => '3306', // 端口    
    'DB_NAME'   => 'a0103212306', // 数据库名    
    'DB_PREFIX' => 'bgw_', // 数据库表前缀 

    /* 加密前缀 */
    'PWD_KEY'   => 'cc_baguawu_520',   // 用户注册加密前缀
    'ADMIN_KEY' => 'cc_!@#$%_admin',   // 后台加密串

    'DEFAULT_AJAX_RETURN' => 'JSON',  // $this->ajaxRetrun配置
);