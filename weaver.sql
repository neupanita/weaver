-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2013 at 09:04 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `weaver`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `author_id` int(5) NOT NULL,
  `author` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author`, `address`, `phone`, `email`) VALUES
(1, 'William Newton', 'Perkin''s street', '402', 'william@ymail.com'),
(2, 'Elizabeth Gillbert', 'Waters''NewYork', '402', 'elizabeth@yahoo.com'),
(3, 'V.K. Vedamurthi', 'Kanpur', '123', 'vk@hotmail.com'),
(4, 'Jay L Devore', 'Thamel', '9885643638', 'jaydev@hotmail.com'),
(5, 'Bali and Bali', 'sanepa', '9813412040', 'balibali@gmail.com'),
(6, 'Darrien', 'Parkers Road', '203', 'Darrien@gmail.com'),
(7, 'Paulo Choelo', 'Amazon street', '9849223566', 'paulo@hotmail.com'),
(9, 'James Macbeth', 'Virginia', '406', 'macbeth@gmail.com'),
(10, 'W.H.Suvelline', 'Dallas', '402', 'wh@ymail.com'),
(12, 'A.K Chakrawarti', 'banglore', '2003', 'ak@hotmail.com'),
(13, 'Narayan wagle', 'Pokhara', '5564890', 'narayan@yahoo.com'),
(14, 'bhudisagar', 'Puithan', '9841378921', 'bhudisagar@gmail.com'),
(15, 'Bishal Gyawali', 'naikap', '9841378921', 'Bishal@yahoo.com'),
(16, 'Dr.V.K Goyal', 'Hariyana', '209', 'vk@gmail.com'),
(17, 'Laxmi Prasad Devkota', 'kathmandu', '0', ''),
(18, 'Subarna Shakya', 'Thamel', '5564890', 'Sub@yahoo.com'),
(19, 'H.W Hathway', 'waters,Newyork', '203', 'hw@yahoo.com'),
(20, 'G.S Hallmaark', 'kew Gardens', '302', 'gs@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `book review`
--

CREATE TABLE IF NOT EXISTS `book review` (
  `ISBN` varchar(20) NOT NULL,
  `Reviews` text NOT NULL,
  `Review date` date NOT NULL,
  `username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book review`
--

INSERT INTO `book review` (`ISBN`, `Reviews`, `Review date`, `username`) VALUES
('987-0-670-2345-2', 'it is awesome.', '2013-03-11', 'samita');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `ISBN` varchar(20) NOT NULL,
  `Bookname` varchar(100) NOT NULL,
  `Publication` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `Quantity` decimal(10,0) NOT NULL,
  `Price` float NOT NULL,
  `photo` text NOT NULL,
  `author_id` decimal(5,0) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ISBN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN`, `Bookname`, `Publication`, `category`, `Quantity`, `Price`, `photo`, `author_id`, `date`) VALUES
