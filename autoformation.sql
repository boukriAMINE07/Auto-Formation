-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 19 juin 2021 à 22:12
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autoformation`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapitre`
--

CREATE TABLE `chapitre` (
  `idchapitre` int(11) NOT NULL,
  `idlangage` int(11) NOT NULL,
  `nomChapitre` text NOT NULL,
  `pdf` text NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chapitre`
--

INSERT INTO `chapitre` (`idchapitre`, `idlangage`, `nomChapitre`, `pdf`, `video`) VALUES
(3, 8, 'LES BASES & PREREQUIS', 'documents/java.pdf', 'https://www.youtube.com/watch?v=XgVADKKb4jI'),
(4, 8, 'LES VARIABLES', 'documents/java.pdf', 'https://www.youtube.com/watch?v=SvPGiy5UXRI'),
(5, 8, 'LES TABLEAUX', 'documents/java.pdf', 'https://www.youtube.com/watch?v=rvjAPI89QnE'),
(6, 8, 'LES FONCTIONS', 'documents/java.pdf', 'https://www.youtube.com/watch?v=rJx9Q-aYuAA'),
(7, 8, 'LES OBJETS', 'documents/java.pdf', 'https://www.youtube.com/watch?v=IvHUljLP3NY'),
(8, 8, 'L\'HERITAGE 1/2', 'documents/java.pdf', 'https://www.youtube.com/watch?v=gdHOsaGBbPA'),
(9, 8, 'LES INTERFACES - L\'HERITAGE 2/2', 'documents/java.pdf', 'https://www.youtube.com/watch?v=ymRGWkyrFnI'),
(10, 8, 'LES ENUMERATIONS', 'documents/java.pdf', 'https://www.youtube.com/watch?v=pbAkJiz-DNU'),
(11, 8, 'LES ARRAYLISTS', 'documents/java.pdf', 'https://www.youtube.com/watch?v=w56ZbRlnyDg'),
(12, 8, 'LES HASHMAPS', 'documents/java.pdf', 'https://www.youtube.com/watch?v=FGU-imprdKs'),
(13, 8, 'LA SURCHARGE', 'documents/java.pdf', 'https://www.youtube.com/watch?v=_IwGb_hYMuY'),
(14, 3, 'LES BASES & PREREQUIS', 'documents/python.pdf', 'https://www.youtube.com/watch?v=psaDHhZ0cPs'),
(15, 3, 'LES VARIABLES', 'documents/python.pdf', 'https://www.youtube.com/watch?v=nvyX8JfoOWY'),
(16, 3, 'LES CONDITIONS', 'documents/python.pdf', 'https://www.youtube.com/watch?v=_AgUOsvMt8s'),
(17, 3, 'LES LISTES', 'documents/python.pdf', 'https://www.youtube.com/watch?v=kyxF5eH3Kic'),
(18, 3, 'LES BOUCLES', 'documents/python.pdf', 'https://www.youtube.com/watch?v=BrknhzrHm8w'),
(19, 3, 'LES FONCTIONS', '	 documents/python.pdf', 'https://www.youtube.com/watch?v=sgJt64iTOYM'),
(20, 3, ' LES OBJETS', '	 documents/python.pdf', 'https://www.youtube.com/watch?v=dfUM_9xibf8'),
(21, 3, 'L\'HERITAGE', '	 documents/python.pdf', 'https://www.youtube.com/watch?v=fW4818AS88I'),
(22, 3, 'INTERFACE GRAPHIQUE (avec Tkinter)', '	 documents/python.pdf', 'https://www.youtube.com/watch?v=N4M4W7JPOL4'),
(23, 3, 'LES FICHIERS', '	 documents/python.pdf', 'https://www.youtube.com/watch?v=jOHpZg8k668'),
(24, 6, 'Télécharger et Installer MySQL', 'documents/SQL.pdf', 'https://www.youtube.com/watch?v=Dwg55yEs6q4'),
(25, 6, 'Concepts du langage SQL', 'documents/SQL.pdf', 'https://www.youtube.com/watch?v=WolMLUXs_mY'),
(26, 6, 'Instruction SELECT et la projection', 'documents/SQL.pdf', 'https://www.youtube.com/watch?v=lG0zNMhP2eQ'),
(27, 6, 'Restriction WHERE', 'documents/SQL.pdf', 'https://www.youtube.com/watch?v=otHAUhKY4ZY'),
(28, 6, 'Introduction l\'opération Jointure', 'documents/SQL.pdf', 'https://www.youtube.com/watch?v=Vq2dCxzSHGs'),
(29, 6, 'Les types de Jointures', 'documents/SQL.pdf', 'https://www.youtube.com/watch?v=ziYrtlEYxEU'),
(30, 6, 'Sous requêtes', 'documents/SQL.pdf', 'https://www.youtube.com/watch?v=2aaj03xNk-U'),
(31, 6, 'Regroupement GROUP BY', 'documents/SQL.pdf', 'https://www.youtube.com/watch?v=aLs8bvkeAFo'),
(32, 6, 'La division', 'documents/SQL.pdf', 'https://www.youtube.com/watch?v=EWQfSRzNmtI'),
(33, 6, 'Opérations Ensembliste', 'documents/SQL.pdf', 'https://www.youtube.com/watch?v=i3-F6_hW1DE'),
(34, 2, 'introduction', 'documents/C.pdf', 'https://www.youtube.com/watch?v=90hGCMC3Chc'),
(35, 2, 'compiler programme', 'documents/C.pdf', 'https://www.youtube.com/watch?v=6E-zrVV2tSg'),
(36, 2, 'variables', 'documents/C.pdf', 'https://www.youtube.com/watch?v=kKeGTDyvi1o'),
(37, 2, 'lire données au clavier', 'documents/C.pdf', 'https://www.youtube.com/watch?v=I9xlZGDMfrw'),
(38, 2, 'opérateurs', 'documents/C.pdf', 'https://www.youtube.com/watch?v=imc6C96-TW8'),
(39, 2, 'conditions', 'documents/C.pdf', 'https://www.youtube.com/watch?v=_MP8yZjQCgk'),
(40, 2, 'Boucles', 'documents/C.pdf', 'https://www.youtube.com/watch?v=in-XJLbQ1iY'),
(41, 2, 'fonctions', 'documents/C.pdf', 'https://www.youtube.com/watch?v=TT2RbNKr4aU'),
(42, 2, 'programmation modulaire', 'documents/C.pdf', 'https://www.youtube.com/watch?v=tXgSx9MkVjs'),
(43, 2, 'préprocesseur', 'documents/C.pdf', 'https://www.youtube.com/watch?v=L8q1wJ8z7Ts'),
(44, 2, 'pointeurs', 'documents/C.pdf', 'https://www.youtube.com/watch?v=Qra-0U_jEKs'),
(45, 2, 'tableaux', 'documents/C.pdf', 'https://www.youtube.com/watch?v=6nkUWnCoRp4'),
(46, 2, 'chaînes de caractères', 'documents/C.pdf', 'https://www.youtube.com/watch?v=tDE4FNCcP0k'),
(47, 2, 'structures et types', 'documents/C.pdf', 'https://www.youtube.com/watch?v=1Kmq-9knIUY'),
(48, 2, 'allocation dynamique mémoire', 'documents/C.pdf', 'https://www.youtube.com/watch?v=71QV6fFl_bk'),
(49, 2, 'fichiers', 'documents/C.pdf', 'https://www.youtube.com/watch?v=j1lHUmwnmA0'),
(50, 2, 'piles', 'documents/C.pdf', 'https://www.youtube.com/watch?v=zERZNLuxtyU'),
(51, 2, 'files', 'documents/C.pdf', 'https://www.youtube.com/watch?v=OV8f1hRsNP4'),
(52, 2, 'listes', 'documents/C.pdf', 'https://www.youtube.com/watch?v=FmaNOdbngLc'),
(53, 2, 'listes doublement chaînées', 'documents/C.pdf', 'https://www.youtube.com/watch?v=589GpRJ6VFo'),
(54, 2, 'arbres binaires', 'documents/C.pdf', 'https://www.youtube.com/watch?v=x56yrmgx5B4'),
(55, 1, 'Introduction', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=BXhTv9j8GEw'),
(56, 1, 'Classes, objets, attributs et méthodes en C++', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=VBgKVy_tU3U'),
(57, 1, 'public: et private:', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=9XhifY44xsY'),
(58, 1, 'Encapsulation et abstraction : résumé', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=R3Lftz6lVWk'),
(59, 1, 'Constructeurs (introduction)', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=otlZtRPeYDk'),
(60, 1, 'Constructeurs par défaut en C++', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=TC0NyB9V0Ic'),
(61, 1, 'Destructeurs', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=_q1Q10d8kMA'),
(62, 1, 'Variables et méthodes de classe', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=f9nnAxOlVQ0'),
(63, 1, 'Surcharge d\'opérateurs : introduction', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=xU_Yc9AaHzw'),
(64, 1, 'Surcharge d\'opérateurs : compléments', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=YRrBc0ZQEI8'),
(65, 1, 'Héritage : concepts', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=V_kB7LXkIbc'),
(66, 1, 'Héritage : droit protégé', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=0tTFli4F-FY'),
(67, 1, 'Héritage : constructeurs (1)', 'documents/C++.pdf', 'Héritage : constructeurs (1)'),
(68, 1, 'Polymorphisme et résolution dynamique des liens', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=FK-ZyQ7N5lw'),
(69, 1, 'Polymorphisme : méthodes virtuelles', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=_2pt_aZ1EjM'),
(70, 1, 'Héritage multiple (1) : concept et constructeurs', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=OQbz7KXxcZ0'),
(71, 1, 'Héritage multiple : masquage', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=lNOZi1Yx39Q'),
(72, 1, 'Classes virtuelles', 'documents/C++.pdf', 'https://www.youtube.com/watch?v=1Pcp5RRQwfM'),
(73, 4, 'Introduction au langage', 'documents/php.pdf', 'https://www.youtube.com/watch?v=B51ueyhRvws'),
(74, 4, 'Environnement d\'exécution de php', 'documents/php.pdf', 'https://www.youtube.com/watch?v=pTWh8I6rWrI'),
(75, 4, 'PDO et accès aux bases de données', 'documents/php.pdf', 'https://www.youtube.com/watch?v=XMKJfSMoKVs'),
(76, 4, 'Les cookies', 'documents/php.pdf', 'https://www.youtube.com/watch?v=cpafceZ_n8M'),
(77, 4, 'Les sessions', 'documents/php.pdf', 'https://www.youtube.com/watch?v=lIEWvgNxngU'),
(78, 4, 'ECommerce : exemple d\'utilisation des sessions', 'documents/php.pdf', 'https://www.youtube.com/watch?v=VoAzsliCO1w'),
(79, 4, 'JSON PHP et Javascript', 'documents/php.pdf', 'https://www.youtube.com/watch?v=HV8lYocqcTA'),
(80, 4, 'CRUD avec PDO et bootstrap', 'documents/php.pdf', 'https://www.youtube.com/watch?v=Ue56YQA375I'),
(81, 4, 'Programmation Orientée Objet en PHP', 'documents/php.pdf', 'https://www.youtube.com/watch?v=iiBdfJQe7jI'),
(82, 4, 'Programmation Orientée Objet en PHP', 'documents/php.pdf', 'https://www.youtube.com/watch?v=0efHiQUEmow');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `idCommentaire` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `dateCommentaire` date NOT NULL,
  `idEtudiant` int(11) NOT NULL,
  `idlangage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`idCommentaire`, `commentaire`, `dateCommentaire`, `idEtudiant`, `idlangage`) VALUES
