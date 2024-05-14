![Statamic](https://flat.badgen.net/badge/Statamic/5.0+/FF269E) ![Packagist version](https://flat.badgen.net/packagist/v/aerni/fathom/latest) ![Packagist Total Downloads](https://flat.badgen.net/packagist/dt/aerni/fathom) ![License](https://flat.badgen.net/github/license/aerni/fathom)

# Fathom
This addon adds a Fathom navigation item to the Statamic control panel so users can easily navigate to a shared Fathom site.

## Installation
Install the addon using Composer.

```bash
composer require aerni/fathom
```

## Basic Usage
Add the link of your shared Fathom site to your `.env` file:

```env
FATHOM_LINK="https://app.usefathom.com/share/yourSharedLink"
```

A new `Fathom` navigation item will be added to the `Tools` section in the Statamic control panel.
