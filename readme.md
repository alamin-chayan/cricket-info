## Candidate Assessment Project

In this project, you are expected to develop a web application which shows “real-time” scores
and statistics of Cricket. In this project the first round of a Cricket tournament will be simulated.
All matches will start at the same time every minute will be simulated as 5 seconds.

## How to Install

Run the following commands in composer: 

```bash
$ git clone git@github.com:alamin-chayan/cricket-info.git
$ bash vessel init
$ ./vessel start
$ ./vessel composer install
$ ./vessel @php -r "file_exists('.env') || copy('.env.example', '.env');"
$ ./vessel artisan key:generate
$ ./vessel composer dump-autoload
```

Config your .env. And finally:

```bash
$ ./vessel artisan migrate --seed
$  ./vessel artisan queue:work --tries=3 --sleep=3
```

## License

This packages are open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).