## Test assignment

### Requirements
PHP 7.1.3+
#### PHP modules to be enabled
PDO  
pdo_sqlite

#### Installation
- deploy under the server root
- run `composer install` if you have composer installed on your machine, if not, [download it](https://getcomposer.org/download/) and run `php composer.phar install`
- make sure the directories `storage` and `bootstrap/cache` are writable by the web server
- rename .env.example into .env 
- visit on the browser.

#### Client side libraries
[jQuery](https://jquery.com/)  
[Jquery Data tables](https://www.datatables.net)  
[Twitter Bootstrap](https://getbootstrap.com)


#### Notes
I have used SQLite as a database as the project is too small to worthwhile more robust database engine.  
I have left the default "users" table migrations as I see no need to remove it.  

#### View online
You can check it out online at: [http://asap-task.vivanov.me/](http://asap-task.vivanov.me/)

