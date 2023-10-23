
-- ca migrate ouuuuuuuuuuuu ?????
-- tu fais php artisan migrate 
-- normal
-- j'rentre dans le temrinal
-- normal
-- && après 
-- tu run tt ca la 




INSERT INTO `collections` (`id`, `name`, `description`) VALUES
	(1, 'couture', 'Des sacs petits ou grands et des accessoires : des pochettes , des portefeuilles et même des paniers pour tout y ranger. \r\n\r\nRetrouvez ma collection creationsaom CHAQUE MODELE RESTE UNIQUE avec un choix de tissu ou matiere differente en fonction de mes envies.\r\n\r\nJe crée des nouveautés régulièrement. \r\n\r\nA vous de découvrir'),
	(2, 'tricot', 'Tricot Fait Main je vous propose deux laines.\r\n\r\n1) Fil doux 100% Polyester, chaud \r\n\r\n2) Laine douce 100% Merino chaude et extensible. \r\n\r\nCes deux laines ne piquent pas et sont lavables en machine.'),
	(3, 'durable', 'Fini les produits jetables, place aux articles écologiques TRICOTES MAIN ! Ce fil fantaisie aux couleurs vives et éclatantes a été spécialement conçu pour la fabrication d\'éponges ou de gants aux propriétés abrasives et réutilisables.');

INSERT INTO `sous_collections` (`id`, `name`, `collection_id`) VALUES
	(1, 'Gant Exfoliant', 3),
	(2, 'Eponge', 3),
	(3, 'Laine 100% MERINOS', 2),
	(4, 'Fil doux 100% polyester', 2),
	(5, 'Sacs', 1),
	(6, 'Accessoires', 1);

INSERT INTO `sous_categories` (`id`, `name`, `sous_collection_id`) VALUES
	(1, 'Protection jambes', 3),
	(2, 'Mitaines', 3),
	(3, 'Tour de cou', 4),
	(4, 'Couverture', 4),
	(5, 'Chaussons', 4),
	(6, 'Bonnet', 4),
	(7, 'Bolero /étole', 4),
	(8, 'Réversible', 5),
	(9, 'Pliable', 5),
	(10, 'Fermeture éclair', 5),
	(11, 'Portefeuilles ou porte monnaies', 6),
	(12, 'Pochettes ou trousses', 6),
	(13, 'Paniers ou corbeilles', 6);



INSERT INTO `variantes` (`id`, `name`) VALUES
	(1, 'Sac bob');




INSERT INTO `products` (`id`, `collection_id`, `sous_collection_id`, `sous_categorie_id`, `name`, `description`, `image`, `price`, `active`, `size`, `variante`) VALUES
	(2, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(3, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(4, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(5, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, 1, NULL),
	(6, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(7, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(8, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(9, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(10, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(11, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(12, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(13, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(14, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(15, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(16, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(17, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(18, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(19, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(20, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(21, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(22, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(23, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(24, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(25, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(26, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(27, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(28, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(29, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(30, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(31, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(32, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(33, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(34, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(35, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(36, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(37, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(38, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(39, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(40, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(41, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(42, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(43, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(44, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(45, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(46, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(47, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(48, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(49, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(50, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(51, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(52, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(53, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(54, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(55, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(56, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(57, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(58, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(59, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(60, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(61, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(62, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(63, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(64, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(65, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(66, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(67, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(68, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(69, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(70, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(71, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(72, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(73, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(74, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(75, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(76, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(77, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(78, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(79, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(80, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(81, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(82, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(83, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(84, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(85, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(86, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(87, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(88, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(89, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(90, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(91, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(92, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(93, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(94, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(95, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(96, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(97, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(98, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(99, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(100, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(101, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(102, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(103, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(104, 3, 1, NULL, 'Le sac oe', 'e', '/imgs/produits/sac-basque.jpg', 15, 1, NULL, NULL),
	(105, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(106, 2, 1, NULL, 'Le sac oe2', 'e', '/imgs/produits/pochette-patch.jpg', 15, 1, NULL, NULL),
	(107, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL),
	(108, 1, 1, NULL, 'Le sac oe1', 'e', '/imgs/produits/sac-kat.jpg', 15, 1, NULL, NULL);


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
	(1, 'ewen', 'ewen.david@gmail.com', NULL, '$2y$10$6rjqokM16fvqUbICmLlDAugVSfEroOqk4OeUJhcWrh98gV5Zhk1L2', '9HInCs5FQu0OfGD5OVOYDX9qhw6aCELhmWBETZAShjB3jJJuOmmqVxH6MJp2', 1, '2023-09-12 15:56:34', '2023-09-12 15:56:34'),
	(2, 'hamed', 'eeee@eee.fr', NULL, '$2y$10$L/duRcza8wapKhMcb0QFE.w7aga49T2uL7kLVD019v4qiMKdqoBOG', NULL, 0, '2023-09-12 16:06:22', '2023-09-12 16:06:22');


INSERT INTO `welcomes` (`description1`, `sous_description1`, `description2`, `sous_description2`, `description3`, `sous_description3`) VALUES
	('Tricot & Couture fait main', 'Mon savoir faire à votre portée', 'Tout est Disponible.', 'Ma devise : chaque pièce est unique.', 'En mains propre sur Nantes', 'Ou livraison via collisimo');


