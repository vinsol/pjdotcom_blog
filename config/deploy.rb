# require 'railsless-deploy'

# config valid only for current version of Capistrano
# lock '3.4.0'

set :application, 'blog_pjdotcom'
set :repo_url, 'git@github.com:vinsol/pjdotcom_blog.git'
set :deploy_to, '/var/www/apps/blog_pjdotcom'
set :scm, :git
set :format, :pretty
set :log_level, :debug
set :pty, true
set :branch, 'your-branch'
set :deploy_via, :remote_cache

server '52.37.28.192',  user: 'vinsol', roles: %w(app web db)
# server '52.36.138.123', user: 'vinsol', roles: %w(worker)

set :copy_exclude, ['.git', '.DS_Store', '.gitignore', '.gitmodules']
set :keep_releases, 5
# set :linked_files, fetch(:linked_files, []).push('config/database.yml', 'config/secrets.yml')
# set :linked_dirs, fetch(:linked_dirs, []).push('log', 'tmp/pids', 'tmp/cache', 'tmp/sockets', 'vendor/bundle', 'public/system')
set :branch, 'deploy'
# set :default_env, { path: "/opt/ruby/bin:$PATH" }