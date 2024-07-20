SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patientname` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `appointmentDate` date NOT NULL,
  `appointmentTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `appointments` (`id`, `patientname`, `doctor`, `appointmentDate`, `appointmentTime`) VALUES
(7, 'Samhitha duggisetty', 'Dr. Chirra Bhakthavatsala Reddy (Cardiologists)', '2024-06-17', '09:30:00'),
(8, 'varshith', 'Dr. Bindu Menon (Neurologist)', '2024-06-17', '20:20:00'),
(9, 'suresh', 'Dr. Bindu Menon (Neurologist)', '2024-06-17', '10:30:00');

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `passw` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `users` (`id`, `username`, `passw`, `email`, `address`, `phone`) VALUES
(1, 'samhitha', '1234', 'kvzsammu@gmail.com', '26-2-178, 3rd street, tyagaraj nagar, vedayaplem, Nellore', '09493526260'),
(5, 'Ramu', '123456', 'ramu@gmail.com', 'sri nagar colony, nellore,andhra pradesh', '3456789234'),
(6, 'sita ', '123456', 'ramu@gmail.com', 'sri nagar colony, nellore,andhra pradesh', '3456789234'),
(7, 'varshith', '123456', 'ramu@gmail.com', 'sri nagar colony, nellore,andhra pradesh', '3456789234'),
(9, 'rithu', '123456', 'rithu@gmail.com', 'sri nagar colony, nellore,andhra pradesh', '3456789234');

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `price`, `user_id`) VALUES
(1, 'BLOOD TEST', 400.00, NULL),
(2, 'DOLO 650 TABLET', 30.07, NULL),
(3, 'MOOV', 150.00, NULL),
(4, 'BLOOD TEST', 400.00, NULL);


ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
  
  ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);
  
  ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  
  ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;