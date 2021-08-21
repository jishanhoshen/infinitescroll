# infinite_scroll
Infinite scroll using **AJAX** and **PHP API**


### Files:

1. [index.html](https://github.com/jishanhoshen/infinite_scroll/blob/main/index.html)
2. [config.php](https://github.com/jishanhoshen/infinite_scroll/blob/main/config.php)
3. [build.php](https://github.com/jishanhoshen/infinite_scroll/blob/main/build.php)
4. [api.php](https://github.com/jishanhoshen/infinite_scroll/blob/main/api.php)

### File Describe:
1. index.html
    - This page is designed with bootstrap,
    - In particular, the Infinite scrolling system has been created through the use of jQuery Ajax.
    - This page sent some conditional data to the API page using ajax and the API page return some JSON formatted data from a database.
2. config.php
    - This page has been used for connection to the database.
3. build.php
    - This build page is for insert some demo data into the database in advance.
    - I use [loripsum API](http://loripsum.net/api) for random demo text.
4. api.php
    -  The data from the database is captured in this file and shown in **Json** format
    -  The **config** file is connected for database connection
    -  **data array** stores all data from the database and **rows array** stores each row from table
    -  Checking how much data needs to be load **($_POST['iload'])** and what is the previous last data ID **($_POST['oset'])** through the post method.




