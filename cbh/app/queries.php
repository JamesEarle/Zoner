<?php
//Query constants to be used globally.

define("ALL_LOCATIONS", "SELECT * FROM `locations`");

define("LOCATIONS_BY_PROVINCE", "SELECT * FROM `locations` WHERE `province`=");

define("INSERT_INTO_USERS", "INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) ");

define("INSERT_INTO_LANDLORDS", "INSERT INTO `landlords` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) ");

define("INSERT_INTO_PROPERTIES", "INSERT INTO `properties` (`id`, `title`, `description`, `address`, `city`, `province`, `property_type`, `features`, `rooms`, `baths`, `distance_to_school`, `time_to_bus`, `image`, `posted_at`, `created_at`, `updated_at`)")


?>