<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Message catalog in English
 *
 * PHP versions 4 and 5
 *
 * LICENSE: Permission to use, copy, modify, and distribute this software and
 * its documentation for any purpose and without fee is hereby
 * granted, provided that the above copyright notice appear in all
 * copies and that both that copyright notice and this permission
 * notice appear in supporting documentation, and that the name of the
 * author not be used in advertising or publicity pertaining to
 * distribution of the software without specific, written prior
 * permission. The author makes no representations about the
 * suitability of this software for any purpose.  It is provided "as
 * is" without express or implied warranty.
 *
 * @author     Bambo Huang <bambo.huang@gmail.com>
 * @copyright  2003-2009 PgPool Global Development Group
 * @version    CVS: $Id$
 */

$message = array(
    'lang' => 'zh_cn',
    'strLang' => '简体中文',

    'descAllow_sql_comments' => '在判断能否负载均衡和查询缓存时，是否忽略SQL注释',
    'descApp_name_redirect_preference_list' => '对于想使用负载均衡功能的节点，用"数据库名:节点号"的形式指定',
    'descArping_path' => '该命令的路径来发送所述 IP 地址切换后的ARP请求',
    'descArping_cmd' => 'IP 地址切换后发送ARP请求的命令',
    'descAuthentication_timeout' => '执行客户端认证的超时时长，单位为秒',
    'descBackend_flag' => '是否允许故障切换和断开连接',
    'descBackend_hostname' => 'pgpool 可以连接到的 PostgreSQL 服务器名',
    'descBackend_port' => 'PostgreSQL 服务器运行的端口',
    'descBackend_socket_dir' => '可以连接到 PostgreSQL 的套接字目录',
    'descBackend_weight' => '当 pgpool 运行在在负载均衡模式中的负载均衡比重',
    'descBackend_data_directory' => 'PostgreSQL 数据库目录',
    'descBlack_function_list' => '用逗号分隔的有写操作的函数',
    'descBlack_memqcache_table_list' => '指定一个以逗号分隔的表名的列表，用于使 SELECT 的结果不被缓存',
    'descCheck_temp_table' => '是否启用临时表检查',
    'descCheck_unlogged_table' => '检查是否是unlogged表',
    'descChild_life_time' => '空闲的子进程的生命期，单位为秒',
    'descChild_max_connections' => '如果我们的连接数到达 child_max_connections，子进程将退出',
    'descClear_memqcache_on_escalation' => '是否在升级为活跃状态时清空所有的共享内存中的查询缓存',
	'descClient_idle_limit' => '子进程等待客户端执行查询的空闲超时时长，单位为秒',
	'descClient_idle_limit_in_recovery' => '在在线恢复期间等待客户端提交一个查询请求的超时时长，单位为秒',
    'descClient_min_messages' => '发送到客户端的消息级别',
    'descConnection_cache' => '如果为 true ，则缓存到 PostgreSQL 的连接',
    'descConnection_life_time' => '空闲连接的生命期，单位为秒',
    'descConnect_timeout' => '使用connect()函数与后台服务器连接时最大等待时间的指定(以毫秒计)',
    'descDatabase_redirect_preference_list' => '用"数据库名:节点号"形式的列表来指定想使用负载均衡功能的节点 ',
	'descDebug_level' => '调试信息的详细级别',
    'descDelay_threshold' => '如果备用服务器的延迟超过了 delay_threshold ，任何查询都将只发送到主服务器',
    'descDelegate_IP' => '虚拟 IP 地址',
    'descEnable_pool_hba' => '基于主机的认证',
    'descEnable_query_cache' => '执行查询缓存',
    'descFailover_command' => '断开一个节点时执行的命令',
    'descFailback_command' => '连接到一个节点时执行的命令',
    'descFailover_if_affected_tuples_mismatch' => '由于不认可 UPDATE/DELETE 生效的行数不同而进行故障切换',
    'descFail_over_on_backend_error' => '与服务器发生套接字错误时进行故障切换',
    'descFollow_master_command' => '在主节点发送故障切换后运行的命令',
    'descHeartbeat_destination' => '心跳信号发送目标的 IP 地址或主机名',
    'descHeartbeat_destination_port' => '心跳信号发送目标的端口号',
    'descHeartbeat_device' => '发送心跳信号到指定目标的设备名',
    'descHealth_check_database' => '执行健康检查的数据库名',
    'descHealth_check_period' => '指定下一次健康检查的时间间隔。0 表示不进行健康检查，-1 表示不等待',
    'descHealth_check_timeout' => 'Pgpool 周期性地进行“健康检查”以检测 PostgreSQL 服务器宕机，网络通信问题一类的情况，如果发往服务器的请求在本超时时间内未响应，则表示发生故障。',
    'descHealth_check_user' => '用于健康检查的 PostgreSQL 用户名',
    'descHealth_check_password' => '执行健康检查的用户的密码',
    'descHealth_check_max_retries' => '执行失效故障切换前尝试的最大失效健康检查次数',
    'descHealth_check_retry_delay' => '失效健康检查重试的间隔时间（单位为秒）',
    'descIfconfig_path' => 'ifconfig 命令的所在路径',
    'descIf_cmd_path' => 'if 命令的所在路径',
    'descIf_down_cmd' => '停用虚拟 IP 的命令',
    'descIf_up_cmd' => '启用虚拟 IP 的命令',
    'descIgnore_leading_white_space' => '如果为 true ，当 pgpool 判断这个查询是否为一个 SELECT 查询以便进行负载均衡时忽略每个查询开始的空白',
    'descInsert_lock' => '如果你复制一个有 SERIAL 数据类型列的表，有时候序列值在不同的服务器上不同，本参数用于避免序列值不同的情况',
    'descListen_addresses' => '指定用于 TCP/IP 连接的监听地址',
    'descListen_backlog_multiplier' => '前端程序连接 pgpool-II 的等待队列的长度',
    'descLoad_balance_mode' => '为 SELECT 进行负载均衡',
    'descLobj_lock_table' => '指定在复制模式中当重写 lo_create 时用于加锁的表名',
	'descLog_connections' => '如果为 true，进入的连接信息将被打印到日志中',
    'descLog_destination' => '记录日志的地方',
    'descLog_error_verbosity' => '写到服务器日志里的消息的详细程度',
	'descLog_hostname' => '如果为 true ，备机的主机名将能够用 ps 命令显示，且当 log_connections 为 true 的时候，将记录备机的主机名到日志中',
    'descLog_line_prefix' => '每行日志开头的输出格式',
    'descLog_min_messages' => '写到日志里的信息的详细程度',
    'descLog_standby_delay' => '频繁记录备机的延迟',
    'descLog_statement' => '如果为 true ，将打印所有的语句到日志中',
    'descLogdir' => '用于存放 pgpool 的日志文件的目录名',
    'descLog_per_node_statement' => '如果为 true ，以每个数据库节点的模式打印所有的语句到日志中',
    'descPid_file_name' => 'pid 文件名',
    'descMaster_slave_mode' => '运行在主/备模式中',
    'descMaster_slave_sub_mode' => '在主/备模式中进行复制的方式',
    'descMax_pool' => '每个 pgpool 服务进程保存的连接池数',
    'descMemory_cache_enabled' => '启用基于内存的查询缓存',
    'descMemqcache_method' => '内存缓存的行为',
    'descMemqcache_memcached_host' =>  'memcached 工作的主机的主机名或 IP 地址',
    'descMemqcache_memcached_port' => 'memcached 的端口',
    'descMemqcache_total_size' => '缓存的共享内存的大小 (字节)',
    'descMemqcache_max_num_cache' => '缓存的项目数',
    'descMemqcache_expire' => '查询缓存的生命周期(秒。默认为 0。0 表示没有缓存超时',
    'descMemqcache_auto_cache_invalidation' => '表被更新的时候自动删除相关的缓存',
    'descMemqcache_maxcache' => '可以被缓存的SELECT 结果的最大，单位字节（Byte）',
    'descMemqcache_cache_block_size' => '缓存块大小(字节)',
    'descMemqcache_oiddir' => '表的 OID 的目录的路径',
    'descNum_init_children' => '初始生成的 pgpool 进程数',
    'descOther_pgpool_hostname' =>  '需要监控的 pgpool-II 服务器主机',
    'descOther_pgpool_port' => '需要监控的 pgpool-II 服务器的 pgpool 服务的端口',
    'descOther_wd_port' => '需要监控的 pgpool-II 服务器的 watchdog 的端口',
    'descParallel_mode' => '在并行模式中运行',
    'descPcp_port' => 'pcp 运行的端口号',
    'descPcp_listen_addresses' => 'PCP 接受 TCP/IP 连接的主机名或者 IP 地址。',
    'descPcp_socket_dir' => 'pcp 可以连接的域套接字目录',
    'descPcp_timeout' => '当客户端连接 pcp 服务端口后达到这么久没有响应，则断开连接并停止',
    'descPgpool2_hostname' => 'Pgpool2 运行的服务器名',
    'descPool_passwd' => '用于 md5 认证的文件名',
    'descPing_path' =>  'ping 命令的路径',
    'descPort' => 'pgpool 运行的端口号',
    'descPrint_timestamp' => '如果为 true ，则每行日志都会添加时间戳',
	'descRecovery_user' => '用于在线恢复的 PostgreSQL 用户名',
	'descRecovery_password' => '用于在线恢复的 PostgreSQL 用户密码',
    'descRecovery_1st_stage_command' => '第一阶段需要执行的恢复命令',
    'descRecovery_2nd_stage_command' => '第二阶段需要执行的恢复命令',
    'descRecovery_timeout' => '等待在线恢复完成的时长，单位为秒。 0 表示不等待',
    'descRelcache_expire' => '相关缓冲区的生命期',
    'descRelcache_size' => '相关缓冲区的条目数',
    'descReplication_mode' => '如果你计划使用复制功能，设置本值为 true',
    'descReplication_stop_on_mismatch' => '当主备节点数据不一致的时候停止复制模式',
	'descReplicate_select' => '如果为 true ，复制 SELECT 查询，否则，只发送到主节点',
    'descReplication_timeout' => '在不是很严格的复制模式中，有发生死锁的风险。这里设置复制超时的时长',

    'descReset_query_list' => '在会话完成后需要执行的由分号分隔的SQL命令',
    'descSearch_primary_node_timeout' => '在发生故障切换的时候查找一个主节点的最长时间 (秒)',
    'descSerialize_accept' => '接受客户端连接时，将accept() 序列化',
    'descSocket_dir' => '可以连接到 pgpool 的套接字目录',
    'descSsl' => 'pgpool-II 与后台以 SSL 方式连接',
    'descSsl_ca_cert' => 'openssl 使用 -CAFile 指定的证书文件',
    'descSsl_ca_cert_dir' => 'openssl 使用 -CAPath 指定的证书所在的目录',
    'descSsl_cert' => '到用于连接到前端和后端的 x509 证书的完整路径',
    'descSsl_key' => '到用于连接到前端和后端的四月文件的完整路径',
    'descSr_check_database' => '执行流复制延迟检查的数据库名',
    'descSr_check_period' => '检查流复制延迟的时间间隔，单位为秒',
    'descSr_check_user' => '执行流复制检查的用户名',
    'descSr_check_password' => '执行流复制检查的用户的密码',
    'descSyslog_facility' => 'Syslog 本地设施',
    'descSyslog_ident' => 'Syslog 程序标识串',
    'descSystem_db_dbname' => '系统数据库的数据库名',
    'descSystem_db_hostname' => '系统数据库所在的主机名',
    'descSystem_db_password' => '连接到系统数据库的用户的密码',
    'descSystem_db_port' => '可以连接到系统数据库的端口号',
    'descSystem_db_schema' => '系统数据库的模式名',
    'descSystem_db_user' => '用于连接到系统数据库的用户名',
    'descTrusted_servers' => '用逗号分隔的上游服务器列表',
    'descUse_watchdog' => '激活看门狗',
    'descWd_authkey' => '用于看门狗通信的认证密钥',
    'descWd_de_escalation_command' => '在 pgpool-II 在降级为活跃状态时看门狗执行本命令',
    'descWd_escalation_command' => '在 pgpool-II 在升级为活跃状态时看门狗执行本命令',
    'descWd_heartbeat_deadtime' => '如果本选项指定的时间周期内没有收到心跳信号，则看门狗认为远端的 pgpool-II 发生故障。',
    'descWd_heartbeat_keepalive' => '发送心跳信号的间隔（秒）',
    'descWd_heartbeat_port' => '接收心跳信号的端口号',
    'descWd_hostname' => '互相监控的看门狗进程的主机名或 IP 地址',
    'descWd_interval' =>  'pgpool-II 进行存活检查的间隔 (秒)',
    'descWd_ipc_socket_dir' => '看门狗的 IPC（进程间通信）用于建立接受 UNIX 域套接字连接的目录',
    'descWd_life_point' => '在确认 pgpool-II 失效时的重试次数',
    'descWd_lifecheck_dbname' => '存活检查时连接到的数据库名',
    'descWd_lifecheck_method' => '存活检查的模式',
    'descWd_lifecheck_query' => '存活检测用的查询语句',
    'descWd_lifecheck_password' => '存活检测用使用的用户密码',
    'descWd_lifecheck_user' => '活检测用使用的用户名',
    'descWd_port' => '相监控的看门狗进的程通信端口',
    'descWd_priority' => '己的看门狗被选为主机的优先度',
    'descWhite_function_list' => '用逗号分隔的不会对数据库有写操作的函数',
    'descWhite_memqcache_table_list' => '指定一个以逗号分隔的表名的列表，用于使 SELECT 的结果被缓存',

    'errAlreadyExist' => '对象已经存在',
    'errFileNotExecutable' => '文件不可执行',
    'errFileNotFound' => '文件不存在',
    'errFileNotWritable' => '文件不可写',
    'errIllegalHostname' => '无效的主机名',
	'errIllegalPipe' => '非法的管道',
    'errInputEverything' => '请填写所有内容',
    'errInvalidOwner' => '所有者不正确',
    'errInvalidPermission' => '权限不正确',
    'errNoDefined' => '没有定义参数',
    'errNotSameLength' => 'col_list 的数组的长度和对应的 type_list 不匹配。它们在个数上应该相同',

    'errPasswordMismatch' => '密码不匹配',
    'errRequired' => '本项必填',
    'errShouldBeInteger' => '这里应该为整数',
    'errShouldBeZeroOrMore' => '这里应该为 0 或者更大的数字',
    'errSingleQuotation' => '请用单引号括起元素数组',

    'msgAddBackend' => '确定要添加新的后台吗？',
    'msgAddBackendNg' => '后台信息不完全。',
    'msgDeleteConfirm' => '您是否确定要删除它？',
    'msgHasNotLoadedNode' => '如果想使新的节点信息生效，需要重新加载配置文件。',
    'msgMasterDbConnectionError' => '主数据库连接失败',
    'msgPgpoolConfNotFound' => '找不到 pgpool.conf',
    'msgPleaseSetup' => '找不到配置文件。请执行初始化设置。',
    'msgReloadPgpool' => '是否确定需要重新加载配置文件？',
    'msgRestart' => '请重启以使改动生效',
    'msgRestartPgpool' => '是否确定需要重启 pgpool ？',
    'msgSameAsPasswordFile' => '和 password 文件中对应项目的值相同',
    'msgSameAsPgpoolFile' => '和 pgpool.conf 文件中对应项目的值相同',
    'msgStartPgpool' => '是否确定要启动 pgpool ？',
    'msgStopPgpool' => '是否确定需要停止 pgpool ？',
    'msgUpdateComplete' => '更新完成。',
    'msgUpdateCompleteInfo' => '修改本值后，您需要重新加载配置文件或者重启 pgpool-II 以使改动生效。',
    'msgUpdateFailed' => '更新失败。',
    'msgDetachConfirm' => '是否真想断开到这个节点的连接？',
    'msgReturnConfirm' => '是否真想连接到这个节点？',
    'msgRecoveryConfirm' => '是否真想恢复这个节点？',
    'msgRemoveBackend' => '是否真想删除这个后台 ？',
    'msgRPromoteConfirm' => '是否真想将这个节点提升为主机 ？',

    'strAdd' => '添加',
    'strAddBackend' => '添加新的后台',
    'strAddBackendNow' => '立刻添加新的后台（重新加载 pgpool 配置文件）',
    'strAdminPassword' => '密码',
    'strBack' => '返回',
    'strBackendPid' => '后端 PID',
    'strCancel' => '取消',
    'strChangePassword' => '修改密码',
    'strClear' => '清空',
    'strClearQueryCache' => '清空查询缓存',
    'strCmdC' => '清空查询缓存',
    'strCmdD' => '调试模式',
    'strCmdDesc' => '如果这里为空，则本选项被忽略',
    'strCmdLargeC' =>  '清除基于内存的查询缓存的OID 映射',
    'strCmdLargeD' => '忽略 pgpool_status 文件',
    'strCmdM' => '停止模式',
    'strCmdN' => '不运行在守护进程模式',
    'strCmdPcpFile' => 'pcp.conf',
    'strCmdPgpoolFile' => 'pgpool.conf',
    'strColList' => '列的列表',
    'strColName' => '用于分发的列名',
    'strCommon' => '公共',
    'strConnectionError' => '连接错误',
    'strConnTime' => '连接建立时间',
    'strConnUsed' => '连接的使用',
    'strConnUser' => '用户名',
    'strCreateTime' => '建立时间',
    'strDataError' => '数据错误',
    'strDateFormat' => 'M j G:i:s T Y',
    'strDb' => '数据库',
    'strDbName' => '数据库名',
    'strDebug' => '调试模式',
    'strDelete' => '删除',
    'strDeleted' => '被删除的行数',
    'strDetail' => '细节',
    'strDetailInfo' => '详细信息',
    'strDisconnect' => '断开连接',
    'strDistDefFunc'=> '分发函数名',
    'strDown' => '未启动',
    'strError' => '错误',
    'strErrorCode' => '错误码',
    'strErrorMessage' => '错误消息',
    'strExecute' => '执行',
    'strFeature' => '功能',
    'strFrontendConnected' => '到前端的连接',
    'strHealthCheck' => '健康检查',
    'strHelp' => '帮助',
    'strInvalidation' => '失效',
    'strIPaddress' => 'IP 地址',
    'strLanguage' => '语言',
    'strLoadBalanceMode' => '负载均衡模式',
    'strLog' => '日志',
    'strLogin' => '登录',
    'strLoginName' => '登录名',
    'strLogLatest' => '最新',
    'strLogNext' => '下一页',
    'strLogout' => '注销',
    'strLogPrev' => '上一页',
    'strLogReload' => '更新',
    'strLogShowAll' => '显示全部内容',
    'strLogShowLines' => '显示行',
    'strMasterServer' => '首要服务器',
    'strMasterSlaveMode' => '主备模式',
    'strMeasures' => '功能',
    'strNodeInfo' => '节点信息',
    'strNodeStatus' => '节点状态',
    'strNodeStatus1' => '启动. 未连接.',
    'strNodeStatus2' => '启动. 已连接.',
    'strNodeStatus3' => '未启动',
    'strNoNode' => '没有节点',
    'strOff' => '关闭',
    'strOn' => '开启',
    'strParallelMode' => '并行模式',
    'strParameter' => '参数',
    'strPassword' => '密码',
    'strPasswordConfirmation' => '确认密码',
    'strPasswordFile' => '密码文件',
    'strPcpConfFile' => 'pcp.conf 文件',
    'strPcpDir' => 'PCP 目录',
    'strPcpHostName' => 'PCP 主机名',
    'strPcpRefreshTime' => '刷新时间',
    'strPcpTimeout' => 'PCP 超时',
    'strPgConfFile' => 'pgpool.conf 文件',
    'strPgConfSetting' => 'pgpool.conf 设置',
    'strPgpool' => 'pgpool',
    'strPgpool1' => 'pgpool-I',
    'strPgpool2' => 'pgpool-II',
    'strPgpoolCommand' => 'pgpool 命令',
    'strPgpoolCommandOption' => 'pgpool 命令选项',
    'strPgpoolLogFile' => 'pgpool 日志文件',
    'strPgpoolManagementSystem' => 'pgpool-II 管理系统',
    'strPgpoolServer' => 'pgpool-II 服务器',
    'strPgpoolStatus' => 'pgpool 状态',
    'strPgpoolSummary' => '简介',
    'strPleaseWait' => '请稍等...',
    'strPort' => '端口',
    'strPrimaryRunning' => '作为首要务器运行',
    'strProcId' => '进程 ID',
    'strProcInfo' => '进程信息',
    'strProcTime' => '进程启动时间',
    'strPromote' => '提升为主机',
    'strProtocolMajorVersion' => '协议主版本号',
    'strProtocolNinorVersion' => '协议小版本号',
    'strQueryCache' => '查询缓存',
    'strQueryStr' => '查询',
    'strReloadPgpool' => '重新加载',
    'strReloadPgsql' => '重新加载配置文件',
    'strReplicationMode' => '复制模式',
    'strReset' => '重置',
    'strRestart' => '重启',
    'strRestartOption' => 'pgpool 重启选项',
    'strRestartPgpool' => '重启 pgpool',
    'strRestartPgsql' => '重启',
    'strRestartPgsqlOption' => 'PostgreSQL重启选项',
    'strRemoveBackend' => '登録削除',
    'strReturn' => '返回',
    'strRecovery' => '恢复',
    'strSchemaName' => '模式名',
    'strSearch' => '搜索',
    'strSecondaryServer' => '第二服务器',
    'strSetting' => 'pgpoolAdmin 设置',
    'strSetup' => '设置',
    'strSlonyMode' => 'Slony-I 模式',
    'strStandbyRunning' => '作为备用服务器运行',
    'strStartOption' => '启动选项',
    'strStartPgpool' => '启动 pgpool',
    'strStartPgsql' => '启动 PostgreSQL',
    'strStatus' => '状态',
    'strStopOption' => 'pgpool 停止选项',
    'strStopPgpool' => '停止 pgpool',
    'strStopPgsql' => 'PostgreSQL停止',
    'strStopPgsqlOption' => 'PostgreSQL停止选项',
    'strStoppingNow' => '停止中',
    'strStreamingRepMode' => '流复制模式',
    'strSummary' => '简介',
    'strSystemDb' => '分区规则',
    'strSystemCatalog' => '系统表信息',
    'strTable' => '表',
    'strTrustedServers' => '上游服务器列表',
    'strTypeList' => '列的类型列表',
    'strUp' => '启动',
    'strUpdate' => '更新',
    'strUnknown' => '未知',
    'strValue' => '值',
    'strVersion' => 'pgpool-II 的版本',
    'strVIP' => '虚拟 IP',
    'strWdActive' => '活跃',
    'strWdDown' => '停机',
    'strWdInit' => '未启动',
    'strWdStandby' => '备用',
    'strWeight' => '比重',

    'e1' => 'pgmgt.conf.php 未找到。',
    'e2' => '消息 catalog 未找到。',
    'e3' => 'PCP 命令发生错误。',
    'e4' => 'pgpool.conf 未找到。',
    'e5' => 'Smarty 模板文件未找到。',
    'e6' => '帮助文件未找到。',
    'e7' => 'pgpmgt.conf.php 中的配置项缺失。',
    'e8' => 'pgpool.conf 未找到 pcp_timeout 配置项。',
    'e9' => 'pgpool.conf 未找到 pcp_port 配置项。',
    'e1001' => 'PCP 命令错误。',
    'e1002' => 'pcp_node_count 命令错误。',
    'e1003' => 'pcp_node_info 命令错误。',
    'e1004' => 'pcp_proc_count 命令错误。',
    'e1005' => 'pcp_proc_info 命令错误。',
    'e1006' => 'pcp_stop_pgpool 命令错误。',
    'e1007' => 'pcp_detach_node 命令错误。',
    'e1008' => 'pgpool.conf 未找到。',
    'e1009' => 'pcp.conf 未找到。',
    'e1010' => 'pcp_attach_node 命令错误。',
    'e1011' => '日志文件未找到',
    'e1012' => 'pcp_recovery_node 命令错误。',
    'e1013' => 'pcp_watchdog_infoコマンドでエラーが発生しました',
    'e1014' => '.pcppass ファイルの読み込みに失敗しました',
    'e2001' => '数据库连接发生错误。',
    'e2002' => '执行 SELECT 时发生错误。',
    'e2003' => 'pgpool.conf 不存在。',
    'e3001' => '数据库连接发生错误。',
    'e3002' => '执行 SELECT 时发生错误。',
    'e3003' => '执行 INSERT 时发生错误。',
    'e3004' => '执行 UPDATE 时发生错误。',
    'e3005' => '执行 DELETE 时发生错误。',
    'e3006' => 'pgpool.conf 未找到。',
    'e4001' => 'pgpool.conf 未找到。',
    'e4002' => '无法读取 pgpool.conf 。',
    'e4003' => '无法写入 pgpool.conf 。',
    'e5001' => 'pgmgt.conf.php 未找到。',
    'e5002' => '无法读取 pgmgt.conf.php 。',
    'e5003' => '无法写入 pgmgt.conf.php 。',
    'e6001' => 'pcp.conf 未找到。',
    'e6002' => '无法读取 pcp.conf 。',
    'e6003' => '无法写入 pcp.conf 。',
    'e7001' => 'pcp.conf 未找到。',
    'e8001' => '无法获得详细信息。',
    'cautionaryNote' => '注：要使更新生效，你需要重新加载配置文件。另外，对 [*] 标记项目的修改，需要重启 pgpool 才能生效。',

);

?>
