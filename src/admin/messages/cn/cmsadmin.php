<?php

return [

    'view_index_add_type' => '页面类型',
    'view_index_type_page' => '页面',
    'view_index_type_module' => '模块',
    'view_index_type_redirect' => '转发',
    'view_index_as_draft' => '是否创建为模板',
    'view_index_as_draft_help' => '您想要将新页面定义为模板吗?',
    'view_index_no' => '否',
    'view_index_yes' => '是',
    'view_index_page_title' => '页面标题',
    'view_index_page_alias' => 'URL路径段',
    'view_index_page_meta_description' => '描述',
    'view_index_page_nav_container' => '导航容器',
    'view_index_page_parent_page' => '父页面',
    'view_index_page_success' => '页面创建成功',
    'view_index_page_parent_root' => '在根路径',
    'view_index_page_use_draft' => '是否使用模板?',
    'view_index_page_select_draft' => '你想要选择一个模板吗?',
    'view_index_page_layout' => '选择布局文件',
    'view_index_page_btn_save' => '保存为新页面',
    'view_index_module_select' => '模块名称',
    'view_index_sidebar_new_page' => '创建页面',
    'view_index_sidebar_drafts' => '模板管理',
    'view_index_sidebar_move' => '移动',
    'view_update_drop_blocks' => '删除这个内容块',
    'view_update_blockcontent' => '块内容',
    'view_update_configs' => '可选配置项',
    'view_update_settings' => '设置',
    'view_update_btn_save' => '保存',
    'view_update_btn_cancel' => '放弃',
    'view_update_btn_hide_help' => 'Hide help',
    'view_update_btn_show_help' => 'Show help',
    'view_update_holder_state_on' => '折叠占位符',
    'view_update_holder_state_off' => '展开占位符',
    'view_update_is_draft_mode' => '以草稿模式编辑.',
    'view_update_is_homepage' => '主页',
    'view_update_properties_title' => '页面属性',
    'view_update_no_properties_exists' => '此页面尚未存储任何属性.',
    'view_update_draft_no_lang_error' => '模板与这个语言不匹配.',
    'view_update_no_translations' => '这页面未被翻译.',
    'view_update_page_is_module' => '这个页面是模块： <strong>module</strong>.',
    'view_update_page_is_redirect_internal' => '这个页面是内部重定向 <strong>internal redirection</strong> to <show-internal-redirection nav-id="typeData.value" />.',
    'view_update_page_is_redirect_external' => '这个页面是外部重定向 <strong>external redirection</strong> to <a ng-href="{{typeData.value}}">{{typeData.value}}</a>',
    'menu_node_cms' => '页面管理',
    'menu_node_cmssettings' => '页面设置',
    'menu_group_env' => '环境参数',
    'menu_group_item_env_container' => '集合',
    'menu_group_item_env_layouts' => '布局',
    'menu_group_elements' => '内容元素',
    'menu_group_item_elements_blocks' => '模块管理',
    'menu_group_item_elements_group' => '模块组',
    'btn_abort' => 'Abort',
    'btn_refresh' => 'Refresh',
    'btn_save' => '保存',

// added translation in 1.0.0-beta3:

    'model_navitemmodule_module_name_label' => '模块名称',
    'model_navitem_title_label' => '页面标题',
    'model_navitem_alias_label' => 'URL路径段',
    'model_navitempage_layout_label' => '布局',
    'model_navitemredirect_type_label' => '重定向类型',
    'model_navitemredirect_value_label' => '重定向目标',

    'view_index_add_title' => '添加新页面',
    'view_index_add_page_from_language' => 'Add page from language',
    'view_index_add_page_from_language_info'=>'您想在创建此页面时从其他语言复制内容吗？',
    'view_index_add_page_empty' => '添加一个空页面',
    'view_index_language_loading' => '正在加载页面',
    'draft_title' => '模板',
    'draft_text' => '编辑现有的模板。创建新页面时可以应用模板。',
    'draft_column_id' => 'ID',
    'draft_column_title' => '标题',
    'draft_column_action' => '动作',
    'draft_edit_button' => '编辑',
    'js_added_translation_ok' => '此页面的翻译已成功创建.',
    'js_added_translation_error' => '创建翻译时发生错误',
    'js_page_add_exists' => '具有相同URL的页面 "%title" 已经存在于这个组中(id=%id%).',
    'js_page_property_refresh' => '属性已更新.',
    'js_page_confirm_delete' => '你真的要删除这个页面吗?',
    'js_page_delete_error_cause_redirects' => '这个页面不能被删除。你首先必须删除所有的重定向到这个页面.',
    'js_state_online' => '%title% 发布',
    'js_state_offline' => '%title% 取消发布',
    'js_state_hidden' => '%title% 隐藏',
    'js_state_visible' => '%title% 可见',
    'js_state_is_home' => '%title% 是根页面',
    'js_state_is_not_home' => '%title% 不是根页面',
    'js_page_item_update_ok' => '«%title%» 页已更新.',
    'js_page_block_update_ok' => '«%name%» 块已更新.',
    'js_page_block_remove_ok' => '«%name%» 块已删除.',
    'js_page_block_visbility_change' => '«%name%»可见性修改成功.',

// added translation in 1.0.0-beta4:

// added translation in 1.0.0-beta5:

    'view_update_blockholder_clipboard' => '剪切板',

// added translation in 1.0.0-beta6:


    'js_page_block_delete_confirm' => '你真的要删除块 «%name%»?',
    'view_index_page_meta_keywords' => 'SEO关键字',
    'current_version' => '当前版本',
    'Initial' => '第一版',
    'view_index_page_version_chooser' => '发布版本',
    'versions_selector' => '版本',
    'page_has_no_version' => '这个页面没有版本也没有布局文件. 点击添加图标<i class="material-icons green-text">add</i> 创建一个新版本.',
    'version_edit_title'=>'编辑版本',
    'version_input_name'=>'名称',
    'version_input_layout'=>'布局',
    'version_create_title'=>'添加新版本',
    'version_create_info'=>'您可以创建任意数量的具有不同内容的页面版本。 发布一个版本，使其在网站上可见。',
    'version_input_copy_chooser'=>'要复制的版本',
    'version_create_copy'=>'创建现有版本的副本',
    'version_create_new'=>'创建一个新的空白版本',
    'js_version_update_success'=>'版本已经成功更新',
    'js_version_error_empty_fields'=>'一个或多个字段为空或具有无效值。',
    'js_version_create_success'=>'新版本已经成功创建',

// added translation in 1.0.0-beta7:


    'view_index_create_page_please_choose' => '请选择',
    'view_index_sidebar_autopreview' => '自动预览',

// added translation in 1.0.0-beta8

    'module_permission_add_new_page' => '创建页面',
    'module_permission_update_pages' => '页面编辑',
    'module_permission_edit_drafts' => '模板编辑',
    'module_permission_page_blocks' => '页面内容块',
    'js_version_delete_confirm' => '您确认要删除页面版本 «%alias%» ?',
    'js_version_delete_confirm_success' => '页面版本 %alias% 已经删除成功.',
    'log_action_insert_cms_nav_item' => 'Added new language <strong>{info}</strong>',
    'log_action_insert_cms_nav' => 'Added new page <strong>{info}</strong>',
    'log_action_insert_cms_nav_item_page_block_item' => 'Inserted a new block <strong>{info}</strong>',
    'log_action_insert_unkown' => 'Added a new row',
    'log_action_update_cms_nav_item' => 'Updated the language of page <strong>{info}</strong>',
    'log_action_update_cms_nav' => 'Updated the status of page <strong>{info}</strong>',
    'log_action_update_cms_nav_item_page_block_item' => 'Updated the content or configuration of block <strong>{info}</strong>',
    'log_action_update_unkown' => 'Updated an existing row',
    'log_action_delete_cms_nav_item' => 'Removed a language version of <strong>{info}</strong>',
    'log_action_delete_cms_nav' => 'Removed page <strong>{info}</strong>',
    'log_action_delete_cms_nav_item_page_block_item' => 'Deleted block <strong>{info}</strong>',
    'log_action_delete_unkown' => '删除行',
    'block_group_favorites' => '收藏',
    'button_create_version' => '新建版本',
    'button_update_version' => '修改版本',
    'menu_group_item_env_permission' => '页面权限',

// rc1

    'page_update_actions_deepcopy_text' => '创建当前页面的所有内容的副本。 创建的副本将包括所有语言，但只包括发布的版本.',
    'page_update_actions_deepcopy_btn' => '创建副本',

// rc2
    'model_navitem_title_tag_label' => '标题标签(SEO)',

// rc3
    'model_navitempage_empty_draft_id' => '无法从空模板创建页面.',
    'view_update_variation_select' => 'Normal',
    'menu_group_item_env_config' => '配置',
    'js_config_update_success' => '配置成功更新.',
    'config_index_httpexceptionnavid' => '指定404错误跳转到指定页面.<br /><small>提示: 创建一个404页面包含错误消息,其标记为隐藏.</small>',
    'module_permission_update_config' => 'CMS 配置',
    'module_permission_delete_pages' => '删除页面',
    'page_update_actions_deepcopy_title' => '复制页面',
    'page_update_actions_layout_title' => '布局文件',
    'page_update_actions_layout_text' => '指定要呈现的另一个布局文件，而不是主布局文件（文件扩展名“.php”可以省略，路径别名可以使用）。如果为空，则使用`main.php`作为默认值。',
    'page_update_actions_layout_file_field' => '文件名',
    'page_update_actions_modal_title' => '页面选项',
    'js_page_update_layout_save_success' => '布局文件已经更新',
    'js_page_create_copy_success' => '复制页面已经创建.',
    'view_update_offline_info' => '改变离线/在线状态。如果页面离线，则无法通过URL访问.',
    'view_update_hidden_info' => '改变可见性状态。如果一个页面被隐藏，它可以通过URL访问，但是隐藏在导航中.',
    'view_update_homepage_info' => '设置当前页面为主页.',
    'view_update_block_tooltip_copy' => '添加到剪切板',
    'view_update_block_tooltip_visible' => '页面在导航中不可见',
    'view_update_block_tooltip_invisible' => '页面在导航中可见',
    'view_update_block_tooltip_edit' => '修改',
    'view_update_block_tooltip_editcfg' => '配置',
    'view_update_block_tooltip_delete' => '删除',
    'view_update_block_tooltip_close' => '关闭',

// 1.0.0
    'cmsadmin_dashboard_lastupdate' => '最近修改页面',
    'cmsadmin_settings_homepage_title' => '默认页面',
    'cmsadmin_settings_trashpage_title' => '删除页面',
    'cmsadmin_settings_modal_title' => '页面设置',
    'cmsadmin_item_settings_titleslug' => '页面信息',
    'cmsadmin_created_at' => '创建时间',
    'cmsadmin_version_remove' => '删除版本',
    'view_index_sidebar_container_no_pages' => '空集合',
    'view_update_set_as_homepage_btn' => '设为首页',
    'cmsadmin_settings_time_title' => '页面调度',
    'cmsadmin_settings_time_title_from' => '开始日期',
    'cmsadmin_settings_time_title_till' => '截止日期',
    'view_index_page_meta_timestamp_create' => '页面创作日期',
    'nav_item_model_error_modulenacd /var   meexists' => '当前别名"{alias}"已经存在，请使用另外的别名或者重命名配置文件中的模块别名.',
    'nav_item_model_error_parentnavidcannotnull' => '父导航id不能为null，从父页面扩展路径时将发生错误。',
    'nav_item_model_error_urlsegementexistsalready' => '此别名已存在，请取另一个名称。',
    'menu_group_item_env_redirections' => '管理转页',
    'redirect_model_atr_timestamp_create' => '创建时间戳',
    'redirect_model_atr_catch_path' => '来源路径',
    'redirect_model_atr_catch_path_hint' => '应该重定向的路径.如果你想匹配所有的子路径，你可以使用‘*’通配符，就像这样 /blog*, 这将匹配/blog下的所有子路径.',
    'redirect_model_atr_catch_path_error' => '路径必须以‘/’.',
    'redirect_model_atr_redirect_path' => '目标路径',
    'redirect_model_atr_redirect_path_hint' => '您可以使用以https://或http://开头的绝对路径；另外相对于网站根目录的路径，开始于/或相对于重定向路径的路径（例如，维护重定向从/shop/start重定向到/shop/maintenance）.',
    'redirect_model_atr_redirect_status_code' => 'HTTP状态码',
    'redirect_model_atr_redirect_status_code_hint' => '重定向类型. \'redirect_model_atr_redirect_status_code_hint\'=>\'重定向类型。 当使用301：永久移动时，浏览器将缓存重定向，这将导致在不清除浏览器缓存的情况下对目标路径的更改可能不会生效。',
    'redirect_model_atr_redirect_status_code_opt_301' => '301: Moved Permanently',
    'redirect_model_atr_redirect_status_code_opt_302' => '302: Moved Temporarily',

// 1.0.1
    'module_permission_page' => 'Page Content',

// 1.0.6
    'page_update_actions_deepcopyastemplate_title' => 'Copy as Template',
    'page_update_actions_deepcopyastemplate_text' => 'Create a template of the current page with all its contents. They template will include all languages but only the published version.',
    'page_update_actions_deepcopyastemplate_btn' => 'Create Template',
    'js_page_create_copy_as_template_success' => 'The template has been created.',

// 2.0

    'model_navitem_image_id_label' => 'Image',
    'view_index_page_label_subpage' => 'Select parent page',
    'view_index_page_label_parent_nav_id' => 'Placement in navigation',
    'view_index_page_label_parent_nav_id_root' => 'On the top level',
    'view_index_page_label_parent_nav_id_subpage' => 'As a subpage',
];
