# dhisha-lite
### A lighter more stable reimplementation of dhisha in Laravel 5.6 as seen at www.dhisha.in

### Requirements
* [Composer](https://getcomposer.org/download/)
* A VM environment like 'homestead' to host it on (I ended up using [xampp](https://www.apachefriends.org/index.html) cause of homestead's stupidly slow server download bandwidth)
* [VC++ redist 2015](https://www.microsoft.com/en-in/download/details.aspx?id=48145)
* A good Text Editor ([Atom](https://atom.io)/[VSCode](https://code.visualstudio.com)/[Sublime](https://www.sublimetext.com))


## Setting up a this app from github
* clone from git using `$ git clone https://github.com/spell1612/dhisha-lite.git <foldername>` (Foldername optional. Defaults to repo name)
* cd into folder with `$ cd <foldername>` or `$ cd dhisha-lite` by default
* create new env file by using `$ cp .env.example .env`
* Setup your local environment (create a database etc...)
* Enter your environment details in the .env file
* grab the dependancies with `$ composer update`
  - dependancies can be defined in the composer.json file
* From the root folder run `$ php artisan key:generate`
* Migrate the db schema using `$ php artisan migrate` (make sure databse is running)
* `$ php artisan serve` to run the app at localhost:8000


Use `/home` route to access admin panel. Register with any random credentials to login **for now**.

Give me a pull request if you wanna help add more features/fix bugs.
