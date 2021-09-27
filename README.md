# PHP Passcode Generator

## 📄 Description

A simple way to generate random passcodes and passwords


## 🛠 Installation (with Composer)

```bash
composer require ph-7/passcode-generator
```

## 🛠 Server Requirement

* [PHP 7.1](https://php.net/releases/7_1_0.php) or higher.


## 🎮 Usage

```php
use PH7\Generator\Passcode;

echo Passcode::generate(10); // Generate a 10 length password
````

You can use the public constant `Passcode::DEFAULT_LENGTH` which contains `6` as the default value

```php
use PH7\Generator\Passcode;

// By default, it generates a 6 length passcode
echo Passcode::generate(Passcode::DEFAULT_LENGTH); 
````

Without argument, the function will generate a 6-character passcode.
```php
use PH7\Generator\Passcode;

// By default, it generates a 6 length passcode
echo Passcode::generate(); 
````

## 😋 Who cooked it?

[![Pierre-Henry Soria](https://s.gravatar.com/avatar/a210fe61253c43c869d71eaed0e90149?s=200)](https://ph7.me "Pierre-Henry Soria personal website")


[![@phenrysay][twitter-image]](https://twitter.com/phenrysay) [![pH-7][github-image]](https://github.com/pH-7)

**[Pierre-Henry Soria](https://ph7.me)**, a highly passionate, zen &amp; pragmatic software engineer 😊


## ⚖️ License

**PHP Passcode Generator** is generously distributed under the *[MIT](https://opensource.org/licenses/MIT)*.


<!-- GitHub's Markdown reference links -->
[twitter-image]: https://img.shields.io/badge/Twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white
[github-image]: https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white
