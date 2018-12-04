-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2018 at 09:12 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polymorphism`
--

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `preview` varchar(255) NOT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`id`, `title`, `date`, `short_content`, `content`, `author_name`, `preview`, `type`) VALUES
(1, 'France fuel protests: PM Philippe \'to halt fuel tax rise\'', '2018-12-04 09:21:06', 'The French government will suspend a fuel tax rise which has led to weeks of violent protests, local media report.\r\n\r\n', 'The protests have hit major French cities causing considerable damage for the past three weekends.\r\n\r\nPrime Minister Edouard Philippe sought compromise with the protesters, but they called off talks citing death threats from extremists in their ranks.\r\n\r\nThe "gilets jaunes" (yellow vests) protests have now grown to reflect more widespread anger at the government.\r\n\r\nThree people have died since the unrest began and the resulting violence and vandalism - notably when statues were smashed at the Arc de Triomphe last Saturday - have been widely condemned.\r\n\r\n"Yellow vests" are so called because they have taken to the streets wearing the high-visibility yellow clothing that is required to be carried in every vehicle by French law.\r\n\r\nThe movement has grown via social media and has supporters across the political spectrum.\r\n\r\nBall in Macron\'s court after violent protests\r\nJobseeker: Macron should help me find work\r\nWill Macron face down French fuel protesters?\r\nPresident Emmanuel Macron was elected two years ago with an overwhelming mandate for sweeping reform, but his popularity has fallen sharply in recent months.\r\n\r\nMr Macron has accused his political opponents of hijacking the movement in order to block the reforms.', 'Andrey', '/images/1.jpg', 'PhotoReportPublication'),
(2, 'Law officer says UK can cancel Brexit', '2018-12-04 09:23:18', 'The UK should be able to unilaterally cancel its withdrawal from the EU, according to a top European law officer.', 'The non-binding opinion was delivered by the the European Court of Justice\'s advocate general.\r\n\r\nA group of Scottish politicians has asked the court whether the UK can call off Brexit without the consent of other member states.\r\n\r\nThe Court of Justice (ECJ) will deliver its final ruling at a later date.\r\n\r\nThe advice from advocate general Manuel Campos Sanchez-Bordona comes as the House of Commons begins five days of debates on Prime Minister Theresa May\'s proposed Brexit deal, with a vote due to be held next Tuesday.\r\n\r\nIn a written statement, the ECJ said Mr Campos Sanchez-Bordona\'s opinion is that if a country decides to leave the EU, it should also have the power to change its mind during the two-year exit process specified in Article 50 of the EU treaty.\r\n\r\nAnd it should be able to do so without needing the consent of the other 27 member states.\r\n\r\nMay prepares to open crunch Brexit debate\r\nWhat happens if MPs reject Brexit deal?\r\nBrexit: A really simple guide\r\nWhile the advocate general\'s opinions are not binding, the court tends to follow them in the majority of its final rulings.\r\n\r\nThe anti-Brexit politicians and campaigners who have brought the case hope it will give MPs an extra option when considering whether to approve Mrs May\'s draft deal or not, because it could keep alive the prospect of calling off Brexit, potentially through another referendum.\r\n\r\nThe ECJ statement said the advocate general had proposed that the Court of Justice should declare that Article 50 allows the unilateral revocation of the notification of the intention to withdraw from the EU.\r\n\r\nIt added: "That possibility continues to exist until such time as the withdrawal agreement is formally concluded."\r\n\r\nThe UK is due to leave the EU on 29 March next year.\r\n\r\n', 'Vasya', '/images/2.png', 'ArticlePublication'),
(3, 'George HW Bush\'s service dog Sully pays touching last tribute', '2018-12-04 09:23:18', 'The labrador who worked as a service dog for President George HW Bush has been pictured resting beside his coffin, in a moving tribute.', 'Mr Bush, who served as the 41st US president between 1989 and 1993, died late on Friday at the age of 94.\r\n\r\nSully the dog is travelling with the casket on the flight from Texas to Washington and back this week.\r\n\r\nMr Bush\'s body is due to lie in state this week ahead of a day of national mourning.\r\n\r\nThe coffin is being flown from Texas to DC on board Air Force One - temporarily renamed Special Air Mission 41, in homage to the late president - and then back on Wednesday, with Sully accompanying the body throughout.', 'John', '/images/3.png', 'NewsPublication'),
(4, 'Donald Trump v the world: US tariffs in four charts', '2018-12-04 09:25:15', 'Donald Trump has agreed not to escalate his trade war with China, but many other countries have also been affected by the US president\'s America First trade policy.', 'From Spanish olives to Canadian steel, no corner of the world has been untouched by US trade tariffs - a tax on foreign products - since President Trump entered the White House.\r\n\r\nAlong the way, he has rewritten the rule book for how the US goes about the process of protecting its domestic trade.\r\n\r\nTrump and Xi: a temporary truce?\r\nHow are tariffs usually made?\r\nA tariff is a tax on a foreign product designed to protect domestic producers in an effort to boost local economies.\r\n\r\nBut under international trade laws, the US can\'t just implement them willy-nilly, they need to provide a reason why the tariff is necessary and investigate it fully.\r\n\r\nUntil recently, the vast majority of US tariffs were justified as countervailing and antidumping duties.\r\n\r\nCountervailing duties level the playing field when a foreign industry has been unfairly subsidised\r\nAntidumping duties level the playing field when a foreign industry has been flooding the US market with its products\r\nNot all investigations lead to tariffs - at some point during the process, the US may decide they don\'t have grounds to be implemented. But many do.\r\n\r\nNo stone unturned\r\nUnder President Trump, the Department of Commerce has begun 122 investigations into anti-dumping/countervailing duties.\r\n\r\nThese tariffs have targeted all corners of the globe, reaching 31 countries total and affecting some $12bn (£9.4bn) in imports.\r\n\r\nChina has borne the brunt of US scrutiny, with about 40% of countervailing/antidumping investigations targeting Chinese products ranging from aluminium alloy to rubber bands to silk ribbons.\r\n\r\nOther countries have found themselves in Mr Trump\'s crosshairs as well.', 'Andrey', '/images/4.png', 'NewsPublication'),
(5, '\'I don\'t want to burden my children\': Life in an Indian care home', '2018-12-04 09:25:15', 'For the elderly living in care homes, life is both calm and chaotic. Photographer Sayan Hazra spent more than a year chronicling the lives of residents at one such care home in southern India.\r\n\r\n', 'There are more than 100 million Indians over the age of 60, according to the 2011 census. And their future is uncertain as the Indian family has changed significantly in the past few decades. Large, joint families have increasingly given way to smaller, nuclear ones; and a large number of Indians no longer live in the same cities or the same country as their parents.\r\n\r\nImage copyrightSAYAN HAZRA\r\n"I can\'t hear or walk properly," says Sumati, 76, one of the residents in the care home. Ms Sumati, like the others, says she preferred to use her first name only to protect her identity.\r\n\r\nShe suffers from partial speech problems, diabetes and hypertension.\r\n\r\nShe spent most of her life taking care of her family but she says it\'s best for her to live in a care home now. Traditionally, children have cared for their ageing parents. But in the past decade, the number of elderly Indians who willingly or unwillingly spend the last few years of their lives in care homes has gone up.\r\n\r\n"What will I do if I go back home? I don\'t want to burden my children," adds Ms Sumati.\r\n\r\nImage copyrightSAYAN HAZRA\r\nEighty-year-old Parameswar, who moved to the care home five years ago, says he can\'t sleep well most nights.\r\n\r\n"When your family doesn\'t support you in your old age, these homes give you a place to stay and food to eat for the rest of your days," he says.\r\n\r\nHis wife, who he was married to for 50 years, died about three years ago. He often talks about how much he misses her.', 'John', '/images/5.jpeg', 'ArticlePublication');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
