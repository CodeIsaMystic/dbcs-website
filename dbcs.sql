--TABLES
--POSTS TABLE 
CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_body` text NOT NULL,
  `post_source_link` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--USERS TABLE 
CREATE TABLE `users` (
  `user_id` int(2) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--PROSPECTS TABLE 
CREATE TABLE `prospects` (
  `prospect_id` int(11) NOT NULL,
  `prospect_name` varchar(255) NOT NULL,
  `prospect_email` varchar(255) NOT NULL,
  `prospect_phone` varchar(50) NOT NULL,
  `prospect_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prospect_address_nr` varchar(15) NOT NULL,
  `prospect_address_str` varchar(200) NOT NULL,
  `prospect_postal_code` varchar(100) NOT NULL,
  `prospect_city` varchar(100) NOT NULL,
  `coahing_subject` varchar(150) NOT NULL,
  `is_customer` boolean NOT NULL DEFAULT false,
  `ask_free_course` boolean NOT NULL DEFAULT false,
  `free_course` boolean NOT NULL DEFAULT false
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--PARTNERS TABLE 
CREATE TABLE `partners` (
  `partner_id` int(11) NOT NULL,
  `partner_company_name` varchar(255) NOT NULL,
  `partner_email` varchar(255) NOT NULL,
  `prospect_phone` varchar(50) NOT NULL,
  `partner_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `partner_city` varchar(100) NOT NULL,
  `is_web_business` boolean NOT NULL DEFAULT false,
  `have_deal` boolean NOT NULL DEFAULT false,
  `type_partnership` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--ADD PRIMARY KEYS
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `prospects`
  ADD PRIMARY KEY (`prospect_id`);

ALTER TABLE `partners`
  ADD PRIMARY KEY (`partner_id`);


--MODIFY PRIMARY KEYS FIELDS
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `prospects`
  MODIFY `prospect_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `partners`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;