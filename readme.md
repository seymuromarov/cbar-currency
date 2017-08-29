<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About Project

Laravel api for getting Currency rates of Central Bank of Azerbaijan
You can get all currency information or search by Currency Code and get One

##Requirements
* [Composer](https://getcomposer.org/)
* [Laravel](https://laravel.com/)
## Installation

You can clone project with git:
``` bash
composer require seymur/currency:dev-master
```

Now add the service provider in config/app.php file:
```  
'providers' => [
    // ...
        Seymur\Currency\CurrencyServiceProvider::class,
],
```

after this add alias in config/app.php file:

``` 
'aliases' => [
 //...
    'Currency' => Seymur\Currency\Facades\Currency::class,
 ],
```

use command:
``` 
composer dump-autoload
```
now u can use api like this 
```
    Currency::get();
```
for searching currency rate use currency code example:
```
    Currency::search("USD");
```