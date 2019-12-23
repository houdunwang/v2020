#!/usr/bin/env sh
set -e
git pull
git add -A
git commit -m 'course code'
git push 
git push gitee