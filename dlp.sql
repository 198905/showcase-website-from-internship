-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 30 sep. 2021 à 20:41
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dlp`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texte` text NOT NULL,
  `photo` text NOT NULL,
  `titre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `texte`, `photo`, `titre`) VALUES
(61, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore aspernatur aliquid ut, dolorem odit omnis? Itaque, \r\n                    facere corporis autem doloremque dolor delectus nemo ipsum sint tenetur, molestias, architecto quasi. \r\n                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore aspernatur aliquid ut, dolorem odit omnis?\r\n               ', 'images/demain-le-printemps-masterclass-1.jpg', 'Actualite');

-- --------------------------------------------------------

--
-- Structure de la table `admissions`
--

DROP TABLE IF EXISTS `admissions`;
CREATE TABLE IF NOT EXISTS `admissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

DROP TABLE IF EXISTS `eleves`;
CREATE TABLE IF NOT EXISTS `eleves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=206 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`id`, `nom`, `prenom`, `photo`, `description`) VALUES
(44, 'DAVID ', 'Romain', 'images/eleves/romain_david.jpg', 'Après Minsk…\r\n\r\nRomain continue dans le théâtre. En 2005, en entrant au Conservatoire de Liège (Belgique), il fonde un groupe, le « Raoul Collectif« , qui regroupe des acteurs et des créateurs. \r\nEn 2012, il crée le Signal du Promeneur au Théâtre National. La même année, il joue dans Noir Océan, de Marion Hänsel, et il est nommé pour le Magritte du Meilleur espoir masculin.\r\n\r\nOn l’associe aux travaux de metteurs en scène tel que Willy Thomas, Guy Dermul, Christophe Sermet, Nicolas Luçon, Sébastien Foucault…\r\nIl présentera cette année deux créations originales dans le cadre du projet Tok Toc Knock au KVS, et sera présent sur les scènes du Théâtre National et de la Bastille (Paris) avec le Raoul Collectif. '),
(43, 'CERVINKA', 'Anna', 'images/eleves/anna_cervinka.jpg', 'Son histoire …\r\n\r\nAnna a suivi la formation Demain le printemps à Minsk en 2008 après avoir étudié au Conservatoire Royal de Bruxelles.\r\n\r\nElle a ensuite travaillé avec différents metteurs en scène belges tel que Philippe Sireuil et Daniel Hanssens. \r\nEn 2010, elle est nommée Espoir féminin au prix de la critique 2010 pour « Le langue-à-langue des chiens de roche » de Daniel Danis. \r\nEn 2014, elle entre en tant que pensionnaire à la Comédie-Française où elle y tient son premier rôle dans « Tartuffe ».\r\n\r\nÀ Paris, elle a joué dans deux pièces au Théâtre de la colline, « Danse Delhi » de Ivan Viripaev et « Liliom » de Ferenc Molnar, toutes les deux mises en scène de Galin Stoev.\r\n'),
(50, 'SEYNAVE', 'Samuel', 'images/eleves/Samuel_Seynave.jpg', ''),
(49, 'NUBIOLA', 'Esther', 'images/eleves/esther_nubiola.jpg', 'Après Minsk…\r\n\r\nEsther, après son stage en 2002, a continuée sur sa lancée et a tournée dans plusieurs productions. On la retrouve en 2007 dans « Mort prématurée » réalisé par José Pinhéro; « Little Ashes » en 2008 par Paul Morrison au coté de Robert Pattinson; « La Dame de Monsoreau » en 2008 et 2009, une série télévisée.\r\n\r\nElle a aussi tournée dans :\r\n\r\n2006 Tirante el Blanco (Carmesina)\r\n2002 El encantador de serpientes (Albertina)\r\n2002 Hospital Central (Sandra)\r\n2002 El séptimo mandamiento (Sandra)\r\n'),
(48, 'MARCHINA', 'Clara', 'images/eleves/', 'Son histoire …\r\n\r\nClara s’est formée à  l’Académie des Arts de Minsk pendant 2 ans aux masterclass 8 et 9. A la suite de cette formation, elle a suivi des cours avec Coco Felgeirolles et a suivi une formation artistique et musicale au Studio des Variétés.\r\n\r\nDésormais, Clara est comédienne et chanteuse. Elle écrit, compose et interprète ses titres accompagnée de trois musiciens qui participent aux arrangements. Ses influences musicales sont, entre autres, M , Adrienne Pauly, Gainsbourg, Brel et Mano Solo.\r\n\r\nElle sera présente au festival d’Avignon 2016 et jouera avec Stéphane Dupéray, Inès Lopez et Pauline Woestelandt la pièce « CUT », mise en scène par Laurence Laburthe au Théâtre des Barriques, tous les soirs du 7 au 30 juillet au Théâtre des Barriques. « CUT », c’est trois dames qui se croisent dans des toilettes publiques, lieu trivial mais propice aux confidences. Elles n’ont ni nom, ni identité, mais des histoires intimes à révéler malgré elles. De l’enfance à l’âge mûr, du cours d’anglais à la nuit de noce, les différents discours des Dames laissent apparaître la relation qu’elles entretiennent avec le « ça », le sexe féminin, qui semble si difficile à nommer. Peu à peu, la parole se libère et les corps se (re)lâchent.'),
(47, 'LIEVOIS', 'Sibylle', 'images/eleves/sybille.jpg', 'Après Minsk…\r\n\r\nDepuis sa MasterClass, Sibylle s’est dirigée vers le métier de chanteuse. Elle compose ses propres chansons et fait quelques collaborations. Elle se lance à la conquête d’un public et fait des représentations dans les bars parisiens tel que : « La Java« , « Le Chat Noir » et « L’entrepôt« . Elle passe aussi par l’émission de télé-crochet « Pop Star » sur M6.\r\n\r\nElle prépare la maquette de son premier album qu’elle espère présenter à un label de disque fin 2013, début 2014.'),
(46, 'LAZAR ', 'Benjamin', 'images/eleves/lazar_benjamin.jpg', ''),
(45, 'DESROCHERS ', 'Heloise', 'images/eleves/Heloise.jpg', 'Héloïse est une de nos anciennes élèves québécoise. Elle a intégré la Masterclass 11 en 2014, et depuis elle continue sa formation de comédienne. Elle a ensuite suivi un stage au Festival Mimos de mime et de danse-théâtre en Dordogne.\r\nUne fois revenue au Québec, elle a intégré l’Université du Québec à Montréal pour continuer ses études théâtrales et pour préparer ses concours d’admission aux grandes écoles. Elle a d’ailleurs été acceptée à la prestigieuse Ecole nationale de Théatre du Canada pour suivre une formation professionnelle de quatre ans qu’elle débutera en automne 2016.\r\nD’ici là, elle participera à un stage à la Commedia dell’Arte en Italie.\r\nVous pouvez la voir dans le clip de la MA11 avec tous ses collègues.'),
(42, 'CHEVRILLON', 'Emilie', 'images/eleves/chevrilon_emilie.jpg', ''),
(41, 'BELLAVOIR', 'Blandine', 'images/eleves/blandine.jpg', ''),
(40, 'BENYAMINA', 'Houda', 'images/eleves/alice-winocour-et-houna-benyamina-au-quottalkquot-women-in-motion-photo-91.jpg', 'Son histoire …\r\n\r\nHouda a participé au stage d’été de Demain le Printemps en Août 2001. Grâce à sa formation à l’Académie des Arts de Minsk suivie des formations à l’Ontological Theatre et à l’Actors Studio à New York et à l’Ecole Régionale d’Acteurs de Cannes, elle est devenue comédienne mais s’est spécialisée en tant que réalisatrice et scénariste.\r\n\r\nSuite à cela, elle a réalisé 9 courts-métrages plusieurs fois primés et diffusés à la télévision (France 2, Canal+ et Direct 8). Elle a également réalisé une publicité citoyenne pour inciter la population à se rendre dans les bureaux de vote. Elle a réuni dans cette publicité plusieurs célébrités telles que Pierre Richard, Laurent Deutsch et Patrick Timsit.\r\n\r\nGrâce à son premier long métrage Divines, elle obtient en avril 2016 la Caméra d’Or au Festival de Cannes. Ceci représente une réelle consécration pour la réalisatrice, qui lors de la remise de son prix a fait un discours poignant sur la présence des femmes dans le monde du cinéma.\r\n\r\nVous pouvez regardez son discours de remise de prix à Cannes pour Divines, un extrait du film, l’article du journal LeMonde sur elle et sa page wikipédia.'),
(39, 'BONNIN ', 'Roland', 'images/eleves/rolan.jpg', 'Son histoire …\r\nAprès avoir effectué deux stages en Aout, Roland a rejoint la Masterclass 2 en 2005/2006.\r\n\r\nLe travail en Biélorussie lui a tellement plu qu’il a décidé de s’inscrire à l’Académie des Arts de Minsk. Il est donc parti étudier comme Metteur en Scène de Théâtre de Marionnettes, sous les ordres d’Alla Poluhina de 2006 à 2008. Suite à un stage à l’Académie de Saint Petersbourg, il a quitté l’académie de Minsk en 2008 et s’est engagé pour 5 ans en Russie comme Metteur en Scène de théâtre Dramatique dans la classe d’Anatoli Praoudine.\r\n\r\nAu cours de sa 4ème année, il a fondé sa compagnie « Aux Rages De l’Ame » et a monté avec d’autres comédiens et amis son premier spectacle « Huis Clos » de Jean-Paul Sartre, qui les a menés en 2012 au festival Off d’Avignon. Un an plus tard, il a monté en France la pièce de Pouchkine « Mozart et Salieri », ainsi qu’un conte pour enfants en marionnettes « Le prince aux pieds de fée » qu’ils ont présenté au Festival Off de Marionnettes de Charleville-Mézières.\r\n\r\nEn 2015, il est invité à monter « Don Juan » de Molière au théâtre « U Mocta » de Perme. La mise en scène commence juste après les attentats sur Charlie Hebdo et continue alors que commencent des scandales autour de Tannhäuser en Russie. Le spectacle devient donc extrêmement actuel et pertinent dans un contexte d’attaques contre la liberté de l’art et la liberté de penser. Don Juan devient pour les spectateurs un héros face au conservatisme virulent qui écrase les russes actuellement.'),
(38, 'AMBACH ALBERTINI ', 'Aurélien', 'images/eleves/Aurelien Ambach Albertini.jpg', 'Son histoire…\r\n\r\nAprès deux ans de formation dans un conservatoire parisien et avec en poche un DEUG de Philosophie, Aurélien a participé à la Masterclass de 2006 pour s’initier aux méthodes de l’Est grâce à Demain le printemps. De retour en France, il a poursuivi ses études de théâtre en intégrant l’Ecole supérieure associée au Théâtre du Nord à Lille dirigée par Stuart Seide. Dans ce cadre, il a joué dans « La Bonne âme du Se-Tchouan », sous la direction de ce dernier, dans « Andromaque » mis en scène par Anne Delbée et dans « De Foreman à Eschyle » mis en scène par Bernard Sobel.\r\n\r\nDepuis sa sortie de l’école, il a joué dans plusieurs projets notamment « La Supplication » de Svetlana Alexievitch, créé à partir du recueil de témoignages sur la catastrophe de Tchernobyl et mis en scène par Stéphanie Loïc.\r\n\r\nDepuis, il a joué dans :\r\n\r\nMai 2015    Spectacle d’Escrime Théâtrale avec la Cie Scaramouche Championne de France\r\n\r\nMars 2015   Cami ! Humour délices et Morgue Cie H3P mise en scène par Nicolas Ducron\r\n\r\nSept 2014    la Constellation du chien Cie O’Navio mise en scène par Alban Coulaud aux Francophonies\r\n\r\nAu festival Off d’Avignon 2016, il jouera à la Maison IV de Chiffre dans la pièce « Croissance, reviens ! » tous les jours à 15h15 du 7 au 30 Juillet.'),
(37, 'ACHACHE', 'Samuel', 'images/eleves/achache_samuel.jpg', 'Stagiaire à Minsk en Août 2005\r\n\r\nSon histoire…\r\n\r\nAprès Minsk, il intègre le très réputé Conservatoire Royale de Bruxelles.\r\n\r\nIl va par la suite interpréter différentes pièces de théâtre :\r\n\r\n2014/2016 : On ne badine pas avec l’amour\r\n\r\n2013/2014 : Bérénice\r\n\r\n2011/2012 : L’hôtel du libre échange\r\n\r\n2010/2011 : Combat de nègre et de chiens\r\n\r\n2010/2011 : Patrick\r\n\r\n2009/2010 : Lorenzaccio\r\n\r\n2008/2009 : Escurial'),
(32, 'SCHREIBER ', 'Annette', 'images/eleves/', 'Son histoire…\r\n\r\nElle a participé au stage Demain Le Printemps en août  2004.\r\n\r\nAllemande d’origine et de nationalité, elle commence sa carrière par des petits rôles comme dans Hélène et les Garçons, série qu’elle intégrera définitivement en 1996. Elle est de plus mannequin, mais à ce jour c’est en tant que coach et photographe qu’elle s’épanouie réellement.\r\n\r\nAllez donc faire un tour sur son site de photos, ça vaut le détour : http://www.a-pro-photobook.com/'),
(33, 'TOUZALIN MACABIAU', 'Morgane ', 'images/eleves/Demain-le-Printemps-Ecole-Theatrale-Russe-Masterclas-07-TOUZALIN-MACABIAU-Morgane.jpg', 'Après 8 ans de cours de chant lyrique et une première année de Licence en Lettres Modernes option théâtre, Morgane s’est inscrite à la Masterclass 7 et est partie étudier à l’académie des Arts de Minsk grâce à Demain le Printemps.\r\n\r\n\r\nArtiste pluridisciplinaire, Morgane Touzalin Macabiau est une comédienne accomplie, son parcours musical lui a donné une véritable expertise en chant. En ce qui concerne la danse elle a participé à plusieurs événements avec Nadia Vadori et pratique les claquettes. Elle a aussi une carrière de modèle. Voici une de ses performances au sein de l’académie.\r\n\r\nAu Festival d’Avignon 2016, elle présentera avec sa troupe « Les règles du savoir-vivre dans la société moderne« , une pièce de Jean-Luc Lagarce mise en scène par Romain Arnaud-Kneisky, au Théâtre du Roi René du 6 au 30 Juillet, n’hésitez pas à aller la soutenir !'),
(34, 'VACHON', ' Rebecca', 'images/eleves/rebecca.jpg', ''),
(35, 'ROGER', 'Samuel', 'images/eleves/roger_samuel.jpg', ''),
(205, 'rt\'\'', 'hj', 'images/eleves/Screenshot_20210723_231902_com.dropbox.android', 'hj'),
(204, 'injection\\\'\\\'\\\'\\\'', 'fgh', 'images/eleves/1', 'fgh'),
(203, '&lt;balise&gt;', 'test ;\'', 'images/eleves/Screenshot_20210723_231902_com.dropbox.android', 'injection:;\''),
(202, '&lt;balise&gt;', 'test ;\'', 'images/eleves/Screenshot_20210723_231902_com.dropbox.android', 'injection:;\''),
(200, 'test', 'test aussi', 'images/eleves/1', 'f'),
(201, 'test', 'jkhl', 'images/eleves/multimedia presse', 'i');

-- --------------------------------------------------------

--
-- Structure de la table `equipepedagogique`
--

DROP TABLE IF EXISTS `equipepedagogique`;
CREATE TABLE IF NOT EXISTS `equipepedagogique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipepedagogique`
--

INSERT INTO `equipepedagogique` (`id`, `name`, `surname`, `description`, `photo`, `fonction`) VALUES
(1, 'Carrey', 'Fabrice', 'Organisateur du projet et directeur artistique de l`association \"Demain le Printemps\", Fabrice Carrey a suivi une formation de comédien puis de metteur en scène à l`académie des Arts de Minsk. Parlant Couramment le russe et se déplaçant régulièrement à Minsk, il programme, coordonne et assure le suivi des formations.', '../vues/images/equipePedagogique/Demain-le-Printemps-Ecole-Theatrale-Russe-CARREY-Fabrice-DIRECTION-ET-ORGANISATION.jpg', 'Direction & organisation'),
(2, 'Kazakevitch', 'Ilona Sergueievna', 'Formée à l’Académie des Arts de Minsk , titulaire d’un diplôme d’actrice de théâtre musical et lauréat de concours et de festivals nationaux et internationaux de chant, Ilona Sergueievna travaille depuis 2000 au Théâtre de la Comédie musicale de Minsk, où elle interprète des rôles de premier plan dans des spectacles théâtraux et musicaux, dans les genres du music-hall, de l’opéra-rock et du spectacle pour enfants.\r\nElle apprend aux élèves la pose de la voix et les techniques du chant lyrique. Elle propose un travail sur les repertoires français, russes et internationaux.', 'images/equipePedagogique/Demain-le-Printemps-Ecole-Theatrale-Russe-professeur-DE-CHANT-Kazakevitch-Ilona.jpg', 'Cours de chant'),
(3, 'Sandler', 'Alexandra Izraelovna', 'Professeur de chant et musicienne à l’Académie des Arts de Minsk, diplômée au Conservatoire National de Musique du Bélarus, Alexandra Izraelovna travaille sur le développement des capacités musicales, le tempo et le rythme, l\'écoute, la concentration et la disponibilité.\r\nObjectif : assimiler des bases suffisantes pour travailler en improvisation musicale de groupe avec les instruments que sont notre corps et notre voix.', 'images/equipePedagogique/Demain-le-Printemps-Ecole-Theatrale-Russe-professeur-DE-Tempo-Rythme-SANDLER-Alexandra.jpg', 'Cours de tempo/rythme'),
(4, 'Blinkov', 'Igor Gennadievitch', 'Diplomé de l\'Académie des Arts. Il a enseigné la Technique du Comédien au college des Arts de Minsk. Il a reçu la formation de metteur en scène à l\'atelier de Christophe Zanussi. Depuis 2011 il travaille avec MOO Teatro en tant que professeur des Technique du Comédien.', 'images/equipePedagogique/Demain-le-Printemps-Ecole-Theatrale-Russe-TECHNIQUE-DE-COMEDIEN-BLINKOV-Igor-Guennadievitch.jpg', 'Cours de technique du comedien'),
(5, 'Filatova', 'Marina Viktorovna', 'Entrée en 1967 au Collège de Chorégraphie d’Etat du Bélarus, elle obtient la qualification d’artiste de ballet et est admise au Théâtre d’Etat de la comédie musicale où, de 1995 à 1997, elle travaille comme maître de ballet. Depuis 1990, Marina Filatova enseigne la danse scénique à la chaire de \"Technique de l’art du comédien\" à l’Académie des Arts du Bélarus.\r\nSon travail sur la coordination, le sens de la forme des gestes, le rythme, le style, le développement de la musicalité, de l’agilité et de la souplesse.\r\nLe cours se déroule en deux parties :\r\n1 heure d’échauffement et de travail à la barre (base classique)\r\n1 heure de préparation d&ampune chorégraphie d&ampensemble ou initiation aux danses de sociétés (tango, valse…).\r\nLes cours ont lieu avec un accompagnement au piano.', 'images/equipePedagogique/Demain-le-Printemps-Ecole-Theatrale-Russe-professeur-DE-DANSE-FILATOVA-Marina.jpg', 'Cours de danse'),
(6, 'Panassiuk', 'Tatiana Alexsandrovna', 'Diplômée du Conservatoire de musique du Bélarus. Lauréate des concours internationaux. Actuellement Tatiana Alexandrovna travaille en tant qu’accompagnatrice au Théâtre National de l’opéra et du balet et enseigne au Conservatoire de musique.\r\n\r\n', 'images/equipePedagogique/Tatiana.jpg', 'Cours de piano\r\n'),
(7, 'Yanovich', 'Youri Adamovitch', 'Diplômé de l’Université d’Etat du Bélarus en culture physique, candidat des sciences pédagogiques, maître des sports en gymnastique sportive, acrobate, ancien artiste de cirque, membre du Directoire de la Fédération de Cheerleading de la République du Bélarus.\r\nLes cours de Youri sont toujours très intensifs et donnent aux élèves la possibilité, tout en se musclant, d’apprendre rapidement, mais progressivement, de nombreux d’exercices d’acrobatie (sauts, portés et équilibres). Une approche du rock’n’roll acrobatique est également proposée.\r\n\r\n', 'images/equipePedagogique/Demain-le-Printemps-Ecole-Theatrale-Russe-professeur-ACROBATIE-YANOVICH-Youri.jpg', 'Cours d\'acrobatie'),
(8, 'Slachtcheva', 'Natalia Aleksandrovna', 'Diplômée de l’Académie des Arts d’Etat du Bélarus, Natalia Aleksandrovna est une danseuse professionnelle de claquettes.\r\nElle propose une initiation et un approfondissement de sa discipline.', 'images/equipePedagogique/Demain-le-Printemps-Ecole-Theatrale-Russe-professeur-DE-CLAQUETTES-SLACHTCHEVA-Natacha.jpg', 'Cours de claquettes'),
(9, 'Efremov', 'Sergei Nikolaevitch', 'Diplômé de l’Académie des Arts d’Etat du Bélarus, professeur de plastique, d\'escrime et de pantomime, acteur de cinéma, Sergei Nikolaevitch est depuis 2011 professeur de plastique à l’Académie des Arts.', 'images/equipePedagogique/Demain-le-Printemps-Ecole-Theatrale-Russe-professeur-de-combat-EFREMOV-Sergei-Nikolaevitch.jpg', 'Cours de combat et d\'escrime'),
(10, 'Evtouchenko ', 'Pavel Ivanovitch', 'Diplomé du college de musique en 2007. Formation de chef d\'orchestre. 2011-2013 professeur diction et de temporythme à l\'Académie des Arts. Depuis 2009 Pavel travaille au Théàtre National de M. Gorki.', 'images/equipePedagogique/Demain-le-Printemps-Ecole-Thatrale-Russe-DICTION-EVTOUCHENKO-Pavel-Ivanovitch.jpg', 'Cours de diction'),
(13, 'Voltchek ', 'Anastasia Igorévna', 'Anastasia Igorevna a eu la formation d’actrice à l’Académie de l’art théâtral à Moscou (GITIS). Enseigne le flamenco depuis 2007. Tous les ans Anastasia Igorevna participe aux stages de flamenco en Espagne et perfectionne ses techniques. Elle a étudié chez tels maîtres comme La Truco, La Lupi, Manuel Betanzos, Natala Merino et Javier Latorre.', 'images/equipePedagogique/Flamenko.jpg', 'Cours de flamenco'),
(14, 'Mamatiouk', 'Konstantine Vassilievitch', 'Diplômé de l’Ecole supérieure de théâtre et d’art de Biélorussie.\r\nDepuis 1975 Konstantin Vassilievitch est professeur de maquillage à l’Université de la culture et à l’Académie des Arts de Minsk.\r\nKonstantin Vassilievitch a participé à la création de maquillages pour plus de 200 spectacles différents.', 'images/equipePedagogique/Demain-le-Printemps-Ecole-Theatrale-Russe-professeur-DE-Maquillage-MAMATIOUK-Konstantine.jpg', 'Cours de maquillage');

