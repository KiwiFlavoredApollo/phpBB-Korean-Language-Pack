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
	'HELP_BBCODE_BLOCK_IMAGES'	=> '게시물에 이미지 표시',
	'HELP_BBCODE_BLOCK_INTRO'	=> '소개',
	'HELP_BBCODE_BLOCK_LINKS'	=> '링크 만들기',
	'HELP_BBCODE_BLOCK_LISTS'	=> '목록 생성',
	'HELP_BBCODE_BLOCK_OTHERS'	=> '기타 사항',
	'HELP_BBCODE_BLOCK_QUOTES'	=> '고정 너비 텍스트 인용 및 출력',
	'HELP_BBCODE_BLOCK_TEXT'	=> '텍스트 서식',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> '이제 게시판 관리자가 첨부파일 기능을 활성화하고 적절한 권한이 부여된 경우 새로운 <strong>[attachment=][/attachment]</strong> BBCode를 사용하여 게시물의 어느 부분에나 첨부파일을 배치할 수 있습니다. 첨부파일을 만들 수 있는 권한. 게시 화면에는 첨부파일을 인라인으로 배치하기 위한 드롭다운 상자(각각 버튼)가 있습니다.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> '게시물에 첨부파일 추가',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBCode는 게시물에 이미지를 포함하기 위한 태그를 통합합니다. 이 태그를 사용할 때 기억해야 할 두 가지 매우 중요한 사항은 다음과 같습니다. 많은 사용자가 게시물에 표시되는 많은 이미지를 좋아하지 않으며, 두 번째로 표시하는 이미지는 이미 인터넷에서 사용할 수 있어야 합니다(예를 들어, 웹 서버를 실행하십시오!). 이미지를 표시하려면 이미지를 가리키는 URL을 <strong>[img][/img]</strong> 태그로 묶어야 합니다. 예:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />위의 URL 섹션에 언급된 것처럼 원하는 경우 <strong>[url][/url]</strong> 태그로 이미지를 래핑할 수 있습니다(예:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />생성:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a> ',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> '게시물에 이미지 추가',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode는 HTML의 특별한 구현입니다. 포럼의 게시물에서 실제로 BBCode를 사용할 수 있는지 여부는 관리자가 결정합니다. 또한 게시 양식을 통해 게시물별로 BBCode를 비활성화할 수 있습니다. BBCode 자체는 HTML과 스타일이 유사하며 태그는 &lt; 및 &gt; 그리고 무엇을 어떻게 표시할지에 대한 더 큰 제어를 제공합니다. 사용 중인 템플릿에 따라 게시물에 BBCode를 추가하는 것이 게시물 양식의 메시지 영역 위에 있는 클릭 가능한 인터페이스를 통해 훨씬 쉬워집니다. 이것으로도 다음 가이드가 유용할 수 있습니다.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'BBCode란 무엇입니까?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'phpBB BBCode는 URL로 더 잘 알려진 URI(Uniform Resource Indicators)를 생성하는 다양한 방법을 지원합니다.<ul><li>첫 번째 방법은 <strong>[url=][/url]</strong> 태그를 사용합니다. = 기호 뒤에 입력하면 해당 태그의 내용이 URL 역할을 합니다. 예를 들어 phpBB.com에 연결하려면 다음을 사용할 수 있습니다.<br /><br /><strong>[url=https://www.phpbb.com/]</strong>phpBB를 방문하세요.<strong>[/url ]</strong><br /><br />다음 링크가 생성됩니다. <a href="https://www.phpbb.com/">phpBB를 방문하세요!</a> 링크가 열리는 것을 확인하세요. 사용자 브라우저 기본 설정에 따라 동일한 창 또는 새 창에서.</li><li>URL 자체를 링크로 표시하려면 다음을 사용하여 간단히 할 수 있습니다.<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />다음 링크가 생성됩니다. <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>또한 phpBB에는 <i>Magic Links</i>라는 기능이 있습니다. 태그 또는 선행 http://를 지정할 필요 없이 구문상 올바른 URL을 링크로 변환합니다. 예를 들어 메시지에 www.phpbb.com을 입력하면 메시지를 볼 때 <a href="http://www.phpbb.com/">www.phpbb.com</a>이 자동으로 출력됩니다.</li><li>이메일 주소에도 동일하게 적용됩니다. 예를 들어 다음과 같이 주소를 명시적으로 지정할 수 있습니다.<br /><br /><strong>[email]</strong>no.one@domain.adr <strong>[/email]</strong><br /><br />출력 <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> 또는 메시지에 no.one@domain.adr을 입력하면 볼 때 자동으로 변환됩니다.</li></ul>모든 BBCode 태그와 마찬가지로 다음과 같은 다른 태그 주위에 URL을 래핑할 수 있습니다. <strong>[img][/img]</strong>(다음 항목 참조), <strong>[b][/b]</strong> 등. 형식 지정 태그와 마찬가지로 올바른 열기 및 닫기 순서는 다음과 같습니다. 예:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb .com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />올바르지 <span style="text-decoration: underline">아니면</span> 게시물이 삭제될 수 있으므로 주의하세요.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> '다른 사이트에 링크',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> '두 번째 유형의 목록인 정렬된 목록을 사용하면 각 항목 앞에 출력되는 내용을 제어할 수 있습니다. 정렬된 목록을 만들려면 <strong>[list=1][/list]</strong>를 사용하여 번호가 매겨진 목록을 만들거나 <strong>[list=a][/list]</strong>를 사용하여 알파벳순 목록을 만듭니다. . 정렬되지 않은 목록과 마찬가지로 항목은 <strong>[*]</strong>를 사용하여 지정됩니다. 예:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>상점으로 이동<br /><strong>[* ]</strong>새 컴퓨터 구입<br /><strong>[*]</strong>컴퓨터가 충돌할 때 맹세합니다<br /><strong>[/list]</strong><br /><br />다음을 생성합니다.<ol style="list-style-type: decimal;"><li>상점으로 이동</li><li>새 컴퓨터 구입</li><li>컴퓨터에서 맹세 충돌할 때</li></ol>알파벳 목록의 경우 다음을 사용합니다.<br /><br /><strong>[list=a]</strong><br /><strong>[*] </strong>첫 번째 가능한 답변<br /><strong>[*]</strong>두 번째 가능한 답변<br /><strong>[*]</strong>세 번째 가능한 답변<br /><strong>[/list]</strong><br /><br />주는<ol style="list-style-type: lower-alpha"><li>첫 번째 가능한 답변</li><li>두 번째 가능한 답변</li><li>세 번째 가능한 답변</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>첫 번째 가능한 답변<br /><strong>[*]</strong>두 번째 가능한 답변<br /><strong>[*]</strong>일 ird 가능한 답변<br /><strong>[/list]</strong><br /><br />주는<ol style="list-style-type: upper-alpha"><li>첫 번째 가능한 답변 </li><li>두 번째 가능한 답변</li><li>세 번째 가능한 답변</li></ol><br /><strong>[list=i]</strong><br /> <strong>[*]</strong>첫 번째 가능한 답변<br /><strong>[*]</strong>두 번째 가능한 답변<br /><strong>[*]</strong>세 번째 가능한 답변 <br /><strong>[/list]</strong><br /><br />주는<ol style="list-style-type: lower-roman"><li>첫 번째 가능한 답변</li><li>두 번째 가능한 답변</li><li>세 번째 가능한 답변</li></ol><br /><strong>[list=I]</strong><br /><strong> [*]</strong>첫 번째 가능한 답변<br /><strong>[*]</strong>두 번째 가능한 답변<br /><strong>[*]</strong>세 번째 가능한 답변<br /><strong>[/list]</strong><br /><br />주는<ol style="list-style-type: upper-roman"><li>첫 번째 가능한 답변</li><li>두 번째 가능한 답변</li><li>세 번째 가능한 답변</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> '정렬된 목록 만들기',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode는 정렬되지 않은 목록과 정렬된 목록의 두 가지 유형을 지원합니다. 본질적으로 HTML과 동일합니다. 순서가 지정되지 않은 목록은 목록의 각 항목을 글머리 기호 문자로 들여쓰기하여 차례로 차례로 출력합니다. 순서 없는 목록을 만들려면 <strong>[목록][/목록]</strong>을 사용하고 <strong>[*]</strong>을 사용하여 목록 내의 각 항목을 정의합니다. 예를 들어 좋아하는 색상을 나열하려면 다음을 사용할 수 있습니다.<br /><br /><strong>[목록]</strong><br /><strong>[*]</strong>빨간색<br /><strong>[*]</strong>파란색<br /><strong>[*]</strong>노란색<br /><strong>[/list]</strong><br /><br />이렇게 하면 다음 목록:<ul><li>빨간색</li><li>파란색</li><li>노란색</li></ul><br />또는 <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong> 또는 <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> '정렬되지 않은 목록 만들기',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> '이 게시판의 관리자이고 적절한 권한이 있는 경우 사용자 지정 BBCode 섹션을 통해 BBCode를 더 추가할 수 있습니다.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> '나만의 태그를 추가할 수 있나요?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> '코드 조각 또는 실제로 고정 너비가 필요한 모든 것을 출력하려는 경우(예: 텍스트를 <strong>[code][/code]</strong> 태그로 묶어야 하는 택배 유형 글꼴(예:<br /><br /><strong>[code]</strong>echo &quot;This is some code;;<strong>[/code]</strong><br /><br /><strong>[code][/code]</strong> 태그 내에서 사용된 모든 형식은 나중에 볼 때 유지됩니다.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> '코드 또는 고정 너비 데이터 출력',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> '인용하거나 인용하지 않는 두 가지 방법으로 텍스트를 인용할 수 있습니다.<ul><li> 인용 기능을 활용하여 게시판의 게시물에 답글을 달면 게시물 텍스트가 <strong>[quote=&quot;&quot;][/quot;]</strong> 블록 이 방법을 사용하면 사람에 대한 참조 또는 당신이 선택하는 다른 무엇이든 인용할 수 있습니다! 예를 들어 Mr. Blobby가 쓴 텍스트를 인용하려면 다음을 입력합니다.<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Mr. Blobby가 쓴 텍스트는 여기에 표시됩니다.<strong>[/quot;</strong><br /><br />결과 출력은 자동으로 &quot;Mr. Blobby는 다음과 같이 썼습니다. 실제 텍스트 전에. 따옴표 &quot;&quot;를 포함해야 <strong>반드시</strong>합니다. 인용하는 이름 주위에는 선택 사항이 아닙니다.</li><li>두 번째 방법을 사용하면 맹목적으로 무언가를 인용할 수 있습니다. 이를 활용하려면 텍스트를 <strong>[quot][/quote]</strong> 태그로 묶습니다. 메시지를 볼 때 따옴표 블록 안에 있는 텍스트만 표시됩니다.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> '답장에 텍스트 인용',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode에는 텍스트의 기본 스타일을 빠르게 변경할 수 있는 태그가 포함되어 있습니다. 이것은 다음과 같은 방법으로 달성됩니다. <ul><li>텍스트를 굵게 만들려면 <strong>[b][/b]</strong>로 묶습니다. 예: <br /><br /><strong>[b]</strong>Hello<strong>[/b]</strong><br /><br /><strong>Hello</strong>가 됩니다.</li><li>밑줄의 경우 <strong>[u][/u]</strong>를 사용합니다. 예:<br /><br /><strong>[u]</strong>Good Morning<strong>[ /u]</strong><br /><br /><span style="text-decoration: underline">Good Morning</span></li><li>텍스트를 기울임꼴로 사용하려면 <strong>[i ][/i]</strong>, 예:<br /><br /><strong>[i]</strong>대단합니다!<strong>[/i]</strong><br /><br /><i>대단합니다!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> '굵게, 기울임꼴 및 밑줄이 있는 텍스트를 만드는 방법',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> '텍스트의 색상이나 크기를 변경하려면 다음 태그를 사용할 수 있습니다. 출력이 표시되는 방식은 뷰어 브라우저 및 시스템에 따라 다릅니다. <ul><li>텍스트 색상을 변경하려면 텍스트를 <strong>[color=][/color]</strong>로 래핑하면 됩니다. 인식된 색상 이름(예: 빨강, 파랑, 노랑 등) 또는 16진수 삼중항 대안(예: #FFFFFF #000000. 예를 들어 빨간색 텍스트를 만들려면 다음을 사용할 수 있습니다.<br /><br /><strong>[color=red]</strong>Hello!<strong>[/color]</strong><br /><br />또는<br /><br /><strong>[color=#FF0000]</strong>안녕하세요!<strong>[/color]</strong><br /><br />둘 다 <span style="color:red">Hello!</span></li><li>텍스트 크기 변경은 <strong>[size=][/size]</strong>를 사용하여 유사한 방식으로 수행됩니다. 이 태그는 사용자가 선택한 템플릿에 따라 다르지만 권장되는 형식은 기본적으로 20(매우 작음)에서 200(매우 큼)까지의 텍스트 크기를 백분율로 나타내는 숫자 값입니다. 예:<br /><br /><strong>[size=30]</strong>SMALL<strong>[/size]</strong><br /><br />일반적으로 <span style="font-size:30%;">작은</span><br /><br />반면:<br /><br /><strong>[size=200]</strong>대단합니다!<strong> [/size]</strong><br /><br /><span style="font-size:200%;">거대합니다!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> '텍스트 색상 또는 크기를 변경하는 방법',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> '예, 물론 예를 들어 다른 사람의 관심을 끌기 위해 다음과 같이 작성할 수 있습니다.<br /><br /><strong>[size=200][color=red][b]</strong>LOOK AT ME!<strong>[/b][/color][/size]</strong><br /><br />출력 <span style="color:red;font-size:200%;"><strong> LOOK AT ME!</strong></span><br /><br />그러나 이와 같은 텍스트를 많이 출력하지 않는 것이 좋습니다! 태그가 올바르게 닫혔는지 확인하는 것은 게시자 사용자에게 달려 있음을 기억하십시오. 예를 들어 다음은 올바르지 않습니다.<br /><br /><strong>[b][u]</strong>잘못된 내용입니다.<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> '서식 태그를 결합할 수 있습니까?',
));
