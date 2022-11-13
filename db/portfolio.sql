-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 07:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'asdasdas', 'admin@gmail.com', '0490121313', 'asduashudashuhuashu'),
(2, 'test', 'test@gmail.com', 'test', 'test'),
(3, 'test', 'test@gmail.com', 'test', 'test'),
(4, 'test', 'test@gmail.com', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image`) VALUES
(1, 'Pos Application', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin nibh nisl condimentum id. Nunc sed id semper risus in hendrerit gravida rutrum quisque. Adipiscing vitae proin sagittis nisl rhoncus. Dui accumsan sit amet nulla facilisi morbi tempus iaculis urna. Vitae tortor condimentum lacinia quis vel eros donec. Nibh nisl condimentum id venenatis a. Ipsum nunc aliquet bibendum enim facilisis. Eu turpis egestas pretium aenean pharetra magna ac placerat. Risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Senectus et netus et malesuada. Nec tincidunt praesent semper feugiat nibh sed pulvinar proin gravida. Enim diam vulputate ut pharetra sit amet. Ultricies lacus sed turpis tincidunt. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim. Adipiscing enim eu turpis egestas pretium aenean pharetra magna ac. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Enim ut tellus elementum sagittis vitae et leo duis ut. Tortor posuere ac ut consequat.', 'project-1.jpg'),
(2, 'Design Site', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin nibh nisl condimentum id. Nunc sed id semper risus in hendrerit gravida rutrum quisque. Adipiscing vitae proin sagittis nisl rhoncus. Dui accumsan sit amet nulla facilisi morbi tempus iaculis urna. Vitae tortor condimentum lacinia quis vel eros donec. Nibh nisl condimentum id venenatis a. Ipsum nunc aliquet bibendum enim facilisis. Eu turpis egestas pretium aenean pharetra magna ac placerat. Risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Senectus et netus et malesuada. Nec tincidunt praesent semper feugiat nibh sed pulvinar proin gravida. Enim diam vulputate ut pharetra sit amet. Ultricies lacus sed turpis tincidunt. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim. Adipiscing enim eu turpis egestas pretium aenean pharetra magna ac. Pretium nibh ipsum consequat nisl vel pretium lectus quam id. Enim ut tellus elementum sagittis vitae et leo duis ut. Tortor posuere ac ut consequat.', 'project-2.jpg'),
(3, 'POS Desktop APP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam vel quam elementum pulvinar etiam non quam. Facilisi etiam dignissim diam quis enim. Sed id semper risus in hendrerit. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis. At imperdiet dui accumsan sit amet nulla. Luctus accumsan tortor posuere ac ut consequat semper viverra. Nec dui nunc mattis enim ut tellus elementum sagittis. Et netus et malesuada fames ac turpis egestas sed tempus. Orci dapibus ultrices in iaculis nunc sed augue lacus viverra. Nisl nisi scelerisque eu ultrices vitae. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Placerat orci nulla pellentesque dignissim enim sit amet venenatis. Scelerisque purus semper eget duis at tellus. Etiam sit amet nisl purus in mollis nunc sed id. Sit amet consectetur adipiscing elit pellentesque. Id neque aliquam vestibulum morbi blandit. At varius vel pharetra vel.', 'posimg.jfif'),
(4, 'POS Desktop APP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam vel quam elementum pulvinar etiam non quam. Facilisi etiam dignissim diam quis enim. Sed id semper risus in hendrerit. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis. At imperdiet dui accumsan sit amet nulla. Luctus accumsan tortor posuere ac ut consequat semper viverra. Nec dui nunc mattis enim ut tellus elementum sagittis. Et netus et malesuada fames ac turpis egestas sed tempus. Orci dapibus ultrices in iaculis nunc sed augue lacus viverra. Nisl nisi scelerisque eu ultrices vitae. Aliquam sem fringilla ut morbi tincidunt augue interdum velit. Ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Placerat orci nulla pellentesque dignissim enim sit amet venenatis. Scelerisque purus semper eget duis at tellus. Etiam sit amet nisl purus in mollis nunc sed id. Sit amet consectetur adipiscing elit pellentesque. Id neque aliquam vestibulum morbi blandit. At varius vel pharetra vel.', 'posimg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `description`) VALUES
(1, 'bx bx-lock', 'Web Developer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec ultrices tincidunt arcu non sodales. Cras sed felis eget velit aliquet sagittis. Fames ac turpis egestas integer eget aliquet'),
(2, 'bx bx-dev-to', 'Web Design', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec ultrices tincidunt arcu non sodales. Cras sed felis eget velit aliquet sagittis. Fames ac turpis egestas integer eget aliquet'),
(3, 'bx bx-pen', 'Desktop App', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim. A pellentesque sit amet porttitor eget dolor morbi '),
(4, 'bx bx-edit-alt', 'Create Icon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim. A pellentesque sit amet porttitor eget dolor morbi '),
(5, 'bx bx-desktop', 'Desktop Application', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim. A pellentesque sit amet porttitor eget dolor morbi ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `slogan` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twiter` varchar(255) DEFAULT NULL,
  `insta` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `phone`, `username`, `password`, `title`, `description`, `slogan`, `facebook`, `twiter`, `insta`, `youtube`, `image`) VALUES
(1, 'Xhemali', 'Durguti', 'xdurguti7@gmail.com', '+383049136183', 'Xhema', 'adminadmin', 'Full Stack Developer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'If You Have Any Project In Your Mind.', 'https://www.facebook.com/xhemalidurguti', '#', 'https://www.instagram.com/durgutixhema/', 'https://www.youtube.com/channel/UCYcnUcMWeqWdpqAakEjz7xA', 'about.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
