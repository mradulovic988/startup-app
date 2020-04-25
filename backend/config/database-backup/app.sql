-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 11:39 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_image` varchar(100) NOT NULL,
  `work` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `current_city` varchar(30) NOT NULL,
  `home_town` varchar(30) NOT NULL,
  `relationship_status` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `website` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `bio` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `profile_image`, `work`, `education`, `phone_number`, `state`, `current_city`, `home_town`, `relationship_status`, `gender`, `hobbies`, `website`, `company`, `position`, `bio`, `date`, `user_role`) VALUES
(77, 'Marko', 'Radulovic', 'upss1988', 'upss1988@upss1988.com', '6ac896475166737a01ef9ebf7d5b21f5', '20190907_123001.jpg', 'Software Developer', 'CNC Programmer', '0606631540', 'Serbia', 'Smederevo', 'Smederevo', 'Married', 'Male', 'Programming', 'mlab-studio.com', 'M Lab Studio', 'CEO', 'I\\\'m a Back-End Developer for M Lab Studio in Serbia/Smederevo.\\r\\nI have a serious passion for backend software development.', '2020-04-21 22:20:49', 10),
(78, 'Marija', 'Stolic', 'majajoma88', 'majajoma88@majajoma88.com', '9f48e78caaf2b5227367918268907d53', '20190906_143612.jpg', 'Nurses', 'Medical school', '0642957846', 'Serbia', 'Smederevo', 'Smederevo', 'Married', 'Male', 'Photography', '', '', '', 'Love to manage all kind of photos', '2020-04-21 22:24:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_ads`
--

