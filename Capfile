##
# @file Capfile
# Capistrano deployment settings for Drupal Demo site codebase.
#

require 'yaml'
require 'drush_deploy'

set :application, 'drupaldemo'
set :repository, 'git@navarts.unfuddle.com:navarts/drupaldemo.git'

if ENV['TAG']
  set :branch, "#{ENV['TAG']}"
else
  set :branch, 'master'
end

set :scm, :git
set :scm_username, 'capistrano'   # Deployment Git user account.
set :scm_password, '!capistrano'  # (Read-only access to the repo.)

# Deploy from codebase, not from a Drush .make file.
set :make, FALSE
