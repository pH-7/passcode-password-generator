# PHP Passcodes & Passwords Generator

## 📄 Description

*A simple, secure &amp; clean way to generate random **passcodes** and **passwords** 🔑*

The library generates cryptographically secure random passwords and passcodes.

[![Ko Fi - Offer Me A Coffee](media/kofi-logo.png)](https://ko-fi.com/phenry)


## 🛠 Server Requirement

* [PHP 7.3](https://php.net/releases/7_3_0.php) and higher 🚀


## 🛠 Installation (with Composer)

```bash
composer require ph-7/passcode-password-generator
```


## 📄 Usage

###  For Passcodes

```php
use PH7\Generator\Passcode;

echo Passcode::generate(10); // Generate a 10-length passcode
````

By default, without argument, the function will generate a 6-character passcode.
```php
use PH7\Generator\Passcode;

// By default, it generates a 6 length passcode
echo Passcode::generate();


// You can use the public `Passcode::DEFAULT_LENGTH` const, whcih also gives a 6-length passcode
echo Passcode::generate(Passcode::DEFAULT_LENGTH);
````

###  For Passwords

```php
use PH7\Generator\Password;

echo Password::generate(16); // Generate a 16-length password
````

By default, generated passwords will contain special characters. You can disable them by mentioning the second argument to `false`
```php
use PH7\Generator\Password;

// The password won't contain any special characters such as -, _, ~, |, %, ^, !, $, #, @, and ?
echo Password::generate(Password::DEFAULT_LENGTH, false);
````

Without argument, the function will generate a 12-character password.
```php
use PH7\Generator\Password;

// By default, it generates a 12-length password
echo Password::generate();


// Password::DEFAULT_LENGTH also gives a 12-length password
echo Password::generate(Password::DEFAULT_LENGTH);
````


## 😋 Who cooked it?

[![Pierre-Henry Soria](https://s.gravatar.com/avatar/a210fe61253c43c869d71eaed0e90149?s=200)](https://ph7.me "Pierre-Henry Soria personal website")


[![@phenrysay][x-image]](https://x.com/phenrysay) [![pH-7][github-image]](https://github.com/pH-7) [![YouTube Tech Videos][youtube-icon]](https://www.youtube.com/@pH7Programming "My YouTube Tech Channel")

**[Pierre-Henry Soria](https://ph7.me)**, a highly passionate, zen &amp; pragmatic software engineer 😊

☕️ Would like to help? **[Offer me a coffee](https://ko-fi.com/phenry)**, and boost the maintenance of this library! 💪


## ⚖️ License

**PHP Passcode/Password Generator** is generously distributed under the *[MIT](https://opensource.org/licenses/MIT)* 🎉


<!-- GitHub's Markdown reference links -->
[x-image]: https://img.shields.io/badge/x-000000?style=for-the-badge&logo=x&logoColor=white
[github-image]: https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white
[youtube-icon]: https://img.shields.io/badge/YouTube-FF0000?style=for-the-badge&logo=youtube&logoColor=white
