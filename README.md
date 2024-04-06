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

## 참고문헌

- [phpBB 3.0.5 한국어팩 - phpBBKorea by michael 2009년](http://www.phpbbkorea.com/viewtopic.php?f=6&t=2554)
- [phpBB 3.3.5 한국어팩 - IT온세미로 by syskiller 2022년](http://bb.itosm.com/viewtopic.php?t=40&sid=f0ba38eba9f9bed54bd3a29b8b36c1e3)
- [phpBB 3.2.X phpbb-korean by minwook-shin 2017년](https://github.com/minwook-shin/phpbb-korean)
- [phpBB 3.3.11 phpBB3ko - Github by sebuls 2024년](https://github.com/sebuls/phpBB3ko)