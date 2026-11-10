<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
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
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'ko',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> '입력한 답변이 올바르지 않습니다.',
	'RECAPTCHA_NOSCRIPT'				=> '인증 문제를 불러오려면 브라우저에서 JavaScript를 활성화하십시오.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'reCAPTCHA를 사용하려면 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>에서 계정을 만들어야 합니다.',
	'RECAPTCHA_INVISIBLE'				=> '이 CAPTCHA는 화면에 표시되지 않습니다. 정상 작동하는 경우 이 페이지 오른쪽 아래에 작은 아이콘이 나타납니다.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> '허용된 최대 로그인 시도 횟수를 초과했습니다.<br>사용자 이름과 비밀번호 외에 보이지 않는 reCAPTCHA v3를 사용하여 세션을 인증합니다.',

	'RECAPTCHA_PUBLIC'				=> '사이트 키',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> '사이트의 reCAPTCHA 키입니다. 키는 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>에서 받을 수 있습니다. reCAPTCHA v2 &gt; Invisible reCAPTCHA 배지 유형을 사용하십시오.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> '사이트의 reCAPTCHA 키입니다. 키는 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>에서 받을 수 있습니다. reCAPTCHA v3를 사용하십시오.',
	'RECAPTCHA_PRIVATE'				=> '비밀 키',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'reCAPTCHA 비밀 키입니다. 키는 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>에서 받을 수 있습니다. reCAPTCHA v2 &gt; Invisible reCAPTCHA 배지 유형을 사용하십시오.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'reCAPTCHA 비밀 키입니다. 키는 <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>에서 받을 수 있습니다. reCAPTCHA v3를 사용하십시오.',

	'RECAPTCHA_V3_DOMAIN'				=> '요청 도메인',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> '스크립트를 가져오고 요청을 확인할 때 사용할 도메인입니다.<br><samp>google.com</samp>에 접근할 수 없는 경우 <samp>recaptcha.net</samp>을 사용하십시오.',

	'RECAPTCHA_V3_METHOD'				=> '요청 방식',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> '요청을 확인할 때 사용할 방식입니다.<br>비활성화된 옵션은 현재 서버 설정에서 사용할 수 없습니다.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> '소켓',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> '기본 임계값',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> '다른 조치가 적용되지 않을 때 사용됩니다.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> '로그인 임계값',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> '게시물 임계값',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> '가입 임계값',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> '신고 임계값',
	'RECAPTCHA_V3_THRESHOLDS'					=> '임계값',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3는 점수를 반환합니다(<samp>1.0</samp>은 정상적인 상호 작용일 가능성이 매우 높고 <samp>0.0</samp>은 봇일 가능성이 매우 높습니다). 여기에서 작업별 최소 점수를 설정할 수 있습니다.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 요청을 확인할 때 사용할 수 있는 방식 중 하나를 선택해야 합니다.',
]);
