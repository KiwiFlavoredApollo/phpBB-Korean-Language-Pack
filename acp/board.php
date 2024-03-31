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
* 바로 아래 코드를 변경(편집)하거나 삭제하지 마세요.
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> '여기에서 보드의 기본 설정을 적용하며 원하는 이름과 설명을 제공할수있으며 서버 시간대 및 언어에 대한 기본값을 설정할 수 있습니다.',
	'BOARD_INDEX_TEXT'				=> '보드 색인 텍스트',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> '이 텍스트는 보드의 이동 경로에서 보드 인덱스로 표시됩니다. 지정하지 않으면 기본적으로 “보드 인덱스”로 설정됩니다.',
	'BOARD_STYLE'					=> '보드 스타일',
	'CUSTOM_DATEFORMAT'				=> '커스텀…',
	'DEFAULT_DATE_FORMAT'			=> '날짜 형식',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> '날짜 형식은 PHP <code><a href="https://secure.php.net/manual/function.date.php">date()</a></code> 함수와 동일합니다.',
	'DEFAULT_LANGUAGE'				=> '기본 언어',
	'DEFAULT_STYLE'					=> '기본 스타일',
	'DEFAULT_STYLE_EXPLAIN'			=> '신규 사용자를 위한 기본 스타일입니다.',
	'DISABLE_BOARD'					=> '보드 비활성화',
	'DISABLE_BOARD_EXPLAIN'			=> '이렇게 하면 관리자나 운영자가 아닌 사용자가 보드를 사용할 수 없게 됩니다. 원하는 경우 표시할 짧은(255자) 메시지를 입력할 수도 있습니다.',
	'DISPLAY_LAST_SUBJECT'			=> '포럼 목록에 마지막으로 추가된 게시물의 제목 표시',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> '마지막으로 추가된 게시물의 제목은 게시물에 대한 하이퍼링크와 함께 포럼 목록에 표시됩니다. 암호로 보호된 포럼 및 사용자에게 읽기 권한이 없는 포럼의 글은 표시되지 않습니다.',
	'DISPLAY_UNAPPROVED_POSTS'		=> '작성자에게 승인되지 않은 게시물 표시',
	'DISPLAY_UNAPPROVED_POSTS_EXPLAIN'	=> '승인되지 않은 게시물은 작성자가 볼 수 있습니다. 게스트 게시물에는 적용되지 않습니다.',
	'GUEST_STYLE'					=> '게스트 스타일',
	'GUEST_STYLE_EXPLAIN'			=> '게스트를 위한 보드 스타일.',
	'OVERRIDE_STYLE'				=> '사용자 스타일 재정의',
	'OVERRIDE_STYLE_EXPLAIN'		=> '사용자 및 게스트의 스타일을 "기본 스타일"에 정의된 스타일로 바꿉니다.',
	'SITE_DESC'						=> '사이트 설명',
	'SITE_HOME_TEXT'				=> '메인 웹사이트 텍스트',
	'SITE_HOME_TEXT_EXPLAIN'		=> '이 텍스트는 게시판의 탐색경로에서 웹사이트 홈페이지에 대한 링크로 표시됩니다. 지정하지 않으면 기본적으로 "HOME"으로 설정됩니다.',
	'SITE_HOME_URL'					=> '메인 웹사이트 URL',
	'SITE_HOME_URL_EXPLAIN'			=> '지정하면 이 URL에 대한 링크가 게시판의 탐색경로 앞에 추가되고 게시판 로고는 포럼 색인 대신 이 URL로 연결됩니다. 절대 URL이 필요합니다(예: <samp>http://www.phpbb.com</samp>)',
	'SITE_NAME'						=> '사이트 이름',
	'SYSTEM_TIMEZONE'				=> '게스트 타임존',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> '로그인하지 않은 사용자, 게스트, 봇에게 시간을 표시하는 데 사용할 시간대입니다. 로그인한 사용자는 등록하는 동안 시간대를 설정하고 사용자 제어판에서 변경할 수 있습니다.',
	'WARNINGS_EXPIRE'				=> '경고 기간',
	'WARNINGS_EXPIRE_EXPLAIN'		=> '경고가 사용자 기록에서 자동으로 만료되기 전에 경과할 일 수입니다. 경고를 영구적으로 만들려면 이 값을 0으로 설정하십시오.',
));

