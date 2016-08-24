@servers(['web' => '192.168.11.3'])

@task('deploy')
    cd /path/to/site
    git pull origin master
@endtask