('987-0-670-2345-1', '50 Shades of Greys', 'ABC Pvt. Limited', 'Novel', '44', 600, 'images/50_shades_of_greys.jpg', '1', '2013-03-01'),
('987-0-670-2345-10', 'Human Resourse Management', 'SRL International', 'Management', '58', 430, 'images/human_resourse_management.jpg', '10', '2013-03-01'),
('987-0-670-2345-11', 'karnali blues', 'fineprint', 'Nepali Novel', '32', 350, 'images/karnali_blues.JPG', '14', '2013-03-06'),
('987-0-670-2345-12', 'Change Management', 'Global', 'Management', '24', 540, 'images/images(1).jpg', '9', '2013-03-01'),
('987-0-670-2345-13', 'Electrical Engineering', 'QRT pvt.limited', 'Engineering', '54', 490, 'images/images(5).jpg', '12', '2013-03-01'),
('987-0-670-2345-14', 'times', 'Smikasha publication', 'Magazine', '62', 450, 'images/time.jpg', '15', '2013-03-06'),
('987-0-670-2345-17', 'pagal basti', 'abc', 'Nepali Novel', '23', 344, 'images/pagal_basti.JPG', '17', '2013-03-06'),
('987-0-670-2345-18', 'Detail', 'Ekta', 'Magazine', '12', 230, 'images/detail.JPG', '18', '2013-03-11'),
('987-0-670-2345-19', 'Medicine&Spec', 'J.K roadway', 'Medical', '12', 2000, 'images/Medicine&Spec.jpg', '19', '2013-03-11'),
('987-0-670-2345-2', 'Eat, Pray and Love', 'SRL International', 'Novel', '78', 700, 'images/220px-Eat,_Pray,_Love_–_Elizabeth_Gilbert,_2007.jpg', '2', '2013-03-01'),
('987-0-670-2345-20', 'Framework', 'Machall Publication', 'Medical', '23', 2500, 'images/framework.jpg', '20', '2013-03-11'),
('987-0-670-2345-3', 'Financial Accounts', 'Pearson Pvt. Limited', 'Management', '45', 580, 'images/financial_accounting-Dr_V_K_Goyal.jpg', '16', '2013-03-01'),
('987-0-670-2345-4', 'Introductory Economics', 'Greg Perry', 'Management', '26', 450, 'images/eco.jpeg', '4', '2013-03-01'),
('987-0-670-2345-5', 'Software Engineering', 'Asmita', 'Engineering', '68', 550, 'images/images(2).jpg', '5', '2013-03-01'),
('987-0-670-2345-6', 'Fundamental Engineering', 'QLE International Pvt. limited', 'Engineering', '50', 700, 'images/images(4).jpg', '6', '2013-03-01'),
('987-0-670-2345-7', 'Alchemist', 'kantipur', 'Novel', '31', 950, 'images/200px-TheAlchemist.jpg', '7', '2013-03-01'),
('987-0-670-2345-8', 'palpasa cafe', 'kantipur', 'Nepali Novel', '45', 250, 'images/palpasa_cafe.JPG', '13', '2013-03-06'),
('987-0-670-2345-9', 'Numerical Methods', 'ABC Pvt. Limited', 'Engineering', '56', 300, 'images/numerical_methods.jpeg', '3', '2013-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `username` varchar(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone-no` decimal(10,0) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `firstname`, `lastname`, `password`, `address`, `email`, `phone-no`) VALUES
('10', 'Bishnu Prasad', 'Bhatta', 'bhatta', 'kotestwor', 'mebhatta10@yahoo.com', '4657647256'),
('admin', 'cosmos', 'college', 'admin', 'tutepani', 'jpt@jpt.com', '9879798'),
('anita', 'anita', 'neupane', 'anita', 'iuwkjhkjsd', 'anita@gmail.com', '98724397'),
('neyna', 'neyna', 'shrestha', 'neyna', 'Sanepa', 'neyna@gmail.com', '1'),
('roisha', 'Roisha', 'Joshi', 'roisha', 'Bagbazaar', 'roisha@yahoo.com', '1'),
('samita', 'samita', 'neupane', 'samita', 'ssd', 'samita@gmail.com', '2232112'),
('shabnam', 'shabnam', 'thapa', 'shabnam', 'sitapaila', 'sabnam@thapa.com', '983248');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE IF NOT EXISTS `publication` (
  `publication_name` varchar(50) NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`publication_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`publication_name`, `phone`, `address`, `email`) VALUES
('abc', '1', 'kalanki', 'abc@gmail.com'),
('ABC Pvt. Limited', '768686', 'Ghattekulo', 'abc@gmail.com'),
('Asmita', '9846575442', 'Satdobato', 'asmita@hotmail.com'),
('Ekata publication', '1', 'Baneshwor', 'ekata@gmail.com'),
('Ekta', '1', 'Thapathali', 'ekta@gmail.com'),
('fineprint', '1', 'patan', 'fineprint@wlink.com.np'),
('Global', '9841461345', 'Ratnapark', 'global@gmail.com'),
('Greg Perry', '9484754774', 'Koteswor', 'Greyperry@gmail.com'),
('J.K roadway', '402', 'Parkers road', 'jk@gmail.com'),
('kantipur', '9841324253', 'Durbar Marg', 'kanti@hotmail.com'),
('Machall Publication', '402', 'Kew Gardens', 'machall@hotmail.com'),
('Pearson Pvt. Limited', '9846575442', 'Durbar Marg', 'pearson@hotmail.com'),
('QLE International Pvt. limited', '9841461987', 'Sanepa', 'rise@hotmail.com'),
('QRT pvt.limited', '9846575442', 'Kalanki', 'QRT@gmail.com'),
('Smikasha publication', '9841378921', 'naikap', 'smikasha@yahoo.com'),
('SRL International', '9841243434', 'Lagankhel', 'srl@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reserved items`
--

CREATE TABLE IF NOT EXISTS `reserved items` (
  `Reservation id` int(5) NOT NULL AUTO_INCREMENT,
  `ISBN` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `date` date NOT NULL,
  `username` varchar(10) NOT NULL,
  `Quantity reserved` int(5) NOT NULL,
  `Status` decimal(1,0) NOT NULL,
  PRIMARY KEY (`Reservation id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `reserved items`
--

INSERT INTO `reserved items` (`Reservation id`, `ISBN`, `price`, `date`, `username`, `Quantity reserved`, `Status`) VALUES
(3, '987-0-670-2345-14', 450, '2013-03-08', 'anita', 1, '1'),
(4, '987-0-670-2345-5', 550, '2013-03-08', 'anita', 1, '1'),
(5, '987-0-670-2345-4', 450, '2013-03-09', 'anita', 1, '1'),
(6, '987-0-670-2345-9', 300, '2013-03-09', 'samita', 2, '1'),
(7, '987-0-670-2345-9', 300, '2013-03-10', 'anita', 1, '1'),
(11, '987-0-670-2345-13', 490, '2013-03-11', '10', 1, '1'),
(12, '12_337', 1, '2013-03-11', 'samita', 2, '1'),
(13, '987-0-670-2345-7', 950, '2013-03-11', 'roisha', 2, '1'),
(14, '987-0-670-2345-11', 350, '2013-03-11', 'neyna', 2, '1'),
(15, '987-0-670-2345-5', 550, '2013-03-11', 'shabnam', 1, '1');
