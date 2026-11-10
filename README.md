# phpBB 한국어 언어 팩

이 저장소는 IT온세미로에서 Blear(syskiller)님이 작업한 phpBB 3.3.5 한국어 팩과 KiwiFlavoredApollo의 번역·검수를 기반으로 합니다. phpBB 3.3.19 업데이트에서는 sebuls/phpBB3ko의 각 문자열도 비교하여 더 나은 번역을 선별했습니다.

## 호환 버전

- 언어 팩 버전: **1.0.0**
- 대상 phpBB 버전: **3.3.19**
- 언어 코드: **ko**

## 설치

저장소의 다음 디렉터리를 phpBB 설치의 같은 위치에 복사하십시오.

- `language/ko/`
- `ext/phpbb/viglink/language/ko/`
- `styles/prosilver/theme/ko/`

관리자 제어판에서 한국어 언어 팩을 설치한 뒤 사용자 또는 게시판 기본 언어로 선택하십시오.

## 검증

개발 의존성을 설치한 뒤 공식 phpBB Translation Validator를 실행합니다.

```shell
composer install
php vendor/bin/translation.php validate ko --language-dir=language --phpbb-version=3.3 --safe-mode
```

VigLink와 prosilver 리소스도 저장소의 영어 기준 파일과 별도로 비교해야 합니다. 저장소의 `language/en/`, `ext/.../en/`, `styles/.../en/`은 검증용 기준 파일이며 릴리스 압축 파일에는 포함되지 않습니다.

## 릴리스 압축 파일

PowerShell에서 다음 명령을 실행하면 `dist/`에 배포용 압축 파일을 만듭니다.

```powershell
./build-release.ps1 -Version 1.0.0
```

압축 파일의 루트에는 `LICENSE`와 `AUTHORS.md`가 포함되며, `language/ko/LICENSE`는 공식 검증을 위해 유지됩니다. 배포 전 한국어 원어민의 최종 검수를 권장합니다. 특히 phpBB 3.3.19에서 새로 추가된 설치 프로그램 문구와 업데이트 알림 문구를 확인하십시오.

## 라이선스 및 참여자

이 번역은 phpBB와 동일한 GNU General Public License version 2(GPL-2.0)로 배포됩니다. 참여자 정보는 `AUTHORS.md`를 참조하십시오.

## 참고문헌

- [phpBB 3.0.5 한국어팩 - phpBBKorea by michael 2009년](http://www.phpbbkorea.com/viewtopic.php?f=6&t=2554)
- [phpBB 3.3.5 한국어팩 - IT온세미로 by syskiller 2022년](http://bb.itosm.com/viewtopic.php?t=40&sid=f0ba38eba9f9bed54bd3a29b8b36c1e3)
- [phpBB 3.2.X phpbb-korean - Github by minwook-shin 2017년](https://github.com/minwook-shin/phpbb-korean)
- [phpBB 3.3.11 phpBB3ko - Github by sebuls 2024년](https://github.com/sebuls/phpBB3ko)
- [Deutsche(독일어) Sprachdateien für phpBB 3.3.11 - Github](https://github.com/phpbb-de/phpbb-translation/tree/3.3.x)
- [phpBB Translation Validator - Github](https://github.com/phpbb/phpbb-translation-validator)
