-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 11:03 PM
-- Server version: 5.7.20-log
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatmessages`
--

CREATE TABLE `chatmessages` (
  `chat_id` int(11) NOT NULL,
  `chat_pusher` varchar(256) NOT NULL,
  `chat_receiver` varchar(256) DEFAULT NULL,
  `chat_message` varchar(256) NOT NULL,
  `chat_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatmessages`
--

INSERT INTO `chatmessages` (`chat_id`, `chat_pusher`, `chat_receiver`, `chat_message`, `chat_timestamp`) VALUES
(347, 'peeter', 'Restaurants', 'as', 1511098275),
(348, 'peeter', 'Restaurants', 'd', 1511098276),
(349, 'peeter', 'Restaurants', 'as', 1511098276),
(350, 'peeter', 'Restaurants', 'ad', 1511098276),
(351, 'peeter', 'General', 'fasfasfasfas', 1511112036),
(352, 'peeter', 'General', 'Hi all', 1511114258),
(353, 'peeter', 'General', 'fasfas asfasfasfas', 1511212029),
(354, 'peeter', 'General', 'asdfdsfdsfds', 1511212050),
(355, 'peeter', 'General', 'fgasfasfasfa', 1511212713),
(356, 'peeter', 'Restaurants', 'fasfasfsa', 1511212720),
(357, 'peeter', 'Restaurants', 'fasfasfsa', 1511212738),
(358, 'Vello', 'General', 'hi', 1511212772),
(359, 'peeter', 'Restaurants', 'fasfasfsa', 1511213042),
(360, 'peeter', 'General', 'Tsau vello', 1511213086),
(361, 'peeter', 'General', 'tsau', 1511213097),
(362, 'Vello', 'General', 'tsau', 1511213252),
(363, 'Vello', 'General', 'asdasdasdasdsa', 1511213635),
(364, 'peeter', 'General', 'tsau', 1511213650),
(365, 'Vello', 'General', 'asdasdasdas', 1511213665),
(366, 'Vello', 'General', 'tsau', 1511213742),
(367, 'Vello', 'General', 'tere', 1511213900),
(368, 'peeter', 'General', 'tere', 1511213911),
(369, 'peeter', 'General', 'tere', 1511213972),
(370, 'Vello', 'General', 'tere', 1511213986),
(371, 'Vello', 'General', 'Tere tere', 1511214041),
(372, 'Vello', 'General', 'Tere tere', 1511214044),
(373, 'Vello', 'General', 'Tere tere', 1511214157),
(374, 'Vello', 'General', 'hi', 1511215267),
(375, 'Vello', 'General', 'tere', 1511215287),
(376, 'peeter', 'General', 'tere Vello kuidas k2si kaib', 1511215399),
(377, 'Vello', 'MyHostels', 'tsau', 1511303639),
(378, 'peeter', 'MyHostels', 'tsau', 1511303649);

-- --------------------------------------------------------

--
-- Table structure for table `chatrooms`
--

CREATE TABLE `chatrooms` (
  `chatroom_id` int(3) NOT NULL,
  `chatroom_name` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chatrooms`
--

INSERT INTO `chatrooms` (`chatroom_id`, `chatroom_name`) VALUES
(1, 'General'),
(2, 'Dublin'),
(8, 'MyHostels');

-- --------------------------------------------------------

--
-- Table structure for table `chatroomusers`
--

