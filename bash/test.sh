#!/bin/sh

#
# Customize the following for your project/server
#
docRoot="/var/www/html/foobooks"
usernameServer="root@104.236.201.231"


# Function to output a line in bold text
dump () {
    echo "\033[1m"$1"\033[0m"
}

# Function to output a line seperator
line () {
    dump "--------------------------------------"
}

# Function to show a `git status` on server and prompts for whether to deploy or not
# This function is invoked when this script is run on your local machine.
welcome () {
    line
    dump "Git status on server for $docRoot:"
    ssh $usernameServer "cd $docRoot; git status"
    line
    dump "Do you want to continue with deployment? (y/n)"

    read -${BASH_VERSION+e}r choice

    case $choice in
        y)
            ssh $usernameServer "$docRoot/bash/deploy.sh"
            ;;
        n)
            dump "Ok, goodbye!";
            exit
            ;;
        *)
            dump "Unknown command";
            ;;
    esac
}

welcome 