// Board Features 
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> '여기서는 여러 보드의 기능을 사용 또는 사용금지 할 수 있습니다.',

	'ALLOW_ATTACHMENTS'			=> '첨부파일 허용',
	'ALLOW_BIRTHDAYS'			=> '생일 허용',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> '프로필에 나이를 나타내고, 생일을 입력하는 것을 허용합니다.체크박스안에서 별도의 부가 셋팅으로 조절해야 함을 유념하세요.',
	'ALLOW_BOOKMARKS'			=> '글들에 북마크 허용',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> '유저는 사적으로 북마크를 사용해서 저장할 수 있습니다.',
	'ALLOW_BBCODE'				=> 'BBCode 허용',
	'ALLOW_FORUM_NOTIFY'		=> '포럼들에 감시를 허용',
	'ALLOW_NAME_CHANGE'			=> '유저 아이디 변경을 허용',
	'ALLOW_NO_CENSORS'			=> '사용할 수 없는 금지 단어를 허용',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> '유저들이 개인 메세지 및 게시글에 금지 단어를 자동으로 사용할 수 없도록 선택할 수 있습니다.',
	'ALLOW_PM_ATTACHMENTS'		=> '개인 메세지에 첨부파일을 허용합니다',      // 일부러 해석을 길게 해서 이곳을 경계선으로 삼을 수 있기 위해서.. 
	'ALLOW_PM_REPORT'			=> '사용자가 비공개 메시지를 보고하도록 허용',
	'ALLOW_PM_REPORT_EXPLAIN'	=> '이 설정이 활성화되면 사용자는 자신이 받거나 보드의 운영자에게 보낸 비공개 메시지를 보고할 수 있습니다. 이러한 개인 메시지는 운영자 제어판에서 볼 수 있습니다.',
	'ALLOW_QUICK_REPLY'			=> '빠른 답장 허용',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> '이 스위치를 사용하면 보드 전체에서 빠른 응답을 비활성화할 수 있습니다. 활성화하면 포럼별 설정이 개별 포럼에 빠른 응답을 표시할지 여부를 결정하는 데 사용됩니다.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> '모든 포럼에서 빠른 답장 제출 및 활성화',
	'ALLOW_SIG'					=> '서명 허용',
	'ALLOW_SIG_BBCODE'			=> '유저 서명안에서 BBCode 허용',       // Signature Settings 앞부분을 왜 여기다 만들어 놓은 거냐? 헷갈리잖아~ (^^)
	'ALLOW_SIG_FLASH'			=> '유저 서명안에서 <span style="color: limegreen;">[FLASH]</span> BBCode 태그 사용을 허용',
	'ALLOW_SIG_IMG'				=> '유저 서명안에서 <span style="color: limegreen;">[IMG]</span> BBCode 태그(tag) 사용을 허용',
	'ALLOW_SIG_LINKS'			=> '유저 서명안에서 링크 사용을 허용',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> '만약에 <span style="color: limegreen;">[URL]</span> BBCode 태그와 automatic/magic의 사용이 허용되지 않는다면, URLs 은 사용할 수 없습니다.',
	'ALLOW_SIG_SMILIES'			=> '유저 서명안에서 스마일 이모티콘의 사용을 허용',
	'ALLOW_SMILIES'				=> '스마일 이모티콘 허용',
	'ALLOW_TOPIC_NOTIFY'		=> '글들에 감시를 허용',
	'BOARD_PM'					=> '개인 메세지 - 쪽지',
	'BOARD_PM_EXPLAIN'			=> '모든 유저들에게 개인 메시징을 사용하거나, 사용하지 않도록 합니다.',
	'ALLOW_BOARD_NOTIFICATIONS' => '게시판 알림 허용',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> '아바타는 일반적으로 사용자가 자신과 연관시킬 수 있는 작고 고유한 이미지입니다. 스타일에 따라 일반적으로 글을 볼 때 사용자 이름 아래에 표시됩니다. 여기에서 사용자가 아바타를 정의하는 방법을 결정할 수 있습니다. 아바타를 업로드하려면 아래에 이름을 지정한 디렉토리를 만들고 웹 서버에서 쓸 수 있는지 확인해야 합니다. 파일 크기 제한은 업로드된 아바타에만 적용되며 원격으로 연결된 이미지에는 적용되지 않습니다.',

	'ALLOW_AVATARS'					=> '아바타 활성화',
	'ALLOW_AVATARS_EXPLAIN'			=> '아바타의 일반적인 사용 허용;<br>일반적으로 아바타를 비활성화하거나 특정 모드의 아바타를 비활성화하면 비활성화된 아바타가 더 이상 보드에 표시되지 않지만 사용자는 사용자 제어판에서 자신의 아바타를 계속 다운로드할 수 있습니다.',
	'ALLOW_GRAVATAR'				=> '그라바타 아바타 사용',
	'ALLOW_LOCAL'					=> '갤러리 아바타 활성화',
	'ALLOW_REMOTE'					=> '원격 아바타 활성화',
	'ALLOW_REMOTE_EXPLAIN'			=> '다른 웹사이트에서 링크된 아바타.<br><em><strong class="error">경고:</strong> 이 기능을 활성화하면 사용자가 로컬 네트워크에서만 액세스할 수 있는 파일 및 서비스의 존재를 확인할 수 있습니다. .</em>',
	'ALLOW_REMOTE_UPLOAD'			=> '원격 아바타 업로드 활성화',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> '다른 웹사이트에서 아바타 업로드를 허용합니다.<br><em><strong class="error">경고:</strong> 이 기능을 활성화하면 사용자가 로컬에서만 액세스할 수 있는 파일 및 네트워크 서비스의 존재를 확인할 수 있습니다. .</em>',
	'ALLOW_UPLOAD'					=> '아바타 업로드 활성화',
	'AVATAR_GALLERY_PATH'			=> '아바타 갤러리 경로',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> '미리 로드된 이미지에 대한 phpBB 루트 디렉토리 아래의 경로입니다. <samp>images/avatars/gallery</samp>.<br>보안상의 사유로 <samp>../</samp>와 같은 이중 점이 경로에서 제거됩니다.',
	'AVATAR_STORAGE_PATH'			=> '아바타 저장 경로',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'phpBB 루트 디렉토리 아래의 경로, 예: <samp>images/avatars/upload</samp>.<br>아바타 업로드는 이 경로가 쓰기 불가능하면 <strong>사용할 수 없습니다</strong>.<br>이중 점(예: <samp>..</strong>)</samp>는 보안상의 사유로 경로에서 제거됩니다.',
	'MAX_AVATAR_SIZE'				=> '최대 아바타 크기',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '너비 x 높이(픽셀).',
	'MAX_FILESIZE'					=> '최대 아바타 파일 크기',
	'MAX_FILESIZE_EXPLAIN'			=> '업로드된 아바타 파일의 경우. 이 값이 0이면 업로드된 파일 크기는 PHP 구성에 의해서만 제한됩니다.',
	'MIN_AVATAR_SIZE'				=> '최소 아바타 크기',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '너비 x 높이(픽셀).',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> '여기에서 개인 메시지에 대한 모든 기본 설정을 지정할 수 있습니다.',

	'ALLOW_BBCODE_PM'			=> '개인 메세지 안에서 BBCode 허용',
	'ALLOW_FLASH_PM'			=> '<span style="color: limegreen;">[FLASH]</span> BBCode 태그(tag) 사용을 허용',
	'ALLOW_FLASH_PM_EXPLAIN'	=> '만약 여기서 사용할 수 있다면,개인 메세지안에서 플래쉬를 사용할 능력이 있어야 하며,또한 권한도 유저에게 주어져야 합니다.',
	'ALLOW_FORWARD_PM'			=> '개인 메세지 전달 허용',
	'ALLOW_IMG_PM'				=> '<span style="color: limegreen;">[IMG]</span> BBCode 태그(tag) 사용을 허용',
	'ALLOW_MASS_PM'				=> '개인 메세지를 여러 유저나 그룹에게 보내는 것을 허용',
    'ALLOW_MASS_PM_EXPLAIN'		=> '설정된 그룹 페이지 범위안에서, 해당 그룹 전송을 매번 조정할 수 있습니다.',       // 3.0.3 에서 추가 된 부분
	'ALLOW_PRINT_PM'			=> '개인 메세지를 인쇄하여 보기를 허용',
	'ALLOW_QUOTE_PM'			=> '개인 메세지에 인용을 허용',
	'ALLOW_SIG_PM'				=> '개인 메세지에 서명을 허용',
	'ALLOW_SMILIES_PM'			=> '개인 메세지에 스마일 이모티콘 사용을 허용',
	'BOXES_LIMIT'				=> '각각의 편지함당 저장되는 최대 개인 메세지 갯수',
	'BOXES_LIMIT_EXPLAIN'		=> '유저는 이 숫자까지만, 편지를 각각의 편지함에 담을 수 있습니다. 이 값은 0 부터 허용하여, 무제한의 메세지가 가능하고, 기본은 50 개부터 시작합니다.',
	'BOXES_MAX'					=> '유저가 이 보드에 만들수 있는 최대 편지함 갯수',
	'BOXES_MAX_EXPLAIN'			=> '기본적으로 유저는 4 개의 편지함을 만들수 있으며,더 많이 설정해 줄 수도 있습니다.',       // 유저들에게 너무 많이 설정해 주지 마세용~
	'ENABLE_PM_ICONS'			=> '개인 메세지안에 글의 아이콘 사용을 허용',
	'FULL_FOLDER_ACTION'		=> '꽉 찬 편지함의 기본 작업',
	'FULL_FOLDER_ACTION_EXPLAIN'=> '기본 동작에서 만약 회원 편지함의 작업이 꽉 찼다고 추측한다면, 모든 설정들은 적용되지 않을 수도 있습니다. 유일한 예외는 “메세지 전송” 편지함이 여기서는, 기본 동작으로 언제나 오래된 메시지를 삭제합니다.',      // 해석이 아리송?
	'HOLD_NEW_MESSAGES'			=> '새 메세지 잠금',
	'PM_EDIT_TIME'				=> '메세지 편집 시간 제한',
	'PM_EDIT_TIME_EXPLAIN'		=> '시간 제한이 있는 개인 메세지가 아직 배달되지 않았으면,유효한 편집을 할 수 있습니다.값을 0 으로 설정하면, 이 동작은 해제됩니다.',
    'PM_MAX_RECIPIENTS'			=> '허용된 최대 수신자 수',
    'PM_MAX_RECIPIENTS_EXPLAIN'	=> '개인 메세지안에서 허용된 최대 수신자 수.만약 0 값을 입력하면, 무제한으로 갯수가 허용됩니다.이 설정은 해당 그룹 페이지 범위안의 모든 그룹에 적용할 수 있습니다.',      // 상동
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> '여기에서 게시물에 대한 모든 기본 설정을 지정할 수 있습니다.',
	'ALLOW_POST_LINKS'					=> '게시물/비공개 메시지의 링크 허용',
	'ALLOW_POST_LINKS_EXPLAIN'			=> '허용하지 않으면 <code>[URL]</code> BBCode 태그와 자동/매직 URL이 비활성화됩니다.',
	'ALLOWED_SCHEMES_LINKS'				=> '링크에서 허용된 구성표',
	'ALLOWED_SCHEMES_LINKS_EXPLAIN'		=> '사용자는 체계가 없는 URL 또는 쉼표로 구분된 허용 체계 목록 중 하나만 게시할 수 있습니다.',
	'ALLOW_POST_FLASH'					=> '게시물에서 <code>[FLASH]</code> BBCode 태그 사용 허용',
	'ALLOW_POST_FLASH_EXPLAIN'			=> '허용되지 않으면 게시물에서 BBCode 태그가 비활성화됩니다. <code>[FLASH]</code> 그렇지 않으면 권한 시스템이 <code>[FLASH]</code> BBCode 태그를 사용할 수 있는 사용자를 제어합니다.',

	'BUMP_INTERVAL'					=> '올리는 간격',
	'BUMP_INTERVAL_EXPLAIN'			=> '글에 대한 마지막 게시물과 해당 글을 올릴수 있는 기능  분, 시간 또는 일 수의 간격 입니다. 값을 0으로 설정하면 범핑이 완전히 비활성화됩니다.',
	'CHAR_LIMIT'					=> '각 게시글당 최대 글자 수',
	'CHAR_LIMIT_EXPLAIN'			=> '각 게시글안에서 허용되는 글자의 수.무제한 글자를 사용하려면 0 을 설정합니다.',
	'DELETE_TIME'					=> '삭제 제한 시간',
	'DELETE_TIME_EXPLAIN'			=> '새 게시물을 삭제할 수 있는 시간을 제한합니다. 값을 0으로 설정하면 이 동작이 비활성화됩니다.',
	'DISPLAY_LAST_EDITED'			=> '최근에 편집한 시간정보를 표시합니다',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> '마지막으로 수정한 정보를 게시물에 표시할지 선택합니다.',
	'EDIT_TIME'						=> '편집 제한 시간',
	'EDIT_TIME_EXPLAIN'				=> '새 게시물을 편집할 수 있는 시간을 제한합니다. 값을 0으로 설정하면 이 동작이 비활성화됩니다.',
	'FLOOD_INTERVAL'				=> '게시물 불러오는 간격',
	'FLOOD_INTERVAL_EXPLAIN'		=> '사용자가 새 메시지를 게시할 때까지 기다려야 하는 시간(초)입니다. 사용자가 이를 무시할 수 있도록 권한을 변경합니다.',
	'HOT_THRESHOLD'					=> '인기 글의 갯수',
	'HOT_THRESHOLD_EXPLAIN'			=> '인기 글의 주석에 필요한 글별 게시물 임계값. 인기 있는 글을 비활성화하려면 0으로 설정합니다.',
	'MAX_POLL_OPTIONS'				=> '최대 투표 옵션 수',
	'MAX_POST_FONT_SIZE'			=> '게시물당 최대 글꼴 크기',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> '게시물에 허용되는 최대 글꼴 크기입니다. 글꼴 크기에 제한이 없으면 0으로 설정합니다.',
	'MAX_POST_IMG_HEIGHT'			=> '게시물당 최대 플래시 높이',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> '게시물에서 플래시 파일의 최대 높이입니다. 크기에 제한이 없으면 0으로 설정합니다.',
	'MAX_POST_IMG_WIDTH'			=> '게시물당 최대 플래시 너비',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> '게시물에서 플래시 파일의 최대 너비입니다. 크기에 제한이 없으면 0으로 설정합니다.',
	'MAX_POST_URLS'					=> '게시물당 최대 링크 수',
	'MAX_POST_URLS_EXPLAIN'			=> '게시물의 최대 URL 수입니다. 무제한 링크의 경우 0으로 설정합니다.',
	'MIN_CHAR_LIMIT'				=> '게시물/메시지당 최소 글자수',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> '사용자가 게시물/비공개 메시지에 입력해야 하는 최소 문자 수입니다. 이 설정의 최소값은 1입니다.',
	'POSTING'						=> '게시물',
	'POSTS_PER_PAGE'				=> '페이지당 게시물',
	'QUOTE_DEPTH_LIMIT'				=> '각 게시글당 인용 글을 중첩할 수 있는 최대 갯수',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> '게시글안에서 인용한 글들을 최대로 중첩되게 사용할 수 있는 갯수.무제한 중첩 형태를 원하면 0 으로 설정하세요.',
	'SMILIES_LIMIT'					=> '게시물당 최대 스마일',
	'SMILIES_LIMIT_EXPLAIN'			=> '게시물의 최대 스마일 수입니다. 무제한 스마일의 경우 0으로 설정합니다.',
	'SMILIES_PER_PAGE'				=> '페이지당 스마일',
	'TOPICS_PER_PAGE'				=> '페이지당 글',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> '여기서 서명에 관한 기본 셋팅을 모두 설정할 수 있습니다.',

	'MAX_SIG_FONT_SIZE'				=> '서명 글꼴 최대 사이즈',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> '유저 서명안에서 허용되는 최대 글꼴 크기입니다.무제한 크기는 0 으로 설정하세요. 기본은 200%',
	'MAX_SIG_IMG_HEIGHT'			=> '서명 이미지 최대 높이(세로)',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> '유저 서명안에서 이미지/플래쉬 파일의 최대 높이.무제한 높이를 사용하려면 0 으로 설정하세요.',
	'MAX_SIG_IMG_WIDTH'				=> '서명 이미지 최대 너비(가로)',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> '유저 서명안에서 이미지/플래쉬 파일의 최대 너비.무제한 너비를 사용하려면 0 으로 설정하세요.',
	'MAX_SIG_LENGTH'				=> '서명 최대 글자 수',
	'MAX_SIG_LENGTH_EXPLAIN'		=> '유저 서명안에서 쓸수 있는 최대 글자 수. 기본값은 255자',
	'MAX_SIG_SMILIES'				=> '매 서명마다 스마일 이모티콘의 최대 갯수',
	'MAX_SIG_SMILIES_EXPLAIN'		=> '유저 서명안에서 허용되는 최대 스마일 이모티콘의 수.무제한 스마일 이모티콘을 사용하려면 0 으로 설정하세요.',
	'MAX_SIG_URLS'					=> '서명 최대 링크 갯수',
	'MAX_SIG_URLS_EXPLAIN'			=> '유저 서명안에서 연결을 사용할 수 있는 최대 갯수.무제한 링크를 원하면 0 으로 설정하세요. 기본은 5개',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> '여기에서 등록 및 프로필 관련 설정을 정의할 수 있습니다.',

	'ACC_ACTIVATION'				=> '계정 활성화',
	'ACC_ACTIVATION_EXPLAIN'		=> '이것은 사용자가 보드에 즉시 액세스할 수 있는지 또는 확인이 필요한지 여부를 결정합니다. 새 등록을 완전히 비활성화할 수도 있습니다. <em>사용자 또는 관리자 활성화를 사용하려면 "게시판 전체 이메일"을 활성화해야 합니다.</em>',
	'ACC_ACTIVATION_WARNING'		=> '현재 선택한 활성화 방법을 사용하려면 이메일을 활성화해야 합니다. 그렇지 않으면 등록이 비활성화됩니다. 다른 활성화 방법을 선택하거나 이메일을 다시 활성화하는 것이 좋습니다.',
	'NEW_MEMBER_POST_LIMIT'			=> '신규 회원 게시물 제한',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> '새 사용자는 이 게시물 수에 도달할 때까지 <em>신규 등록 사용자</em> 그룹에 속합니다. 이 그룹을 사용하여 PM 시스템을 사용하지 못하도록 하거나 게시물을 검토할 수 있습니다. <strong>0 값은 이 기능을 비활성화합니다.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> '미인증 사용자 그룹을 기본값으로 설정',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> '"예"로 설정하고 새 회원 게시 제한이 지정되면 미인증 사용자는 <em>신규 등록 사용자</em> 그룹에 포함될 뿐만 아니라 이 그룹도 기본 그룹이 됩니다. 이는 그룹 기본 순위 및/또는 사용자가 상속하는 아바타를 할당하려는 경우에 유용할 수 있습니다.',

	'ACC_ADMIN'					=> '관리자 승인',
	'ACC_DISABLE'				=> '등록 비활성화',
	'ACC_NONE'					=> '활성화 없음(즉시 액세스)',
	'ACC_USER'					=> '사용자승인 (이메일 확인)',
