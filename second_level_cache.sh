#!/usr/bin/env bash

red=`tput setaf 1`
green=`tput setaf 2`
purple=`tput setaf 5`
reset=`tput sgr0`

function execute {
    echo -e "$> ${green}-----------------------${reset}"
    echo -e "$> ${green}$1${reset}"
    echo -e "$> ${green}-----------------------${reset}"
    echo
    $1
    echo
    read -p "${purple}Press enter to continue${reset}"
    clear
    echo
}

clear
echo -e "${red}Make sure ./tutorial.sh has been executed${reset}"

execute 'rm -Rf ./data'
execute 'git --no-pager diff HEAD^ bootstrap.php'
execute 'git --no-pager diff HEAD^^ src/Product.php'
execute 'cat list_products.php'
execute 'php list_products.php'
execute 'find data -type f'
for file in $(find data -type f); do
    execute "cat $file"
done
execute 'php list_products.php'
execute 'git --no-pager diff HEAD^^ src/Bug.php'
execute 'cat show_bug_products.php'
execute 'php show_bug_products.php 1'
execute 'php show_bug_products.php 1'
execute 'cat list_products_query.php'
execute 'php list_products_query.php'
execute 'php list_products_query.php'
