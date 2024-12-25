

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Table structure for table `redirect`
--

CREATE TABLE `redirect` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `short_url` varchar(50) NOT NULL,
  `hits` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `redirect`
--

INSERT INTO `redirect` (`id`, `url`, `short_url`, `hits`) VALUES

(1, 'https://instagram.com/rudrangkur', 'https://mmm.sh/63a5f0', 1),
(2, 'https://www.youtube.com/shorts/1d8dswLEB8Y', 'https://mmm.sh/63a7ac', 2),
(3, 'https://granthakunja.org', 'https://mmm.sh/755989', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `redirect`
--
ALTER TABLE `redirect`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `redirect`
--
ALTER TABLE `redirect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;