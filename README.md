
# OData-Lumen
Composer Package to provide Odata functionality to Lumen
to install run
```
composer require realpage/odata-lumen
```

Edit `bootstrap/app.php` and add this to providers section:

```php
$app->register(RealPage\OData\Providers\MetadataProvider::class);
$app->register(RealPage\OData\Providers\QueryProvider::class);

```

you then add the trait to the models you want to expose.

```php
    use RealPage\OData\Models\MetadataTrait;
```

-- Known Limitations --

* Cannot expose two models with the same class name in different
namespaces - trying to expose both App\Foo\Model and App\Bar\Model
will trip an exception complaining that resource set has already been
added.
* This can be worked around by setting a custom endpoint name on one
of the colliding models.

-- Configuration options --
* APP_METADATA_CACHING - Whether or not to turn model metadata caching on
* APP_METADATA_CACHE_DURATION - If caching, how long (in minutes) to
retain cached metadata
