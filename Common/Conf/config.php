<?php
return array(
	//'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'yxcms',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'cms_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查 3.2.3版本废弃
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
    'DB_SQL_BUILD_CACHE'    =>  false, // 数据库查询的SQL创建缓存 3.2.3版本废弃
    'DB_SQL_BUILD_QUEUE'    =>  'file',   // SQL缓存队列的缓存方式 支持 file xcache和apc 3.2.3版本废弃
    'DB_SQL_BUILD_LENGTH'   =>  20, // SQL缓存的队列长度 3.2.3版本废弃
    'DB_SQL_LOG'            =>  false, // SQL执行日志记录 3.2.3版本废弃
    'DB_BIND_PARAM'         =>  false, // 数据库写入数据自动参数绑定
    'DB_DEBUG'              =>  false,  // 数据库调试模式 3.2.3新增
    'DB_LITE'               =>  false,  // 数据库Lite模式 3.2.3新增
    'SHOW_PAGE_TRACE' =>true,//打开trace信息
    'TMPL_L_DELIM'    =>    '<{',//修改定界符
    'TMPL_R_DELIM'    =>    '}>',
    'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式
);