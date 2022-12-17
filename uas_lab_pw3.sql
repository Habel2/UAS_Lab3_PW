-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 01:18 PM
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
-- Database: `uas_lab_pw3`
--

-- --------------------------------------------------------

--
-- Table structure for table `datafilm`
--

CREATE TABLE `datafilm` (
  `id` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `director` varchar(30) NOT NULL,
  `sinopsis` varchar(500) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datafilm`
--

INSERT INTO `datafilm` (`id`, `judul`, `genre`, `director`, `sinopsis`, `foto`) VALUES
(2, 'Thor', 'Action / Sci-fi', 'Kenneth Branagh', 'Thor is exiled by his father, Odin, the King of Asgard, to the Earth to live among mortals. When he lands on Earth, his trusted weapon Mjolnir is discovered and captured by S.H.I.E.L.D.', 'Foto_Marvel_4.jpg'),
(3, 'Captain America: The First Avenger', 'Action / Adventure', 'During World War II, Steve Rog', 'During World War II, Steve Rogers decides to volunteer in an experiment that transforms his weak body. He must now battle a secret Nazi organisation headed by Johann Schmidt to defend his nation.', 'Captain_America.jpg'),
(4, 'The Avengers', 'Action / Adventure', ' Joss Whedon', 'Nick Fury is compelled to launch the Avengers Initiative when Loki poses a threat to planet Earth. His squad of superheroes put their minds together to accomplish the task.', 'Foto_marvel_5.jpg'),
(5, 'Avengers: Age of Ultron', 'Action / Adventure', 'Joss Whedon', 'Tony Stark builds an artificial intelligence system named Ultron with the help of Bruce Banner. When the sentient Ultron makes plans to wipe out the human race, the Avengers set out to stop him.', 'ageofultron.jpg'),
(6, 'Avengers: Infinity War', 'Action / Sci-fi', ' Anthony Russo, Joe Russo', 'The Avengers must stop Thanos, an intergalactic warlord, from getting his hands on all the infinity stones. However, Thanos is prepared to go to any lengths to carry out his insane plan.', 'pA8NU84YBRkqgs85V8BPjjlmvPj.jpg'),
(7, 'Avengers: Endgame', 'Action / Sci-fi', 'Anthony Russo, Joe Russo', 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', 'Avengers-Endgame-Poster.jpg'),
(8, 'Captain America: Civil War', 'Action / Adventure', 'Anthony Russo, Joe Russo', 'Friction arises between the Avengers when one group supports the governments decision to implement a law to control their powers while the other opposes it.', 'civilwar.jpg'),
(9, 'Captain America: The Winter Soldier', 'Action / Adventure', 'Anthony Russo, Joe Russo', 'As Steve Rogers adapts to the complexities of a contemporary world, he joins Natasha Romanoff and Sam Wilson in his mission to uncover the secret behind a deadly, mysterious assassin.', 'wintersoldier.jpg'),
(10, 'Iron Man 3', 'Action / Adventure', 'Shane Black', 'Tony Stark encounters a formidable foe called the Mandarin. After failing to defeat his enemy, Tony embarks on a journey of self-discovery as he fights against the powerful Mandarin.', 'iron_man_3_poster.jpg'),
(12, 'Guardians of the Galaxy', 'Action / Sci-fi', 'James Gunn', 'Peter escapes from the planet Morag with a valuable orb that Ronan the Accuser wants. He eventually forms a group with unwilling heroes to stop Ronan.', 'Foto_Marvel_6.jpg'),
(13, 'Ant-Man', 'Action / Adventure', 'Peyton Reed', 'Scott, a master thief, gains the ability to shrink in scale with the help of a futuristic suit. Now he must rise to the occasion of his superhero status and protect his secret from unsavoury elements.', 'Foto_Marvel_7.jpg'),
(14, 'Captain Marvel', 'Action / Sci-fi', 'Anna Boden, Ryan Fleck', 'Amidst a mission, Vers, a Kree warrior, gets separated from her team and is stranded on Earth. However, her life takes an unusual turn after she teams up with Fury, a S.H.I.E.L.D. agent.', 'Foto_marvel_2.jpg'),
(16, 'Thor: Ragnarok', 'Action / Sci-fi', 'Taika Waititi', 'Deprived of his mighty hammer Mjolnir, Thor must escape the other side of the universe to save his home, Asgard, from Hela, the goddess of death.', 'thorragnarok.jpg'),
(21, 'The Incredible Hulk (2008)', 'Action / Sci-fi', 'Louis Leterrier', 'Dr Bruce Banner subjects himself to high levels of gamma radiation which triggers his transformation into a huge green creature, the Hulk, whenever he experiences negative emotions such as anger.', 'hulk1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datafilm`
--
ALTER TABLE `datafilm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datafilm`
--
ALTER TABLE `datafilm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
