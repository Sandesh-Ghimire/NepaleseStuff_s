-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 08:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
(9, 'Nepal: 8th Wonder of the World', 'Niraj Giri', '2022-10-02', '<p>Beautiful Nepal is a land of friendly and engaging people, where deities mingle with mortals and magnificent temples, monasteries and historical monuments can be found at almost every turn. This is the home of Sagarmatha &ldquo;Goddess Mother of the World&rdquo;, the iconic Mount Everest, and her snow-capped counterparts making up the weather-beaten Himalayas.</p>\n<p>From eight of the fourteen tallest mountains in the world to the flourishing Terai plains of Jhapa, you will be forgiven for having your camera glued to your hands at all times. To take in the wonders of the Himalayas, we recommend travelling to Dhulikhel , one of the most popular destinations to view this chain of giants. Nepal&rsquo;s startling beauty is at its best in Pokhara , which has been the subject of many travel writers. Its pristine air, the spectacular backdrop of the snowy peaks of the Annapurna Range and the serene Phewa, Begnas and Rupa Lakes, makes this destination &lsquo;the Jewel of the Himalaya&rsquo;.</p>\n<p>For a walk on the wild side we suggest a Nepal tour to the Chitwan National Park . Chitwan translates to &ldquo;heart of the jungle&rdquo; and is a UNESCO World Heritage Site. The park is home to many endangered animals such as the one-horned rhino, royal Bengal tiger, gharial crocodile and fresh water gangetic dolphin. The Bardia National Park is the largest wildlife area in the Terai and protects 968 square kilometres of sal forest and grassland, including one of Asia&rsquo;s largest stretches of tiger habitat.</p>\n<p>A Nepal tour wouldn&rsquo;t be complete without exploring the fascinating Kathmandu Valley . Comprising of the three ancient cities of Kathmandu, Patan and Bhaktapur, the valley houses seven UNESCO World Heritage Sites and is also home to a myriad of monuments, sculptures, artistic temples and magnificent artworks.</p>\n<p>Be sure to visit Kathmandu&rsquo;s Durbar Square (the historic seat of royalty), home to the Hanuman Dhoka, named after the monkey god, Hanuman. Follow this exploration with a stop at the Patan Durbar Square, which is located in the heart of Patan City and consists of three main chowks (squares). The Sundari Chowk holds a masterpiece of stone architecture, the Royal Bath called Tushahity, which is a UNESCO World Heritage Monument.</p>\n<p>Adventure tourism is one of Nepal&rsquo;s biggest drawcards. This is the ideal destination for active travellers, offering activities for nature lovers and adrenaline seekers. While trekking, mountaineering and game viewing have long been popular, visitors can now also enjoy excursions such as rafting, biking, fishing, hot air ballooning and even bungee jumping.</p>', '9_1.jpg', ' 9_2.jpg', ' 9_3.png', '9_4.jpg', '9_5.jpg', 'nepal', 'nepalese', 'beautiful place', 'tourist destination', '', 41, 112, 0, 1, 3, 0),
(10, 'Kathmandu: The City of Temples', 'Niraj Giri', '2022-10-09', '<p>Kathmandu Valley was once known as the &lsquo;abode of the gods&rsquo;, perhaps because of the amazing number of shrines of every shape and size on every street. Here in the valley, Hinduism and Buddhism have co-existed for centuries, the two religions mingling with each other and sometimes seemingly inseparable. Naturally, the valley tours take you to the major temples and stupas with visits to palaces and museums in between.</p>\r\n<p>The cultural and religious affluence of Kathmandu is indescribable in mere words. The small city resided by almost a million people is also a home to four UNESCO world heritage sites in addition to other countless religious and historical sites. Tourists can visit the Kathmandu Durbar square where the great Malla rulers once lived centuries ago. Visitors can marvel at the architectures of the bygone times unique to Nepal decorated with ornately designed woodcrafts accentuating the religious significance in the lives of ancients and the amount of humility they showed to nature and the gods. They can visit the famous &lsquo;the monkey temple&rsquo;, the Bouddhanath and the majestic Pashupatinath temple. Tourists can wander in the streets without any fear among the common folks and enjoy the city. The weaves through the endless concrete structures and marketplace with the people shuffling continuously minding their own business. They can shop at the famous Thamel marketplace and enjoy its nightlife among other things to do here, too.</p>\r\n<p>Kathmandu is one and only city in the world that consists of seven world heritage sites around. It consists of world-famous cultural sites like Pashupatinath temple, Swayambhunath, Boudhanath, Buddhanilkantha, Changunarayan, Basantapur Durbar Square and many more.</p>\r\n<p>Kathmandu is one of those places in the world whose reputation precedes itself. Safely protected by the girdle of mighty green hills, the Kathmandu valley is a land culturally, religiously and historically sumptuous. It is a place where the god lives; it is a city of temples, stupas and innumerable religious monuments; it is a capital of history where ancients resided; and above all, it is a land of peace and cheerfulness where prayers are continuously chanted, and markets filled with joyous laughter.</p>', '10_1.jpg', ' 10_2.jpg', ' 10_3.jpg', '10_4.png', '', 'kathmandu', 'temple', 'religious place', 'tourist destination', 'world heritage', 5, 7, 0, 0, 1, 0),
(11, 'Manang & Mustang: The Tale of Two Heaven', 'Niraj Giri', '2022-10-09', '<p>Manang district is located at an elevation of 3519 m above sea level. The magnificent fusion of numerous mountain peaks, glaciers, passes, valleys and human settlement make it a wonderful place. Our blog is a brief information abour attractions of Manang, Nepal. Manang is surrounded by Gorkha and Lamjung in the east, Mustang and Lamjung in the west, Mustang, Gorkha and Tibet in the north and Parbat, Kaski, Lamjung and Mustang in the south. It is known as the land beyond the mountains.</p>\r\n<p>Mustang lies at an altitude of 3,840 meters in the North-Western part of Nepal. Annapurna and Nilgiri mountain range are extended across the northern part. This beautiful land is contrasted into two parts i.e. Upper mustang and lower mustang. Mustang is an arid trans-Himalayan region with a lot of attractions. The diversity in culture, traditions and the geography itself make it a wonderful piece of nature on the planet. There are a lot of places to visit in the Mustang region of Nepal. There are a lot of facts and attractions in the Mustang region of Nepal.</p>\r\n<p>Towering rock cliffs, hidden walled cities, ancient monasteries, royal palaces, chortens and what not. Basically, the Manang Mustang tour package is a whole bunch of adventure and exploration of stunning places. It&rsquo;s as exciting as it gets with far-flung beauty spots and dramatic countryside views.</p>\r\n<p>Manang and Mustang regions offer the finest trekking experience. The spectacular views, sceneries and astounding natural beauty make a wonderful place to visit. The trekking in the Manang and Mustang region offers a wonderful experience. It is full of adventure. The trekking, or mountain biking, it lasts and ends up being an amazing lifetime experience in the beautiful terrains of Nepal.</p>', '11_1.jpg', ' 11_2.png', ' 11_3.jpg', '11_4.jpg', '11_5.png', 'manang', 'mustang', 'trekking', 'tourist destination', '', 10, 13, 0, 1, 0, 0),
(12, 'Explore Nepal', 'Niraj Giri', '2022-10-09', '<p>Explore Nepal if you want to discover what it feels like to be just one step away from heaven. Often referred to as the &ldquo;roof of the world&rdquo;, Nepal dazzles with unworldly landscapes and tempts trekkers, hikers, and adrenaline-junkies with spectacular views and the world&rsquo;s tallest peak. Standing proud among the clouds at an altitude of 8,848 m, Mount Everest is the country&rsquo;s star attraction.</p>\r\n<p>However, Nepal&rsquo;s magic doesn&rsquo;t hide only on its highest peaks. You will discover a country like no other where spirituality is embraced by every living soul and kindness reigns supreme. Nepalese people are friendly and gentle, always smiling, and ready to invite strangers into their homes for tea and conversation.</p>\r\n<p>The birthplace of Gautama Buddha, Nepal is visited by millions of Buddhists searching for enlightenment, serenity, and absolute peace. You will often find them at the UNESCO World Heritage Site of Lumbini, a temple complex where Buddha once lived. Hinduism too has a strong presence in Nepal and is beautifully illustrated through numerous Hindu temples.</p>\r\n<p>The fantastic white water rafting experiences prove that Nepal is so much more than just its colossal mountains. If you&rsquo;re up for an adventure, take on the swirling waters of the Marsyangdi River. If you&rsquo;re based in Kathmandu, plan your rafting adventure on the scenic Trisuli River. Many rafting adventures start in Pokhara, so make sure you choose your water adventure according to your level of experience and preferred location. Nepal has numerous waterways that promise memorable adventures and heart-racing experiences.</p>\r\n<p>If you love water adventures but you&rsquo;re not a big fan of whitewater rafting, you can always choose to peacefully float on the beautiful Phewa Lake in Pokhara. You can be the captain of your boat or hire someone to do the paddling for you and enjoy the beautiful views that frame the lake. Don&rsquo;t miss a tour of Barahi Mandir, an island situated in the middle of the lake.</p>', '12_1.jpg', ' 12_2.jpg', ' 12_3.jpg', '12_4.jpg', '12_5.jpg', 'nepal', 'travel', 'tourist destination', '', '', 14, 21, 0, 0, 0, 0),
(13, 'Feel the Thrill', 'Niraj Giri', '2022-10-12', '<p>Adventure, fun, exploration you can do all sorts of things. Trekking, mountain climbing, rafting, paragliding, these activities will imbue you with aliveness and daring; sightseeing, witnessing rare flora and fauna, exploring world heritage and ancient monuments will thrust your inner soul with delight and knowing traditional culture and simple lifestyle, witnessing exclusive festivals, will feel you with a sense of delight and warmth. There is nothing you can&rsquo;t achieve once you are here. Beauty, nature, culture, history, Nepal has everything to offer.</p>\r\n<p>Rafting is one of the best experience will get from Nepal, so you should try it. Rafting here is not just having a wild experience; you will also get an opportunity to see the beautiful hills, mountains, and traditional villages.</p>\r\n<p>It will be best to do rafting during autumn and spring season in Nepal. During these seasons, the water level is perfect; rapids are not so high or not so low. Also during these seasons, the environment gets very charming with crystal clear day, flowers blooming and very moderate temperate.</p>\r\n<p><span style=\"font-weight: 400;\">Summer in Nepal is quickly followed by monsoon. Heavy rainfall increases the water level and pace of rapids so rafting during this period might be prone to accident. Also, in winter with an already freezing temperature, playing with water won&rsquo;t give you a very best experience </span></p>\r\n<p>There are several rivers where you can have an experience of rafting. However, all those rivers aren&rsquo;t same, they have different speed and rapid, and they are rated as per the level of difficulty. The government of Nepal has permitted commercial rafting in several rivers, however not all the parts of the rivers are suitable for rafting, so rafting is done in the predetermined areas of a river by government. Bhote Koshi, Sun Koshi, Trisuli, Karnali, Seti, Marshyndi are some of the rivers where you can go rafting.</p>', '13_1.jpg', ' 13_2.jpg', ' 13_3.jpg', '', '', 'rafting', 'river', 'adventure', 'thrill', '', 5, 6, 0, 0, 0, 0),
(14, 'Himalayas in Nepal', 'Niraj Giri', '2022-10-12', '<p>A true trekker&rsquo;s paradise and home to the roof of the world, Nepal is a spectacularly diverse country that&rsquo;s home to some of the most beautiful mountain landscapes on the planet. Nepal contains 866 named mountains, the highest and most prominent of which is Mount Everest (Sagarmāthā), which at 8,848 meters (29,029 feet) in elevation, is the world&rsquo;s tallest mountain.</p>\r\n<p><br />Out of all the countries in the world, the mountains of Nepal need no introduction. Nepal is home to a substantial portion of the mighty Himalaya&mdash;the world&rsquo;s tallest mountain range.</p>\r\n<p><br />The Himalaya, which stretch across the entirety of Nepal and dominate the landscape in the northern third of the country, formed as the Indian plate collided with the Eurasian plate. Interestingly, the range is still rising to this day as the Indian plate continues to drift northward.</p>\r\n<p><br />Furthermore, Nepal is home to eight of the world&rsquo;s fourteen 8,000-meter peaks. These peaks, which are the tallest in the world, include:</p>\r\n<p><br />1. Mount Everest &ndash; 8,848 meters (29,029 feet)<br />2. Kanchenjunga &ndash; 8,586 meters (28,169 feet)<br />3. Lhotse &ndash; 8,516 meters (27,940 feet)<br />4. Makalu &ndash; 8,485 meters (27,939 feet)<br />5. Cho Oyu &ndash; 8,188 meters (26,864 feet)<br />6. Dhaulagiri I &ndash; 8,167 meters (26,795 feet)<br />7. Manaslu &ndash; 8,163 meters (26,781 feet)<br />8. Annapurna I &ndash; 8,091 meters (26,545 feet)</p>\r\n<p><br />In fact, the only 8,000-meter peaks that are not located at least partially in Nepal are:</p>\r\n<p><br />1. K2 &ndash; 8,611 meters (28,251 feet)<br />2. Nanga Parbat &ndash; 8,125 meters (26,657 feet)<br />3. Gasherbrum I &ndash; 8,080 meters (26,510 feet)<br />4. Broad Peak &ndash; 8,051 meters (26,414 feet)<br />5. Gasherbrum II &ndash; 8,034 meters (26,358 feet)<br />6. Shishapangma &ndash; 8,027 meters (26,335 feet)</p>', '14_1.jpg', ' 14_2.png', ' 14_3.jpg', '14_4.jpg', '14_5.jpg', 'himalayas', 'mountain', 'trekking', 'geography', '', 12, 9, 0, 1, 2, 0),
(15, 'Greenery in Nepal', 'Niraj Giri', '2022-10-12', '<p>The natural vegetation of Nepal follows the pattern of climate and altitude. A tropical, moist zone of deciduous vegetation occurs in the Tarai and the Churia Range. These forests consist mainly of khair (Acacia catechu), a spring tree with yellow flowers and flat pods; sissoo (Dalbergia sissoo), an East Indian tree yielding dark brown durable timber; and sal (Shorea robusta), an East Indian timber tree with foliage providing food for lac insects (which deposit lac, a resinous substance used for the manufacture of shellac and varnishes, on the tree&rsquo;s twigs). On the Mahābhārat Range, at elevations between 5,000 and 10,000 feet, vegetation consists of a mixture of many species, chiefly pines, oaks, rhododendrons, poplars, walnuts, and larch. Between 10,000 and 12,000 feet, fir mixed with birch, as well as rhododendron, abound. In the mid-mountain region of Nepal a fairly dense population has cleared all but the most inaccessible parts of the forest, which are restricted to areas of steep slopes and rocky terrain. Similarly, all readily accessible parts of valuable sal forest in the Tarai have been devastated by overcutting and depletive practices. The vast forested area below the timber line in the Great Himalaya Range bears some of the most valuable forests in Nepal, containing spruce, fir, cypress, juniper, and birch. Alpine vegetation occupies higher parts of the Great Himalaya Range. Just below the snow line, between 14,000 and 15,000 feet, grassy vegetation affords favourable grazing ground in summer.<br /><br />Agriculture&mdash;primarily the cultivation of rice, corn (maize), and wheat&mdash;engages most of Nepal&rsquo;s population and accounts for well over half of the country&rsquo;s export earnings. Yet agricultural productivity is very low. The low yields result from shortages of fertilizers and improved seed and from the use of inefficient techniques. Because only a tiny percentage of Nepal&rsquo;s cultivated land area is under irrigation, output depends upon the vagaries of the weather. Potatoes, sugarcane, and millet are other major crops. Cattle, buffalo, goats, and sheep are the principal livestock raised. On the whole, Nepal has a small surplus in food grains. There are, however, major dislocations in supply and demand. Periods of shortage between harvests of various crops occur in the mountain areas. At the same time, substantial amounts of food grain are moved to India from the Tarai. Because of the lack of adequate transportation, surplus food grain from the Tarai does not move north into the food deficit areas of the mid-mountain region. Some food grains move northward from the Tarai and the mountain areas into Tibet, however, despite a shortage in the mountain regions. The greatest potential for increases in agricultural production is in the Tarai. In the mid-mountain region the potential for increasing production is limited. Because of the high population concentration in this region, almost all land capable of cultivation is tilled. Increasing the cultivated land area by cutting into standing forests aggravates erosion and results in reduced yields and land losses by landslides. Major projects have been undertaken in an effort to halt soil erosion and deforestation.<br /><br />About one-third of Nepal&rsquo;s total area is forested; most of this area is state-owned. In spite of overcutting and poor management, timber represents one of the country&rsquo;s most valuable resources and is a major source of potential revenue. Exports of forest products constitute an important source of Indian rupees. Almost all timber is exported to India. The sawmills of the Timber Corporation of Nepal, a government-owned lumber-processing concern, supply Kathmandu Valley with construction and furniture wood</p>', '15_1.jpg', ' 15_2.jpg', ' 15_3.jpg', '15_4.jpg', '15_5.jpg', 'greenery', 'nepal', 'nature', '', '', 52, 7, 0, 2, 1, 0),
(24, 'Culture of Nepal', 'Niraj Giri', '2022-10-12', '<p>The culture of Nepal encompasses the various cultures belonging to the 125 distinct ethnic groups present in Nepal. The culture of Nepal is expressed through music and dance; art and craft; folklore; languages and literature; philosophy and religion; festivals and celebration; foods and drinks.<br /><br />As many as 123 languages are spoken in Nepal according to the 2011 census. Most of them belong to either the Indo-Aryan or the Tibeto-Burman language families. The major languages of the country (percent spoken as mother tongue) are Nepali (44.6%), Maithili (11.7%), Bhojpuri(6%), Tharu (5.8%), Tamang (5.1%), Nepal Bhasa (3.2%), Magar (3%) and Bajjika (3%), Magar (3%), and Doteli (3%). Nepali, written in Devanagari script, is the official national language and serves as lingua franca among Nepalese ethnolinguistic groups.<br />The 2011 census identified 81.6% of the population being Hindu. Buddhism was practiced by about 9% of the population. About 4.2% practice Islam and 3.6% of the population follows the indigenous Kirant religion. Christianity is practiced officially by less than 1.0%. Hindu and Buddhist traditions in Nepal go back more than two millennia. In Lumbini, Buddha was born, and Pashupatinath temple, Kathmandu, is an old and famous Shiva temple of Hindus. Nepal has several other temples and Buddhist monasteries, as well as places of worship of other religious groups. Traditionally, Nepalese philosophical thoughts are ingrained with the Hindu and Buddhist philosophical ethos and traditions, which include elements of Kashmir Shaivism, Nyingma school of Tibetan Buddhism, works of Karmacharyas of Bhaktapur, and tantric traditions. Tantric traditions are deep-rooted in Nepal, including the practice of animal sacrifices. Five types of animals, always male, are considered acceptable for sacrifice: water buffalo, goats, sheep, chickens, and ducks. Cows are very sacred animals and are never considered acceptable for sacrifice.<br /><br />Several of the festivals of Nepal last from one to several days. As a predominantly Hindu and Buddhist nation, most of the Nepalese festivals are religious ones. The festivals of Nepal have their roots in Hinduism as more than 80% of the population of the country is Hindu. Buddhism, the second-largest religion of the nation which accounts for 9% of the population, has influenced the cultural festivals of Nepal. Dashain or Vijaya Dashami is the longest and the most important festival of Nepal. Generally, Dashain falls in late September to mid-October, right after the end of the monsoon season. It is \"a day of Victory over Demons\". The Newars celebrate the festival as Mohani, Tihar or Dipawali, Holi, Saraswati Puja, Rakshabandhan, Janmashtami, Gai Jatra, Nag Panchami, Teej, Chhath, Kartik Poornima, Maghe Sankranti, or Makar Sankranti Maha Shivratri and Chhechu are widely celebrated important festivals of Nepal. New Years Day of the lunar calendar Nepal Sambat occurs in November. Several Jatras take place throughout the year and public holidays are declared in some regions.</p>', '24_1.jpg', ' 24_2.jpg', ' 24_3.jpg', '24_4.jpg', '', 'culture', 'tradition', 'language', 'religion', 'ethnicity', 16, 1, 0, 0, 0, 0),
(25, 'Cherrapunji of Nepal: Pokhara', 'Niraj Giri', '2022-10-13', '<p>Pokhara is considered the tourism capital of Nepal, being a base for trekkers undertaking the Annapurna Circuit through the Annapurna Conservation Area region of the Annapurna ranges in the Himalayas. The city is also home to many of the elite Gurkha soldiers, soldiers native to South Asia of Nepalese nationality recruited for the British Army, Nepalese Army, Indian Army, Gurkha Contingent Singapore, Gurkha Reserve Unit Brunei, UN peacekeeping forces and in war zones around the world.<br /><br />The nearby hills around Pokhara are covered by Gurung villages with few places belonging to Khas community. Small Magar communities are also present mostly in the southern outlying hills. Newar community is almost non-existent in the villages of outlying hills outside the Pokhara city limits.<br /><br />The city has a humid subtropical climate; however, the elevation keeps temperatures moderate. Temperatures in summer average between 25 and 35 &deg;C; in winter around &minus;2 to 15 &deg;C. Pokhara and nearby areas receive a high amount of precipitation. Lumle, 25 miles from Pokhara city center, receives the highest amount of rainfall (&gt; 5600 mm/year or 222 inches/year) in the country.[38] Snowfall is not observed in the valley, but surrounding hills experience occasional snowfall in the winter. Summers are humid and mild; most precipitation occurs during the monsoon season (June&ndash;September). Winter and spring skies are generally clear and sunny.[39] The highest temperature ever recorded in Pokhara was 38.5 &deg;C (101.3 &deg;F) on 4 May 2013, while the lowest temperature ever recorded was 0.5 &deg;C (32.9 &deg;F) on 13 January 2012.</p>', '25_1.jpg', ' 25_2.jpg', ' 25_3.jpg', '25_4.jpg', '25_5.jpg', 'pokhara', 'paragliding', 'lake', 'waterfall', 'trekking', 10, 4, 0, 1, 0, 0),
(26, 'Bunjee Jumping in Nepal', 'Niraj Giri', '2022-10-14', '<p>Bungee jumping is an action-filled recreational activity that involves head-first jumping from a tall structure with an elastic cord attached into participants feet. That tall structure can be a building, crane, bridge or even a helicopter.</p>\r\n<p>Nepal is adorned with beautiful views that make it a great place to indulge in bungee jumping. Bungee Jumping in Nepal is one of those activities that have gained wide popularity in the last few years at quite a fast rate. Nepal offers quite a lot of great views so it is perfect for bungee jumping here.</p>\r\n<p>In Nepal, you can bungee jump in two places: Bhote Koshi Gorge and Hemja, Pokhara.</p>\r\n<p>The cost of bunjee jumping is Nepal is as follows: For Nepalis, it is INR 5,500 per person. For Indians INR 8200 per person. For foreigners, it is INR 7200 per person.&nbsp;</p>\r\n<p>The jump is operated for only 4 days a week and it is on Saturday and Sunday, Wednesday and Friday.</p>', '26_1.jpg', ' 26_2.jpg', ' 26_3.jpg', '26_4.jpg', '', 'bunjee', 'adventure', 'outdoor', 'nepal', '', 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `featuredtable`
--

CREATE TABLE `featuredtable` (
  `blogId0` int(11) NOT NULL,
  `blogId1` int(11) NOT NULL,
  `blogId2` int(11) NOT NULL,
  `blogId3` int(11) NOT NULL,
  `blogId4` int(11) NOT NULL,
  `blogId5` int(11) NOT NULL,
  `blogId6` int(11) NOT NULL,
  `blogId7` int(11) NOT NULL,
  `blogId8` int(11) NOT NULL,
  `blogId9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featuredtable`
--

INSERT INTO `featuredtable` (`blogId0`, `blogId1`, `blogId2`, `blogId3`, `blogId4`, `blogId5`, `blogId6`, `blogId7`, `blogId8`, `blogId9`) VALUES
(0, 9, 10, 11, 12, 13, 14, 15, 24, 25);

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
-- Indexes for table `featuredtable`
--
ALTER TABLE `featuredtable`
  ADD PRIMARY KEY (`blogId0`);

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
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
