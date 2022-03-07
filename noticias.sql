--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id` int NOT NULL,
  `titulo` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `noticia` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `imagem_not` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int NOT NULL,
  `dataCadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;