CREATE TABLE `chatroomusers` (
  `chatroomusers_id` int(5) NOT NULL,
  `chatroomusers_chatroom_name` varchar(20) NOT NULL,
  `chatroomusers_user_uid` varchar(20) NOT NULL,
  `chatroomusers_initial_timestamp` int(11) NOT NULL,
  `chatroomusers_last_activity_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `user_status` tinyint(1) DEFAULT '0',
  `user_avatar` varchar(256) NOT NULL,
  `user_color` varchar(256) NOT NULL,
  `user_level` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `user_status`, `user_avatar`, `user_color`, `user_level`) VALUES
(1, 'nirmala', 'chandra', 'nm123@gmail.com', 'nimms', '$2y$10$CaAL2E8Pdpznv2Id2AZFcOfEZWbgTwvkBw/PEZTeIt.1msbJZ/GpS', 0, 'images/female-49.png', '#0069d9', 3),
(2, 'Vjeran', 'Nagy', 'vjeran.nagy@gmail.com', 'Moostauche', '$2y$10$ymz2Y82tjv6gb4545b2ZReHBkS5RQ0UKlga4WL8UYTgW.m50KrxGq', 0, 'Images/avatar1.jpg', '#bd4147', 0),
(3, 'john', 'doe', 'johndoe@gmail.com', 'johndoe', '$2y$10$hMyq/dzmbSA82DSfHedQr.WFv9PAw00S8H55HAhK12kFdk6rMSFZ6', 0, 'Images/avatar1.jpg', '#bd4147', 0),
(4, 'blabla', 'blablas', 'blablas@gmaad.com', 'blabla', '$2y$10$UNXJXq1b7CWWcvKrxEvESejQiiiwItdCIAWJwMmAZPYAWMiwH4yfe', 0, 'Images/avatar1.jpg', '#bd4147', 0),
(6, 'Vello', 'Vello', 'vello@gmail.com', 'Vello', '$2y$10$AqeZoTOjwqMHUrCpZ/BPN.dLc822Gnu7x4q5ZtE13sl9Q9DKwTf3.', 0, 'images/male-16.png', '#218838', 0),
(7, 'Villu', 'Reiljan', 'villu@gmail.com', 'Villu', '$2y$10$J2pi8QrQ2rUMe2/l13yx8OVMvah4rQZwuil6EtEyOYq.IfnJh4IdW', 0, 'Images/avatar1.jpg', '#bd4147', 0),
(8, 'leopold', 'karvane', 'karvane@gmail.com', 'leo', '$2y$10$SZdzSm0iOBte/iZQYVjvU.YbepxOGBzw8qu6glqEk1iu/gtRK6CzO', 0, 'Images/avatar1.jpg', '#bd4147', 0),
(9, 'peeter', 'paan', 'peeter@paan.ee', 'peeter', '$2y$10$83eW.GfJjWgo5YoqUnTLS.iRSYj/Om3FOil3yD/Bf5febUXTzC5ji', 0, 'images/female-24.png', '#ffc107', 3),
(10, 'viljar', 'voidka', 'viljar@gmail.com', 'viljar', '$2y$10$8Xb8etNyPcNGy0QSex8a6uP6zPEYUy7kpqy9gTX8cVvxYb5NUUw4q', 0, 'Images/avatar1.jpg', '#222', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_friends`
--

CREATE TABLE `users_friends` (
  `users_friends_id` int(11) NOT NULL,
  `users_friends_uid` varchar(30) NOT NULL,
  `users_friends_friend` varchar(30) NOT NULL,
  `users_friends_status` tinyint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_friends`
--

INSERT INTO `users_friends` (`users_friends_id`, `users_friends_uid`, `users_friends_friend`, `users_friends_status`) VALUES
(1, 'Vello', 'peeter', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatmessages`
--
ALTER TABLE `chatmessages`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `chatrooms`
--
ALTER TABLE `chatrooms`
  ADD PRIMARY KEY (`chatroom_id`);

--
-- Indexes for table `chatroomusers`
--
ALTER TABLE `chatroomusers`
  ADD PRIMARY KEY (`chatroomusers_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_friends`
--
ALTER TABLE `users_friends`
  ADD PRIMARY KEY (`users_friends_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatmessages`
--
ALTER TABLE `chatmessages`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;

--
-- AUTO_INCREMENT for table `chatrooms`
--
ALTER TABLE `chatrooms`
  MODIFY `chatroom_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chatroomusers`
--
ALTER TABLE `chatroomusers`
  MODIFY `chatroomusers_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_friends`
--
ALTER TABLE `users_friends`
  MODIFY `users_friends_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
