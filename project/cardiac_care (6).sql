-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2020 at 04:26 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cardiac_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_analysis`
--

CREATE TABLE IF NOT EXISTS `tbl_analysis` (
  `d_id` int(10) NOT NULL,
  `analysis` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_analysis`
--

INSERT INTO `tbl_analysis` (`d_id`, `analysis`, `date`) VALUES
(11, 'hjkkmnbb', '2019-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE IF NOT EXISTS `tbl_appointment` (
  `p_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`p_id`, `name`, `email`, `date`, `time`, `message`) VALUES
('123', 'limi', 'tincy@gmail.com', '2019-12-17', '11:02:00', 'to refer'),
('234', 'kiui', 'kripa@gmail.com', '2019-12-25', '23:03:00', 'titoti'),
('300', 'jesno', 'jesno@gmail.com', '2020-02-22', '18:07:00', 'consult at this time'),
('301', 'jossy', 'jossy@gmail.com', '2020-02-22', '04:04:00', 'please make an appointment'),
('456', 'susan', 'susan1@gmail.com', '2020-01-05', '16:05:00', 'to fsjclms.'),
('5672', 'ammu', 'ammu1@gmail.com', '2020-01-06', '20:08:00', 'want appoinmet'),
('700', 'luxx', 'luxx@gmail.com', '2020-01-17', '17:06:00', 'make an appointment'),
('901', 'smitha', 'smitha12@gmail.com', '2020-02-06', '16:56:00', 'Please consult me at this time '),
('902', 'limi m', 'limi@gmail.com', '2020-02-07', '15:05:00', 'to be consult at this time for cadiac department'),
('903', 'raja', 'raja123@gmail.com', '2020-02-07', '15:03:00', 'to be consult at this time'),
('904', 'rajasree', 'rajasree@gmail.com', '2020-02-07', '16:04:00', 'to be consultted ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE IF NOT EXISTS `tbl_doctor` (
  `d_id` int(15) NOT NULL,
  `d_name` text NOT NULL,
  `h_id` varchar(15) NOT NULL,
  `dept` text NOT NULL,
  `specialization` text NOT NULL,
  `year_of_exp` int(10) NOT NULL,
  `l_no` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`d_id`, `d_name`, `h_id`, `dept`, `specialization`, `year_of_exp`, `l_no`, `email`, `phone`, `username`, `password`) VALUES
(4, 'arun', 'h1234', 'cardiac', 'cardiac', 6, 1344478, 'arunbabu01@2gmail.co', 8787665650, 'limi123', 'hjjkj'),
(6, 'sid', '', '', '', 0, 0, '', 0, '', ''),
(8, 'limi', 'h1238', 'cardiac', 'cardiac', 7, 56878899, 'sidhi11@gmail.com', 8787665650, 'arun', 'ghjj'),
(11, 'arun', 'h12345', 'cardiac', 'cardiac', 7, 689, 'arunbabu01@2gmail.co', 8787665650, 'arun', '12'),
(12, 'sidhi', '6789h', 'cardiac', 'cardiac', 8, 13444, 'arunbabu01@2gmail.co', 8787665650, 'limi123', 'll'),
(13, 'sajeev', '101', 'v', 'jkn', 14, 12, 'sidhi11@gmail.com', 9876543456, 'saj', '123'),
(14, 'Harikumar', 'H_2001', 'Cardiac', 'MBBS', 5, 20122001, 'Harikumar@gmail.com', 8976665678, 'Harikumar@gmail.com', 'harikumar'),
(15, 'Arathy v', 'H_2002', 'cardiac', 'MD', 5, 20102002, 'arathy21@gmail.com', 9034563223, 'arathy21@gmail.com', '12345'),
(16, 'redhya', 'h123456', 'cardiac', 'MBBS', 8, 1234567, 'bency@gmail.com', 8787665650, 'redhya', 'redhya'),
(17, 'hgny', 'H1234567', 'cardiology', 'MD', 4, 0, 'kripa@gmail.com', 919042355999, 'Love ', 'urhklskvki'),
(18, 'hgnyujn', 'H1234567', 'cardiology', 'MD', 4, 0, 'kripa@gmail.com', 919042355999, 'Love ', 'jkuydgh'),
(19, 'philip', 'kollam', 'cardiology', 'MBBS', 3, 0, 'kripa@gmail.com', 917867567889, 'Love ', 'philip@1Philip'),
(20, 'Alexander', '123465', 'cardiac', 'MD', 3, 786950, 'alex@gmail.com', 913456780875, 'alex@gmail.com', 'A4alex@1'),
(21, 'John Thomas', '1989', 'Cardiac', 'MBBS', 2, 201709, 'john12@gmail.com', 917889564636, 'john12@gmail.com', 'J4john@1'),
(22, 'Nikhil Raj', '1978', 'Cardiac', 'MBBS', 3, 201706, 'nikki@gmail.com', 918976545678, 'nikki@gmail.com', 'N4nikki/21'),
(23, 'Dr Bency Philip', '199801', 'Cardiology', 'MBBS', 2, 908765, 'bencyphilip20@gmail.', 9, 'bencyphilip20@gmail.', 'B4bency@1'),
(24, 'Dr limi', '34567', 'neuro', 'mbbs', 3, 123456, 'limi123@gmail.com', 917889676755, 'Dr limi', 'L4limi@1'),
(25, 'Dr kripa', '123456', 'cardiac', 'MBBS', 3, 546565, 'kripa123@gmail.com', 917856345678, 'kripababu', 'K4kripa@1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dtest`
--

CREATE TABLE IF NOT EXISTS `tbl_dtest` (
  `p_id` int(20) NOT NULL,
  `dname` text NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `angina` varchar(10) NOT NULL,
  `sugar` varchar(10) NOT NULL,
  `restecg` varchar(10) NOT NULL,
  `slope` varchar(10) NOT NULL,
  `ca` varchar(10) NOT NULL,
  `thal` varchar(10) NOT NULL,
  `bp` varchar(10) NOT NULL,
  `cholestrol` varchar(10) NOT NULL,
  `thalach` varchar(10) NOT NULL,
  `oldpeak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dtest`
--

INSERT INTO `tbl_dtest` (`p_id`, `dname`, `age`, `gender`, `angina`, `sugar`, `restecg`, `slope`, `ca`, `thal`, `bp`, `cholestrol`, `thalach`, `oldpeak`) VALUES
(123, 'anoop', 34, 'female', '1', '1', '1', '0', '0', '0', '1', '1', '0', '1'),
(345, 'rakesh', 22, 'female', '1', '0', '1', '0', '1', '0', '1', '0', '1', '0'),
(456, 'dr shibu', 34, 'male', '1', '0', '1', '1', '0', '1', '0', '0', '0', '0'),
(123, 'redhya', 22, 'male', '1', '0', '1', '0', '1', '0', '1', '0', '1', '0'),
(345, 'philip', 67, 'male', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(123, 'susan', 30, 'female', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(901, 'dr bency', 35, 'female', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(123, 'Dr rajasree', 38, 'female', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(300, 'dr limi', 24, 'male', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `pid` int(10) NOT NULL,
  `date` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`pid`, `date`, `time`, `feedback`) VALUES
(790, 2020, 17, 'i am so happy to use this system because this site predict an accurate result .'),
(15, 2020, 5, 'i think its good and predict well'),
(17, 2020, 16, 'personally i am happy to use this site..thank you');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_graph`
--

CREATE TABLE IF NOT EXISTS `tbl_graph` (
  `gid` int(5) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `location` varchar(15) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_graph`
--

INSERT INTO `tbl_graph` (`gid`, `age`, `gender`, `location`) VALUES
(1, 50, 'male', 'kollam'),
(2, 50, 'female', 'kollam'),
(3, 60, 'male', 'kollam'),
(4, 60, 'male', 'kottarakara');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `type`, `status`) VALUES
('arun11', 'arun', 'doctor', '1'),
('limi123', 'limi', 'doctor', '1'),
('Harikumar@gmail.com', 'harikumar', 'doctor', '1'),
('arathy21@gmail.com', '12345', 'doctor', '0'),
('bency', 'bency', 'lab', '1'),
('swapna@gmail.com', 'swapna', 'user', '1'),
('redhya', 'redhya', 'doctor', '1'),
('kollam@gmail.com', 'K4kollam@1', 'lab', '0'),
('ktr123@gmail.com', 'K4ktr@123', 'lab', '0'),
('alex@gmail.com', 'A4alex@1', 'doctor', '0'),
('john12@gmail.com', 'J4john@1', 'doctor', '0'),
('nikki@gmail.com', 'N4nikki/21', 'doctor', '1'),
('kripababu', 'K4kkripa@1', 'user', '1'),
('bencyphilip20@gmail.', 'B4bency@1', 'doctor', '1'),
('Dr limi', 'L4limi@1', 'doctor', '0'),
('amala', 'A4amal@1', 'user', '1'),
('kripababu', 'K4kripa@1', 'doctor', '1'),
('Dr Bency', 'bency123456', 'doctor', '1'),
('admin', 'admin', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lreg`
--

CREATE TABLE IF NOT EXISTS `tbl_lreg` (
  `l_id` int(15) NOT NULL,
  `location` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lreg`
--

INSERT INTO `tbl_lreg` (`l_id`, `location`, `email`, `phone`, `username`, `password`) VALUES
(2, 'kollam', 's@gmail.com', 9878765654, 'arun', 'arun'),
(4, 'kollam', 's@gmail.com', 9878765654, 'kripa', 'i'),
(5, 'kundara', 's@gmail.com', 9878765654, 'bency', 'bency'),
(6, 'kollam', 'kollam@gmail.com', 9497677845, 'kollam@gmail.com', 'K4kollam@1'),
(7, 'kottarkara', 'ktr123@gmail.com', 8976459012, 'ktr123@gmail.com', 'K4ktr@123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE IF NOT EXISTS `tbl_result` (
  `pid` int(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `angina` varchar(10) DEFAULT NULL,
  `sugar` varchar(10) DEFAULT NULL,
  `restecg` varchar(10) DEFAULT NULL,
  `slope` varchar(10) DEFAULT NULL,
  `ca` varchar(10) DEFAULT NULL,
  `thal` varchar(10) DEFAULT NULL,
  `bp` varchar(10) DEFAULT NULL,
  `cholestrol` varchar(10) DEFAULT NULL,
  `thalach` varchar(10) DEFAULT NULL,
  `oldpeak` varchar(10) DEFAULT NULL,
  `string` varchar(200) NOT NULL,
  `prediction` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_result`
--

INSERT INTO `tbl_result` (`pid`, `age`, `gender`, `angina`, `sugar`, `restecg`, `slope`, `ca`, `thal`, `bp`, `cholestrol`, `thalach`, `oldpeak`, `string`, `prediction`) VALUES
(456, 24, 'female', '600', '200', '300', '200', '500', '500', '300', '256', '45', '345', 'low_chancelow_chancehigh_anginanormal_sugarhigh_restecgnormal_slopehigh_cahigh_thalhigh_bpnormal_cholestrollow_thalachhigh_oldpeak', 'Congestive Heart Failure'),
(123, 24, 'female', '455', '66', '88', '77', '44', '33', '56', '78', '77', '99', 'low_chancelow_chancehigh_anginalow_sugarlow_restecglow_slopelow_calow_thallow_bplow_cholestrollow_thalachlow_oldpeak', 'Congestive Heart Failure'),
(123, 35, 'female', '0', '1', '1', '1', '0', '1', '1', '1', '1', '1', 'high_chancelow_chancehigh_anginalow_sugarlow_restecghigh_slopelow_calow_thallow_bplow_cholestrollow_thalachlow_oldpeak', 'Congestive Heart Failure'),
(901, 35, 'female', '386', '134', '564', '421', '313', '134', '123', '234', '334', '134', 'high_chancelow_chancehigh_anginanormal_sugarhigh_restecghigh_slopehigh_canormal_thalnormal_bpnormal_cholestrolhigh_thalachnormal_oldpeak', 'Congestive Heart Failure'),
(123, 38, 'female', '500', '342', '300', '100', '345', '200', '190', '400', '200', '390', 'high_chancelow_chancehigh_anginahigh_sugarhigh_restecgnormal_slopehigh_canormal_thalnormal_bphigh_cholestrolnormal_thalachhigh_oldpeak', 'Congestive Heart Failure'),
(300, 24, 'male', '150', '190', '180', '215', '110', '160', '178', '210', '290', '100', 'low_chancehigh_chancenormal_anginanormal_sugarnormal_restecgnormal_slopenormal_canormal_thalnormal_bpnormal_cholestrolnormal_thalachnormal_oldpeak', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tip`
--

CREATE TABLE IF NOT EXISTS `tbl_tip` (
  `dname` varchar(15) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `treatment` varchar(2000) NOT NULL,
  `medication` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tip`
--

INSERT INTO `tbl_tip` (`dname`, `disease`, `treatment`, `medication`) VALUES
('philip', 'stroke', 'Carotid Endarterectomy', 'clotbusters (must be administered within 3 hours from onset of stroke symptoms for certain types of strokes'),
('susan', 'coronary heart disease', 'Aspirin is one of the cornerstones of coronary artery disease treatment. It prevents platelets from clumping together when blood becomes turbulent, like when it flows past a narrowing in an artery.', 'Beta blockers like carvedilol (Coreg)'),
('tincy', 'cardiac dysrhythmia', 'Treatments may include physical maneuvers, medications, electricity conversion, or electro or cryo cautery.', 'aspirin'),
('kripa', 'Cor pulmonale', 'treated with anticoagulants.', 'may include medication (conservative treatment) or iatrogenic/implanted pacemakers for slow heart rates, heart transplant for the severe case.'),
('bency', 'heart failure', 'Coronary Angioplasty Coronary Artery Bypass Graft Surgery', 'clotbusters (should be administered as soon as possible for certain types of heart failure)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usereg`
--

CREATE TABLE IF NOT EXISTS `tbl_usereg` (
  `p_id` int(15) NOT NULL,
  `p_name` text NOT NULL,
  `sex` text NOT NULL,
  `age` int(10) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usereg`
--

INSERT INTO `tbl_usereg` (`p_id`, `p_name`, `sex`, `age`, `phone`, `username`, `password`) VALUES
(1, 'hari', 'male', 22, 9898777811, 'hri', '1'),
(2, 'kripa', 'gg', 7, 7890000000, 'limi', '1'),
(3, 'kripa', 'female', 22, 231212121212, 'kripa', '1234567'),
(4, 'swapna', 'female', 11, 919876543212, 'swapna@gmail.com', 'swapna'),
(6, '', '', 0, 0, 'ammu@gmail.com', ''),
(7, 'Ammu', 'Male', 24, 9178654545, 'ammu@gmail.com', ''),
(8, 'efC', 'Male', 26, 917690302391, 'anandhu@gmail.com', 'fghzksl@1WE'),
(9, 'kripa babu', 'female', 22, 917865476789, 'kripababu', 'K4kkripa@1'),
(10, 'amala', 'female', 23, 919876544567, 'amala', 'A4amal@1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
