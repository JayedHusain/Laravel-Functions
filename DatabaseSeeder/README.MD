---
UsersTableSeeder
---
//Make UsersTableSeeder 
```
php artisan make:seeder UsersTableSeeder
```
//Add Factories to UsersTableSeeder.php
```
public function run()
    {
        factory(\App\User::class, 3)->create();
    }
```
//Add UsersTableSeeder class to DatabaseSeeder.php
```
public function run()
    {
        $this->call(UsersTableSeeder::class);
    }
```
//Run UsersTableSeeder
```
php artisan db:seed
```
---
ComapanyTableSeeder
---
//Make ComapanyTableSeeder 
```
php artisan make:seeder ComapanyTableSeeder
```
//Add Factories to ComapanyTableSeeder.php
```
public function run()
    {
        factory(\App\Company::class, 3)->create();
    }
```
//Add ComapanyTableSeeder class to DatabaseSeeder.php
```
public function run()
    {
        $this->call(ComapanyTableSeeder::class);
    }
```
//Run ComapanyTableSeeder
```
php artisan db:seed
```
---
CustomersTableSeeder
---
//Make CustomersTableSeeder 
```
php artisan make:seeder CustomersTableSeeder
```
//Add Factories to CustomersTableSeeder.php
```
public function run()
    {
        factory(\App\User::class, 3)->create();
    }
```
//Add CustomersTableSeeder class to DatabaseSeeder.php
```
public function run()
    {
        $this->call(CustomersTableSeeder::class);
    }
```
//Run CustomersTableSeeder
```
php artisan db:seed
```