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
	'HELP_BBCODE_BLOCK_QUOTES'	=> '인용 및 고정 폭 텍스트 출력',
	'HELP_BBCODE_BLOCK_TEXT'	=> '텍스트 서식',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> '게시판 관리자가 첨부 파일 기능을 활성화하고 첨부 파일 작성 권한을 부여한 경우 <strong>[attachment=][/attachment]</strong> BBCode를 사용하여 게시물의 원하는 위치에 첨부 파일을 배치할 수 있습니다. 게시 화면에는 첨부 파일을 본문에 삽입하기 위한 드롭다운 상자 또는 버튼이 있습니다.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> '게시물에 첨부 파일 추가',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBCode에는 게시물에 이미지를 삽입하는 태그가 있습니다. 이 태그를 사용할 때는 두 가지를 기억해야 합니다. 많은 이미지는 다른 사용자의 이용에 불편을 줄 수 있으며, 표시할 이미지는 인터넷에서 접근할 수 있어야 합니다(직접 웹 서버를 운영하지 않는 한 컴퓨터에만 저장된 이미지는 사용할 수 없습니다). 이미지를 표시하려면 이미지 URL을 <strong>[img][/img]</strong> 태그로 감싸십시오. 예:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />위의 URL 항목에서 설명한 것처럼 이미지를 <strong>[url][/url]</strong> 태그로 감싸 링크를 만들 수도 있습니다. 예:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />결과:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> '게시물에 이미지 추가',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode는 HTML을 특별한 방식으로 구현한 것입니다. 포럼 게시물에서 BBCode를 사용할 수 있는지는 관리자가 결정합니다. 게시 양식에서 각 게시물의 BBCode를 비활성화할 수도 있습니다. BBCode는 HTML과 비슷하지만 태그를 &lt; 및 &gt; 대신 대괄호 [ 및 ]로 감싸며, 표시할 내용과 방식을 더 세밀하게 제어할 수 있습니다. 사용 중인 템플릿에 따라 게시 양식의 메시지 입력란 위에 있는 버튼으로 BBCode를 쉽게 추가할 수 있습니다. 그래도 다음 안내가 도움이 될 수 있습니다.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'BBCode란 무엇입니까?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'phpBB BBCode는 URL로 더 잘 알려진 URI(통합 자원 식별자)를 만드는 여러 방법을 지원합니다.<ul><li>첫 번째 방법은 <strong>[url=][/url]</strong> 태그를 사용하는 것입니다. = 기호 뒤에 주소를 입력하면 태그 안의 내용이 해당 URL의 링크가 됩니다. 예를 들어 phpBB.com으로 연결하려면 다음과 같이 작성합니다.<br /><br /><strong>[url=https://www.phpbb.com/]</strong>phpBB 방문하기!<strong>[/url]</strong><br /><br />다음 링크가 생성됩니다. <a href="https://www.phpbb.com/">phpBB 방문하기!</a> 링크는 사용자의 브라우저 설정에 따라 현재 창이나 새 창에서 열립니다.</li><li>URL 자체를 링크로 표시하려면 다음과 같이 작성합니다.<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />다음 링크가 생성됩니다. <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>phpBB에는 <i>자동 링크</i> 기능도 있습니다. 이 기능은 별도의 태그나 앞부분의 http:// 없이도 올바른 형식의 URL을 링크로 바꿉니다. 예를 들어 메시지에 www.phpbb.com을 입력하면 메시지를 볼 때 <a href="http://www.phpbb.com/">www.phpbb.com</a>이 자동으로 링크가 됩니다.</li><li>이메일 주소에도 같은 기능이 적용됩니다. 다음과 같이 주소를 명시할 수 있습니다.<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />그러면 <a href="mailto:no.one@domain.adr">no.one@domain.adr</a>이 출력됩니다. 메시지에 no.one@domain.adr만 입력해도 볼 때 자동으로 링크로 변환됩니다.</li></ul>다른 모든 BBCode 태그와 마찬가지로 URL 태그 안에 <strong>[img][/img]</strong>(다음 항목 참조), <strong>[b][/b]</strong> 등의 태그를 넣을 수 있습니다. 서식 태그와 마찬가지로 여는 태그와 닫는 태그의 순서를 올바르게 맞춰야 합니다. 예:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />위 예는 <span style="text-decoration: underline">올바르지 않습니다</span>. 잘못된 태그로 인해 게시물이 삭제될 수도 있으므로 주의하십시오.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> '다른 사이트에 링크',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> '두 번째 목록 유형인 순서 있는 목록에서는 각 항목 앞에 표시할 기호를 선택할 수 있습니다. 숫자 목록은 <strong>[list=1][/list]</strong>, 알파벳 목록은 <strong>[list=a][/list]</strong>를 사용합니다. 순서 없는 목록과 마찬가지로 각 항목은 <strong>[*]</strong>로 지정합니다. 예:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>가게에 가기<br /><strong>[*]</strong>새 컴퓨터 구입하기<br /><strong>[*]</strong>컴퓨터가 고장 나면 불평하기<br /><strong>[/list]</strong><br /><br />다음과 같이 표시됩니다.<ol style="list-style-type: decimal;"><li>가게에 가기</li><li>새 컴퓨터 구입하기</li><li>컴퓨터가 고장 나면 불평하기</li></ol>알파벳 목록은 다음과 같이 작성합니다.<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>첫 번째 답변<br /><strong>[*]</strong>두 번째 답변<br /><strong>[*]</strong>세 번째 답변<br /><strong>[/list]</strong><br /><br />결과:<ol style="list-style-type: lower-alpha"><li>첫 번째 답변</li><li>두 번째 답변</li><li>세 번째 답변</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>첫 번째 답변<br /><strong>[*]</strong>두 번째 답변<br /><strong>[*]</strong>세 번째 답변<br /><strong>[/list]</strong><br /><br />결과:<ol style="list-style-type: upper-alpha"><li>첫 번째 답변</li><li>두 번째 답변</li><li>세 번째 답변</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>첫 번째 답변<br /><strong>[*]</strong>두 번째 답변<br /><strong>[*]</strong>세 번째 답변<br /><strong>[/list]</strong><br /><br />결과:<ol style="list-style-type: lower-roman"><li>첫 번째 답변</li><li>두 번째 답변</li><li>세 번째 답변</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>첫 번째 답변<br /><strong>[*]</strong>두 번째 답변<br /><strong>[*]</strong>세 번째 답변<br /><strong>[/list]</strong><br /><br />결과:<ol style="list-style-type: upper-roman"><li>첫 번째 답변</li><li>두 번째 답변</li><li>세 번째 답변</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> '정렬된 목록 만들기',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode는 순서 없는 목록과 순서 있는 목록을 지원하며, 기본적으로 HTML 목록과 같습니다. 순서 없는 목록은 각 항목을 글머리 기호와 함께 차례로 표시합니다. 순서 없는 목록을 만들려면 <strong>[list][/list]</strong>를 사용하고 목록의 각 항목을 <strong>[*]</strong>로 지정합니다. 좋아하는 색상을 나열하는 예는 다음과 같습니다.<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>빨간색<br /><strong>[*]</strong>파란색<br /><strong>[*]</strong>노란색<br /><strong>[/list]</strong><br /><br />다음 목록이 생성됩니다.<ul><li>빨간색</li><li>파란색</li><li>노란색</li></ul><br />글머리 기호 모양은 <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong> 또는 <strong>[list=square][/list]</strong>로 지정할 수도 있습니다.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> '정렬되지 않은 목록 만들기',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> '이 게시판의 관리자이고 적절한 권한이 있는 경우 사용자 지정 BBCode 섹션을 통해 BBCode를 더 추가할 수 있습니다.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> '나만의 태그를 추가할 수 있나요?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> '코드 조각이나 Courier 계열 글꼴처럼 고정 폭으로 표시해야 하는 내용을 출력하려면 텍스트를 <strong>[code][/code]</strong> 태그로 감싸십시오. 예:<br /><br /><strong>[code]</strong>echo &quot;샘플 코드입니다&quot;;<strong>[/code]</strong><br /><br /><strong>[code][/code]</strong> 태그 안에서 사용한 서식은 나중에 볼 때도 그대로 유지됩니다.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> '코드 또는 고정 너비 데이터 출력',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> '텍스트는 출처를 표시하거나 표시하지 않는 두 가지 방법으로 인용할 수 있습니다.<ul><li>게시물에 답글을 작성하면서 인용 기능을 사용하면 원문이 <strong>[quote=&quot;&quot;][/quote]</strong> 블록 안에 추가됩니다. 이 방법으로 작성자나 원하는 대상을 표시할 수 있습니다. 예를 들어 Mr. Blobby가 작성한 텍스트를 인용하려면 다음과 같이 입력합니다.<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Mr. Blobby가 작성한 텍스트가 여기에 들어갑니다.<strong>[/quote]</strong><br /><br />결과에는 실제 인용문 앞에 &quot;Mr. Blobby 님이 작성:&quot;이 자동으로 추가됩니다. 인용할 이름 주위에는 따옴표 &quot;&quot;를 <strong>반드시</strong> 넣어야 합니다.</li><li>두 번째 방법은 출처 없이 내용을 인용합니다. 텍스트를 <strong>[quote][/quote]</strong> 태그로 감싸십시오. 메시지를 볼 때 해당 텍스트가 인용 블록 안에 표시됩니다.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> '답장에 텍스트 인용',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode에는 텍스트의 기본 서식을 빠르게 바꾸는 태그가 있습니다. 사용 방법은 다음과 같습니다. <ul><li>텍스트를 굵게 표시하려면 <strong>[b][/b]</strong>로 감쌉니다. 예: <br /><br /><strong>[b]</strong>안녕하세요<strong>[/b]</strong><br /><br /><strong>안녕하세요</strong>로 표시됩니다.</li><li>밑줄은 <strong>[u][/u]</strong>를 사용합니다. 예:<br /><br /><strong>[u]</strong>좋은 아침입니다<strong>[/u]</strong><br /><br /><span style="text-decoration: underline">좋은 아침입니다</span></li><li>기울임꼴은 <strong>[i][/i]</strong>를 사용합니다. 예:<br /><br />정말 <strong>[i]</strong>멋집니다!<strong>[/i]</strong><br /><br />정말 <i>멋집니다!</i>로 표시됩니다.</li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> '굵게, 기울임꼴 및 밑줄이 있는 텍스트를 만드는 방법',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> '텍스트의 색상이나 크기를 변경하려면 다음 태그를 사용합니다. 표시 결과는 사용자의 브라우저와 시스템에 따라 달라질 수 있습니다. <ul><li>텍스트 색상을 바꾸려면 <strong>[color=][/color]</strong>로 감쌉니다. red, blue, yellow와 같은 색상 이름이나 #FFFFFF, #000000과 같은 16진수 색상 값을 사용할 수 있습니다. 빨간색 텍스트를 만드는 예는 다음과 같습니다.<br /><br /><strong>[color=red]</strong>안녕하세요!<strong>[/color]</strong><br /><br />또는<br /><br /><strong>[color=#FF0000]</strong>안녕하세요!<strong>[/color]</strong><br /><br />둘 다 <span style="color:red">안녕하세요!</span>로 표시됩니다.</li><li>텍스트 크기는 <strong>[size=][/size]</strong>를 사용하여 비슷한 방식으로 변경합니다. 이 태그의 결과는 사용자가 선택한 템플릿에 따라 달라질 수 있습니다. 권장 형식은 텍스트 크기를 백분율로 나타내는 숫자이며, 기본적으로 20(매우 작음)부터 200(매우 큼)까지 사용할 수 있습니다. 예:<br /><br /><strong>[size=30]</strong>작게<strong>[/size]</strong><br /><br />일반적으로 <span style="font-size:30%;">작게</span> 표시됩니다.<br /><br />반면:<br /><br /><strong>[size=200]</strong>아주 크게!<strong>[/size]</strong><br /><br /><span style="font-size:200%;">아주 크게!</span> 표시됩니다.</li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> '텍스트 색상 또는 크기를 변경하는 방법',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> '물론 가능합니다. 예를 들어 다른 사람의 주의를 끌기 위해 다음과 같이 작성할 수 있습니다.<br /><br /><strong>[size=200][color=red][b]</strong>여기를 보세요!<strong>[/b][/color][/size]</strong><br /><br />그러면 <span style="color:red;font-size:200%;"><strong>여기를 보세요!</strong></span>로 표시됩니다.<br /><br />다만 이런 형태의 텍스트를 지나치게 많이 사용하지 않는 것이 좋습니다. 작성자는 태그가 올바른 순서로 닫혔는지 확인해야 합니다. 예를 들어 다음은 잘못된 사용법입니다.<br /><br /><strong>[b][u]</strong>잘못된 내용입니다.<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> '서식 태그를 결합할 수 있습니까?',
));