-- --------------------------------------------------------

--
-- Structure de la table `menusecultiver`
--

DROP TABLE IF EXISTS `menusecultiver`;
CREATE TABLE IF NOT EXISTS `menusecultiver` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

DROP TABLE IF EXISTS `partenaires`;
CREATE TABLE IF NOT EXISTS `partenaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `partenaires`
--

INSERT INTO `partenaires` (`id`, `name`, `photo`) VALUES
(1, 'Arts de Bielorussie', 'images/partenaires/LAAM.png');

-- --------------------------------------------------------

--
-- Structure de la table `presse`
--

DROP TABLE IF EXISTS `presse`;
CREATE TABLE IF NOT EXISTS `presse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `presse`
--

INSERT INTO `presse` (`id`, `photo`) VALUES
(1, 'images/presse/demain-le-printemps-presse-DLP-a.jpg'),
(3, 'images/presse/demain-le-printemps-presse-DLP-b.jpg'),
(4, 'images/presse/demain-le-printemps-presse-DLP-c.jpg'),
(5, 'images/presse/demain-le-printemps-presse-DLP-d.jpg'),
(6, 'images/presse/demain-le-printemps-presse-DLP-e.jpg'),
(7, 'images/presse/demain-le-printemps-presse-DLP-f.jpg'),
(8, 'images/presse/demain-le-printemps-presse-DLP-h.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `presse internationale`
--

DROP TABLE IF EXISTS `presse internationale`;
CREATE TABLE IF NOT EXISTS `presse internationale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `presse internationale`
--

INSERT INTO `presse internationale` (`id`, `photo`) VALUES
(1, 'images/presse/demain-le-printemps-presse-inter-DLP-a.jpg'),
(2, 'images/presse/demain-le-printemps-presse-inter-DLP-b.jpg'),
(3, 'images/presse/demain-le-printemps-presse-inter-DLP-c.jpg'),
(4, 'images/presse/demain-le-printemps-presse-inter-DLP-d.jpg'),
(5, 'images/presse/demain-le-printemps-presse-inter-DLP-e.jpg'),
(6, 'images/presse/demain-le-printemps-presse-inter-DLP-f.jpg'),
(7, 'images/presse/demain-le-printemps-presse-inter-DLP-g.jpg'),
(8, 'images/presse/demain-le-printemps-presse-inter-DLP-h.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `secultiver`
--

DROP TABLE IF EXISTS `secultiver`;
CREATE TABLE IF NOT EXISTS `secultiver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `secultiver`
--

INSERT INTO `secultiver` (`id`, `titre`, `texte`, `photo`) VALUES
(1, 'Constantin STANISLAVSKI (1863-1938) ', 'Konstantin Stanislavski (1863-1938) comedien directeur et producteur russe co-fondateur du Theatre de Moscou (1898), il ecrivit un livre sur la formation de l’acteur — Konstantin Stanislavsky (1863-1938) russian comedian, co founder of the Moscow Art Theatre in 1898.\r\n\r\nActeur, metteur en scène, technicien du théâtre, fondateur du « system », co-fondateur du théâtre d’Art de Moscou (1897) et praticien éminent de l’école de naturaliste de la pensée. Konstantin Stanislavski a sans équivoque défié des notions traditionnelles du processus dramatique et s’est établi parmi les penseurs dans le théâtre moderne. Une grande partie de la pensée et de la philosophie Stanislavski s’est appliquée au théâtre et a été inspiré par ses prédécesseurs tels que Pouchkine.\r\n\r\nIls ont écrit que le but de l’artiste est de fournir des sentiments véridiques dans les circonstances données; ce que Stanislavski a adopté en tant que sa devise artistique perpétuelle. Konstantin Stanislavski est né à Moscou le 5 janvier 1863. Élevé par un père riche et généreux étant conscient de la réputation de sa famille, Konstantin Stanislavski veut échapper au stéréotype du fils prodigue. \r\n\r\nA l’âge de 25 ans, il échange le nom de son père Alekseev pour Stanislavski. La même année il établit la société de l’art et de la littérature au théâtre de Maly, où il a acquis l’expérience de l’éthique et de l’esthétique. En 1897, en coopération avec Vladimir Nemirovich-Danchenko, Stanislavski fonde le théâtre d’Art de Moscou. \r\n\r\nIl y a développé son propre système de formation où les acteurs rechercheraient la situation créée par le manuscrit, décomposeraient le texte selon les motivations de leur caractère et rappelleraient leurs propres expériences, entraînant de ce fait des actions et des réactions. Par ses propres motivations, l’acteur agirait avec les mêmes caractères du personnage dans le manuscrit. Il pourrait alors rejouer ces émotions et ces expériences étape par étape en suivant le fil conducteur du rôle qu’il incarne afin de réaliser une interprétation plus authentique. Entre 1922 et 1924 la troupe s’engage dans une tournée triomphante en Europe et aux Etats-Unis. Après cette excursion, Stanislavski ajoute un certain nombre de jeux soviétiques de commandant au répertoire du théâtre d’Art, y compris des jours de Mikhail Bulgakov du Turbins, Valentin Kataev ajustant le cercle, et le pain de Vladimir Kirshon. \r\n\r\nEn plus de son travail comme acteur, directeur, et entrepreneur, Stanislavski était également un professeur inspirant, dont les disciples soviétiques ont inclus Vsevolod Meyerhold, Evgeny Vakhtangov et Michael Chekhov. L’influence de sa « méthode » était et demeure étendue aux Etats-Unis particulièrement par l’influence de Lee Strasberg. \r\nEn 1938: Konstantin Stanislavski meurt. ', 'images/cultiver/ConstStanisl.PNG'),
(2, 'Mikhail Chekhov', 'Michael Chekhov, acteur, directeur de théâtre et professeur d\'art dramatique, est le neveu d\'Anton Tchékhov. Né en Russie en 1891, il fut membre du théâtre d\'Art de Moscou, alors dirigé par Konstantin Stanislavski, qui fut son premier maître. En 1914, Chekhov participa à la fondation du Premier Studio du théâtre d\'Art de Moscou qui, sous sa direction, devint le Deuxième théâtre d\'Art de Moscou. Après avoir quitté la Russie, il travailla longtemps en Europe. En 1936, il fonda en Angleterre, à Darlington Hall, l\'Ecole d\'Art dramatique Tchékhov, qui fut transférée aux Etats-Unis peu de temps avant la deuxième guerre mondiale. \r\n\r\nLe théâtre et le cinéma américain lui doivent le plus clair de leur art. Maître incontesté, il donna aux différentes formations d\'art dramatique une empreinte d\'une valeur inégalée, jusqu\'à sa mort en Californie, en 1955. Si l\'on peut dire que Chekhov est le prolongement de Stanislavski, on doit aussi reconnaître que, par son contact intime avec les théâtres anglais et américain, il a considérablement actualisé, virilisé, adapté à la vie, un enseignement qui nous devient ainsi plus immédiatement accessible. \r\n\r\n\r\nFilms avec Michael Chekhov : \r\n\r\n1944 \"Chanson de la Russie\", dirigé par Gregory Rtoff \r\n\r\n1944 \"Dans notre temps\", dirigé par Vincent Sherman \r\n\r\n1945 \"Envoûté\", dirigé par Alfred Hitchcock (Chekhov a reçu une nomination de récompense aux Oscars du cinéma) \r\n\r\n-1945-1946 \"Croix mon coeur\", dirigé par John Berry \r\n\r\n-1946 \"Spectre de Rose\", dirigé par B. Hecht \r\n\r\n-1946 \"Rose irlandaise d\'Abie\", dirigé par Edward Sutherland \r\n\r\n-1948 \"Le Texas, Brooklyn et ciel\", dirigé par William Castle \r\n\r\n-1952 \"Invitation\", dirigé par G. Reinhardt \r\n\r\n-1952 \"Vacances pour Sinners\", dirigé par Gerald Mayer \r\n\r\n-1954 \"Rhapsody\", dirigé par Charles Vidor ', 'images/cultiver/MichaelChekhov.jpg'),
(3, 'Vsevolode MEYERHOLD (1874-1940)', 'Vsevolode Meyerhold né le 28 janvier 1874 en Russie à Penza dans une famille allemande, commence sa carrière avant la révolution, d’abord à Moscou, puis à Saint-Pétersbourg, et la poursuit aussi pendant, en montant des spectacles de propagande dans des décors constructiviste. Il fera une tournée à Paris en 1930. À partir de 1935, au lieu de suivre les directives du régime et de créer des spectacles sur la collectivisation et l’industrialisation, il monte des classiques et ne s’intéresse qu’à la beauté. Cela lui vaudra les foudres soviétiques et lui coûtera la vie. En 1939, il est arrêté, torturé, contraint à « avouer » sa culpabilité (on l’accuse de trotskysme et d’espionnage) et est exécuté en secret le 2 février 1940. Sa femme entre temps est assassinée par des policiers. Il ne sera réhabilité qu’en 1955 et sa famille n’en aura une confirmation officielle qu’en 1988 ! ', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `mail`, `pass`, `role`) VALUES
(22, 'fab', 'a@b.c', '$argon2id$v=19$m=65536,t=4,p=1$NThlM05SMnhVdnFsYk1CRg$+reF3YHiqLkEvIpaWxe2IH0ityFISyRrosEZRWPKN6k', 'user'),
(21, 'test', 'a@b.c', '$argon2id$v=19$m=65536,t=4,p=1$L0VnVkY0SzFpLy9ldnZzQg$k8qXdWixANKE4nrnFBte5ZbuQFHaOOGxbS1mPafmAYc', 'user'),
(20, 'test', 'a@b.c', '$argon2id$v=19$m=65536,t=4,p=1$WVFLdTdjYWhmRHUwc0VsUQ$Tnjhj9fmkh+FzB5GV7FptWp9njtFXiMv7XbVUyJgMyQ', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
