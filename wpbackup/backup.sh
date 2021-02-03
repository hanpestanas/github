#!/bin/bash
 
# backups will use these filenames.
db_backup_name="wp-db-backup-"`date "+%Y-%m-%d"`".sql.gz"
wpfiles_backup_name="wp-files-backup-"`date "+%Y-%m-%d"`".tar.gz"

## 1: database connection info. You can get these details from your wp-config file.
db_user="wp_user"
db_pass="BRf478_L7e=uhQEP"
db_name="wordpress"

## 2: Path to WordPress Upload and Theme directories.  your home directory.
wp_content_folder="/var/www/mutya.ml/wp-content/"

## 3: Path to backup folder
backup_folder_path="/var/www/mutya.ml/wpbackup"

# backup MYSQL database, gzip it and send to backup folder.
mysqldump --opt -u$db_user -p$db_pass $db_name | gzip > $backup_folder_path/$db_backup_name

# create a tarball of the wordpress files, gzip it and send to backup folder.
tar -czf $backup_folder_path/$wpfiles_backup_name $wp_content_folder

