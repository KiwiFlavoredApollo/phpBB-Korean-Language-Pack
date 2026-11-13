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

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> '각 게시판 관리자는 허용하거나 금지할 첨부 파일 형식을 정할 수 있습니다. 어떤 파일을 업로드할 수 있는지 확실하지 않다면 게시판 관리자에게 문의하십시오.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> '이 게시판에서는 어떤 첨부 파일이 허용됩니까?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> '내가 업로드한 첨부 파일 목록을 보려면 사용자 제어판에서 첨부 파일 항목으로 이동하십시오.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> '내 첨부 파일을 모두 찾으려면 어떻게 해야 합니까?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> '첨부 파일',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> '구독과 북마크',
	'HELP_FAQ_BLOCK_FORMATTING'	=> '서식과 주제 유형',
	'HELP_FAQ_BLOCK_FRIENDS'	=> '친구와 제외 사용자',
	'HELP_FAQ_BLOCK_GROUPS'	=> '사용자 권한과 그룹',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB 관련 문제',
	'HELP_FAQ_BLOCK_LOGIN'	=> '로그인과 가입 문제',
	'HELP_FAQ_BLOCK_PMS'	=> '개인 메시지',
	'HELP_FAQ_BLOCK_POSTING'	=> '게시 관련 문제',
	'HELP_FAQ_BLOCK_SEARCH'	=> '포럼 검색',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> '사용자 환경 설정',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'phpBB 3.0에서는 주제 북마크가 웹 브라우저의 북마크와 비슷하게 작동하여 주제가 업데이트되어도 알림을 받지 못했습니다. phpBB 3.1부터 북마크는 주제 구독과 비슷해져 북마크한 주제가 업데이트되면 알림을 받을 수 있습니다. 구독은 게시판의 주제나 포럼이 업데이트될 때 알려 줍니다. 북마크와 구독 알림은 사용자 제어판의 ‘게시판 환경 설정’에서 구성할 수 있습니다.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> '북마크와 구독의 차이점은 무엇입니까?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> '특정 포럼을 구독하려면 해당 포럼에 들어간 뒤 페이지 아래쪽의 ‘포럼 구독’ 링크를 클릭하십시오.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> '특정 포럼을 구독하려면 어떻게 해야 합니까?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> '구독을 해제하려면 사용자 제어판에서 구독 항목으로 이동하십시오.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> '구독을 해제하려면 어떻게 해야 합니까?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> '주제 위쪽과 아래쪽에 있는 ‘주제 도구’ 메뉴에서 해당 링크를 클릭하면 특정 주제를 북마크하거나 구독할 수 있습니다.<br />답글을 작성할 때 ‘답글이 등록되면 알림’ 옵션을 선택해도 해당 주제를 구독하게 됩니다.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> '특정 주제를 북마크하거나 구독하려면 어떻게 해야 합니까?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> '공지에는 현재 보고 있는 포럼의 중요한 정보가 포함되는 경우가 많으므로 가능하면 읽어 보십시오. 공지는 해당 포럼의 모든 페이지 상단에 표시됩니다. 전체 공지와 마찬가지로 공지를 작성할 권한은 게시판 관리자가 부여합니다.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> '공지란 무엇입니까?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode는 HTML을 특별히 구현한 것으로, 게시물의 여러 요소에 다양한 서식을 적용할 수 있게 합니다. BBCode 사용 여부는 관리자가 정하며, 게시 양식에서 게시물별로 비활성화할 수도 있습니다. BBCode는 HTML과 비슷하지만 태그를 &lt;와 &gt; 대신 대괄호 [와 ]로 감쌉니다. 자세한 내용은 게시 페이지에서 열 수 있는 BBCode 안내서를 참조하십시오.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'BBCode란 무엇입니까?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> '전체 공지에는 중요한 정보가 포함되므로 가능하면 읽어 보십시오. 전체 공지는 모든 포럼의 상단과 사용자 제어판에 표시됩니다. 전체 공지를 작성할 권한은 게시판 관리자가 부여합니다.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> '전체 공지란 무엇입니까?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> '아니요. 이 게시판에 HTML을 게시하여 HTML로 표시되게 할 수는 없습니다. HTML로 적용할 수 있는 서식 대부분은 BBCode로 대신 적용할 수 있습니다.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'HTML을 사용할 수 있습니까?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> '주제 아이콘은 작성자가 게시물 내용의 성격을 나타내기 위해 선택하는 이미지입니다. 주제 아이콘을 사용할 수 있는지는 게시판 관리자가 설정한 권한에 따라 달라집니다.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> '주제 아이콘이란 무엇입니까?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> '예. 게시물에 이미지를 표시할 수 있습니다. 관리자가 첨부 파일을 허용했다면 이미지를 게시판에 업로드할 수 있습니다. 그렇지 않으면 http://www.example.com/my-picture.gif처럼 누구나 접근할 수 있는 웹 서버에 저장된 이미지를 링크해야 합니다. 자신의 PC에 저장된 이미지(PC가 공개 서버인 경우 제외)나 Hotmail 또는 Yahoo! 편지함, 비밀번호로 보호된 사이트처럼 인증 뒤에 있는 이미지는 링크할 수 없습니다. 이미지를 표시하려면 BBCode [img] 태그를 사용하십시오.',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> '이미지를 게시할 수 있습니까?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> '잠긴 주제에는 사용자가 더 이상 답글을 작성할 수 없으며 포함된 설문도 자동으로 종료됩니다. 포럼 운영자나 게시판 관리자가 여러 이유로 주제를 잠글 수 있습니다. 게시판 관리자가 부여한 권한에 따라 자신의 주제를 직접 잠글 수도 있습니다.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> '잠긴 주제란 무엇입니까?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> '이모티콘은 짧은 코드로 감정을 표현하는 작은 이미지입니다. 예를 들어 :)는 기쁨을, :(은 슬픔을 나타냅니다. 게시 양식에서 전체 이모티콘 목록을 볼 수 있습니다. 이모티콘을 지나치게 사용하면 게시물을 읽기 어려워져 운영자가 이모티콘을 편집하거나 게시물을 삭제할 수 있습니다. 게시판 관리자가 게시물에 사용할 수 있는 이모티콘 수를 제한했을 수도 있습니다.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> '이모티콘이란 무엇입니까?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> '포럼의 고정 주제는 공지 아래, 첫 페이지에만 표시됩니다. 중요한 내용인 경우가 많으므로 가능하면 읽어 보십시오. 공지 및 전체 공지와 마찬가지로 고정 주제를 작성할 권한은 게시판 관리자가 부여합니다.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> '고정 주제란 무엇입니까?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> '친구와 제외 사용자 목록을 사용하여 게시판의 다른 회원을 정리할 수 있습니다. 친구 목록에 추가한 회원은 사용자 제어판에 표시되어 온라인 상태를 빠르게 확인하고 개인 메시지를 보낼 수 있습니다. 스타일에서 지원하면 해당 사용자의 게시물이 강조되어 표시될 수도 있습니다. 사용자를 제외 사용자 목록에 추가하면 그 사용자가 작성한 게시물은 기본적으로 숨겨집니다.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> '친구와 제외 사용자 목록은 무엇입니까?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> '두 가지 방법으로 사용자를 목록에 추가할 수 있습니다. 각 사용자 프로필의 링크를 이용해 친구 또는 제외 사용자 목록에 추가하거나, 사용자 제어판에서 회원 이름을 입력해 직접 추가할 수 있습니다. 같은 페이지에서 목록의 사용자를 삭제할 수도 있습니다.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> '친구 또는 제외 사용자 목록에 사용자를 추가하거나 삭제하려면 어떻게 해야 합니까?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> '관리자는 게시판 전체를 제어하는 가장 높은 수준의 권한을 부여받은 회원입니다. 게시판 설립자와 설립자가 다른 관리자에게 부여한 권한에 따라 권한 설정, 사용자 차단, 사용자 그룹이나 운영자 생성 등 게시판 운영의 모든 측면을 관리할 수 있습니다. 설립자의 설정에 따라 모든 포럼에서 전체 운영 권한을 가질 수도 있습니다.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> '관리자란 무엇입니까?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> '게시판 관리자는 사용자 그룹의 회원을 쉽게 알아볼 수 있도록 그룹에 색상을 지정할 수 있습니다.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> '일부 사용자 그룹이 다른 색상으로 나타나는 이유는 무엇입니까?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> '여러 사용자 그룹에 속해 있다면 기본 그룹에 따라 기본적으로 표시되는 그룹 색상과 그룹 등급이 결정됩니다. 게시판 관리자가 권한을 허용한 경우 사용자 제어판에서 기본 사용자 그룹을 변경할 수 있습니다.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> '"기본 사용자 그룹"이란 무엇입니까?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> '운영자는 포럼을 일상적으로 관리하는 개인 또는 그룹입니다. 담당 포럼에서 게시물을 편집하거나 삭제하고, 주제를 잠그거나 잠금 해제하고 이동, 삭제 또는 분할할 수 있습니다. 일반적으로 운영자는 사용자가 주제에서 벗어나거나 모욕적이고 불쾌한 내용을 게시하지 않도록 관리합니다.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> '운영자란 무엇입니까?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> '이 페이지에는 게시판 관리자와 운영자 등 게시판 운영진의 목록과 각 운영자가 담당하는 포럼 등의 정보가 표시됩니다.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> '"운영진" 링크란 무엇입니까?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> '사용자 그룹은 관리자가 커뮤니티를 관리하기 쉬운 단위로 나누는 수단입니다. 각 사용자는 여러 그룹에 속할 수 있고 각 그룹에는 별도의 권한을 지정할 수 있습니다. 이를 통해 운영 권한을 변경하거나 비공개 포럼 접근 권한을 부여하는 등 여러 사용자의 권한을 한 번에 쉽게 변경할 수 있습니다.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> '사용자 제어판의 ‘사용자 그룹’ 항목에서 모든 사용자 그룹을 볼 수 있습니다. 가입하려면 해당 버튼을 클릭하십시오. 모든 그룹에 자유롭게 가입할 수 있는 것은 아닙니다. 승인이 필요한 그룹, 가입이 닫힌 그룹 또는 회원 목록이 숨겨진 그룹도 있습니다. 공개 그룹은 해당 버튼을 클릭해 바로 가입할 수 있습니다. 승인이 필요한 그룹은 같은 방법으로 가입을 요청할 수 있으며, 그룹 대표가 요청을 승인해야 합니다. 대표가 가입 이유를 물을 수도 있습니다. 요청이 거절되더라도 그룹 대표를 괴롭히지 마십시오. 거절할 만한 이유가 있을 것입니다.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> '사용자 그룹은 어디에 있으며 어떻게 가입합니까?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> '사용자 그룹 대표는 일반적으로 게시판 관리자가 그룹을 처음 만들 때 지정합니다. 사용자 그룹을 만들고 싶다면 관리자에게 개인 메시지를 보내 문의하십시오.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> '사용자 그룹 리더가 되려면 어떻게 해야 합니까?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> '사용자 그룹이란 무엇입니까?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> '게시판 관리자가 기능을 활성화했다면 모든 사용자가 ‘문의하기’ 양식을 사용할 수 있습니다.<br />게시판 회원은 ‘운영진’ 링크를 사용할 수도 있습니다.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> '게시판 관리자에게 어떻게 연락합니까?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> '이 소프트웨어는 phpBB Limited에서 개발하고 라이선스를 제공합니다. 기능을 추가해야 한다고 생각한다면 <a href="https://www.phpbb.com/ideas/">phpBB 아이디어 센터</a>에서 기존 아이디어에 찬성표를 주거나 새 기능을 제안할 수 있습니다.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'X 기능을 사용할 수 없는 이유는 무엇입니까?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> '‘운영진’ 페이지에 나열된 관리자에게 불만 사항을 문의할 수 있습니다. 그래도 답변을 받지 못하면 도메인 소유자에게 문의하거나(<a href="http://www.google.com/search?q=whois">whois 조회</a> 이용), Yahoo!, free.fr, f2s.com 같은 무료 서비스에서 운영되는 경우 해당 서비스의 관리 또는 악용 신고 부서에 문의하십시오. phpBB Limited에는 이 게시판이 누구에 의해 어디에서 어떻게 사용되는지를 통제할 <strong>아무런 권한이 없으며</strong>, 그 사용에 대해 책임을 지지 않습니다. phpBB.com 웹사이트나 phpBB 소프트웨어 자체와 <strong>직접 관련되지 않은</strong> 법적 문제(중단 요구, 책임, 명예 훼손 발언 등)로 phpBB Limited에 연락하지 마십시오. 이 소프트웨어의 <strong>제3자 사용</strong>에 관해 phpBB Limited에 이메일을 보내면 짧은 답변만 받거나 답변을 받지 못할 수 있습니다.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> '이 게시판과 관련된 악용 또는 법적 문제는 누구에게 문의해야 합니까?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> '이 소프트웨어는 수정되지 않은 형태를 기준으로 <a href="https://www.phpbb.com/">phpBB Limited</a>에서 제작하고 배포하며 저작권을 보유합니다. GNU General Public License 버전 2(GPL-2.0)에 따라 제공되며 자유롭게 배포할 수 있습니다. 자세한 내용은 <a href="https://www.phpbb.com/about/">phpBB 소개</a>를 참조하십시오.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> '이 게시판 소프트웨어는 누가 만들었습니까?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> '로그인할 때 <em>로그인 상태 유지</em>를 선택하지 않으면 게시판은 미리 정해진 시간 동안만 로그인 상태를 유지합니다. 이는 다른 사람이 계정을 악용하는 것을 방지하기 위한 것입니다. 로그인 상태를 계속 유지하려면 로그인할 때 <em>로그인 상태 유지</em>를 선택하십시오. 도서관, 인터넷 카페, 대학 전산실 같은 공용 컴퓨터에서는 권장하지 않습니다. 이 선택 항목이 보이지 않는다면 게시판 관리자가 기능을 비활성화한 것입니다.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> '자동으로 로그아웃되는 이유는 무엇입니까?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> '로그인할 수 없는 데에는 여러 이유가 있습니다. 먼저 사용자 이름과 비밀번호가 올바른지 확인하십시오. 올바르다면 게시판 관리자에게 차단된 계정이 아닌지 문의하십시오. 웹사이트 소유자의 구성 오류일 수도 있으며, 이 경우 소유자가 오류를 수정해야 합니다.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> '관리자가 어떤 이유로 계정을 비활성화하거나 삭제했을 수 있습니다. 또한 많은 게시판은 데이터베이스 크기를 줄이기 위해 오랫동안 게시하지 않은 사용자를 정기적으로 삭제합니다. 이런 경우 다시 가입하여 토론에 더 적극적으로 참여해 보십시오.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> '예전에 가입했지만 더 이상 로그인할 수 없습니다!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> '로그인할 수 없는 이유는 무엇입니까?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> '새 방문자의 가입을 막기 위해 게시판 관리자가 가입 기능을 비활성화했을 수 있습니다. 관리자가 사용 중인 IP 주소를 차단했거나 가입하려는 사용자 이름을 허용하지 않았을 수도 있습니다. 도움이 필요하면 게시판 관리자에게 문의하십시오.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> '가입할 수 없는 이유는 무엇입니까?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA(1998년 아동 온라인 개인정보 보호법)는 만 13세 미만 아동의 정보를 수집할 가능성이 있는 웹사이트가 아동의 개인 식별 정보를 수집하려면 부모의 서면 동의나 법적 보호자의 승인을 받도록 요구하는 미국 법률입니다. 이 법이 가입하려는 본인이나 웹사이트에 적용되는지 확실하지 않다면 법률 전문가에게 문의하십시오. phpBB Limited와 이 게시판의 소유자는 법률 자문을 제공할 수 없으며, ‘이 게시판과 관련된 악용 또는 법적 문제는 누구에게 문의해야 합니까?’ 항목에 설명된 경우를 제외하면 어떠한 법적 문제의 문의처도 아닙니다.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'COPPA란 무엇입니까?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '‘쿠키 삭제’는 phpBB가 인증과 로그인 상태 유지를 위해 만든 쿠키를 삭제합니다. 관리자가 활성화한 경우 쿠키는 읽음 상태 추적 같은 기능에도 사용됩니다. 로그인이나 로그아웃에 문제가 있다면 게시판 쿠키를 삭제하는 것이 도움이 될 수 있습니다.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> '‘쿠키 삭제’는 무엇을 합니까?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> '당황하지 마십시오. 기존 비밀번호를 알아낼 수는 없지만 쉽게 재설정할 수 있습니다. 로그인 페이지에서 <em>비밀번호를 잊어버렸습니다</em>를 클릭하고 안내를 따르면 곧 다시 로그인할 수 있습니다.<br />비밀번호를 재설정할 수 없다면 게시판 관리자에게 문의하십시오.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> '비밀번호를 분실했습니다!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> '반드시 가입해야 하는 것은 아닙니다. 게시물을 작성하려면 가입해야 하는지는 게시판 관리자가 결정합니다. 다만 가입하면 사용자 지정 아바타, 개인 메시지, 다른 사용자에게 이메일 보내기, 사용자 그룹 가입 등 게스트가 이용할 수 없는 추가 기능을 사용할 수 있습니다. 가입에는 몇 분밖에 걸리지 않으므로 가입하는 것을 권장합니다.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> '먼저 사용자 이름과 비밀번호가 올바른지 확인하십시오. 올바르다면 두 가지 경우를 생각할 수 있습니다. COPPA 지원이 활성화되어 있고 가입할 때 만 13세 미만이라고 입력했다면 받은 안내를 따라야 합니다. 일부 게시판은 로그인하기 전에 새 계정을 사용자 본인이나 관리자가 활성화하도록 요구하기도 하며, 이 내용은 가입 과정에서 안내됩니다. 이메일을 받았다면 그 안내를 따르십시오. 이메일을 받지 못했다면 이메일 주소를 잘못 입력했거나 이메일이 스팸 필터에 걸렸을 수 있습니다. 입력한 이메일 주소가 정확하다면 관리자에게 문의하십시오.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> '가입했지만 로그인할 수 없습니다!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> '가입해야 하는 이유는 무엇입니까?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> '개인 메시지를 보낼 수 없는 이유는 세 가지입니다. 가입하지 않았거나 로그인하지 않았을 수 있고, 게시판 관리자가 게시판 전체의 개인 메시지 기능을 비활성화했을 수 있으며, 관리자가 메시지 전송 권한을 제한했을 수도 있습니다. 자세한 내용은 게시판 관리자에게 문의하십시오.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> '개인 메시지를 보낼 수 없습니다!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> '유감입니다. 이 게시판의 이메일 양식에는 이런 이메일을 보낸 사용자를 추적하기 위한 보호 기능이 있습니다. 받은 이메일의 전체 사본을 게시판 관리자에게 보내십시오. 이메일을 보낸 사용자의 정보가 담긴 헤더를 반드시 포함해야 합니다. 그러면 게시판 관리자가 필요한 조치를 취할 수 있습니다.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> '이 게시판의 사용자에게서 스팸 또는 모욕적인 이메일을 받았습니다!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> '사용자 제어판의 메시지 규칙을 사용하면 특정 사용자가 보낸 개인 메시지를 자동으로 삭제할 수 있습니다. 특정 사용자에게서 모욕적인 개인 메시지를 받고 있다면 해당 메시지를 운영자에게 신고하십시오. 운영자는 그 사용자의 개인 메시지 전송을 막을 수 있습니다.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> '원치 않는 개인 메시지를 계속 받고 있습니다!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> '주제를 보고 있을 때 ‘주제 끌어올리기’ 링크를 클릭하면 해당 주제를 포럼 첫 페이지의 맨 위로 끌어올릴 수 있습니다. 링크가 보이지 않는다면 끌어올리기 기능이 비활성화되어 있거나 이전 끌어올리기 후 필요한 시간이 아직 지나지 않은 것입니다. 답글을 작성하여 주제를 끌어올릴 수도 있지만 반드시 게시판 규칙을 따르십시오.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> '내 주제를 어떻게 끌어올립니까?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> '포럼에 새 주제를 작성하려면 ‘새 주제’를 클릭하십시오. 주제에 답글을 작성하려면 ‘답글 작성’을 클릭하십시오. 게시물을 작성하기 전에 가입해야 할 수도 있습니다. 각 포럼에서 부여된 권한은 포럼과 주제 화면 아래쪽에서 확인할 수 있습니다. 예: 새 주제를 작성할 수 있습니다, 첨부 파일을 올릴 수 있습니다 등.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> '새 주제를 만들거나 답글을 게시하려면 어떻게 합니까?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> '작성 중인 내용을 초안으로 저장해 두었다가 나중에 완성하여 제출할 수 있습니다. 저장한 초안을 다시 불러오려면 사용자 제어판으로 이동하십시오.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> '주제 작성 화면의 ‘저장’ 버튼은 무엇을 합니까?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> '게시판 관리자나 운영자가 아니라면 자신의 게시물만 편집하거나 삭제할 수 있습니다. 해당 게시물의 편집 버튼을 클릭하면 편집할 수 있지만, 게시 후 일정 시간 동안만 허용될 수도 있습니다. 누군가 이미 답글을 작성했다면 주제로 돌아왔을 때 게시물 아래에 편집 횟수와 날짜 및 시간이 작은 글씨로 표시됩니다. 이 정보는 답글이 작성된 경우에만 표시되며, 운영자나 관리자가 편집한 경우에는 표시되지 않습니다. 다만 운영자나 관리자는 재량에 따라 편집 이유를 남길 수 있습니다. 일반 사용자는 누군가 답글을 작성한 게시물을 삭제할 수 없습니다.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> '게시물을 편집하거나 삭제하려면 어떻게 해야 합니까?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> '일부 포럼은 특정 사용자나 그룹만 이용할 수 있습니다. 포럼을 보거나 읽거나 게시물을 작성하는 등의 작업에는 특별한 권한이 필요할 수 있습니다. 접근 권한을 받으려면 운영자나 게시판 관리자에게 문의하십시오.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> '포럼에 접근할 수 없는 이유는 무엇입니까?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> '첨부 파일 권한은 포럼, 그룹 또는 사용자별로 부여됩니다. 게시판 관리자가 해당 포럼에 첨부 파일을 올리지 못하게 했거나 특정 그룹에만 첨부 권한을 부여했을 수 있습니다. 첨부 파일을 추가할 수 없는 이유를 모르겠다면 게시판 관리자에게 문의하십시오.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> '첨부 파일을 추가할 수 없는 이유는 무엇입니까?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> '설문 선택지 수의 제한은 게시판 관리자가 설정합니다. 허용된 수보다 많은 선택지가 필요하다면 게시판 관리자에게 문의하십시오.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> '설문 선택지를 더 추가할 수 없는 이유는 무엇입니까?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> '새 주제를 작성하거나 주제의 첫 게시물을 편집할 때 기본 게시 양식 아래의 ‘설문 만들기’ 탭을 클릭하십시오. 탭이 보이지 않으면 설문을 만들 권한이 없는 것입니다. 해당 입력란에 제목과 두 개 이상의 선택지를 입력하고, 각 선택지를 텍스트 영역의 서로 다른 줄에 입력하십시오. ‘사용자당 선택지 수’에서 한 사용자가 선택할 수 있는 수를 정하고, 설문 기간을 일 단위로 설정하며(0은 무기한), 사용자가 투표를 변경할 수 있게 할지도 정할 수 있습니다.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> '설문을 만들려면 어떻게 해야 합니까?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> '게시물과 마찬가지로 설문은 원래 작성자, 운영자 또는 관리자만 편집할 수 있습니다. 설문을 편집하려면 설문이 연결된 주제의 첫 게시물을 편집하십시오. 아직 아무도 투표하지 않았다면 작성자가 설문을 삭제하거나 선택지를 수정할 수 있습니다. 이미 투표한 회원이 있다면 운영자나 관리자만 설문을 편집하거나 삭제할 수 있습니다. 이는 투표가 진행되는 도중 선택지가 바뀌는 것을 막기 위한 것입니다.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> '설문을 수정하거나 삭제하려면 어떻게 합니까?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> '게시판 관리자가 해당 포럼의 게시물을 공개하기 전에 검토하도록 설정했을 수 있습니다. 또는 관리자가 게시 전 검토가 필요한 사용자 그룹에 회원님을 포함했을 수도 있습니다. 자세한 내용은 게시판 관리자에게 문의하십시오.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> '내 게시물이 승인되어야 하는 이유는 무엇입니까?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> '게시판 관리자가 신고 기능을 허용했다면 신고하려는 게시물 옆에 신고 버튼이 표시됩니다. 이 버튼을 클릭하면 게시물 신고 절차가 안내됩니다.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> '게시물을 운영자에게 신고하려면 어떻게 해야 합니까?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> '게시물에 서명을 추가하려면 먼저 사용자 제어판에서 서명을 만들어야 합니다. 서명을 만든 뒤 게시 양식의 <em>서명 첨부</em>를 선택하면 서명이 추가됩니다. 사용자 제어판에서 해당 옵션을 선택해 모든 게시물에 기본적으로 서명을 추가할 수도 있습니다. 이 경우에도 개별 게시물의 게시 양식에서 서명 첨부를 선택 해제하면 해당 게시물에는 서명이 추가되지 않습니다.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> '내 게시물에 서명을 추가하려면 어떻게 합니까?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> '게시판마다 관리자가 정한 고유한 규칙이 있습니다. 규칙을 어기면 경고를 받을 수 있습니다. 경고는 게시판 관리자의 결정이며 phpBB Limited는 개별 사이트의 경고에 관여하지 않습니다. 경고를 받은 이유를 모르겠다면 게시판 관리자에게 문의하십시오.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> '내가 경고를 받은 이유는 무엇입니까?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> '검색 결과가 너무 많아 웹 서버에서 처리하지 못했습니다. ‘고급 검색’을 사용하여 검색어와 검색할 포럼을 더 구체적으로 지정하십시오.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> '검색 결과로 빈 페이지가 표시되는 이유는 무엇입니까?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> '인덱스, 포럼 또는 주제 페이지의 검색 상자에 검색어를 입력하십시오. 게시판의 모든 페이지에 있는 ‘고급 검색’ 링크를 클릭하면 고급 검색을 이용할 수 있습니다. 사용 중인 스타일에 따라 검색 기능에 접근하는 방법이 다를 수 있습니다.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> '하나 이상의 포럼을 검색하려면 어떻게 해야 합니까?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> '회원 목록에서 ‘회원 찾기’ 링크를 클릭하십시오.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> '회원을 검색하려면 어떻게 해야 합니까?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> '검색어가 너무 모호하거나 phpBB에서 색인하지 않는 일반적인 단어가 많이 포함되었을 수 있습니다. 검색어를 더 구체적으로 입력하고 고급 검색의 옵션을 활용하십시오.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> '내 검색 결과가 반환되지 않는 이유는 무엇입니까?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> '사용자 제어판의 ‘내 게시물 보기’, 자신의 프로필 페이지에 있는 ‘사용자의 게시물 검색’, 또는 게시판 상단의 ‘빠른 링크’ 메뉴를 이용해 자신이 작성한 게시물을 찾을 수 있습니다. 자신이 작성한 주제를 찾으려면 고급 검색 페이지에서 관련 옵션을 지정하십시오.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> '내 게시물과 주제를 찾으려면 어떻게 해야 합니까?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> '게시물을 볼 때 사용자 이름과 함께 두 종류의 이미지가 표시될 수 있습니다. 하나는 일반적으로 별, 블록 또는 점 형태의 등급 이미지로, 작성한 게시물 수나 게시판에서의 지위를 나타냅니다. 보통 더 큰 다른 이미지는 아바타라고 하며 사용자마다 고유하거나 개인적인 이미지입니다.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> '사용자 제어판의 ‘프로필’에서 Gravatar, 갤러리, 원격 이미지 또는 업로드의 네 가지 방법 중 하나로 아바타를 추가할 수 있습니다. 아바타 기능을 활성화하고 사용할 수 있는 방법을 정하는 것은 게시판 관리자입니다. 아바타를 사용할 수 없다면 게시판 관리자에게 문의하십시오.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> '아바타를 표시하려면 어떻게 해야 합니까?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> '내 사용자 이름 옆에 있는 이미지는 무엇입니까?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> '가입한 사용자의 모든 설정은 게시판 데이터베이스에 저장됩니다. 설정을 변경하려면 사용자 제어판으로 이동하십시오. 일반적으로 게시판 페이지 상단의 사용자 이름을 클릭하면 링크를 찾을 수 있습니다. 사용자 제어판에서 모든 설정과 환경 설정을 변경할 수 있습니다.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> '설정을 변경하려면 어떻게 합니까?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> '관리자가 이 기능을 활성화한 경우에만 가입한 사용자가 기본 이메일 양식을 통해 다른 사용자에게 이메일을 보낼 수 있습니다. 이는 익명 사용자가 이메일 시스템을 악용하는 것을 막기 위한 것입니다.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> '사용자의 이메일 링크를 클릭하면 왜 로그인을 요구합니까?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> '사용자 제어판의 ‘게시판 환경 설정’에서 <em>온라인 상태 숨기기</em> 옵션을 찾을 수 있습니다. 이 옵션을 활성화하면 관리자, 운영자 및 본인에게만 온라인 상태가 표시되며 숨은 사용자로 집계됩니다.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> '내 사용자 이름이 온라인 사용자 목록에 나타나지 않도록 하려면 어떻게 합니까?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> '관리자가 해당 언어를 설치하지 않았거나 아직 게시판이 그 언어로 번역되지 않았을 수 있습니다. 필요한 언어 팩을 설치해 줄 수 있는지 게시판 관리자에게 문의하십시오. 언어 팩이 없다면 새 번역을 만들 수도 있습니다. 자세한 내용은 <a href="https://www.phpbb.com/">phpBB</a>&reg; 웹사이트에서 확인할 수 있습니다.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> '내 언어가 목록에 없습니다!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> '사용자 이름 아래에 표시되는 등급은 작성한 게시물 수를 나타내거나 운영자와 관리자 같은 특정 사용자를 구분합니다. 게시판 등급의 문구는 관리자가 설정하므로 일반적으로 직접 변경할 수 없습니다. 등급을 올릴 목적으로 불필요한 게시물을 작성하지 마십시오. 대부분의 게시판에서는 이를 허용하지 않으며 운영자나 관리자가 게시물 수를 줄일 수 있습니다.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> '내 등급은 무엇이며 어떻게 변경합니까?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> '시간대를 올바르게 설정했는데도 시간이 틀리다면 서버 시계에 저장된 시간이 잘못된 것입니다. 관리자에게 알려 문제를 해결하도록 하십시오.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> '시간대를 변경했는데도 시간이 틀린 이유는 무엇입니까?',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> '표시되는 시간이 현재 위치의 시간대와 다를 수 있습니다. 이 경우 사용자 제어판에서 런던, 파리, 뉴욕, 시드니 등 현재 지역에 맞는 시간대로 변경하십시오. 다른 설정과 마찬가지로 시간대는 가입한 사용자만 변경할 수 있습니다. 아직 가입하지 않았다면 가입을 고려해 보십시오.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> '시간이 정확하지 않습니다!',
));