CREATE TABLE `users_ads` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `ads_name` varchar(255) NOT NULL,
  `ads_description` text NOT NULL,
  `ads_category` varchar(30) NOT NULL,
  `ads_image` varchar(255) NOT NULL,
  `ads_price` varchar(10) NOT NULL,
  `ads_location` varchar(30) NOT NULL,
  `ads_phone` varchar(20) NOT NULL,
  `ads_plan` varchar(30) NOT NULL,
  `ads_start_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ads_end_date` varchar(30) NOT NULL,
  `ads_pending` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_ads`
--

INSERT INTO `users_ads` (`id`, `user_id`, `ads_name`, `ads_description`, `ads_category`, `ads_image`, `ads_price`, `ads_location`, `ads_phone`, `ads_plan`, `ads_start_date`, `ads_end_date`, `ads_pending`) VALUES
(29, 60, 'ACER Predator Triton 900 PT917-71-76B3', 'Razbij kalupe – nabavi nov računar. Ova mašina je opremljena procesorom Intel Core i7 8. generacije i grafičkom karticom NVIDIA GeForce RTX 2080, tako da će te njen 4K IPS Touchscreen ekran ostaviti bez daha i ispuniti doslovno svaku tvoju želju. Ovo nije tipičan gejmerski laptop. Na bočnim stranama ekrana nalaze se dve Ezel Aero šarke napravljene sa CNC mašinom pomoću kojih laptop možeš da transformišeš u notebook, Ezel, ekran ili stoni računar. Prilagodi laptop svom stilu. Igre u 4K rezoluciji izgledaju sjajno. Kao i većina stvari. Pa kada započneš igru, tehnologija NVIDIA G-SYNC sa svojom sinhronizacijom kadrova obezbediće besprekornu zabavu koja glatko teče i dugo traje. Odvaži se i poveži preko priključaka HDMI 2.0, DisplayPort i USB-C Thunderbolt 3 još nekoliko monitora. Uz laptop ekran, to su ukupno četiri ekrana na raspolaganju za igru.\\r\\n', 'Computers', 'image5d382b4c6d9cd.png', '4800e', 'Serbia/Smederevo', '0606631540', 'Delux', '2020-04-18 19:10:45', '2020-04-27', 1),
(55, 73, 'Diapers', 'Look for the Target Clean symbol to identify diapers & wipes without unwanted additives.', 'House', '930a7c36-96aa-492c-a09d-0ee09b3662f6_1.2abb3e692c0ea4772f27ef6695c626d4.jpeg', '18e', 'Serbia/Smederevo', '026663154', 'Basic', '2020-04-19 23:36:40', '2020-04-24', 1),
(56, 60, 'Westinghouse 34″ UWQHD 100Hz AMD FreeSync Curved Gaming Monitor', 'Westinghouse 34″ Ultra Wide Quad High Definition AMD FreeSync Curved Gaming Monitor makes the ideal model for gamers looking to join the revolution of gaming. Features a refresh rate of 100Hz for smoother picture with less input latency. Curved screen design expands the field of view giving you an advantage to your game. With a 21:9 aspect ratio, you gain a wider viewing angle and reduce reflection. AMD FreeSync technology supports variable refresh rates to eliminate screen tearing, input lag and shuddering during gameplay. RGB Lights and Westinghouse Emblem Light sets the mood for that ultimate gaming experience.', 'Computers', 'WC34DX9019-Westinghouse-gaming-curved-monitor-34-inch-front-1.jpg', '420e', 'Serbia/Smederevo', '0606631540', 'Basic', '2020-04-20 22:59:52', '2020-04-25', 1),
(57, 78, 'iPhone 7 Plus 128Gb Sim Free - Jettblack boja - TOP', '128Gb velike memorije Uvezeno iz nemacke dana 23/01/20 cena je snizena cena je fixna iPhone 7 plus\\r\\n•128gb\\r\\n• ios 13\\r\\n• SIM FREE\\r\\n• opticko stanje 8.5/10 \\r\\n• otisak PRSTA radi\\r\\n• ekran 10/10 ima gorilu zasitiu\\r\\n• lajsne obod 9/10 solidno sacuvane\\r\\n• polovan testiran ispravan sa dobrom baterijom\\r\\n• oprema uz telefon original kabli i adapter i original kutija\\r\\n-NAPOMENA: -Cena je FIXNA u ZAMENI cena je veca\\r\\n• garancija : NE\\r\\nkontakt :0643014147\\r\\n\\r\\n\\r\\nuslovi garancije i pravo na reklamaciju:  \\r\\ngarancije i prava na reklamaciju nema ukoliko drugacije nije to u oglasu naznaceno.  \\r\\n\\r\\nGARANCIJA:  - NEMA \\r\\n1) na legalnost 100 godina od dana kupovine\\r\\n\\r\\n-ZAMENA:  \\r\\nzamena je moguca: vas uredjaj cenim po otkupnim cenama\\r\\n-Nudite zamenu? napisite:  \\r\\n1) model\\r\\n2) oznaka\\r\\n3)stanje ima tragova ili nema\\r\\n4)da li ima ostecenja\\r\\n5) koliko je star uredjaj/ima li garanciju\\r\\n6) ima li opremu\\r\\n7 ) da li ste prvi vlasnik\\r\\n8) koliko cenite vas uredjaj\\r\\nako mi bude interesantno kontakiracu vas ako ne iskuliracu vas ako vam jednom ne odgovorim nemojte biti uporni i dosadni\\r\\nDOSTAVA\\r\\nPreuzimanje licno dogovor\\r\\nSlanje: Bex, PTT, potrcko za beograd\\r\\n\\r\\n-Kontakt za vise informacije i dogovor iskljucivo na broj :  0643014147 viber poziv sms vacap u razumno vreme.  \\r\\n-Na KP poruke retko odgovaram!  \\r\\n\\r\\n-molim bez cenkanja preprodavac sam i prodaja nije hitna nikako bez nepotrebnog smaranja i suvisnih pitanja , hvala lepo prijatan dan i srecna kupovina\\r\\n\\r\\nnapomena : bavimo se internet prodajom od 2014 godine! ! !  ', 'Mobile Phone', 'maxresdefault.jpg', '280e', 'Serbia/ Belgrade', '0645548246', 'Basic', '2020-04-21 22:28:58', '2020-04-26', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_ads`
--
ALTER TABLE `users_ads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `users_ads`
--
ALTER TABLE `users_ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
