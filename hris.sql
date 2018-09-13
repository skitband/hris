-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.21 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
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
  `first_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fathers_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mothers_name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_graduated` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` longtext COLLATE utf8mb4_unicode_ci,
  `hobbies` longtext COLLATE utf8mb4_unicode_ci,
  `tin` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sss` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagibig` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `philhealth` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `more_info` longtext COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` char(1) COLLATE utf8mb4_unicode_ci DEFAULT '1' COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_emp_id_unique` (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hris.employees: ~51 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `emp_id`, `first_name`, `last_name`, `middle_name`, `birthdate`, `address`, `height`, `weight`, `blood_type`, `contact`, `fathers_name`, `mothers_name`, `job`, `department`, `rank`, `level`, `school`, `course`, `year_graduated`, `skills`, `hobbies`, `tin`, `sss`, `pagibig`, `philhealth`, `more_info`, `remember_token`, `active`, `created_at`, `updated_at`) VALUES
	(1, '18-0000', 'Janae', 'Kunze', 'Collier', '1974-05-31', '83/12 Zemlak Club Suite 364, Santa Maria 0117 Ifugao', NULL, NULL, NULL, '', NULL, NULL, 'Soil Conservationist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:11', '2018-09-03 18:01:11'),
	(2, '18-0001', 'Jennie', 'Kub', 'Willms', '1990-08-22', '76/10 Hermann Springs, Tanay 2194 Oriental Mindoro', NULL, NULL, NULL, '', NULL, NULL, 'Flight Attendant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:12', '2018-09-03 18:01:12'),
	(3, '18-0002', 'Alvera', 'Feil', 'Terry', '1982-03-26', '31/54 Cartwright Turnpike Apt. 795, Poblacion, Baguio 0587 Bataan', NULL, NULL, NULL, '', NULL, NULL, 'Precision Aircraft Systems Assemblers', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:14', '2018-09-03 18:01:15'),
	(4, '18-0003', 'Nelle', 'Upton', 'Jacobi', '1974-12-25', '20A/40 Hill Roads Suite 842, Poblacion, Marawi 0881 Quirino', NULL, NULL, NULL, '', NULL, NULL, 'Machine Feeder', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:14', '2018-09-03 18:01:14'),
	(5, '18-0004', 'Okey', 'Yundt', 'Kunde', '1987-08-07', '32 Davis Highway, Poblacion, Vigan 2314 Laguna', NULL, NULL, NULL, '', NULL, NULL, 'Fitter', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:16', '2018-09-03 18:01:16'),
	(6, '18-0005', 'Alia', 'McKenzie', 'Mueller', '1983-07-25', '84A/86 Labadie Trail Suite 433, Santa Barbara 1892 Oriental Mindoro', NULL, NULL, NULL, '', NULL, NULL, 'Gas Appliance Repairer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:17', '2018-09-03 18:01:17'),
	(7, '18-0006', 'Cloyd', 'Bogisich', 'Reichel', '1986-11-29', '07A/89 Wyman Key Apt. 474, Poblacion, Palayan 9031 Nueva Vizcaya', NULL, NULL, NULL, '', NULL, NULL, 'Electrician', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:17', '2018-09-03 18:01:18'),
	(8, '18-0007', 'Jermaine', 'Franecki', 'Torp', '1985-04-04', '17A/84 Brekke Forge Apt. 886, Salug 3156 Apayao', NULL, NULL, NULL, '', NULL, NULL, 'Aircraft Launch Specialist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:18', '2018-09-03 18:01:19'),
	(9, '18-0008', 'Nelda', 'Frami', 'O\'Kon', '2009-03-18', '01A/77 Wisozk Springs, Pinamungahan 5575 Lanao del Norte', NULL, NULL, NULL, '', NULL, NULL, 'Commercial and Industrial Designer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:19', '2018-09-03 18:01:20'),
	(10, '18-0009', 'Sylvia', 'Goyette', 'Haag', '1977-03-08', '33/46 Barrows Pass, La Libertad 7874 Tarlac', NULL, NULL, NULL, '', NULL, NULL, 'Product Management Leader', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:20', '2018-09-03 18:01:21'),
	(11, '18-0010', 'Scot', 'Murphy', 'Kling', '2004-08-10', '20A/56 Fay Prairie Suite 571, Poblacion, Lapu-Lapu 6015 Occidental Mindoro', NULL, NULL, NULL, '', NULL, NULL, 'Stringed Instrument Repairer and Tuner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:21', '2018-09-03 18:01:22'),
	(12, '18-0011', 'Billie', 'Wilkinson', 'Yundt', '1983-03-28', '34 Gottlieb Spring, Poblacion, Mati 7895 Occidental Mindoro', NULL, NULL, NULL, '', NULL, NULL, 'Soldering Machine Setter', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:23', '2018-09-03 18:01:24'),
	(13, '18-0012', 'Rosalinda', 'Ruecker', 'D\'Amore', '1971-10-20', '64/67 Tromp Meadow, Poblacion, Legazpi 1192 Siquijor', NULL, NULL, NULL, '', NULL, NULL, 'Special Forces Officer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-03 18:01:22', '2018-09-03 18:01:23'),
	(14, '18-0013', 'Dagmar', 'Kuhlman', 'Grant', '2003-07-06', '93A/15 Marks Bridge, Poblacion, Cabadbaran 9340 Negros Oriental', NULL, NULL, NULL, '', NULL, NULL, 'Manicurists', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(15, '18-0014', 'Thea', 'Hand', 'Schowalter', '1981-09-10', '01A/29 Kirlin Court Apt. 243, Poblacion, Navotas 2253 Guimaras', NULL, NULL, NULL, '', NULL, NULL, 'Electrical and Electronics Drafter', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(16, '18-0015', 'Angel', 'Swift', 'Fritsch', '1971-10-27', '83A Sauer Cliffs, San Jose De Buan 4276 Misamis Oriental', NULL, NULL, NULL, '', NULL, NULL, 'Set and Exhibit Designer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(17, '18-0016', 'Lavon', 'Waters', 'Lebsack', '1995-06-08', '53A/31 Vandervort Keys, Peñaranda 4580 Nueva Vizcaya', NULL, NULL, NULL, '', NULL, NULL, 'Mathematician', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(18, '18-0017', 'Raegan', 'Heidenreich', 'Robel', '1996-05-16', '66A/07 Skiles Greens, Don Marcelino 9674 Quirino', NULL, NULL, NULL, '', NULL, NULL, 'Pipelaying Fitter', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(19, '18-0018', 'Fermin', 'Connelly', 'Medhurst', '1995-04-26', '31A Dickens Station, Poblacion, Victorias 5351 Palawan', NULL, NULL, NULL, '', NULL, NULL, 'Human Resources Manager', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(20, '18-0019', 'Dedric', 'Stiedemann', 'Sanford', '1990-04-01', '76A/16 Ward Mills Suite 158, Poblacion, Balanga 5820 Ilocos Sur', NULL, NULL, NULL, '', NULL, NULL, 'Diamond Worker', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(21, '18-0020', 'Drew', 'Grady', 'Lind', '2015-01-08', '58A/85 Orn Knolls Apt. 535, Guimba 9410 Apayao', NULL, NULL, NULL, '', NULL, NULL, 'Microbiologist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(22, '18-0021', 'Jadyn', 'Hickle', 'Kerluke', '2003-09-26', '65 Bode Port Suite 571, Poblacion, Iloilo City 0300 Northern Samar', NULL, NULL, NULL, '', NULL, NULL, 'Foundry Mold and Coremaker', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(23, '18-0022', 'Herminio', 'Haag', 'Bogan', '1981-04-05', '23 Effertz Coves, San Miguel 8764 Sorsogon', NULL, NULL, NULL, '', NULL, NULL, 'Preschool Education Administrators', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(24, '18-0023', 'August', 'Emard', 'Torphy', '1991-07-04', '86A Leannon Spur Suite 928, Poblacion, Tarlac City 6354 Sultan Kudarat', NULL, NULL, NULL, '', NULL, NULL, 'Space Sciences Teacher', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(25, '18-0024', 'Maud', 'Runte', 'Gerlach', '1977-01-08', '76/72 Runolfsdottir Plain Suite 149, Poblacion, San Jose del Monte 4902 Agusan del Sur', NULL, NULL, NULL, '', NULL, NULL, 'Insulation Worker', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(26, '18-0025', 'Wyman', 'Lebsack', 'Herman', '1998-10-19', '03 Bins Islands Suite 862, Poblacion, Lapu-Lapu 3625 Bulacan', NULL, NULL, NULL, '', NULL, NULL, 'Numerical Tool Programmer OR Process Control Programmer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(27, '18-0026', 'Johnnie', 'Daniel', 'Wilkinson', '1988-12-29', '10 DuBuque Key, Camiling 8429 South Cotabato', NULL, NULL, NULL, '', NULL, NULL, 'Public Relations Manager', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(28, '18-0027', 'Clare', 'Schinner', 'Hansen', '2017-07-01', '52 Heaney Meadows, Poblacion, Passi 7788 Davao del Sur', NULL, NULL, NULL, '', NULL, NULL, 'Electronic Engineering Technician', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(29, '18-0028', 'Francisco', 'Gusikowski', 'Frami', '2015-10-26', '14A/56 Considine Roads, Bauang 3620 Mountain Province', NULL, NULL, NULL, '', NULL, NULL, 'Medical Assistant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(30, '18-0029', 'Toby', 'Turcotte', 'Tremblay', '1987-10-23', '19A/81 Boyer Neck, Cabarroguis 9349 Sarangani', NULL, NULL, NULL, '', NULL, NULL, 'Clinical Psychologist', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(31, '18-0030', 'Xavier', 'Quigley', 'King', '2008-06-08', '34A O\'Connell Inlet, Sibutu 1624 Quirino', NULL, NULL, NULL, '', NULL, NULL, 'Personal Home Care Aide', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(32, '18-0031', 'Brianne', 'Ernser', 'Aufderhar', '1998-11-28', '40/40 Reynolds Drive Apt. 264, Silvino Lobos 2605 Cagayan', NULL, NULL, NULL, '', NULL, NULL, 'Construction Driller', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(33, '18-0032', 'Dayton', 'Schoen', 'Kulas', '1979-06-24', '77/92 Bernier Villages, Cagayancillo 0785 Davao Oriental', NULL, NULL, NULL, '', NULL, NULL, 'Record Clerk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(34, '18-0033', 'Corine', 'Bergnaum', 'Smith', '1980-03-03', '19/17 Mayer Key, Poblacion, Ormoc 1412 Zamboanga Sibugay', NULL, NULL, NULL, '', NULL, NULL, 'Industrial Machinery Mechanic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(35, '18-0034', 'Lacy', 'Hayes', 'Boyer', '1981-01-02', '78 Bednar Locks Suite 790, Poblacion, Vigan 3110 Palawan', NULL, NULL, NULL, '', NULL, NULL, 'Installation and Repair Technician', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(36, '18-0035', 'Daren', 'Jast', 'Braun', '1993-03-09', '11A Armstrong Gardens, Poblacion, Lamitan 6835 Batanes', NULL, NULL, NULL, '', NULL, NULL, 'Psychiatric Technician', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(37, '18-0036', 'Rhett', 'Brakus', 'Bernier', '2013-01-22', '93A/98 Fay Pass Apt. 839, Poblacion, Naga 8169 Lanao del Sur', NULL, NULL, NULL, '', NULL, NULL, 'Oil Service Unit Operator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(38, '18-0037', 'Lafayette', 'Leffler', 'Greenholt', '1980-04-16', '25A/21 Douglas Green, Poblacion, Tabaco 4431 Agusan del Norte', NULL, NULL, NULL, '', NULL, NULL, 'Solderer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(39, '18-0038', 'Lois', 'Conn', 'Pfannerstill', '1997-12-27', '87/44 Kertzmann Valley, Poblacion, Dumaguete 6399 Albay', NULL, NULL, NULL, '', NULL, NULL, 'Counselor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(40, '18-0039', 'Lexus', 'Senger', 'Kuhic', '1982-09-26', '46/16 Conn Run Suite 854, Poblacion, Masbate City 7969 Oriental Mindoro', NULL, NULL, NULL, '', NULL, NULL, 'Order Clerk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(41, '18-0040', 'Lillie', 'Turcotte', 'Kirlin', '2006-09-30', '36/76 Prohaska Crossing, Marihatag 8570 Negros Oriental', NULL, NULL, NULL, '', NULL, NULL, 'Geological Data Technician', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(42, '18-0041', 'Hattie', 'Jacobson', 'Boehm', '1980-03-30', '21 Tillman Orchard Suite 315, Poblacion, Mandaue 2016 Misamis Oriental', NULL, NULL, NULL, '', NULL, NULL, 'Electrical Engineering Technician', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(43, '18-0042', 'Tressie', 'Morissette', 'Becker', '1988-06-27', '55/90 Jast Field, Abuyog 0813 Eastern Samar', NULL, NULL, NULL, '', NULL, NULL, 'HR Manager', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(44, '18-0043', 'Antonette', 'Douglas', 'Kuhic', '2006-01-03', '65/23 Casper Trace, Poblacion, Silay 5833 Palawan', NULL, NULL, NULL, '', NULL, NULL, 'Manager of Air Crew', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(45, '18-0044', 'Salvador', 'Goyette', 'Harber', '1999-03-31', '79A Erdman Inlet Suite 378, Poblacion, Pasig 7169 Bukidnon', NULL, NULL, NULL, '', NULL, NULL, 'Avionics Technician', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(46, '18-0045', 'Meaghan', 'Waelchi', 'Trantow', '1976-01-25', '80A/31 Aufderhar Highway Suite 406, Poblacion, Cauayan 1827 Davao del Sur', NULL, NULL, NULL, '', NULL, NULL, 'Sheriff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(47, '18-0046', 'Therese', 'Erdman', 'Bergnaum', '2015-09-04', '77A Connelly Shoals, Poblacion, Biñan 8712 Zamboanga del Sur', NULL, NULL, NULL, '', NULL, NULL, 'Special Forces Officer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(48, '18-0047', 'Ollie', 'Wilkinson', 'Kemmer', '1975-09-19', '32 Purdy Street Suite 162, Poblacion, Legazpi 2957 La Union', NULL, NULL, NULL, '', NULL, NULL, 'Agricultural Technician', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(49, '18-0048', 'Edythe', 'Schuppe', 'Schowalter', '1975-10-15', '08 Ernser Cliff, Claveria 0410 Quirino', NULL, NULL, NULL, '', NULL, NULL, 'Actuary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL),
	(50, '18-0049', 'Fordes', 'Blick', 'Parker', '1972-07-12', '19A/98 Kessler Drive, Maribojoc 0486 Tarlac', '5\'8"', '120lbs', 'A+', '5316691', 'John Doe Smith', 'Rose Marie Smith', 'Full Stack Developer', 'Development', 'Junior', 'J1', 'Xavier University', 'Computer Science', '2015', 'UI Design, Coding, Javascript, PHP, Node.js', 'Basketball, Computer Games, Coding, Fishing', NULL, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.', NULL, '1', NULL, '2018-09-13 10:54:21'),
	(51, '18-0050', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2018-09-13 05:58:25', '2018-09-13 05:58:25');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table hris.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hris.migrations: 2 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(10, '2014_10_12_000000_create_users_table', 1),
	(11, '2014_10_12_100000_create_password_resets_table', 1);
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_emp_id_unique` (`emp_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hris.users: 0 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
