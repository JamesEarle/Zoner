<?php
//Query constants to be used globally.

define("ALL_LOCATIONS", "SELECT * FROM `locations`");

define("LOCATIONS_BY_PROVINCE", "SELECT * FROM `locations` WHERE `province`=");

define("INSERT_INTO_USERS", "INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) ");

define("INSERT_INTO_LANDLORDS", "INSERT INTO `landlords` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) ");


?>