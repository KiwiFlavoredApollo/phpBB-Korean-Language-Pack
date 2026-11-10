param(
	[string] $Version = '3.3.19'
)

$ErrorActionPreference = 'Stop'
$repositoryRoot = Split-Path -Parent $MyInvocation.MyCommand.Path
$distributionDirectory = Join-Path $repositoryRoot 'dist'
$archivePath = Join-Path $distributionDirectory "phpbb-korean-language-pack-$Version.zip"
$stagingDirectory = Join-Path ([System.IO.Path]::GetTempPath()) ("phpbb-ko-release-" + [guid]::NewGuid().ToString('N'))

New-Item -ItemType Directory -Path $stagingDirectory | Out-Null
try
{
	$paths = @(
		'language/ko',
		'ext/phpbb/viglink/language/ko',
		'styles/prosilver/theme/ko'
	)
	foreach ($relativePath in $paths)
	{
		$source = Join-Path $repositoryRoot $relativePath
		$destination = Join-Path $stagingDirectory $relativePath
		New-Item -ItemType Directory -Path (Split-Path -Parent $destination) -Force | Out-Null
		Copy-Item -LiteralPath $source -Destination $destination -Recurse
	}

	New-Item -ItemType Directory -Path $distributionDirectory -Force | Out-Null
	if (Test-Path -LiteralPath $archivePath)
	{
		Remove-Item -LiteralPath $archivePath
	}
	Compress-Archive -Path (Join-Path $stagingDirectory '*') -DestinationPath $archivePath -CompressionLevel Optimal
	Write-Output $archivePath
}
finally
{
	if (Test-Path -LiteralPath $stagingDirectory)
	{
		Remove-Item -LiteralPath $stagingDirectory -Recurse -Force
	}
}
