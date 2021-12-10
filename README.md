#README

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
php artisan route:list
```


