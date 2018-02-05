google-search
=============

[![Build Status on TravisCI](https://secure.travis-ci.org/xp-forge/google-search.svg)](http://travis-ci.org/xp-forge/google-search)
[![XP Framework Module](https://raw.githubusercontent.com/xp-framework/web/master/static/xp-framework-badge.png)](https://github.com/xp-framework/core)
[![BSD Licence](https://raw.githubusercontent.com/xp-framework/web/master/static/licence-bsd.png)](https://github.com/xp-framework/core/blob/master/LICENCE.md)
[![Required PHP 5.5+](https://raw.githubusercontent.com/xp-framework/web/master/static/php-5_5plus.png)](http://php.net/)
[![Supports PHP 7.0+](https://raw.githubusercontent.com/xp-framework/web/master/static/php-7_0plus.png)](http://php.net/)
[![Supports HHVM 3.4+](https://raw.githubusercontent.com/xp-framework/web/master/static/hhvm-3_4plus.png)](http://hhvm.com/)
[![Latest Stable Version](https://poser.pugx.org/xp-forge/google-search/version.png)](https://packagist.org/packages/xp-forge/google-search)


Google Websearch Protocol. See http://www.google.com/cse/docs/resultsxml.html

Example
-------

```php
use com\google\search\custom\GoogleSearchClient;
use util\cmd\Console;

$client= new GoogleSearchClient('http://gsa23.enterprisedemo-google.com/search');
$response= $client->searchFor((new GoogleSearchQuery())
  ->withTerm('test')
  ->startingAt(10)
);

Console::writeLinef('Searching for "test" took %3.f second(s)', $response->getTime());
Console::writeLine('Results: ', $response->getResultSet());
```

API
--
```sh
$ xp mirror com.google.search.custom
@FileSystemCL<./src/main/php>
@FileSystemCL<./src/test/php>
package com.google.search.custom {
  package com.google.search.custom.types
  package com.google.search.custom.unittest

  public class com.google.search.custom.GoogleSearchClient
  public class com.google.search.custom.GoogleSearchQuery
}
```


