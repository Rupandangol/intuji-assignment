# Custom PHP Google Calendar Library for Events Management

This project demonstrates a custom PHP library for integrating with the Google Calendar API v3 to manage events, including creating and deleting events.

## Prerequisites

- PHP (>= 7.0)
- Google Cloud Platform account with enabled Google Calendar API and generated Service Account Key
- Basic understanding of PHP and Google Calendar API

## Installation

1. Clone this repository:


# Events Table Schema

Below is the SQL statement to create the `events` table in your MySQL database:

```sql
CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `google_calendar_event_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
