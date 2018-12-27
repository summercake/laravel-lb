@servers(['app-1' => ['root@68.183.164.84'], 'app-2'=>['root@68.183.164.182']])

@task('deploy', ['on' => ['app-1', 'app-2'], 'parallel' => true])
    cd /var/www/laravel-lb
    git pull origin master
    composer install --no-dev
@endtask
