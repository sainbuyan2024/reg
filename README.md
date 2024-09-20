# backend  API үүгэх заавар

Дараах алхамын дагуу хийгдэх ёстой

## Фолдер бэлдэх

app үүсгэсэн

```
composer create-project laravel/laravel firstapp

```

3. Өгөгдлийн баазтай холбох
.env
 
4. Нэвтрэх, хамгаалалт
 
composer require laravel/breeze --dev
php artisan breeze:install
 
5. Модел болон migration-ийг үүсгэх
 

php artisan make:model Stat -m
php artisan make:model Teacher -m
php artisan make:model Course -m
php artisan make:model Student -m
php artisan make:model Attendance -m
 
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