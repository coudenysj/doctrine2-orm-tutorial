#!/usr/bin/env bash

function execute {
    red=`tput setaf 1`
    green=`tput setaf 2`
    reset=`tput sgr0`

    echo -e "$> ${green}-----------------------${reset}"
    echo -e "$> ${green}$1${reset}"
    echo -e "$> ${green}-----------------------${reset}"
    echo
    $1
    echo
    #read -p "${purple}Press enter to continue${reset}"
    #clear
    echo
}

#clear
execute "composer install"
execute "vendor/bin/doctrine orm:schema-tool:drop --force"
execute "vendor/bin/doctrine orm:schema-tool:create"
#execute "vendor/bin/doctrine orm:schema-tool:update --force"
execute "php create_product.php ORM"
execute "php create_product.php DBAL"
execute "php list_products.php"
execute "php show_product.php 1"
execute "php update_product.php 1 PHP"
execute "php show_product.php 1"
execute "php create_user.php Jachim"
execute "php create_bug.php 1 1 1"
execute "php list_bugs.php"
execute "php list_bugs_array.php"
execute "php show_bug.php 1"
execute "php dashboard.php 1"
execute "php close_bug.php 1"
execute "php list_bugs_repository.php"
