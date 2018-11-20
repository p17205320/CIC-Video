-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2016 at 02:11 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joshua_sleney`
--

-- --------------------------------------------------------

--
-- Table structure for table `film_entries`
--

CREATE TABLE `film_entries` (
  `Film_ID` int(11) NOT NULL,
  `Title` mediumtext COLLATE utf8_bin NOT NULL,
  `Year` int(11) NOT NULL,
  `Synopsis` mediumtext COLLATE utf8_bin NOT NULL,
  `Image` mediumtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `film_entries`
--

INSERT INTO `film_entries` (`Film_ID`, `Title`, `Year`, `Synopsis`, `Image`) VALUES
(1, 'Shrek', 2001, 'After his swamp is filled with magical creatures, an ogre agrees to rescue a princess for a villainous lord in order to get his land back.', '/Images/shrek.jpg'),
(2, 'The Lord of the Rings: The Return of the King', 2003, 'Gandalf and Aragorn lead the World of Men against Sauron''s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.', '/Images/lotr3.jpg'),
(3, 'Kingsman: The Secret Service', 2014, 'A spy organization recruits an unrefined, but promising street kid into the agency''s ultra-competitive training program, just as a global threat emerges from a twisted tech genius.', '/Images/MV5BMTkxMjgwMDM4Ml5BMl5BanBnXkFtZTgwMTk3NTIwNDE@._V1_SX640_SY720_.jpg'),
(4, 'Pulp Fiction', 1994, 'The lives of two mob hit men, a boxer, a gangster''s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.', '/Images/MV5BMTkxMTA5OTAzMl5BMl5BanBnXkFtZTgwNjA5MDc3NjE@._V1_SX640_SY720_.jpg'),
(5, 'Fight Club', 1999, 'An insomniac office worker, looking for a way to change his life, crosses paths with a devil-may-care soap maker, forming an underground fight club that evolves into something much, much more...', '/Images/MV5BMjIwNTYzMzE1M15BMl5BanBnXkFtZTcwOTE5Mzg3OA@@._V1_SX640_SY720_.jpg'),
(6, 'Forrest Gump', 1994, 'Forrest Gump, while not intelligent, has accidentally been present at many historic moments, but his true love, Jenny Curran, eludes him.', '/Images/MV5BMTI1Nzk1MzQwMV5BMl5BanBnXkFtZTYwODkxOTA5._V1_SX640_SY720_.jpg'),
(7, 'The Silence of the Lambs', 1991, 'A young F.B.I. cadet must confide in an incarcerated and manipulative killer to receive his help on catching another serial killer who skins his victims.', '/Images/MV5BMTQ2NzkzMDI4OF5BMl5BanBnXkFtZTcwMDA0NzE1NA@@._V1_SX640_SY720_.jpg'),
(8, 'The Good, the Bad and the Ugly', 1966, 'A bounty hunting scam joins two men in an uneasy alliance against a third in a race to find a fortune in gold buried in a remote cemetery.', '/Images/MV5BOTQ5NDI3MTI4MF5BMl5BanBnXkFtZTgwNDQ4ODE5MDE@._V1_SX640_SY720_.jpg'),
(9, 'The King''s Speech', 2010, 'The story of King George VI of the United Kingdom of Great Britain and Northern Ireland, his impromptu ascension to the throne and the speech therapist who helped the unsure monarch become worthy of it.', '/Images/MV5BMzU5MjEwMTg2Nl5BMl5BanBnXkFtZTcwNzM3MTYxNA@@._V1__SX1193_SY900_.jpg'),
(10, 'Man on Wire', 2008, 'A look at tightrope walker Philippe Petit''s daring, but illegal, high-wire routine performed between New York City''s World Trade Center''s twin towers in 1974, what some consider, "the artistic crime of the century."', '/Images/MV5BMTMxNTk3NDY1NV5BMl5BanBnXkFtZTcwNDk0ODg3MQ@@._V1_SX640_SY720_.jpg'),
(11, 'Harry Potter and the Sorcerer''s Stone', 2001, 'Rescued from the outrageous neglect of his aunt and uncle, a young boy with a great destiny proves his worth while attending Hogwarts School of Witchcraft and Wizardry.', '/Images/MV5BMTYwNTM5NDkzNV5BMl5BanBnXkFtZTYwODQ4MzY5._V1_SX640_SY720_.jpg'),
(12, 'The Killing', 1956, 'Crooks plan and execute a daring race-track robbery.', '/Images/MV5BMTg1NjEwOTI0Nl5BMl5BanBnXkFtZTcwODQ2MjM2NQ@@._V1._CR8,22,317,462__SX1193_SY900_.jpg'),
(13, 'Shaun of the Dead', 2004, 'A man decides to turn his moribund life around by winning back his ex-girlfriend, reconciling his relationship with his mother, and dealing with an entire community that has returned from the dead to eat the living.', '/Images/MV5BMTU2NjA0NDk0NV5BMl5BanBnXkFtZTcwOTA0OTQzMw@@._V1_SX640_SY720_.jpg'),
(14, '8 Mile', 2002, 'A young rapper, struggling with every aspect of his life, wants to make it big but his friends and foes make this odyssey of rap, harder than it may seem.', '/Images/MV5BMTU2MTgyOTk3MF5BMl5BanBnXkFtZTYwOTg2NTI5._V1_SX640_SY720_.jpg'),
(15, 'Willy Wonka & the Chocolate Factory', 1971, 'A poor boy wins the opportunity to tour the most eccentric and wonderful candy factory of all.', '/Images/MV5BMjM1NTg4NTI4MF5BMl5BanBnXkFtZTgwMjI3NjMxMDE@._V1_SX640_SY720_.jpg'),
(16, 'Memento', 2000, 'A man creates a strange system to help him remember things; so he can hunt for the murderer of his wife without his short-term memory loss being an obstacle.', '/Images/MV5BMTc4MjUxNDAwN15BMl5BanBnXkFtZTcwMDMwNDg3OA@@._V1_SX640_SY720_.jpg'),
(17, 'Blade Runner', 1982, 'A blade runner must pursue and try to terminate four replicants who stole a ship in space and have returned to Earth to find their creator.', '/Images/MV5BMTA4MDQxNTk2NDheQTJeQWpwZ15BbWU3MDE2NjIyODk@._V1_SX640_SY720_.jpg'),
(18, 'Rocky', 1976, 'Rocky Balboa, a small-time boxer gets a supremely rare chance to fight the heavy-weight champion, Apollo Creed, in a bout in which he strives to go the distance for his self-respect.', '/Images/MV5BMTY5MDMzODUyOF5BMl5BanBnXkFtZTcwMTQ3NTMyNA@@._V1_SX640_SY720_.jpg'),
(19, 'The Imitation Game', 2014, 'During World War II, mathematician Alan Turing tries to crack the enigma code with help from fellow mathematicians.', '/Images/MV5BNDkwNTEyMzkzNl5BMl5BanBnXkFtZTgwNTAwNzk3MjE@._V1_SX640_SY720_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `film_genre`
--

CREATE TABLE `film_genre` (
  `Film_Genre_ID` int(11) NOT NULL,
  `Genre` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `film_genre`
--

INSERT INTO `film_genre` (`Film_Genre_ID`, `Genre`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Animation'),
(4, 'Biography'),
(5, 'Comedy'),
(6, 'Crime'),
(7, 'Documentary'),
(8, 'Drama'),
(9, 'Family'),
(10, 'Fantasy'),
(11, 'Film-Noir'),
(12, 'History'),
(13, 'Horror'),
(14, 'Music'),
(15, 'Musical'),
(16, 'Mystery'),
(17, 'Romance'),
(18, 'Sci-Fi'),
(19, 'Sport'),
(20, 'Thriller'),
(21, 'War'),
(22, 'Western');

-- --------------------------------------------------------

--
-- Table structure for table `film_genre_bridge`
--

CREATE TABLE `film_genre_bridge` (
  `Bridge_ID` int(11) NOT NULL,
  `Film_ID` int(11) NOT NULL,
  `Film_Genre_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `film_genre_bridge`
