-----------
#Create User Factory
-----------
//UserFactory.php 
```
$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
```
//Commands
```
php artisan tinker
User::all()->pluck('name');
//create single user
factory(\App\User::class)->create();
//create three user
factory(\App\User::class, 3)->create();
```
-----------
#Create Company Factory
-----------

//Commands
```
php artisan make:factory CompanyFactory -m Company
```
//CompanyFactory.php
```
$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phonenumber,
    ];
});
```
//Commands
```
php artisan tinker
Company::all()->pluck('name');
```
//create single Company
```
factory(\App\Company::class)->create();
```
//create three Companies
```
factory(\App\Company::class, 3)->create();
```
-----------
#Create Customer Factory
-----------

//Commands
```
php artisan make:factory CustomerFactory -m Customer
```
//CustomerFactory.php
```
use App\Company;
use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'company_id' => factory(Company::class)->create(),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'active' => 1,
    ];
});
```
//Commands
```
php artisan tinker
Customer::all()->pluck('name');
```
//create single Customer
```
factory(\App\Customer::class)->create();
```
//create three Customers
```
factory(\App\Customer::class, 3)->create();
```
