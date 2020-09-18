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

execute 'git --no-pager diff HEAD^^ src/Product.php'
execute 'cat read_only_product.php'
execute 'php read_only_product.php'
execute 'cat read_only_bug.php'
execute 'php read_only_bug.php'
