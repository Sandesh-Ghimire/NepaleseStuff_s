-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 11:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nepalesestuffmain`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `adminId` int(11) NOT NULL,
  `adminname` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `mobile` varchar(16) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`adminId`, `adminname`, `email`, `mobile`, `password`) VALUES
(1, 'Niraj Giri', 'niraj@admin.com', '100', 'root'),
(2, 'Sandesh Ghimire', 'sandesh@admin.com', '101', 'root'),
(3, 'Anmol Aran', 'anmol@admin.com', '102', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `blogtable`
--

CREATE TABLE `blogtable` (
  `blogId` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `author` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `blogcon` varchar(8096) NOT NULL,
  `img1` varchar(128) NOT NULL,
  `img2` varchar(128) DEFAULT NULL,
  `img3` varchar(128) DEFAULT NULL,
  `img4` varchar(128) DEFAULT NULL,
  `img5` varchar(128) DEFAULT NULL,
  `tag1` varchar(32) NOT NULL,
  `tag2` varchar(32) DEFAULT NULL,
  `tag3` varchar(32) DEFAULT NULL,
  `tag4` varchar(32) DEFAULT NULL,
  `tag5` varchar(32) DEFAULT NULL,
  `userViewCount` int(11) NOT NULL,
  `guestViewCount` int(11) NOT NULL,
  `reportCount` int(11) NOT NULL,
  `bookmarkCount` int(11) NOT NULL,
  `upvoteCount` int(11) NOT NULL,
  `downvoteCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogtable`
--

INSERT INTO `blogtable` (`blogId`, `title`, `author`, `date`, `blogcon`, `img1`, `img2`, `img3`, `img4`, `img5`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `userViewCount`, `guestViewCount`, `reportCount`, `bookmarkCount`, `upvoteCount`, `downvoteCount`) VALUES
(1, 'TestBlog', 'Niraj', '2022-10-02', 'Lorem Ipsum', '', ' ', ' ', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0),
(9, 'Nepal: 8th Wonder of the World', 'Niraj Giri', '2022-10-02', '<p>Beautiful Nepal is a land of friendly and engaging people, where deities mingle with mortals and magnificent temples, monasteries and historical monuments can be found at almost every turn. This is the home of Sagarmatha &ldquo;Goddess Mother of the World&rdquo;, the iconic Mount Everest, and her snow-capped counterparts making up the weather-beaten Himalayas.</p>\n<p>From eight of the fourteen tallest mountains in the world to the flourishing Terai plains of Jhapa, you will be forgiven for having your camera glued to your hands at all times. To take in the wonders of the Himalayas, we recommend travelling to Dhulikhel , one of the most popular destinations to view this chain of giants. Nepal&rsquo;s startling beauty is at its best in Pokhara , which has been the subject of many travel writers. Its pristine air, the spectacular backdrop of the snowy peaks of the Annapurna Range and the serene Phewa, Begnas and Rupa Lakes, makes this destination &lsquo;the Jewel of the Himalaya&rsquo;.</p>\n<p>For a walk on the wild side we suggest a Nepal tour to the Chitwan National Park . Chitwan translates to &ldquo;heart of the jungle&rdquo; and is a UNESCO World Heritage Site. The park is home to many endangered animals such as the one-horned rhino, royal Bengal tiger, gharial crocodile and fresh water gangetic dolphin. The Bardia National Park is the largest wildlife area in the Terai and protects 968 square kilometres of sal forest and grassland, including one of Asia&rsquo;s largest stretches of tiger habitat.</p>\n<p>A Nepal tour wouldn&rsquo;t be complete without exploring the fascinating Kathmandu Valley . Comprising of the three ancient cities of Kathmandu, Patan and Bhaktapur, the valley houses seven UNESCO World Heritage Sites and is also home to a myriad of monuments, sculptures, artistic temples and magnificent artworks.</p>\n<p>Be sure to visit Kathmandu&rsquo;s Durbar Square (the historic seat of royalty), home to the Hanuman Dhoka, named after the monkey god, Hanuman. Follow this exploration with a stop at the Patan Durbar Square, which is located in the heart of Patan City and consists of three main chowks (squares). The Sundari Chowk holds a masterpiece of stone architecture, the Royal Bath called Tushahity, which is a UNESCO World Heritage Monument.</p>\n<p>Adventure tourism is one of Nepal&rsquo;s biggest drawcards. This is the ideal destination for active travellers, offering activities for nature lovers and adrenaline seekers. While trekking, mountaineering and game viewing have long been popular, visitors can now also enjoy excursions such as rafting, biking, fishing, hot air ballooning and even bungee jumping.</p>', '9_1.jpg', ' 9_2.jpg', ' 9_3.png', '9_4.jpg', '9_5.jpg', 'nepal', 'nepalese', 'beautiful place', 'tourist destination', '', 11, 71, 0, 0, 0, 0),
(10, 'Kathmandu: The City of Temples', 'Niraj Giri', '2022-10-09', '<p>Kathmandu Valley was once known as the &lsquo;abode of the gods&rsquo;, perhaps because of the amazing number of shrines of every shape and size on every street. Here in the valley, Hinduism and Buddhism have co-existed for centuries, the two religions mingling with each other and sometimes seemingly inseparable. Naturally, the valley tours take you to the major temples and stupas with visits to palaces and museums in between.</p>\r\n<p>The cultural and religious affluence of Kathmandu is indescribable in mere words. The small city resided by almost a million people is also a home to four UNESCO world heritage sites in addition to other countless religious and historical sites. Tourists can visit the Kathmandu Durbar square where the great Malla rulers once lived centuries ago. Visitors can marvel at the architectures of the bygone times unique to Nepal decorated with ornately designed woodcrafts accentuating the religious significance in the lives of ancients and the amount of humility they showed to nature and the gods. They can visit the famous &lsquo;the monkey temple&rsquo;, the Bouddhanath and the majestic Pashupatinath temple. Tourists can wander in the streets without any fear among the common folks and enjoy the city. The weaves through the endless concrete structures and marketplace with the people shuffling continuously minding their own business. They can shop at the famous Thamel marketplace and enjoy its nightlife among other things to do here, too.</p>\r\n<p>Kathmandu is one and only city in the world that consists of seven world heritage sites around. It consists of world-famous cultural sites like Pashupatinath temple, Swayambhunath, Boudhanath, Buddhanilkantha, Changunarayan, Basantapur Durbar Square and many more.</p>\r\n<p>Kathmandu is one of those places in the world whose reputation precedes itself. Safely protected by the girdle of mighty green hills, the Kathmandu valley is a land culturally, religiously and historically sumptuous. It is a place where the god lives; it is a city of temples, stupas and innumerable religious monuments; it is a capital of history where ancients resided; and above all, it is a land of peace and cheerfulness where prayers are continuously chanted, and markets filled with joyous laughter.</p>', '10_1.jpg', ' 10_2.jpg', ' 10_3.jpg', '10_4.png', '', 'kathmandu', 'temple', 'religious place', 'tourist destination', 'world heritage', 0, 0, 0, 0, 0, 0),
(11, 'Manang & Mustang: The Tale of Two Heaven', 'Niraj Giri', '2022-10-09', '<p>Manang district is located at an elevation of 3519 m above sea level. The magnificent fusion of numerous mountain peaks, glaciers, passes, valleys and human settlement make it a wonderful place. Our blog is a brief information abour attractions of Manang, Nepal. Manang is surrounded by Gorkha and Lamjung in the east, Mustang and Lamjung in the west, Mustang, Gorkha and Tibet in the north and Parbat, Kaski, Lamjung and Mustang in the south. It is known as the land beyond the mountains.</p>\r\n<p>Mustang lies at an altitude of 3,840 meters in the North-Western part of Nepal. Annapurna and Nilgiri mountain range are extended across the northern part. This beautiful land is contrasted into two parts i.e. Upper mustang and lower mustang. Mustang is an arid trans-Himalayan region with a lot of attractions. The diversity in culture, traditions and the geography itself make it a wonderful piece of nature on the planet. There are a lot of places to visit in the Mustang region of Nepal. There are a lot of facts and attractions in the Mustang region of Nepal.</p>\r\n<p>Towering rock cliffs, hidden walled cities, ancient monasteries, royal palaces, chortens and what not. Basically, the Manang Mustang tour package is a whole bunch of adventure and exploration of stunning places. It&rsquo;s as exciting as it gets with far-flung beauty spots and dramatic countryside views.</p>\r\n<p>Manang and Mustang regions offer the finest trekking experience. The spectacular views, sceneries and astounding natural beauty make a wonderful place to visit. The trekking in the Manang and Mustang region offers a wonderful experience. It is full of adventure. The trekking, or mountain biking, it lasts and ends up being an amazing lifetime experience in the beautiful terrains of Nepal.</p>', '11_1.jpg', ' 11_2.png', ' 11_3.jpg', '11_4.jpg', '11_5.png', 'manang', 'mustang', 'trekking', 'tourist destination', '', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `userId` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`userId`, `username`, `email`, `password`) VALUES
(1, 'Niraj Giri', 'niraj@gmail.com', '123'),
(3, 'Sandesh Ghimire', 'sandesh@gmail.com', '123'),
(8, 'Anmol Aran', 'anmol@gmail.com', '123'),
(15, 'Sabij Soti', 'sabij@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `blogtable`
--
ALTER TABLE `blogtable`
  ADD PRIMARY KEY (`blogId`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogtable`
--
ALTER TABLE `blogtable`
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
