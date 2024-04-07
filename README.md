# README

## 개요

이 깃허브 저장소는 [IT온세미로](http://bb.itosm.com)에서 syskiller님이 작업한 phpBB 3.3.5 한국어팩을 기반으로 하고 있다. 이 한국어팩은 [ColdBrew phpBB 포럼](https://forum.fractalcoffee.duckdns.org)에서 사용하고 있다. 

## 목표

1. phpBB 3.3.11에 호환되도록 만든다.
2. 자연스러운 한국어 인터페이스를 만든다.

## 설치방법

`ko/` 디렉토리를 `phpbb/language/` 디렉토리로 복사한다.

## 어휘 목록

일관성있게 작업하기위해 기록해두는 것일 뿐, 반드시 지킬 필요는 없다.

user 사용자  
guest 손님  
registered user 가입자  
member 회원  

online user 접속자  
offline user  미접속자

private 개인  
hidden 비공개  
forum 포럼  
board 게시판  

topic 주제글, 글  
thread 글타래  
post 게시글  
reply 답글, 답변  

BUMP(Bring Up My Post) 글 끌어올리기, 현재 *충돌*이라고 잘못 번역됨  

mark 선택  
mark read 읽음으로 표시  

announce 포럼공지글  
global 전체공지글  
normal 일반글  
sticky 고정글  

## 구어체 사용하기

"Let us have a meeting"이라는 표현을 직역하면, "우리 회의시간을 가집시다" 정도가 될 것이다. 번역체는 "<명사>를 가지다"의 형태를 띠는 경우가 많다. 번역체가 의미가 통하지 않는 것은 아니다. 하지만 적절한 동사를 사용하면 조금 더 자연스러워진다. 예컨데, "우리 회의합시다"라고 하면 더 좋을 것이다.

## Placeholder의 의미 

`%1$d` 또는 `%2$s` 형태의 특수문자가 포함된 문자열이 있다. Placeholder의 순서와 데이터형을 의미한다. 예를 들어, `%1`은 첫번째 placeholder라는 의미이고, `$d`는 정수 데이터형, `$s`는 문자열 데이터형을 의미한다.

## Topic을 어떻게 번역할 것인가, 주제글 vs 글타래

phpBB를 글타래(Thread)를 형식을 사용하는 포럼 소프트웨어라고 생각했다. 하지만 phpBB에서는 Thread라는 단어를 사용하지 않는다. 대신에 Topic을 사용한다. 개인적으로는 글타래라는 단어를 좋아하지만 Topic을 글타래라고 번역을 하는게 맞는지 확신이 들지 않는다. Topic을 직역하면 주제이다. 하지만 한국어는 주제라는 단어를 어떤 글을 지칭하는데 사용하지 않는다. 그래서 고육지책으로 만들어낸 단어가 주제글이다.

> 메시지에 달린 답메시지를 소프트웨어가 시각적으로 그룹화해서 보여준다. - 한국어 위키피디아 

> These arrangements can be hierarchical or nested, arranging messages close to their replies in a tree, or they can be linear or flat, displaying all messages in chronological order regardless of reply relationships. - 영어 위키피디아

영어 위키피디아가 더 자세하다. 글타래(Thread)는 계층구조로 만들어질 수도 있고 선형구조로 만들어질수도 있다고 말한다. 한국어 위키피디아는 글타래를 메시지를 시각적으로 묶어서 보여주는 것이라고 한다. 한국어 위키피디아의 설명 자체만 보면 영어 위키피디아의 설명과 크게 차이가 없어보인다. 하지만 한국어 위키피디아는 제로보드나 레딧에서 사용하는 계층구조만 예시로 제시하고 있다.

phpbb.com에서도 [Topic vs Thread](https://www.phpbb.com/community/viewtopic.php?t=2191600)라는 주제로 논의가 되었다. 영미권 사람들도 Topic과 Thread를 엄밀하게 구별해서 사용하는 것 같지는 않다. Thread는 Topic보다 더 일반적인 의미로서 같은 주제의 메시지가 모여져있는 것을 말한다.

## Post 번역, 게시물 vs 게시글

현재 두 번역이 섞여있다.

## "내 게시물"에서 게시글의 위치가 이상하게 표현되고 있음

영어로 `POSTED IN <게시판>`으로 표시되는데, 한국어로 `게시됨 안에 <게시판>`으로 번역된다. 이는 한국어와 영어의 문법적 차이로 인한 것이라서 다른 방법을 사용하지 않는한 자연스럽게 번역하는게 힘들어 보인다.

## 참고문헌

- [phpBB 3.0.5 한국어팩 - phpBBKorea by michael 2009년](http://www.phpbbkorea.com/viewtopic.php?f=6&t=2554)
- [phpBB 3.3.5 한국어팩 - IT온세미로 by syskiller 2022년](http://bb.itosm.com/viewtopic.php?t=40&sid=f0ba38eba9f9bed54bd3a29b8b36c1e3)
- [phpBB 3.2.X phpbb-korean by minwook-shin 2017년](https://github.com/minwook-shin/phpbb-korean)
- [phpBB 3.3.11 phpBB3ko - Github by sebuls 2024년](https://github.com/sebuls/phpBB3ko)