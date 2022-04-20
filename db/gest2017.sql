-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Ago-2017 às 15:11
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gest2017`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `gestantes`
--

CREATE TABLE `gestantes` (
  `id` int(11) NOT NULL,
  `uf_atendimento` varchar(45) NOT NULL,
  `muni_atendimento` varchar(45) NOT NULL,
  `datainipre` date NOT NULL,
  `data_diag` date NOT NULL,
  `nome_unidade` varchar(45) NOT NULL,
  `num_area` int(10) DEFAULT NULL,
  `num_microarea` int(10) DEFAULT NULL,
  `nome_profissional` varchar(45) NOT NULL,
  `cns_prof` varchar(45) NOT NULL,
  `nome_ag_comun` varchar(45) NOT NULL,
  `nome_gestante` varchar(100) NOT NULL,
  `data_nasc` date NOT NULL,
  `nome_mae` varchar(100) DEFAULT NULL,
  `estadocivil` varchar(45) NOT NULL,
  `end_terceiro` varchar(130) DEFAULT NULL,
  `racacor` varchar(45) DEFAULT NULL,
  `muni_residencia` varchar(45) DEFAULT NULL,
  `uf_residencia` varchar(45) DEFAULT NULL,
  `end_gestante` varchar(100) NOT NULL,
  `num_residencia` int(11) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `ref_ponto` varchar(45) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `escolaridade` varchar(50) DEFAULT NULL,
  `data_dum` date NOT NULL,
  `data_dpp` date NOT NULL,
  `data_testerapido` date NOT NULL,
  `result_testerapido` varchar(4) DEFAULT NULL,
  `result_dose1` varchar(4) NOT NULL,
  `data_presc1` date NOT NULL,
  `teste_trepo1` varchar(4) NOT NULL,
  `data_testetrepo1` date NOT NULL,
  `vrdl` int(11) DEFAULT NULL,
  `data_lab` date DEFAULT NULL,
  `titulacao` varchar(45) DEFAULT NULL,
  `teste_trepo2` varchar(4) DEFAULT NULL,
  `data_testetrepo2` date DEFAULT NULL,
  `treponemicoteste` varchar(4) DEFAULT NULL,
  `candroduro` varchar(4) DEFAULT NULL,
  `localizacao` varchar(45) DEFAULT NULL,
  `papulaspalmoplantares` varchar(4) DEFAULT NULL,
  `alopecia` varchar(4) DEFAULT NULL,
  `ausenciasinais` varchar(4) DEFAULT NULL,
  `aptneuro` varchar(4) DEFAULT NULL,
  `sifprimaria` varchar(4) DEFAULT NULL,
  `sifprimaria_datadose` date DEFAULT NULL,
  `sifsecundaria` varchar(4) DEFAULT NULL,
  `sifsecundaria_datadose1` date DEFAULT NULL,
  `sifsecundaria_datadose2` date DEFAULT NULL,
  `sifterciaria` varchar(4) DEFAULT NULL,
  `sifterciaria_datadose1` date DEFAULT NULL,
  `sifterciaria_datadose2` date DEFAULT NULL,
  `sifterciaria_datadose3` date DEFAULT NULL,
  `localdasdoses` varchar(45) DEFAULT NULL,
  `gestalergica_penicilina` varchar(4) DEFAULT NULL,
  `enc_dur` varchar(4) DEFAULT NULL,
  `presc_esquem_terapeutico` varchar(45) DEFAULT NULL,
  `gest_infectadapre` varchar(4) DEFAULT NULL,
  `tratamentoincompleto` varchar(4) DEFAULT NULL,
  `reiniciouesquema` varchar(4) DEFAULT NULL,
  `enc_compulsoria` varchar(4) DEFAULT NULL,
  `enc_compulsoria_data` date DEFAULT NULL,
  `parceirotratado` varchar(4) DEFAULT NULL,
  `presc_outroesquema` varchar(100) DEFAULT NULL,
  `esquema_prescparceiro` varchar(45) DEFAULT NULL,
  `motivo_naorealizado` varchar(100) DEFAULT NULL,
  `motivo_naorealizado_outro` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `desfecho` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gestantes`
--

