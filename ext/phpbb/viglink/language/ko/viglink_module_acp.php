<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS' => 'VigLink 설정',
	'ACP_VIGLINK_SETTINGS_EXPLAIN' => 'VigLink는 포럼 사용자가 게시한 링크를 사용자 경험의 변화 없이 수익화하는 타사 서비스입니다. 사용자가 제품 또는 서비스로 연결되는 외부 링크를 통해 구매하면 판매자가 VigLink에 수수료를 지급하고, 그 일부가 phpBB 프로젝트에 기부됩니다. VigLink를 활성화하고 수익을 phpBB 프로젝트에 기부하면 오픈 소스 조직과 지속적인 재정 안정성을 지원하게 됩니다.',
	'ACP_VIGLINK_SETTINGS_CHANGE' => '“<a href="%1$s">VigLink 설정</a>” 패널에서 언제든지 이 설정을 변경할 수 있습니다.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN' => '아래에서 원하는 옵션을 선택하고 제출 버튼을 클릭하면 더 이상 이 페이지로 이동하지 않습니다.',
	'ACP_VIGLINK_ENABLE' => 'VigLink 활성화',
	'ACP_VIGLINK_ENABLE_EXPLAIN' => 'VigLink 서비스를 사용합니다.',
	'ACP_VIGLINK_EARNINGS' => '직접 수익 받기(선택 사항)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN' => 'VigLink Convert 계정에 가입하여 직접 수익을 받을 수 있습니다.',
	'ACP_VIGLINK_DISABLED_PHPBB' => 'phpBB에서 VigLink 서비스를 비활성화했습니다.',
	'ACP_VIGLINK_CLAIM' => '수익 받기',
	'ACP_VIGLINK_CLAIM_EXPLAIN' => 'phpBB 프로젝트에 기부하는 대신 VigLink로 수익화된 링크에서 발생한 포럼 수익을 직접 받을 수 있습니다. 계정 설정을 관리하려면 “Convert 계정”을 클릭하여 VigLink Convert 계정에 가입하십시오.',
	'ACP_VIGLINK_CONVERT_ACCOUNT' => 'Convert 계정',
	'ACP_VIGLINK_NO_CONVERT_LINK' => 'VigLink Convert 계정 링크를 가져올 수 없습니다.',
));
