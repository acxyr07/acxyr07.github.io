-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 12, 2021 at 07:23 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatms`
--

DROP TABLE IF EXISTS `chatms`;
CREATE TABLE IF NOT EXISTS `chatms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quest` varchar(250) NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chatms`
--

INSERT INTO `chatms` (`id`, `quest`, `answer`) VALUES
(1, 'COVID-19 symptoms', 'mild or severe?'),
(2, 'mild', 'fever,\r\ncough,\r\nfatigue,\r\nshortness of breath,\r\nloss of smell or taste,\r\nbody aches and pains,\r\nheadache,\r\nsore throat,\r\nrunny or stuffy nose,\r\ndigestive symptoms, including nausea, vomiting, or diarrhea'),
(3, 'severe', 'Difficulty waking up or staying awake\r\nTrouble breathing,\r\nPain or pressure in the chest that won’t go away,\r\nConfusion,\r\nA sharp, deep, constant pain in your calf muscle,\r\nPaler skin (in white people),\r\nColor changes in your lips or nail beds,\r\nA pulse oximeter reading below 95 percent (This is a device that measures the oxygen levels in your blood)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

DROP TABLE IF EXISTS `tbl_about`;
CREATE TABLE IF NOT EXISTS `tbl_about` (
  `about_id` int NOT NULL AUTO_INCREMENT,
  `About` varchar(200) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `About`) VALUES
(1, '															Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco la');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_administrator`
--

DROP TABLE IF EXISTS `tbl_administrator`;
CREATE TABLE IF NOT EXISTS `tbl_administrator` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `adminFname` varchar(80) NOT NULL,
  `adminMname` varchar(80) NOT NULL,
  `adminLname` varchar(80) NOT NULL,
  `adminPhone` varchar(11) NOT NULL,
  `adminEmail` varchar(80) NOT NULL,
  `adminAddress` varchar(80) NOT NULL,
  `adminUsername` varchar(80) NOT NULL,
  `adminPassword` varchar(80) NOT NULL,
  `adminPhoto` varchar(150) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_administrator`
--

INSERT INTO `tbl_administrator` (`admin_id`, `adminFname`, `adminMname`, `adminLname`, `adminPhone`, `adminEmail`, `adminAddress`, `adminUsername`, `adminPassword`, `adminPhoto`) VALUES
(2, 'I Am', 'The', 'Pinaka Poging Admin', '12345678901', 'acxyrflores@gmail.com', 'qweqw', 'admin', 'admin', 'nurse admin.jpg'),
(4, 'Pika', 'P', 'Pikachu', '1235644411', 'depp@gmail.com', 'U.S', 'pika', 'pika', 'pika.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_contents`
--

DROP TABLE IF EXISTS `tbl_contact_contents`;
CREATE TABLE IF NOT EXISTS `tbl_contact_contents` (
  `cc_id` int NOT NULL AUTO_INCREMENT,
  `cc_town` varchar(100) NOT NULL,
  `cc_location` varchar(100) NOT NULL,
  `cc_phone` varchar(100) NOT NULL,
  `cc_hours` varchar(100) NOT NULL,
  `cc_email` varchar(100) NOT NULL,
  `cc_description` varchar(100) NOT NULL,
  PRIMARY KEY (`cc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_contact_contents`
--

INSERT INTO `tbl_contact_contents` (`cc_id`, `cc_town`, `cc_location`, `cc_phone`, `cc_hours`, `cc_email`, `cc_description`) VALUES
(1, 'San Pablo City', 'Laguna', '12345678901', '10:00am to 6:00pm', 'healthcare123@gmail.com', 'Contact me in this email');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

DROP TABLE IF EXISTS `tbl_doctor`;
CREATE TABLE IF NOT EXISTS `tbl_doctor` (
  `doctor_id` int NOT NULL AUTO_INCREMENT,
  `d_firstname` varchar(80) NOT NULL,
  `d_midname` varchar(80) NOT NULL,
  `d_lastname` varchar(80) NOT NULL,
  `d_gender` varchar(100) NOT NULL,
  `d_bdate` date NOT NULL,
  `d_phone` varchar(11) NOT NULL,
  `d_email` varchar(80) NOT NULL,
  `d_address` varchar(80) NOT NULL,
  `d_username` varchar(80) NOT NULL,
  `d_password` varchar(80) NOT NULL,
  `d_photo` varchar(100) NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`doctor_id`, `d_firstname`, `d_midname`, `d_lastname`, `d_gender`, `d_bdate`, `d_phone`, `d_email`, `d_address`, `d_username`, `d_password`, `d_photo`) VALUES
(16, 'Jessica', 'Butao', 'Flores', 'Female', '1993-12-21', '09561924467', 'acxyrflores@gmail.com', 'TS Cruz Subdivision Almanza Dos,  Las Pinas City.', 'doctor', 'doctor', 'jinnie.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor_about`
--

DROP TABLE IF EXISTS `tbl_doctor_about`;
CREATE TABLE IF NOT EXISTS `tbl_doctor_about` (
  `id` int NOT NULL AUTO_INCREMENT,
  `About_me` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Specialty` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Qualification` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Clinic_address` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Contact_no` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_as_ci;

--
-- Dumping data for table `tbl_doctor_about`
--

INSERT INTO `tbl_doctor_about` (`id`, `About_me`, `Specialty`, `Qualification`, `Clinic_address`, `Contact_no`) VALUES
(13, 'qwqwqeqeqwe', 'qweqweqwqw', 'qweqwqeweqwew', 'qweqwqweqe', '12345678901');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor_schedule`
--

DROP TABLE IF EXISTS `tbl_doctor_schedule`;
CREATE TABLE IF NOT EXISTS `tbl_doctor_schedule` (
  `schedule_id` int NOT NULL AUTO_INCREMENT,
  `Sunday` varchar(40) NOT NULL,
  `Monday` varchar(40) NOT NULL,
  `Tuesday` varchar(40) NOT NULL,
  `Wednesday` varchar(40) NOT NULL,
  `Thursday` varchar(40) NOT NULL,
  `Friday` varchar(40) NOT NULL,
  `Saturday` varchar(40) NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_doctor_schedule`
--

INSERT INTO `tbl_doctor_schedule` (`schedule_id`, `Sunday`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(8, '9:00am - 11:00am', '9:00am - 1:00pm', '9:00am - 12:00pm', '9:00am - 1:00pm', '9:00am - 1:00pm', '9:00am - 1:00pm', 'No Schedule for this day');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_healthcare_content`
--

DROP TABLE IF EXISTS `tbl_healthcare_content`;
CREATE TABLE IF NOT EXISTS `tbl_healthcare_content` (
  `hc_id` int NOT NULL AUTO_INCREMENT,
  `hc_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`hc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_healthcare_content`
--

INSERT INTO `tbl_healthcare_content` (`hc_id`, `hc_photo`) VALUES
(1, 'banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_messages`
--

DROP TABLE IF EXISTS `tbl_messages`;
CREATE TABLE IF NOT EXISTS `tbl_messages` (
  `message_id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(220) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

DROP TABLE IF EXISTS `tbl_patient`;
CREATE TABLE IF NOT EXISTS `tbl_patient` (
  `patient_id` int NOT NULL AUTO_INCREMENT,
  `p_firstname` varchar(80) NOT NULL,
  `p_midname` varchar(80) NOT NULL,
  `p_lastname` varchar(80) NOT NULL,
  `p_gender` varchar(80) NOT NULL,
  `p_birthdate` date NOT NULL,
  `p_email` varchar(80) NOT NULL,
  `p_phone` varchar(11) NOT NULL,
  `p_address` varchar(80) NOT NULL,
  `p_username` varchar(80) NOT NULL,
  `p_password` varchar(80) NOT NULL,
  `p_profile` varchar(40) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`patient_id`, `p_firstname`, `p_midname`, `p_lastname`, `p_gender`, `p_birthdate`, `p_email`, `p_phone`, `p_address`, `p_username`, `p_password`, `p_profile`) VALUES
(1, 'Acxyr Pogi', 'zulueta', 'flores', 'Male', '1997-10-15', 'acxyrflores@gmail.com', '09512345678', 'Barangay San Nicolas', 'acxyr05', 'acxlekent05', 'acxyr.jpg'),
(10, 'Popol', '', 'Kuppa', 'Male', '1991-12-31', '123123123@gmail.com', '1231231212', 'qweqweeqwe', 'popol', 'kuppa', 'popl.jpg'),
(11, 'Jessica', 'Serevillas', 'Butao', 'Female', '1993-12-21', 'jessicabutao@gmail.com', '09511234561', 'TS Cruz Subdivision, Las Pinas city', 'jecai', 'jecai', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient_medical_history`
--

DROP TABLE IF EXISTS `tbl_patient_medical_history`;
CREATE TABLE IF NOT EXISTS `tbl_patient_medical_history` (
  `mh_id` int NOT NULL AUTO_INCREMENT,
  `patient_id` int NOT NULL,
  `Height` varchar(10) NOT NULL,
  `Weight` varchar(10) NOT NULL,
  `Blood_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Drug_allergies` varchar(150) NOT NULL,
  `Any_illness` varchar(150) NOT NULL,
  `Other_illness` varchar(150) NOT NULL,
  `Past_operations` varchar(150) NOT NULL,
  `Current_medication` varchar(150) NOT NULL,
  `Exercise` varchar(50) NOT NULL,
  `Dietplan` varchar(50) NOT NULL,
  `Alcoholc` varchar(50) NOT NULL,
  `CaffeineC` varchar(50) NOT NULL,
  `SmokeC` varchar(50) NOT NULL,
  `Cmdh` varchar(150) NOT NULL,
  `Ic_name` varchar(80) NOT NULL,
  `Ic_phone` varchar(11) NOT NULL,
  `Ic_Address` varchar(80) NOT NULL,
  `Ic_Email` varchar(80) NOT NULL,
  `lc_date` date NOT NULL,
  PRIMARY KEY (`mh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_patient_medical_history`
--

INSERT INTO `tbl_patient_medical_history` (`mh_id`, `patient_id`, `Height`, `Weight`, `Blood_type`, `Drug_allergies`, `Any_illness`, `Other_illness`, `Past_operations`, `Current_medication`, `Exercise`, `Dietplan`, `Alcoholc`, `CaffeineC`, `SmokeC`, `Cmdh`, `Ic_name`, `Ic_phone`, `Ic_Address`, `Ic_Email`, `lc_date`) VALUES
(9, 1, '188', '77', 'AB', 'Sample: rashes (Paracetukmol)\r\n                  ', 'Difficulty breathing or wheezing / Pinagkakahirapan sa paghinga o paghinga', 'qewe123', 'qweqwe      ', 'qweqwe ', '1 - 2 days', 'I have a loose diet', '3 - 4 glass a day', '1 - 2 cups a day', '5 + stick a day', 'qweqweqwe', 'Acxyr', '1231212123', 'qweqweeqwe', 'acxyrflores@gmail.com', '0000-00-00'),
(10, 10, '145', '60', 'AB', 'Antibiotics', 'Stuffy nose / Baradong ilong', 'Nagdudugo po ang pwet ko', 'almoranas', 'rehab', '1 - 2 days', 'I dont have any diet plan', '5 + glass a day', '5 + cups a day', 'more than one pack per day', '                      \r\n                    ', 'Juana Dela Cruza', '09121212567', 'taga bukidnon po ako', 'garuda@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pending_appointments`
--

DROP TABLE IF EXISTS `tbl_pending_appointments`;
CREATE TABLE IF NOT EXISTS `tbl_pending_appointments` (
  `pending_app_id` int NOT NULL AUTO_INCREMENT,
  `patient_id` int NOT NULL,
  `doctor_id` int NOT NULL,
  `patient_fullname` varchar(100) NOT NULL,
  `p_gender` varchar(100) NOT NULL,
  `p_birthdate` date NOT NULL,
  `p_phone` text NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `Schedule` varchar(100) NOT NULL,
  `Schedule_Date` date NOT NULL,
  `Height` varchar(11) NOT NULL,
  `Weight` varchar(11) NOT NULL,
  `Blood_type` varchar(40) NOT NULL,
  `Drug_allergies` varchar(150) NOT NULL,
  `Any_illness` varchar(150) NOT NULL,
  `Other_illness` varchar(150) NOT NULL,
  `Past_operations` varchar(150) NOT NULL,
  `Current_medication` varchar(150) NOT NULL,
  `Exercise` varchar(150) NOT NULL,
  `Dietplan` varchar(50) NOT NULL,
  `Alcoholc` varchar(50) NOT NULL,
  `CaffeineC` varchar(50) NOT NULL,
  `SmokeC` varchar(50) NOT NULL,
  `Cmdh` varchar(150) NOT NULL,
  `Ic_name` varchar(150) NOT NULL,
  `Ic_phone` varchar(150) NOT NULL,
  `Ic_Address` varchar(150) NOT NULL,
  `Ic_Email` varchar(150) NOT NULL,
  `lc_date` date NOT NULL,
  PRIMARY KEY (`pending_app_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_pending_appointments`
--

INSERT INTO `tbl_pending_appointments` (`pending_app_id`, `patient_id`, `doctor_id`, `patient_fullname`, `p_gender`, `p_birthdate`, `p_phone`, `p_email`, `Schedule`, `Schedule_Date`, `Height`, `Weight`, `Blood_type`, `Drug_allergies`, `Any_illness`, `Other_illness`, `Past_operations`, `Current_medication`, `Exercise`, `Dietplan`, `Alcoholc`, `CaffeineC`, `SmokeC`, `Cmdh`, `Ic_name`, `Ic_phone`, `Ic_Address`, `Ic_Email`, `lc_date`) VALUES
(27, 1, 16, 'Acxyr Patient Flores', 'Male', '1997-10-15', '12312313', 'weqeq@gmoal.com', 'Tuesday 9:00am - 12:00pm', '2021-09-28', '188', '77', 'AB', 'Sample: rashes (Paracetukmol)                  ', 'Difficulty breathing or wheezing / Pinagkakahirapan sa paghinga o paghinga', 'qewe123', 'qweqwe      ', 'qweqwe ', '1 - 2 days', 'I have a loose diet', '3 - 4 glass a day', '1 - 2 cups a day', '5 + stick a day', 'qweqweqwe', 'Acxyr', '1231212123', 'qweqweeqwe', 'acxyrflores@gmail.com', '0000-00-00'),
(29, 10, 16, 'Popol  Kuppa', 'Male', '1991-12-31', '09561286654', 'popol@gmail.com', 'Wednesday 9:00am - 1:00pm', '2021-10-20', '145', '60', 'AB', 'Antibiotics', 'Stuffy nose / Baradong ilong', 'Nagdudugo po ang pwet ko', 'almoranas', 'rehab', '1 - 2 days', 'I dont have any diet plan', '5 + glass a day', '5 + cups a day', 'more than one pack per day', '                                          ', 'Juana Dela Cruza', '09121212567', 'taga bukidnon po ako', 'garuda@gmail.com', '0000-00-00'),
(30, 10, 16, 'Popol  Kuppa2', 'Male', '1991-12-31', '1231231212', '123123123@gmail.com', 'Tuesday 9:00am - 12:00pm', '2021-10-12', '145', '60', 'AB', 'Antibiotics', 'Stuffy nose / Baradong ilong', 'Nagdudugo po ang pwet ko', 'almoranas', 'rehab', '1 - 2 days', 'I dont have any diet plan', '5 + glass a day', '5 + cups a day', 'more than one pack per day', '                                          ', 'Juana Dela Cruza', '09121212567', 'taga bukidnon po ako', 'garuda@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_responded_appointments`
--

DROP TABLE IF EXISTS `tbl_responded_appointments`;
CREATE TABLE IF NOT EXISTS `tbl_responded_appointments` (
  `rpa_id` int NOT NULL AUTO_INCREMENT,
  `doctor_id` int NOT NULL,
  `doctor_fullname` varchar(100) NOT NULL,
  `doctor_gender` varchar(100) NOT NULL,
  `patient_id` int NOT NULL,
  `patient_fullname` varchar(100) NOT NULL,
  `patient_gender` varchar(100) NOT NULL,
  `schedule` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `respond_type` varchar(100) NOT NULL,
  `recommended_doctor` varchar(200) NOT NULL,
  `recommended_clinic` varchar(250) NOT NULL,
  `comments` varchar(250) NOT NULL,
  PRIMARY KEY (`rpa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_responded_appointments`
--

INSERT INTO `tbl_responded_appointments` (`rpa_id`, `doctor_id`, `doctor_fullname`, `doctor_gender`, `patient_id`, `patient_fullname`, `patient_gender`, `schedule`, `respond_type`, `recommended_doctor`, `recommended_clinic`, `comments`) VALUES
(57, 16, 'Jessica butao flores', 'Female', 1, 'Acxyr Patient Flores', 'Male', 'Tuesday 9:00am - 12:00pm, 2021-09-28', 'Select type', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_terms_and_conditions`
--

DROP TABLE IF EXISTS `tbl_terms_and_conditions`;
CREATE TABLE IF NOT EXISTS `tbl_terms_and_conditions` (
  `tac_id` int NOT NULL AUTO_INCREMENT,
  `tac_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`tac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_terms_and_conditions`
--

INSERT INTO `tbl_terms_and_conditions` (`tac_id`, `tac_message`) VALUES
(1, 'The information on this Site has been included in good faith for general informational purposes only. The information should not be relied upon for any specific purpose and no representation or warranty is given as to its accuracy or completeness.'),
(2, 'Any opinions (express or implied) are those of the individual authors and not necessarily those of partner organizations.'),
(3, 'You agree that the information you provide us with when you use the Site will be true and complete and that you will keep it true and complete.'),
(4, 'This website may change the Terms set out above from time to time. By browsing this Website. you are accepting that you are bound by the current Terms and we urge you to check these each time you revisit the Website.'),
(5, 'By visiting this WebSite, you agree to permit Doctors to communicate with you, about your healthcare.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vaccine`
--

DROP TABLE IF EXISTS `tbl_vaccine`;
CREATE TABLE IF NOT EXISTS `tbl_vaccine` (
  `vaccine_id` int NOT NULL AUTO_INCREMENT,
  `patient_id` int NOT NULL,
  `vaccine_photo` varchar(100) NOT NULL,
  PRIMARY KEY (`vaccine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
