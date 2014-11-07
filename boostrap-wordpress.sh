#!/bin/sh

set -e

if [ "$#" -ne 1 ]; then
    echo 'Usage: sh boostrap-wordpress.sh <directory>'
    exit 1
fi

curl -L http://wordpress.org/latest.tar.gz | tar -xvzf -
mv wordpress $1 ; cp config/* $1 ;cd $1 ; fig up
