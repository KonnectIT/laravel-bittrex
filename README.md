### Installation

`composer require pepijnolivier/laravel-bittrex:dev-master`.

(no versions yet!)

Add the service provider to your `config/app.php`:
 
 ``` 
 'providers' => [
 
     Pepijnolivier\Bittrex\BittrexServiceProvider::class,
     
 ],
 ```
 
...run `php artisan vendor:publish` to copy the config file.

Edit the `config/bittrex.php` or add Bittrex api and secret in your `.env` file

```
BITTREX_KEY={YOUR_API_KEY}
BITTREX_SECRET={YOUR_API_SECRET}

```

Optionally you can add alias to your `config/app.php`:

```    
'aliases' => [
           
    'Bittrex' => Pepijnolivier\Bittrex\Bittrex::class,
           
],
```


Did I help you with this package ?
BTC Tipjar: `1N5ET46r5Z4HdfhRjGMp7SpEMPes9S1H9n`


(I'm taking feature requests)