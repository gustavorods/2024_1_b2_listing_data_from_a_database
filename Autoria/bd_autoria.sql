-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2024 at 09:41 PM
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
-- Database: `bd_autoria`
Create database `bd_autoria`;
use `bd_autoria`;
--

-- --------------------------------------------------------

--
-- Table structure for table `Autor`
--

CREATE TABLE `Autor` (
  `Cod_autor` int(11) NOT NULL,
  `NomeAutor` varchar(80) NOT NULL,
  `Sobrenome` varchar(80) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO Autor (Cod_autor, NomeAutor, Sobrenome, Email, Nasc) VALUES
(1, 'Carlos', 'Silva', 'carlos.silva@example.com', '1980-05-10'),
(2, 'Ana', 'Pereira', 'ana.pereira@example.com', '1975-11-22'),
(3, 'João', 'Souza', 'joao.souza@example.com', '1990-03-15'),
(4, 'Maria', 'Oliveira', 'maria.oliveira@example.com', '1985-07-08'),
(5, 'Luís', 'Costa', 'luis.costa@example.com', '1995-12-30'),
(6, 'Fernanda', 'Almeida', 'fernanda.almeida@example.com', '1982-08-25'),
(7, 'Paulo', 'Gomes', 'paulo.gomes@example.com', '1978-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `Autoria`
--

CREATE TABLE `Autoria` (
  `Cod_autor` int(11) NOT NULL,
  `Cod_livro` int(11) NOT NULL,
  `DataLancamento` date NOT NULL,
  `Editora` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO Autoria (Cod_autor, Cod_livro, DataLancamento, Editora) VALUES
(1, 1, '2020-01-01', 'Editora A'),
(2, 2, '2021-02-15', 'Editora B'),
(3, 3, '2019-03-20', 'Editora C'),
(4, 4, '2022-04-25', 'Editora D'),
(5, 5, '2023-05-30', 'Editora E'),
(6, 1, '2020-06-10', 'Editora A'),
(7, 2, '2021-07-15', 'Editora B'),
(1, 3, '2019-08-20', 'Editora C');

-- --------------------------------------------------------

--
-- Table structure for table `Livro`
--

CREATE TABLE `Livro` (
  `Cod_livro` int(11) NOT NULL,
  `Titulo` varchar(80) NOT NULL,
  `Categoria` varchar(50) NOT NULL,
  `ISBN` varchar(17) NOT NULL,
  `Idioma` varchar(30) NOT NULL,
  `QtdePag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO Livro (Cod_livro, Titulo, Categoria, ISBN, Idioma, QtdePag) VALUES
(1, 'Aventuras no Espaço', 'Ficção Científica', '978-3-16-148410-0', 'Português', 320),
(2, 'Mistério na Floresta', 'Suspense', '978-0-12-345678-9', 'Português', 280),
(3, 'História do Brasil', 'História', '978-1-23-456789-0', 'Português', 450),
(4, 'Aprendendo Python', 'Educação', '978-2-98-765432-1', 'Português', 600),
(5, 'Receitas de Família', 'Culinária', '978-4-56-123789-0', 'Português', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Autor`
--
ALTER TABLE `Autor`
  ADD PRIMARY KEY (`Cod_autor`);

--
-- Indexes for table `Livro`
--
ALTER TABLE `Livro`
  ADD PRIMARY KEY (`Cod_livro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Autor`
--
ALTER TABLE `Autor`
  MODIFY `Cod_autor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Livro`
--
ALTER TABLE `Livro`
  MODIFY `Cod_livro` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Login` varchar(5) NOT NULL,
  `Senha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Login`, `Senha`) VALUES
('a', 123),
('b', 456);