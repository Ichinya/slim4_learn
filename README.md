# slim4_learn
Проверяю и учусь использовать framework SlimPHP4

# Настройки
Все настройки хранятся в папке `\config`

# commands

* `composer dumpautoload -o` для создания оптимизированного файла autoload
* `.\vendor\bin\phinx create MakeUserTableMigration -c ./config/migrations.php` - создать файл с миграцией
* `.\vendor\bin\phinx migrate -c ./config/migrations.php` - добавить миграции в базу
* `phinx seed:create UserTableSeeder` создание seeder
* `phinx seed:run` наполнение базы случайными данными