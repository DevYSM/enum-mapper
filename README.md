
# Enum Mapper

With enum mapper, you can map your enum classes easily with some of the features.
I will explain these features in the following commands.

## Map your enum class with Enum mapper class.

Add badges from somewhere like: [shields.io](https://shields.io/)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)


## You can install the package via composer using the following command.


```bash
  composer require devysm/enum-mapper
```


## Usage/Examples

```php
use Devysm\EnumMapper\EnumMapper;

$mapper = new EnumMapper();

// This method will return a single array of cassess, Check the next example
$mapper->setEnum(\App\Enum\OriginEnum::class)->getCasesWithoutContext();

[
  0 => "italy"
  1 => "china"
  2 => "turkey"
  3 => "germany"
  4 => "qatar"
  5 => "taiwan"
  6 => "japan"
]

// This method will return a single array of cassess 
// with keys like the original value of case, Check the next example.
$mapper->setEnum(\App\Enum\OriginEnum::class)->getCasesWithContext();
[
  "italy" => "Italy"
  "china" => "China"
  "turkey" => "Turkey"
  "germany" => "Germany"
  "qatar" => "Qatar"
  "taiwan" => "Taiwan"
  "japan" => "Japan"
]

// also you can change the context data to lowercase & uppercase
// Check the next example

$mapper->setEnum(\App\Enum\OriginEnum::class)
        ->toLowercase()
        ->getCasesWithContext();

$mapper->setEnum(\App\Enum\OriginEnum::class)
->toUppercase()
->getCasesWithContext();

```


## Authors

- [@Yassen Sayed](https://www.github.com/DevYSM)


## License

[MIT](https://choosealicense.com/licenses/mit/)

