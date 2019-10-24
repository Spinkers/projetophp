-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 21-Out-2019 às 16:31
-- Versão do servidor: 8.0.13-4
-- versão do PHP: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ApSTt7HJYU`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Categoria`
--

CREATE TABLE `Categoria` (
  `idCategoria` int(3) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Categoria`
--

INSERT INTO `Categoria` (`idCategoria`, `tipo`) VALUES
(1, 'Básico'),
(2, 'Intermediário'),
(3, 'Avançado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Comentario`
--

CREATE TABLE `Comentario` (
  `idComentario` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `dataComentario` datetime NOT NULL,
  `conteudoComentario` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Postagem`
--

CREATE TABLE `Postagem` (
  `idPost` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idCategoria` int(3) NOT NULL,
  `título` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `conteúdo` text COLLATE utf8_unicode_ci NOT NULL,
  `dataPostagem` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Postagem`
--

INSERT INTO `Postagem` (`idPost`, `idUser`, `idCategoria`, `título`, `conteúdo`, `dataPostagem`) VALUES
(0, 0, 1, 'O que é PHP?', 'O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML. ', '2019-08-15'),
(1, 0, 2, 'O que são Sessions?', 'Suporte a sessões no PHP consiste de uma maneira de presevar dados através de acessos subsequentes. Isso permite a criação de aplicações mais personalizadas e aumenta o apelo do seu web site. Todas as informações estão na seção Session reference. ', '2019-08-15'),
(2, 0, 3, 'Testando novamente', 'Funcionou muito bem, me contratem, sou bom de mais!', '2019-08-15'),
(3, 0, 3, 'Como ser um mestre Jedi em PHP', 'É só andar com o Denilson', '2019-08-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Usuario`
--

CREATE TABLE `Usuario` (
  `idUser` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NULL,
  `sobrenome` varchar(50) COLLATE utf8_unicode_ci NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NULL,
  `senha` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `Usuario`
--

INSERT INTO `Usuario` (`idUser`, `nome`, `sobrenome`, `email`, `admin`, `senha`) VALUES
(0, 'Lucas', 'Lopes', 'admin@live.com', 1, '40028922');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `Comentario`
--
ALTER TABLE `Comentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `Postagem`
--
ALTER TABLE `Postagem`
  ADD PRIMARY KEY (`idPost`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`idUser`);

--
-- Constraints for dumped tables
--

--
-- AUTO_INCREMENT for table `Comentario`
--
ALTER TABLE `Comentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;


--
-- AUTO_INCREMENT for table `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `idCategoria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Postagem`
--
ALTER TABLE `Postagem`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Limitadores para a tabela `Comentario`
--
ALTER TABLE `Comentario`
  ADD CONSTRAINT `Comentario_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `Usuario` (`iduser`);

--
-- Limitadores para a tabela `Postagem`
--
ALTER TABLE `Postagem`
  ADD CONSTRAINT `Postagem_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `Usuario` (`iduser`),
  ADD CONSTRAINT `Postagem_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `Categoria` (`idcategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