(1, 'C++ is a general-purpose programming language. It was originally designed as an extension to C and has a similar syntax, but it is now a completely different language. Use this tag for questions about code (to be) compiled with a C++ compiler. Use a version-specific tag for questions related to a specific standard revision [C++11], [C++14], [C++17], [C++20] or [C++23], etc.', '2021-03-27', 6, 1),
(2, 'Python is a multi-paradigm, dynamically typed, multipurpose programming language. It is designed to be quick to learn, understand, and use, and enforce a clean and uniform syntax. Please note that Python 2 is officially out of support as of 01-01-2020. Still, for version-specific Python questions, add the [python-2.7] or [python-3.x] tag. When using a Python variant (e.g., Jython, PyPy) or library (e.g., Pandas and NumPy), please include it in the tags.', '2021-06-18', 1, 3),
(6, 'Parameters and local variables are allocated on the stack (with reference types, the object lives on the heap and a variable in the stack references that object on the heap). The stack typically lives at the upper end of your address space and as it is used up it heads towards the bottom of the address space (i.e. towards zero).\r\n\r\nYour process also has a heap, which lives at the bottom end of your process. As you allocate memory, this heap can grow towards the upper end of your address space. As you can see, there is a potential for the heap to \"collide\" with the stack (a bit like tectonic plates!!!).\r\n\r\nThe common cause for a stack overflow is a bad recursive call. Typically, this is caused when your recursive functions doesn\'t have the correct termination condition, so it ends up calling itself forever. Or when the termination condition is fine, it can be caused by requiring too many recursive calls before fulfilling it.', '2021-06-16', 6, 8);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `IDETUDIANT` int(11) NOT NULL,
  `NOM` text DEFAULT NULL,
  `PRENOM` text DEFAULT NULL,
  `DATENAISSANCE` date DEFAULT NULL,
  `PAYE` text DEFAULT NULL,
  `DATEINSCRIPTION` date DEFAULT NULL,
  `ETAT` int(1) DEFAULT NULL,
  `emailEtudiant` varchar(100) DEFAULT NULL,
  `motpasse` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`IDETUDIANT`, `NOM`, `PRENOM`, `DATENAISSANCE`, `PAYE`, `DATEINSCRIPTION`, `ETAT`, `emailEtudiant`, `motpasse`) VALUES