--

INSERT INTO `film_genre_bridge` (`Bridge_ID`, `Film_ID`, `Film_Genre_ID`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 5),
(4, 2, 2),
(5, 2, 8),
(6, 2, 10),
(7, 3, 1),
(8, 3, 2),
(9, 3, 5),
(10, 4, 6),
(11, 4, 8),
(12, 5, 8),
(13, 6, 8),
(14, 6, 17),
(15, 7, 6),
(16, 7, 8),
(17, 7, 20),
(18, 8, 22),
(19, 9, 4),
(20, 9, 8),
(21, 9, 12),
(22, 10, 4),
(23, 10, 6),
(24, 10, 7),
(25, 11, 2),
(26, 11, 9),
(27, 11, 10),
(28, 12, 6),
(29, 12, 11),
(30, 12, 20),
(31, 13, 5),
(32, 13, 13),
(33, 14, 8),
(34, 14, 14),
(35, 15, 9),
(36, 15, 10),
(37, 15, 15),
(38, 16, 16),
(39, 16, 20),
(40, 17, 18),
(41, 17, 20),
(42, 18, 8),
(43, 18, 19),
(44, 19, 4),
(45, 19, 8),
(46, 19, 21);

-- --------------------------------------------------------

--
-- Table structure for table `film_reviews`
--

