#!/usr/bin/env bash

version="$(vendor/bin/php-cs-fixer --version)"
echo -e "Running $version\n"

mkdir -p reports/php-cs-fixer

vendor/bin/php-cs-fixer fix ./app --diff --dry-run --config-file .php_cs | tee reports/php-cs-fixer/.output

cat reports/php-cs-fixer/.output | grep '1)' &> /dev/null

if [ $? == 0 ];
  then
    echo -e "\n\033[0;31mThe code is not formatted according to our coding standards."
    exit 1
  else
    echo -e "\n\033[0;32mThe code is formatted according to our coding standards, great job!"
fi