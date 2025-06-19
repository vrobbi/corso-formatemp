-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Giu 19, 2025 alle 07:49
-- Versione del server: 8.0.41-0ubuntu0.20.04.1
-- Versione PHP: 7.4.3-4ubuntu2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newformatemp`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `MyGuests`
--

CREATE TABLE `MyGuests` (
  `id` int UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `MyGuests`
--

INSERT INTO `MyGuests` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'John', 'Doe', 'john@example.com'),
(2, 'Paolo modificato', 'Rossi', 'paolo@example.com'),
(4, 'Johnnome2', 'Doemodificato', 'johncambiato@example.com'),
(7, 'Andrea  ', 'Verdi', 'andrea@tim.com'),
(12, 'Paolo', 'Rossi', 'paolo@example.com'),
(14, 'vittorio', 'Gialli', 'vittorio@gmail.com'),
(16, 'vittorio 22', 'rosa cambiato', 'vittorio222@gmail.com'),
(17, 'Maria', 'Rosi', 'maria@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `MyGuests`
--
ALTER TABLE `MyGuests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `MyGuests`
--
ALTER TABLE `MyGuests`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
