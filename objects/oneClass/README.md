### One class to rule them All 😎
> One class to rule them all: declare
a generic class to select, add,
update, and delete from a MySQL
database.

> The objective is to apply OOP principles in PHP

### Instructions
- Create a database named **oop**
- Create the following tables;
  - **user**
    - id - integer,autoincrement
    - name - text
    - phone_number - varchar(20)
    - country_id - integer
  - **role**
    - id - integer,autoincrement
    - name - text
  - **permission**
    - id - integer,autoincrement
    - name - text
  - **role_permission**
    - id - integer,autoincrement
    - role_id - integer (fk : role_table)
    - permission_id -  integer (fk : permission table)
    - user_id : integer,autoincrement(fk : user table)
- Submit your schema on google classroom
- Create classes inline with OOP principles explored so far for database CRUD

### Concepts covered
- OOP principles
- PHP Data Objects
- Namespaces
- Aliasing & importing

### References

1. Chapter 6 & 8 - Programming PHP. Kevin Tatroe, Peter MacIntyre and Rasmus Lerdorf
2. [PDO vs. MySQLi: Which Should You Use?](https://code.tutsplus.com/tutorials/pdo-vs-mysqli-which-should-you-use--net-24059)
3. [PHP Data Objects](http://php.net/manual/en/book.pdo.php)
4. [PHP Namespaces](http://php.net/manual/en/language.namespaces.rationale.php)
5. [Using namespaces: Aliasing/Importing](http://php.net/manual/en/language.namespaces.importing.php)
6. [Composer dependency manager](https://getcomposer.org/)


### Credits
- [KLogger](https://github.com/katzgrau/KLogger)

>"It is not the strength of your faith but the _object of your faith_ that actually saves you." Timothy Keller ✍✍