(1, 'boukri', 'malak', '2009-03-02', 'maroc', '2021-03-04', 1, 'malak@gmail.com', 'malak'),
(6, 'sad', 'laila', '2021-03-04', 'maroc', '2021-03-04', 1, 'sadlaila@gmail.com', 'laila');

-- --------------------------------------------------------

--
-- Structure de la table `langages`
--

CREATE TABLE `langages` (
  `idlangage` int(11) NOT NULL,
  `designationlangage` text NOT NULL,
  `descriptionlangage` text NOT NULL,
  `logolangage` text NOT NULL,
  `dateappirition` date DEFAULT NULL,
  `quiz` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `langages`
--

INSERT INTO `langages` (`idlangage`, `designationlangage`, `descriptionlangage`, `logolangage`, `dateappirition`, `quiz`) VALUES
(1, 'C++', 'C++ est un langage de programmation compilé permettant la programmation sous de multiples paradigmes, dont la programmation procédurale, la programmation orientée objet et la programmation générique. Ses bonnes performances, et sa compatibilité avec le C en font un des langages de programmation les plus utilisés dans les applications où la performance est critique.', 'images/c++.png', '2021-02-01', 'https://astuces-informatique.com/quiz-cplusplus/'),
(2, 'C', 'C est un langage de programmation impératif généraliste, de bas niveau. Inventé au début des années 1970 pour réécrire UNIX, C est devenu un des langages les plus utilisés, encore de nos jours. De nombreux langages plus modernes comme C++, C#, Java et PHP ou Javascript ont repris une syntaxe similaire au C et reprennent en partie sa logique. C offre au développeur une marge de contrôle importante sur la machine (notamment sur la gestion de la mémoire) et est de ce fait utilisé pour réaliser les « fondations » (compilateurs, interpréteurs…) de ces langages plus modernes.', 'images/c.png', '2021-03-02', 'https://ensiwiki.ensimag.fr/index.php?title=QCM_Bases_C'),
(3, 'Python', 'Python est un langage de programmation qui peut s\'utiliser dans de nombreux contextes et s\'adapter à tout type d\'utilisation grâce à des bibliothèques spécialisées. Il est cependant particulièrement utilisé comme langage de script pour automatiser des tâches simples mais fastidieuses, comme un script qui récupérerait la météo sur Internet ou qui s\'intégrerait dans un logiciel de conception assistée par ordinateur afin d\'automatiser certains enchaînements d\'actions répétitives (voir la section Adoption). On l\'utilise également comme langage de développement de prototype lorsqu\'on a besoin d\'une application fonctionnelle avant de l\'optimiser avec un langage de plus bas niveau. Il est particulièrement répandu dans le monde scientifique, et possède de nombreuses bibliothèques optimisées destinées au calcul numérique.', 'images/python.png', '2021-03-01', 'https://www.qcmquiz.com/QUESTIONNAIRES/Quiz-Langage%20Python.php'),
(4, 'php', 'PHP: Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP. PHP est un langage impératif orienté objet. Il s\'agit d\'un langage de script interprété côté serveur.  Il est considéré comme une des bases de la création de sites web dits dynamiques mais également des applications web. PHP a permis de créer un grand nombre de sites web célèbres, comme Facebook, Wikipédia, etc.  Le logo considéré comme officiel du PHP est l\'éléPHPant avec l\'acronyme PHP sur son côté. Il est créé en 1998 par Vincent Pontier.', 'images/php.png', '2021-03-02', 'https://www.qcmquiz.com/QUESTIONNAIRES/QCM-PHP7.php'),
(6, 'sql', 'Le SQL (Structured Query Language) est un langage permettant de communiquer avec une base de données. Ce langage informatique est notamment très utilisé par les développeurs web pour communiquer avec les données d’un site web. SQL.sh recense des cours de SQL et des explications sur les principales commandes pour lire, insérer, modifier et supprimer des données dans une base.', 'images/SQL.png', '2021-03-02', 'https://fr.wikiversity.org/wiki/Structured_Query_Language/Quiz/QCM_SQL'),
(8, 'Java', 'Java est un langage de programmation populaire et est utilisé à grande échelle dans le monde entier pour le développement d\'applications. Il présente des avantages tels que le multithreading, l\'extensibilité, la gestion de la mémoire, la haute sécurité, le support communautaire, etc.', 'images/java.png', '2021-05-03', 'https://www.qcmquiz.com/QUESTIONNAIRES/QCM-Langage-Objet-Java.php');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `idmessage` int(11) NOT NULL,
  `idetudiant` int(11) NOT NULL,
  `dateMessage` date NOT NULL,
  `objet` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `IDQUESTION` int(11) NOT NULL,
  `IDCHAPITRE` int(11) NOT NULL,
  `QUESTION` text DEFAULT NULL,
  `PROPO1` text DEFAULT NULL,
  `PROPO2` text DEFAULT NULL,
  `PROPO3` text DEFAULT NULL,
  `PROPOCORRECTE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD PRIMARY KEY (`idchapitre`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`idCommentaire`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`IDETUDIANT`);

--
-- Index pour la table `langages`
--
ALTER TABLE `langages`
  ADD PRIMARY KEY (`idlangage`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`idmessage`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`IDQUESTION`),
  ADD KEY `FK_CORRESPOND` (`IDCHAPITRE`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chapitre`
--
ALTER TABLE `chapitre`
  MODIFY `idchapitre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `idCommentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `IDETUDIANT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `langages`
--
ALTER TABLE `langages`
  MODIFY `idlangage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
