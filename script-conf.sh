#!/bin/bash

SERVERNAME=/var/www/lessecretsdelouise.com

chown -R www-data.www-data $SERVERNAME
chmod -R 755 $SERVERNAME
chmod -R 777 $SERVERNAME/log/spy.log
chmod -R 777 $SERVERNAME/admin/FileUpload/server/php/files