INSERT INTO `gestantes` (`id`, `uf_atendimento`, `muni_atendimento`, `datainipre`, `data_diag`, `nome_unidade`, `num_area`, `num_microarea`, `nome_profissional`, `cns_prof`, `nome_ag_comun`, `nome_gestante`, `data_nasc`, `nome_mae`, `estadocivil`, `end_terceiro`, `racacor`, `muni_residencia`, `uf_residencia`, `end_gestante`, `num_residencia`, `complemento`, `ref_ponto`, `telefone`, `escolaridade`, `data_dum`, `data_dpp`, `data_testerapido`, `result_testerapido`, `result_dose1`, `data_presc1`, `teste_trepo1`, `data_testetrepo1`, `vrdl`, `data_lab`, `titulacao`, `teste_trepo2`, `data_testetrepo2`, `treponemicoteste`, `candroduro`, `localizacao`, `papulaspalmoplantares`, `alopecia`, `ausenciasinais`, `aptneuro`, `sifprimaria`, `sifprimaria_datadose`, `sifsecundaria`, `sifsecundaria_datadose1`, `sifsecundaria_datadose2`, `sifterciaria`, `sifterciaria_datadose1`, `sifterciaria_datadose2`, `sifterciaria_datadose3`, `localdasdoses`, `gestalergica_penicilina`, `enc_dur`, `presc_esquem_terapeutico`, `gest_infectadapre`, `tratamentoincompleto`, `reiniciouesquema`, `enc_compulsoria`, `enc_compulsoria_data`, `parceirotratado`, `presc_outroesquema`, `esquema_prescparceiro`, `motivo_naorealizado`, `motivo_naorealizado_outro`, `desfecho`) VALUES
(5, 'AC', 'Salvador', '0000-00-00', '0000-00-00', 'Leonardo', 2200, 80, 'Freitas', '098', 'Leonardo Cruz Freitas', 'Leonardo Cruz Freitas', '0000-00-00', 'Leonardo Cruz Freitas', 'Solteira', 'Convive com Companheiro e filhos', 'Amarelo', 'poooo', '', 'poo', 0, '87bb', 'hhf', 2147483647, 'Ensino Fundamental Completo', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0000-00-00', '0', '0000-00-00', 0, '0000-00-00', '1: chagas', '0', '0000-00-00', '0', '0', 'CÃ©rvix', '0', '0', '0', '0', '0', '0000-00-00', '0', '0000-00-00', '0000-00-00', '0', '0000-00-00', '0000-00-00', '0000-00-00', '', '0', '0', '', '0', '0', '0', '0', '0000-00-00', '0', 'Doxiciclina 100mg, VO, 2x ao dia por 15 dias', 'Tardia (Latente e terciÃ¡ria)', '', '', 'Em Acompanhamento'),
(6, 'DF', 'Salvador', '2010-06-05', '2010-06-05', 'SAO MARCOS', 0, 0, 'Freitas', '', 'Leonardo Cruz Freitas', '', '0000-00-00', '', '', '', '', '', 'AC', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0000-00-00', '0', '0000-00-00', 0, '0000-00-00', '1:', '0', '0000-00-00', '0', '0', '', '0', '0', '0', '0', '0', '0000-00-00', '0', '0000-00-00', '0000-00-00', '0', '0000-00-00', '0000-00-00', '0000-00-00', '', '0', '0', 'PrimÃ¡ria', '0', '0', '0', '0', '0000-00-00', 'Sim', 'Ceftriaxona 1g, IV ou IM, 1x por dia por 8 a 10 dias', '', '2. Parceiro nÃ£o foi comunicado/convocado Ã  UBS para tratamento ', 'aa vei', 'Em Acompanhamento'),
(8, '', '', '0000-00-00', '2017-08-20', '', 0, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', 'AC', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', 0, '0000-00-00', '1:', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 'NÃ£o', '', '0000-00-00', '', '', '', '', '', 'Alta'),
(9, 'AL', 'Salvador', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0000-00-00', '0', '0000-00-00', 0, '0000-00-00', '1:', '0', '0000-00-00', '0', '0', '', '0', '0', '0', '0', '0', '0000-00-00', '0', '0000-00-00', '0000-00-00', '0', '0000-00-00', '0000-00-00', '0000-00-00', '', '0', '0', '', '0', '0', '0', '0', '0000-00-00', '0', '', '', '', '', ''),
(10, 'ES', 'sss', '2017-08-15', '2017-08-15', 'Leonardo', 111, 123123, 'Freitas', '12312312', 'uhasuhasuh', 'MARIA LUURDES', '2017-08-15', 'xere', 'Casada', 'Convive com Outras Pessoas', 'Pardo', '', '', 'baba', 0, '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0000-00-00', '0', '0000-00-00', 0, '0000-00-00', '1:', '0', '0000-00-00', '0', '0', '', '0', '0', '0', '0', '0', '0000-00-00', '0', '0000-00-00', '0000-00-00', '0', '0000-00-00', '0000-00-00', '0000-00-00', '', '0', '0', '', '0', '0', '0', '0', '0000-00-00', '0', '', '', '', '', ''),
(11, 'BA', 'XXXX', '2017-08-16', '2017-08-15', 'XXXX', 555, 555, 'XXXX', '555', 'XXXX', 'XXXX', '2000-08-10', 'XXXX', 'Solteira', 'Convive com Companheiro e filhos', 'Azul', 'XXXX', '', 'XXXX', 0, 'XXXX', 'XXXX', 98765432, '4Â° SÃ©rie Completa do ensino fundamental', '2000-08-10', '2000-08-10', '0000-00-00', '0', '0', '2000-08-10', '0', '0000-00-00', 0, '2107-02-25', '1: chagas', '0', '2000-08-10', '0', '0', 'PerÃ­neo', '0', '0', '0', '0', '0', '2000-08-10', '0', '2000-08-10', '2000-08-10', '0', '0000-00-00', '2000-08-10', '2000-08-10', '', '0', '0', '', '0', '0', '0', '0', '0000-00-00', '0', 'Doxiciclina 100mg, VO, 2x ao dia por 15 dias', 'PrimÃ¡ria', '', '', 'Em Acompanhamento'),
(12, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '0', '0', '0000-00-00', '0', '0000-00-00', 0, '0000-00-00', '1:', '0', '0000-00-00', '0', '0', '', '0', '0', '0', '0', '0', '0000-00-00', '0', '0000-00-00', '0000-00-00', '0', '0000-00-00', '0000-00-00', '0000-00-00', '', '0', '0', '', '0', '0', '0', '0', '0000-00-00', '0', '', '', '', '', ''),
(13, 'AP', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', '', '0000-00-00', '', '', '', '', '', 'AC', '', 0, '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', 0, '0000-00-00', '1:', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', 'PrimÃ¡ria', '', '', '', '', '0000-00-00', '', 'Doxiciclina 100mg, VO, 2x ao dia por 15 dias', '', '', '', 'Prematuridade'),
(14, 'BA', 'Vila velha', '2017-08-16', '2017-08-15', 'USFBaa', 2200, 123123, 'Leonardo Freitas', '20302894521', 'Leonardo Cruz Freitas', 'XUXA MENEGUEL', '1920-08-10', 'ZURETA', 'Casada', 'Vive SÃ³', 'Branco', 'RIO BRANCO', 'AC', 'RUA DAS ESTAPAFORDIAS', 189, 'SAO PALADINO', 'BAR DO GAGO', 2147483647, '4Â° SÃ©rie Completa do ensino fundamental', '2000-08-10', '2017-08-15', '0000-00-00', '', '', '2017-08-15', '', '0000-00-00', 0, '2107-02-25', '1:', '', '2000-08-10', '', '', 'CÃ©rvix', '', '', '', '', '', '2000-08-10', '', '2000-08-10', '2000-08-10', '', '1997-05-25', '1997-05-25', '1997-05-25', 'OMBRO', 'Sim', '', 'PrimÃ¡ria', 'Sim', '', 'Sim', 'Sim', '1997-05-25', 'Sim', 'Doxiciclina 100mg, VO, 2x ao dia por 15 dias', '', '1. Parceiro nÃ£o teve mais contato com a gestante ', '', 'Em Acompanhamento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(4) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Administrador do sistema', 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'leonardo freitas', 'leonardo', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gestantes`
--
ALTER TABLE `gestantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gestantes`
--
ALTER TABLE `gestantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
