# README

## 개요

[bb.itosm.com에서 syskiller님이 작업한 한국어팩](http://bb.itosm.com/viewtopic.php?t=40&sid=f0ba38eba9f9bed54bd3a29b8b36c1e3)을 기반으로 하고 있다. phpBB 3.3.5 버전을 위해 만들어진 버전이다.

[phpBB Korea에서 개발한 한국어팩](http://www.phpbbkorea.com/viewtopic.php?f=6&t=2554)도 있지만 2009년 phpBB 3.0.5 버전을 위한 것이라서 현재 3.3.11 버전에 맞지 않는 부분이 있다.

## 목표

1. phpBB 3.3.11에 호환되도록 만든다.
2. 자연스러운 한국어 인터페이스를 만든다.

## 설치방법

`ko/` 디렉토리를 `phpbb/language/` 디렉토리로 복사한다.

## 규칙

일관성있게 작업하기위해 기록해두는 것일 뿐, 반드시 지킬 필요는 없다.

### 어휘 목록

user 사용자
guest 손님
registered user 가입자
member 회원

online user 접속자
offline user

hidden 비공개
forum 포럼
board 게시판

### 구어체 사용하기

"<명사> 있습니다" 대신에 "<동사>" 사용하기

### Placeholder의 의미 

`%1$d` 또는 `%2$s` 형태의 특수문자가 포함된 문자열이 있다. Placeholder의 순서와 데이터형을 의미한다. 예를들어 `%1`은 첫번째 placeholder라는 의미이고, `$d`는 정수 데이터형, `$s`는 문자열 데이터형을 의미한다.