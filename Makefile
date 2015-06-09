install-dependencies-for-testing:
	composer create-project nette/code-checker temp/code-checker ~2.5 --no-interaction --prefer-source

test-code-quality:
	php temp/code-checker/src/code-checker.php --short-arrays
