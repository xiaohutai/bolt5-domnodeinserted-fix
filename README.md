## Fix deprecated `DOMNodeInserted` issue in Google Chrome.

This fixes dynamically added Article and Redactor widgets.
More info:

- https://developer.chrome.com/blog/mutation-events-deprecation
- https://chromestatus.com/feature/5083947249172480


## Installation
```
composer install xiaohutai/domnodeinsertedfix
```


## Recommendations

The proper way to fix this issue is to update:

- https://github.com/bolt/article
- https://github.com/bolt/redactor
  - See https://github.com/bolt/redactor/pull/35


## Miscellaneous

- On Packagist: https://packagist.org/packages/xiaohutai/domnodeinsertedfix
