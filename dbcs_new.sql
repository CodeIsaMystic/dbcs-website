--TABLES
--POSTS TABLE 
CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_body` text NOT NULL,
  `post_source_link` varchar(255) NULL,
  `post_image` varchar(255) NULL,
  `post_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--USERS TABLE 
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
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
  `prospect_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prospect_is_customer` boolean NOT NULL DEFAULT false,
  `had_free_course` boolean NOT NULL DEFAULT false,
  `date_started_plan` datetime NULL,
  `coahing_subject` varchar(100) NULL,
  `prospect_phone` int(11) NULL,
  `prospect_address_str` varchar(200) NULL,
  `prospect_address_nr` varchar(15) NULL,
  `prospect_postal_code` varchar(100) NULL,
  `prospect_city` varchar(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--PARTNERS TABLE 
CREATE TABLE `partners` (
  `partner_id` int(11) NOT NULL,
  `partner_company_name` varchar(255) NOT NULL,
  `partner_email` varchar(255) NOT NULL,
  `partner_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `have_deal` boolean NOT NULL DEFAULT false,
  `date_started_partnership` datetime NULL,
  `type_partnership` tinyint(1) NULL,
  `is_web_business` boolean NULL,
  `partner_logo` varchar(255) NULL,
  `partner_city` varchar(100) NULL
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