CREATE TABLE `film_reviews` (
  `Review_ID` int(11) NOT NULL,
  `Film_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Title` text COLLATE utf8_bin NOT NULL,
  `Rating` int(11) NOT NULL,
  `Content` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `film_reviews`
--

INSERT INTO `film_reviews` (`Review_ID`, `Film_ID`, `User_ID`, `Title`, `Rating`, `Content`) VALUES
(1, 1, 1, 'Shrek-tacular', 9, 'Really enjoyed it'),
(2, 3, 4, 'It is fun', 8, 'The film was fun. The action scenes were fresh! yeah, cool. 10/10 oops i mean 8/10');

-- --------------------------------------------------------

--
-- Table structure for table `game_entries`
--

CREATE TABLE `game_entries` (
  `Game_ID` int(11) NOT NULL,
  `Title` text CHARACTER SET latin1 NOT NULL,
  `Year` int(11) NOT NULL,
  `Synopsis` text CHARACTER SET latin1 NOT NULL,
  `Image` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `game_entries`
--

INSERT INTO `game_entries` (`Game_ID`, `Title`, `Year`, `Synopsis`, `Image`) VALUES
(1, ' Dark Messiah of Might and Magic', 2006, ' Dark Messiah of Might & Magic puts players in a first-person perspective, allowing them to immerse themselves in the legendary Might and Magic universe as never before. It is also the world''s first fantasy action game to feature a complete first-person combat system. It takes full advantage of the Source Engine''s exceptional technological enhancements in areas such as character animation, advanced AI, real-world physics and shader-based rendering. ', '/Images/846003-dark_messiah_of_might_and_magic_pc.jpg'),
(2, 'Bionic Commando (2009)', 2009, 'The first true sequel to the classic 1988 Nintendo Entertainment System original, Bionic Commando sees the return of the bionically-enhanced Nathan "Rad" Spencer, voiced by Mike Patton, the former lead singer of Faith No More. Time has not been kind to Spencer: 10 years after his heroic defeat of the Imperials in the original game, he has been betrayed by the government he swore to serve, imprisoned for crimes he didn''t commit, and sentenced to death. On the very day of Spencer''s execution, terrorists detonate a massive experimental weapon in Ascension City, unleashing an intense earthquake that has turned the city into rubble and wiped out its population. With the terrain in ruins and the city''s air defense grid now in the control of a massive terrorist force whose goal remains unclear, the FSA have only one option left - a behind-the-lines assault. The perfect job for a Bionic Commando. Bionic Commando transposes the swing-and-shoot gameplay of the 8-bit original to a stunning 3D environment of towering buildings, suspended roadways and monorails, deep canyons and sheer rock faces, where every environment is scalable using swinging, scaling, climbing and wall-walking techniques.', '/Images/1824020-box_bioniccom.png'),
(3, 'Counter Strike: Global Offensive', 2012, 'Counter-Strike: Global Offensive features new maps, characters, and weapons and \r\ndelivers updated versions of the classic CS content.', '/Images/cs.jpg'),
(4, 'Second Life', 2003, 'Second Life is an online digital world, built, shaped, and owned by its participants. Create a shared reality in a world full of people, activities, adventure, and fun. If you are a designer, programmer, or inventor you will be blown away by the variety of opportunities Second Life provides.Second Life is an online digital world, built, shaped, and owned by its participants. Create a shared reality in a world full of people, activities, adventure, and fun. If you are a designer, programmer, or inventor you will be blown away by the variety of opportunities Second Life provides. Create beautiful scripted 3D objects in a totally live online environment - from weapons to clothing lines to motorcycles. Explore a rapidly changing and expanding world simulated on over 100 servers (with new land added almost daily), containing hundreds of thousands of user-created objects, daily and nightly hosted events, games to play, and people to meet. Buy and sell land, create a business, or exchange virtual for real currency. It’s up to you. Second Life is yours to imagine and inhabit.', '/Images/secondlife.jpg'),
(5, 'Shovel Knight', 2015, ' Shovel Knight is a sweeping classic action adventure game with awesome gameplay, memorable characters, and an 8-bit retro aesthetic. It''s a hot mashup of new and old! You play as the eponymous Shovel Knight, a small knight with a huge quest. Shovel Knight has come to this land with two goals: to defeat the evil Enchantress and quest for his lost beloved. He wields a Shovel Blade: a multipurpose weapon whose techniques have now been lost to the ages. Always honest and helpful, Shovel Knight is a shining example of the code of Shovelry: Slash Mercilessly and Dig Tirelessly! ', '/Images/9200000048340329.jpg'),
(6, 'Grow Home', 2015, 'Feel the freedom of unbounded climbing as you take control of BUD, a procedurally animated robot on a quest to save his planet. Create your own path through an alien world as you control and ride a giant plant on a vertical journey to the stars.', '/Images/Grow_home_box_art,_Feb_2015.jpg'),
(7, 'Sonic the Hedgehog (2006)', 2006, 'Sonic celebrates his 15th anniversary by blazing his way onto the next-generation consoles, with his first adventure set in the human world. Featuring interactive 3D environments and a large cast of returning and new characters, get ready for the reinvention of Sonic The Hedgehog, in hisSonic celebrates his 15th anniversary by blazing his way onto the next-generation consoles, with his first adventure set in the human world. Featuring interactive 3D environments and a large cast of returning and new characters, get ready for the reinvention of Sonic The Hedgehog, in his most intense, high velocity escapade to date.', '/Images/Sonic_the_Hedgehog_Next-Gen_Box_Art.JPG'),
(8, 'Streets of Rage 2', 1992, 'Streets of Rage 2 (known in Europe as Streets of Rage II and known in Japan as Bare Knuckle II: Shitou no Chinkon Uta ("The Requiem of the Deadly Battle")) is a 2D side-scrolling brawler developed and published by Sega for the Sega Mega Drive/Genesis on December 20, 1992.', '/Images/2224351-box_sor2.png');

-- --------------------------------------------------------

--
-- Table structure for table `game_genre`
--

CREATE TABLE `game_genre` (
  `Game_Genre_ID` int(11) NOT NULL,
  `Genre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_genre`
--

INSERT INTO `game_genre` (`Game_Genre_ID`, `Genre`) VALUES
(1, 'Action'),
(2, 'Platformer'),
(3, 'Shoot em up'),
(4, 'First Person Shooter'),
(5, 'Third Person Shooter'),
(6, 'Fighting'),
(7, 'Beat em up'),
(8, 'Action-adventure'),
(9, 'Stealth'),
(10, 'Survival horror'),
(11, 'Adventure'),
(12, 'Text adventure'),
(13, 'Graphic adventure'),
(14, 'Visual novel'),
(15, 'Role-playing'),
(16, 'Action RPG'),
(17, 'MMORPG'),
(18, 'Roguelike'),
(19, 'Tactical RPG'),
(20, 'Sandbox RPG'),
(21, 'Simulation'),
(22, 'Strategy'),
(23, 'Real-time strategy'),
(24, 'Tower defense'),
(25, 'Turn-based strategy'),
(26, 'Sports'),
(27, 'Racing'),
(28, 'Casual'),
(29, 'Music'),
(30, 'Party'),
(31, 'Trivia'),
(32, 'Puzzle');

-- --------------------------------------------------------

--
-- Table structure for table `game_genre_bridge`
--

CREATE TABLE `game_genre_bridge` (
  `Game_ID` int(11) NOT NULL,
  `Game_Genre_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_genre_bridge`
--

INSERT INTO `game_genre_bridge` (`Game_ID`, `Game_Genre_ID`) VALUES
(1, 1),
(1, 16),
(1, 15),
(2, 1),
(2, 8),
(3, 1),
(3, 4),
(4, 28),
(4, 6),
(4, 30),
(4, 15),
(5, 1),
(5, 2),
(6, 1),
(6, 8),
(6, 11),
(7, 1),
(7, 8),
(7, 11),
(7, 2),
(8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `game_platform`
--

CREATE TABLE `game_platform` (
  `Game_Platform_ID` int(11) NOT NULL,
  `Platform` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `game_platform`
--

INSERT INTO `game_platform` (`Game_Platform_ID`, `Platform`) VALUES
(1, 'PC'),
(4, 'Sony PlayStation 4'),
(5, 'Xbox One'),
(6, 'Xbox 360'),
(7, 'Sony PlayStation 3'),
(8, 'Sony PlayStation 2'),
(9, 'Sony PlayStation 1'),
(10, 'Xbox Original'),
(11, 'Nintendo Wii-U'),
(12, 'Nintendo Wii'),
(13, 'Nintendo 3DS'),
(14, 'Nintendo DS'),
(15, 'Nintendo Gameboy Advance'),
(16, 'Nintendo Gameboy'),
(17, 'Sony Playstation Vita'),
(18, 'Sony PlayStation Portable'),
(19, 'Sega Dreamcast'),
(20, 'Sega Saturn'),
(21, 'Nintendo Gamecube'),
(22, 'Nintendo 64'),
(23, 'Nintendo SNES'),
(24, 'Nintendo NES'),
(25, 'Sega Megadrive'),
(26, 'Sega Master System'),
(27, 'Sega GameGear');

-- --------------------------------------------------------

--
-- Table structure for table `game_platform_bridge`
--

CREATE TABLE `game_platform_bridge` (
  `Game_ID` int(11) NOT NULL,
  `Game_Platform_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `game_platform_bridge`
--

INSERT INTO `game_platform_bridge` (`Game_ID`, `Game_Platform_ID`) VALUES
(1, 1),
(2, 1),
(2, 7),
(2, 6),
(3, 1),
(3, 7),
(3, 6),
(4, 1),
(5, 13),
(5, 11),
(5, 1),
(5, 7),
(5, 17),
(5, 5),
(6, 1),
(6, 4),
(7, 7),
(7, 6),
(8, 27),
(8, 26),
(8, 25);

-- --------------------------------------------------------

--
-- Table structure for table `game_reviews`
--

CREATE TABLE `game_reviews` (
  `Review_ID` int(11) NOT NULL,
  `Game_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Rating` int(11) NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_reviews`
--

INSERT INTO `game_reviews` (`Review_ID`, `Game_ID`, `User_ID`, `Title`, `Rating`, `Content`) VALUES
(1, 3, 4, 'I have 2000+ hours in this game', 10, 'HELP ME I CAN''T STOP PLAYING'),
(2, 4, 4, 'WE LIKE TO PARTY', 2, 'BUT THE PARTY ISN''T HERE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Username` text COLLATE utf8_bin NOT NULL,
  `Password` text COLLATE utf8_bin NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Username`, `Password`, `IsAdmin`) VALUES
(1, 'JoshuaNOTADMIN', '$2y$10$PTFgpBKTDgQr/moenU94lu.KJ9NkLDbIEcdx.a.WgsuL8iqmEDoF.', 0),
(2, 'JoshuaADMIN', '$2y$10$WSUSXbDrMMBcYRMmIXqOUeKUTLQP0UvJV7jC6oi6eFWLE.DNuVyc.', 1),
(3, 'Ayy', '$2y$10$JpRZ15UUlirWUTSqusskleY55iGyePVJbyDOoljuavIaH1jh42a5i', 0),
(4, 'Joshyb', '$2y$10$2MLNAjlAQYDcLLyISA5B4ua8dj3KlPPCMnmW81QaPfnzjm/hci6tG', 1),
(5, 'a', '$2y$10$DXGaof9lhsaAzibqvO9TLeFKxOOW.ktB9gvV5HPl2npct4Tr5JjE6', 0),
(6, 'b', '$2y$10$98rOpuQnQ/sFpeqE3Eg.G.zW1NC8P2Dx0e73bG10dAMr.zurfzgee', 0),
(7, 'c', '$2y$10$tjIlQIySl9dXboLdVoo7Bepj9XhhzYLlHMjKQJ0BVGYFCfvQyGdOq', 0),
(8, 'g', '$2y$10$6jJXqh31ua8C9V9403AUJ.NBOnuDUYnylW.ft/7spiiVqu0y/tbF.', 0),
(9, 'averylongname', '$2y$10$maj9amLNgPu46vHr4Zlsp.KlZr.kbV9cM8zmY3row99dTJTQ7.Ehq', 0),
(11, 'r', '$2y$10$E8H.VnhDKBLqQVYZW.1sGO.yHXy4hU7fYqYjrWGPuIgKu79fYdISy', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film_entries`
--
ALTER TABLE `film_entries`
  ADD PRIMARY KEY (`Film_ID`);

--
-- Indexes for table `film_genre`
--
ALTER TABLE `film_genre`
  ADD PRIMARY KEY (`Film_Genre_ID`);

--
-- Indexes for table `film_genre_bridge`
--
ALTER TABLE `film_genre_bridge`
  ADD PRIMARY KEY (`Bridge_ID`);

--
-- Indexes for table `film_reviews`
--
ALTER TABLE `film_reviews`
  ADD PRIMARY KEY (`Review_ID`);

--
-- Indexes for table `game_entries`
--
ALTER TABLE `game_entries`
  ADD PRIMARY KEY (`Game_ID`);

--
-- Indexes for table `game_genre`
--
ALTER TABLE `game_genre`
  ADD PRIMARY KEY (`Game_Genre_ID`);

--
-- Indexes for table `game_platform`
--
ALTER TABLE `game_platform`
  ADD PRIMARY KEY (`Game_Platform_ID`);

--
-- Indexes for table `game_reviews`
--
ALTER TABLE `game_reviews`
  ADD PRIMARY KEY (`Review_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film_entries`
--
ALTER TABLE `film_entries`
  MODIFY `Film_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `film_genre`
--
ALTER TABLE `film_genre`
  MODIFY `Film_Genre_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `film_genre_bridge`
--
ALTER TABLE `film_genre_bridge`
  MODIFY `Bridge_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `film_reviews`
--
ALTER TABLE `film_reviews`
  MODIFY `Review_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `game_entries`
--
ALTER TABLE `game_entries`
  MODIFY `Game_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `game_genre`
--
ALTER TABLE `game_genre`
  MODIFY `Game_Genre_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `game_platform`
--
ALTER TABLE `game_platform`
  MODIFY `Game_Platform_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `game_reviews`
--
ALTER TABLE `game_reviews`
  MODIFY `Review_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
