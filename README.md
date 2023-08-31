## Steps to reproduce

```sh
git clone git@github.com:alexmanase/pest-snapshost-csrf-issue.git
cp .env.example .env
php artisan key:generate --ansi
./vendor/bin/pest
```
