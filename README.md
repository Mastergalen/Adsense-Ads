# Adsense Ads
Package for easily including Adsense Ad units in Laravel.

## Installation

In your project root run 

```
composer require mastergalen/adsense-ads
composer update
```

### Set up config file

Run `php artisan config:publish mastergalen/adsense-ads`.

Edit the generated config file in `/config/ads.php` to add your ad units

```
return [
    'client_id' => 'YOUR_CLIENT_ID', //Your Adsense client ID e.g. ca-pub-9508939161510421
    'ads' => [
        'responsive' => [
            'ad_unit_id' => 12345678901,
            'ad_format' => 'auto'
        ],
        'rectangle' => [
            'ad_unit_id' => 1234567890,
            'ad_style' => 'display:inline-block;width:300px;height:250px',
            'ad_format' => 'auto'
        ]
    ]
];
```

### Register the package with Laravel

Add the provider to the `providers` array in your `config/app.php` file:

```
Mastergalen\AdsenseAds\AdsServiceProvider::class,
```

Register an alias:

```
'Ads' => Mastergalen\AdsenseAds\AdsFacade::class,
```

## Usage
To display the HTML code for your code simply use `{!! Ads::show('responsive') !!}``, for example.