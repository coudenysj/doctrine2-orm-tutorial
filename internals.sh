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

execute 'cat identity_map.php'
execute 'php identity_map.php'
execute 'cat identity_map_tracking.php'
execute 'php identity_map_tracking.php'
execute 'cat identity_map_tracking2.php'
execute 'php identity_map_tracking2.php'
execute 'cat tracking_changes.php'
execute 'php tracking_changes.php'
