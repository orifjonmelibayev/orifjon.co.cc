<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-05-21 05:46:14 --- ERROR: Database_Exception [ 0 ]: [1054] Unknown column '1' in 'where clause' ( SELECT `categories`.* FROM `categories` WHERE 0 = 'slug' AND `1` = 'cat1' LIMIT 1 ) ~ MODPATH/database/classes/kohana/database/mysql.php [ 181 ]
2011-05-21 05:57:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH/classes/view/blog/category.php [ 15 ]
2011-05-21 07:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Not found ~ APPPATH/classes/view/post.php [ 10 ]