#README

## Install

After cloning the git repository
> Inspired by https://www.webune.com/forums/wepyap.html

Install dependencies
```
docker run --rm -v $(pwd):/opt -w /opt laravelsail/php81-composer:latest composer install
```

Make alias for sail 
```
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

Create .env file
```
cp .env.example .env
```

Generate APP KEY
```
./vendor/bin/sail artisan key:generate
```

Run the ecosystem (docker compose)
```
./vendor/bin/sail up -d
```

Run migrations
```
./vendor/bin/sail artisan migrate
```

## MySQL

Go to services, open a terminal for mysql container.

Connect to mysql

```bash
mysql - u sail -p
```

Select the database

```sql
use petition;
```

List tables on a selected database
```mysql
show tables;
```

Inspect a table

```sql
describe petitions;
describe authors;
```

Inspect a table datas

```sql
select * from petitions;
select * from authors;
```

## Routes

Inspect routes

```bash
sail artisan route:list
```


