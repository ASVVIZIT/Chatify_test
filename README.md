##Step №1
###For package.json
```bash
# Install dependency with NPM
npm install
or
yarn install
```
###Error install Npm or Yarn
```bash
`Delete "package-loc.json" in folder app 
`Delete from the file "package.json" "node-sass" dependency.

# develop
npm run dev # or npm run watch

# Build on production
npm run production
```
##Step №2
###Install composer ver 2  in your system (Mac Os or Windows)
```bash
composer i or composer install
```
**file_exists(`.env`) || copy(`.env.example`, `.env`);**

**`set` APP_URL=`http://my.site`**

**`set` DB_DATABASE=`my_name_base`**

**`set` DB_USERNAME=`root`**

**`set` DB_PASSWORD=`*****` or `null`**

**`set` SESSION_DOMAIN=`.my.site`**

**`set` SANCTUM_STATEFUL_DOMAINS=`localhost:8000`,`127.0.0.1:8000`,`my.site`,`*.my.site`,`127.0.0.1:3000`**

##Step №3
```bash
# Set APP_KEY=foobar
php artisan key:generate
# or
php artisan key:g 

# Migration and DB seeder (after changing your DB settings in .env)
php artisan migrate --seed
# Or
php artisan migrate:refresh --seed

# save config laravel
php artisan config:cache
```
### Start server

###for Xammp or Openserver

[link Open](https://ekd.loc) https://ekd.loc to access EKD

[link Open](https://my.site) https://my.site to access EKD

### Start server laravel
```bash
# run local server
php artisan serve
```
[link Open](https://127.0.0.1:8000) https://127.0.0.1:8000 to access EKD

[link Open](https://localhost:8000) https://localhost:8000 to access EKD

## For Chatify

```bash
php artisan install:broadcasting

REVERB_SERVER_HOST=0.0.0.0
REVERB_SERVER_PORT=8080
REVERB_APP_ID=832179
REVERB_APP_KEY=cbrhqdprqiclm3ellilv
REVERB_APP_SECRET=vfzeedx9mkylvxwou64o
REVERB_HOST="chatify.loc" # domen for example or ws.chatify.loc
REVERB_PORT=8080
REVERB_SCHEME=http

VITE_REVERB_APP_ID="${REVERB_APP_ID}"
VITE_REVERB_APP_KEY="${REVERB_APP_KEY}"
VITE_REVERB_APP_SECRET="${REVERB_APP_SECRET}"
VITE_REVERB_HOST="${REVERB_HOST}"
VITE_REVERB_PORT="${REVERB_PORT}"
VITE_REVERB_SCHEME="${REVERB_SCHEME}"
```
```bash

# for SSL settings
in config/reverb.php

'options' => [
    'tls' => [
        'local_cert' => '/path/to/cert.pem'
    ],
],

php artisan reverb:start --host="0.0.0.0" --port=8080 --hostname="chatify.loc"

php artisan reverb:restart
```
```bash
# save config laravel
php artisan config:cache

# Terminal №1 For websocet
php artisan reverb:start

# Terminal №2 
php artisan queue:listen

```
