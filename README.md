# PKM UHAMKA
## Instalation

#### Clone project and move to directory 
```
git clone https://github.com/dchya24/pkm-uhamka.git pkm-uhamka
cd 'pkm-uhamka'
```

#### Copy .env.example to .env and edit config in .env
```
cp .env.example .env
```

#### Install require package
```
composer install
```

#### Generate key
```
php artisan key:generate
```

#### Setup DB
Recomendation: import database with db.sql in database folder

With command: 
```
php artisan migrate
```

#### Database seeder
Create seed or factory data to database
```
php artisan db:seed
```