-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.21 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for hris
CREATE DATABASE IF NOT EXISTS `hris` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hris`;

-- Dumping structure for table hris.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table hris.admins: 1 rows
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '$2y$12$eYLwOvDa06ir8U96ENa6r.vw2EcikrqAlj1nrK1oTcGxgQlBWF2z6', NULL, '2018-09-03 14:38:08', '2018-09-03 14:38:09');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table hris.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1' COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_emp_id_unique` (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hris.employees: ~50 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `emp_id`, `first_name`, `last_name`, `middle_name`, `birthdate`, `address`, `job`, `contact`, `remember_token`, `active`, `created_at`, `updated_at`) VALUES
	(1, '18-0000', 'Janae', 'Kunze', 'Collier', '1974-05-31', '83/12 Zemlak Club Suite 364, Santa Maria 0117 Ifugao', 'Soil Conservationist', '', NULL, '1', '2018-09-03 18:01:11', '2018-09-03 18:01:11'),
	(2, '18-0001', 'Jennie', 'Kub', 'Willms', '1990-08-22', '76/10 Hermann Springs, Tanay 2194 Oriental Mindoro', 'Flight Attendant', '', NULL, '1', '2018-09-03 18:01:12', '2018-09-03 18:01:12'),
	(3, '18-0002', 'Alvera', 'Feil', 'Terry', '1982-03-26', '31/54 Cartwright Turnpike Apt. 795, Poblacion, Baguio 0587 Bataan', 'Precision Aircraft Systems Assemblers', '', NULL, '1', '2018-09-03 18:01:14', '2018-09-03 18:01:15'),
	(4, '18-0003', 'Nelle', 'Upton', 'Jacobi', '1974-12-25', '20A/40 Hill Roads Suite 842, Poblacion, Marawi 0881 Quirino', 'Machine Feeder', '', NULL, '1', '2018-09-03 18:01:14', '2018-09-03 18:01:14'),
	(5, '18-0004', 'Okey', 'Yundt', 'Kunde', '1987-08-07', '32 Davis Highway, Poblacion, Vigan 2314 Laguna', 'Fitter', '', NULL, '1', '2018-09-03 18:01:16', '2018-09-03 18:01:16'),
	(6, '18-0005', 'Alia', 'McKenzie', 'Mueller', '1983-07-25', '84A/86 Labadie Trail Suite 433, Santa Barbara 1892 Oriental Mindoro', 'Gas Appliance Repairer', '', NULL, '1', '2018-09-03 18:01:17', '2018-09-03 18:01:17'),
	(7, '18-0006', 'Cloyd', 'Bogisich', 'Reichel', '1986-11-29', '07A/89 Wyman Key Apt. 474, Poblacion, Palayan 9031 Nueva Vizcaya', 'Electrician', '', NULL, '1', '2018-09-03 18:01:17', '2018-09-03 18:01:18'),
	(8, '18-0007', 'Jermaine', 'Franecki', 'Torp', '1985-04-04', '17A/84 Brekke Forge Apt. 886, Salug 3156 Apayao', 'Aircraft Launch Specialist', '', NULL, '1', '2018-09-03 18:01:18', '2018-09-03 18:01:19'),
	(9, '18-0008', 'Nelda', 'Frami', 'O\'Kon', '2009-03-18', '01A/77 Wisozk Springs, Pinamungahan 5575 Lanao del Norte', 'Commercial and Industrial Designer', '', NULL, '1', '2018-09-03 18:01:19', '2018-09-03 18:01:20'),
	(10, '18-0009', 'Sylvia', 'Goyette', 'Haag', '1977-03-08', '33/46 Barrows Pass, La Libertad 7874 Tarlac', 'Product Management Leader', '', NULL, '1', '2018-09-03 18:01:20', '2018-09-03 18:01:21'),
	(11, '18-0010', 'Scot', 'Murphy', 'Kling', '2004-08-10', '20A/56 Fay Prairie Suite 571, Poblacion, Lapu-Lapu 6015 Occidental Mindoro', 'Stringed Instrument Repairer and Tuner', '', NULL, '1', '2018-09-03 18:01:21', '2018-09-03 18:01:22'),
	(12, '18-0011', 'Billie', 'Wilkinson', 'Yundt', '1983-03-28', '34 Gottlieb Spring, Poblacion, Mati 7895 Occidental Mindoro', 'Soldering Machine Setter', '', NULL, '1', '2018-09-03 18:01:23', '2018-09-03 18:01:24'),
	(13, '18-0012', 'Rosalinda', 'Ruecker', 'D\'Amore', '1971-10-20', '64/67 Tromp Meadow, Poblacion, Legazpi 1192 Siquijor', 'Special Forces Officer', '', NULL, '1', '2018-09-03 18:01:22', '2018-09-03 18:01:23'),
	(14, '18-0013', 'Dagmar', 'Kuhlman', 'Grant', '2003-07-06', '93A/15 Marks Bridge, Poblacion, Cabadbaran 9340 Negros Oriental', 'Manicurists', '', NULL, '1', NULL, NULL),
	(15, '18-0014', 'Thea', 'Hand', 'Schowalter', '1981-09-10', '01A/29 Kirlin Court Apt. 243, Poblacion, Navotas 2253 Guimaras', 'Electrical and Electronics Drafter', '', NULL, '1', NULL, NULL),
	(16, '18-0015', 'Angel', 'Swift', 'Fritsch', '1971-10-27', '83A Sauer Cliffs, San Jose De Buan 4276 Misamis Oriental', 'Set and Exhibit Designer', '', NULL, '1', NULL, NULL),
	(17, '18-0016', 'Lavon', 'Waters', 'Lebsack', '1995-06-08', '53A/31 Vandervort Keys, Peñaranda 4580 Nueva Vizcaya', 'Mathematician', '', NULL, '1', NULL, NULL),
	(18, '18-0017', 'Raegan', 'Heidenreich', 'Robel', '1996-05-16', '66A/07 Skiles Greens, Don Marcelino 9674 Quirino', 'Pipelaying Fitter', '', NULL, '1', NULL, NULL),
	(19, '18-0018', 'Fermin', 'Connelly', 'Medhurst', '1995-04-26', '31A Dickens Station, Poblacion, Victorias 5351 Palawan', 'Human Resources Manager', '', NULL, '1', NULL, NULL),
	(20, '18-0019', 'Dedric', 'Stiedemann', 'Sanford', '1990-04-01', '76A/16 Ward Mills Suite 158, Poblacion, Balanga 5820 Ilocos Sur', 'Diamond Worker', '', NULL, '1', NULL, NULL),
	(21, '18-0020', 'Drew', 'Grady', 'Lind', '2015-01-08', '58A/85 Orn Knolls Apt. 535, Guimba 9410 Apayao', 'Microbiologist', '', NULL, '1', NULL, NULL),
	(22, '18-0021', 'Jadyn', 'Hickle', 'Kerluke', '2003-09-26', '65 Bode Port Suite 571, Poblacion, Iloilo City 0300 Northern Samar', 'Foundry Mold and Coremaker', '', NULL, '1', NULL, NULL),
	(23, '18-0022', 'Herminio', 'Haag', 'Bogan', '1981-04-05', '23 Effertz Coves, San Miguel 8764 Sorsogon', 'Preschool Education Administrators', '', NULL, '1', NULL, NULL),
	(24, '18-0023', 'August', 'Emard', 'Torphy', '1991-07-04', '86A Leannon Spur Suite 928, Poblacion, Tarlac City 6354 Sultan Kudarat', 'Space Sciences Teacher', '', NULL, '1', NULL, NULL),
	(25, '18-0024', 'Maud', 'Runte', 'Gerlach', '1977-01-08', '76/72 Runolfsdottir Plain Suite 149, Poblacion, San Jose del Monte 4902 Agusan del Sur', 'Insulation Worker', '', NULL, '1', NULL, NULL),
	(26, '18-0025', 'Wyman', 'Lebsack', 'Herman', '1998-10-19', '03 Bins Islands Suite 862, Poblacion, Lapu-Lapu 3625 Bulacan', 'Numerical Tool Programmer OR Process Control Programmer', '', NULL, '1', NULL, NULL),
	(27, '18-0026', 'Johnnie', 'Daniel', 'Wilkinson', '1988-12-29', '10 DuBuque Key, Camiling 8429 South Cotabato', 'Public Relations Manager', '', NULL, '1', NULL, NULL),
	(28, '18-0027', 'Clare', 'Schinner', 'Hansen', '2017-07-01', '52 Heaney Meadows, Poblacion, Passi 7788 Davao del Sur', 'Electronic Engineering Technician', '', NULL, '1', NULL, NULL),
	(29, '18-0028', 'Francisco', 'Gusikowski', 'Frami', '2015-10-26', '14A/56 Considine Roads, Bauang 3620 Mountain Province', 'Medical Assistant', '', NULL, '1', NULL, NULL),
	(30, '18-0029', 'Toby', 'Turcotte', 'Tremblay', '1987-10-23', '19A/81 Boyer Neck, Cabarroguis 9349 Sarangani', 'Clinical Psychologist', '', NULL, '1', NULL, NULL),
	(31, '18-0030', 'Xavier', 'Quigley', 'King', '2008-06-08', '34A O\'Connell Inlet, Sibutu 1624 Quirino', 'Personal Home Care Aide', '', NULL, '1', NULL, NULL),
	(32, '18-0031', 'Brianne', 'Ernser', 'Aufderhar', '1998-11-28', '40/40 Reynolds Drive Apt. 264, Silvino Lobos 2605 Cagayan', 'Construction Driller', '', NULL, '1', NULL, NULL),
	(33, '18-0032', 'Dayton', 'Schoen', 'Kulas', '1979-06-24', '77/92 Bernier Villages, Cagayancillo 0785 Davao Oriental', 'Record Clerk', '', NULL, '1', NULL, NULL),
	(34, '18-0033', 'Corine', 'Bergnaum', 'Smith', '1980-03-03', '19/17 Mayer Key, Poblacion, Ormoc 1412 Zamboanga Sibugay', 'Industrial Machinery Mechanic', '', NULL, '1', NULL, NULL),
	(35, '18-0034', 'Lacy', 'Hayes', 'Boyer', '1981-01-02', '78 Bednar Locks Suite 790, Poblacion, Vigan 3110 Palawan', 'Installation and Repair Technician', '', NULL, '1', NULL, NULL),
	(36, '18-0035', 'Daren', 'Jast', 'Braun', '1993-03-09', '11A Armstrong Gardens, Poblacion, Lamitan 6835 Batanes', 'Psychiatric Technician', '', NULL, '1', NULL, NULL),
	(37, '18-0036', 'Rhett', 'Brakus', 'Bernier', '2013-01-22', '93A/98 Fay Pass Apt. 839, Poblacion, Naga 8169 Lanao del Sur', 'Oil Service Unit Operator', '', NULL, '1', NULL, NULL),
	(38, '18-0037', 'Lafayette', 'Leffler', 'Greenholt', '1980-04-16', '25A/21 Douglas Green, Poblacion, Tabaco 4431 Agusan del Norte', 'Solderer', '', NULL, '1', NULL, NULL),
	(39, '18-0038', 'Lois', 'Conn', 'Pfannerstill', '1997-12-27', '87/44 Kertzmann Valley, Poblacion, Dumaguete 6399 Albay', 'Counselor', '', NULL, '1', NULL, NULL),
	(40, '18-0039', 'Lexus', 'Senger', 'Kuhic', '1982-09-26', '46/16 Conn Run Suite 854, Poblacion, Masbate City 7969 Oriental Mindoro', 'Order Clerk', '', NULL, '1', NULL, NULL),
	(41, '18-0040', 'Lillie', 'Turcotte', 'Kirlin', '2006-09-30', '36/76 Prohaska Crossing, Marihatag 8570 Negros Oriental', 'Geological Data Technician', '', NULL, '1', NULL, NULL),
	(42, '18-0041', 'Hattie', 'Jacobson', 'Boehm', '1980-03-30', '21 Tillman Orchard Suite 315, Poblacion, Mandaue 2016 Misamis Oriental', 'Electrical Engineering Technician', '', NULL, '1', NULL, NULL),
	(43, '18-0042', 'Tressie', 'Morissette', 'Becker', '1988-06-27', '55/90 Jast Field, Abuyog 0813 Eastern Samar', 'HR Manager', '', NULL, '1', NULL, NULL),
	(44, '18-0043', 'Antonette', 'Douglas', 'Kuhic', '2006-01-03', '65/23 Casper Trace, Poblacion, Silay 5833 Palawan', 'Manager of Air Crew', '', NULL, '1', NULL, NULL),
	(45, '18-0044', 'Salvador', 'Goyette', 'Harber', '1999-03-31', '79A Erdman Inlet Suite 378, Poblacion, Pasig 7169 Bukidnon', 'Avionics Technician', '', NULL, '1', NULL, NULL),
	(46, '18-0045', 'Meaghan', 'Waelchi', 'Trantow', '1976-01-25', '80A/31 Aufderhar Highway Suite 406, Poblacion, Cauayan 1827 Davao del Sur', 'Sheriff', '', NULL, '1', NULL, NULL),
	(47, '18-0046', 'Therese', 'Erdman', 'Bergnaum', '2015-09-04', '77A Connelly Shoals, Poblacion, Biñan 8712 Zamboanga del Sur', 'Special Forces Officer', '', NULL, '1', NULL, NULL),
	(48, '18-0047', 'Ollie', 'Wilkinson', 'Kemmer', '1975-09-19', '32 Purdy Street Suite 162, Poblacion, Legazpi 2957 La Union', 'Agricultural Technician', '', NULL, '1', NULL, NULL),
	(49, '18-0048', 'Edythe', 'Schuppe', 'Schowalter', '1975-10-15', '08 Ernser Cliff, Claveria 0410 Quirino', 'Actuary', '', NULL, '1', NULL, NULL),
	(50, '18-0049', 'Ford', 'Blick', 'Parker', '1972-07-12', '19A/98 Kessler Drive, Maribojoc 0486 Tarlac', 'Wholesale Buyer', '', NULL, '1', NULL, NULL);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table hris.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hris.migrations: 2 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(6, '2014_10_12_000000_create_users_table', 1),
	(7, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table hris.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hris.password_resets: 0 rows
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table hris.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_emp_id_unique` (`emp_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hris.users: 50 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `emp_id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, '18-0000', 'delmer.johnston', 'fritsch.elsa@bailey.com', '$2y$10$FuEd9/lrRWuA8rmuQWvbWOQdTV9swL/GfR5YIMyeAXPIcttDevaVK', NULL, '2018-09-03 18:01:38', '2018-09-03 18:01:39'),
	(2, '18-0001', 'jenkins.francisca', 'powlowski.garnett@hotmail.com', '$2y$10$398GJW0VJuZwceC37aI7IO2gm0VrpMad8vvrFpkg3RSlijZeLx1/a', NULL, '2018-09-03 18:01:39', '2018-09-03 18:01:40'),
	(3, '18-0002', 'greenfelder.manley', 'evangeline.emard@emard.com', '$2y$10$u7wlu0e4UyhCpQbrRI60zOnTnwQ.bmnHwYY6msuC20ZV43jqOtiHe', NULL, '2018-09-03 18:01:40', '2018-09-03 18:01:41'),
	(4, '18-0003', 'powlowski.pascale', 'fay.jayce@huels.com', '$2y$10$eWJrq/8efwaRR5AfDbwazehqsFWmv2s2VagooRcyHpUPKP.WkHrDe', NULL, '2018-09-03 18:01:41', '2018-09-03 18:01:41'),
	(5, '18-0004', 'ruben76', 'jayce38@lang.biz', '$2y$10$Q39TMQd0sJQ1jTYKMb2fUeU364pNoP5MwVJmiuteem9aQxHjJ6iXq', NULL, '2018-09-03 18:01:42', '2018-09-03 18:01:42'),
	(6, '18-0005', 'farrell.jimmie', 'meta.rosenbaum@yahoo.com', '$2y$10$Puf0G9Y2nt3iIGmuZVybvu5wpmcBOpyVcBD5qdE5xuHwAULnRQClu', NULL, '2018-09-03 18:01:43', '2018-09-03 18:01:43'),
	(7, '18-0006', 'elena13', 'josue.hansen@hotmail.com', '$2y$10$u3502eWLVCvQdc66rYlOJuLdocgL2V.sp7mJOiv7.dDQ3DgSMBw3S', NULL, '2018-09-03 18:01:44', '2018-09-03 18:01:44'),
	(8, '18-0007', 'laron.schoen', 'kkilback@gmail.com', '$2y$10$btgrPXoThLNciy71F1QKVemwEsU7CGjFcVvHrvUHzERRb3Zti3IOy', NULL, '2018-09-03 18:01:45', '2018-09-03 18:01:45'),
	(9, '18-0008', 'jaida64', 'aric52@walker.com', '$2y$10$s9DUE3wEqsLBL.VA2x3u8OFCRx22nGKG9/XBOHf9D/rsVSdbA.xnC', NULL, '2018-09-03 18:01:45', '2018-09-03 18:01:46'),
	(10, '18-0009', 'paige71', 'barrett29@yahoo.com', '$2y$10$vU6QFL8dAwca7W25OtCnOu/e9GnI7Cq.66H2MWQdKMuhwNproeoYC', NULL, NULL, NULL),
	(11, '18-0010', 'ksporer', 'audreanne27@stiedemann.com', '$2y$10$Vfe.JOODBVa/QPrfKQuUsOLg4Qb2KZrH.xd4GXNgXLwMYf0nWtsmO', NULL, NULL, NULL),
	(12, '18-0011', 'jay69', 'seth58@auer.net', '$2y$10$..raQZEiRsFrCfmxja8Zqe94fH6TAiXK3PoXRL1hFHlSvcjJa6USO', NULL, NULL, NULL),
	(13, '18-0012', 'walter.josie', 'jeramy49@gmail.com', '$2y$10$os1R6Q1E.8sRGaGBiEsbme9sqIjAlXYRlTBAHZIu8TuHvqO6UVsXW', NULL, NULL, NULL),
	(14, '18-0013', 'beahan.mallory', 'buck.padberg@yahoo.com', '$2y$10$bBVgy/jo9YdEMR2lXtDxIO6sPngZwv3DTbWPCdgq8NQSCSIc6oxCu', NULL, NULL, NULL),
	(15, '18-0014', 'yasmeen.heller', 'schmeler.lorenzo@yahoo.com', '$2y$10$6FKPsxv0IfIXjltXMaBs.uHEaCBuxGypUu4CwEKbayHjXjdIcRhoS', NULL, NULL, NULL),
	(16, '18-0015', 'etha77', 'letha.fay@yahoo.com', '$2y$10$hNB4cXaIQKZaz0vgWoo3iOdWge30SwJfK.VvCCBm4oV7F05oNMwyC', NULL, NULL, NULL),
	(17, '18-0016', 'oconnell.maegan', 'brian.dibbert@gmail.com', '$2y$10$3aTjC2Z/cPcWgq6raBwvduZ8luI0clHWOmARUdROA6HN86dooATLa', NULL, NULL, NULL),
	(18, '18-0017', 'cooper24', 'schultz.elizabeth@legros.biz', '$2y$10$K5FncCHAUTh2IxQMgu.yOuY0K2zLckcxG3lWiweTNfhWwSVqGZNbC', NULL, NULL, NULL),
	(19, '18-0018', 'zoe46', 'ewiza@heidenreich.biz', '$2y$10$OklVoWHfdgyb3ddBy2MnP.CN7sU8L73ltQlT6p5iZeJe6gS5yZcAm', NULL, NULL, NULL),
	(20, '18-0019', 'dayana.halvorson', 'adaline99@hotmail.com', '$2y$10$5KaEzsfIfam/awtqa1rJK.uk.pYxjv9lzpgqRbvWNhpgjK225JY5e', NULL, NULL, NULL),
	(21, '18-0020', 'inolan', 'osvaldo39@yahoo.com', '$2y$10$0UZ0ftKcyOzjLvq3Mqo89ee4I3MaZQ1j1pkxY5iqSeoq7PhEsMDvm', NULL, NULL, NULL),
	(22, '18-0021', 'umedhurst', 'herman.vladimir@yahoo.com', '$2y$10$0p7qj0f6m6WOj4TgiIwtUulpUkn3WeeKcgQRPoF/nFVYacdDkGa0K', NULL, NULL, NULL),
	(23, '18-0022', 'spinka.justus', 'isai34@runte.net', '$2y$10$z9P319wE/gO8HxQQuL9vq.COnc3ATuO1DjscqbFFKQMQn2R5g8LOy', NULL, NULL, NULL),
	(24, '18-0023', 'dbradtke', 'shessel@langosh.com', '$2y$10$d6R6xiWBp5AMBJdLwYkHlOmYJqLa3QUkiv5u8tc55C/N9zsV/JRBW', NULL, NULL, NULL),
	(25, '18-0024', 'katelin.bechtelar', 'raymond.murray@schneider.com', '$2y$10$fA9ZGi1e/wS9ttmPAil8ROpC8ICdL2Pzhv9vzTxpz.TZn8i4r1byW', NULL, NULL, NULL),
	(26, '18-0025', 'norberto77', 'annabelle.beier@bernhard.com', '$2y$10$l/9m2expo2XCG34VxCSkQubW0uQ5mD9RKEfhhiFRKqjoKcksGAEwu', NULL, NULL, NULL),
	(27, '18-0026', 'kuhn.keenan', 'trevion90@yahoo.com', '$2y$10$QQPlvOT04a.Qjzfap5ezQ.kScBdHu3o/DVt3dXhMMeBtqE1r7kMGm', NULL, NULL, NULL),
	(28, '18-0027', 'timothy.haley', 'zkrajcik@yahoo.com', '$2y$10$4ze0vpPTIPaNnrwCa9IwY.XhZ881ZUkNcCdmYNDZ2RL3yLcekZ7Ju', NULL, NULL, NULL),
	(29, '18-0028', 'miles55', 'lexi54@ohara.com', '$2y$10$IjrL7BOXz1t5L5SPJa3mzO4s0uj4ZaYeS3oOBGsyklun0RUa2QeMa', NULL, NULL, NULL),
	(30, '18-0029', 'ernesto.littel', 'qkiehn@prohaska.com', '$2y$10$nX7czN75zQYvNCQ5oFzcxuVCNhOMp94qGmC6rYSml5MbyeItGHuxG', NULL, NULL, NULL),
	(31, '18-0030', 'west.isac', 'nyah.bartell@hotmail.com', '$2y$10$/JwofobiB8pgfqO0Gnn3hOuR4qOZI8YAqfGrZLrGvO3i1Y7geH0TO', NULL, NULL, NULL),
	(32, '18-0031', 'zemlak.kelvin', 'amara74@hotmail.com', '$2y$10$Eu.iE3c3PDNo1/WSoOh2OOYkJp/Pn9.V8f4IsV2l2twVNUFbgZ1Ge', NULL, NULL, NULL),
	(33, '18-0032', 'dee84', 'kblick@steuber.info', '$2y$10$cBkePcnO3uU0skENJ83j2u8siYOcJsyzo7wK6MnL8rYCLAWNEA8d.', NULL, NULL, NULL),
	(34, '18-0033', 'janice44', 'carmen49@hotmail.com', '$2y$10$7ab8DMhypjGz03.k.TYdxOm/CjzX3i.rtUpznaJFoTKSNWUx6jcPu', NULL, NULL, NULL),
	(35, '18-0034', 'therese.farrell', 'jordon33@ankunding.org', '$2y$10$t375//HOBZRqIYe2IsiZ1OlKH7xrOmyuxPkMHWoFoAgg.krRvjdsG', NULL, NULL, NULL),
	(36, '18-0035', 'elda.durgan', 'josiah.mraz@gerlach.com', '$2y$10$YO4jkCTUw0K09dsMF0U7qOm1IQ4Uxw4yluYRQ0hQWD5D4gnToivp.', NULL, NULL, NULL),
	(37, '18-0036', 'jayson47', 'reilly.craig@hotmail.com', '$2y$10$4OxJaN/3ERegtUYkAmqONOIUqh.QKh/.cCEtyFMLz0ov9c2awILYG', NULL, NULL, NULL),
	(38, '18-0037', 'plemke', 'cmurazik@sawayn.biz', '$2y$10$lJLvIgsl1zGLjIvvzp84FOsBHVolN/tj/bcnyFi6oRm85sF9LQEPO', NULL, NULL, NULL),
	(39, '18-0038', 'pearline.okeefe', 'daniel.emmet@yahoo.com', '$2y$10$A9K1Arq31D5.bzrVKbuZS.G1NfvJFm1zMN8i3xfJvpxBdGOELu3D.', NULL, NULL, NULL),
	(40, '18-0039', 'alessia99', 'ryleigh37@von.info', '$2y$10$HZzCTM2J5Qg7HnRaN5xc6usxfeC5BwcYcX6IAsOOzgKkv6EuLGiqO', NULL, NULL, NULL),
	(41, '18-0040', 'memard', 'fwyman@orn.biz', '$2y$10$J0CRWv0f0cBKmTSwdyMp7u1USprNbaj.Z.nNZb37Ateb.G/mVYWJe', NULL, NULL, NULL),
	(42, '18-0041', 'flatley.houston', 'lacey32@predovic.com', '$2y$10$kJCzq0xtJkHwtVU5/DA9P.yJM0LwiV3AkLuw/gLmT.j5k3pafiZwW', NULL, NULL, NULL),
	(43, '18-0042', 'glubowitz', 'reece48@hotmail.com', '$2y$10$6UvlKJdBSn09iHI/M4PP0.w1aqrZCWIfGu6JRIBM6CGmaMSzde/Ze', NULL, NULL, NULL),
	(44, '18-0043', 'abbie.abbott', 'jmetz@mueller.net', '$2y$10$rdxANV.RyR/GoYkrukX8H.ny9rh6qHe4cb22/UjHTEj..iD1g8.N6', NULL, NULL, NULL),
	(45, '18-0044', 'kris.werner', 'alvis16@hotmail.com', '$2y$10$beDL4Dr6H9Jw1jdgfYlHm.SLeLxuZof8RVDvMMR7lfViXDkgiPGra', NULL, NULL, NULL),
	(46, '18-0045', 'orath', 'eden60@gmail.com', '$2y$10$n.46vLowmbKBD/cwGcrM3eSHecFNjCWDwVCkPsjKqMvj1G1IJMv8i', NULL, NULL, NULL),
	(47, '18-0046', 'gschaefer', 'tgutmann@gmail.com', '$2y$10$E2sSBmlMjPtg6gI7mBTU9u1aD4AUYITUJjY5sR5BDeEuLafxVVzCm', NULL, NULL, NULL),
	(48, '18-0047', 'cremin.georgianna', 'jerod55@hotmail.com', '$2y$10$WGxWrffYr.7u21vDfc0JX.M9u4rrfraKGaw.OW.c6htcUSKsVwYXm', NULL, NULL, NULL),
	(49, '18-0048', 'chintz', 'schinner.kylee@murray.com', '$2y$10$jYmLHIr.gwua/w5yNC9Qje0Sc8zjlSgeiSbdRtU0V28FvW9DtfLfy', NULL, NULL, NULL),
	(50, '18-0049', 'hettinger.taylor', 'nbalistreri@hoppe.com', '$2y$10$sta7.fI.oFOQNdTEA3o8HOEuRxTc82IruYlUH6nMsaqZiwSeCip02', NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
