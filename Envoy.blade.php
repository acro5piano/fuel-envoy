@servers(['web' => '192.168.11.3'])

@setup
    $path = '/home/kazuya/labo/fuel_test';
@endsetup

@task('deploy')
    cd {{ $path }}
    git pull origin master
@endtask
