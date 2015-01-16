# php-matauang

Put on composer.json file

```javascript
{
  "require" : {
    "kukuhprabowo/matauang" : "dev-master"
  }
}
```

# Convert to Currency

```html
Matauang/Matauang::convert(value, symbol, delimiter, endpoint)
```

And here's some code!

```php
  require_once "vendor/autoload.php";

  Matauang/Matauang::convert('2000');
```

output 

```html
  Rp. 200.000,-
```



