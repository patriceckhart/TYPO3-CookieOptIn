# A TYPO3 CMS Extension for Cookie Opt-in.

A simple TYPO3 CMS Extension for Cookie Opt-in.

## Installation

The package is listed on packagist (https://packagist.org/packages/steinbauerit/cookieoptin) - therefore you don't have to include the package in your "repositories" entry any more.

Just add the following line to your require section:

```
"steinbauerit/cookieoptin": "*"
```

And the run this command to fetch the plugin:

```
composer update
```
## Configuration

Create a SysFolder in the TYPO3 page tree and in this folder you can create a cookie group. In this cookie group you can create and describe your cookies and specify the header or footer scripts that should be output, provided this cookie group is allowed by the user.

In the constants you can define excluded page IDs and the SysFolder where the cookie groups and cookies are stored.

#### Important
page.9 and page.92929292 are used by this extension. You can change this in your setup TS.

## Author

* E-Mail: patric.eckhart@steinbauer-it.com
* URL: http://www.steinbauer-it.com