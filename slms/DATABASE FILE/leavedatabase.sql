
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE leavedatabase;
USE leavedatabase;


CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
);



INSERT INTO `faculty` (`id`, `name`, `class`, `email`, `password`) VALUES
(1, 'Mr. ABC','SY', 'abc@gmail.com', 'abc@123');




CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `leavedate` date NOT NULL,
  `leavedur` varchar(255) NOT NULL,
  `leavereason` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `leaves` (`id`, `name`, `email`, `class`, `leavedate`, `leavedur`, `leavereason`, `status`) VALUES
(1, 'Liam', 'liam@gmail.com', 'Development', '2020-04-09', '3 days', '<p>none</p>\n', 1),



CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(333) NOT NULL
);


INSERT INTO `student` (`id`, `name`, `class`, `email`, `password`) VALUES
(1, 'Liam', 'Development', 'liam@gmail.com', 'password'),


ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