//	'ACC_USER_ADMIN'			=> '사용자 + Admin',
	'ALLOW_EMAIL_REUSE'			=> '이메일 주소 재사용 허용',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> '다른 사용자가 동일한 이메일 주소로 등록할 수 있습니다.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA 팩스번호',
	'COPPA_MAIL'				=> 'COPPA 우편번호',
	'COPPA_MAIL_EXPLAIN'		=> '부모님이 COPPA 등록 양식을 보낼 우편 주소입니다.',
	'ENABLE_COPPA'				=> 'COPPA 활성화',
	'ENABLE_COPPA_EXPLAIN'		=> '이것은 U.S. COPPA.에 따라 유저들이 13세인지 또는 그 이상인지에 대한 선언이 필요합니다. 만약 이것이 특정 그룹들에서 COPPA를 사용할 수 없다면, 더 이상 표시되지 않습니다.',
	'MAX_CHARS'					=> '최대',
	'MIN_CHARS'					=> '최소',
	'NO_AUTH_PLUGIN'			=> '적합한 인증 플러그인이 없습니다.',
	'PASSWORD_LENGTH'			=> '비밀번호 길이',
	'PASSWORD_LENGTH_EXPLAIN'	=> '비밀번호안에 최소 및 최대 문자 수를 정합니다.',
	'REG_LIMIT'					=> '등록 시도',
	'REG_LIMIT_EXPLAIN'			=> '사용자가 해당 세션에서 잠기기 전에 안티 스팸봇 작업을 해결하기 위해 시도할 수 있는 횟수입니다.',
	'USERNAME_ALPHA_ONLY'		=> '영숫자만',
	'USERNAME_ALPHA_SPACERS'	=> '영숫자 및 공백',
	'USERNAME_ASCII'			=> 'ASCII (국제 유니코드 없음)',
	'USERNAME_LETTER_NUM'		=> '모든 문자와 숫자',
	'USERNAME_LETTER_NUM_SPACERS'	=> '모든 문자, 숫자 및 공백',
	'USERNAME_CHARS'			=> '사용자 이름 글자 수 제한',
	'USERNAME_CHARS_ANY'		=> '모든 문자',
	'USERNAME_CHARS_EXPLAIN'	=> '사용자 이름에 사용할 수 있는 문자 유형을 제한하고 공백 문자는 공백, -, +, _, [AND]입니다.',
	'USERNAME_LENGTH'			=> '유저네임 길이',
	'USERNAME_LENGTH_EXPLAIN'	=> '유저네임의 최소 및 최대 문자 수를 정합니다.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> '일반 신디케이션 피드 설정',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> '이 모듈은 외부 피드에서 읽을 수 있도록 게시물의 BBCode를 구문 분석하여 다양한 ATOM 피드를 사용할 수 있도록 합니다',

	'ACP_FEED_GENERAL'					=> '일반 피드 설정',
	'ACP_FEED_POST_BASED'				=> '게시물 기반 피드 설정',
	'ACP_FEED_TOPIC_BASED'				=> '글 기반 피드 설정',
	'ACP_FEED_SETTINGS_OTHER'			=> '기타 피드 및 설정',

	'ACP_FEED_ENABLE'					=> '피드 활성화',
	'ACP_FEED_ENABLE_EXPLAIN'			=> '전체 보드에 대한 ATOM 피드를 켜거나 끕니다.<br>이 옵션을 비활성화하면 아래 옵션이 어떻게 설정되어 있든 모든 피드가 꺼집니다.',
	'ACP_FEED_LIMIT'					=> '항목 수',
	'ACP_FEED_LIMIT_EXPLAIN'			=> '표시할 최대 피드 항목 수입니다.',

	'ACP_FEED_OVERALL'					=> '보드 전체 피드 사용',
	'ACP_FEED_OVERALL_EXPLAIN'			=> '게시판 전체의 새 게시물.',
	'ACP_FEED_FORUM'					=> '포럼별 피드 활성화',
	'ACP_FEED_FORUM_EXPLAIN'			=> '단일 포럼 및 하위 포럼 새 게시물.',
	'ACP_FEED_TOPIC'					=> '글별 피드 활성화',
	'ACP_FEED_TOPIC_EXPLAIN'			=> '단일 글 새 게시물.',

	'ACP_FEED_TOPICS_NEW'				=> '새글 피드 사용',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> '첫 번째 게시물을 포함하여 마지막으로 생성된 글을 표시하는 "새글" 피드를 활성화합니다.',
	'ACP_FEED_TOPICS_ACTIVE'			=> '활성 글 피드 사용',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> '마지막 게시물을 포함하여 마지막 활성 글을 표시하는 "활성 글" 피드를 활성화합니다.',
	'ACP_FEED_NEWS'						=> '뉴스 피드',
	'ACP_FEED_NEWS_EXPLAIN'				=> '이 포럼에서 첫 번째 게시물을 가져옵니다. 뉴스 피드를 비활성화하려면 포럼을 선택하지 마십시오.<br><samp>CTRL</samp>을 누른 상태에서 클릭하여 여러 포럼을 선택하십시오.',

	'ACP_FEED_OVERALL_FORUMS'			=> '포럼 피드 활성화',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> '포럼 목록을 표시하는 "모든 포럼" 피드를 활성화합니다.',

	'ACP_FEED_HTTP_AUTH'				=> 'HTTP 인증 허용',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> '사용자가 피드 URL에 <samp>auth=http</samp> 매개변수를 추가하여 게스트 사용자에게 숨겨진 콘텐츠를 수신할 수 있도록 하는 HTTP 인증을 활성화합니다. 일부 PHP 설정에서는 .htaccess 파일을 추가로 변경해야 합니다. 지침은 해당 파일에서 찾을 수 있습니다.',
	'ACP_FEED_ITEM_STATISTICS'			=> '항목 통계',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> '피드 항목 아래에 개별 통계 표시<br>(예: 작성자, 날짜 및 시간, 답글, 조회수)',
	'ACP_FEED_EXCLUDE_ID'				=> '이 포럼 제외',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> '이러한 콘텐츠는 <strong>피드에 포함되지 않습니다</strong>. 모든 포럼에서 데이터를 가져오려면 포럼을 선택하지 마십시오.<br><samp>CTRL</samp>을 누른 상태에서 클릭하여 여러 포럼을 선택/선택 취소합니다',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> '여기에서 스팸봇의 자동화된 양식 제출을 차단하도록 설계된 플러그인을 선택하고 구성할 수 있습니다. 이러한 플러그인은 일반적으로 컴퓨터가 풀기 어렵게 설계된 테스트인 <em>CAPTCHA</em>로 사용자에게 도전하여 작동합니다.',
	'ACP_VC_EXT_GET_MORE'					=> '추가(및 더 나은) 스팸 방지 플러그인을 보려면 <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com 확장 프로그램 데이터베이스</strong>를 방문하세요. </a>. 게시판의 스팸 방지에 대한 자세한 내용은 <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com 기술 자료</strong></a>를 참조하세요.',
	'AVAILABLE_CAPTCHAS'					=> '사용 가능한 플러그인',
	'CAPTCHA_UNAVAILABLE'					=> '요구 사항이 충족되지 않아 플러그인을 선택할 수 없습니다.',
	'CAPTCHA_GD'							=> 'GD 이미지',
	'CAPTCHA_GD_3D'							=> 'GD 3D 이미지',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> '전경 노이즈',
	'CAPTCHA_GD_EXPLAIN'					=> 'GD를 사용하여 고급 스팸봇 방지 이미지를 만듭니다.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> '전경 노이즈를 사용하여 이미지를 읽기 어렵게 만듭니다.',
	'CAPTCHA_GD_X_GRID'						=> '배경 노이즈 x축',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> '이미지를 읽기 어렵게 만들려면 이 값을 더 낮게 설정하십시오. 0은 x축 배경 노이즈를 비활성화합니다.',
	'CAPTCHA_GD_Y_GRID'						=> '배경 노이즈 y축',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> '이미지를 읽기 어렵게 만들려면 이 값을 더 낮게 설정하십시오. 0은 y축 배경 잡음을 비활성화합니다',
	'CAPTCHA_GD_WAVE'						=> '웨이브 왜곡',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> '이것은 이미지에 웨이브 왜곡을 적용합니다.',
	'CAPTCHA_GD_3D_NOISE'					=> '3D 노이즈 개체 추가',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> '이렇게 하면 문자 위에 이미지에 추가 개체가 추가됩니다.',
	'CAPTCHA_GD_FONTS'						=> '다른 글꼴 사용',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> '이 설정은 사용되는 다양한 문자 모양의 수를 제어합니다. 기본 모양을 사용하거나 변경된 문자를 도입할 수 있습니다. 소문자 추가도 가능합니다.',
	'CAPTCHA_FONT_DEFAULT'					=> '기본',
	'CAPTCHA_FONT_NEW'						=> '새로운 모양',
	'CAPTCHA_FONT_LOWER'					=> '소문자도 사용',
	'CAPTCHA_NO_GD'							=> '심플한 이미지',
	'CAPTCHA_PREVIEW_MSG'					=> '변경 사항이 저장되지 않았습니다. 이것은 미리보기일 뿐입니다.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> '현재 선택을 사용하는 것처럼 보이는 플러그인.',

	'CAPTCHA_SELECT'						=> '설치된 플러그인',
	'CAPTCHA_SELECT_EXPLAIN'				=> '드롭다운에는 보드에서 인식하는 플러그인이 있습니다. 회색 항목은 현재 사용할 수 없으며 사용하기 전에 구성이 필요할 수 있습니다.',
	'CAPTCHA_CONFIGURE'						=> '플러그인 구성',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> '선택한 플러그인의 설정을 변경합니다.',
	'CONFIGURE'								=> '구성',
	'CAPTCHA_NO_OPTIONS'					=> '이 플러그인에는 구성 옵션이 없습니다',

	'VISUAL_CONFIRM_POST'					=> '게스트 게시물에 대한 스팸봇 대책 활성화',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> '자동 게시를 방지하려면 게스트 사용자가 스팸봇 방지 작업을 통과해야 합니다.',
	'VISUAL_CONFIRM_REG'					=> '등록에 대한 스팸봇 대책 활성화',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> '자동 등록을 방지하기 위해 신규 사용자는 스팸봇 방지 작업을 통과해야 합니다.',
	'VISUAL_CONFIRM_REFRESH'				=> '사용자가 스팸봇 방지 작업을 새로 고칠 수 있도록 허용',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> '등록하는 동안 현재 작업을 해결할 수 없는 경우 사용자가 새로운 스팸봇 방지 작업을 요청할 수 있습니다. 일부 플러그인은 이 옵션을 지원하지 않을 수 있습니다.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> '이러한 세부 정보는 사용자 브라우저에 쿠키를 보내는 데 사용되는 데이터를 정의합니다. 대부분의 경우 쿠키 설정의 기본값이면 충분합니다. 변경해야 하는 경우 주의하여 변경해야 하는 경우 잘못된 설정으로 인해 사용자가 로그인하지 못할 수 있습니다. 사용자가 게시판에 계속 로그인하는 데 문제가 있는 경우 <strong><a href="https://www.phpbb .com/support/go/cookie-settings">phpBB.com 기술 자료 - 잘못된 쿠키 설정 수정</a></strong>.',

	'COOKIE_DOMAIN'				=> '쿠키 도메인',
	'COOKIE_DOMAIN_EXPLAIN'		=> '대부분의 경우 쿠키 도메인은 선택 사항입니다. 확실하지 않으면 공백으로 두십시오.<br><br> 보드가 다른 소프트웨어와 통합되었거나 여러 도메인이 있는 경우 쿠키 도메인을 결정하기 위해 다음을 수행해야 합니다. <i>example.com</i> 및 <i>forums.example.com</i> 또는 <i>forums.example.com</i> 및 <i>blog.example과 같은 항목이 있는 경우 .com</i>. 공통 도메인인 <i>example.com</i>을 찾을 때까지 하위 도메인을 제거합니다. 이제 공통 도메인 앞에 점을 추가하고 .example.com을 입력합니다(시작 부분의 점 참고).',
	'COOKIE_NAME'				=> '쿠키 이름',
	'COOKIE_NAME_EXPLAIN'		=> '이것은 당신이 원하는 무엇이든 될 수 있습니다. 원본으로 만드십시오. 쿠키 설정이 변경될 때마다 쿠키의 이름이 변경되어야 합니다.',
	'COOKIE_NOTICE'				=> '쿠키 주의사항',
	'COOKIE_NOTICE_EXPLAIN'		=> '활성화하면 귀하의 보드를 방문할 때 쿠키 알림이 사용자에게 표시됩니다. 이것은 보드의 내용과 활성화된 확장에 따라 법에 의해 요구될 수 있습니다.',
	'COOKIE_PATH'				=> '쿠키 경로',
	'COOKIE_PATH_EXPLAIN'		=> '이것은 일반적으로 스크립트 경로와 같거나 사이트 도메인 전체에서 쿠키에 액세스할 수 있도록 하기 위한 단순히 슬래시입니다.',
	'COOKIE_SECURE'				=> '쿠키 보안',
	'COOKIE_SECURE_EXPLAIN'		=> '서버가 SSL을 통해 실행 중인 경우 활성화로 설정하고 그렇지 않으면 비활성화된 상태로 둡니다. 이것을 활성화하고 SSL을 통해 실행하지 않으면 리디렉션 중에 서버 오류가 발생합니다.',
	'ONLINE_LENGTH'				=> '온라인 시간 범위 보기',
	'ONLINE_LENGTH_EXPLAIN'		=> '비활성 사용자가 "온라인 상태인 사람" 목록에 표시되지 않는 시간(분)입니다. 이 값이 높을수록 목록을 생성하는 데 필요한 처리량이 커집니다.',
	'SESSION_LENGTH'			=> '세션 길이',
	'SESSION_LENGTH_EXPLAIN'	=> '세션은 이 시간(초) 후에 만료됩니다.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> '여기에서 연락처 페이지를 활성화 및 비활성화하고 페이지에 표시되는 텍스트를 추가할 수도 있습니다.',

	'CONTACT_US_ENABLE'				=> '연락처 페이지 활성화',
	'CONTACT_US_ENABLE_EXPLAIN'		=> '이 페이지에서는 사용자가 게시판 관리자에게 이메일을 보낼 수 있습니다. 게시판 전체 이메일 옵션도 활성화해야 합니다. 이 옵션은 일반 &gt; 클라이언트 커뮤니케이션 &gt; 이메일 설정.',

	'CONTACT_US_INFO'				=> '연락처 정보',
	'CONTACT_US_INFO_EXPLAIN'		=> '메시지는 연락처 페이지에 표시됩니다',
	'CONTACT_US_INFO_PREVIEW'		=> '연락처 페이지 정보 - 미리보기',
	'CONTACT_US_INFO_UPDATED'		=> '연락처 페이지 정보가 업데이트되었습니다.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> '특정 보드 기능을 활성화 및 비활성화하여 필요한 처리량을 줄일 수 있습니다. 대부분의 서버에서는 기능을 비활성화할 필요가 없습니다. 그러나 특정 시스템이나 공유 호스팅 환경에서는 실제로 필요하지 않은 기능을 비활성화하는 것이 좋습니다. 또한 보드가 오프라인으로 전환되는 시스템 로드 및 활성 세션에 대한 제한을 지정할 수 있습니다.',

	'ALLOW_CDN'						=> '타사 콘텐츠 전송 네트워크 사용 허용',
	'ALLOW_CDN_EXPLAIN'				=> '이 설정을 사용하면 일부 파일은 귀하의 서버가 아닌 외부 제3자 서버에서 제공됩니다. 이렇게 하면 서버에 필요한 네트워크 대역폭이 줄어들지만 일부 보드 관리자에게는 개인 정보 문제가 발생할 수 있습니다. 기본 phpBB 설치에는 Google 콘텐츠 전송 네트워크에서 "jQuery" 및 글꼴 "Open Sans" 로드가 포함됩니다.',
	'ALLOW_LIVE_SEARCHES'			=> '실시간 검색 허용',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> '이 설정을 사용하면 사용자가 보드 전체의 특정 필드에 입력할 때 키워드 제안이 제공됩니다.',
	'CUSTOM_PROFILE_FIELDS'			=> '사용자 정의 프로필 필드',
	'LIMIT_LOAD'					=> '시스템 부하 불러오기',
	'LIMIT_LOAD_EXPLAIN'			=> '시스템의 1분 평균 부하가 이 값을 초과하면 보드가 자동으로 오프라인 상태가 됩니다. 값 1.0은 한 프로세서의 ~100% 사용률과 같습니다. 이것은 UNIX 기반 서버와 이 정보에 액세스할 수 있는 곳에서만 작동합니다. 여기서 값은 phpBB가 로드 제한을 얻을 수 없는 경우 0으로 재설정됩니다.',
	'LIMIT_SESSIONS'				=> '세션 제한',
	'LIMIT_SESSIONS_EXPLAIN'		=> '세션 수가 1분 이내에 이 값을 초과하면 보드가 오프라인 상태가 됩니다. 무제한 세션의 경우 0으로 설정합니다.',
	'LOAD_CPF_MEMBERLIST'			=> '스타일이 회원 목록에 사용자 정의 프로필 필드를 표시하도록 허용',
	'LOAD_CPF_PM'					=> '개인 메시지에 사용자 정의 프로필 필드 표시',
	'LOAD_CPF_VIEWPROFILE'			=> '사용자 프로필에 사용자 정의 프로필 필드 표시',
	'LOAD_CPF_VIEWTOPIC'			=> '글 페이지에 사용자 정의 프로필 필드 표시',
	'LOAD_USER_ACTIVITY'			=> '사용자 활동 표시',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> '사용자 프로필 및 사용자 제어판에 활성 글/포럼을 표시합니다. 백만 개 이상의 게시물이 있는 게시판에서는 이 기능을 비활성화하는 것이 좋습니다.',
	'LOAD_USER_ACTIVITY_LIMIT'		=> '사용자의 활동 게시물 제한',
	'LOAD_USER_ACTIVITY_LIMIT_EXPLAIN'	=> '이 수 이상의 게시물이 있는 사용자에게는 활성 글/포럼이 표시되지 않습니다. 제한을 비활성화하려면 0으로 설정합니다.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> '알림 만료 읽기',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => '읽기 알림이 자동으로 삭제되기 전에 경과할 일 수입니다. 알림을 영구적으로 만들려면 이 값을 0으로 설정하십시오.',
	'RECOMPILE_STYLES'				=> '오래된 스타일 구성 요소 재컴파일',
	'RECOMPILE_STYLES_EXPLAIN'		=> '파일 시스템에서 업데이트된 스타일 구성 요소를 확인하고 다시 컴파일하십시오.',
	'YES_ACCURATE_PM_BUTTON'			=> '글 페이지에서 권한별 PM 버튼 활성화',
	'YES_ACCURATE_PM_BUTTON_EXPLAIN'	=> '이 설정을 사용하면 비공개 메시지를 읽을 수 있는 사용자의 프로필 게시에만 비공개 메시지 버튼이 표시됩니다.',
	'YES_ANON_READ_MARKING'			=> '게스트에 대한 글 표시 사용',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> '게스트에 대한 읽음/읽지 않음 상태 정보를 저장합니다. 비활성화된 경우 게시물은 항상 손님용으로 표시됩니다.',
	'YES_BIRTHDAYS'					=> '생일 목록 활성화',
	'YES_BIRTHDAYS_EXPLAIN'			=> '비활성화하면 생일 목록이 더 이상 표시되지 않습니다. 이 설정을 적용하려면 생일 기능도 활성화해야 합니다.',
	'YES_JUMPBOX'					=> '점프박스 표시 활성화',
	'YES_MODERATORS'				=> '운영자 표시 활성화',
	'YES_ONLINE'					=> '온라인 사용자 목록 활성화',
	'YES_ONLINE_EXPLAIN'			=> '색인, 포럼 및 글 페이지에 온라인 사용자 정보를 표시합니다.',
	'YES_ONLINE_GUESTS'				=> 'viewonline에서 온라인 게스트 목록 활성화',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'viewonline에서 게스트 사용자 정보 표시를 허용합니다.',
	'YES_ONLINE_TRACK'				=> '사용자 온라인/오프라인 정보 표시 활성화',
	'YES_ONLINE_TRACK_EXPLAIN'		=> '프로필 및 글 페이지에서 사용자에 대한 온라인 정보를 표시합니다.',
	'YES_POST_MARKING'				=> '점으로 된 글 활성화',
	'YES_POST_MARKING_EXPLAIN'		=> '사용자가 글에 게시했는지 여부를 나타냅니다.',
	'YES_READ_MARKING'				=> '서버 측 글 표시 사용',
	'YES_READ_MARKING_EXPLAIN'		=> '쿠키가 아닌 데이터베이스에 읽음/읽지 않음 상태 정보를 저장합니다.',
	'YES_UNREAD_SEARCH'				=> '읽지 않은 게시물 검색 활성화',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB는 인증 플러그인 또는 모듈을 지원합니다. 이를 통해 사용자가 보드에 로그인할 때 인증되는 방법을 결정할 수 있습니다. 기본적으로 DB, LDAP, Apache 및 OAuth의 4가지 플러그인이 제공됩니다. 모든 방법에 추가 정보가 필요한 것은 아니므로 선택한 방법과 관련된 경우에만 필드를 작성하십시오.',

	'AUTH_METHOD'				=> '인증 방법 선택',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> '활성화된 각 OAuth 서비스 공급자의 키와 암호를 모두 제공해야 합니다. OAuth 서비스 공급자에 대해 하나만 제공되었습니다.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> '각 OAuth 공급자는 외부 서버에 인증하기 위해 고유한 비밀과 키가 필요합니다. 이는 웹사이트를 등록할 때 OAuth 서비스에서 제공해야 하며 제공된 대로 정확하게 입력해야 합니다.<br>여기에 입력된 키와 비밀번호가 모두 없는 서비스는 사용할 수 없습니다. 포럼 사용자. 또한 사용자는 여전히 DB 인증 플러그인을 사용하여 등록 및 로그인할 수 있습니다.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Key',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Secret',

	'APACHE_SETUP_BEFORE_USE'	=> 'phpBB를 이 인증 방법으로 전환하기 전에 아파치 인증을 설정해야 합니다. 아파치 인증에 사용하는 사용자 이름은 phpBB 사용자 이름과 같아야 합니다. Apache 인증은 mod_php에서만 사용할 수 있습니다(CGI 버전이 아님).',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> '이것은 사용자 정보를 찾는 고유 이름입니다. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP 이메일 속성',
	'LDAP_EMAIL_EXPLAIN'			=> '새 사용자의 이메일 주소를 자동으로 설정하려면 이를 사용자 항목 이메일 속성의 이름(있는 경우)으로 설정하십시오. 이 필드를 비워 두면 처음 로그인하는 사용자의 이메일 주소가 비어 있습니다.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> '지정된 사용자/비밀번호로 LDAP 서버에 바인딩하지 못했습니다.',
	'LDAP_NO_EMAIL'					=> '지정된 이메일 속성이 존재하지 않습니다.',
	'LDAP_NO_IDENTITY'				=> '%s에 대한 로그인 ID를 찾을 수 없습니다.',
	'LDAP_PASSWORD'					=> 'LDAP 비밀번호',
	'LDAP_PASSWORD_EXPLAIN'			=> '익명 바인딩을 사용하려면 공백으로 남겨두고, 그렇지 않으면 위 사용자의 비밀번호를 입력하십시오. Active Directory 서버에 필요합니다.<br><em><strong>경고:</strong> 이 비밀번호는 데이터베이스에 일반 텍스트로 저장되며 데이터베이스에 액세스할 수 있거나 이 구성 페이지를 볼 수 있는 모든 사람이 볼 수 있습니다.</em>',
	'LDAP_PORT'						=> 'LDAP 서버 포트',
	'LDAP_PORT_EXPLAIN'				=> '선택적으로 기본 포트 389 대신 LDAP 서버에 연결하는 데 사용해야 하는 포트를 지정할 수 있습니다.',
	'LDAP_SERVER'					=> 'LDAP 서버 이름',
	'LDAP_SERVER_EXPLAIN'			=> 'LDAP를 사용하는 경우 LDAP 서버의 호스트 이름 또는 IP 주소입니다. 또는 ldap://hostname:port/와 같은 URL을 지정할 수 있습니다.',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> '이것은 주어진 로그인 ID를 검색하는 데 사용되는 키입니다. <var>uid</var>, <var>sn</var> 등',
	'LDAP_USER'						=> 'LDAP 사용자 <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> '익명 바인딩을 사용하려면 비워 둡니다. phpBB가 채워지면 로그인 시 지정된 고유 이름을 사용하여 올바른 사용자를 찾으려고 합니다. 예: <samp>uid=사용자 이름,ou=MyUnit,o=MyCompany,c=미국</samp>. Active Directory 서버에 필요합니다.',
	'LDAP_USER_FILTER'				=> 'LDAP 사용자 필터',
	'LDAP_USER_FILTER_EXPLAIN'		=> '선택적으로 추가 필터를 사용하여 검색된 개체를 추가로 제한할 수 있습니다. 예를 들어 <samp>objectClass=posixGroup</samp>은 <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>를 사용합니다.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> '여기에서 서버 및 도메인 종속 설정을 정의합니다. 입력한 데이터가 정확한지 확인하십시오. 오류가 있으면 잘못된 정보가 포함된 이메일이 발송됩니다. 도메인 이름을 입력할 때 http:// 또는 기타 프로토콜 용어가 포함된다는 것을 기억하십시오. 서버가 다른 값을 사용한다는 것을 알고 있는 경우에만 포트 번호를 변경하십시오. 대부분의 경우 포트 80이 정확합니다.',

	'ENABLE_GZIP'				=> 'GZip 압축 사용',
	'ENABLE_GZIP_EXPLAIN'		=> '생성된 콘텐츠는 사용자에게 보내기 전에 압축됩니다. 이렇게 하면 네트워크 트래픽을 줄일 수 있지만 서버와 클라이언트 측 모두에서 CPU 사용량도 증가합니다. 로드하려면 zlib PHP 확장이 필요합니다.',
	'FORCE_SERVER_VARS'			=> '서버 URL 설정 강제 실행',
	'FORCE_SERVER_VARS_EXPLAIN'	=> '"예"로 설정하면 여기에 정의된 서버 설정이 자동으로 결정된 값에 우선하여 사용됩니다.',
	'ICONS_PATH'				=> '게시물 아이콘 저장 경로',
	'ICONS_PATH_EXPLAIN'		=> 'phpBB 루트 디렉토리 아래의 경로, 예: <samp>images/icon</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'URL 다시 쓰기 사용',
	'MOD_REWRITE_ENABLE_EXPLAIN' => '활성화되면 "app.php"가 포함된 URL은 파일 이름을 제거하도록 다시 작성됩니다(예: app.php/foo는 /foo가 됨). <strong>이 기능이 작동하려면 Apache 서버의 mod_rewrite 모듈이 필요합니다. mod_rewrite 지원 없이 이 옵션을 활성화하면 보드의 URL이 깨질 수 있습니다.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'Apache 웹 서버의 <strong>mod_rewrite</strong> 모듈이 비활성화되었습니다. 이 기능을 활성화하려면 모듈을 활성화하거나 웹 호스팅 제공업체에 문의하십시오.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => '이 서버가 URL 재작성을 지원하는지 여부를 확인할 수 없습니다. 이 설정은 활성화될 수 있지만 URL 재작성을 사용할 수 없는 경우 이 게시판에서 생성된 경로(예: 링크용)가 손상될 수 있습니다. 이 기능을 안전하게 활성화할 수 있는지 확실하지 않은 경우 웹 호스팅 제공업체에 문의하십시오.',
	'PATH_SETTINGS'				=> '경로 설정',
	'RANKS_PATH'				=> '순위 이미지 저장 경로',
	'RANKS_PATH_EXPLAIN'		=> 'phpBB 루트 디렉토리 아래의 경로, 예: <samp>images/rank</samp>.',
	'SCRIPT_PATH'				=> '스크립트 경로',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBB가 위치하는 경로는 도메인 이름을 기준으로 합니다. 예: <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> '도메인 이름',
	'SERVER_NAME_EXPLAIN'		=> '이 보드가 실행되는 도메인 이름(예: <samp>www.example.com</samp>).',
	'SERVER_PORT'				=> '서버 포트',
	'SERVER_PORT_EXPLAIN'		=> '서버가 실행되는 포트(보통:80)는 다른 경우에만 변경됩니다.',
	'SERVER_PROTOCOL'			=> '서버 프로토콜',
	'SERVER_PROTOCOL_EXPLAIN'	=> '이러한 설정이 강제되는 경우 서버 프로토콜로 사용됩니다. 비어 있거나 강제 실행되지 않은 경우 프로토콜은 쿠키 보안 설정(<samp>http://</samp> 또는 <samp>https://</samp>)에 의해 결정됩니다.',
	'SERVER_URL_SETTINGS'		=> '서버 URL 설정',
	'SMILIES_PATH'				=> '스마일 저장 경로',
	'SMILIES_PATH_EXPLAIN'		=> 'phpBB 루트 디렉토리 아래의 경로, 예: <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> '확장 그룹 아이콘 저장 경로',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'phpBB 루트 디렉토리 아래의 경로, 예: <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'		=> '시스템 cron에서 주기적 작업 실행',
	'USE_SYSTEM_CRON_EXPLAIN'		=> '꺼져 있으면 phpBB가 주기적 작업이 자동으로 실행되도록 정렬합니다. 켜져 있으면 phpBB가 자체적으로 정기 작업을 예약하지 않습니다. 시스템 관리자는 <code>bin/phpbbcli.php cron:run</code>이 시스템 cron 기능에 의해 일정한 간격(예: 5분마다)으로 실행되도록 조정해야 합니다.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> '여기에서 세션 및 로그인 관련 설정을 정의할 수 있습니다.',

	'ALL'							=> '모두',
	'ALLOW_AUTOLOGIN'				=> '"기억하기" 로그인 허용',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> '사용자가 게시판을 방문할 때 "기억하기" 옵션이 제공되는지 여부를 결정합니다.',
	'ALLOW_PASSWORD_RESET'			=> '비밀번호 재설정 허용("비밀번호 찾기")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> '사용자가 로그인 페이지의 "비밀번호를 잊어버렸습니다" 링크를 사용하여 계정을 복구할 수 있는지 여부를 결정합니다. 외부 인증 메커니즘을 사용하는 경우 이 기능을 비활성화할 수 있습니다.',
	'AUTOLOGIN_LENGTH'				=> '"기억하기" 로그인 키 만료 기간',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> '"기억하기" 로그인 키가 제거된 후의 일 수 또는 비활성화하려면 0입니다.',
	'BROWSER_VALID'					=> '브라우저 확인',
	'BROWSER_VALID_EXPLAIN'			=> '보안을 향상시키는 각 세션에 대한 브라우저 유효성 검사를 활성화합니다.',
	'CHECK_DNSBL'					=> 'DNS 블랙홀 목록에 대한 IP 확인',
	'CHECK_DNSBL_EXPLAIN'			=> '활성화된 경우 사용자의 IP 주소는 등록 및 게시 시 다음 DNSBL 서비스에 대해 확인됩니다. <a href="http://spamcop.net">spamcop.net</a> 및 <a href="http://www .spamhaus.org">www.spamhaus.org</a>. 이 조회는 서버 구성에 따라 시간이 걸릴 수 있습니다. 속도 저하가 발생하거나 오탐지가 너무 많이 보고되면 이 검사를 비활성화하는 것이 좋습니다.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> '유효한 MX 레코드의 이메일 도메인 확인',
	'EMAIL_CHECK_MX_EXPLAIN'		=> '활성화된 경우 등록 및 프로필 변경 시 제공된 이메일 도메인에서 유효한 MX 레코드를 확인합니다.',
	'FORCE_PASS_CHANGE'				=> '강제 비밀번호 변경',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> '사용자가 설정된 일 수 후에 비밀번호를 변경하도록 요구합니다. 이 값을 0으로 설정하면 이 동작이 비활성화됩니다.',
	'FORM_TIME_MAX'					=> '양식을 제출하는 최대 시간',
	'FORM_TIME_MAX_EXPLAIN'			=> '사용자가 양식을 제출해야 하는 시간입니다. 비활성화하려면 -1을 사용합니다. 이 설정에 관계없이 세션이 만료되면 양식이 유효하지 않을 수 있습니다.',
	'FORM_SID_GUESTS'				=> '게스트 세션에 양식 연결',
	'FORM_SID_GUESTS_EXPLAIN'		=> '활성화된 경우 게스트에게 발급된 양식 토큰은 세션 전용이 됩니다. 이것은 일부 ISP에 문제를 일으킬 수 있습니다.',
	'FORWARDED_FOR_VALID'			=> '<var>X_FORWARDED_FOR</var> 헤더 유효성 검사',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> '전송된 <var>X_FORWARDED_FOR</var> 헤더가 이전 요청과 함께 전송된 헤더와 동일한 경우에만 세션이 계속됩니다. <var>X_FORWARDED_FOR</var>의 IP에 대해서도 차단이 확인됩니다.',
	'IP_VALID'						=> '세션 IP 검증',
	'IP_VALID_EXPLAIN'				=> '세션의 유효성을 검사하는 데 사용되는 사용자 IP의 양을 결정합니다. <samp>All</samp>은 전체 주소를 비교하고, <samp>A.B.C</samp>는 첫 x.x.x, <samp>A.B</samp>는 첫 x.x, <samp>None</samp>은 확인을 비활성화합니다. IPv6 주소에서 <samp>A.B.C</samp>는 처음 4개 블록을 비교하고 <samp>A.B</samp>는 처음 3개 블록을 비교합니다.',
	'IP_LOGIN_LIMIT_MAX'			=> 'IP 주소당 최대 로그인 시도 횟수',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> '스팸봇 방지 작업이 트리거되기 전에 단일 IP 주소에서 허용되는 로그인 시도의 임계값입니다. 스팸봇 방지 작업이 IP 주소에 의해 트리거되지 않도록 하려면 0을 입력합니다.',
	'IP_LOGIN_LIMIT_TIME'			=> 'IP 주소 로그인 시도 만료 시간',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> '이 기간이 지나면 로그인 시도가 만료됩니다.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> '<var>X_FORWARDED_FOR</var> 헤더로 로그인 시도 제한',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'IP 주소로 로그인 시도를 제한하는 대신 <var>X_FORWARDED_FOR</var> 값으로 제한됩니다. <br><em><strong>경고:</strong> <var>X_FORWARDED_FOR</var>을(를) 신뢰할 수 있는 값으로 설정하는 프록시 서버를 작동하는 경우에만 이 옵션을 활성화하십시오.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> '사용자 이름당 최대 로그인 시도 횟수',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> '스팸봇 방지 작업이 트리거되기 전에 단일 계정에 허용된 로그인 시도 횟수입니다. 고유한 사용자 계정에 대해 스팸봇 방지 작업이 트리거되지 않도록 하려면 0을 입력합니다.',
	'NO_IP_VALIDATION'				=> '없음',
	'NO_REF_VALIDATION'				=> '없음',
	'PASSWORD_TYPE'					=> '비밀번호 복잡성',
	'PASSWORD_TYPE_EXPLAIN'			=> '암호를 설정하거나 변경할 때 필요한 암호의 복잡성을 결정합니다. 후속 옵션에는 이전 옵션이 포함됩니다.',
	'PASS_TYPE_ALPHA'				=> '문자와 숫자를 포함해야 합니다.',
	'PASS_TYPE_ANY'					=> '요구 사항 없음',
	'PASS_TYPE_CASE'				=> '대소문자를 혼합해야 합니다.',
	'PASS_TYPE_SYMBOL'				=> '기호를 포함해야 합니다.',
	'REF_HOST'						=> '호스트만 확인',
	'REF_PATH'						=> '경로도 확인',
	'REFERRER_VALID'				=> '추천인 확인',
	'REFERRER_VALID_EXPLAIN'		=> '활성화된 경우 호스트/스크립트 경로 설정에 대해 POST 요청의 리퍼러를 확인합니다. 이로 인해 여러 도메인 및/또는 외부 로그인을 사용하는 보드에 문제가 발생할 수 있습니다.',
	'TPL_ALLOW_PHP'					=> '템플릿에서 PHP 허용',
	'TPL_ALLOW_PHP_EXPLAIN'			=> '이 옵션이 활성화되면 템플릿에서 <code>PHP</code> 및 <code>INCLUDE PHP</code> 문이 인식되고 칭찬됩니다.',
	'UPLOAD_CERT_VALID'				=> '업로드 인증서 확인',
	'UPLOAD_CERT_VALID_EXPLAIN'		=> '활성화하면 원격 업로드의 인증서가 검증됩니다. 이를 위해서는 php.ini의 <samp>openssl.cafile</samp> 또는 <samp>curl.cainfo</samp> 설정으로 CA 번들이 정의되어야 합니다.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> '이 정보는 게시판이 사용자에게 이메일을 보낼 때 사용됩니다. 지정한 이메일 주소가 유효한지 확인하십시오. 반송되거나 전달할 수 없는 메시지는 해당 주소로 전송될 수 있습니다. 호스트가 기본(PHP 기반) 이메일 서비스를 제공하지 않는 경우 대신 SMTP를 사용하여 직접 메시지를 보낼 수 있습니다. 여기에는 적절한 서버의 주소가 필요합니다(필요한 경우 공급자에게 문의). 서버에 인증이 필요한 경우(필요한 경우에만) 필요한 사용자 이름, 비밀번호 및 인증 방법을 입력하십시오.',

	'ADMIN_EMAIL'					=> '이메일 주소로부터',
	'ADMIN_EMAIL_EXPLAIN'			=> '이것은 모든 이메일의 발신인 주소, 기술 담당자 이메일 주소로 사용됩니다. 이메일에서 항상 <samp>보낸 사람</samp> 주소로 사용됩니다.',
	'BOARD_EMAIL_FORM'				=> '사용자는 게시판을 통해 이메일을 보냅니다.',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> '사용자에게 이메일 주소를 표시하는 대신 게시판을 통해 이메일을 보낼 수 있습니다.',
	'BOARD_HIDE_EMAILS'				=> '이메일 주소 숨기기',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> '이 기능은 이메일 주소를 완전히 비공개로 유지합니다.',
	'CONTACT_EMAIL'					=> '담당자 이메일 주소',
	'CONTACT_EMAIL_EXPLAIN'			=> '이 주소는 특정 연락처가 필요할 때마다 사용됩니다. 스팸, 오류 출력 등. 이메일에서 항상 <samp>보낸사람</samp> 및 <samp>답장</samp> 주소로 사용됩니다.',
	'CONTACT_EMAIL_NAME'			=> '담당자 이름',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> '이것은 전자 메일 수신자에게 표시되는 연락처 이름입니다. 연락처 이름을 사용하지 않으려면 이 필드를 비워 둡니다.',
	'EMAIL_FORCE_SENDER'			=> '이메일 주소에서 강제 실행',
	'EMAIL_FORCE_SENDER_EXPLAIN'	=> '이렇게 하면 서버의 로컬 사용자와 호스트 이름을 사용하는 대신 <samp>Return-Path</samp>를 보낸 사람 이메일 주소로 설정합니다. 이 설정은 SMTP를 사용할 때 적용되지 않습니다.<br><em><strong>경고:</strong> 웹 서버가 실행되는 사용자는 sendmail 구성에 신뢰할 수 있는 사용자로 추가되어야 합니다.</em>',
	'EMAIL_PACKAGE_SIZE'			=> '이메일 패키지 크기',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> '이것은 하나의 패키지에서 발송되는 최대 이메일 수입니다. 이 설정은 내부 메시지 대기열에 적용됩니다. 배달되지 않은 알림 이메일에 문제가 있는 경우 이 값을 0으로 설정하십시오.',
	'EMAIL_MAX_CHUNK_SIZE'			=> '허용되는 최대 이메일 수신자',
	'EMAIL_MAX_CHUNK_SIZE_EXPLAIN'	=> '필요한 경우 이메일 서버가 하나의 이메일 메시지에 허용하는 최대 수신자 수를 초과하지 않도록 설정하십시오.',
	'EMAIL_SIG'						=> '이메일 서명',
	'EMAIL_SIG_EXPLAIN'				=> '이 텍스트는 게시판에서 보내는 모든 이메일에 첨부됩니다.',
	'ENABLE_EMAIL'					=> '보드 전체 이메일 활성화',
	'ENABLE_EMAIL_EXPLAIN'			=> '비활성화로 설정하면 게시판에서 이메일을 전혀 보내지 않습니다. <em>사용자 및 관리자 계정 활성화 설정에서는 이 설정을 활성화해야 합니다. 현재 활성화 설정에서 "사용자" 또는 "관리자" 활성화를 사용 중인 경우 이 설정을 비활성화하면 등록이 비활성화됩니다.</em>',
	'SEND_TEST_EMAIL'				=> '테스트 이메일 보내기',
	'SEND_TEST_EMAIL_EXPLAIN'		=> '이렇게 하면 계정에 정의된 주소로 테스트 이메일이 발송됩니다.',
	'SMTP_ALLOW_SELF_SIGNED'		=> '자체 서명된 SSL 인증서 허용',
	'SMTP_ALLOW_SELF_SIGNED_EXPLAIN'=> '자체 서명된 SSL 인증서를 사용하여 SMTP 서버에 대한 연결을 허용합니다. <br><em><strong>경고:</strong> 자체 서명된 SSL 인증서를 허용하면 보안에 문제가 발생할 수 있습니다.</em>',
	'SMTP_AUTH_METHOD'				=> 'SMTP 인증 방법',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> '사용자 이름/비밀번호가 설정된 경우에만 사용되며 어떤 방법을 사용해야 할지 잘 모르는 경우 제공업체에 문의하십시오.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> '로그인',
	'SMTP_PASSWORD'					=> 'SMTP 비밀번호',
	'SMTP_PASSWORD_EXPLAIN'			=> 'SMTP 서버에서 비밀번호를 요구하는 경우에만 비밀번호를 입력하세요.<br><em><strong>경고:</strong> 이 비밀번호는 데이터베이스에 일반 텍스트로 저장되며 데이터베이스에 액세스할 수 있거나 볼 수 있는 모든 사람이 볼 수 있습니다. 이 구성 페이지입니다.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP 서버 포트',
	'SMTP_PORT_EXPLAIN'				=> 'SMTP 서버가 다른 포트에 있다는 것을 알고 있는 경우에만 이를 변경하십시오.',
	'SMTP_SERVER'					=> 'SMTP 서버 주소',
	'SMTP_SERVER_EXPLAIN'			=> '메일 호스트가 지시하지 않는 한 프로토콜(<samp>ssl://</samp> 또는 <samp>tls://</samp>)을 제공하지 마십시오.',
	'SMTP_SETTINGS'					=> 'SMTP 세팅',
	'SMTP_USERNAME'					=> 'SMTP 유저네임',
	'SMTP_USERNAME_EXPLAIN'			=> 'SMTP 서버에 필요한 경우에만 사용자 이름을 입력하십시오.',
	'SMTP_VERIFY_PEER'				=> 'SSL 인증서 확인',
	'SMTP_VERIFY_PEER_EXPLAIN'		=> 'SMTP 서버에서 사용하는 SSL 인증서 확인이 필요합니다. <br><em><strong>경고:</strong> 확인되지 않은 SSL 인증서로 피어를 연결하면 보안에 영향을 미칠 수 있습니다.</em>',
	'SMTP_VERIFY_PEER_NAME'			=> 'SMTP 피어 이름 확인',
	'SMTP_VERIFY_PEER_NAME_EXPLAIN'	=> 'SSL/TLS 연결을 사용하는 SMTP 서버의 피어 이름 확인이 필요합니다. <br><em><strong>경고:</strong> 확인되지 않은 피어에 연결하면 보안에 문제가 발생할 수 있습니다.</em>',
	'TEST_EMAIL_SENT'				=> '테스트 이메일이 전송되었습니다.<br>메일을 받지 못한 경우 이메일 구성을 확인하세요.<br><br>도움이 필요하면 <a href="https://www.phpbb .com/community/">phpBB 지원 포럼</a>입니다.',

	'USE_SMTP'						=> '이메일에 SMTP 서버 사용',
	'USE_SMTP_EXPLAIN'				=> '로컬 메일 기능 대신 명명된 서버를 통해 이메일을 보내거나 보내야 하는 경우 "예"를 선택합니다.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> '여기에서 인스턴트 메시징 및 게시판 알림에 Jabber 사용을 활성화하고 제어할 수 있습니다. Jabber는 오픈 소스 프로토콜이므로 누구나 사용할 수 있습니다. 일부 Jabber 서버에는 다른 네트워크의 사용자에게 연락할 수 있는 게이트웨이 또는 전송이 포함되어 있습니다. 모든 서버가 모든 전송을 제공하는 것은 아니며 프로토콜 변경으로 인해 전송이 작동하지 않을 수 있습니다. 이미 등록된 계정 세부 정보를 입력해야 합니다. phpBB는 여기에 입력한 세부 정보를 있는 그대로 사용합니다',

	'JAB_ALLOW_SELF_SIGNED'			=> '자체 서명된 SSL 인증서 허용',
	'JAB_ALLOW_SELF_SIGNED_EXPLAIN'	=> '자체 서명된 SSL 인증서를 사용하여 Jabber 서버에 대한 연결을 허용합니다. <br><em><strong>경고:</strong> 자체 서명된 SSL 인증서를 허용하면 보안에 문제가 발생할 수 있습니다.</em>',
	'JAB_ENABLE'					=> 'Jabber 활성화',
	'JAB_ENABLE_EXPLAIN'			=> 'Jabber 메시징 및 알림 사용을 활성화합니다.',
	'JAB_GTALK_NOTE'				=> '<samp>dns_get_record</samp> 함수를 찾을 수 없기 때문에 GTalk가 작동하지 않습니다. 이 기능은 PHP4에서는 사용할 수 없으며 Windows 플랫폼에서는 구현되지 않습니다. 현재 Mac OS를 포함한 BSD 기반 시스템에서는 작동하지 않습니다.',
	'JAB_PACKAGE_SIZE'				=> 'Jabber 패키지 크기',
	'JAB_PACKAGE_SIZE_EXPLAIN'		=> '이것은 하나의 패키지에서 보낸 메시지 수입니다. 0으로 설정하면 메시지가 즉시 전송되고 나중 전송을 위해 대기하지 않습니다.',
	'JAB_PASSWORD'					=> 'Jabber 비밀번호',
	'JAB_PASSWORD_EXPLAIN'			=> '<em><strong>경고:</strong> 이 비밀번호는 데이터베이스에 일반 텍스트로 저장되며 데이터베이스에 액세스할 수 있거나 이 구성 페이지를 볼 수 있는 모든 사람이 볼 수 있습니다.</em>',
	'JAB_PORT'						=> 'Jabber 포트',
	'JAB_PORT_EXPLAIN'				=> '기본 포트 5222를 사용하시거나 모르는 경우 비워 두십시오.',
	'JAB_SERVER'					=> 'Jabber 서버',
	'JAB_SERVER_EXPLAIN'			=> '서버 목록은 %sjabber.org%s를 참조하십시오.',
	'JAB_SETTINGS_CHANGED'			=> 'Jabber 설정이 변경되었습니다.',
	'JAB_USE_SSL'					=> 'SSL을 사용하여 연결',
	'JAB_USE_SSL_EXPLAIN'			=> '활성화된 경우 보안 연결을 설정하려고 시도합니다. 포트 5222가 지정된 경우 Jabber 포트는 5223으로 수정됩니다.',
	'JAB_USERNAME'					=> 'Jabber 사용자 이름 또는 JID',
	'JAB_USERNAME_EXPLAIN'			=> '정식 사용자 이름 또는 유효한 JID를 지정하십시오. 사용자 이름의 유효성이 확인되지 않습니다. 사용자 이름만 지정하면 JID는 위에서 지정한 사용자 이름과 서버가 됩니다. 그렇지 않으면 유효한 JID를 지정하십시오(예: user@jabber.org).',
	'JAB_VERIFY_PEER'				=> 'SSL 인증서 확인',
	'JAB_VERIFY_PEER_EXPLAIN'		=> 'Jabber 서버에서 사용하는 SSL 인증서 확인이 필요합니다. <br><em><strong>경고:</strong> 확인되지 않은 SSL 인증서로 피어를 연결하면 보안에 영향을 미칠 수 있습니다.</em>',
	'JAB_VERIFY_PEER_NAME'			=> 'Jabber 피어 이름 확인',
	'JAB_VERIFY_PEER_NAME_EXPLAIN'	=> 'SSL/TLS 연결을 사용하는 Jabber 서버의 피어 이름 확인이 필요합니다. <br><em><strong>경고:</strong> 확인되지 않은 피어에 연결하면 보안에 문제가 발생할 수 있습니다.</em>',
));
