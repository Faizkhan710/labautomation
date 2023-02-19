-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 02:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labautomation`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcpri`
--

CREATE TABLE `addcpri` (
  `cp_id` int(11) NOT NULL,
  `cp_name` varchar(50) DEFAULT NULL,
  `cp_email` varchar(50) DEFAULT NULL,
  `cp_username` varchar(50) DEFAULT NULL,
  `cp_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcpri`
--

INSERT INTO `addcpri` (`cp_id`, `cp_name`, `cp_email`, `cp_username`, `cp_password`) VALUES
(1, 'Aptech', 'aptech123@gmail.com', '@aptech123', '@aptech123');

-- --------------------------------------------------------

--
-- Table structure for table `addproducts`
--

CREATE TABLE `addproducts` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `p_description` text DEFAULT NULL,
  `p_price` int(11) DEFAULT NULL,
  `p_quantity` int(11) DEFAULT NULL,
  `p_image` text DEFAULT NULL,
  `p_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addproducts`
--

INSERT INTO `addproducts` (`p_id`, `p_name`, `p_description`, `p_price`, `p_quantity`, `p_image`, `p_status`) VALUES
(1, 'Electrical Conduit and Conduit Fitting', 'Electrical Conduit is a tube that carries electrical wire for power or communications. Conduit is made in rigid steel; lighter steel called IMC or intermediate conduit; EMT or thin wall conduit; PVC or plastic; aluminum; or PVC coated; which is rigid covered with 40 mil PVC jacket. Conduit for electrical ranges in sizes from 3/8″ to 6″.', 400, 1, 'Img1.jpg', 4),
(2, 'Electric Wire and Cable', 'Electrical Wire is drawn metal, copper or aluminum that carries electricity through an electrical circuit. Wire may be run overhead, under ground, through conduit or flex or open. Wire is protected by design with a jacket depending on usage. It can also be flexible as in the use of extension cords. It can be very small in size as 26 gauge to as large as 2000 MCM.', 500, 1, 'img2.jpg', 4),
(3, 'Explosion Proof Enclosures', 'Explosion Proof is a product design to contain an electrical short so that it doesn’t ignite a hazardous atmosphere causing an explosion. Refineries, gas stations, paint booths are examples of where these products would be used. They are heavy duty steel or aluminum by design, or can be fiberglass as well.', 300, 1, 'img3.jpg', 4),
(4, 'Circuit Breakers', 'Circuit Breakers are devices that automatically interrupt the follow of an electric current to protect against a short or overload. Circuit Breakers are made by several manufacturers including Cutler Hammer/ Westinghouse, General Electric, Square D, ITE Sieonans, and Federal Pacific. Circuit Breakers protect the smallest house circuit to the largest industrial requirements.', 600, 1, 'img4.jpg', 4),
(6, 'Electrical Box', 'Electrical Box is an enclosure used for many purposes such as pulling, connecting or terminated an electrical circuit. Electrical box can be set screw or indoor; it can be rain tight, or outdoor. They can be made of steel, aluminum, plastic, stainless steel, or cast iron. Requirement can include corrosive protected or explosion protected by design.', 550, 1, 'img11.jpg', 4),
(7, 'Lugs', 'Lugs are the electrical connectors that terminate the electrical circuit. Lugs are made of copper, aluminum, or bronze. They are made for the smallest wire size, 26 gauge to the largest 2000 MCM. Lugs can be mechanical or set screw; compression or crimp, solder or weld; or clamp type. T&B, Burndy, Penn Union, Panduit, and 3M are some different manufacturers of lugs.', 550, 1, 'img7.jpg', 4),
(8, 'Motor Control', 'Motor Control is an apparatus used to regulate a motor or mechanism. It can control the smallest mechanism to the largest power turbines. There are several manufacturers of motor control including Allen Bradley, Square D, Cutler Hammer, ITE Siemens, General Electric and Westinghouse.', 800, 1, 'img8.jpg', 4),
(15, 'Safety Switches', 'Whether it is an industrial setting, commercial building, or normal dwelling, safety switches are essential for protecting properties from the risks of electrical hazards. Everything from human life to assets depends on the protection a safety switch provides in the case of an electrical malfunction.  Within a property’s normal power circuit, the current flowing through any appliance is returned through the neutral wire. If the circuit is compromised, the power supply may leak to the earth through anyone in contact with the live appliance, thereby causing serious injury or even death.', 650, 1, 'img9.jpg', 4),
(16, 'Electrical Plugs', 'The term “plug” refers to an electrical device that supplies electrical current from receptacles to the electronic devices. All the electrical appliances, machines, and other devices depend on these plugs and receptacles for their powering needs. When wiring a house or a commercial place or when conducting repairs, it is imperative to have a clear understanding of plugs and receptacles in general and a few other things related to them as well.  Electrical plugs are detachable connectors that are responsible for supplying electric current from the power source to an electronic device. Different kinds of electrical plugs are available for varied kinds of wiring systems. These plugs normally have pins that are inserted into the outlet. It is with the help of these pins that the electric current travels through insulated wires and reaches an appliance/device/machine.', 100, 1, 'img10.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `addtesters`
--

CREATE TABLE `addtesters` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(50) DEFAULT NULL,
  `t_email` varchar(50) DEFAULT NULL,
  `t_username` varchar(50) DEFAULT NULL,
  `t_password` varchar(50) DEFAULT NULL,
  `t_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addtesters`
--

INSERT INTO `addtesters` (`t_id`, `t_name`, `t_email`, `t_username`, `t_password`, `t_image`) VALUES
(1, 'Abdul Rafay', 'abdulrafay123@gmail.com', '@rafay123', '@rafay123', 't1.jpg'),
(2, 'Muhammad Ahmed', 'muhammadahmed123@gmail.com', '@ahmed123', '@ahmed123', 't2.png');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cpriapprove`
--

CREATE TABLE `cpriapprove` (
  `c_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `cpri_id` int(11) DEFAULT NULL,
  `testing_id` int(11) DEFAULT NULL,
  `comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpriapprove`
--

INSERT INTO `cpriapprove` (`c_id`, `product_id`, `cpri_id`, `testing_id`, `comments`) VALUES
(1, 1, 1, 1, 'Approved'),
(2, 2, 1, 2, 'Approved'),
(3, 3, 1, 3, 'Approved'),
(4, 4, 1, 4, 'Approved'),
(5, 6, 1, 1, 'Approved'),
(6, 7, 1, 3, 'Approved'),
(7, 8, 1, 2, 'Approved'),
(8, 15, 1, 2, 'Approved'),
(9, 16, 1, 2, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tested`
--

CREATE TABLE `tested` (
  `tested_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `tester_id` int(11) DEFAULT NULL,
  `testing_id` int(11) DEFAULT NULL,
  `comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tested`
--

INSERT INTO `tested` (`tested_id`, `product_id`, `tester_id`, `testing_id`, `comments`) VALUES
(1, 1, 1, 1, 'Approved'),
(2, 2, 1, 3, 'Approved'),
(3, 3, 1, 5, 'Approved'),
(4, 4, 1, 1, 'Approved'),
(6, 6, 2, 1, 'Approved'),
(7, 7, 2, 2, 'Approved'),
(8, 8, 2, 3, 'Approved'),
(9, 15, 2, 4, 'Approved'),
(10, 16, 2, 2, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `testingprocess`
--

CREATE TABLE `testingprocess` (
  `testing_id` int(11) NOT NULL,
  `testing_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testingprocess`
--

INSERT INTO `testingprocess` (`testing_id`, `testing_name`) VALUES
(0, 'None'),
(1, 'Visual Inspection'),
(2, 'Earth Continuity Test'),
(3, 'Insulation Resistance Test'),
(4, 'Leakage Test'),
(5, 'Further tests have to be performed on leads, RCDs ');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) DEFAULT NULL,
  `u_email` varchar(50) DEFAULT NULL,
  `u_username` varchar(50) DEFAULT NULL,
  `u_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`u_id`, `u_name`, `u_email`, `u_username`, `u_password`) VALUES
(1, 'Muhammad Osaf', 'muhammadosaf2003@gmail.com', 'osaf123', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcpri`
--
ALTER TABLE `addcpri`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `addproducts`
--
ALTER TABLE `addproducts`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `addtesters`
--
ALTER TABLE `addtesters`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpriapprove`
--
ALTER TABLE `cpriapprove`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `cpri_id` (`cpri_id`),
  ADD KEY `testing_id` (`testing_id`);

--
-- Indexes for table `tested`
--
ALTER TABLE `tested`
  ADD PRIMARY KEY (`tested_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `tester_id` (`tester_id`),
  ADD KEY `testing_id` (`testing_id`);

--
-- Indexes for table `testingprocess`
--
ALTER TABLE `testingprocess`
  ADD PRIMARY KEY (`testing_id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcpri`
--
ALTER TABLE `addcpri`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addproducts`
--
ALTER TABLE `addproducts`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `addtesters`
--
ALTER TABLE `addtesters`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cpriapprove`
--
ALTER TABLE `cpriapprove`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tested`
--
ALTER TABLE `tested`
  MODIFY `tested_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testingprocess`
--
ALTER TABLE `testingprocess`
  MODIFY `testing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cpriapprove`
--
ALTER TABLE `cpriapprove`
  ADD CONSTRAINT `cpriapprove_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `addproducts` (`p_id`),
  ADD CONSTRAINT `cpriapprove_ibfk_2` FOREIGN KEY (`cpri_id`) REFERENCES `addcpri` (`cp_id`),
  ADD CONSTRAINT `cpriapprove_ibfk_3` FOREIGN KEY (`testing_id`) REFERENCES `testingprocess` (`testing_id`);

--
-- Constraints for table `tested`
--
ALTER TABLE `tested`
  ADD CONSTRAINT `tested_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `addproducts` (`p_id`),
  ADD CONSTRAINT `tested_ibfk_2` FOREIGN KEY (`tester_id`) REFERENCES `addtesters` (`t_id`),
  ADD CONSTRAINT `tested_ibfk_3` FOREIGN KEY (`testing_id`) REFERENCES `testingprocess` (`testing_id`),
  ADD CONSTRAINT `tested_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `addproducts` (`p_id`),
  ADD CONSTRAINT `tested_ibfk_5` FOREIGN KEY (`tester_id`) REFERENCES `addtesters` (`t_id`),
  ADD CONSTRAINT `tested_ibfk_6` FOREIGN KEY (`testing_id`) REFERENCES `testingprocess` (`testing_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
