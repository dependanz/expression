<?php
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

echo array_values($cleardb_url);

$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

$active_group = 'default';
$query_builder = TRUE;
