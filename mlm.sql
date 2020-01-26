-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 07:52 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactivationcode`
--

CREATE TABLE `tblactivationcode` (
  `ActivationcodeID` int(11) NOT NULL,
  `ActivationcodeUUID` varchar(100) DEFAULT NULL,
  `ActivationcodeNumber` varchar(20) NOT NULL,
  `ActivationcodeOwner` varchar(255) NOT NULL DEFAULT 'admin',
  `ActivationcodeInUse` tinyint(1) NOT NULL DEFAULT '0',
  `UserIDInserted` int(11) NOT NULL DEFAULT '0',
  `UserIDUpdated` int(11) NOT NULL DEFAULT '0',
  `UserIDLocked` int(11) NOT NULL DEFAULT '0',
  `DateInserted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateUpdated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateLocked` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tblactivationcode`
--

INSERT INTO `tblactivationcode` (`ActivationcodeID`, `ActivationcodeUUID`, `ActivationcodeNumber`, `ActivationcodeOwner`, `ActivationcodeInUse`, `UserIDInserted`, `UserIDUpdated`, `UserIDLocked`, `DateInserted`, `DateUpdated`, `DateLocked`) VALUES
(1, '0B1E7AA8-DE76-B4C9-400A-32E1E30B0629', '5e283bdbb6f2b', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:21:40', '2020-01-25 15:21:40'),
(2, '145A5110-6755-9A0D-295E-6E0DF775A0D3', '5e283bdbc1419', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:22:34', '2020-01-25 15:22:34'),
(3, '94224485-5FCD-05BF-B4A2-73A0C119CED8', '5e283bdbc9334', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:24:27', '2020-01-25 15:24:27'),
(4, 'AECA5438-A7C6-9383-E69D-400EF94B12B9', '5e283bdbd36c7', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:25:17', '2020-01-25 15:25:17'),
(5, 'F07E903D-588E-C398-A5F5-94CBEDCFA82C', '5e283bdbd9e06', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:26:23', '2020-01-25 15:26:23'),
(6, '3B79339E-3D70-F050-99B9-5D410208A67A', '5e283bdbdb9ad', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:26:59', '2020-01-25 15:26:59'),
(7, 'C5182F24-847B-0E48-D9D2-44B798E24B12', '5e283bdbddf34', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:28:01', '2020-01-25 15:28:01'),
(8, '42ED040C-B077-C15C-2A3A-526BBB92BAD9', '5e283bdbdfa6b', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:28:41', '2020-01-25 15:28:41'),
(9, '5E69D5A1-E992-B3D2-E3DF-24EBD53B6B9A', '5e283bdbe2604', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:29:20', '2020-01-25 15:29:20'),
(10, 'F0E83FFE-5624-5B45-C768-758919E803AD', '5e283bdbe42d7', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:29:50', '2020-01-25 15:29:50'),
(11, '27AC7413-1F71-0699-202A-EAF0CC2E9C40', '5e283bdbe61a6', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:30:28', '2020-01-25 15:30:28'),
(12, '206D1EAD-1452-A389-2EBB-034A85CD6D4E', '5e283bdbe7c46', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:30:49', '2020-01-25 15:30:49'),
(13, 'EC4933DB-D4D9-00AE-C0F7-7EB8A40CB138', '5e283bdbe9fb2', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:31:26', '2020-01-25 15:31:26'),
(14, '2A1F715E-179A-235A-C7AD-CB5BFCE80974', '5e283bdbebb6f', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:31:50', '2020-01-25 15:31:50'),
(15, '51615C6D-D5C7-848D-C49D-C692EEEB0173', '5e283bdbedc38', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:33:01', '2020-01-25 15:33:01'),
(16, 'E14AB4CB-C12A-5E35-9AE2-5BB2FB33019C', '5e283bdbef840', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:33:23', '2020-01-25 15:33:23'),
(17, '97BFD7E7-F700-2598-BD40-B433C67CD6CB', '5e283bdbf1f16', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:07', '2020-01-25 15:34:17', '2020-01-25 15:34:17'),
(18, 'C5FDB24F-D22E-2024-6365-72593DFE1B1E', '5e283bdbf3a00', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:08', '2020-01-25 15:34:50', '2020-01-25 15:34:50'),
(19, '21272D4F-E09C-E585-CF1E-755C284DF621', '5e283bdc019f8', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:08', '2020-01-25 15:35:32', '2020-01-25 15:35:32'),
(20, '774A4B4D-51AF-4580-8CFC-80AB990B8D4E', '5e283bdc06c5b', 'admin', 1, 2, 1, 0, '2020-01-22 18:11:08', '2020-01-25 15:36:06', '2020-01-25 15:36:06'),
(21, '952ED48D-D627-B69E-BFA1-985FFE2E85E0', '5e283eff49ef6', 'admin', 1, 2, 1, 0, '2020-01-22 18:24:31', '2020-01-25 15:37:45', '2020-01-25 15:37:45'),
(22, '311CB127-F4D4-743A-D6A3-6CB92A399C55', '5e283eff54846', 'admin', 1, 2, 1, 0, '2020-01-22 18:24:31', '2020-01-25 15:38:01', '2020-01-25 15:38:01'),
(23, '152B870E-D01E-87CC-28F7-BF746DA0A239', '5e283eff56a78', 'admin', 1, 2, 1, 0, '2020-01-22 18:24:31', '2020-01-25 15:38:20', '2020-01-25 15:38:20'),
(24, '006BF920-C9AF-3ECD-D715-DCB6B27642AB', '5e283eff60c3f', 'admin', 1, 2, 1, 0, '2020-01-22 18:24:31', '2020-01-25 15:38:36', '2020-01-25 15:38:36'),
(25, 'A01996FA-C098-3AE8-E6B6-AEF0742DBB2D', '5e283eff6a84c', 'admin', 1, 2, 1, 0, '2020-01-22 18:24:31', '2020-01-25 15:40:32', '2020-01-25 15:40:32'),
(26, '28DA364D-CA2B-6B65-D650-7D6D81FD56E9', '5e283eff7be9a', 'admin', 1, 2, 1, 0, '2020-01-22 18:24:31', '2020-01-25 15:41:20', '2020-01-25 15:41:20'),
(27, '3622C10B-C099-31B0-F0D5-4068656083F6', '5e283eff7e1da', 'admin', 1, 2, 1, 0, '2020-01-22 18:24:31', '2020-01-25 15:41:45', '2020-01-25 15:41:45'),
(28, '5D5E4546-F86D-A475-3C3F-180FE15FE82E', '5e283eff7fd69', 'admin', 1, 2, 1, 0, '2020-01-22 18:24:31', '2020-01-25 15:42:00', '2020-01-25 15:42:00'),
(29, '672B381D-4C18-EB04-F4C3-1AC5068D2752', '5e283eff821be', 'admin', 1, 2, 1, 0, '2020-01-22 18:24:31', '2020-01-25 15:42:32', '2020-01-25 15:42:32'),
(30, '40FC5130-9337-5E9A-08CE-214D20CE09E6', '5e283eff83ea0', 'admin', 1, 2, 1, 0, '2020-01-22 18:24:31', '2020-01-25 15:42:45', '2020-01-25 15:42:45'),
(31, 'E3FF2E82-9508-3AFF-FF4A-765F4FCBA576', '5e283eff863df', 'admin', 1, 2, 1, 0, '2020-01-22 18:24:31', '2020-01-26 11:38:19', '2020-01-26 11:38:19'),
(32, '0772D341-3ABF-13EB-1A16-0323111C617D', '5e283eff88053', 'admin', 1, 2, 1, 0, '2020-01-22 18:24:31', '2020-01-26 12:14:01', '2020-01-26 12:14:01'),
(33, '724EC6A7-775B-AC40-6267-08849BCA4AE4', '5e283eff8a17a', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(34, '73C7CF4E-7BBF-D46E-540D-E00E1BAA9D6B', '5e283eff8bd85', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(35, 'EAD2E414-7AF2-B9CD-8856-05ABF863EBDC', '5e283eff8e10e', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(36, 'E408EBFF-A5C8-8628-01B6-93D011984BE4', '5e283eff8fd6c', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(37, '370094CA-759D-A3A3-3E5A-D2F70045E5E5', '5e283eff9325b', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(38, 'A246E6D9-94E1-D1C3-B0FD-68CFB9D8BED8', '5e283eff9567b', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(39, '2A437C11-0B1B-8F4C-1462-FF7F02A0DABE', '5e283eff97947', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(40, 'DE525ECB-293B-F002-565F-D3C6C043AEE6', '5e283eff9a0cb', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(41, 'B9EFB5F4-9C2C-ACEF-FC5D-BB1E46AFD853', '5e283eff9c1fa', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(42, '4DF989B0-258D-9147-2DC8-C78C3E34C7FA', '5e283eff9e415', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(43, 'CFF05E74-16CC-8C12-4F07-9E24855E54FD', '5e283eff9ff68', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(44, '2291D618-1D41-6875-F316-B070342ED34E', '5e283effa236c', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(45, 'BF333736-6126-0309-A1E6-FC1BEB6737C8', '5e283effa4721', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(46, '81819030-D32C-13CB-1C79-4F82AC676054', '5e283effa660b', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(47, 'A58E63C6-C3B8-33D9-D985-E155AEB44937', '5e283effa8496', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(48, '5CD102AC-6649-0D89-5857-F680B32E1F1C', '5e283effaa8aa', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(49, 'DBD4FC26-0FCE-72A6-2CC9-18128F8852C6', '5e283effaca31', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(50, '99C8AF22-2DB1-28B5-14DF-03FA590E5982', '5e283effae8a3', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(51, 'FA1BFB2F-D631-F3ED-DD88-F9E5DC6F52F2', '5e283effb0b34', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(52, '51D763BD-1105-319E-7951-F6F16C6D803B', '5e283effb3092', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(53, '8DD00A0F-ABAB-3688-BC41-A4F10F348456', '5e283effb4c19', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(54, '1ECF69AE-F4C5-E297-21C0-54A459B7701C', '5e283effb6a54', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(55, '8A5577D7-6AC9-79CF-7239-F4752DA73AB5', '5e283effb8575', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(56, '94889FE7-1935-262D-BFD6-93E53BF5DA92', '5e283effba6b0', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(57, '645ED10A-0417-8BC5-A51B-B6255426716D', '5e283effbc249', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(58, 'D49F5194-F45D-AA5E-17E3-D84C3CA3430A', '5e283effbe1bb', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(59, '3C2E3C08-A86B-3425-B2CD-D8E093B44D93', '5e283effbfbbe', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(60, 'BA5DB006-FE79-9490-632E-386EF4605D53', '5e283effc1889', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(61, 'E15A8D0E-F6A4-2427-75CD-1F717157F206', '5e283effc3dee', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(62, '9471FD64-E74D-CD7D-3F85-DE9DBAF64350', '5e283effc5cff', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(63, '167C9CE1-05C0-B454-1D56-549A66423895', '5e283effc7afd', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(64, '7E2E069A-DD13-AFC2-BF12-69D2E1AA72C5', '5e283effc96dc', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(65, 'F0F3083C-D8D8-FD77-C414-F15E1397E4B8', '5e283effcbb78', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(66, '7363E9FB-367F-4523-3C94-E3B07523AC99', '5e283effcdb49', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(67, '7497F5FD-D051-389F-827F-5411A3912899', '5e283effcf603', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(68, 'AC3FAB68-96AC-CC04-A0F3-3FEBDA6BF39C', '5e283effd1274', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(69, '5F00E9EF-CC65-02A4-AED2-A7B2CB4195F5', '5e283effd36cb', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(70, '587FBD3C-7902-3567-1855-8DE1B883BC85', '5e283effd5494', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(71, 'D1262795-9179-DE2F-0D83-326EE3CC37F5', '5e283effd7c42', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(72, 'A92A6CC4-F5AC-E49A-036B-5B331D64D2EC', '5e283effd95fe', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(73, 'C9AC05CF-12AE-16BD-03B2-2A57FF9F59C4', '5e283effdb516', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(74, 'A257664F-43A7-0C44-E966-A18D3522606F', '5e283effdce6c', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(75, '29A9DDA8-1D4A-E054-D1ED-51844B9F57A1', '5e283effdf682', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(76, '161126C2-8592-E753-BF7B-2E3FA8FF67BF', '5e283effe0fea', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(77, '7F44EB37-5125-C2E3-E4B9-0350FD8D3EAD', '5e283effe321a', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(78, '66507C67-31EC-39DE-DF6C-A9D77F4215F7', '5e283effe50dd', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(79, '0241FA6F-6A15-4C46-5427-81494EF2B351', '5e283effe722e', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(80, 'CD4632B4-33C2-A157-84D3-8BCC25A1E981', '5e283effe8b69', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(81, '39CB53D4-E048-1079-AF2B-AEA6F7B2A67C', '5e283effea701', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(82, '78C6F0C2-A0D5-2ABF-A21F-51A6711C4744', '5e283effec195', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(83, 'A3B8809E-0A2E-85F3-D7A2-FDCB056612B8', '5e283effedba7', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(84, 'AE782393-F2A8-5BF2-307C-924EB63E46D5', '5e283effefbd0', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(85, '02E44364-2635-99C8-6EA8-AAC035B48577', '5e283efff160a', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:31', '2020-01-22 18:24:31', '2020-01-22 18:24:31'),
(86, '8F059F6C-F8CA-A4ED-E45D-AEFF4837A75A', '5e283efff3272', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(87, '1126A979-1D79-446B-C66B-D6EACE007DFC', '5e283f0000e85', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(88, 'AE987678-D693-C863-5E02-EE47D1D4128A', '5e283f0005839', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(89, '232A7115-8028-7E63-A719-1D22F2C50D0C', '5e283f000744c', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(90, 'F3EEF26B-D390-9E26-495B-88B9FB0A7C76', '5e283f0008db9', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(91, '72FDD23D-1529-6BE0-29D4-9F8E4F6C1C18', '5e283f000acf5', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(92, '3D9F84A4-0450-E41A-6F5A-BCF1417C3CEE', '5e283f000c751', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(93, '76237F78-70DD-D95B-9EFE-1FA248BEDFE2', '5e283f000e112', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(94, 'A34EDC04-CCDE-CF8C-3D73-7093DF31EEEA', '5e283f001008e', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(95, '802FB8DE-2914-E213-8C4A-F654BF8140F7', '5e283f00119c9', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(96, '87C4BA9A-DAE8-CED6-65E5-0AE439531A60', '5e283f0013699', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(97, 'DDD6FE4F-B415-ABDF-995A-DC967B4BF4DB', '5e283f00150a3', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(98, '7F970C10-CF01-83A8-332C-1C59B2FFDDD8', '5e283f001701d', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(99, '1B8BC9C6-683D-DCBF-9BA7-1B7DE70D826D', '5e283f00189a3', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(100, 'AB90E2E5-B0F7-6ED0-7102-514DA4408CFC', '5e283f001a2a2', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(101, '8BCEC33B-323A-AD98-3C86-7D7387E546E3', '5e283f001bf09', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(102, '5399C5D6-76DC-C1BD-0E65-6F636E33131F', '5e283f001d8bb', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(103, 'AB163095-93CC-7E64-EE72-6B5B78D722B2', '5e283f001f8ce', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(104, '1D8576B2-0C6C-222C-F069-4056581EAD54', '5e283f0021259', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(105, '0F3090C4-AA21-B11C-E93A-A23D024B839D', '5e283f0022ed0', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(106, '5BFFBF9D-1CAB-8F07-7345-570301C64723', '5e283f0024853', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(107, 'D7204E95-AD8A-403A-13C6-6C73A65B2AC1', '5e283f002623a', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(108, '4262CED0-865A-0D19-0352-3E5BAAE6996F', '5e283f002814c', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(109, 'AA29399F-A0A8-624D-8A2B-2C774CE72662', '5e283f0029a7e', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(110, '8D013DCB-9F73-1C0B-5D70-AE1B847D11EA', '5e283f002b6e5', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(111, 'C8E83266-F9AD-C1A5-36FE-351843B1C21B', '5e283f002d0c8', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(112, '28362418-50B0-88A1-9B3E-24BE1DB5E1AC', '5e283f002f02f', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(113, 'BE0F7759-968F-4E1D-991F-491E86E8961C', '5e283f0030af4', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(114, '3C0A07FC-A529-BC30-AE39-D4F297B89907', '5e283f00324a7', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(115, 'F192999E-24D1-2EE5-03CB-A9055FEBFB92', '5e283f0033f7d', 'admin', 0, 2, 2, 0, '2020-01-22 18:24:32', '2020-01-22 18:24:32', '2020-01-22 18:24:32'),
(116, 'F1F2E368-35AC-FEC1-22CA-3EDC27277776', '5e283f0035a62', 'admin', 0, 2, 1, 0, '2020-01-22 18:24:32', '2020-01-25 14:50:11', '2020-01-25 14:50:11'),
(117, 'F4F1FAAA-E2A0-39A6-99AE-D3DD9E3BC24E', '5e283f0038927', 'admin', 0, 2, 1, 0, '2020-01-22 18:24:32', '2020-01-25 14:48:40', '2020-01-25 14:48:40'),
(118, 'C2E99347-EB79-58A7-7311-E31AFED0CFF5', '5e283f003a3aa', 'admin', 0, 2, 1, 0, '2020-01-22 18:24:32', '2020-01-25 14:46:04', '2020-01-25 14:46:04'),
(119, '05E45748-D3E9-4119-752C-41A39337E157', '5e283f003c1ee', 'admin', 0, 2, 1, 0, '2020-01-22 18:24:32', '2020-01-25 14:44:01', '2020-01-25 14:44:01'),
(120, 'A952E7A3-5094-93A3-E012-CD7FECFF5C65', '5e283f003e611', 'admin', 0, 2, 1, 0, '2020-01-22 18:24:32', '2020-01-25 14:42:27', '2020-01-25 14:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblautocoder`
--

CREATE TABLE `tblautocoder` (
  `AutoCoderID` int(11) NOT NULL,
  `AutoCoderUUID` varchar(100) DEFAULT NULL,
  `AutoCoderScriptVariable` text,
  `AutoCoderManagePage` text,
  `AutoCoderInsertUpdatePage` text,
  `AutoCoderInsertUpdateActionPage` text NOT NULL,
  `AutoCoderIsActive` int(11) DEFAULT NULL,
  `UserIDInserted` int(11) NOT NULL DEFAULT '0',
  `UserIDUpdated` int(11) NOT NULL DEFAULT '0',
  `UserIDLocked` int(11) NOT NULL DEFAULT '0',
  `DateInserted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateUpdated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateLocked` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautocoder`
--

INSERT INTO `tblautocoder` (`AutoCoderID`, `AutoCoderUUID`, `AutoCoderScriptVariable`, `AutoCoderManagePage`, `AutoCoderInsertUpdatePage`, `AutoCoderInsertUpdateActionPage`, `AutoCoderIsActive`, `UserIDInserted`, `UserIDUpdated`, `UserIDLocked`, `DateInserted`, `DateUpdated`, `DateLocked`) VALUES
(1, '', '<?\r\n	if ($_SESSION[\"UserID\"]==1)Header(\"Location:index.php?Theme=default&Base=System&Script=login\");\r\n    $Entity=\"Entity_Name\";\r\n    $EntityLower=strtolower($Entity);\r\n    $EntityCaption=\"Entity_Caption\";\r\n    $EntityCaptionLower=strtolower($EntityCaption);\r\n    $OrderByValue=\"OrderBy_Value\";\r\n	// Check the value in the InsertUpdate Action Page for detect is the value is taken or not\r\n    $UniqueField = \"{$Entity}ID\";\r\n\r\n\r\n?>', '<?\r\n	include \"./script/{$_REQUEST[\"Base\"]}/Scriptvariables.php\";\r\n\r\n	SetFormvariable(\"RecordShowFrom\", 1);\r\n    SetFormvariable(\"RecordShowUpTo\", $Application[\"DatagridRowsDefault\"]);\r\n    SetFormvariable(\"SortBy\", \"{$OrderByValue}\");\r\n    SetFormvariable(\"SortType\", \"ASC\");\r\n\r\n	if(isset($_REQUEST[\"ActionNew{$Entity}\"]))include \"./script/{$_REQUEST[\"Base\"]}/Insertupdate.php\";\r\n	// Delete a data\r\n	if(isset($_GET[\"DeleteConfirm\"]))SQL_Delete($Entity=\"{$Entity}\", $Where=\"{$Entity}ID = {$_REQUEST[$Entity.\"ID\"]} AND {$Entity}UUID = \'{$_REQUEST[$Entity.\"UUID\"]}\'\");\r\n\r\n    $Where=\"1 = 1\";\r\n	if($_POST[\"FreeText\"]!=\"\")\r\n		$Where.=\" and {$_REQUEST[\"SearchCombo\"]} LIKE \'%{$_POST[\"FreeText\"]}%\'\";\r\n\r\n	// DataGrid\r\n	$MainContent.= CTL_Datagrid(\r\n		$Entity,\r\n		$ColumnName=array( Column_Name  ,\"{$Entity}IsActive\" ),\r\n		$ColumnTitle=array( Column_Title  ,\"IsActive\" ),\r\n		$ColumnAlign=array( Column_Align  , \"left\" ),\r\n		$ColumnType=array( Column_Type  ,\"yes/no\"),\r\n		$Rows=SQL_Select($Entity=\"{$Entity}\", $Where Where_Con,  $OrderBy=\"{$_REQUEST[\"SortBy\"]} {$_REQUEST[\"SortType\"]}\", $SingleRow=false, $RecordShowFrom=$_REQUEST[\"RecordShowFrom\"], $RecordShowUpTo=$Application[\"DatagridRowsDefault\"], $Debug=false),\r\n		$SearchHTML=\"\".CTL_InputText($Name=\"FreeText\",\"\",\"\",26, $Class=\"DataGridSearchBox\").\" \",\r\n		$ActionLinks=true,\r\n		$SearchPanel=true,\r\n		$ControlPanel=true,\r\n		$EntityAlias=\"\".$EntityCaption.\"\",\r\n		$AddButton=true\r\n	);\r\n?>', '<?\r\n	include \"./script/{$_REQUEST[\"Base\"]}/Scriptvariables.php\";\r\n\r\n    $UpdateMode=false;\r\n    $FormTitle=\"Insert $EntityCaption\";\r\n    $ButtonCaption=\"Insert\";\r\n    $ActionURL=ApplicationURL(\"{$_REQUEST[\"Base\"]}\",\"Insertupdateaction\");\r\n\r\n	// The default value of the input box will goes here according to how many fields we showing\r\n    $TheEntityName=array(\r\n       EntityDefaultValue\r\n       \"{$Entity}IsActive\"=>1\r\n	);\r\n\r\n	if(isset($_REQUEST[$Entity.\"ID\"])&&isset($_REQUEST[$Entity.\"UUID\"])&&!isset($_REQUEST[\"DeleteConfirm\"])){\r\n	    $UpdateMode=true;\r\n	    $FormTitle=\"Update $EntityCaption\";\r\n	    $ButtonCaption=\"Update\";\r\n	    $ActionURL=ApplicationURL(\"{$_REQUEST[\"Base\"]}\",\"Insertupdateaction\", $Entity.\"ID={$_REQUEST[$Entity.\"ID\"]}&\".$Entity.\"UUID={$_REQUEST[$Entity.\"UUID\"]}\");\r\n		if($UpdateMode&&!isset($_POST[\"\".$Entity.\"ID\"]))$TheEntityName=SQL_Select($Entity=\"{$Entity}\", $Where=\"{$Entity}ID = {$_REQUEST[$Entity.\"ID\"]} AND {$Entity}UUID = \'{$_REQUEST[$Entity.\"UUID\"]}\'\", $OrderBy=\"{$OrderByValue}\", $SingleRow=true);\r\n	}\r\n\r\n	// Input sytem display goes here\r\n	$Input=array();\r\n                   Input_Array\r\n            $Input[]=array(\"VariableName\"=>\"IsActive\", \"Caption\"=>\"Active?\", \"ControlHTML\"=>CTL_InputRadioSet($VariableName=\"{$Entity}IsActive\", $Captions=array(\"Yes\", \"No\"), $Values=array(1, 0), $CurrentValue=$TheEntityName[\"{$Entity}IsActive\"]), \"Required\"=>false);\r\n\r\n	$MainContent.=FormInsertUpdate(\r\n		$EntityName=$EntityLower,\r\n		$FormTitle,\r\n		$Input,\r\n		$ButtonCaption,\r\n		$ActionURL\r\n	);\r\n?>', '<?\r\n	include \"./script/{$_REQUEST[\"Base\"]}/Scriptvariables.php\";\r\n\r\n    $UpdateMode=false;\r\n	if(isset($_REQUEST[$Entity.\"ID\"])&&isset($_REQUEST[$Entity.\"UUID\"]))$UpdateMode=true;\r\n\r\n    $ErrorUserInput[\"_Error\"]=false;\r\n\r\n	if(!$UpdateMode)$_REQUEST[\"{$Entity}ID\"]=0;\r\n	//some change goes here\r\n	$TheEntityName=SQL_Select($Entity=\"{$Entity}\", $Where=\"{$UniqueField} = \'{$_POST[\"{$UniqueField}\"]}\' AND {$Entity}ID <> {$_REQUEST[$Entity.\"ID\"]}\");\r\n    if(count($TheEntityName)>0){\r\n	    $ErrorUserInput[\"_Error\"]=true;\r\n	    $ErrorUserInput[\"_Message\"]=\"This Value Already Taken.\";\r\n	}\r\n\r\n    if($ErrorUserInput[\"_Error\"]){\r\n        include \"./script/{$_REQUEST[\"Base\"]}/Insertupdate.php\";\r\n	}else{\r\n	    $Where=\"\";\r\n	    if($UpdateMode)$Where=\"{$Entity}ID = {$_REQUEST[$Entity.\"ID\"]} AND {$Entity}UUID = \'{$_REQUEST[$Entity.\"UUID\"]}\'\";\r\n\r\n        Image_Upload_Process\r\n\r\n		// give the data dase fields name and the post value name\r\n	    $TheEntityName=SQL_InsertUpdate(\r\n	        $Entity=\"{$Entity}\",\r\n			$TheEntityNameData=array(\r\n                                                                                              Submited_data\r\n		        \"{$Entity}IsActive\"=>$_POST[\"{$Entity}IsActive\"],\r\n			),\r\n			$Where\r\n			);\r\n\r\n	    $MainContent.=\"\r\n	        \".CTL_Window($Title=\"Application Setting Management\", \"The operation complete successfully and<br>\r\n			<br>\r\n			The $EntityCaptionLower information has been stored.<br>\r\n			<br>\r\n			Please click <a href=\\\"\".ApplicationURL(\"{$_REQUEST[\"Base\"]}\",\"Manage\").\"\\\">here</a> to proceed.\",300).\"\r\n	        <script language=\\\"JavaScript\\\" >\r\n	            window.location=\'\".ApplicationURL(\"{$_REQUEST[\"Base\"]}\",\"Manage\").\"\';\r\n	        </script>\r\n		\";\r\n	}\r\n?>', 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblpageaccess`
--

CREATE TABLE `tblpageaccess` (
  `PageaccessID` int(11) NOT NULL,
  `PageaccessUUID` varchar(100) DEFAULT NULL,
  `nib_type` varchar(20) DEFAULT NULL,
  `nib_page` varchar(50) DEFAULT NULL,
  `nib_add_by` varchar(50) DEFAULT NULL,
  `UserIDInserted` int(11) NOT NULL DEFAULT '0',
  `UserIDUpdated` int(11) NOT NULL DEFAULT '0',
  `UserIDLocked` int(11) NOT NULL DEFAULT '0',
  `DateInserted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateUpdated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateLocked` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tblpageaccess`
--

INSERT INTO `tblpageaccess` (`PageaccessID`, `PageaccessUUID`, `nib_type`, `nib_page`, `nib_add_by`, `UserIDInserted`, `UserIDUpdated`, `UserIDLocked`, `DateInserted`, `DateUpdated`, `DateLocked`) VALUES
(37, '5e2bf81be6449', 'Basic', 'Pageaccess', NULL, 0, 0, 0, '2020-01-25 14:11:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '5e2bf81be6449', 'Author', 'Dashboard', NULL, 0, 0, 0, '2020-01-25 14:11:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, '5e2bf81be6449', 'Basic', 'Activation', NULL, 0, 0, 0, '2020-01-25 14:11:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblsettings`
--

CREATE TABLE `tblsettings` (
  `SettingsID` int(1) NOT NULL,
  `SettingsUUID` varchar(100) NOT NULL,
  `nib_site_title` varchar(50) DEFAULT NULL,
  `nib_site_description` varchar(200) DEFAULT NULL,
  `nib_keyword` varchar(200) DEFAULT NULL,
  `nib_keyword_description` varchar(200) DEFAULT NULL,
  `nib_mail_1` varchar(50) DEFAULT NULL,
  `nib_mail_2` varchar(50) NOT NULL,
  `nib_mail_3` varchar(50) NOT NULL,
  `nib_mail_4` varchar(50) NOT NULL,
  `nib_address_1` text,
  `nib_address_2` text NOT NULL,
  `nib_address_3` text NOT NULL,
  `nib_address_4` text NOT NULL,
  `nib_phone_1` varchar(15) DEFAULT NULL,
  `nib_phone_2` varchar(15) NOT NULL,
  `nib_phone_3` varchar(15) NOT NULL,
  `nib_phone_4` varchar(15) NOT NULL,
  `nib_site_copyright` varchar(50) DEFAULT NULL,
  `nib_footer_1` text,
  `nib_footer_2` text,
  `nib_footer_3` text,
  `nib_footer_4` text,
  `nib_time_zone` varchar(20) DEFAULT NULL,
  `nib_theme` varchar(20) DEFAULT NULL,
  `nib_header_image` varchar(50) DEFAULT NULL,
  `nib_header_image_status` int(1) NOT NULL DEFAULT '0',
  `nib_site_logo` varchar(50) DEFAULT NULL,
  `nib_site_logo_status` int(1) NOT NULL DEFAULT '0',
  `nib_site_icon` varchar(50) DEFAULT NULL,
  `nib_site_icon_status` int(1) NOT NULL DEFAULT '0',
  `nib_header_script` text,
  `nib_header_script_status` int(1) NOT NULL DEFAULT '0',
  `nib_body_script` text,
  `nib_body_script_status` int(1) NOT NULL DEFAULT '0',
  `nib_share_script` text,
  `nib_share_script_status` int(1) NOT NULL DEFAULT '0',
  `nib_google_map_script` text NOT NULL,
  `nib_google_map_script_status` int(1) NOT NULL,
  `nib_fanpage_status` int(1) NOT NULL DEFAULT '0',
  `nib_fanpage_facebook` varchar(50) DEFAULT NULL,
  `nib_fanpage_google` varchar(50) DEFAULT NULL,
  `nib_fanpage_linkedin` varchar(50) DEFAULT NULL,
  `nib_fanpage_twitter` varchar(50) DEFAULT NULL,
  `nib_fanpage_youtube` varchar(100) NOT NULL,
  `nib_site_offline_status` int(1) NOT NULL DEFAULT '0',
  `nib_site_offline_message` text,
  `nib_signup_status` int(1) NOT NULL DEFAULT '0',
  `nib_signup_message` text,
  `nib_login_status` int(1) NOT NULL DEFAULT '0',
  `nib_login_message` text,
  `nib_account_limit_per_ip` int(1) NOT NULL DEFAULT '0',
  `nib_user_confirm_status` int(1) NOT NULL DEFAULT '0',
  `SettingsIsActive` int(1) NOT NULL DEFAULT '0',
  `UserIDInserted` int(11) NOT NULL DEFAULT '0',
  `UserIDUpdated` int(11) NOT NULL DEFAULT '0',
  `UserIDLocked` int(11) NOT NULL DEFAULT '0',
  `DateInserted` datetime NOT NULL,
  `DateUpdated` datetime NOT NULL,
  `DateLocked` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsettings`
--

INSERT INTO `tblsettings` (`SettingsID`, `SettingsUUID`, `nib_site_title`, `nib_site_description`, `nib_keyword`, `nib_keyword_description`, `nib_mail_1`, `nib_mail_2`, `nib_mail_3`, `nib_mail_4`, `nib_address_1`, `nib_address_2`, `nib_address_3`, `nib_address_4`, `nib_phone_1`, `nib_phone_2`, `nib_phone_3`, `nib_phone_4`, `nib_site_copyright`, `nib_footer_1`, `nib_footer_2`, `nib_footer_3`, `nib_footer_4`, `nib_time_zone`, `nib_theme`, `nib_header_image`, `nib_header_image_status`, `nib_site_logo`, `nib_site_logo_status`, `nib_site_icon`, `nib_site_icon_status`, `nib_header_script`, `nib_header_script_status`, `nib_body_script`, `nib_body_script_status`, `nib_share_script`, `nib_share_script_status`, `nib_google_map_script`, `nib_google_map_script_status`, `nib_fanpage_status`, `nib_fanpage_facebook`, `nib_fanpage_google`, `nib_fanpage_linkedin`, `nib_fanpage_twitter`, `nib_fanpage_youtube`, `nib_site_offline_status`, `nib_site_offline_message`, `nib_signup_status`, `nib_signup_message`, `nib_login_status`, `nib_login_message`, `nib_account_limit_per_ip`, `nib_user_confirm_status`, `SettingsIsActive`, `UserIDInserted`, `UserIDUpdated`, `UserIDLocked`, `DateInserted`, `DateUpdated`, `DateLocked`) VALUES
(0, '{DA82F42D-0032-464E-BA35-FBD02F5C4CEB}', 'Your Site Title', 'Your site slogan', 'Key word', 'Description', 'Mail 1', 'Mail 2', 'Mail 3', 'Mail 4', 'Address 1', 'Address 2', 'Address 3', 'Address 4', 'Phone 1', 'Phone 2', 'Phone 3', 'Phone 4', 'Site copyright', 'Footer 1', 'Footer 2', 'Footer 3', 'Footer 4', 'Asia/Dhaka', NULL, 'c45983c3f98323268e65aee8ec908a1a_logo.png', 1, 'd0e1c6bb6187b7fec335374bc8b4ef40_logo.png', 1, 'e616e764944bd82ad8a0d0776a47e5da_logo.png', 1, 'Header script', 0, 'Body Script', 0, 'Share Script', 0, 'Google map', 1, 0, 'Facebook Link', 'Google Link', 'Linkdin Link', 'Twitter Link', 'Youtube Link', 0, NULL, 0, NULL, 0, NULL, 0, 0, 1, 2, 2, 0, '2019-12-09 16:22:52', '2019-12-12 17:45:17', '2019-12-12 17:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UserID` int(11) NOT NULL,
  `UserUUID` varchar(100) NOT NULL DEFAULT '',
  `UserName` varchar(255) NOT NULL DEFAULT '',
  `ActivationcodeNumber` varchar(20) NOT NULL,
  `UserLeftHand` tinyint(1) NOT NULL DEFAULT '0',
  `UserRightHand` tinyint(1) NOT NULL DEFAULT '0',
  `UserPassword` varchar(255) NOT NULL DEFAULT '',
  `UserEmail` varchar(255) NOT NULL DEFAULT '',
  `UserPhone` varchar(15) NOT NULL,
  `UserPicture` varchar(255) NOT NULL DEFAULT '',
  `Usertype` varchar(50) NOT NULL DEFAULT 'User',
  `UserIsActive` int(11) NOT NULL DEFAULT '0',
  `UserIsRegistered` int(11) NOT NULL DEFAULT '0',
  `UserIsApproved` int(11) NOT NULL DEFAULT '0',
  `UserIDInserted` int(11) NOT NULL DEFAULT '0',
  `UserIDUpdated` int(11) NOT NULL DEFAULT '0',
  `UserIDLocked` int(11) NOT NULL DEFAULT '0',
  `DateInserted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateUpdated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateLocked` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserID`, `UserUUID`, `UserName`, `ActivationcodeNumber`, `UserLeftHand`, `UserRightHand`, `UserPassword`, `UserEmail`, `UserPhone`, `UserPicture`, `Usertype`, `UserIsActive`, `UserIsRegistered`, `UserIsApproved`, `UserIDInserted`, `UserIDUpdated`, `UserIDLocked`, `DateInserted`, `DateUpdated`, `DateLocked`) VALUES
(1, '0a0a5d38-e7ac-1029-9be9-4fc904b88e9e', 'admin', '', 1, 1, 'c4ca4238a0b923820dcc509a6f75849b', 'admin@gmail.com', '', 'contact_person.png', 'Admin', 1, 1, 1, 0, 1, 0, '2006-12-28 16:12:00', '2020-01-25 15:22:34', '2020-01-25 15:22:34'),
(132, '754C31FB-2F57-D5E6-C169-DA2DFBB07220', 'E', '5e283bdbd9e06', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'e@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:26:23', '2020-01-25 15:30:49', '2020-01-25 15:30:49'),
(130, '3916C3AD-3C45-7EDC-3014-34B6EC5BC897', 'C', '5e283bdbc9334', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'c@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:24:27', '2020-01-25 15:28:41', '2020-01-25 15:28:41'),
(129, '170C0EDB-A725-57F0-DD00-3CF3B94D17D7', 'B', '5e283bdbc1419', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'b@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:22:34', '2020-01-25 15:26:59', '2020-01-25 15:26:59'),
(131, 'F27FDD3C-1192-5AF1-1EB2-9C61C6303581', 'D', '5e283bdbd36c7', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'd@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:25:17', '2020-01-25 15:29:50', '2020-01-25 15:29:50'),
(128, 'D3F3FC8F-AFEE-D468-0605-2474A25A5C6A', 'A', '5e283bdbb6f2b', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'a@a.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:21:40', '2020-01-25 15:25:17', '2020-01-25 15:25:17'),
(133, 'B46EAFFE-ECDD-24D8-CE8A-ECBDB0A191D2', 'F', '5e283bdbdb9ad', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'f@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:26:59', '2020-01-25 15:31:50', '2020-01-25 15:31:50'),
(134, 'C700F659-269A-2CA3-57CA-8CFE1B14DFE2', 'G', '5e283bdbddf34', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'g@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:28:01', '2020-01-25 15:33:23', '2020-01-25 15:33:23'),
(135, '74C854BF-8C30-B645-1803-4AD93084DCA3', 'H', '5e283bdbdfa6b', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'h@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:28:41', '2020-01-25 15:34:50', '2020-01-25 15:34:50'),
(136, '5098DC36-57E3-71B9-0365-A89D2586470E', 'I', '5e283bdbe2604', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'I@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:29:20', '2020-01-25 15:36:06', '2020-01-25 15:36:06'),
(137, '33119829-4687-805D-C6B5-B3C04D3FB96A', 'J', '5e283bdbe42d7', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'J@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:29:50', '2020-01-25 15:38:01', '2020-01-25 15:38:01'),
(138, 'B7F5A933-CF1A-D84F-34BB-F6F080589B31', 'K', '5e283bdbe61a6', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'K@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:30:28', '2020-01-25 15:38:36', '2020-01-25 15:38:36'),
(139, '11D90170-431B-90B0-4046-BC6FEC3247AF', 'M', '5e283bdbe7c46', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'M@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:30:49', '2020-01-25 15:41:20', '2020-01-25 15:41:20'),
(140, '7E74FD44-8232-A275-5887-5AB1903D5D34', 'N', '5e283bdbe9fb2', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'N@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:31:26', '2020-01-25 15:42:00', '2020-01-25 15:42:00'),
(141, '95AB03DE-F30F-E960-94EF-368821B91967', 'O', '5e283bdbebb6f', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', 'O@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:31:50', '2020-01-25 15:42:45', '2020-01-25 15:42:45'),
(142, 'A98ECA89-E151-C2C9-9D57-85EB3C445A65', 'P', '5e283bdbedc38', 1, 0, 'e10adc3949ba59abbe56e057f20f883e', 'P@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:33:01', '2020-01-26 12:14:01', '2020-01-26 12:14:01'),
(143, '6CDBE37F-3353-471F-6D92-D81EE1E72552', 'Q', '5e283bdbef840', 1, 0, 'e10adc3949ba59abbe56e057f20f883e', 'Q@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:33:23', '2020-01-26 11:38:19', '2020-01-26 11:38:19'),
(144, '1911C554-FBD8-D0FE-FB1C-9AFC33CCC308', 'R', '5e283bdbf1f16', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'R@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:34:17', '2020-01-25 15:34:17', '2020-01-25 15:34:17'),
(145, '32A6C657-A11F-DDA9-7EBB-98D16A49FA97', 'S', '5e283bdbf3a00', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'S@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:34:50', '2020-01-25 15:34:50', '2020-01-25 15:34:50'),
(146, '433F1359-4615-0F3F-C4C5-745F8EE848BD', 'T', '5e283bdc019f8', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'T@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:35:32', '2020-01-25 15:35:32', '2020-01-25 15:35:32'),
(147, 'F4891D08-CCFF-827D-8F62-503ADECFC713', 'U', '5e283bdc06c5b', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'U@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:36:06', '2020-01-25 15:36:06', '2020-01-25 15:36:06'),
(148, '892BB85C-29A3-DD78-0BCF-154DDD9198FE', 'V', '5e283eff49ef6', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'V@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:37:45', '2020-01-25 15:37:45', '2020-01-25 15:37:45'),
(149, '1EB8865C-EEFE-A861-C20B-AAF0A7A4C874', 'X', '5e283eff54846', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'X@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:38:01', '2020-01-25 15:38:01', '2020-01-25 15:38:01'),
(150, '35EAF63A-1F65-3970-6FE6-67BA5AB3F5BD', 'Y', '5e283eff56a78', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'Y@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:38:20', '2020-01-25 15:38:20', '2020-01-25 15:38:20'),
(151, 'B84132C9-CCC8-3040-2EBC-31DCC273C4D0', 'Z', '5e283eff60c3f', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'Z@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:38:36', '2020-01-25 15:38:36', '2020-01-25 15:38:36'),
(152, '761AD7D2-AACE-051F-2A68-6C4FB25066C6', 'AA', '5e283eff6a84c', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'AA@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:40:32', '2020-01-25 15:40:32', '2020-01-25 15:40:32'),
(153, '5ACDC926-99F4-AD82-8086-BC36F315F99F', 'BB', '5e283eff7be9a', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'BB@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:41:20', '2020-01-25 15:41:20', '2020-01-25 15:41:20'),
(154, '06D99324-5C4D-DB5C-A62B-AC810188EAC0', 'CC', '5e283eff7e1da', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'CC@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:41:45', '2020-01-25 15:41:45', '2020-01-25 15:41:45'),
(155, 'BA08D31C-B14E-0154-79D3-9D04F7C3A7C1', 'DD', '5e283eff7fd69', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'DD@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:42:00', '2020-01-25 15:42:00', '2020-01-25 15:42:00'),
(156, '59BF0C78-E332-B0D0-90AA-CB6F7952C699', 'EE', '5e283eff821be', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'EE@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:42:32', '2020-01-25 15:42:32', '2020-01-25 15:42:32'),
(157, '077D83E2-B026-9D5E-4E24-F68802CCE483', 'FF', '5e283eff83ea0', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'FF@gmail.com.com', '01821642155', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-25 15:42:45', '2020-01-25 15:42:45', '2020-01-25 15:42:45'),
(158, 'C654C209-098A-BB91-0A19-C0413C7E79E9', 'SingleHand', '5e283eff863df', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'singlehand@gmail.com', '01677309766', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-26 11:38:19', '2020-01-26 11:38:19', '2020-01-26 11:38:19'),
(159, '5F9CFDF0-23C4-CB56-8F8F-DCF13B22AECB', 'SingleHand2', '5e283eff88053', 0, 0, 'e10adc3949ba59abbe56e057f20f883e', 'singlehand2@gmail.com', '01677309766', '', 'Basic', 1, 1, 1, 1, 1, 0, '2020-01-26 12:14:01', '2020-01-26 12:14:01', '2020-01-26 12:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `tblusertree`
--

CREATE TABLE `tblusertree` (
  `UsertreeID` int(11) NOT NULL,
  `UsertreeUUID` varchar(100) DEFAULT NULL,
  `DirectReferralName` varchar(255) NOT NULL,
  `ChildName` varchar(255) NOT NULL,
  `UserIDInserted` int(11) NOT NULL DEFAULT '0',
  `UserIDUpdated` int(11) NOT NULL DEFAULT '0',
  `UserIDLocked` int(11) NOT NULL DEFAULT '0',
  `DateInserted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateUpdated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateLocked` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tblusertree`
--

INSERT INTO `tblusertree` (`UsertreeID`, `UsertreeUUID`, `DirectReferralName`, `ChildName`, `UserIDInserted`, `UserIDUpdated`, `UserIDLocked`, `DateInserted`, `DateUpdated`, `DateLocked`) VALUES
(12, '1DC74C93-D82A-D831-8510-2F91B64D85C1', 'B', 'E', 1, 1, 0, '2020-01-25 15:26:23', '2020-01-25 15:26:23', '2020-01-25 15:26:23'),
(11, '99CFEBD8-6626-89BE-6850-D48C19D41457', 'A', 'D', 1, 1, 0, '2020-01-25 15:25:17', '2020-01-25 15:25:17', '2020-01-25 15:25:17'),
(10, '61CC0E7E-535B-02AA-37F2-8CA65A474881', 'A', 'C', 1, 1, 0, '2020-01-25 15:24:27', '2020-01-25 15:24:27', '2020-01-25 15:24:27'),
(9, '93B87FCD-64CC-67DA-9417-C15700602A5B', 'admin', 'B', 1, 1, 0, '2020-01-25 15:22:34', '2020-01-25 15:22:34', '2020-01-25 15:22:34'),
(8, '31040FE8-82C7-E2E2-1B54-58BC18850A28', 'admin', 'A', 1, 1, 0, '2020-01-25 15:21:40', '2020-01-25 15:21:40', '2020-01-25 15:21:40'),
(13, '1DCBD28A-CE64-D87B-2C12-6217A5AFAF31', 'B', 'F', 1, 1, 0, '2020-01-25 15:26:59', '2020-01-25 15:26:59', '2020-01-25 15:26:59'),
(14, '1526DE01-9879-5F1E-5740-5AE7A2F09DD1', 'C', 'G', 1, 1, 0, '2020-01-25 15:28:01', '2020-01-25 15:28:01', '2020-01-25 15:28:01'),
(15, '28D10D63-EB1E-76FE-3EF6-F9E48A1C3858', 'C', 'H', 1, 1, 0, '2020-01-25 15:28:41', '2020-01-25 15:28:41', '2020-01-25 15:28:41'),
(16, 'C12A8C0F-89F0-48F1-134D-5029CCF5D25B', 'D', 'I', 1, 1, 0, '2020-01-25 15:29:20', '2020-01-25 15:29:20', '2020-01-25 15:29:20'),
(17, '3862D1E8-4BC6-3488-8071-CD5E4E3CCEEE', 'D', 'J', 1, 1, 0, '2020-01-25 15:29:50', '2020-01-25 15:29:50', '2020-01-25 15:29:50'),
(18, 'BD75B193-7AFA-FC98-E322-F8FC7B89F7A0', 'E', 'K', 1, 1, 0, '2020-01-25 15:30:28', '2020-01-25 15:30:28', '2020-01-25 15:30:28'),
(19, 'EC88B55A-8109-FEAC-06EE-B625143276C1', 'E', 'M', 1, 1, 0, '2020-01-25 15:30:49', '2020-01-25 15:30:49', '2020-01-25 15:30:49'),
(20, 'AD775571-614A-0922-B58C-E883907E5871', 'F', 'N', 1, 1, 0, '2020-01-25 15:31:26', '2020-01-25 15:31:26', '2020-01-25 15:31:26'),
(21, 'A3A403F0-135A-7440-79FE-A113DBB0EB39', 'F', 'O', 1, 1, 0, '2020-01-25 15:31:50', '2020-01-25 15:31:50', '2020-01-25 15:31:50'),
(22, '43A31604-39E0-D798-0FE6-3E3A95DA8A66', 'G', 'P', 1, 1, 0, '2020-01-25 15:33:01', '2020-01-25 15:33:01', '2020-01-25 15:33:01'),
(23, 'BB7D691A-953E-9E48-ED97-59BABDC69C08', 'G', 'Q', 1, 1, 0, '2020-01-25 15:33:23', '2020-01-25 15:33:23', '2020-01-25 15:33:23'),
(24, '5D387618-4E15-AF02-242A-1083B3B57550', 'H', 'R', 1, 1, 0, '2020-01-25 15:34:17', '2020-01-25 15:34:17', '2020-01-25 15:34:17'),
(25, '427061C2-29AE-0C93-63D8-ABF804609FEE', 'H', 'S', 1, 1, 0, '2020-01-25 15:34:50', '2020-01-25 15:34:50', '2020-01-25 15:34:50'),
(26, '52EED9B1-C1FB-0D0E-E321-C3CC5AAE12B0', 'I', 'T', 1, 1, 0, '2020-01-25 15:35:32', '2020-01-25 15:35:32', '2020-01-25 15:35:32'),
(27, '1D720906-419F-6310-6B84-3118B2FE2D91', 'I', 'U', 1, 1, 0, '2020-01-25 15:36:06', '2020-01-25 15:36:06', '2020-01-25 15:36:06'),
(28, '983BE03B-371B-8884-A24F-052E6D1C00F0', 'J', 'V', 1, 1, 0, '2020-01-25 15:37:45', '2020-01-25 15:37:45', '2020-01-25 15:37:45'),
(29, '708FBF98-1455-B139-0A0F-C6DD8DE9C0B5', 'J', 'X', 1, 1, 0, '2020-01-25 15:38:01', '2020-01-25 15:38:01', '2020-01-25 15:38:01'),
(30, 'C2A5B079-E396-475C-18C6-6E949F78B845', 'K', 'Y', 1, 1, 0, '2020-01-25 15:38:20', '2020-01-25 15:38:20', '2020-01-25 15:38:20'),
(31, '1305FFA6-CE1A-AEEB-6443-814E10DBC677', 'K', 'Z', 1, 1, 0, '2020-01-25 15:38:36', '2020-01-25 15:38:36', '2020-01-25 15:38:36'),
(32, 'F82F2F8C-ACD8-8A9B-A7F4-77A1D6A92440', 'M', 'AA', 1, 1, 0, '2020-01-25 15:40:32', '2020-01-25 15:40:32', '2020-01-25 15:40:32'),
(33, 'E3F023E3-2B2D-EF34-8C81-008C539E78F5', 'M', 'BB', 1, 1, 0, '2020-01-25 15:41:20', '2020-01-25 15:41:20', '2020-01-25 15:41:20'),
(34, '50333D46-A3FE-9281-83E5-403E5451AC54', 'N', 'CC', 1, 1, 0, '2020-01-25 15:41:45', '2020-01-25 15:41:45', '2020-01-25 15:41:45'),
(35, '0B632887-A60F-05EC-FBA7-3EFD3D985789', 'N', 'DD', 1, 1, 0, '2020-01-25 15:42:00', '2020-01-25 15:42:00', '2020-01-25 15:42:00'),
(36, 'BDFC7C70-2E2E-5030-B210-84B6CCEDAEB4', 'O', 'EE', 1, 1, 0, '2020-01-25 15:42:32', '2020-01-25 15:42:32', '2020-01-25 15:42:32'),
(37, '1245064A-28A0-976D-DD4C-A722CD86D3A7', 'O', 'FF', 1, 1, 0, '2020-01-25 15:42:45', '2020-01-25 15:42:45', '2020-01-25 15:42:45'),
(38, '2CAF996A-561B-84E5-D48A-C18CF1083E61', 'Q', 'SingleHand', 1, 1, 0, '2020-01-26 11:38:19', '2020-01-26 11:38:19', '2020-01-26 11:38:19'),
(39, 'CC0B5F45-D88B-AF7B-1167-F86AEEAD0383', 'P', 'SingleHand2', 1, 1, 0, '2020-01-26 12:14:01', '2020-01-26 12:14:01', '2020-01-26 12:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `tblusertype`
--

CREATE TABLE `tblusertype` (
  `UsertypeID` int(11) NOT NULL,
  `UsertypeUUID` varchar(100) DEFAULT NULL,
  `nib_type` varchar(50) DEFAULT NULL,
  `UserIDInserted` int(11) NOT NULL DEFAULT '0',
  `UserIDUpdated` int(11) NOT NULL DEFAULT '0',
  `UserIDLocked` int(11) NOT NULL DEFAULT '0',
  `DateInserted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateUpdated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateLocked` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tblusertype`
--

INSERT INTO `tblusertype` (`UsertypeID`, `UsertypeUUID`, `nib_type`, `UserIDInserted`, `UserIDUpdated`, `UserIDLocked`, `DateInserted`, `DateUpdated`, `DateLocked`) VALUES
(13, NULL, 'Admin', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '5e1ead5ddf285', 'Executive', 0, 0, 0, '2020-01-15 12:12:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '5e1d83a7846f4', 'Moderator', 0, 0, 0, '2020-01-14 15:02:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '5e1d839b91056', 'Editor', 0, 0, 0, '2020-01-14 15:02:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '5e1d83913d693', 'Author', 0, 0, 0, '2020-01-14 15:02:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '5e2bf744dee5f', 'Basic', 0, 0, 0, '2020-01-25 14:07:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `_blankdb`
--

CREATE TABLE `_blankdb` (
  `SettingsID` int(11) NOT NULL,
  `SettingsUUID` varchar(100) DEFAULT NULL,
  `UserIDInserted` int(11) NOT NULL DEFAULT '0',
  `UserIDUpdated` int(11) NOT NULL DEFAULT '0',
  `UserIDLocked` int(11) NOT NULL DEFAULT '0',
  `DateInserted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateUpdated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DateLocked` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivationcode`
--
ALTER TABLE `tblactivationcode`
  ADD PRIMARY KEY (`ActivationcodeID`),
  ADD UNIQUE KEY `ActivationNumber` (`ActivationcodeNumber`);

--
-- Indexes for table `tblautocoder`
--
ALTER TABLE `tblautocoder`
  ADD PRIMARY KEY (`AutoCoderID`);

--
-- Indexes for table `tblpageaccess`
--
ALTER TABLE `tblpageaccess`
  ADD PRIMARY KEY (`PageaccessID`);

--
-- Indexes for table `tblsettings`
--
ALTER TABLE `tblsettings`
  ADD PRIMARY KEY (`SettingsID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `tblusertree`
--
ALTER TABLE `tblusertree`
  ADD PRIMARY KEY (`UsertreeID`);

--
-- Indexes for table `tblusertype`
--
ALTER TABLE `tblusertype`
  ADD PRIMARY KEY (`UsertypeID`);

--
-- Indexes for table `_blankdb`
--
ALTER TABLE `_blankdb`
  ADD PRIMARY KEY (`SettingsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactivationcode`
--
ALTER TABLE `tblactivationcode`
  MODIFY `ActivationcodeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `tblautocoder`
--
ALTER TABLE `tblautocoder`
  MODIFY `AutoCoderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblpageaccess`
--
ALTER TABLE `tblpageaccess`
  MODIFY `PageaccessID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `tblusertree`
--
ALTER TABLE `tblusertree`
  MODIFY `UsertreeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tblusertype`
--
ALTER TABLE `tblusertype`
  MODIFY `UsertypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `_blankdb`
--
ALTER TABLE `_blankdb`
  MODIFY `SettingsID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
