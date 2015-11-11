<?php
//Query constants to be used globally.

/* SELECTION QUERIES */
define("ALL_LOCATIONS", "SELECT * FROM `locations`");

define("ALL_PROPERTIES", "SELECT * FROM `properties`");

define("LOCATIONS_BY_PROVINCE", "SELECT * FROM `locations` WHERE `province`=");

define("USER_BY_EMAIL", "SELECT * FROM `users` WHERE `email`=");



/* INSERTION QUERIES */
define("INSERT_INTO_USERS", "INSERT INTO `users` (`id`, `name`, `email`, `password`, `landlord`, `created_at`, `updated_at`) ");

define("INSERT_INTO_PROPERTIES", "INSERT INTO `properties` (`id`, `vacant`, `price`, `area`, `title`, `description`, `address`, `city`, `province`, `property_type`, `features`, `rooms`, `baths`, `distance_to_school`, `time_to_bus`, `image`, `posted_at`, `created_at`, `updated_at`)")

?>