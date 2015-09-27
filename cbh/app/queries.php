<?php
//Query constants to be used globally.

define("ALL_LOCATIONS", "SELECT * FROM LOCATIONS");

define("LOCATIONS_BY_PROVINCE", "SELECT * FROM LOCATIONS WHERE PROVINCE=");

define("INSERT_INTO_USERS", "INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) ");

define("INSERT_INTO_LANDLORDS", "INSERT INTO `landlords` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) ");


?>