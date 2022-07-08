#!/bin/sh

# danirebollo@dockerpc2:~/enterpriseapps$ sudo sh build.sh
echo "copying assets folder"
sudo rm -rf docs/assets
sudo rm -rf docs/index2.html

cp -r assets docs/assets

# php gethtml.php