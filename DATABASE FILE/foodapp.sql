-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 05:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinefoodphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(1, 'admin', 'onlinefood', 'admin@mail.com', '', '2024-03-09 16:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(1, 1, 'Burger', 'Indulge in the ultimate savory experience with our gourmet burgers. Juicy, perfectly grilled patties nestled between soft, freshly baked buns, ripe tomatoes, and our signature sauces.', 50.00, 'Burger1.jpg'),
(2, 1, 'Pizza', 'Transport your taste buds to Italy with our handcrafted pizzas. Picture a crispy, thin crust adorned with a luscious layer of tomato sauce and melted mozzarella. \r\n', 200.00, 'Pizza1.jpg'),
(3, 2, 'Pasta', 'Elevate your dining experience with our exquisite pasta dishes. Al dente pasta meets rich, flavorful sauces, creating a harmonious blend of textures and tastes.\r\n', 120.00, 'Pasta1.jpg'),
(4, 2, 'Palak Paneer', 'Immerse yourself in the world of Indian cuisine with our paneer delicacies. Succulent cubes of paneer are marinated in a blend of spices and cooked to perfection, delivering a burst of flavors with every bite. ', 220.00, 'Paneer1.jpg'),
(5, 3, 'Sandwich', 'Savor the simplicity and versatility of our gourmet sandwiches. Freshly baked bread envelops a medley of high-quality ingredients, creating a symphony of flavors and textures. Whether you\'re in the mood for a classic club ', 90.00, 'Sandwich1.jpg'),
(6, 3, 'Fried Rice', 'Embark on a culinary journey through Asia with our delectable fried rice options. Fragrant and perfectly seasoned, our fried rice dishes are a celebration of wok-tossed perfection. Our secret blend of sauces adds extra lay', 100.00, 'Biryani2.jpg'),
(7, 1, 'Chole Bhature', 'Chole refers to the curry and Bhatura is the crispy and soft fried bread. This dish is popular in Punjab and parts of North India.', 80.00, 'bhature.jpg'),
(8, 1, 'Pav Bhaji', 'Pav Bhaji – a spicy curry of mixed vegetables (bhaji) cooked in a special blend of spices and served with soft buttered pav.', 90.00, 'pav.jpg'),
(9, 2, 'Momos', 'Momos are usually served with a sauce known as achar influenced by the spices and herbs used within many South Asian cuisines.\r\n', 60.00, 'momos.jpg'),
(10, 2, 'Kadhai Paneer', 'Kadai Paneer is a spicy, warming, flavorful and super delicious dish made by cooking paneer & bell peppers in a fragrant, fresh ground spice powder', 220.00, 'kadhaipaneer.jpg'),
(11, 3, 'Spring Rolls', 'Lightly seasoned shredded cabbage, onion and carrots, wrapped in house made spring roll wrappers, deep fried to golden brown.', 70.00, 'spring.jpg'),
(12, 3, 'Chowmein ', 'manchurian pieces slow cooked with spring onions in our house made manchurian style sauce.', 100.00, 'chowmein.jpg'),
(13, 4, 'Samose', 'Samosa is a deep fried pastry with a spiced filling usually made with potatoes, spices and herbs.', 11.00, 'samosa.jpg'),
(14, 4, 'Paneer Pizza', 'Served with our traditional spicy queso and marinara sauce.', 190.00, 'paneerpizza.jpg'),
(15, 4, 'Masala Dosa', 'This classic Masala dosa recipe makes perfectly light, soft and crispy crepes stuffed with a savory, wonderfully spiced potato and onion filling.', 100.00, 'dosa.jpg'),
(16, 4, 'Momos', 'Momo dumplings are steamed, rather than boiled, and this gives them a different appearance to most Chinese dumplings, and also a different texture and taste.', 90.00, 'momo.jpg'),
(18, 0, 'idli', 'abcd ', 100.00, '65ed995648ab1.jpg'),
(19, 2, 'Idli', 'abcd', 100.00, '65ed9994ccbc6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(1, 1, 'Mukteshwari\'s Canteen', 'mukteshwari@gmail.com', '+911438228555', 'www.mukteshwari.com', '9am', '8pm', 'mon-sun', 'Near Vani Mandir', 'mukt.jpg', '2024-03-01 16:38:25'),
(2, 2, 'Spicy Bites', 'spicybites@gmail.com', '+917483329496', 'www.spiceybites.com', '9am', '9pm', 'Mon-Sun', 'Near Vani Mandir', 'spicey.jpg', '2024-03-04 13:06:48'),
(3, 3, 'Shanus Canteen', 'Shanus@gmail.com', '+91876549012', 'www.shanus.com', '9am', '8pm', 'mon-sun', 'New Market', 'shanus.jpg', '2024-02-29 17:33:24'),
(4, 4, 'Annapurna canteen', 'annapurna@gmail.com', '+917947426281', 'www.annapurna.com', '8am', '9pm', 'mon-sun', 'New Market', 'anna.jpg', '2024-03-01 16:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

CREATE TABLE `res_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(1, 'Indian', '2024-03-09 16:24:48'),
(2, 'Indian', '2024-03-09 16:25:00'),
(3, 'indian', '2024-03-09 16:25:11'),
(4, 'Indian', '2024-03-09 16:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(10, 'snehass', 'Sneha', 'sharma', 'sneha0416ss@gmail.com', '7367018451', '8d6d4f749f0674549784fbefc32c10a3', 'gram hostel,banasthali', 1, '2024-03-08 17:07:41'),
(11, 'vaidehi', 'vaidehi', 'singh', 'vaidehi9027@gmail.com', '9756088047', 'b60986ef66d99b772b99171725e62aca', 'banasthali', 1, '2024-03-09 13:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rs_id` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`, `rs_id`) VALUES
(18, 8, 'Palak Paneer', 1, 220.00, NULL, '2024-03-04 12:31:47', '2'),
(19, 9, 'Sandwich', 1, 90.00, NULL, '2024-03-04 19:55:28', '3'),
(20, 10, 'Burger', 2, 50.00, 'closed', '2024-03-10 11:31:18', '1'),
(25, 11, 'Spring Rolls', 2, 70.00, 'closed', '2024-03-10 10:40:22', '3'),
(29, 11, 'Burger', 2, 100.00, NULL, '2024-03-10 11:24:40', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `res_category`
--
ALTER TABLE `res_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `res_category`
--
ALTER TABLE `res_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
