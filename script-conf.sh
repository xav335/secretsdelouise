#!/bin/bash

SERVERNAME=/home/web/lessecretsdelouise.com

chown -R www-data.ftpgroup $SERVERNAME
chmod -R 755 $SERVERNAME
chmod -R 777 $SERVERNAME/log/spy.log
chmod -R 777 $SERVERNAME/admin/FileUpload/server/php/files
