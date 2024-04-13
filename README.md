# README

## 개요

이 깃허브 저장소는 [IT온세미로](http://bb.itosm.com)에서 Blear(syskiller)님이 작업한 phpBB 3.3.5 한국어팩을 기반으로 하고 있다. 이 한국어팩은 [ColdBrew phpBB 포럼](https://forum.fractalcoffee.duckdns.org)에서 사용하고 있다. 

## 목표

1. phpBB 3.3.11에 호환되도록 만든다.
2. 자연스러운 한국어 인터페이스를 만든다.

## 언어 팩(Language Pack) 설치하기

`language/ko/` 디렉토리를 `phpbb/language/` 디렉토리로 복사한다.

## 번역 참여하기

> 번역이 잘못된 부분이 있을 수 있습니다. Issues에서 말씀해주시거나 깃허브 저장소를 fork하고 수정 후 pull request를 보내주세요.

### phpBB Translation Validator 사용하기

phpBB에 공식적으로 언어 팩을 등록하기 위해서는 일정 조건을 충족해야 한다. phpBB Translation Validator는 번역이 누락되거나 형식에 맞지 않는 부분이 있는지 검사해서 알려준다. 

1. PHP 개발환경 만들기
2. composer 설치하기
3. phpBB Translation Validator 설치하기

### 1. PHP 개발환경 만들기

[PHP Installer Tools on Windows](https://www.php.net/manual/en/install.windows.tools.php)에서 XAMPP 설치파일을 내려받고 설치한다.

XAMPP는 PHP 개발환경이다.

### 2. Composer 설치하기

[Download Composer](https://getcomposer.org/download/)에서 설치파일을 내려받는다.

Composer는 PHP 개발환경의 dependency manager이다. Python의 Pipfile이랑 비슷하다.

### 3. phpBB Translation Validator 설치하기

[Git Bash]() 프로그램을 사용하면 편리하다. 명령 프롬프트를 써봤지만 `composer.phar` 명령어를 사용하는데 문제가 있었다.

```
git clone https://github.com/KiwiFlavoredApollo/phpBB-Korean-Language-Pack.git
cd phpBB-Korean-Language-Pack
composer.phar install
php vendor/bin/translation.php validate ko --package-dir=language/ --phpbb-version=3.3 
```

## 참고문헌

- [phpBB 3.0.5 한국어팩 - phpBBKorea by michael 2009년](http://www.phpbbkorea.com/viewtopic.php?f=6&t=2554)
- [phpBB 3.3.5 한국어팩 - IT온세미로 by syskiller 2022년](http://bb.itosm.com/viewtopic.php?t=40&sid=f0ba38eba9f9bed54bd3a29b8b36c1e3)
- [phpBB 3.2.X phpbb-korean - Github by minwook-shin 2017년](https://github.com/minwook-shin/phpbb-korean)
- [phpBB 3.3.11 phpBB3ko - Github by sebuls 2024년](https://github.com/sebuls/phpBB3ko)
- [Deutsche(독일어) Sprachdateien für phpBB 3.3.11 - Github](https://github.com/phpbb-de/phpbb-translation/tree/3.3.x)
- [phpBB Translation Validator - Github](https://github.com/phpbb/phpbb-translation-validator)