-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2020 at 05:56 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drupal_interview_questions`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drupal_interview_questions`
--

CREATE TABLE `tbl_drupal_interview_questions` (
  `tbl_aks_id` int(11) NOT NULL,
  `aks_description` varchar(256) NOT NULL,
  `windows_linux` varchar(256) NOT NULL,
  `mac` varchar(256) NOT NULL,
  `type_of_aks` varchar(256) NOT NULL,
  `image_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_android_keyboard_shortcuts`
--

INSERT INTO `tbl_drupal_interview_questions` (`tbl_aks_id`, `aks_description`, `windows_linux`, `mac`, `type_of_aks`, `image_location`) VALUES
(1, 'Save all', 'Control+S', 'Command+S', 'General', ''),
(8, 'Synchronize', 'Control+Alt+Y', 'Command+Option+Y', 'General', ''),
(9, 'Maximize/minimize editor	', 'Control+Shift+F12	', 'Control+Command+F12', 'General', ''),
(10, 'Add to favorites	', 'Alt+Shift+F	', 'Option+Shift+F', 'General', ''),
(11, 'Inspect current file with current profile	', 'Alt+Shift+I	', 'Option+Shift+I', 'General', ''),
(12, 'Quick switch scheme	', 'Control+` (backquote)	', 'Control+` (backquote)', 'General', ''),
(13, 'Open settings dialogue	', 'Control+Alt+S	', 'Command+, (comma)', 'General', ''),
(14, 'Open project structure dialog	', 'Control+Alt+Shift+S	', 'Command+; (semicolon)', 'General', ''),
(15, 'Switch between tabs and tool window	', 'Control+Tab	', 'Control+Tab', 'General', ''),
(16, 'Search everything (including code and menus)	', 'Press Shift twice	', 'Press Shift twice', 'Navigating and searching within Studio', ''),
(17, 'Find', 'Control+F	', 'Command+F', 'Navigating and searching within Studio', ''),
(18, 'Find next	', 'F3', 'Command+G', 'Navigating and searching within Studio', ''),
(19, 'Find previous	', 'Shift+F3	', 'Command+Shift+G', 'Navigating and searching within Studio', ''),
(20, 'Replace', 'Control+R	', 'Command+R', 'Navigating and searching within Studio', ''),
(21, 'Find action	', 'Control+Shift+A	', 'Command+Shift+A', 'Navigating and searching within Studio', ''),
(22, 'Search by symbol name	', 'Control+Alt+Shift+N	', 'Command+Option+O', 'Navigating and searching within Studio', ''),
(23, 'Find class	', 'Control+N	', 'Command+O', 'Navigating and searching within Studio', ''),
(24, 'Find file (instead of class)	', 'Control+Shift+N	', 'Command+Shift+O', 'Navigating and searching within Studio', ''),
(25, 'Find in path	', 'Control+Shift+F	', 'Command+Shift+F', 'Navigating and searching within Studio', ''),
(26, 'Open file structure pop-up	', 'Control+F12	', 'Command+F12', 'Navigating and searching within Studio', ''),
(27, 'Navigate between open editor tabs	', 'Alt+Right Arrow or Left Arrow	', 'Control+Right Arrow or Control+Left Arrow', 'Navigating and searching within Studio', ''),
(28, 'Jump to source	', 'F4 or Control+Enter	', 'F4 or Command+Down Arrow', 'Navigating and searching within Studio', ''),
(29, 'Open current editor tab in new window	', 'Shift+F4	', 'Shift+F4', 'Navigating and searching within Studio', ''),
(30, 'Recently opened files pop-up	', 'Control+E	', 'Command+E', 'Navigating and searching within Studio', ''),
(31, 'Recently edited files pop-up	', 'Control+Shift+E	', 'Command+Shift+E', 'Navigating and searching within Studio', ''),
(32, 'Go to last edit location	', 'Control+Shift+Backspace	', 'Command+Shift+Delete', 'Navigating and searching within Studio', ''),
(33, 'Close active editor tab	', 'Control+F4	', 'Command+W', 'Navigating and searching within Studio', ''),
(34, 'Return to editor window from a tool window	', 'Esc', 'Esc', 'Navigating and searching within Studio', ''),
(35, 'Hide active or last active tool window	', 'Shift+Esc	', 'Shift+Esc	', 'Navigating and searching within Studio', ''),
(36, 'Go to line	', 'Control+G	', 'Command+L', 'Navigating and searching within Studio', ''),
(37, 'Open type hierarchy	', 'Control+H	', 'Control+H', 'Navigating and searching within Studio', ''),
(38, 'Open method hierarchy	', 'Control+Shift+H	', 'Command+Shift+H', 'Navigating and searching within Studio', ''),
(39, 'Open call hierarchy	', 'Control+Alt+H	', 'Control+Option+H', 'Navigating and searching within Studio', ''),
(40, 'Zoom in/out	', 'Control+plus or Control+minus	', 'Command+plus or Command+minus', 'Viewing layouts', ''),
(41, 'Fit to screen	', 'Control+0	', 'Command+0', 'Viewing layouts', ''),
(42, 'Actual size	', 'Control+Shift+1	', 'Command+Shift+1', 'Viewing layouts', ''),
(43, 'Toggle between Design and Blueprint modes	', 'B', 'B', 'Design tools: Layout Editor', ''),
(44, 'Toggle between Portrait and Landscape modes	', 'O', 'O', 'Design tools: Layout Editor', ''),
(45, 'Toggle devices	', 'D', 'D', 'Design tools: Layout Editor', ''),
(46, 'Force refresh	', 'R', 'R', 'Design tools: Layout Editor', ''),
(47, 'Toggle render errors panel	', 'E', 'E', 'Design tools: Layout Editor', ''),
(48, 'Delete constraints	', 'Delete or Control+click	', 'Delete or Command+click', 'Design tools: Layout Editor', ''),
(49, 'Zoom in	', 'Control+plus	', 'Command+plus', 'Design tools: Layout Editor', ''),
(50, 'Zoom out	', 'Control+minus	', 'Command+minus', 'Design tools: Layout Editor', ''),
(51, 'Zoom to fit	', 'Control+0	', 'Command+0', 'Design tools: Layout Editor', ''),
(52, 'Pan', 'Hold Space+click and drag	', 'Hold Space+click and drag', 'Design tools: Layout Editor', ''),
(53, 'Go to XML	', 'Control+B	', 'Command+B', 'Design tools: Layout Editor', ''),
(54, 'Select all components	', 'Control+A	', 'Command+A', 'Design tools: Layout Editor', ''),
(55, 'Select multiple components	', 'Shift+click or Control+click	', 'Shift+click or Command+click', 'Design tools: Layout Editor', ''),
(56, 'Zoom in	', 'Control+plus	', 'Command+plus', 'Design tools: Navigation Editor', ''),
(57, 'Zoom out	', 'Control+minus	', 'Command+minus', 'Design tools: Navigation Editor', ''),
(58, 'Zoom to fit	', 'Control+0	', 'Command+0', 'Design tools: Navigation Editor', ''),
(59, 'Pan', 'Hold Space+click and drag	', 'Hold Space+click and drag', 'Design tools: Navigation Editor', ''),
(60, 'Go to XML	', 'Control+B	', 'Command+B', 'Design tools: Navigation Editor', ''),
(61, 'Toggle render errors panel	', 'E', 'E', 'Design tools: Navigation Editor', ''),
(62, 'Group into nested graph	', 'Control+G	', 'Command+G', 'Design tools: Navigation Editor', ''),
(63, 'Cycle through destinations	', 'Tab or Shift+Tab	', 'Tab or Shift+Tab', 'Design tools: Navigation Editor', ''),
(64, 'Select all destinations	', 'Control+A	', 'Command+A', 'Design tools: Navigation Editor', ''),
(65, 'Select multiple destinations	', 'Shift+click or Control+click	', 'Shift+click or Command+click', 'Design tools: Navigation Editor', ''),
(66, 'Generate code (getters, setters, constructors, hashCode/equals, toString, new file, new class)	', 'Alt+Insert	', 'Command+N', 'Writing code', ''),
(67, 'Override methods	', 'Control+O	', 'Control+O', 'Writing code', ''),
(68, 'Implement methods	', 'Control+I	', 'Control+I', 'Writing code', ''),
(69, 'Surround with (if...else / try...catch / etc.)	', 'Control+Alt+T	', 'Command+Option+T', 'Writing code', ''),
(70, 'Delete line at caret	', 'Control+Y	', 'Command+Delete', 'Writing code', ''),
(71, 'Collapse/expand current code block	', 'Control+minus or Control+plus	', 'Command+minus or Command+plus', 'Writing code', ''),
(72, 'Collapse/expand all code blocks	', 'Control+Shift+minus or Control+Shift+plus	', 'Command+Shift+minus or Command+Shift+plus', 'Writing code', ''),
(73, 'Duplicate current line or selection	', 'Control+D	', 'Command+D', 'Writing code', ''),
(74, 'Basic code completion	', 'Control+Space	', 'Control+Space', 'Writing code', ''),
(75, 'Smart code completion (filters the list of methods and variables by expected type)	', 'Control+Shift+Space	', 'Control+Shift+Space', 'Writing code', ''),
(76, 'Complete statement	', 'Control+Shift+Enter	', 'Command+Shift+Enter', 'Writing code', ''),
(77, 'Quick documentation lookup	', 'Control+Q	', 'Control+J', 'Writing code', ''),
(78, 'Show parameters for selected method	', 'Control+P	', 'Command+P', 'Writing code', ''),
(79, 'Go to declaration (directly)	', 'Control+B or Control+click	', 'Command+B or Command+click', 'Writing code', ''),
(80, 'Go to implementations	', 'Control+Alt+B	', 'Command+Option+B', 'Writing code', ''),
(81, 'Go to super-method/super-class	', 'Control+U	', 'Command+U', 'Writing code', ''),
(82, 'Open quick definition lookup	', 'Control+Shift+I	', 'Command+Y', 'Writing code', ''),
(83, 'Toggle project tool window visibility	', 'Alt+1	', 'Command+1', 'Writing code', ''),
(84, 'Toggle bookmark	', 'F11', 'F3', 'Writing code', ''),
(85, 'Toggle bookmark with mnemonic	', 'Control+F11	', 'Option+F3', 'Writing code', ''),
(86, 'Comment/uncomment with line comment	', 'Control+/	', 'Command+/', 'Writing code', ''),
(87, 'Comment/uncomment with block comment	', 'Control+Shift+/	', 'Command+Shift+/', 'Writing code', ''),
(88, 'Select successively increasing code blocks	', 'Control+W	', 'Option+Up', 'Writing code', ''),
(89, 'Decrease current selection to previous state	', 'Control+Shift+W	', 'Option+Down', 'Writing code', ''),
(90, 'Move to code block start	', 'Control+[	', 'Option+Command+[', 'Writing code', ''),
(91, 'Move to code block end	', 'Control+]	', 'Option+Command+]', 'Writing code', ''),
(92, 'Select to the code block start	', 'Control+Shift+[	', 'Option+Command+Shift+[', 'Writing code', ''),
(93, 'Select to the code block end	', 'Control+Shift+]	', 'Option+Command+Shift+]', 'Writing code', ''),
(94, 'Delete to end of word	', 'Control+Delete	', 'Option+Delete', 'Writing code', ''),
(95, 'Delete to start of word	', 'Control+Backspace	', 'Option+Delete', 'Writing code', ''),
(96, 'Optimize imports	', 'Control+Alt+O	', 'Control+Option+O', 'Writing code', ''),
(97, 'Project quick fix (show intention actions and quick fixes)	', 'Alt+Enter	', 'Option+Enter', 'Writing code', ''),
(98, 'Reformat code	', 'Control+Alt+L	', 'Command+Option+L', 'Writing code', ''),
(99, 'Auto-indent lines	', 'Control+Alt+I	', 'Control+Option+I', 'Writing code', ''),
(100, 'Indent/unindent lines	', 'Tab or Shift+Tab	', 'Tab or Shift+Tab', 'Writing code', ''),
(101, 'Smart line join	', 'Control+Shift+J	', 'Control+Shift+J', 'Writing code', ''),
(102, 'Smart line split	', 'Control+Enter	', 'Command+Enter', 'Writing code', ''),
(103, 'Start new line	', 'Shift+Enter	', 'Shift+Enter', 'Writing code', ''),
(104, 'Next/previous highlighted error	', 'F2 or Shift+F2	', 'F2 or Shift+F2', 'Writing code', ''),
(105, 'Build', 'Control+F9	', 'Command+F9', 'Build and run', ''),
(106, 'Build and run	', 'Shift+F10	', 'Control+R', 'Build and run', ''),
(107, 'Apply Changes and Restart Activity	', 'Control+F10	', 'Control+Command+R', 'Build and run', ''),
(108, 'Apply Code Changes	', 'Control+Alt+F10	', 'Control+Shift+Command+R', 'Build and run', ''),
(109, 'Debug', 'Shift+F9	', 'Control+D', 'Debugging', ''),
(110, 'Step over	', 'F8', 'F8', 'Debugging', ''),
(111, 'Step into	', 'F7', 'F7', 'Debugging', ''),
(112, 'Smart step into	', 'Shift+F7	', 'Shift+F7', 'Debugging', ''),
(113, 'Step out	', 'Shift+F8	', 'Shift+F8	', 'Debugging', ''),
(114, 'Run to cursor	', 'Alt+F9	', 'Option+F9', 'Debugging', ''),
(115, 'Evaluate expression	', 'Alt+F8	', 'Option+F8', 'Debugging', ''),
(116, 'Resume program	', 'F9', 'Command+Option+R', 'Debugging', ''),
(117, 'Toggle breakpoint	', 'Control+F8	', 'Command+F8', 'Debugging', ''),
(118, 'View breakpoints	', 'Control+Shift+F8	', 'Command+Shift+F8', 'Debugging', ''),
(119, 'Copy', 'F5', 'F5', 'Refactoring', ''),
(120, 'Move', 'F6', 'F6', 'Refactoring', ''),
(121, 'Safe delete	', 'Alt+Delete	', 'Command+Delete', 'Refactoring', ''),
(122, 'Rename', 'Shift+F6	', 'Shift+F6', 'Refactoring', ''),
(123, 'Change signature	', 'Control+F6	', 'Command+F6', 'Refactoring', ''),
(124, 'Inline', 'Control+Alt+N	', 'Command+Option+N', 'Refactoring', ''),
(125, 'Extract method	', 'Control+Alt+M	', 'Command+Option+M', 'Refactoring', ''),
(126, 'Extract variable	', 'Control+Alt+V	', 'Command+Option+V', 'Refactoring', ''),
(127, 'Extract field	', 'Control+Alt+F	', 'Command+Option+F', 'Refactoring', ''),
(128, 'Extract constant	', 'Control+Alt+C	', 'Command+Option+C', 'Refactoring', ''),
(129, 'Extract parameter	', 'Control+Alt+P	', 'Command+Option+P', 'Refactoring', ''),
(130, 'Commit project to VCS	', 'Control+K	', 'Command+K', 'Version control / local history', ''),
(131, 'Update project from VCS	', 'Control+T	', 'Command+T', 'Version control / local history', ''),
(132, 'View recent changes	', 'Alt+Shift+C	', 'Option+Shift+C', 'Version control / local history', ''),
(133, 'Open VCS popup	', 'Alt+` (backquote)	', 'Control+V', 'Version control / local history', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_drupal_interview_questions`
--
ALTER TABLE `tbl_drupal_interview_questions`
  ADD PRIMARY KEY (`tbl_aks_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_drupal_interview_questions`
--
ALTER TABLE `tbl_drupal_interview_questions`
  MODIFY `tbl_aks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
