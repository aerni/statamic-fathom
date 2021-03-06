![Statamic](https://flat.badgen.net/badge/Statamic/3.0+/FF269E) ![Packagist version](https://flat.badgen.net/packagist/v/aerni/fathom/latest) ![Packagist Total Downloads](https://flat.badgen.net/packagist/dt/aerni/fathom) ![License](https://flat.badgen.net/github/license/aerni/fathom)

# Fathom
This addon adds a link to the sidebar of the Statamic control panel to easily navigate to your shared Fathom site.

## Installation
Install the addon using Composer.

```bash
composer require aerni/fathom
```

## Configuration

The following config will be automatically pubslished to `config/fathom.php` during the installation process.

```php
return [

    /*
    |--------------------------------------------------------------------------
    | Shared Site Link
    |--------------------------------------------------------------------------
    |
    | This is the shared site link provided by Fathom.
    |
    | The Fathom docs: https://usefathom.com/support/sharing
    |
    */

    'link' => env('FATHOM_LINK', 'https://app.usefathom.com/share/yourSharedLink'),

];
```

## Basic Usage
1. Add the link of your shared Fathom site to the config.
2. A new `Fathom` link will be added to the `Tools` section in the Statamic control panel. This link takes you to the shared Fathom site.

## Special Thanks
Thanks to [visuellverstehen](https://visuellverstehen.de) for the work on [Statamic Plausible](https://github.com/visuellverstehen/statamic-plausible). This addon is pretty much copy-paste.
