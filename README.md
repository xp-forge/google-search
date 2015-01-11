google-search
=============

[![Build Status on TravisCI](https://secure.travis-ci.org/xp-forge/google-search.svg)](http://travis-ci.org/xp-forge/google-search)
[![XP Framework Module](https://raw.githubusercontent.com/xp-framework/web/master/static/xp-framework-badge.png)](https://github.com/xp-framework/core)
[![BSD Licence](https://raw.githubusercontent.com/xp-framework/web/master/static/licence-bsd.png)](https://github.com/xp-framework/core/blob/master/LICENCE.md)
[![Required PHP 5.4+](https://raw.githubusercontent.com/xp-framework/web/master/static/php-5_4plus.png)](http://php.net/)
[![Required HHVM 3.4+](https://raw.githubusercontent.com/xp-framework/web/master/static/hhvm-3_4plus.png)](http://hhvm.com/)
[![Latest Stable Version](https://poser.pugx.org/xp-forge/google-search/version.png)](https://packagist.org/packages/xp-forge/google-search)


Google Websearch Protocol. See http://www.google.com/cse/docs/resultsxml.html

Example
-------

```php
$client= new GoogleSearchClient('http://gsa23.enterprisedemo-google.com/search');
$response= $client->searchFor((new GoogleSearchQuery())
  ->withTerm('test')
  ->startingAt(10)
);
```

API
--
```sh
$ xp -r com.google.search.custom
@FileSystemCL<...\xp\google-search\src\main\php\>
package com.google.search.custom {
  package com.google.search.custom.types

  public class com.google.search.custom.GoogleSearchClient
  public class com.google.search.custom.GoogleSearchQuery
}
```

