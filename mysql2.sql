mysql> select * from wizard where birthday between '1975-00-00' and '1985-00-00';
+----+-----------+----------+------------+-------------+---------------------------------------+-----------+
| id | firstname | lastname | birthday   | birth_place | biography                             | is_muggle |
+----+-----------+----------+------------+-------------+---------------------------------------+-----------+
|  1 | harry     | potter   | 1980-07-31 | london      |                                       |         0 |
|  2 | hermione  | granger  | 1979-09-19 |             | Friend of Harry Potter                |         0 |
|  4 | ron       | weasley  | 1980-03-01 |             | Best friend of Harry                  |         0 |
|  5 | ginny     | weasley  | 1981-08-11 |             | Sister of Ron and girlfriend of Harry |         0 |
|  6 | fred      | weasley  | 1978-04-01 |             |                                       |         0 |
|  7 | george    | weasley  | 1978-04-01 |             |                                       |         0 |
| 10 | drago     | malefoy  | 1980-06-05 |             |                                       |         0 |
| 14 | dudley    | dursley  | 1980-06-23 |             | Cousin d'Harry                        |         1 |
+----+-----------+----------+------------+-------------+---------------------------------------+-----------+
8 rows in set (0.00 sec)

mysql> select * from wizard where lastname like 'h%';
Empty set (0.00 sec)

mysql> select * from wizard where lastname like 'H%';
Empty set (0.00 sec)

mysql> select * from wizard where firstname like 'H%';
+----+-----------+----------+------------+-------------+------------------------+-----------+
| id | firstname | lastname | birthday   | birth_place | biography              | is_muggle |
+----+-----------+----------+------------+-------------+------------------------+-----------+
|  1 | harry     | potter   | 1980-07-31 | london      |                        |         0 |
|  2 | hermione  | granger  | 1979-09-19 |             | Friend of Harry Potter |         0 |
+----+-----------+----------+------------+-------------+------------------------+-----------+
2 rows in set (0.00 sec)

mysql> select * from wizard where firstname and lastname = 'potter'order by firstname asc;
Empty set, 1 warning (0.00 sec)

mysql> select firstname, lastname from wizard order by firstname asc and firstname or lastname = 'Potter';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and firstname or lastname = 'Potter'' at line 1
mysql> select * from wizard where lastname = 'Potter' or firstname = 'Potter' order by firstname ASC;
+----+-----------+----------+------------+-------------+------------------------+-----------+
| id | firstname | lastname | birthday   | birth_place | biography              | is_muggle |
+----+-----------+----------+------------+-------------+------------------------+-----------+
|  1 | harry     | potter   | 1980-07-31 | london      |                        |         0 |
|  3 | lily      | potter   | 1960-01-30 |             | mother of Harry Potter |         0 |
+----+-----------+----------+------------+-------------+------------------------+-----------+
2 rows in set (0.00 sec)

mysql> select firstname, lastname, birthday from wizard where birthday desc limit 30;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'desc limit 30' at line 1
mysql> select firstname, lastname, birthday from wizard where birthday DESC limit 30,30;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESC limit 30,30' at line 1
mysql> select firstname, lastname, birthday from wizard where birthday DESC;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESC' at line 1
mysql> select firstname, lastname, birthday from wizard order by birthday DESC limit 14, 0;
Empty set (0.00 sec)

mysql> select firstname, lastname, birthday from wizard order by birthday DESC LIMIT 14,14;
Empty set (0.00 sec)

mysql> select firstname, lastname, birthday from wizard order by birthday DESC;
+-----------+------------+------------+
| firstname | lastname   | birthday   |
+-----------+------------+------------+
| ginny     | weasley    | 1981-08-11 |
| harry     | potter     | 1980-07-31 |
| dudley    | dursley    | 1980-06-23 |
| drago     | malefoy    | 1980-06-05 |
| ron       | weasley    | 1980-03-01 |
| hermione  | granger    | 1979-09-19 |
| fred      | weasley    | 1978-04-01 |
| george    | weasley    | 1978-04-01 |
| lily      | potter     | 1960-01-30 |
| severus   | rogue      | 1960-01-09 |
| arthur    | weasley    | 1950-02-06 |
| molly     | weasley    | 1949-01-01 |
| tom       | j├®dusor   | 1926-12-31 |
| albus     | dumbledore | 1881-07-01 |
+-----------+------------+------------+
14 rows in set (0.00 sec)

mysql> select firstname, lastname, birthday from wizard order by birthday ASC 0;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1
mysql> select firstname, lastname, birthday from wizard order by birthday ASC 0,0;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0,0' at line 1
mysql> select firstname, lastname, birthday from wizard order by birthday DESC limit 1,0;
Empty set (0.00 sec)

mysql> select firstname, lastname, birthday from wizard order by birthday desc limit 0,1;
+-----------+----------+------------+
| firstname | lastname | birthday   |
+-----------+----------+------------+
| ginny     | weasley  | 1981-08-11 |
+-----------+----------+------------+
1 row in set (0.00 sec)