const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
mix.styles(['resources/css/bootstrap.min.css',
'resources/css/dashboard.css',],'public/css/app.css').version();
mix.scripts(['resources/js/jquery-3.2.1.slim.min.js', 'resources/js/bootstrap.js', 'resources/js/bootstrap.js',],'public/css/app.js').version();