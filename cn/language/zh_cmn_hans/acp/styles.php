<?php
/**
*
* This file is part of the phpBB Forum Software package.
* @简体中文语言　David Yin <https://www.phpbbchinese.com/>
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	'ACP_STYLES_EXPLAIN'	=> '这里您可以管理论坛上可用的风格。注意，你不能卸载<strong>prosilver</strong>风格，它是 phpBB 的默认以及主要风格。 ',

	'CANNOT_BE_INSTALLED'			=> '无法安装',
	'CONFIRM_UNINSTALL_STYLES'		=> '您确定要卸载所选风格吗？',
	'COPYRIGHT'						=> '版权',

	'DEACTIVATE_DEFAULT'		=> '您不能冻结默认风格。',
	'DELETE_FROM_FS'			=> '从文件系统中删除',
	'DELETE_STYLE_FILES_FAILED'	=> '删除风格 "%s" 文件出错。',
	'DELETE_STYLE_FILES_SUCCESS'	=> '风格 "%s" 文件已删除。',
	'DETAILS'					=> '详情',

	'INHERITING_FROM'         => '继承自',
	'INSTALL_STYLE'				=> '安装风格',
	'INSTALL_STYLES'			=> '安装风格',
	'INSTALL_STYLES_EXPLAIN'		=> '这里您可以安装新的风格(如果这个风格适用于相应的风格元素)。已经有相应的风格主题将不会被覆盖。一些风格需要预先安装风格元素，如果没有的话安装时会有提示。',
	'INVALID_STYLE_ID'			=> '无效的风格 ID。',

	'NO_MATCHING_STYLES_FOUND'	=> '没有风格匹配您的查询。',
	'NO_UNINSTALLED_STYLE'		=> '没有检测到未安装的风格',

	'PURGED_CACHE'				=> '缓存已清除。',

	'REQUIRES_STYLE'			=> '这个风格需要先安装风格 "%s"。',

	'STYLE_ACTIVATE'			=> '激活',
	'STYLE_ACTIVE'				=> '启用',
	'STYLE_DEACTIVATE'			=> '冻结',
	'STYLE_DEFAULT'				=> '设置为默认',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> '在设置默认风格之前您必须激活该风格。',
	'STYLE_ERR_INVALID_PARENT'	=> '无效父风格。',
	'STYLE_ERR_NAME_EXIST'		=> '已经存在同名的风格.',
	'STYLE_ERR_STYLE_NAME'		=> '您必须为这个风格提供一个名称.',
	'STYLE_INSTALLED'			=> '风格 "%s" 已安装。',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> '回到已安装风格列表',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> '安装更多风格',
	'STYLE_NAME'				=> '风格名称',
	'STYLE_NAME_RESERVED'		=> '风格「%s」无法安装，因为该名称已被保留。',
	'STYLE_NOT_INSTALLED'		=> '风格 "%s" 未安装。',
	'STYLE_PATH'				=> '风格路径',
	'STYLE_UNINSTALL'			=> '卸载',
	'STYLE_UNINSTALL_DEPENDENT'	=> '风格 "%s" 无法卸载因为它有一个或多个子风格。',
	'STYLE_UNINSTALLED'			=> '风格 "%s" 卸载成功。',
	'STYLE_PHPBB_VERSION'		=> 'phpBB 版本',
	'STYLE_USED_BY'				=> '用于 (包括机器人)',
	'STYLE_VERSION'				=> '风格的版本号',

	'UNINSTALL_PROSILVER'		=> '你不能卸载 “prosilver” 风格。',
	'UNINSTALL_DEFAULT'			=> '您不能卸载默认风格。',

	'BROWSE_STYLES_DATABASE'	=> '浏览风格数据库',
]);
