
-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`userid`, `password`) VALUES
('Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` longblob NOT NULL,
  `createdat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(12) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `messageDate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--


-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` varchar(250) NOT NULL,
  `customerid` varchar(255) NOT NULL,
  `plant_id` varchar(255) NOT NULL,
  `unitPrice` int(12) NOT NULL,
  `quantity` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `status` varchar(255) NOT NULL,
  `createdat` varchar(255) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--


--
-- Table structure for table `customer_payments`
--

CREATE TABLE `customer_payments` (
  `id` int(12) NOT NULL,
  `customerid` varchar(255) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `orderdate` varchar(255) NOT NULL,
  `amount` int(12) NOT NULL,
  `method` varchar(255) NOT NULL,
  `accountTitle` varchar(255) NOT NULL,
  `accountNo` varchar(255) NOT NULL,
  `csv` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `createdat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `id` int(12) NOT NULL,
  `customerid` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `createdat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plants_cart`
--

CREATE TABLE `plants_cart` (
  `id` int(11) NOT NULL,
  `plantid` varchar(255) NOT NULL,
  `customerid` varchar(255) NOT NULL,
  `unitprice` int(12) NOT NULL,
  `qty` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plants_table`
--

CREATE TABLE `plants_table` (
  `plant_id` int(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `photo` longblob NOT NULL,
  `purchasing_price` int(12) NOT NULL,
  `sale_price` int(12) NOT NULL,
  `quantity` int(12) NOT NULL,
  `createdat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plants_table`
--


--
-- Table structure for table `sale_products`
--

CREATE TABLE `sale_products` (
  `title` varchar(255) NOT NULL,
  `plant_id` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_of_sale` varchar(255) NOT NULL,
  `id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_payments`
--
ALTER TABLE `customer_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plants_cart`
--
ALTER TABLE `plants_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plants_table`
--
ALTER TABLE `plants_table`
  ADD PRIMARY KEY (`plant_id`);

--
-- Indexes for table `sale_products`
--
ALTER TABLE `sale_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_payments`
--
ALTER TABLE `customer_payments`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plants_cart`
--
ALTER TABLE `plants_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `plants_table`
--
ALTER TABLE `plants_table`
  MODIFY `plant_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sale_products`
--
ALTER TABLE `sale_products`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
