<?php
//Query constants to be used globally.

/* SELECTION QUERIES */

define("PROPERTIES_FILTERED", "SELECT * FROM `properties` WHERE `address` LIKE");

define("LANDLORD_BY_EMAIL", "SELECT * FROM `users` WHERE `email`=");

define("USER_BY_LANDLORD", "SELECT `email` FROM `users` WHERE `landlord`=1");

define("PROPERTIES_BY_ID", "SELECT * FROM `properties` WHERE `id`=");

define("PROPERTIES_BY_DATE_DESC", "SELECT * FROM `properties` ORDER BY `created_at` DESC");

define("LOCATIONS_BY_PROVINCE", "SELECT * FROM `locations` WHERE `province`=");

define("USER_BY_EMAIL", "SELECT * FROM `users` WHERE `email`=");

define("ALL_USERS", "SELECT * FROM `users`");

define("ALL_PROPERTIES", "SELECT * FROM `properties`");


/* INSERTION QUERIES */
define("INSERT_INTO_USERS", "INSERT INTO `users` (`id`, `name`, `email`, `password`, `landlord`, `created_at`, `updated_at`) ");

define("INSERT_INTO_PROPERTIES", "INSERT INTO `properties` (`id`, `vacant`, `latitude`, `longitude`, `price`, `area`, `title`, `description`, `address`, `city`, `province`, `property_type`, `features`, `rooms`, `baths`, `distance_to_school`, `time_to_bus`, `featured-image`, `image`, `landlord-email`, `posted_at`, `created_at`, `updated_at`)");


/* DELETION QUERIES */
define("DELETE_PROPERTY", "DELETE FROM `properties` WHERE `id`=");

?>