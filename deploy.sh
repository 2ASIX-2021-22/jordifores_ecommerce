#!/usr/bin/env sh

git checkout production
git merge main --no-edit
git push origin production
git checkout main

# Copiat de https://forge.laravel.com/servers/512103/sites/1487951#/application

wget https://forge.laravel.com/servers/506438/sites/1499520/deploy/http?token=qHPeNSEzSgWOtdKiHgewOHR71lz2YjZHih0KrTr2 -O /dev/null
