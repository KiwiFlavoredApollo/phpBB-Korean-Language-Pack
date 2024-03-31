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
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> '각 포럼의 운영자는 특정 첨부 유형을 허용하거나 허용하지 않을 수 있습니다. 무엇을 업로드할 수 있는지 확실하지 않은 경우 포럼 관리자에게 문의하여 도움을 받으십시오.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> '이 포럼에 허용되는 첨부파일은 무엇입니까?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> '업로드한 첨부파일 목록을 찾으려면 사용자 제어판으로 이동하여 첨부파일 섹션에 대한 링크를 따르십시오.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> '내 모든 첨부파일을 찾으려면 어떻게 해야 합니까?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> '첨부파일',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> '구독 및 책갈피',
	'HELP_FAQ_BLOCK_FORMATTING'	=> '서식 및 글 유형',
	'HELP_FAQ_BLOCK_FRIENDS'	=> '친구와 적',
	'HELP_FAQ_BLOCK_GROUPS'	=> '사용자 레벨 및 그룹',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'phpBB 이슈',
	'HELP_FAQ_BLOCK_LOGIN'	=> '로그인 및 가입 문제',
	'HELP_FAQ_BLOCK_PMS'	=> '개인 메시지',
	'HELP_FAQ_BLOCK_POSTING'	=> '게시 이슈',
	'HELP_FAQ_BLOCK_SEARCH'	=> '포럼 검색',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> '사용자 기본 설정 및 설정',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'phpBB 3.0에서 토픽 북마크는 웹 브라우저의 북마크와 매우 유사하게 작동했습니다. 업데이트가 있을 때 알림을 받지 못했습니다. phpBB 3.1부터 북마크는 글를 구독하는 것과 비슷합니다. 북마크된 글가 업데이트되면 알림을 받을 수 있습니다. 그러나 구독하면 포럼의 글나 포럼에 대한 업데이트가 있을 때 알려줍니다. 책갈피 및 구독에 대한 알림 옵션은 사용자 제어판의 "보드 기본 설정"에서 구성할 수 있습니다..',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> '북마크와 구독의 차이점은 무엇입니까?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> '특정 포럼에 가입하려면 포럼에 입장한 후 페이지 하단에 있는 "포럼 가입" 링크를 클릭하십시오.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> '특정 포럼을 구독하려면 어떻게 해야 합니까?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> '구독을 제거하려면 사용자 제어판으로 이동하여 구독 링크를 따르십시오.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> '내 구독을 어떻게 제거합니까?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> '글 토론의 상단과 하단 근처에 편리하게 위치한 "글 도구" 메뉴에서 해당 링크를 클릭하여 특정 글를 책갈피하거나 구독할 수 있습니다.<br />글에 "응답 시 알림 받기 게시됨” 옵션을 선택하면 해당 글도 구독하게 됩니다.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> '특정 글를 북마크하거나 구독하려면 어떻게 합니까?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> '공지 사항에는 현재 읽고 있는 포럼에 대한 중요한 정보가 포함되어 있으므로 가능한 한 항상 읽어야 합니다. 공지 사항은 게시된 포럼의 모든 페이지 상단에 표시됩니다. 글로벌 공지사항과 마찬가지로 공지사항 권한은 보드 관리자가 부여합니다.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> '공지사항이란?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode는 HTML의 특별한 구현으로, 게시물의 특정 개체에 대한 뛰어난 서식 제어를 제공합니다. BBCode의 사용은 관리자에 의해 허용되지만 게시 양식에서 게시물별로 비활성화할 수도 있습니다. BBCode 자체는 HTML과 스타일이 비슷하지만 태그는 &lt; 및 &gt;. BBCode에 대한 자세한 내용은 게시 페이지에서 액세스할 수 있는 가이드를 참조하십시오.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'BBCode란 무엇입니까?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> '글로벌 발표에는 중요한 정보가 포함되어 있으므로 가능한 한 읽어야 합니다. 그들은 모든 포럼의 상단과 사용자 제어판에 나타납니다. 글로벌 발표 권한은 보드 관리자가 부여합니',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> '글로벌 발표는 무엇입니까?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> '아니요. 이 포럼에 HTML을 게시하고 HTML로 렌더링할 수 없습니다. HTML을 사용하여 수행할 수 있는 대부분의 서식은 대신 BBCode를 사용하여 적용할 수 있습니다.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'HTML을 사용할 수 있습니까?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> '글 아이콘은 콘텐츠를 나타내기 위해 게시물과 연결된 작성자가 선택한 이미지입니다. 글 아이콘을 사용하는 기능은 포럼 관리자가 설정한 권한에 따라 다릅니다.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> '글 아이콘이란 무엇입니까?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> '예, 게시물에 이미지를 표시할 수 있습니다. 관리자가 첨부파일을 허용한 경우 포럼에 이미지를 업로드할 수 있습니다. 그렇지 않으면 공개적으로 액세스할 수 있는 웹 서버에 저장된 이미지에 링크해야 합니다. http://www.example.com/my-picture.gif. 자신의 PC에 저장된 사진(공개적으로 액세스할 수 있는 서버가 아닌 경우)이나 인증 메커니즘 뒤에 저장된 이미지에 연결할 수 없습니다. hotmail 또는 yahoo 편지함, 암호로 보호된 사이트 등. 이미지를 표시하려면 BBCode [img] 태그를 사용하십시오.',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> '이미지를 게시할 수 있습니까?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> '잠긴 글은 사용자가 더 이상 응답할 수 없고 포함된 모든 설문조사가 자동으로 종료된 주제입니다. 글은 여러 가지 이유로 잠길 수 있으며 포럼 중재자 또는 포럼 관리자가 이러한 방식으로 설정했습니다. 포럼 관리자가 부여한 권한에 따라 자신의 글을 잠글 수도 있습니다.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> '잠긴 글은 무엇입니까?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> '스마일 또는 이모티콘은 짧은 코드를 사용하여 감정을 표현하는 데 사용할 수 있는 작은 이미지입니다. :)는 행복을 나타내고 :(은 슬픔을 나타냅니다. 이모티콘의 전체 목록은 게시 양식에서 볼 수 있습니다. 그러나 스마일을 남용하지 마십시오. 스마일은 게시물을 빠르게 읽을 수 없게 만들 수 있고 중재자가 편집하거나 삭제할 수 있기 때문입니다. 포럼 관리자가 게시물 내에서 사용할 수 있는 스마일 수를 제한했을 수도 있습니다.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> '스마일이란 무엇입니까?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> '포럼 내의 고정 주제는 공지사항 아래 첫 페이지에만 나타납니다. 그것들은 종종 매우 중요하므로 가능하면 읽어야 합니다. 공지 사항 및 글로벌 공지 사항과 마찬가지로 고정 주제 권한은 보드 관리자가 부여합니다.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> '끈끈한 주제는 무엇입니까?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> '목록을 사용하여 보드의 다른 구성원을 구성할 수 있습니다. 친구 목록에 추가된 구성원은 온라인 상태를 확인하고 비공개 메시지를 보낼 수 있는 빠른 액세스를 위해 사용자 제어판에 나열됩니다. 템플릿 지원에 따라 이러한 사용자의 게시물도 강조 표시될 수 있습니다. 적 목록에 사용자를 추가하면 해당 사용자가 작성한 모든 게시물은 기본적으로 숨겨집니다.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> '내 친구와 적 목록은 무엇입니까?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> '두 가지 방법으로 목록에 사용자를 추가할 수 있습니다. 각 사용자의 프로필에는 친구 또는 적 목록에 추가할 수 있는 링크가 있습니다. 또는 사용자 제어판에서 구성원 이름을 입력하여 사용자를 직접 추가할 수 있습니다. 동일한 페이지를 사용하여 목록에서 사용자를 제거할 수도 있습니다.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> '내 친구 또는 적 목록에 사용자를 어떻게 추가/제거할 수 있습니까?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> '관리자는 전체 보드에 대한 최고 수준의 제어 권한이 할당된 구성원입니다. 이 구성원은 포럼 설립자 및 다른 관리자에게 부여한 권한에 따라 권한 설정, 사용자 금지, 사용자 그룹 또는 중재자 생성 등을 포함하여 포럼 운영의 모든 측면을 제어할 수 있습니다. 그들은 또한 보드 설립자가 제시한 설정에 따라 모든 포럼에서 완전한 중재자 기능을 가질 수 있습니다.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> '관리자란 무엇입니까?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> '이 그룹의 구성원을 쉽게 식별할 수 있도록 보드 관리자가 사용자 그룹의 구성원에 색상을 할당할 수 있습니다.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> '일부 사용자 그룹이 다른 색상으로 나타나는 이유는 무엇입니까?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> '둘 이상의 사용자 그룹의 구성원인 경우 기본적으로 표시되어야 하는 그룹 색상 및 그룹 순위를 결정하는 데 기본값이 사용됩니다. 보드 관리자는 사용자 제어판을 통해 기본 사용자 그룹을 변경할 수 있는 권한을 부여할 수 있습니다.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> '"기본 사용자 그룹"이란 무엇입니까?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> '중재자는 매일 포럼을 돌보는 개인(또는 개인 그룹)입니다. 그들은 게시물을 편집하거나 삭제할 권한이 있으며 자신이 중재하는 포럼에서 글을 잠그고, 잠금 해제하고, 이동하고, 삭제하고, 분할할 수 있습니다. 일반적으로 중재자는 사용자가 주제에서 벗어나거나 모욕적이거나 공격적인 자료를 게시하는 것을 방지하기 위해 존재합니다.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> '중재자란 무엇입니까?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> '이 페이지는 이사회 관리자 및 중재자를 포함한 이사회 직원 목록과 그들이 중재하는 포럼과 같은 기타 세부 정보를 제공합니다.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> '"운영진" 링크란 무엇입니까?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> '사용자 그룹은 커뮤니티를 보드 관리자가 작업할 수 있는 관리 가능한 섹션으로 나누는 사용자 그룹입니다. 각 사용자는 여러 그룹에 속할 수 있으며 각 그룹에는 개별 권한이 할당될 수 있습니다. 이것은 관리자가 중재자 권한을 변경하거나 사용자에게 비공개 포럼에 대한 액세스 권한을 부여하는 등 여러 사용자의 권한을 한 번에 쉽게 변경할 수 있는 방법을 제공합니다.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> '사용자 제어판의 "사용자 그룹" 링크를 통해 모든 사용자 그룹을 볼 수 있습니다. 가입을 원하시면 해당 버튼을 눌러 진행하세요. 그러나 모든 그룹에 공개 액세스 권한이 있는 것은 아닙니다. 일부는 가입 승인이 필요할 수 있고 일부는 폐쇄될 수 있으며 일부는 숨겨진 멤버십이 있을 수도 있습니다. 그룹이 열려 있으면 해당 버튼을 클릭하여 가입할 수 있습니다. 그룹 가입 승인이 필요한 경우 해당 버튼을 클릭하여 가입을 요청할 수 있습니다. 사용자 그룹 리더는 요청을 승인해야 하며 그룹에 가입하려는 이유를 물어볼 수 있습니다. 그룹 리더가 귀하의 요청을 거부하더라도 괴롭히지 마십시오. 그들에게는 나름의 이유가 있을 것입니다.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> '사용자 그룹은 어디에 있으며 어떻게 가입합니까?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> '사용자 그룹 리더는 일반적으로 보드 관리자가 사용자 그룹을 처음 만들 때 할당됩니다. 사용자 그룹을 만드는 데 관심이 있는 경우 첫 번째 연락처는 관리자여야 합니다. 개인 메시지를 보내보십시오.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> '사용자 그룹 리더가 되려면 어떻게 해야 합니까?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> '사용자 그룹이란 무엇입니까?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> '보드 관리자가 옵션을 활성화한 경우 보드의 모든 사용자는 "문의하기" 양식을 사용할 수 있습니다.<br />보드의 구성원은 "운영진" 링크를 사용할 수도 있습니다.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> '보드 관리자에게 어떻게 연락합니까?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> '이 소프트웨어는 phpBB Limited에서 작성하고 라이선스를 받았습니다. 기능을 추가해야 한다고 생각되면 <a href="https://www.phpbb.com/ideas/">phpBB 아이디어 센터</a>를 방문하여 기존 아이디어에 찬성 투표를 하거나 새로운 기능을 제안할 수 있습니다.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'X 기능을 사용할 수 없는 이유는 무엇입니까?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> '"운영진" 페이지에 나열된 모든 관리자는 불만 사항에 대한 적절한 연락처여야 합니다. 그래도 응답이 없으면 도메인 소유자에게 문의해야 합니다(<a href="http://www.google.com/search?q=whois">whois 조회</a> 수행). 이것은 무료 서비스(예: Yahoo!, free.fr, f2s.com 등), 해당 서비스의 관리 또는 남용 부서에서 실행됩니다. phpBB Limited는 <strong>전혀 관할권이 없으며</strong> 이 포럼을 누가, 어디서, 어떻게 사용하는지에 대해 어떠한 책임도 지지 않습니다. phpBB.com 웹사이트 또는 phpBB 자체의 개별 소프트웨어와 <strong>직접 관련이 없는</strong> 법적 문제(중단, 책임, 명예 훼손 등) 문제와 관련하여 phpBB Limited에 연락하지 마십시오. 이 소프트웨어의 <strong>제3자</strong> 사용에 대해 phpBB Limited에 이메일을 보내면 간결한 응답을 받거나 전혀 응답하지 않을 것입니다.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> '이 포럼과 관련된 학대 및/또는 법적 문제에 대해 누구에게 연락해야 합니까?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> '이 소프트웨어(수정되지 않은 형태)는 <a href="https://www.phpbb.com/">phpBB Limited</a>의 저작권으로 제작, 출시되었습니다. GNU General Public License 버전 2(GPL-2.0)에 따라 제공되며 자유롭게 배포할 수 있습니다. 자세한 내용은 <a href="https://www.phpbb.com/about/">phpBB 정보</a>를 참조하세요.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> '누가 이 포럼을 사용했습니까?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> '로그인할 때 <em>기억하기</em> 확인란을 선택하지 않으면 포럼은 미리 설정된 시간 동안만 로그인 상태를 유지합니다. 이렇게 하면 다른 사람이 귀하의 계정을 오용하는 것을 방지할 수 있습니다. 로그인 상태를 유지하려면 로그인하는 동안 <em>기억하기</em> 상자를 선택하십시오. 공유 컴퓨터에서 보드에 액세스하는 경우에는 권장하지 않습니다. 도서관, 인터넷 카페, 대학 컴퓨터실 등. 이 확인란이 표시되지 않으면 관리자가 이 기능을 비활성화했음을 의미합니다.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> '자동으로 로그오프되는 이유는 무엇입니까?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> '이 문제가 발생할 수 있는 몇 가지 이유가 있습니다. 먼저 사용자 이름과 비밀번호가 올바른지 확인하십시오. 만약 올바르다면 운영자에게 연락하여 차단되지 않았는지 확인하십시오. 또한 웹 사이트 소유자가 구성 오류를 가지고 있을 수 있으며 그렇다면 오류를 제거하는대 재보해주시고 시간을 주셔야합니다.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> '관리자 또는 운영자가 어떤 이유로 당신의 계정을 비활성화하거나 삭제했을 수 있습니다. 또한 게시물의 데이터베이스의 크기를 줄이기 위해 오랫동안 게시하지 않은 사용자를 주기적으로 제거합니다. 이런 일이 발생하면 다시 등록하고 토론에 더 많이 참여하십시오.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> '예전에 가입했는데 더 이상 로그인이 안되나요?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> '왜 로그인이 안되나요?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> '새로운 방문자가 등록하지 못하도록 보드 관리자가 등록을 비활성화했을 수 있습니다. 포럼 운영자가 귀하의 IP 주소를 금지하였거나 등록하려는 사용자 이름을 허용하지 않았을 수도 있습니다.(사용자 이름은 ID 랑동일한 개념으로 영문과 숫자만 사용가능합니다.) 도움이 필요하면 보드 관리자에게 문의하십시오.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> '왜 가입할 수 없나요?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA 또는 1998년 아동 온라인 개인정보 보호법은 13세 미만의 미성년자로부터 정보를 잠재적으로 수집할 수 있는 웹사이트에 대해 서면 부모 동의 또는 법적 보호자 승인의 다른 방법을 요구하는 미국 법률입니다. 13세 미만 미성년자의 개인 식별 정보. 이것이 등록하려는 사람이나 등록하려는 웹사이트에 적용되는지 확실하지 않은 경우 법률 고문에게 도움을 요청하십시오."한글 언어팩을 사용하는 경우 한국일것이므로 해당 없습니다.(다만 외국에서 한글언어팩을 사용하시는 경우를 대비하여 놔둔 내용입니다.)"',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'COPPA란 무엇입니까?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '“쿠키 삭제”는 phpBB에서 생성한 쿠키를 삭제하여 인증 및 로그인 상태를 유지합니다. 쿠키는 관리자가 활성화한 경우 읽기 추적과 같은 기능도 제공합니다. 로그인 또는 로그아웃 문제가 있는 경우 보드 쿠키를 삭제하면 도움이 될 수 있습니다.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> '"쿠키 삭제"의 기능은 무엇입니까?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> '당황하지 마세요! 비밀번호는 검색할 수 없지만 쉽게 재설정할 수 있습니다. 로그인 페이지를 방문하여 <em>비밀번호를 잊어버렸습니다</em>를 클릭하십시오. 안내를 따르면 곧 다시 로그인할 수 있습니다.<br />단, 비밀번호를 재설정할 수 없는 경우 포럼 관리자에게 문의하세요.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> '비밀번호를 분실했습니다!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> '구지 가입을 하실 필요는 없습니다. 게시물를 게시하기 위해 등록해야 하는지 여부는 포럼 운영자가 결정 합니다. 그리고 수많은 스팸 해킹시도 등을 어느정도 거르기 위해서도 있습니다. 다만 가입하면 아바타 이미지, 개인 메시지, 회원 끼리의 이메일 보내기, 사용자 그룹 구독 등과 같이 게스트 사용자가 사용할 수 없는 추가 기능에 액세스할 수 있습니다. 등록하는 데 몇 분 밖에 걸리지 않으므로 등록하는 것을 추천 드립니다.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> '먼저 사용자 이름과 비밀번호를 확인합니다. 그들이 맞다면 두 가지 중 하나가 발생했을 수 있습니다. COPPA 지원이 활성화되어 있고 등록 시 13세 미만으로 지정한 경우 받은 지침을 따라야 합니다. 일부 보드는 로그온하기 전에 자신이나 관리자가 새로 등록해야 활성화할 수도 있습니다. 이 정보는 등록 중에 있었습니다. 이메일을 받은 경우 지침을 따르십시오. 이메일을 받지 못한 경우 잘못된 이메일 주소를 제공했거나 스팸 신고자가 이메일을 수신했을 수 있습니다. 제공한 이메일 주소가 정확하다면 관리자에게 문의하십시오.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> '가입했는데 로그인이 안됩니다!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> '왜 가입해야 합니까?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> '여기에는 세 가지 이유가 있습니다. 등록되지 않았거나 로그온하지 않았거나, 포럼 관리자가 전체 포럼에 대해 비공개 메시지를 비활성화했거나, 포럼 관리자가 메시지를 보내는 것을 차단했습니다. 자세한 내용은 이사회 관리자에게 문의하십시오.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> '비공개 메시지를 보낼 수 없습니다!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> '죄송합니다. 이 포럼의 이메일 양식 기능에는 그러한 게시물을 보내는 사용자를 추적하고 추적할 수 있는 보호 장치가 포함되어 있으므로 받은 이메일의 전체 사본을 포럼 관리자에게 이메일로 보내주십시오. 여기에는 이메일을 보낸 사용자의 세부 정보가 포함된 헤더가 포함되어야 합니다. 그러면 이사회 관리자가 조치를 취할 수 있습니다.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> '이 포럼에 있는 누군가로부터 스팸성 또는 모욕적인 이메일을 받았습니다!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> '사용자 제어판에서 메시지 규칙을 사용하여 사용자의 개인 메시지를 자동으로 삭제할 수 있습니다. 특정 사용자로부터 악의적인 개인 메시지를 수신하는 경우 해당 메시지를 중재자에게 보고하십시오. 사용자가 개인 메시지를 보내는 것을 방지할 수 있는 권한이 있습니다.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> '원치 않는 개인 메시지를 계속 받고 있습니다!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> '보고 있는 동안 "토픽 범프" 링크를 클릭하면 첫 페이지의 포럼 맨 위로 토픽을 "범프"할 수 있습니다. 그러나 이것이 표시되지 않으면 주제 범핑이 비활성화되었거나 범프 사이의 허용 시간에 아직 도달하지 않았을 수 있습니다. 단순히 답글을 달아 화제를 모을 수도 있지만, 그렇게 할 때는 반드시 포럼 규칙을 따라야 합니다.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> '내 글을 어떻게 충돌합니까?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> '포럼에 새 글을 게시하려면 "새 주제"를 클릭하십시오. 주제에 대한 답글을 게시하려면 "답글 게시"를 클릭하세요. 메시지를 게시하기 전에 등록해야 할 수도 있습니다. 각 포럼의 권한 목록은 포럼 및 주제 화면 하단에서 확인할 수 있습니다. 예: 새 글을 게시할 수 있습니다. 첨부파일을 게시할 수 있습니다.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> '새 주제를 만들거나 답글을 게시하려면 어떻게 합니까?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> '이렇게 하면 나중에 작성하여 제출할 초안을 저장할 수 있습니다. 저장된 초안을 다시 로드하려면 사용자 제어판을 방문하십시오.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> '글 게시에서 "저장" 버튼은 무엇입니까?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> '포럼 관리자 또는 중재자가 아닌 이상 자신의 게시물만 수정하거나 삭제할 수 있습니다. 해당 게시물의 수정 버튼을 클릭하여 게시물을 수정할 수 있으며, 경우에 따라 게시물 작성 후 제한된 시간 동안만 가능합니다. 누군가가 이미 게시물에 답글을 달았다면, 게시물 아래에 날짜 및 시간과 함께 편집한 횟수가 나열된 주제로 돌아가 작은 텍스트 출력을 찾을 수 있습니다. 이것은 누군가가 답장을 한 경우에만 나타납니다. 중재자 또는 관리자가 게시물을 수정한 경우에는 표시되지 않지만, 자신의 재량에 따라 게시물을 수정한 이유에 대한 메모를 남길 수 있습니다. 일반 사용자는 누군가가 답글을 작성한 게시물을 삭제할 수 없습니다.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> '게시물 수정 또는 삭제는 어떻게 하나요?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> '일부 포럼은 특정 사용자 또는 그룹으로 제한될 수 있습니다. 보기, 읽기, 게시 또는 다른 작업을 수행하려면 특별한 권한이 필요할 수 있습니다. 액세스 권한을 부여하려면 중재자 또는 포럼 관리자에게 문의하세요.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> '포럼에 액세스할 수 없는 이유는 무엇입니까?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> '첨부파일 권한은 포럼, 그룹 또는 사용자별로 부여됩니다. 포럼 관리자가 귀하가 게시 중인 특정 포럼에 첨부파일을 추가하는 것을 허용하지 않았거나 특정 그룹만 첨부파일을 게시할 수 있도록 허용하지 않았을 수 있습니다. 첨부파일을 추가할 수 없는 이유가 확실하지 않은 경우 포럼 관리자에게 문의하십시오.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> '첨부파일을 추가할 수 없는 이유는 무엇입니까?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> '투표 옵션에 대한 제한은 포럼 관리자가 설정합니다. 투표에 허용된 금액보다 더 많은 옵션을 추가해야 한다고 생각되면 포럼 관리자에게 문의하십시오.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> '투표 옵션을 더 추가할 수 없는 이유는 무엇입니까?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> '새 주제를 게시하거나 주제의 첫 번째 게시물을 편집할 때 기본 게시 양식 아래에 있는 "설문조사 작성" 탭을 클릭하십시오. 이것을 볼 수 없다면 투표를 생성할 적절한 권한이 없는 것입니다. 해당 필드에 제목과 두 개 이상의 옵션을 입력하고 각 옵션이 텍스트 영역의 별도 행에 있는지 확인합니다. 또한 "사용자당 옵션"에서 투표하는 동안 사용자가 선택할 수 있는 옵션의 수, 투표 시간 제한(0은 무한 기간), 마지막으로 사용자가 투표를 수정할 수 있는 옵션을 설정할 수 있습니다.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> '설문조사는 어떻게 만듭니까?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> '게시물과 마찬가지로 설문조사는 원본 게시자, 중재자 또는 관리자만 편집할 수 있습니다. 설문조사를 편집하려면 주제의 첫 번째 게시물을 클릭하여 편집합니다. 이것은 항상 그것과 관련된 투표를 가지고 있습니다. 아무도 투표하지 않은 경우 사용자는 투표를 삭제하거나 투표 옵션을 편집할 수 있습니다. 그러나 회원이 이미 투표를 한 경우 중재자 또는 관리자만 편집하거나 삭제할 수 있습니다. 이렇게 하면 투표 도중에 투표 옵션이 변경되는 것을 방지할 수 있습니다.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> '설문을 수정하거나 삭제하려면 어떻게 합니까?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> '포럼 관리자는 귀하가 게시하는 포럼의 게시물을 제출하기 전에 검토가 필요하다고 결정했을 수 있습니다. 관리자가 게시물을 제출하기 전에 검토가 필요한 사용자 그룹에 귀하를 배치했을 수도 있습니다. 자세한 내용은 이사회 관리자에게 문의하십시오.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> '내 게시물이 승인되어야 하는 이유는 무엇입니까?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> '포럼 관리자가 허용한 경우 신고하려는 게시물 옆에 게시물 신고 버튼이 표시됩니다. 이를 클릭하면 게시물을 신고하는 데 필요한 단계로 이동합니다.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> '중재자에게 게시물을 보고하려면 어떻게 해야 합니까?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> '게시물에 서명을 추가하려면 먼저 사용자 제어판을 통해 서명을 생성해야 합니다. 생성되면 게시 양식에서 <em>서명 첨부</em> 상자를 선택하여 서명을 추가할 수 있습니다. 사용자 제어판에서 해당 라디오 버튼을 선택하여 기본적으로 모든 게시물에 서명을 추가할 수도 있습니다. 그렇게 하는 경우에도 게시 양식에서 서명 추가 상자를 선택 취소하여 개별 게시물에 서명이 추가되는 것을 방지할 수 있습니다.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> '내 게시물에 서명을 추가하려면 어떻게 합니까?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> '각 보드 관리자는 자신의 사이트에 대한 고유한 규칙 집합을 가지고 있습니다. 규칙을 어겼을 경우 경고를 받을 수 있습니다. 이것은 보드 관리자의 결정이며 phpBB Limited는 해당 사이트의 경고와 아무 관련이 없습니다. 경고를 받은 이유가 확실하지 않은 경우 이사회 관리자에게 문의하십시오.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> '내가 경고를 받은 이유는 무엇입니까?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> '웹 서버가 처리할 수 없는 검색 결과가 너무 많습니다. "고급 검색"을 사용하고 사용된 용어와 검색할 포럼에서 보다 구체적으로 검색하십시오.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> '내 검색에서 빈 페이지가 반환되는 이유는 무엇입니까!?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> '색인, 포럼 또는 주제 페이지에 있는 검색 상자에 검색어를 입력하십시오. 포럼의 모든 페이지에서 사용할 수 있는 "고급 검색" 링크를 클릭하면 고급 검색에 액세스할 수 있습니다. 검색에 액세스하는 방법은 사용된 스타일에 따라 다를 수 있습니다.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> '포럼을 검색하려면 어떻게 해야 합니까?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> '"회원" 페이지를 방문하여 "회원 찾기" 링크를 클릭하십시오.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> '회원 검색은 어떻게 하나요?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> '귀하의 검색은 아마도 너무 모호했고 phpBB에 의해 인덱싱되지 않은 많은 일반적인 용어를 포함했습니다. 더 구체적이고 고급 검색에서 사용할 수 있는 옵션을 사용하십시오.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> '내 검색 결과가 반환되지 않는 이유는 무엇입니까?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> '사용자 제어판에서 "게시물 표시" 링크를 클릭하거나 자신의 프로필 페이지를 통해 "사용자 게시물 검색" 링크를 클릭하거나 상단의 "빠른 링크" 메뉴를 클릭하여 자신의 게시물을 검색할 수 있습니다. 판자. 주제를 검색하려면 고급 검색 페이지를 사용하고 다양한 옵션을 적절하게 입력하십시오.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> '내 게시물과 주제를 찾으려면 어떻게 해야 합니까?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> '게시물을 볼 때 사용자 이름과 함께 두 개의 이미지가 나타날 수 있습니다. 그 중 하나는 일반적으로 게시한 게시물 수 또는 포럼의 상태를 나타내는 별, 블록 또는 점 형태의 순위와 관련된 이미지일 수 있습니다. 일반적으로 더 큰 다른 이미지는 아바타로 알려져 있으며 일반적으로 각 사용자에게 고유하거나 개인적입니다.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> '사용자 제어판의 "프로필" 아래에서 Gravatar, 갤러리, 원격 또는 업로드의 네 가지 방법 중 하나를 사용하여 아바타를 추가할 수 있습니다. 아바타를 활성화하고 아바타를 사용할 수 있는 방법을 선택하는 것은 보드 관리자에게 달려 있습니다. 아바타를 사용할 수 없는 경우 포럼 관리자에게 문의하세요.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> '아바타를 어떻게 표시합니까?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> '내 사용자 이름 옆에 있는 이미지는 무엇입니까?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> '정식 사용자인 경우 모든 설정이 보드 데이터베이스에 저장됩니다. 변경하려면 사용자 제어판을 방문하십시오. 링크는 일반적으로 보드 페이지 상단에 있는 사용자 이름을 클릭하면 찾을 수 있습니다. 이 시스템을 사용하면 모든 설정과 기본 설정을 변경할 수 있습니다.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> '설정을 변경하려면 어떻게 합니까?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> '정식 사용자만 기본 제공 이메일 양식을 통해 다른 사용자에게 이메일을 보낼 수 있으며 관리자가 이 기능을 활성화한 경우에만 가능합니다. 이는 익명의 사용자가 이메일 시스템을 악의적으로 사용하는 것을 방지하기 위한 것입니다.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> '사용자의 이메일 링크를 클릭하면 로그인하라는 메시지가 표시됩니까?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> '사용자 제어판의 "포럼 기본 설정"에서 <em>온라인 상태 숨기기</em> 옵션을 찾을 수 있습니다. 이 옵션을 활성화하면 관리자, 중재자 및 본인에게만 표시됩니다. 숨겨진 사용자로 간주됩니다.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> '내 사용자 이름이 온라인 사용자 목록에 나타나지 않도록 하려면 어떻게 합니까?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> '관리자가 귀하의 언어를 설치하지 않았거나 아무도 이 포럼을 귀하의 언어로 번역하지 않았습니다. 필요한 언어 팩을 설치할 수 있는지 포럼 관리자에게 문의하십시오. 언어 팩이 존재하지 않는 경우 자유롭게 새 번역을 만드십시오. 자세한 내용은 <a href="https://www.phpbb.com/">phpBB</a>&reg; 웹사이트.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> '내 언어가 목록에 없습니다!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> '사용자 이름 아래에 표시되는 순위는 내가 작성한 게시물 수를 나타내거나 특정 사용자를 식별합니다. 중재자 및 관리자. 일반적으로 보드 관리자가 설정한 보드 순위의 문구는 직접 변경할 수 없습니다. 단순히 순위를 올리기 위해 불필요하게 포럼을 악용하지 마시기 바랍니다. 대부분의 포럼은 이를 용납하지 않으며 중재자나 관리자는 단순히 게시물 수를 줄입니다.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> '내 순위는 무엇이며 어떻게 변경합니까?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> '시간대를 올바르게 설정했는데도 여전히 시간이 정확하지 않으면 서버 시계에 저장된 시간이 잘못된 것입니다. 문제를 해결하려면 관리자에게 알리십시오.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> '시간대를 변경했는데 여전히 시간이 틀리네요!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> '표시된 시간이 현재 있는 시간대와 다를 수 있습니다. 이 경우 사용자 제어판을 방문하여 특정 지역과 일치하도록 시간대를 변경하십시오. 런던, 파리, 뉴욕, 시드니 등 대부분의 설정과 마찬가지로 시간대 변경은 정식 사용자만 수행할 수 있습니다. 등록하지 않으셨다면 지금이 좋은 기회입니다.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> '시간이 정확하지 않습니다!',
));
