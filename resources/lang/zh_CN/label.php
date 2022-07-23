<?php

return [
    'name' => '名称',
    'email' => '邮箱',
    'image' => '图片',
    'expire_at' => '过期时间',
    'username' => '用户',
    'status' => '状态',
    'enabled' => '启用',
    'disabled' => '禁用',
    'created_at' => '创建时间',
    'updated_at' => '更新时间',
    'begin' => '开始时间',
    'end' => '结束时间',
    'uploaded' => '上传量',
    'downloaded' => '下载量',
    'ratio' => '分享率',
    'seed_time_required' => '还需做种时间',
    'inspect_time_left' => '考察剩余时间',
    'added' => '添加时间',
    'last_access' => '最后访问时间',
    'priority' => '优先级',
    'comment' => '备注',
    'duration' => '时长',
    'description' => '描述',
    'price' => '价格',
    'deadline' => '截止时间',
    'setting' => [
        'nav_text' => '设置',
        'backup' => [
            'tab_header' => '备份',
            'enabled' => '是否启用',
            'enabled_help' => '是否启用备份功能',
            'frequency' => '频率',
            'frequency_help' => '备份频率',
            'hour' => '小时',
            'hour_help' => '在这个点钟数进行备份',
            'minute' => '分钟',
            'minute_help' => "在前面点钟数的这一分钟进行备份。如果频率是按 'hourly'，此值会被忽略",
            'google_drive_client_id' => 'Google Drive client ID',
            'google_drive_client_secret' => 'Google Drive client secret',
            'google_drive_refresh_token' => 'Google Drive refresh token',
            'google_drive_folder_id' => 'Google Drive folder ID',
            'via_ftp' => '通过 FTP 保存',
            'via_ftp_help' => '是否通过 FTP 保存。如果通过，把配置信息添加到 .env 文件，参考 <a href="https://laravel.com/docs/master/filesystem#ftp-driver-configuration">Laravel 文档</a>',
            'via_sftp' => '通过 SFTP 保存',
            'via_sftp_help' => '是否通过 SFTP 保存。如果通过，把配置信息添加到 .env 文件，参考 <a href="https://laravel.com/docs/master/filesystem#sftp-driver-configuration">Laravel 文档</a>',
        ],
        'hr' => [
            'tab_header' => 'H&R',
            'mode' => '模式',
            'inspect_time' => '考察时长',
            'inspect_time_help' => '考察时长自下载完成后开始计算，单位：小时',
            'seed_time_minimum' => '达标做种时长',
            'seed_time_minimum_help' => '达标的最短做种时长，单位：小时，必须小于考察时长',
            'ignore_when_ratio_reach' => '达标分享率',
            'ignore_when_ratio_reach_help' => '达标的最小分享率',
            'ban_user_when_counts_reach' => 'H&R 数量上限',
            'ban_user_when_counts_reach_help' => 'H&R 数量达到此值，账号会被禁用',
        ],
        'seed_box' => [
            'tab_header' => 'SeedBox',
            'enabled_help' => '是否启用 SeedBox 规则',
            'no_promotion' => '无优惠',
            'no_promotion_help' => '不享受任何优惠，上传量/下载量按实际值计算',
            'max_uploaded' => '最大上传量倍数',
            'max_uploaded_help' => '总上传量最多为其体积的多少倍',
            'not_seed_box_max_speed' => '非 SeedBox 最高限速',
            'not_seed_box_max_speed_help' => '单位：Mbps。若超过此值又不能匹配 SeedBox 记录，禁用下载权限',
        ],
    ],
    'user' => [
        'label' => '用户',
        'uploaded' => '上传量',
        'downloaded' => '下载量',
        'invites' => '邀请',
        'seedbonus' => '魔力',
        'attendance_card' => '补签卡',
        'class' => '等级',
        'status' => '状态',
        'enabled' => '启用',
        'username' => '用户名',
        'invite_by' => '邀请人',
        'two_step_authentication' => '两步验证',
        'seed_points' => '做种积分',
    ],
    'medal' => [
        'label' => '勋章',
        'image_large' => '大图',
        'image_small' => '小图',
        'get_type' => '获取方式',
        'duration' => '有效时长',
        'duration_help' => '单位：天。如果留空，用户永久拥有',
    ],
    'user_medal' => [
        'label' => '用户勋章',
    ],
    'exam' => [
        'label' => '考核',
        'is_discovered' => '自动发现',
        'register_time_range' => [
            'begin' => '注册时间开始',
            'end' => '注册时间结束',
        ],
        'donated' => '是否捐赠',
        'index_formatted' => '考核指标',
        'filter_formatted' => '目标用户',
        'section_base_info' => '基本信息',
        'priority_help' => '值越大，优先级越高。当用户匹配多个考核时，优先级高的优先分配。',
        'section_time' => '时间',
        'duration_help' => '单位：天。分配给用户时，如果指定了开始/结束时间，用户考核的时间范围就是这个范围。否则，用户考核的开始时间是分配时间，结束时间是开始时间加上时长。',
        'section_target_user' => '目标用户',
        'index_required_value' => '要求量',
        'index_required_label' => '指标',
        'index_placeholder' => '上传增量/下载增量单位为：GB，平均做种时间单位为：小时',
        'index_current_value' => '当前量',
        'index_result' => '结果',
    ],
    'exam_user' => [
        'label' => '用户考核',
        'is_done' => '是否完成',
    ],
    'torrent' => [
        'label' => '种子',
        'owner' => '发布者',
        'size' => '大小',
        'ttl' => '存活时间',
        'seeders' => '做种',
        'leechers' => '下载',
        'times_completed' => '完成次数',
        'category' => '类型',
        'approval_status' => '审核状态',
        'pos_state' => '置顶',
        'sp_state' => '优惠',
        'visible' => '活种',
    ],
    'hit_and_run' => [
        'label' => '用户 H&R',
    ],
    'tag' => [
        'label' => '标签',
        'color' => '背景颜色',
        'font_color' => '字体颜色',
        'font_size' => '字体大小',
        'margin' => '外边距',
        'padding' => '内边距',
        'border_radius' => '边框圆角',
    ],
    'agent_allow' => [
        'label' => '允许客户端',
        'family' => '系列',
        'start_name' => '起始名称',
        'peer_id_start' => 'Peer ID 超始',
        'peer_id_pattern' => 'Peer ID 正则',
        'peer_id_matchtype' => 'Peer ID 匹配类型',
        'peer_id_match_num' => 'Peer ID 匹配次数',
        'agent_start' => 'Agent 起始',
        'agent_pattern' => 'Agent 正则',
        'agent_matchtype' => 'Agent 匹配类型',
        'agent_match_num' => 'Agent 匹配次数',
        'exception' => '排除',
        'allowhttps' => '允许 https',
    ],
    'agent_deny' => [
        'label' => '拒绝客戶端',
        'peer_id' => 'Peer ID',
        'agent' => 'Agent',
    ],
    'claim' => [
        'label' => '用户认领',
        'last_settle_at' => '上次结算时间',
        'seed_time_this_month' => '本月做种时间',
        'uploaded_this_month' => '本月上传量',
        'is_reached_this_month' => '本月是否达标',
    ],
    'torrent_state' => [
        'label' => '全站优惠',
        'global_sp_state' => '全站优惠',
    ],
    'role' => [
        'class' => '关联用户等级',
    ],
    'ability' => [
        'name' => '标识',
        'title' => '名称',
    ],
    'seed_box_record' => [
        'label' => 'SeedBox 记录',
        'type' => '添加类型',
        'operator' => '运营商',
        'bandwidth' => '带宽(Mbps)',
        'ip' => 'IP(段)',
        'ip_begin' => '起始 IP',
        'ip_end' => '结束 IP',
        'ip_help' => '起始 IP/结束 IP、IP(段) 二选一',
        'status' => '状态',
    ],
];