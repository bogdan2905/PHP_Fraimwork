<?php
add_rout("^PHP_Fraimwork$","Main@index","AdminMiddleware");
add_rout("^PHP_Fraimwork/(?<id>\d+)/(?<name>\d+)$","Main@index@(id,name)");
add_rout("^PHP_Fraimwork/admin/(?<table>[\w|_|\d]+)$", "Admin@show@(table)");
add_rout("^PHP_Fraimwork/admin/(?<table>[\w|_|\d]+)/add$", "Admin@add@(table)");
add_rout("^PHP_Fraimwork/admin/(?<table>[\w|_|\d]+)/(?<id>\d+)$", "Admin@edit@(table,id)");
add_rout("^PHP_Fraimwork/admin/(?<table>[\w|_|\d]+)/(?<id>\d+)/delete$", "Admin@delete@(table,id)");
add_rout("^PHP_Fraimwork/admin", "Admin@index");