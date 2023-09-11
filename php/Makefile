help:                                                                           ## shows this help
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_\-\.]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

install:                                                              			## install all dependencies for a development environment
	composer install

coding-standard-fix:                                                            ## apply automated coding standard fixes
	PHP_CS_FIXER_IGNORE_ENV=1 ./vendor/bin/php-cs-fixer fix --config=etc/config/.php-cs-fixer.php

coding-standard-check:                                                          ## check coding-standard compliance
	PHP_CS_FIXER_IGNORE_ENV=1 ./vendor/bin/php-cs-fixer fix --config=etc/config/.php-cs-fixer.php --dry-run --diff

static-analysis:                                                                ## run static analysis checks
	./vendor/bin/phpstan analyse -c etc/config/phpstan.dist.neon
	./vendor/bin/psalm -c etc/config/psalm.xml --show-info=true

type-coverage:                                                                  ## send static analysis type coverage metrics to https://shepherd.dev/
	./vendor/bin/psalm -c etc/config/psalm.xml --shepherd --stats

security-analysis:                                                              ## run static analysis security checks
	./vendor/bin/psalm -c etc/config/psalm.xml --taint-analysis

unit-tests:                                                                     ## run unit test suite
	./vendor/bin/phpunit -c etc/config/phpunit.xml

check: coding-standard-check static-analysis unit-tests  ## run quick checks for local development iterations
