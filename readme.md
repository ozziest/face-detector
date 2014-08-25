# FaceDetector

This class detect one face in images. 

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
    "require": {
        "ozziest/face-detector": "dev-master",
    }
}
```
After installing the package, open your Laravel config file `app/config/app.php` and add the following lines.

In the $providers array add the following service provider for this package;

```php
'Ozziest\FaceDetector\FaceDetectorServiceProvider',
```

Add the `FaceDetector` facades to the `aliases` in `app/config/app.php`:

```php
'FaceDetector' => 'Ozziest\FaceDetector\Facades\FaceDetector',
```

## Usage

```php 
FaceDetector::detect('image.jpg')->toJpeg();
```

## Methods

* `toJpeg()`
* `toJson()`
* `getFace()`

## Requirements

PHP5 with GD

## License

GNU GPL v2 (See LICENSE.txt)

