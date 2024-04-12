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
	$lang = array();
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> '"%1$s"(이하 "당사" , "%1$s", "%2$s")에 액세스하면 다음 조건에 법적으로 구속된다는 데 동의하는 것입니다. 다음 조건을 모두 법적으로 구속하는 데 동의하지 않는 경우 "%1$s"에 액세스하거나 사용하지 마십시오. 우리는 이것을 언제든지 변경할 수 있으며 최선을 다해 알려드릴 것입니다. 그러나 변경 후에도 "%1$s"를 계속 사용하는 것은 귀하가 이에 대한 법적 구속력에 동의함을 의미하므로 이를 정기적으로 직접 검토하는 것이 현명합니다. 업데이트 및/또는 수정되는 조건.
	<br><br>
	우리 포럼은 게시판 솔루션인 phpBB(이하 "그들", "phpBB 소프트웨어", "www.phpbb.com", "phpBB Limited", "phpBB Teams")에 의해 구동됩니다. "<a href="http://opensource.org/licenses/gpl-2.0.php">GNU General Public License v2</a>"(이하 "GPL")에 따라 <a href= "https://www.phpbb.com/">www.phpbb.com</a>. phpBB 소프트웨어는 인터넷 기반 토론만 가능하게 합니다. phpBB Limited는 우리가 허용하거나 허용하지 않는 콘텐츠 및/또는 행위에 대해 책임을 지지 않습니다. phpBB에 대한 자세한 내용은 <a href="https://www.phpbb.com/">https://www.phpbb.com/</a>을 참조하십시오.
	<br><br>
	귀하는 욕설, 외설, 저속, 중상, 증오, 위협, 성적 지향 또는 귀하의 국가, "%1$s"이 호스팅되는 국가 또는 국제법의 법률을 위반할 수 있는 기타 자료를 게시하지 않을 것에 동의합니다. . 그렇게 하면 귀하가 즉시 영구적으로 금지될 수 있으며 당사가 요구하는 경우 귀하의 인터넷 서비스 제공업체에 통지합니다. 이러한 조건을 시행하는 데 도움이 되도록 모든 게시물의 IP 주소가 기록됩니다. 귀하는 "%1$s"이 적절하다고 판단되는 경우 언제든지 글을 제거, 편집, 이동 또는 닫을 수 있는 권한이 있다는 데 동의합니다. 사용자로서 귀하는 입력한 모든 정보가 데이터베이스에 저장되는 데 동의합니다. 이 정보는 귀하의 동의 없이 제3자에게 공개되지 않지만 "%1$s" 또는 phpBB는 데이터 손상으로 이어질 수 있는 해킹 시도에 대해 책임을 지지 않습니다.
	',

	'PRIVACY_POLICY'		=> '이 정책은 "%1$s"가 계열사(이하 "%1$s", "%2$s") 및 phpBB(이하 "phpBB 소프트웨어", "www.phpbb.com", "phpBB Limited", "phpBB Teams")는 귀하가 사용하는 세션 동안 수집한 정보를 사용합니다.
	<br><br>
	귀하의 정보는 두 가지 방법으로 수집됩니다. 첫째, "%1$s"를 검색하면 phpBB 소프트웨어가 컴퓨터의 웹 브라우저 임시 파일에 다운로드되는 작은 텍스트 파일인 여러 쿠키를 생성합니다. 처음 두 쿠키에는 phpBB 소프트웨어에서 자동으로 할당한 사용자 식별자와 익명의 세션 식별자가 포함되어 있습니다. "%1$s" 내에서 글을 탐색하면 세 번째 쿠키가 생성되고 읽은 글을 저장하여 사용자 경험을 개선하는 데 사용됩니다.
	<br><br>
	"%1$s"을 탐색하는 동안 phpBB 소프트웨어 외부에 쿠키를 생성할 수도 있지만 이는 phpBB 소프트웨어에 의해 생성된 페이지만 다루기 위한 이 문서의 범위를 벗어납니다. 당사가 귀하의 정보를 수집하는 두 번째 방법은 귀하가 당사에 제출하는 것입니다. 이는 익명 사용자로 게시한 게시물, "%1$s"에 등록한 계정 및 등록 후 로그인한 상태에서 제출한 게시물 일 수 있으며 이에 국한되지 않습니다.
	<br><br>
	귀하의 계정에는 최소한 고유하게 식별 가능한 이름 계정 로그인에 사용되는 개인 비밀번호 및 유효한 개인 이메일 주소가 포함됩니다. "%1$s"에 있는 귀하의 계정 정보는 당사를 호스팅하는 국가에서 적용되는 데이터 보호법에 의해 보호됩니다. 등록 과정에서 "%1$s"이 요구하는 사용자 이름, 암호 및 이메일 주소 이외의 모든 정보는 "%1$s"의 재량에 따라 필수 또는 선택 사항입니다. 모든 경우에 귀하는 귀하의 계정에 있는 정보를 공개적으로 표시할 수 있는 옵션이 있습니다. 또한 귀하의 계정 내에서 phpBB 소프트웨어에서 자동으로 생성된 이메일을 선택하거나 선택 해제할 수 있습니다.
	<br><br>
	귀하의 비밀번호는 암호화 되어 안전합니다. 그러나 여러 웹사이트에서 동일한 비밀번호를 재사용하지 않는 것이 좋습니다. 귀하의 비밀번호는 "%1$s"에 있는 귀하의 계정에 액세스하는 수단이므로 신중하게 보호하고 어떠한 경우에도 "%1$s", phpBB 또는 기타 제3자와 제휴하여 합법적으로 귀하의 비밀번호를 묻지 않도록 하십시오. 계정의 비밀번호를 잊어버린 경우 phpBB 소프트웨어에서 제공하는 "비밀번호를 잊어버렸습니다" 기능을 사용할 수 있습니다. 이 프로세스에서 사용자 이름과 이메일을 제출하라는 메시지가 표시되면 phpBB 소프트웨어가 계정을 회수하기 위해 새 암호를 생성합니다.
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> '이제 계정이 활성화되었습니다. 등록해주셔서 감사합니다.',
	'ACCOUNT_ACTIVE_ADMIN'			=> '이제 계정이 활성화되었습니다.',
	'ACCOUNT_ACTIVE_PROFILE'		=> '이제 당신의 계정이  재활성화되었습니다.',
	'ACCOUNT_ADDED'					=> '등록해 주셔서 감사합니다. 당신의 계정이 생성되었습니다.',
	'ACCOUNT_COPPA'					=> '당신의 계정이 생성되었지만 승인이 필요합니다. 자세한 내용은 이메일을 확인하십시오.',
	'ACCOUNT_EMAIL_CHANGED'			=> '계정이 업데이트되었습니다. 그러나 이 보드는 이메일 변경 시 계정 재활성화가 필요합니다. 제공한 새 이메일 주소로 활성화 키가 전송되었습니다. 자세한 내용은 이메일을 확인하세요.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> '계정이 업데이트되었습니다. 그러나 이 보드는 이메일 변경 시 관리자의 계정 재활성화가 필요합니다. 이메일이 전송되었으며 계정이 다시 활성화되면 알려드립니다.',
	'ACCOUNT_INACTIVE'				=> '귀하의 계정이 생성되었습니다. 이 보드는 계정 활성화가 필요합니다. 제공한 이메일 주소로 활성화 키가 전송되었습니다. 자세한 내용은 이메일을 확인하고 스팸 메일함도 확인하십시오. 이메일 제공업체에 따라 이메일을 받는 데 시간이 걸릴 수 있습니다.',
	'ACCOUNT_INACTIVE_ADMIN'		=> '귀하의 계정이 생성되었습니다. 이 보드는 관리자 그룹의 계정 활성화가 필요합니다. 이메일이 전송되었으며 계정이 활성화되면 알려드립니다.',
	'ACTIVATION_EMAIL_SENT'			=> '활성화 이메일이 귀하의 이메일 주소로 발송되었습니다.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> '활성화 이메일이 관리자 이메일 주소로 발송되었습니다.',
	'ADD'							=> '추가',
	'ADD_BCC'						=> '추가 [BCC]',
	'ADD_FOES'						=> '새 적 추가',
	'ADD_FOES_EXPLAIN'				=> '서로 다른 줄에 여러 사용자 이름을 입력할 수 있습니다.',
	'ADD_FOLDER'					=> '폴더 추가',
	'ADD_FRIENDS'					=> '새 친구 추가',
	'ADD_FRIENDS_EXPLAIN'			=> '서로 다른 줄에 여러 사용자 이름을 입력할 수 있습니다.',
	'ADD_NEW_RULE'					=> '새 규칙 추가',
	'ADD_RULE'						=> '규칙 추가',
	'ADD_TO'						=> '추가 [To]',
	'ADD_USERS_UCP_EXPLAIN'			=> '여기에서 그룹에 새 사용자를 추가할 수 있습니다. 이 그룹이 선택한 사용자의 새 기본값이 될 것인지 여부를 선택할 수 있습니다. 각 사용자 이름을 별도의 줄에 입력하십시오.',
	'ADMIN_EMAIL'					=> '관리자가 이메일로 연락 허용',
	'AGREE'							=> '이 약관에 동의합니다',
	'ALLOW_PM'						=> '다른 사용자가 나에게 개인 메시지를 보낼 수 있도록 허용',
	'ALLOW_PM_EXPLAIN'				=> '관리자와 운영자는 항상 메시지를 보낼 수 있습니다.',
	'ALREADY_ACTIVATED'				=> '이미 계정을 활성화했습니다.',
	'ATTACHMENTS_EXPLAIN'			=> '이 게시판에 게시한 첨부파일 목록입니다.',
	'ATTACHMENTS_DELETED'			=> '첨부파일들이  삭제되었습니다.',
	'ATTACHMENT_DELETED'			=> '첨부파일이  삭제되었습니다.',
	'ATTACHMENT_LOCKED'				=> '이 글은 잠겨 있어 첨부파일을 삭제할 수 없습니다.',
	'AUTOLOGIN_SESSION_KEYS_DELETED'=> '선택한 "기억하기" 로그인 키가  삭제되었습니다.',
	'AVATAR_CATEGORY'				=> '카테고리',
	'AVATAR_DRIVER_GRAVATAR_TITLE'	=> '그라바타',
	'AVATAR_DRIVER_GRAVATAR_EXPLAIN'=> '그라바타는 여러 웹사이트에서 동일한 아바타를 유지할 수 있는 서비스입니다. 자세한 내용은 <a href="http://www.gravatar.com/">Gravatar</a>를 방문하십시오.',
	'AVATAR_DRIVER_LOCAL_TITLE'		=> '갤러리 아바타',
	'AVATAR_DRIVER_LOCAL_EXPLAIN'	=> '로컬에서 사용 가능한 아바타 세트에서 아바타를 선택할 수 있습니다.',
	'AVATAR_DRIVER_REMOTE_TITLE'	=> '원격 아바타',
	'AVATAR_DRIVER_REMOTE_EXPLAIN'	=> '다른 웹사이트의 아바타 이미지에 대한 링크.',
	'AVATAR_DRIVER_UPLOAD_TITLE'	=> '아바타 업로드',
	'AVATAR_DRIVER_UPLOAD_EXPLAIN'	=> '나만의 맞춤형 아바타를 업로드하세요.',
	'AVATAR_EXPLAIN'				=> '최대 크기; 너비: %1$s, 높이: %2$s, 파일 크기: %3$.2f KiB.',
	'AVATAR_EXPLAIN_NO_FILESIZE'	=> '최대 크기; 너비: %1$s, 높이: %2$s.',
	'AVATAR_FEATURES_DISABLED'		=> '아바타 기능은 현재 비활성화되어 있습니다.',
	'AVATAR_GALLERY'				=> '로컬 갤러리',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> '아바타를 %s에 업로드할 수 없습니다.',
	'AVATAR_NOT_ALLOWED'			=> '아바타가 허용되지 않았기 때문에 아바타를 표시할 수 없습니다.',
	'AVATAR_PAGE'					=> '페이지',
	'AVATAR_SELECT'					=> '아바타 선택',
	'AVATAR_TYPE'					=> '아바타 타입',
	'AVATAR_TYPE_NOT_ALLOWED'		=> '현재 아바타는 유형이 허용되지 않아 표시할 수 없습니다.',

	'BACK_TO_DRAFTS'			=> '저장된 초안으로 돌아가기',
	'BACK_TO_LOGIN'				=> '로그인 화면으로 돌아가기',
	'BIRTHDAY'					=> '생일',
	'BIRTHDAY_EXPLAIN'			=> '연도를 설정하면 생일을 표시할때 때 나이가 표시 됩니다.',
	'BOARD_DATE_FORMAT'			=> '내의 날짜 형식',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> '사용된 구문은 PHP <a href="https://secure.php.net/manual/function.date.php">date()</a> 함수와 동일합니다.',
	'BOARD_LANGUAGE'			=> '나의 언어',
	'BOARD_STYLE'				=> '나의보드 스타일',
	'BOARD_TIMEZONE'			=> '나의 시간존',
	'BOOKMARKS'					=> '북마크',
	'BOOKMARKS_EXPLAIN'			=> '나중에 참조할 수 있도록 글을 북마크할 수 있습니다. 삭제하려는 책갈피의 확인란을 선택한 다음 <em>표시된 책갈피 제거</em> 버튼을 누르십시오.',
	'BOOKMARKS_DISABLED'		=> '이 보드에서는 북마크가 비활성화되어 있습니다.',
	'BOOKMARKS_REMOVED'			=> '북마크가  제거되었습니다.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> '더 이상 해당 메시지를 편집하거나 삭제할 수 없습니다.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> '제거하려는 폴더로 메시지를 이동할 수 없습니다.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> '보낼 편지함에서 메시지를 이동할 수 없습니다.',
	'CANNOT_RENAME_FOLDER'		=> '이 폴더는 이름을 바꿀 수 없습니다.',
	'CANNOT_REMOVE_FOLDER'		=> '이 폴더는 제거할 수 없습니다.',
	'CHANGE_DEFAULT_GROUP'		=> '기본 그룹 변경',
	'CHANGE_PASSWORD'			=> '비밀번호 변경',
	'CLICK_GOTO_FOLDER'			=> '%1$s"%3$s" 폴더로 이동%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$s"%3$s" 폴더로 돌아가기%2$s',
	'CONFIRMATION'				=> '등록 확인',
	'CONFIRM_CHANGES'			=> '변경 확인',
	'CONFIRM_EXPLAIN'			=> '자동 등록을 방지하려면 보드에서 확인 코드를 입력해야 합니다. 코드는 아래에 표시되어야 하는 이미지에 표시됩니다. 시각 장애가 있거나 이 코드를 읽을 수 없는 경우 %s보드 관리자%s에게 문의하십시오.',
	'VC_REFRESH'				=> '확인 코드 새로 고침',
	'VC_REFRESH_EXPLAIN'		=> '코드를 읽을 수 없는 경우 버튼을 클릭하여 새 코드를 요청할 수 있습니다.',

	'CONFIRM_PASSWORD'			=> '비밀번호 확인',
	'CONFIRM_PASSWORD_EXPLAIN'	=> '위에서 비밀번호를 변경한 경우에만 비밀번호를 확인하면 됩니다.',
	'COPPA_BIRTHDAY'			=> '등록 절차를 계속하려면 생년월일을 알려주십시오.',
	'COPPA_COMPLIANCE'			=> 'COPPA 준수',
	'COPPA_EXPLAIN'				=> '제출을 클릭하면 계정이 생성됩니다. 그러나 부모 또는 보호자가 귀하의 등록을 승인할 때까지 활성화할 수 없습니다. 필요한 양식의 사본을 어디로 보내야 하는지에 대한 세부 정보를 이메일로 보내드립니다.',
	'CREATE_FOLDER'				=> '폴더추가…',
	'CURRENT_IMAGE'				=> '현재 이미지',
	'CURRENT_PASSWORD'			=> '현재 패스워드',
	'CURRENT_PASSWORD_EXPLAIN'	=> '이메일 주소나 사용자 이름을 변경하려면 현재 비밀번호를 입력해야 합니다.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => '비밀번호, 이메일 주소 또는 사용자 이름을 변경하려면 현재 비밀번호를 입력해야 합니다.',
	'CUR_PASSWORD_EMPTY'		=> '현재 비밀번호를 입력하지 않았습니다.',
	'CUR_PASSWORD_ERROR'		=> '입력한 현재 비밀번호가 올바르지 않습니다.',
	'CUSTOM_DATEFORMAT'			=> '커스텀…',

	'DEFAULT_ACTION'			=> '기본 작업',
	'DEFAULT_ACTION_EXPLAIN'	=> '위의 항목 중 어느 것도 적용할 수 없는 경우 이 작업이 트리거됩니다.',
	'DEFAULT_ADD_SIG'			=> '기본적으로 서명을 첨부합니다',
	'DEFAULT_BBCODE'			=> '기본적으로 BBCode 사용',
	'DEFAULT_NOTIFY'			=> '기본적으로 회신 시 알림',
	'DEFAULT_SMILIES'			=> '기본적으로 스마일 활성화',
	'DEFINED_RULES'				=> '정의된 규칙',
	'DELETED_TOPIC'				=> '글이 제거되었습니다.',
	'DELETE_ATTACHMENT'			=> '첨부파일 삭제',
	'DELETE_ATTACHMENTS'		=> '첨부파일 들을 삭제',
	'DELETE_ATTACHMENT_CONFIRM'	=> '이 첨부파일을 삭제하시겠습니까?',
	'DELETE_ATTACHMENTS_CONFIRM'=> '이 첨부파일들을 삭제하시겠습니까',
	'DELETE_AVATAR'				=> '이미지 삭제',
	'DELETE_COOKIES_CONFIRM'	=> '이 보드에서 설정한 쿠키를 모두 삭제하시겠습니까?',
	'DELETE_MARKED_PM'			=> '표시된 메시지 삭제',
	'DELETE_MARKED_PM_CONFIRM'	=> '표시된 모든 메시지를 삭제하시겠습니까?',
	'DELETE_OLDEST_MESSAGES'	=> '가장 오래된 메시지 삭제',
	'DELETE_MESSAGE'			=> '메시지 삭제',
	'DELETE_MESSAGE_CONFIRM'	=> '이 비공개 메시지를 삭제하시겠습니까?',
	'DELETE_MESSAGES_IN_FOLDER'	=> '제거된 폴더 내의 모든 메시지 삭제',
	'DELETE_RULE'				=> '규칙 삭제',
	'DELETE_RULE_CONFIRM'		=> '이 규칙을 삭제하시겠습니까?',
	'DEMOTE_SELECTED'			=> '선택 항목 강등',
	'DISABLE_CENSORS'			=> '단어 검열 활성화',
	'DISPLAY_GALLERY'			=> '디스플레이 갤러리',
	'DOWNLOADS'					=> '다운로드',
	'DRAFTS_DELETED'			=> '선택한 모든 초안이  삭제되었습니다.',
	'DRAFTS_EXPLAIN'			=> '여기에서 저장된 초안을 보고 편집하고 삭제할 수 있습니다.',
	'DRAFT_UPDATED'				=> '초안이 업데이트되었습니다.',

	'EDIT_DRAFT_EXPLAIN'		=> '여기에서 초안을 편집할 수 있습니다. 초안에는 첨부파일 및 설문 조사 정보가 포함되어 있지 않습니다.',
	'EMAIL_BANNED_EMAIL'		=> '입력하신 이메일 주소는 사용할 수 없습니다.',
	'EMAIL_REMIND'				=> '계정과 연결된 이메일 주소여야 합니다. 사용자 제어판을 통해 이것을 변경하지 않은 경우 계정을 등록한 이메일 주소입니다.',
	'EMAIL_TAKEN_EMAIL'			=> '입력한 이메일 주소는 이미 사용 중입니다.',
	'EMPTY_DRAFT'				=> '변경 사항을 제출하려면 메시지를 입력해야 합니다.',
	'EMPTY_DRAFT_TITLE'			=> '초안 제목을 입력해야 합니',
	'EXPORT_AS_XML'				=> 'XML으로 내보내기',
	'EXPORT_AS_CSV'				=> 'CSV으로 내보내기',
	'EXPORT_AS_CSV_EXCEL'		=> 'CSV(Excel)으로 내보내기',
	'EXPORT_AS_TXT'				=> 'TXT으로 내보내기',
	'EXPORT_AS_MSG'				=> 'MSG으로 내보내기',
	'EXPORT_FOLDER'				=> '내보내기 보기',

	'FIELD_REQUIRED'					=> '"%s" 필드를 완료해야 합니다.',
	'FIELD_TOO_SHORT'					=> array(
		1	=> '"%2$s" 필드가 너무 짧습니다. 최소 %1$d자가 필요합니다.',
		2	=> '"%2$s" 필드가 너무 짧습니다. 최소 %1$d자가 필요합니다.',
	),
	'FIELD_TOO_LONG'					=> array(
		1	=> '"%2$s" 필드가 너무 깁니다. 최대 %1$d자까지 허용됩니다.',
		2	=> '"%2$s" 필드가 너무 깁니다. 최대 %1$d자까지 허용됩니다.',
	),
	'FIELD_TOO_SMALL'					=> '"%2$s" 값이 너무 작습니다. 최소값 %1$d가 필요합니다.',
	'FIELD_TOO_LARGE'					=> '"%2$s" 값이 너무 큽니다. 최대값 %1$d가 허용됩니다.',
	'FIELD_INVALID_CHARS_INVALID'		=> '필드 "%s"에 잘못된 문자가 있습니다.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> '"%s" 필드에 잘못된 문자가 있습니다. 숫자만 허용됩니다.',
	'FIELD_INVALID_CHARS_ALPHA_DOTS'	=> '"%s" 필드에 잘못된 문자가 있습니다. 영숫자 또는 .문자가 허용됩니다.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> '"%s" 필드에 잘못된 문자가 있습니다. 영숫자 문자만 허용됩니다.',
	'FIELD_INVALID_CHARS_ALPHA_PUNCTUATION'	=> '"%s" 필드에 잘못된 문자가 있으며 영숫자 또는 _,-만 있습니다. 문자가 허용되며 첫 번째 문자는 알파벳이어야 합니다.',
	'FIELD_INVALID_CHARS_ALPHA_SPACERS'	=> '"%s" 필드에 잘못된 문자가 있습니다. 영숫자, 공백 또는 -+_[] 문자만 허용됩니다.',
	'FIELD_INVALID_CHARS_ALPHA_UNDERSCORE'	=> '"%s" 필드에 잘못된 문자가 있습니다. 영숫자 또는 _ 문자만 허용됩니다.',
	'FIELD_INVALID_CHARS_LETTER_NUM_DOTS'	=> '"%s" 필드에 잘못된 문자가 있습니다. 문자, 숫자 또는 . 문자가 허용됩니다',
	'FIELD_INVALID_CHARS_LETTER_NUM_ONLY'	=> '"%s" 필드에 잘못된 문자가 있습니다. 문자와 숫자만 허용됩니다.',
	'FIELD_INVALID_CHARS_LETTER_NUM_PUNCTUATION'	=> '"%s" 필드에 잘못된 문자가 있습니다. 문자, 숫자 또는 _,-만 있습니다. 문자가 허용되며 첫 번째 문자는 알파벳이어야 합니다.',
	'FIELD_INVALID_CHARS_LETTER_NUM_SPACERS'		=> '"%s" 필드에 잘못된 문자가 있습니다. 문자, 숫자, 공백 또는 -+_[] 문자만 허용됩니다.',
	'FIELD_INVALID_CHARS_LETTER_NUM_UNDERSCORE'		=> '"%s" 필드에 잘못된 문자가 있습니다. 문자, 숫자 또는 _ 문자만 허용됩니다.',
	'FIELD_INVALID_DATE'				=> '"%s" 필드에 잘못된 날짜가 있습니다.',
	'FIELD_INVALID_URL'					=> '"%s" 필드에 잘못된 URL이 있습니다.',
	'FIELD_INVALID_VALUE'				=> '"%s" 필드에 잘못된 값이 있습니다.',

	'FOE_MESSAGE'				=> '적의 메시지',
	'FOES_EXPLAIN'				=> '사용자를 적으로 추가하면 무시할 수 있습니다. 적으로 추가된 사용자의 게시물은 보여지지 않습니다. 적의 개인 메시지는 받을 수 있습니다. 운영자나 관리자는 무시할 수 없습니다.',
	'FOES_UPDATED'				=> '적 목록이  업데이트되었습니다.',
	'FOLDER_ADDED'				=> '폴더가 추가되었습니다.',
	'FOLDER_MESSAGE_STATUS'		=> array(
		1	=> '%1$s 중 %2$d 저장됨',
		2	=> '%1$s 중 %2$d 저장됨',
	),
	'FOLDER_NAME_EMPTY'			=> '이 폴더의 이름을 입력해야 합니다',
	'FOLDER_NAME_EXIST'			=> '<strong>%s</strong> 폴더가 이미 존재합니다.',
	'FOLDER_OPTIONS'			=> '폴더 옵션',
	'FOLDER_RENAMED'			=> '폴더 이름이 변경되었습니다.',
	'FOLDER_REMOVED'			=> '폴더가  제거되었습니다.',
	'FOLDER_STATUS_MSG'			=> array(
		1	=> '폴더를 %3$d%% 사용하였습니다.(최대 %1$s 중 %2$d 사용)',
		2	=> '폴더를 %3$d%% 사용하였습니다.(최대 %1$s 중 %2$d 사용)',
	),
	'FORWARD_PM'				=> 'PM 으로 전송',
	'FORCE_PASSWORD_EXPLAIN'	=> '게시판 검색을 계속하기 전에 비밀번호를 변경해야 합니다.',
	'FRIEND_MESSAGE'			=> '친구의 메시지',
	'FRIENDS'					=> '친구',
	'FRIENDS_EXPLAIN'			=> '자주 연락하는 회원을 친구로 추가하면 간편하게 연락할 수 있습니다. 템플릿이 지원하는 경우 친구가 작성한 게시물이 강조 표시될 수 있습니다.',
	'FRIENDS_OFFLINE'			=> '오프라인',
	'FRIENDS_ONLINE'			=> '온라인',
	'FRIENDS_UPDATED'			=> '친구 목록이  업데이트되었습니다.',
	'FULL_FOLDER_OPTION_CHANGED'=> '폴더가 가득 찼을 때 수행할 작업이  변경되었습니다.',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- 오리지널 메시지 --------',
	'FWD_SUBJECT'				=> '글: %s',
	'FWD_DATE'					=> '날짜: %s',
	'FWD_FROM'					=> '보낸이: %s',
	'FWD_TO'					=> '받는자: %s',

	'GLOBAL_ANNOUNCEMENT'		=> '글로벌 공지',

	'GRAVATAR_AVATAR_EMAIL'			=> '그라바타 이메일',
	'GRAVATAR_AVATAR_EMAIL_EXPLAIN'	=> '<a href="http://www.gravatar.com/">Gravatar</a>에 계정을 등록할 때 사용한 이메일 주소를 입력하십시오.',
	'GRAVATAR_AVATAR_SIZE'			=> '아바타 치수',
	'GRAVATAR_AVATAR_SIZE_EXPLAIN'	=> '아바타의 너비와 높이를 지정하고 자동 확인을 시도하려면 공백으로 남겨둡니다.',

	'HIDE_ONLINE'				=> '내 온라인 상태 숨기기',
	'HIDE_ONLINE_EXPLAIN'		=> '이 설정을 변경하면 다음에 게시판을 방문할 때까지 적용되지 않습니다.',
	'HOLD_NEW_MESSAGES'			=> '새 메시지 수락 안 함(사용 가능한 공간이 충분할 때까지 새 메시지가 보류됨)',
	'HOLD_NEW_MESSAGES_SHORT'	=> '새 메시지가 보류됩니다.',

	'IF_FOLDER_FULL'			=> '폴더가 꽉 찬 경우',
	'IMPORTANT_NEWS'			=> '중요 공지사항',
	'INVALID_USER_BIRTHDAY'			=> '입력한 생일은 유효한 날짜가 아닙니다.',
	'INVALID_CHARS_USERNAME'	=> '사용자 이름에 금지된 문자가 포함되어 있습니다.',
	'INVALID_EMOJIS_USERNAME'	=> '사용자 이름에 금지된 문자(이모티콘)가 포함되어 있습니다.',
	'INVALID_CHARS_NEW_PASSWORD'=> '암호에 필요한 문자가 포함되어 있지 않습니다',
	'ITEMS_REQUIRED'			=> '*로 표시된 항목은 필수 프로필 필드이며 작성해야 합니다.',

	'JOIN_SELECTED'				=> '가입 선택',

	'LANGUAGE'					=> '언어',
	'LINK_REMOTE_AVATAR'		=> '링크 오프-사이트',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> '링크하려는 아바타 이미지가 포함된 위치의 URL을 입력합니다.',
	'LINK_REMOTE_SIZE'			=> '아바타 치수',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> '아바타의 너비와 높이를 지정하고 자동 확인을 시도하려면 공백으로 남겨둡니다.',
	'LOGIN_EXPLAIN_UCP'			=> '사용자 제어판에 액세스하려면 로그인하십시오.',
	'LOGIN_LINK'					=> '외부 서비스에 귀하의 계정을 귀하의 보드 계정과 연결하거나 등록하십시오.',
	'LOGIN_LINK_EXPLAIN'			=> '이 게시판의 계정에 아직 연결되지 않은 외부 서비스로 로그인을 시도했습니다. 이제 이 계정을 기존 계정에 연결하거나 새 계정을 만들어야 합니다.',
	'LOGIN_LINK_MISSING_DATA'		=> '귀하의 계정을 외부 서비스와 연결하는 데 필요한 데이터를 사용할 수 없습니다. 로그인 프로세스를 다시 시작하십시오.',
	'LOGIN_LINK_NO_DATA_PROVIDED'	=> '외부 계정을 포럼 계정에 연결하기 위해 이 페이지에 제공된 데이터가 없습니다. 계속해서 문제가 발생하면 게시판 관리자에게 문의하십시오.',
	'LOGIN_KEY'					=> '로그인 키',
	'LOGIN_TIME'				=> '로그인 시간',
	'LOGIN_REDIRECT'			=> ' 로그인되었습니다.',
	'LOGOUT_FAILED'				=> '요청이 세션과 일치하지 않아 로그아웃되지 않았습니다. 계속해서 문제가 발생하면 게시판 관리자에게 문의하십시오.',
	'LOGOUT_REDIRECT'			=> ' 로그아웃되었습니다',

	'MARK_IMPORTANT'				=> '중요 항목으로 표시/표시해제',
	'MARKED_MESSAGE'				=> '표시된 메시지',
	'MAX_FOLDER_REACHED'			=> '허용된 사용자 정의 폴더의 최대 수에 도달했습니다.',
	'MESSAGE_BY_AUTHOR'				=> '작성자',
	'MESSAGE_COLOURS'				=> '메시지 색상',
	'MESSAGE_DELETED'				=> '메시지가  삭제되었습니다.',
	'MESSAGE_EDITED'				=> '메시지가  수정되었습니다.',
	'MESSAGE_HISTORY'				=> '메시지 히스토리',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> '이 메시지는 작성자에 의해 삭제되었습니다.',
	'MESSAGE_REPORTED_MESSAGE'		=> '보고된 메시지',
	'MESSAGE_SENT_ON'				=> 'on',
	'MESSAGE_STORED'				=> '이 메시지가  전송되었습니다.',
	'MESSAGE_TO'					=> 'To',
	'MESSAGES_DELETED'				=> '메시지가  삭제되었습니다.',
	'MOVE_DELETED_MESSAGES_TO'		=> '제거된 폴더에서 다음으로 메시지 이동',
	'MOVE_DOWN'						=> '아래로 이동',
	'MOVE_MARKED_TO_FOLDER'			=> '%s(으)로 이동 표시',
	'MOVE_PM_ERROR'					=> array(
		1	=> '메시지를 새 폴더로 이동하는 동안 오류가 발생했습니다. %1$s 중 %2$d만 이동되었습니다.',
		2	=> '메시지를 새 폴더로 이동하는 동안 오류가 발생했습니다. %1$s 중 %2$d만 이동되었습니다.',
	),
	'MOVE_TO_FOLDER'				=> '폴더로 이동',
	'MOVE_UP'						=> '위로 이동',

	'NEW_FOLDER_NAME'				=> '새 폴더 이름',
	'NEW_PASSWORD'					=> '새 비밀번호',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> '비밀번호 확인을 입력하지 않았습니다.',
	'NEW_PASSWORD_ERROR'			=> '입력하신 비밀번호가 맞지 않습니다.',

	'NOTIFICATIONS_MARK_ALL_READ'						=> '모든 알림을 읽음으로 표시',
	'NOTIFICATIONS_MARK_ALL_READ_CONFIRM'				=> '모든 알림을 읽음으로 표시하시겠습니까?',
	'NOTIFICATIONS_MARK_ALL_READ_SUCCESS'				=> '모든 알림은 읽음으로 표시되었습니다.',
	'NOTIFICATION_GROUP_MISCELLANEOUS'					=> '기타 알림',
	'NOTIFICATION_GROUP_MODERATION'						=> '검토 알림',
	'NOTIFICATION_GROUP_ADMINISTRATION'					=> '관리 알림',
	'NOTIFICATION_GROUP_POSTING'						=> '알림 게시',
	'NOTIFICATION_METHOD_BOARD'							=> '알림',
	'NOTIFICATION_METHOD_EMAIL'							=> '이메일',
	'NOTIFICATION_METHOD_JABBER'						=> 'Jabber',
	'NOTIFICATION_TYPE'									=> '알림 종류',
	'NOTIFICATION_TYPE_BOOKMARK'						=> '누군가 북마크한 글에 답글을 남깁니다.',
	'NOTIFICATION_TYPE_GROUP_REQUEST'					=> '내그룹에 누군가가 가입을 요청합니다.',
	'NOTIFICATION_TYPE_FORUM'							=> '귀하가 구독 중인 포럼의 글에 다른 사람이 답글을 남김',
	'NOTIFICATION_TYPE_IN_MODERATION_QUEUE'				=> '게시물 또는 글에 승인이 필요합니다.',
	'NOTIFICATION_TYPE_MODERATION_QUEUE'				=> '귀하의 글/게시물이 운영자에 의해 승인 또는 비승인되었습니다.',
	'NOTIFICATION_TYPE_PM'								=> '누군가 나에게 비공개 메시지를 보냅니다.',
	'NOTIFICATION_TYPE_POST'							=> '당신가 구독 중인 글에 누군가 답글을 남깁니다.',
	'NOTIFICATION_TYPE_QUOTE'							=> '누군가가 게시물에서 당신를 인용합니다',
	'NOTIFICATION_TYPE_REPORT'							=> '누군가가 게시물을 신고합니다',
	'NOTIFICATION_TYPE_REPORT_CLOSED'					=> '게시물에 대한 보고서는 운영자가 닫았습니다.',
	'NOTIFICATION_TYPE_REPORT_PM'						=> '누군가가 비공개 메시지를 신고합니다.',
	'NOTIFICATION_TYPE_REPORT_PM_CLOSED'				=> '비공개 메시지에 대한 보고서는 운영자가 닫았습니다.',
	'NOTIFICATION_TYPE_TOPIC'							=> '당신이 구독 중인 포럼에서 누군가가 글을 생성합니다.',
	'NOTIFICATION_TYPE_ADMIN_ACTIVATE_USER'				=> '활성화가 필요한 사용자',

	'NOTIFY_METHOD'					=> '알림 방법',
	'NOTIFY_METHOD_BOTH'			=> '둘다',
	'NOTIFY_METHOD_EMAIL'			=> '이메일만',
	'NOTIFY_METHOD_EXPLAIN'			=> '이 게시판을 통해 보낸 메시지를 보내는 방법입니다.',
	'NOTIFY_METHOD_IM'				=> '오직 Jabber 만',
	'NOTIFY_ON_PM'					=> '새 개인 메시지 알림',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> '친구 목록에 익명 사용자를 추가할 수 없습니다.',
	'NOT_ADDED_FRIENDS_BOTS'		=> '봇을 친구 목록에 추가할 수 없습니다.',
	'NOT_ADDED_FRIENDS_FOES'		=> '적 목록에 있는 사용자는 친구 목록에 추가할 수 없습니다.',
	'NOT_ADDED_FRIENDS_SELF'		=> '친구 목록에 자신을 추가할 수 없습니다.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> '적 목록에 관리자 및 운영자를 추가할 수 없습니다.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> '익명 사용자를 적 목록에 추가할 수 없습니다.',
	'NOT_ADDED_FOES_BOTS'			=> '봇을 적 목록에 추가할 수 없습니다.',
	'NOT_ADDED_FOES_FRIENDS'		=> '친구 목록에 있는 사용자는 적 목록에 추가할 수 없습니다.',
	'NOT_ADDED_FOES_SELF'			=> '자신을 적 목록에 추가할 수 없습니다.',
	'NOT_AGREE'						=> '이 약관에 동의하지 않습니다',
	'NOT_ENOUGH_SPACE_FOLDER'		=> '%s 대상 폴더가 꽉 찬 것 같습니다. 요청한 작업이 수행되지 않았습니다.',
	'NOT_MOVED_MESSAGES'			=> array(
		1	=> '폴더가 꽉 차서 현재 %d개의 개인 메시지가 보류 중입니다.',
		2	=> '폴더가 꽉 찼기 때문에 현재 %d개의 비공개 메시지가 보류 중입니다.',
	),
	'NO_ACTION_MODE'				=> '지정된 메시지 작업이 없습니다.',
	'NO_AUTHOR'						=> '지정된 메시지 작업이 없습니다.',
	'NO_AVATAR'						=> '선택한 아바타가 없습니다.',
	'NO_AVATAR_CATEGORY'			=> '없음',

	'NO_AUTH_DELETE_MESSAGE'		=> '비공개 메시지를 삭제할 권한이 없습니다.',
	'NO_AUTH_EDIT_MESSAGE'			=> '비공개 메시지를 편집할 권한이 없습니다.',
	'NO_AUTH_FORWARD_MESSAGE'		=> '비공개 메시지를 전달할 권한이 없습니다.',
	'NO_AUTH_GROUP_MESSAGE'			=> '그룹에 비공개 메시지를 보낼 권한이 없습니다.',
	'NO_AUTH_PROFILEINFO'			=> '프로필 정보를 변경할 권한이 없습니다.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> '보류 중인 비공개 메시지를 읽을 권한이 없습니다.',
	'NO_AUTH_READ_MESSAGE'			=> '비공개 메시지를 읽을 권한이 없습니다.',
	'NO_AUTH_PRINT_MESSAGE'			=> '비공개 메시지를 인쇄할 권한이 없습니다.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> '작성자가 삭제했기 때문에 이 메시지를 읽을 수 없습니다.',
	'NO_AUTH_SEND_MESSAGE'			=> '비공개 메시지를 보낼 권한이 없습니다.',
	'NO_AUTH_SIGNATURE'				=> '서명을 정의할 권한이 없습니다.',

	'NO_BCC_RECIPIENT'			=> '없음',
	'NO_BOOKMARKS'				=> '북마크가 없습니다.',
	'NO_BOOKMARKS_SELECTED'		=> '북마크를 선택하지 않았습니다.',
	'NO_EDIT_READ_MESSAGE'		=> '비공개 메시지는 이미 읽었기 때문에 수정할 수 없습니다.',
	'NO_EMAIL_USER'				=> '제출된 이메일/사용자 이름 정보를 찾을 수 없습니다.',
	'EMAIL_NOT_UNIQUE'			=> '지정한 이메일을 여러 사용자가 사용하고 있습니다. 사용자 이름도 지정해야 합니다.',
	'NO_FOES'					=> '현재 정의된 적이 없습니다',
	'NO_FRIENDS'				=> '현재 정의된 친구가 없습니다',
	'NO_FRIENDS_OFFLINE'		=> '오프라인 친구 없음',
	'NO_FRIENDS_ONLINE'			=> '온라인에 친구가 없습니다.',
	'NO_GROUP_SELECTED'			=> '지정된 그룹이 없습니다.',
	'NO_IMPORTANT_NEWS'			=> '중요 공지가 없습니다.',
	'NO_MESSAGE'				=> '비공개 메시지를 찾을 수 없습니다.',
	'NO_NEW_FOLDER_NAME'		=> '새 폴더 이름을 지정해야 합니다.',
	'NO_NEWER_PM'				=> '새로운 메시지가 없습니다.',
	'NO_OLDER_PM'				=> '이전 메시지가 없습니다.',
	'NO_PASSWORD_SUPPLIED'		=> '비밀번호 없이는 로그인할 수 없습니다.',
	'NO_RECIPIENT'				=> '정의된 수신자가 없습니다.',
	'NO_RESET_TOKEN'			=> '비밀번호 재설정 토큰을 제공하지 않았습니다.',
	'NO_RULES_DEFINED'			=> '정의된 규칙이 없습니다.',
	'NO_SAVED_DRAFTS'			=> '저장된 초안이 없습니다.',
	'NO_TO_RECIPIENT'			=> '없음',
	'NO_WATCHED_FORUMS'			=> '어떤 포럼에도 가입되어 있지 않습니다.',
	'NO_WATCHED_SELECTED'		=> '구독 중인 글 또는 포럼을 선택하지 않았습니다.',
	'NO_WATCHED_TOPICS'			=> '구독 중인 글이 없습니다.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> '비밀번호는 %1$s 이상이어야 하며 문자와 숫자를 혼합한 문자를 포함해야 하며 숫자를 포함해야 합니다.',
	'PASS_TYPE_ANY_EXPLAIN'		=> '길이는 %1$s 이상이어야 합니다.',
	'PASS_TYPE_CASE_EXPLAIN'	=> '비밀번호는 %1$s 이상이어야 하며 대소문자를 혼합하여 사용해야 합니다.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> '비밀번호는 최소 %1$s 이상이어야 하고, 대소문자를 혼합한 문자를 포함해야 하며, 숫자와 기호를 포함해야 합니다.',
	'PASSWORD'					=> '비밀번호',
	'PASSWORD_ACTIVATED'		=> '새 비밀번호가 활성화되었습니다.',
	'PASSWORD_RESET'			=> '비밀번호가  재설정되었습니다.',
	'PASSWORD_RESET_LINK_SENT'	=> '계정이 있는 경우 등록된 이메일 주소로 비밀번호 재설정 링크가 전송되었습니다. 이메일을 받지 못했다면 계정이 차단되었거나 계정이 활성화되지 않았거나 짧은 시간 내에 여러 번 비밀번호 재설정을 요청했거나 비밀번호를 변경할 수 없기 때문일 수 있습니다. 이러한 이유 중 하나라도 해당되는 경우 관리자에게 문의하십시오. 또한 스팸 필터를 확인하십시오.',
	'PERMISSIONS_RESTORED'		=> '원래 권한을  복원했습니다.',
	'PERMISSIONS_TRANSFERRED'	=> '<strong>%s</strong>에서 권한을  이전했습니다. 이제 이 사용자의 권한으로 게시판을 탐색할 수 있습니다.<br />관리자 권한은 이전되지 않았습니다. 언제든지 권한 집합으로 되돌릴 수 있습니다.',
	'PM_DISABLED'				=> '이 게시판에서 비공개 메시지가 비활성화되었습니다.',
	'PM_FROM'					=> '으로 부터',
	'PM_FROM_REMOVED_AUTHOR'	=> '이 메시지는 더 이상 등록되지 않은 사용자가 보냈습니다.',
	'PM_ICON'					=> 'PM 아이콘',
	'PM_INBOX'					=> '수신함',
	'PM_MARK_ALL_READ'			=> '모든 메시지를 읽은 상태로 표시',
	'PM_MARK_ALL_READ_SUCCESS'	=> '이 폴더의 모든 비공개 메시지는 읽은 것으로 표시되었습니다.',
	'PM_NO_USERS'				=> '추가를 요청한 사용자가 존재하지 않습니다.',
	'PM_OUTBOX'					=> '발신함',
	'PM_SENTBOX'				=> '보낸 메시지',
	'PM_SUBJECT'				=> '메시지 제목',
	'PM_TO'						=> '보내기',
	'PM_TOOLS'					=> '메시지 도구',
	'PM_USERS_REMOVED_NO_PERMISSION'	=> '일부 사용자는 비공개 메시지를 읽을 수 있는 권한이 없어 추가할 수 없습니다.',
	'PM_USERS_REMOVED_NO_PM'	=> '일부 사용자는 비공개 메시지 수신을 비활성화하여 추가할 수 없습니다.',
	'POST_EDIT_PM'				=> '메시지 수정',
	'POST_FORWARD_PM'			=> '메시지 전달',
	'POST_NEW_PM'				=> '메시지 작성',
	'POST_PM_LOCKED'			=> '비공개 메시지가 잠겨 있습니다.',
	'POST_PM_POST'				=> '인용 게시물',
	'POST_QUOTE_PM'				=> '인용 메시지',
	'POST_REPLY_PM'				=> '메시지에 회신',
	'PRINT_PM'					=> '인쇄 보기',
	'PREFERENCES_UPDATED'		=> '기본 설정이 업데이트되었습니다.',
	'PROFILE_INFO_NOTICE'		=> '이 정보는 다른 회원이 볼 수 있습니다. 개인 정보를 포함할 때 주의하십시오. *로 표시된 필드는 모두 작성해야 합니다.',
	'PROFILE_UPDATED'			=> '당신의 프로필이 업데이트되었습니다.',
	'PROFILE_AUTOLOGIN_KEYS'	=> '"기억하기" 로그인 키는 게시판 방문 시 자동으로 로그인됩니다. 로그아웃하면 로그아웃에 사용하는 컴퓨터에서만 기억하기 로그인 키가 삭제됩니다. 여기에서 이 사이트에 액세스하는 데 사용한 다른 컴퓨터에서 생성된 로그인 키를 기억할 수 있습니다.',
	'PROFILE_NO_AUTOLOGIN_KEYS'	=> '저장된 "기억하기" 로그인 키가 없습니다.',

	'RECIPIENT'							=> '받는 사람',
	'RECIPIENTS'						=> '수신자',
	'REGISTRATION'						=> '등록',
	'OAUTH_REGISTRATION'				=> '외부 서비스를 이용한 등록',
	'RELEASE_MESSAGES'					=> '%s모든 보류 메시지 %s을(를) 해제합니다... 충분한 공간이 있으면 적절한 폴더로 다시 정렬됩니다.',
	'REMOVE_ADDRESS'					=> '주소 삭제',
	'REMOVE_SELECTED_BOOKMARKS'			=> '선택된 북마크 제거',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> '선택한 모든 북마크를 삭제하시겠습니까?',
	'REMOVE_BOOKMARK_MARKED'			=> '표시된 북마크 제거',
	'REMOVE_FOLDER'						=> '폴더 삭제',
	'REMOVE_FOLDER_CONFIRM'				=> '이 폴더를 제거하시겠습니까?',
	'RENAME'							=> '이름 바꾸기',
	'RENAME_FOLDER'						=> '폴더 이름 바꾸기',
	'REPLIED_MESSAGE'					=> '메시지에 답장함',
	'REPLY_TO_ALL'						=> '보낸 사람과 모든 받는 사람에게 회신합니다.',
	'REPORT_PM'							=> '비공개 메시지 신고',
	'RESET_PASSWORD'					=> '비밀번호 초기화',
	'RESET_TOKEN_EXPIRED_OR_INVALID'	=> '제공한 비밀번호 재설정 토큰이 잘못되었거나 만료되었습니다.',
	'RESIGN_SELECTED'					=> '탈퇴 선택',
	'RETURN_FOLDER'						=> '%1$s이전 폴더로 돌아가기%2$s',
	'RETURN_UCP'						=> '%s사용자 제어판으로 돌아가기%s',
	'RULE_ADDED'						=> '규칙이 추가되었습니다.',
	'RULE_ALREADY_DEFINED'				=> '이 규칙은 이미 정의되었습니다.',
	'RULE_DELETED'						=> '규칙이  제거되었습니다.',
	'RULE_LIMIT_REACHED'				=> 'PM 규칙을 더 추가할 수 없습니다. 최대 규칙 수에 도달했습니다.',
	'RULE_NOT_DEFINED'					=> '규칙이 올바르게 지정되지 않았습니다.',
	'RULE_REMOVED_MESSAGES'				=> array(
		1	=> '개인 메시지 필터로 인해 %d개의 개인 메시지가 제거되었습니다.',
		2	=> '개인 메시지 필터로 인해 %d개의 개인 메시지가 제거되었습니다.',
	),

	'SAME_PASSWORD_ERROR'		=> '입력한 새 비밀번호는 현재 비밀번호와 동일합니다.',
	'SEARCH_YOUR_POSTS'			=> '게시물 표시',
	'SENT_AT'					=> '전송된',			// Used before dates in private messages
	'SHOW_EMAIL'				=> '사용자가 이메일로 연략 허용',
	'SIGNATURE_EXPLAIN'			=> '작성하는 게시물에 추가할 수 있는 텍스트 블록입니다. %d개의 글자수 제한이 있습니다.',
	'SIGNATURE_PREVIEW'			=> '당신의 서명은 게시물에 다음과 같이 표시됩니다.',
	'SIGNATURE_TOO_LONG'		=> '서명이 너무 깁니다.',
	'SELECT_CURRENT_TIME'		=> '현재시간 선택',
	'SELECT_TIMEZONE'			=> '타임존 선택',
	'SORT'						=> '종류',
	'SORT_COMMENT'				=> '파일 댓글',
	'SORT_DOWNLOADS'			=> '다운로드',
	'SORT_EXTENSION'			=> '확대',
	'SORT_FILENAME'				=> '파일 이름',
	'SORT_POST_TIME'			=> '게시 시간',
	'SORT_SIZE'					=> '파일크기',

	'TIMEZONE'					=> '타임존',
	'TIMEZONE_DATE_SUGGESTION'	=> '제안: %s',
	'TIMEZONE_INVALID'			=> '선택한 시간대가 잘못되었습니다.',
	'TO'						=> '받는 사람',
	'TO_MASS'					=> '받는 사람',
	'TO_ADD'					=> '받는 사람 추가',
	'TO_ADD_MASS'				=> '받는 사람 추가',
	'TO_ADD_GROUPS'				=> '그룹추가',
	'TOO_MANY_RECIPIENTS'		=> '너무 많은 수신자에게 비공개 메시지를 보내려고 했습니다.',
	'TOO_MANY_REGISTERS'		=> '이 세션의 최대 등록 시도 횟수를 초과했습니다. 나중에 다시 시도 해주십시오.',

	'UCP'						=> '사용자 제어판',
	'UCP_ACTIVATE'				=> '계정 활성화',
	'UCP_ADMIN_ACTIVATE'		=> '계정이 활성화되기 전에 유효한 이메일 주소를 입력해야 합니다. 관리자가 귀하의 계정을 검토하고 승인되면 귀하가 지정한 주소로 이메일을 받게 됩니다.',
	'UCP_ATTACHMENTS'			=> '첨부파일',
	'UCP_AUTH_LINK'				=> '외부 계정',
	'UCP_AUTH_LINK_ASK'			=> '현재 이 외부 서비스와 연결된 계정이 없습니다. 아래 버튼을 클릭하여 귀하의 보드 계정을 이 외부 서비스 계정에 연결하십시오.',
	'UCP_AUTH_LINK_ID'			=> '고유 식별자',
	'UCP_AUTH_LINK_LINK'		=> '링크',
	'UCP_AUTH_LINK_MANAGE'		=> '외부 계정 연결 관리',
	'UCP_AUTH_LINK_NOT_SUPPORTED'	=> '보드 계정을 외부 서비스에 연결하는 것은 이 게시판의 현재 인증 방식에서 지원되지 않습니다.',
	'UCP_AUTH_LINK_TITLE'		=> '외부 계정 연결 관리',
	'UCP_AUTH_LINK_UNLINK'		=> '언링크',
	'UCP_COPPA_BEFORE'			=> '%s 이전',
	'UCP_COPPA_ON_AFTER'		=> '%s 이후',
	'UCP_EMAIL_ACTIVATE'		=> '계정이 활성화되기 전에 유효한 이메일 주소를 입력해야 합니다. 제공한 주소로 계정 활성화 링크가 포함된 이메일을 받게 됩니다.',
	'UCP_JABBER'				=> 'Jabber 주소',
	'UCP_LOGIN_LINK'			=> '외부 계정 연결 설정',

	'UCP_MAIN'					=> '개요',
	'UCP_MAIN_ATTACHMENTS'		=> '첨부파일 관리',
	'UCP_MAIN_BOOKMARKS'		=> '북마크 관리',
	'UCP_MAIN_DRAFTS'			=> '임시 보관함 관리',
	'UCP_MAIN_FRONT'			=> '첫 페이지',
	'UCP_MAIN_SUBSCRIBED'		=> '구독 관리',

	'UCP_NO_ATTACHMENTS'		=> '게시한 파일이 없습니다.',

	'UCP_NOTIFICATION_LIST'				=> '알림 관리',
	'UCP_NOTIFICATION_LIST_EXPLAIN'		=> '모든 과거 알림을 볼 수 있습니다.',
	'UCP_NOTIFICATION_OPTIONS'			=> '알림 옵션 수정',
	'UCP_NOTIFICATION_OPTIONS_EXPLAIN'	=> '여기에서 게시판에 대해 선호하는 알림 방법을 설정할 수 있습니다.',

	'UCP_PREFS'					=> '보드 기본 설정',
	'UCP_PREFS_PERSONAL'		=> ' 글로벌 설정 편집',
	'UCP_PREFS_POST'			=> '포스팅 기본값 수정',
	'UCP_PREFS_VIEW'			=> '표시 옵션 편집',

	'UCP_PM'					=> '개인 메시지',
	'UCP_PM_COMPOSE'			=> '메시지 작성',
	'UCP_PM_DRAFTS'				=> 'PM 초안 관리',
	'UCP_PM_OPTIONS'			=> '규칙, 폴더 &amp; 설정',
	'UCP_PM_UNREAD'				=> '읽지 않은 메시지',
	'UCP_PM_VIEW'				=> '메시지 보기',

	'UCP_PROFILE'				=> '프로필',
	'UCP_PROFILE_AVATAR'		=> '아바타 편집',
	'UCP_PROFILE_PROFILE_INFO'	=> '프로필 편집',
	'UCP_PROFILE_REG_DETAILS'	=> '계정 설정 수정',
	'UCP_PROFILE_SIGNATURE'		=> '서명 수정',
	'UCP_PROFILE_AUTOLOGIN_KEYS'=> '"기억하기" 로그인 키 관리',

	'UCP_USERGROUPS'			=> '사용자그룹',
	'UCP_USERGROUPS_MEMBER'		=> '회원편집',
	'UCP_USERGROUPS_MANAGE'		=> '매니저 그룹',

	'UCP_PASSWORD_RESET_DISABLED'	=> '비밀번호 재설정 기능이 비활성화되었습니다. 계정에 액세스하는 데 도움이 필요하면 %s보드 관리자%s에게 문의하십시오.',
	'UCP_REGISTER_DISABLE'			=> '현재 새 계정을 만들 수 없습니다.',
	'UCP_RESEND'					=> '활성화 이메일 보내기',
	'UCP_WELCOME'					=> '사용자 제어판에 오신 것을 환영합니다. 여기에서 프로필, 기본 설정, 구독한 포럼 및 글을 모니터링, 확인 및 업데이트할 수 있습니다. 다른 사용자에게 메시지를 보낼 수도 있습니다(허용된 경우). 계속하기 전에 공지 사항을 모두 읽으십시오.',
	'UCP_ZEBRA'						=> '친구 &amp; 적',
	'UCP_ZEBRA_FOES'				=> '적 관리',
	'UCP_ZEBRA_FRIENDS'				=> '친구 관리',
	'UNDISCLOSED_RECIPIENT'			=> '비공개 수신자',
	'UNKNOWN_FOLDER'				=> '알 수 없는 폴더',
	'UNWATCH_MARKED'				=> '열람 해제 표시됨',
	'UPLOAD_AVATAR_FILE'			=> '컴퓨터에서 업로드',
	'UPLOAD_AVATAR_URL'				=> 'URL에서 업로드',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> '이미지가 포함된 위치의 URL을 입력합니다. 이미지가 이 사이트에 복사됩니다.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> '사용자 이름은 %1$s에서 %2$s 사이여야 하며 영숫자 문자만 사용해야 합니다.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> '사용자 이름은 %1$s에서 %2$s 사이여야 하며 영숫자, 공백 또는 -+_[] 문자를 사용해야 합니다.',
	'USERNAME_ASCII_EXPLAIN'		=> '사용자 이름은 %1$s에서 %2$s 사이여야 하며 ASCII 문자만 사용하므로 특수 기호는 사용할 수 없습니다.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> '사용자 이름은 %1$s에서 %2$s 사이여야 하며 문자 또는 숫자만 사용해야 합니다.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> '사용자 이름은 %1$s에서 %2$s 사이여야 하며 문자, 숫자, 공백 또는 -+_[] 문자를 사용해야 합니다.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> '길이는 %1$s에서 %2$s 사이여야 합니다.',
	'USERNAME_TAKEN_USERNAME'		=> '입력한 사용자 이름은 이미 사용 중입니다. 다른 사용자 이름을 선택하세요.',
	'USERNAME_DISALLOWED_USERNAME'	=> '입력한 사용자 이름에 허용되지 않거나 허용되지 않는 단어가 포함되어 있습니다. 다른 이름을 선택하세요.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> '지정한 사용자 이름을 찾을 수 없거나 활성화된 사용자가 아닙니다.',

	'VIEW_AVATARS'				=> '아바타 표시',
	'VIEW_EDIT'					=> '보기/편집',
	'VIEW_FLASH'				=> '플래시 애니메이션 표시',
	'VIEW_IMAGES'				=> '게시물 내 이미지 표시',
	'VIEW_NEXT_HISTORY'			=> '다음 PM 히스토리',
	'VIEW_NEXT_PM'				=> '다음 오후',
	'VIEW_PM'					=> '메시지 보기',
	'VIEW_PM_INFO'				=> '메시지 세부정보',
	'VIEW_PM_MESSAGES'			=> array(
		1	=> '%d 메세지',
		2	=> '%d 메세지',
	),
	'VIEW_PREVIOUS_HISTORY'		=> '이전의 PM의 히스토리',
	'VIEW_PREVIOUS_PM'			=> '이전의 PM',
	'VIEW_PROFILE'				=> '프로필보기',
	'VIEW_SIGS'					=> '서명 표시',
	'VIEW_SMILIES'				=> '스마일을 이미지로 표시',
	'VIEW_TOPICS_DAYS'			=> '이전 날짜의 글 표시',
	'VIEW_TOPICS_DIR'			=> '글 순서 방향 표시',
	'VIEW_TOPICS_KEY'			=> '다음 순서로 글 표시',
	'VIEW_POSTS_DAYS'			=> '이전 날짜의 게시물 표시',
	'VIEW_POSTS_DIR'			=> '게시물 순서 방향 표시',
	'VIEW_POSTS_KEY'			=> '다음 순서로 게시물 표시',

	'WATCHED_EXPLAIN'			=> '아래는 귀하가 구독 중인 포럼 및 글 목록입니다. 둘 중 하나의 새 게시물에 대한 알림을 받습니다. 구독을 취소하려면 포럼이나 글을 표시한 다음 <em>표시 해제</em> 버튼을 누르십시오.',
	'WATCHED_FORUMS'			=> '열람한 포럼',
	'WATCHED_TOPICS'			=> '열람한 글',
	'WRONG_ACTIVATION'			=> '제공한 활성화 키가 데이터베이스에 있는 것과 일치하지 않습니다.',

	'YOUR_DETAILS'				=> '당신의 활동',
	'YOUR_FOES'					=> '당신의 적',
	'YOUR_FOES_EXPLAIN'			=> '사용자 이름을 제거하려면 사용자 이름을 선택하고 제출하기를 클릭하십시오.',
	'YOUR_FRIENDS'				=> '당신의 친구들',
	'YOUR_FRIENDS_EXPLAIN'		=> '사용자 이름을 제거하려면 사용자 이름을 선택하고 제출하기를 클릭하십시오.',
	'YOUR_WARNINGS'				=> '당신의 경고 레벨',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> '폴더에 넣기',
		'MARK_AS_READ'		=> '읽은 상태로 표시',
		'MARK_AS_IMPORTANT'	=> '메시지 표시',
		'DELETE_MESSAGE'	=> '메시지 삭제',
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> '글이',
		'SENDER'	=> '보내는 사람이',
		'MESSAGE'	=> '메세지가',
		'STATUS'	=> '메시지 상태가',
		'TO'		=> '에게',
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> '처럼',
		'IS_NOT_LIKE'	=> '같지 않다면',
		'IS'			=> '라면',
		'IS_NOT'		=> '아니라면',
		'BEGINS_WITH'	=> '로 시작한다면',
		'ENDS_WITH'		=> '로 끝난다면',
		'IS_FRIEND'		=> '친구 라면',
		'IS_FOE'		=> '적 이라면',
		'IS_USER'		=> '사용자 라면',
		'IS_GROUP'		=> '사용자 그룹에 있다면',
		'ANSWERED'		=> '답변',
		'FORWARDED'		=> '전달',
		'TO_GROUP'		=> '기본 사용자 그룹으로',
		'TO_ME'			=> '나에게',
	),

	'GROUPS_EXPLAIN'	=> '사용자 그룹을 사용하면 게시판 관리자가 사용자를 더 잘 관리할 수 있습니다. 기본적으로 특정 그룹에 배치되며 이것이 기본 그룹입니다. 이 그룹은 사용자 이름 색상, 아바타, 순위 등과 같이 다른 사용자에게 표시되는 방법을 정의합니다. 관리자가 허용하는지 여부에 따라 기본 그룹을 변경할 수 있습니다. 당신은 또한 다른 그룹에 배치되거나 가입하도록 허용될 수 있습니다. 일부 그룹은 콘텐츠를 보거나 다른 영역에서 능력을 향상할 수 있는 추가 권한을 제공할 수 있습니다.',
	'GROUP_LEADER'		=> '리더십',
	'GROUP_MEMBER'		=> '맴버십',
	'GROUP_PENDING'		=> '보류 중인 멤버십',
	'GROUP_NONMEMBER'	=> '비회원',
	'GROUP_DETAILS'		=> '그룹 세부정보',

	'NO_LEADER'		=> '리더십 그룹 없음',
	'NO_MEMBER'		=> '멤버십 그룹 없음',
	'NO_PENDING'	=> '보류 중인 멤버십 없음',
	'NO_NONMEMBER'	=> '비회원 그룹 없음',
));