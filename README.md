# backend  API үүгэх заавар

Дараах алхамын дагуу хийгдэх ёстой

## Фолдер бэлдэх

1. Project үүсгэсэх

```
composer create-project laravel/laravel firstapp

```

2. Өгөгдлийн баазтай холбох

Өгөгдлийн баазтай холбохын тулд **.env** файлд өөрчлөлт оруулна.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=myproj
DB_USERNAME=root
DB_PASSWORD=
```

3. Нэвтрэх, хамгаалалтын тохиргоо хийх

``` 
composer require laravel/breeze --dev
php artisan breeze:install
```


4. Модел болон migration-ийг үүсгэх
 

```
php artisan make:model Stat -m
php artisan make:model Teacher -m
php artisan make:model Course -m
php artisan make:model Student -m
php artisan make:model Attendance -m
```

### Stat migration

```
    $table->id();
    $table->string('name');
    $table->string('abr');
```

### Teacher migration

```
    $table->id();
    $table->string('firstName');
    $table->string('lastName');
    $table->string('gender');
    $table->string('phoneNumber');
```

### Student migration

``` $table->id();
    $table->unsignedBigInteger('course_id')->index();
    $table->string('firstName');
    $table->string('lastName');
    $table->string('gender');
    $table->string('phoneNumber');
    $table->string('RD');

  $table->foreign('course_id')->references('id')->on('courses')->cascadeOnDelete();
```

### Course migration

```
```

### Attendance migration

```
```

6. Бааз руу хүснэгт үүсгэх
 
php artisan migrate
php artisan migrate:refresh
php artisan migrate:refresh --seed
composer dump-autoload
 
php artisan migrate:rollback
php artisan migrate:rollback --step=5
 
php artisan migrate:rollback --pretend
php artisan migrate:reset
 
php artisan make:seeder StatSeeder
php artisan make:seeder TeacherSeeder
php artisan make:seeder CourseSeeder
 
 
php artisan make:factory CdateFactory
 
 
php artisan db:seed --class=StatSeeder
php artisan db:seed --class=UserSeeder
 
Ерөнхий seeder-ийг ажиллуулахдаа
php artisan db:seed
 
 
php artisan make:controller StatController --resource
php artisan make:controller StudentController --resource
php artisan make:controller TeacherController --resource
php artisan make:controller CourseController --resource
 
php artisan make:controller AttendanceController --resource
 

php artisan make:controller PhotoController --model=Photo --resource --requests
 
 
php artisan make:resource GradeResource
 
php artisan make:resource GradeCollection