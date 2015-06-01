-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 01 2015 г., 15:01
-- Версия сервера: 5.6.15-log
-- Версия PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `villa`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `preview` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `preview`, `body`, `added_on`) VALUES
(1, 'Dolor delectus voluptatem eveniet esse.', 'a214b258767236a4735ac4e0be607e2d.jpg', 'Voluptas officiis veniam possimus ipsum ut sed vel. Deserunt vero perferendis architecto. Et aut repudiandae voluptatibus ut debitis animi quam nihil. Laudantium facilis excepturi ut in. Omnis possimus recusandae in maxime voluptate unde. Veniam enim in qui qui sed non vitae. Molestiae molestiae magnam molestias hic labore ut eligendi. Eos deserunt facilis at laborum aut omnis dolore. Consequuntur id minus perspiciatis et adipisci incidunt id. Unde similique excepturi rem facilis reiciendis. Mollitia minus voluptatem aut. Doloribus magnam ea nisi necessitatibus voluptas. Magni repudiandae qui rem cumque quia beatae repudiandae. Consequatur iste officia voluptatibus. Voluptas itaque nam architecto accusantium eum maxime. Molestiae officia aut assumenda dolores aut vitae doloremque. Id voluptatem omnis soluta earum quia et. Nihil animi pariatur blanditiis ullam recusandae deleniti mollitia fuga. Ad reprehenderit repudiandae minus error fugiat modi. Quis libero harum fugiat ea corporis id aspernatur. Tempore voluptatem ut repellendus dolores sunt. Rerum quas debitis dolor quidem ipsam perferendis dolores. Eius pariatur et cupiditate ipsa cum et doloremque. Velit quae et quasi id cumque nulla velit. Itaque dolorem quasi facere. Neque qui reiciendis veniam laboriosam ut quam. Quis aliquam consequuntur omnis ea dolorem eos. Dignissimos velit earum sit sit. Qui distinctio quis pariatur consectetur. Facere corrupti incidunt sequi. Maxime illo facere iste quibusdam. Dolore ut consectetur at vitae nostrum libero magni. Est architecto commodi totam tenetur repudiandae velit iure illum. Sint laborum dolorem qui corrupti nam laboriosam. Accusamus consequatur recusandae perspiciatis ad. Non similique dignissimos et ut amet non iste. Quos temporibus repudiandae quisquam et et. Et nobis vel dolores. Saepe ipsum aliquam laborum facilis doloribus quis. Incidunt voluptatem at voluptates doloribus voluptatem dolorem et quis. Dolores dolorum nesciunt ipsa repudiandae accusamus est ipsam commodi. Nihil maiores in aperiam fuga maxime. Vitae modi ea nisi. Placeat praesentium fuga consequuntur ipsum impedit totam. Voluptatem impedit optio ducimus ab sint. Reiciendis tempora eos quis. Aut eveniet qui rerum iure. Qui laboriosam nobis non autem blanditiis eligendi ipsum. Blanditiis sit quod animi rem. Provident quas iure est voluptates saepe quo. Aut consectetur corrupti autem ratione nemo quia. Quaerat quisquam quisquam sit sint ipsa facere.', '2015-05-25 19:38:10'),
(2, 'Eos ut temporibus enim voluptatem optio ut neque.', 'aa29b8e0ab43e457097a9b4b50e264c1.jpg', 'Doloremque consectetur quia dolor quaerat ab. Eos blanditiis dolorum dolores cumque dolores. Cumque reprehenderit molestias fuga ut odit. Ratione et fuga voluptatum eius quisquam. Voluptate ipsam reiciendis et voluptas rerum dignissimos quos. Nemo maiores quam rerum magnam qui. Vero consequatur facere illo rerum. Amet perferendis quas optio tempora ut. Vitae et est corrupti voluptatem doloremque ea. Saepe magnam non dignissimos laboriosam possimus. Praesentium sit dolore ut qui quia et nihil aliquam. Dignissimos veritatis minima inventore sed distinctio a. Autem temporibus explicabo sapiente doloremque illum error sint. Rerum quos et consectetur beatae temporibus. Vitae assumenda eos sit et et. Quibusdam cum recusandae dolor nemo alias autem accusamus. Voluptatibus est voluptates totam est ducimus. Labore eos cum cum consequatur maxime minima ducimus. Et assumenda impedit quibusdam explicabo. Incidunt atque quam repellendus dolorem. Aut vel sequi deserunt. Sunt animi distinctio omnis quis ad. Dolore tempora illum ut delectus sint rerum. Tempora deserunt vel ut eligendi velit quas ipsam. Quia amet possimus quos voluptatibus iusto pariatur. Velit amet quia facere illo omnis odit. Ab sed quos voluptatibus laborum veniam quasi necessitatibus. Quidem nihil dolorem veniam cupiditate. Voluptatem pariatur eum fuga quia ipsum voluptas assumenda. Deleniti dignissimos et neque quia. Tempore veniam voluptatem vero. Eveniet ut odio in. Et soluta est quia odit. A consequatur repellat consequatur. Sed quasi mollitia aut. Quasi perspiciatis ipsam modi aut. Sint deserunt soluta error voluptas cum quam. Nihil sed consequatur nisi quo et est. Sapiente vel aliquid possimus expedita accusantium. Ut dolores dolorum assumenda. Porro atque aut et ducimus beatae sint commodi voluptas. Itaque corrupti beatae repellendus autem ut ut. Vel cum enim omnis hic.', '2015-05-05 17:44:06'),
(3, 'Voluptas rerum porro id odit recusandae porro exercitationem.', 'b18d25eac07da04517857bfdeb54104e.jpg', 'Incidunt perspiciatis nam ipsa et magni tenetur. Quasi fuga deserunt neque et. Veritatis nisi architecto velit eos. Necessitatibus qui maxime voluptas saepe error consectetur quaerat doloremque. Voluptas a enim temporibus omnis adipisci. Facilis optio sapiente consequuntur inventore reiciendis mollitia. Corrupti sapiente eveniet eum officiis. Optio ipsum quos eligendi vero rem. Molestiae ut qui odit eum sequi. Sint cumque enim fugiat et. Quas ea sed officia dolores consequatur perspiciatis in. Nihil rerum harum facilis est. Est vitae veniam ut fugiat nulla atque autem. Molestiae totam voluptatem facilis voluptas et nihil. Occaecati occaecati quia placeat corporis laboriosam illum mollitia hic. Nulla optio nesciunt iste similique quisquam quam. Rerum consequuntur eius quaerat iusto optio. Aut sapiente suscipit omnis quo quae sit. Nostrum ab suscipit ipsum et. In et suscipit ut. Omnis a quas quae quae animi corrupti. Sint repellat omnis dolorem quam nihil. Autem nihil earum deserunt eos delectus. Maiores voluptatem consequuntur provident consequatur. Quis enim voluptatem quibusdam est tempore veritatis. Sint est omnis consequuntur repudiandae animi natus eveniet vel. Dolorem dolorem ut dolor ex. Ad deleniti eos ipsam qui impedit sit. Ex in reprehenderit perferendis. Qui aut voluptates dolorem amet debitis.', '2015-05-04 20:32:10'),
(4, 'Quia neque aut est molestiae aliquid.', 'c60e6e07e236a1b3c8efa4d7f96b76f2.jpg', 'Inventore perspiciatis aspernatur et quidem quam quo laboriosam nemo. Corrupti similique temporibus quos id earum fuga quaerat. Ab aut et quas qui. Aut non quia mollitia nobis autem autem quasi. Veritatis tenetur aliquam est et magni quidem. Commodi qui esse voluptatem non. Commodi sed voluptas impedit ex nihil. Assumenda fuga in enim. Nemo ut quisquam omnis ullam illum. Odit ad illo laboriosam veritatis deserunt. Alias velit ratione est est in dicta. Nemo voluptatibus laudantium animi. Voluptate quia optio voluptatum asperiores. Occaecati et quo ut et suscipit omnis cupiditate. Impedit dolores voluptatem nobis id sed aspernatur eligendi dolorem. Perferendis voluptatem nisi unde tempore. Ut sunt est aliquid eum cupiditate. Aut beatae impedit magni quis nostrum dolorem voluptatem corporis. Et eligendi distinctio et omnis minus inventore quam deleniti. Labore explicabo dolorem et earum explicabo non. Labore eum esse doloremque. Cumque omnis debitis nulla. Minima officiis optio consequuntur et. Voluptatem iste laborum dolorem perspiciatis. Minima sunt aspernatur eius. Vitae et quo sit hic omnis quam. Odit nostrum quia aspernatur ipsam fugiat aliquid odit dolores. Pariatur neque consectetur minus cum quia magnam. Asperiores quasi aspernatur dolorum reiciendis voluptatem fugiat voluptas quis.', '2015-05-06 02:22:14'),
(5, 'Quasi harum autem ut quis ea.', 'c6b928ab14a254c250b3aa3ae3b9ec79.jpg', 'Molestias omnis autem quae sequi. Neque quaerat recusandae quasi. Id officiis assumenda quae eligendi ut consequatur. Quia laborum voluptas ad corrupti odio dignissimos repudiandae quas. Dolorem illum eos quo non. Quia eum magnam quasi aut maiores. Provident quaerat pariatur cumque dolor accusamus. Omnis rerum optio ea sequi sunt voluptas. Et voluptas suscipit ut beatae commodi. Earum et quia voluptatem eligendi. Autem aliquid eveniet omnis qui voluptatum quia nihil. Eligendi magni qui placeat praesentium eaque. Omnis necessitatibus illo reiciendis. Ullam quidem omnis ea quisquam. Laborum consequatur et nihil dolore rerum esse sunt. Magni dignissimos enim saepe qui reprehenderit facere. Ut quibusdam ut totam amet impedit ut corporis. Laboriosam qui fugiat placeat voluptas blanditiis. Ducimus facere nisi aut rerum fuga repellat. Aperiam odio odio nemo est cumque. Aut optio facilis mollitia est. Officiis corrupti earum placeat sed nesciunt. Natus nisi rem expedita aut minus rerum veniam. Non aut non voluptate velit. Atque quis et et atque voluptas. Sunt aspernatur debitis totam molestiae. Fuga sunt provident aut qui et impedit corrupti. Error modi vel perferendis optio et et ad dolorem. Hic non quod minus voluptas est aut. Delectus ut perspiciatis delectus tempore suscipit repudiandae. Voluptatem qui enim omnis rerum provident omnis possimus facilis. Assumenda et eos maiores provident ut consequatur. Excepturi debitis reiciendis deserunt nemo quae natus fugit. Sapiente quia molestiae repudiandae sunt est beatae. Dolorem veritatis a illum ut quia dolores id. Et fugiat et dolores alias molestiae animi enim. Ipsa alias eaque pariatur optio magni deserunt. Est facere doloremque nulla expedita. Incidunt libero voluptas similique autem distinctio. Eveniet eos vero sed minus aut. Aut natus ex sequi voluptatem dolorem fugiat. In nemo omnis facere delectus et placeat vel. Molestias incidunt fugit labore deleniti. Et tempore ut voluptatem iusto natus. Dicta illum maiores eos nulla. Deserunt et nobis consequatur voluptas. Quaerat repudiandae minima asperiores est consequatur. Consequuntur expedita eligendi dicta eius nemo qui. Quasi quia nihil quaerat quia animi nihil blanditiis voluptas. Dicta aperiam nam temporibus nemo.', '2015-05-24 09:50:53'),
(6, 'Maxime commodi dicta nisi id et est est.', 'c86fb062abe2a62fa45a416b069e41f1.jpg', 'Nemo commodi non iste sint voluptas dolorem. Accusamus voluptatum autem sed non quibusdam voluptas quibusdam. Sed dolor similique et sunt molestiae. Nostrum quis quis et sit nihil. Voluptas inventore eum dolores at corrupti. A sint hic et officiis quibusdam. Doloribus corporis doloremque pariatur ullam rerum. Qui quod qui sunt quisquam exercitationem. Et voluptatem officia reprehenderit itaque fugiat perspiciatis quisquam ut. Cumque id et nam itaque nulla ab aperiam. Alias dolore provident distinctio nulla. Sed quasi ex dolore omnis tempora. Non consequatur et nemo. Beatae nemo sit eos id facilis est. Nihil asperiores omnis tempore dolor eum. Suscipit id minus nemo non facilis. Aperiam provident blanditiis accusamus expedita. Incidunt aut non optio veniam ea. Et quidem dolorum voluptas. Voluptates molestiae ipsam fuga non eligendi. Nam maxime necessitatibus eius sint et et magnam. Possimus doloremque molestiae autem reiciendis. Fugiat doloremque illum ipsum fuga est officia eos. Molestiae laudantium distinctio modi sed error error. Odio asperiores rerum facere repellat. Vel dolores soluta officiis. Provident voluptatem laboriosam voluptatem. Non adipisci doloribus est debitis sit consectetur voluptatibus consequuntur. Delectus quia repudiandae quis quae amet sunt. Excepturi dolorem eum sed commodi. Sapiente voluptatem aut quaerat et porro ut et et. Quaerat laboriosam repellat cum dolores qui ullam consequatur. Vel velit necessitatibus nulla architecto dolorem iure cumque. Aut quibusdam neque tempora consectetur. Harum necessitatibus enim illum doloribus id dolor qui. Qui labore iusto nisi quos consequatur inventore autem. Eum voluptatibus molestiae sequi dolor in itaque et. Quia officia dolor sunt mollitia aut. Assumenda itaque aut in et sequi voluptatem nobis. Odit ut quo officia ipsum dolorem quia sit est. Molestiae expedita et odit a consequatur. Reprehenderit consequuntur ex dignissimos recusandae beatae enim. Occaecati possimus laborum et. Eius sit mollitia beatae corrupti minus qui. Qui aliquam veniam voluptatem neque.', '2015-05-14 01:57:37'),
(7, 'Et et deleniti nulla incidunt aut dignissimos non.', 'cf5b30a18158898ddb3aeb74714fa7a0.jpg', 'Eius quisquam consequatur aut laudantium. Eos consequatur excepturi iusto magnam nobis impedit dicta cupiditate. Delectus unde provident possimus delectus et ea. Sit quis enim ut sunt eum qui deserunt. Ipsa quam neque repudiandae excepturi accusantium. In qui deserunt odio ex. Sint aut nihil error aut qui rerum. Amet repellat hic consectetur ipsa tempore. Sit nam omnis esse necessitatibus ut quia provident. Consequatur repellendus nisi et minus dignissimos quis. Sapiente illo sint laborum omnis. Molestiae animi assumenda mollitia adipisci ad veritatis. Facilis voluptatibus unde sapiente vel molestiae. Deleniti facere dolorem ea minus. Aspernatur recusandae suscipit quos tenetur sunt vel ea asperiores. Voluptatum asperiores mollitia est consequatur et laudantium adipisci. Quia molestiae sunt veritatis libero rerum et. Et nostrum qui recusandae et ea fugiat. Est molestiae fugiat esse quibusdam beatae accusantium rerum. Quae eligendi eum eos eius non porro voluptates. Nostrum aut ullam quam illo numquam. Sunt culpa quos ratione omnis quisquam ipsa molestias. Illo quod eveniet sed voluptas minus id quo. Omnis voluptatum aliquid quo voluptatibus iste mollitia reprehenderit. Earum sunt asperiores quam expedita quo ad. Sunt praesentium repudiandae dolore. Laboriosam quidem accusantium reiciendis et eos et. Ab voluptas non aut perspiciatis omnis numquam culpa. Officia quia fugit voluptatem aut repudiandae voluptatem. Non rem labore harum dignissimos sunt facere. Exercitationem et quidem illo iusto. Vel omnis dignissimos natus nisi. Consequuntur ut itaque ut et. Labore debitis nihil a corrupti sunt. Id ut sapiente voluptatem maiores aut consequuntur eligendi consequatur. Sit necessitatibus voluptates atque ea ut consectetur dolores. Repellat modi temporibus eius laboriosam. Modi repellat unde laboriosam nemo ut et voluptatum. Possimus sit qui fugiat rerum et repudiandae consequuntur. Aut et numquam nobis ut ut. Et deserunt repudiandae autem illum facilis. Sit ut saepe ut recusandae. Earum explicabo repudiandae nemo et et adipisci. Rerum expedita ipsa aut vitae. Et repellat cumque fugiat et repellat. Autem et ducimus iusto et assumenda voluptatem. Illo ipsa reiciendis est debitis doloremque porro eum. Rerum tenetur et officia esse rerum veritatis ab labore. Officia et voluptatibus tenetur et provident nam dicta. Ea ducimus et molestiae quia aut. Incidunt vitae quo qui harum autem. Tenetur cumque possimus illo voluptatem. Nihil consequuntur error sit quo unde facere. Cum nisi aliquid dolores autem qui. Impedit ut dolorem quas. Ex magnam facilis quidem dolor autem sed. Tempore harum commodi est magnam aut nostrum repellat.', '2015-05-06 23:52:01'),
(8, 'Consequuntur voluptas ut ut accusamus.', 'd3612556a594aea5467a58e4864e1ab0.jpg', 'Nihil quo id dignissimos cumque minima deserunt. Fuga est cupiditate aut impedit dolore accusamus mollitia. At rerum iure exercitationem dolores. In ut cupiditate ut ut. Exercitationem magnam rerum non asperiores aspernatur id doloremque autem. Asperiores culpa voluptas et impedit error. Odit consequatur vel natus et. Nostrum consequatur sed nostrum minus saepe nobis. Totam reprehenderit ex aut eum ut. Eaque dolorem aut voluptatem eos molestiae deleniti est. Enim itaque qui sed atque praesentium vel. Doloremque corrupti deserunt omnis nobis architecto. Qui porro porro iste voluptas non accusantium excepturi qui. Ea fuga voluptatum sed ut. Est dolores cum doloribus et tempore earum in. Sunt quia assumenda perferendis hic provident. Quam dolorem sunt maiores est. Sequi qui velit quis dolores error. Harum dolor et quasi recusandae excepturi error officiis eius. Alias voluptas quis repellat ducimus. Ducimus vero non eum hic ipsam corporis. Laboriosam ut perspiciatis sed itaque culpa consequatur nemo. Dolor tempora labore at repellendus. Ut placeat ea in ut autem nisi illo. Harum illo exercitationem perspiciatis molestias. Sunt dolore nihil velit eveniet sed atque odio. Officia et blanditiis ut voluptas. Earum et vitae dolorem provident assumenda et aut. Quia non officia eum pariatur sit dignissimos omnis. Eaque voluptatem et sint ipsam qui repellat. Minus voluptas quasi unde incidunt deserunt.', '2015-05-29 13:07:27'),
(9, 'Quia aspernatur iste qui ea eius.', 'dbdc6b8a98b118ea520537844cb6595c.jpg', 'Eos nobis inventore consequatur excepturi aperiam. Eius impedit harum nulla veniam voluptatibus sed et. Excepturi ut et hic sit deleniti. Dolor odit aut molestiae optio dicta eligendi aut. Provident soluta earum accusantium vel et. Sint totam eaque laborum. Ipsam eius rerum modi voluptas est nostrum rerum. Qui consequatur officiis minus ipsum rerum dolores explicabo. Fugiat sunt molestias dolores vel exercitationem quod. Consequatur atque molestiae facere facilis dolor voluptas esse voluptatem. Error doloribus ipsum molestias odio dolores nam. Expedita ut nihil rerum quis saepe porro. Inventore voluptatibus sint animi facere. Perferendis ut tempore inventore sed ut. Perferendis sint asperiores et aut. Sapiente quod voluptas sed vitae. Quisquam vel qui nisi sapiente consequatur. Delectus nihil ea provident animi nemo deserunt expedita exercitationem. Repellat ea exercitationem ut minima. Dolores autem et porro dolorem neque molestiae. Iusto animi nam et. Vero totam temporibus ab quo sint praesentium distinctio. Perspiciatis porro tenetur accusamus non. Aliquam est consequuntur voluptatum distinctio doloremque. Hic delectus vel facere fugiat. Voluptatibus consequuntur id impedit. Ut voluptas aliquid non molestiae quia. Delectus doloribus ut accusantium repellendus voluptate libero rerum provident. Possimus quod maxime reprehenderit dolores. Reiciendis error praesentium hic qui saepe quia quia. Molestias dignissimos neque ut illo. Fugit reiciendis corrupti impedit autem veritatis accusantium. Dicta earum necessitatibus nisi voluptatum distinctio inventore. Sunt accusamus fugiat dolores consequatur rerum. Id perferendis itaque porro aut consequuntur est vel. Et et porro quasi illum quis mollitia sit cum. Aut dolorem autem similique ut expedita voluptates vero. Adipisci quo sit nihil eos eum. Eum reprehenderit dicta inventore vel. Deleniti praesentium minima alias dolorem dolores. Fugiat maiores laborum quas non vero. Iusto nihil fuga voluptatem velit non. Tenetur ab quas praesentium eaque debitis expedita aut. Qui ea rerum voluptatibus maiores. Veritatis dolorum excepturi distinctio et cupiditate qui sed. Ea excepturi quod ad et amet. Ab expedita recusandae adipisci quasi quibusdam molestias et. Quam similique delectus dignissimos tempora. Quod quo deserunt est sint consequatur. Est harum voluptatem est ad modi rerum laborum occaecati. Beatae nostrum id corrupti consequatur est. Tempore reprehenderit molestiae aut placeat omnis perspiciatis. In sunt aperiam totam qui ut.', '2015-05-26 02:26:23'),
(10, 'Enim quia occaecati natus expedita sunt veniam enim blanditiis.', 'e572d5744d77896d013f691cc47e7fee.jpg', 'Aut molestiae qui eum pariatur maiores soluta eligendi. Quis quod qui soluta autem officiis pariatur. Quae ut blanditiis repellat rerum magnam ipsam vel. Nobis sed voluptatem fuga nemo magni labore facilis. Quibusdam corrupti molestiae quam quo. Perspiciatis hic atque minus blanditiis. Et in ut dolore et at reprehenderit. Nam quo molestias deserunt ducimus. Velit mollitia excepturi et in dolorem aut eius praesentium. Consequatur velit praesentium architecto voluptatibus. Qui expedita est quia culpa. Praesentium eum aut sequi et excepturi molestiae non et. Laboriosam perferendis dolor necessitatibus eaque. Fugiat et cumque non at aut illo. Ut dignissimos ut mollitia odit. Itaque eaque dolore enim vero voluptatibus dolore ut. Voluptatem incidunt repellendus repudiandae minus. Consectetur a deleniti id vel veniam molestias. Tempore fuga nihil eos dolorem nesciunt. Assumenda blanditiis nihil voluptatibus sit recusandae iure animi fugit. Soluta culpa rerum eos itaque doloribus voluptas cumque dolores. Delectus tempora at officiis tempora nihil cumque. Ratione tempore quia ut delectus ullam expedita. Et molestiae vitae nihil cum. Possimus accusamus et voluptates. Velit voluptates consectetur qui fugit sunt vitae. Tempore incidunt sint provident libero omnis tempora tenetur ipsa. Aspernatur qui voluptatum asperiores est dolorum quis ex. Dolore quidem blanditiis est commodi. Quasi expedita voluptatibus itaque molestiae minus. Tempora nostrum quia praesentium qui asperiores consequatur maiores minus. Ut incidunt sunt temporibus incidunt culpa. Quae eos qui error veniam consequuntur dolorem. Tenetur facilis non laborum fuga non blanditiis. Officia et doloremque sed ad. Minus enim recusandae velit error eum earum. Nihil perferendis ad aut voluptatum voluptatem velit optio. Cumque minima blanditiis iure doloremque repellendus. Sit dolores dolorem itaque sed. Autem corrupti saepe illo. Cupiditate sit rerum aut deleniti nisi accusantium. Molestiae iusto dolorum est dolorum. Voluptates illo qui laborum neque voluptate. Impedit numquam et dolor. Totam ab molestiae in. Ab consequatur non consequatur. Dolorem sunt asperiores maiores expedita quia expedita. Enim ducimus exercitationem distinctio eos accusantium. Autem quia voluptate provident tempora ea. Repudiandae itaque rerum necessitatibus eveniet. Illum dolor quo dolorem quaerat. Neque ea sunt exercitationem eligendi qui. Reiciendis rem earum dolorem eum. Nihil aliquid velit occaecati qui aut consectetur quia. Omnis aperiam voluptatibus voluptatibus consequatur placeat ut.', '2015-05-01 17:28:41'),
(11, 'Velit optio dolorum deserunt eveniet quae necessitatibus cum et.', 'ef03e08e9e941edc7fa5e105072d0585.jpg', 'Consectetur dolorum qui dolor neque. Eos cupiditate dolorem deleniti. Libero at dolor minus ab suscipit. Adipisci dolore architecto qui et labore. Nemo qui in reiciendis facilis iste assumenda voluptatum culpa. Labore reprehenderit vitae officia perspiciatis. Veniam molestiae voluptas consectetur voluptatem et voluptatem minima. Non animi rerum velit ipsum. Iste sed dolorem distinctio quis optio. Consectetur ut quia unde explicabo occaecati consectetur iure. Ab asperiores beatae in quia nostrum. Quae aliquam repudiandae porro beatae. Tempore est ipsa ex ipsum. Sint ut qui natus magnam. Animi voluptatem et blanditiis consequuntur corporis fugit. Natus officia a aut ab et porro. Laudantium sint dolores quia iste officiis quam labore. Qui impedit debitis qui dolor iusto aut. Ut odio et est aut a odit debitis. Quo totam ea dolores nemo ut. Reprehenderit quis sed quibusdam non numquam. Sed esse explicabo numquam explicabo est sunt expedita. Et possimus cum neque nisi veniam velit soluta. Dolor architecto non repudiandae ipsam quis et soluta. Ratione aliquid sapiente aut delectus sit sapiente. Similique possimus laudantium ut aliquam nihil placeat. Dolores reiciendis asperiores dicta magni enim. Sint dolor dolores non dolore commodi. Et unde dolor animi eius et labore sed. Sed aliquid magnam non. Inventore est eum ullam ullam id. Quia beatae quod architecto consequatur. Dolores dolorem autem inventore minus dolorem delectus. Facere delectus quidem voluptatibus ipsum ducimus dolor expedita. Occaecati quia et a. Omnis asperiores quos et autem. Consequatur nesciunt iusto error aut occaecati ratione aliquid. Unde porro repellendus consequatur atque. Vitae dolor temporibus quis harum eveniet eum. Blanditiis harum minus ab nam. Rerum laborum sunt et omnis. Voluptatibus fugiat eum ut aliquid. Voluptatum ducimus deleniti eius. Et asperiores ut aliquid voluptate est. Inventore qui laboriosam ut impedit nulla iste. Enim voluptatem nihil omnis. Exercitationem omnis est aut. Sapiente qui deserunt pariatur est eum. Voluptas perferendis a laudantium quod qui nobis. Expedita quod voluptatem dolorum debitis. Iste deserunt voluptatem qui esse. Nihil eos minima veniam aut nobis tenetur. Error et totam beatae in. Accusamus non ut atque qui occaecati qui eos. Quibusdam unde aspernatur laboriosam similique. Earum consectetur nihil velit voluptates debitis sint quia.', '2015-05-06 20:40:09'),
(12, 'Enim aperiam sint quidem totam repellat.', 'f4b37a3b7f2c76812a1fb52565d82052.jpg', 'Est velit itaque temporibus sunt quae. Et voluptatem et praesentium dolore. Ipsa fuga maiores omnis qui. Totam sint quae vitae voluptas aliquam soluta ut eos. Aliquid et magni corrupti dignissimos iure et. Eos magnam debitis voluptate voluptas veniam quos. Eaque sit ea dicta enim atque. Odio cum porro et et aliquid. Consectetur et ab omnis dolorem. Maiores et quam corrupti voluptas consequuntur voluptatem. Et ratione esse aliquid sunt. Dolorum optio aliquam nulla molestias doloremque voluptas. Et error est aliquid vero provident aut reprehenderit. Quibusdam laudantium quis aperiam consequatur. Delectus et libero mollitia vitae rerum omnis. Saepe ea magni provident praesentium nesciunt. Deserunt doloribus cumque veniam id. Omnis aut enim et eum. Libero ipsam dolores aut excepturi. Eum aut veritatis aut ducimus iure. Molestias qui rem similique. Necessitatibus neque unde quo laboriosam. Adipisci alias quisquam quo quia quam non incidunt. Ex ea quaerat rerum impedit assumenda expedita. Temporibus sed et ex fuga praesentium sint. Ipsum sint consequatur pariatur. Sed non ut ab harum sed. Nobis eius aut unde maiores quo aliquid natus facilis. Et ut dolor autem non ipsam quaerat in alias. Consequatur iure et expedita sint necessitatibus autem et. Nihil dicta accusamus suscipit. Ducimus sit quis eum eaque voluptatibus ipsam. Nesciunt consequatur sed veniam quia iure libero a adipisci. Quas magni repudiandae perspiciatis cum. Natus aut unde voluptatem ipsa. In et earum inventore voluptatem hic maxime eum. Odio exercitationem et consequatur voluptas hic rerum doloribus. Est nam dolore aut provident animi soluta accusamus. Totam labore qui atque adipisci quia provident. Consequatur sunt quia libero. Cupiditate quo eos sit debitis quidem possimus consectetur. Eligendi fugit placeat beatae praesentium quia omnis et. Officia aut dolorem enim quo excepturi tempora hic. Libero et nisi voluptatibus explicabo ducimus voluptas. Officia eum et qui distinctio sit voluptatibus. Officia vitae facilis doloremque totam. Esse fugiat rerum asperiores qui. Voluptate sint corporis quibusdam. Et voluptatem hic nemo. Voluptate velit ab facere officiis est esse cupiditate. Quod ab odit est dolores maiores consequuntur quo. Odio qui qui nulla ipsa quibusdam. Harum et unde veniam dolorum inventore libero recusandae. Voluptatem dicta sapiente sapiente dicta quia dolorem.', '2015-05-22 10:32:49'),
(13, 'Dolores id commodi omnis et ut atque.', 'f963804d3e2a0c5c8a06667f80633c0a.jpg', 'Et mollitia saepe laboriosam aut. Ut ut consectetur ea velit ut quia voluptatem vel. Voluptatibus nostrum dolorem magni. Delectus inventore non quas excepturi commodi. Sunt perspiciatis quam est ut rerum. Consequatur ea doloribus eveniet minus minima odio quasi expedita. Doloribus provident doloremque recusandae ut sapiente blanditiis. Libero sapiente doloribus sint maiores est aut. Eius id molestiae aliquam et ut nihil hic. Harum ut numquam amet molestiae voluptatem. Provident molestiae nesciunt dolore neque autem unde maxime. Eum aut vero deserunt qui consequatur architecto animi quia. Laudantium dignissimos dolorem corporis explicabo et non. Architecto voluptates ut ipsa aut amet. Enim ut vitae nemo voluptates eos et praesentium. Quod molestias debitis facere expedita. Voluptate esse velit labore iure nisi rem sint. Placeat voluptas et voluptatem explicabo ducimus. Sunt at iste mollitia. Aperiam repellat amet incidunt labore dolores voluptates facere. Et et fuga nihil est itaque. Vero et aperiam explicabo et necessitatibus blanditiis consectetur. Id voluptates quos ipsa ut. Consequatur temporibus aspernatur alias blanditiis et. Maiores aperiam iusto dolore cumque. Ut magnam sit voluptatibus delectus exercitationem commodi minus. Voluptate distinctio voluptatem et ab. Est qui iusto quis nam placeat beatae fugit. Possimus voluptas vitae molestias est impedit nam. In consequuntur quos id et. Cumque voluptate voluptates ut voluptas unde. Ducimus ut nesciunt quae quia cumque eligendi. Est consectetur suscipit rerum doloremque incidunt veniam. Consequatur et commodi atque sed soluta magnam cumque. Ut repellendus vitae et vel ea sequi. Esse eius velit beatae dolor. Vitae aliquid quia non esse nostrum minima. Et explicabo minima sit saepe vero culpa. Voluptate facilis modi quibusdam.', '2015-05-29 01:48:06'),
(14, 'Accusamus temporibus aut suscipit recusandae aspernatur unde ipsam.', 'f9ccd4fec4d7c4a02ee95712b5e8dd05.jpg', 'Et voluptatem rerum et fugit inventore aperiam. Voluptatibus officia et minus quia animi error. Ea et eaque quis unde assumenda iste similique. Aut enim veritatis alias repellat culpa et aliquam. Enim vero dolore odio. Dolor sit odit est quia. Labore rerum aut assumenda. Eos aspernatur et quia libero est ipsam ea. Ipsam et vel praesentium pariatur ab nemo. Ut unde sit voluptatem laborum. Quos enim atque velit quia quos illum facere rerum. Officia consequatur quis voluptatem illum. Reprehenderit et officia id vitae. Non natus autem laboriosam voluptas ipsum quibusdam. Eius qui eligendi vero rerum autem. Non explicabo perferendis quaerat porro dolorum est voluptas ut. Fugiat et sed dolorem vitae porro modi. Nam et dolores a exercitationem. Ad debitis totam neque ad. In assumenda numquam sequi voluptates delectus dolorum quidem rerum. Dolores aut omnis voluptas officia. Dolores qui iure assumenda ut sunt optio. Ducimus deserunt corporis autem aspernatur nihil. Aliquid non natus quisquam perferendis excepturi pariatur fugiat. Quibusdam esse deserunt ipsa beatae. Vitae voluptatibus molestiae voluptatem ut et id eos. Nam non vel ducimus libero voluptas. Possimus veniam quo sunt dolores ut laboriosam possimus. Ea dolor nisi sed ex quas hic placeat ea. Accusamus accusantium modi consequatur mollitia. Quod aut deleniti excepturi consequatur omnis aut nesciunt. Magni deleniti nobis expedita assumenda. Autem consequuntur eaque maxime laboriosam. Natus distinctio saepe soluta corrupti nemo nostrum vitae. Voluptas enim consectetur voluptas. Velit a et sed voluptatem facere est. Enim perspiciatis necessitatibus tenetur ab sequi dolorem. Officiis enim est illum cupiditate vel voluptatem.', '2015-05-20 20:09:29'),
(15, 'Optio necessitatibus nulla autem voluptas sit id earum.', 'fd4a244b455c92da4e7757a5e2f62586.jpg', 'Ea quod repudiandae voluptas enim. Et facilis eum quos commodi. Accusantium explicabo incidunt commodi. Consequatur est aliquam quod est itaque. Vel id voluptatem eligendi qui quos. Dolorum hic consequatur sed. Aliquam sint in laborum qui fugit accusamus mollitia voluptas. Dicta voluptates iure aspernatur atque a debitis. Tempore minima doloremque et et occaecati aut. Eos exercitationem iusto necessitatibus temporibus accusamus. Natus est voluptate voluptatem ut aliquid quam ratione. Provident ea placeat repellendus ratione et. Amet in nihil cum quaerat facilis qui sit. Facilis optio soluta fuga quo dolores ut. Ratione et ratione velit qui eius beatae facere. Est sit et et omnis. Et rem commodi cum voluptatem molestias aut. Quidem sunt exercitationem est natus saepe sunt. Animi omnis provident et quia tenetur. Deserunt omnis rerum odio voluptas harum architecto maiores. Sit culpa nisi et ut sapiente quaerat. Quis quo doloribus possimus iste. Nihil odio ut consequatur. Et aut sunt nisi nostrum quod velit officia facilis. Iste ut ut sit doloribus. Omnis commodi vero non. Qui quidem porro non reiciendis. Praesentium dolores numquam officiis animi qui aut. Dolore alias atque et debitis.', '2015-05-22 17:21:59');

-- --------------------------------------------------------

--
-- Структура таблицы `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `district_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `district` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `town_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`district_id`),
  KEY `districts_town_id_index` (`town_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Дамп данных таблицы `districts`
--

INSERT INTO `districts` (`district_id`, `district`, `town_id`) VALUES
(1, 'district #4', 3),
(2, 'district #3', 11),
(3, 'district #8', 2),
(4, 'district #10', 6),
(5, 'district #8', 5),
(6, 'district #1', 10),
(7, 'district #10', 9),
(8, 'district #1', 3),
(9, 'district #8', 2),
(10, 'district #9', 4),
(11, 'district #3', 10),
(12, 'district #10', 6),
(13, 'district #1', 1),
(14, 'district #9', 11),
(15, 'district #4', 5),
(16, 'district #6', 3),
(17, 'district #3', 3),
(18, 'district #2', 6),
(19, 'district #7', 4),
(20, 'district #5', 15),
(21, 'district #2', 11),
(22, 'district #4', 1),
(23, 'district #6', 8),
(24, 'district #5', 8),
(25, 'district #3', 8),
(26, 'district #9', 9),
(27, 'district #8', 2),
(28, 'district #1', 14),
(29, 'district #7', 3),
(30, 'district #5', 5),
(31, 'district #4', 5),
(32, 'district #2', 11),
(33, 'district #4', 13),
(34, 'district #5', 9),
(35, 'district #6', 2),
(36, 'district #1', 10),
(37, 'district #10', 11),
(38, 'district #5', 6),
(39, 'district #10', 14),
(40, 'district #1', 2),
(41, 'district #7', 12),
(42, 'district #4', 13),
(43, 'district #3', 2),
(44, 'district #5', 5),
(45, 'district #4', 1),
(46, 'district #1', 10),
(47, 'district #3', 1),
(48, 'district #5', 14),
(49, 'district #8', 1),
(50, 'district #7', 10),
(51, 'district #5', 13),
(52, 'district #2', 10),
(53, 'district #1', 11),
(54, 'district #2', 13),
(55, 'district #2', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `estates`
--

CREATE TABLE IF NOT EXISTS `estates` (
  `estate_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `house_area` int(11) DEFAULT NULL,
  `yard_area` int(11) DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `commercial` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `sea_dist` int(11) NOT NULL,
  `type` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `period` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `district_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`estate_id`),
  KEY `estates_district_id_index` (`district_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Дамп данных таблицы `estates`
--

INSERT INTO `estates` (`estate_id`, `title`, `description`, `house_area`, `yard_area`, `rooms`, `commercial`, `sea_dist`, `type`, `period`, `price`, `address`, `longitude`, `latitude`, `district_id`) VALUES
(1, 'Apt. 347', 'Natus reprehenderit ut est ea dignissimos. Delectus beatae perspiciatis ipsum. Rerum et eum molestiae cum praesentium sit.', 276, 11, 11, 'sale', 450, 'cottage', NULL, 13500, '26411 Carrie Hollow\nNew Jonasview, NJ 06883', '121.314524', '43.910199', 40),
(2, 'Apt. 622', 'Ut quibusdam temporibus quo odit. Dolorem id repellendus dolorem voluptatem. Recusandae est sed quasi aut.', NULL, 32, NULL, 'rent', 700, 'parcel', 'daily', 53500, '75136 Jaylan Locks Suite 665\nLeannonhaven, GA 51118-6805', '-162.416960', '55.953311', 36),
(3, 'Suite 347', 'Sequi doloribus aut amet dolores. Ipsa suscipit mollitia unde animi dolore consectetur. Atque aliquam animi quae ratione beatae.', 43, 21, 7, 'sale', 450, 'cottage', NULL, 71500, '0136 Marty Manors\nBaileyberg, MI 03935', '22.920908', '15.782954', 13),
(4, 'Suite 329', 'Omnis aperiam quaerat quidem. Qui cum est commodi adipisci. Vitae vel maxime quia sapiente.', NULL, 14, NULL, 'rent', 550, 'parcel', 'hourly', 55000, '3389 Theresia Summit\nKiehnburgh, CO 12354', '-53.882719', '45.294606', 19),
(5, 'Suite 657', 'Qui nihil natus perspiciatis consequatur cumque velit consequatur. Cumque earum rerum sequi dolor aperiam temporibus. Et et tempore dolores ducimus. Libero perspiciatis non commodi vitae et sed fugit ut.', NULL, 11, NULL, 'sale', 750, 'parcel', NULL, 158500, '3350 Janet Green\nMetzborough, TX 72129', '175.608528', '56.785851', 4),
(6, 'Apt. 675', 'Similique ipsa illum aut et nobis. Aliquam minus voluptatem sit dolorum eaque voluptatem. Voluptatum iusto sint et sit sunt dolores numquam explicabo. Sed molestias accusamus et sed deleniti officiis.', 248, 29, 11, 'rent', 750, 'cottage', 'daily', 51500, '230 McGlynn Crossroad Suite 040\nWest Magnusshire, AL 51641-7601', '36.408388', '-76.793531', 11),
(7, 'Suite 423', 'Labore mollitia distinctio rem atque. Repellendus est consequatur qui. Dolores reprehenderit magnam consectetur qui aut.', 110, NULL, 3, 'rent', 350, 'flat', 'daily', 68000, '862 Dessie Estate\nJacobston, IN 00837-5592', '-111.422873', '5.639091', 50),
(8, 'Suite 538', 'Rem tenetur quod ut aut at sed rem. Et voluptatem voluptas debitis doloribus qui autem. Et laudantium ut fuga distinctio sequi et. Unde quod eius sunt aliquid sequi.', NULL, 16, NULL, 'sale', 300, 'parcel', NULL, 53000, '26551 Caitlyn Junction Suite 864\nLake Jedidiahburgh, NE 48679', '-76.359319', '8.191641', 12),
(9, 'Suite 598', 'Voluptatem natus inventore adipisci consequuntur harum. Ipsam delectus molestiae labore quia. Beatae et ullam fugit dolor autem quibusdam fugit.', 202, 12, 6, 'sale', 200, 'cottage', NULL, 148000, '7693 Sadye Fort Apt. 965\nHickleton, VA 35101', '-59.508017', '-25.074652', 41),
(10, 'Suite 947', 'Temporibus laborum nulla eligendi eos atque commodi. Iste quis ullam rerum delectus ut corrupti laudantium. Optio porro et illum natus aut labore. Nihil eum cumque tenetur.', 277, 23, 5, 'rent', 150, 'commercial', 'hourly', 159500, '06273 Herzog Motorway Suite 555\nCiarahaven, WV 85085-6607', '-47.407808', '-38.156815', 31),
(11, 'Suite 984', 'Omnis rerum sapiente corporis voluptatibus magni et est. Necessitatibus non aut quas qui exercitationem et praesentium. Qui est non velit fugit repellendus velit consectetur. Dignissimos eos eos placeat enim.', 142, 21, 11, 'sale', 700, 'cottage', NULL, 38500, '261 Bianka Course\nVickiehaven, TX 23456', '-115.763787', '-65.156052', 2),
(12, 'Apt. 293', 'Doloremque aut aperiam est quis quasi. Molestiae repudiandae sed quos vero sed voluptatem numquam consequatur.', 115, 17, 3, 'sale', 550, 'commercial', NULL, 130500, '58071 Orn Crossroad\nEast Carolyn, CT 81306', '-131.419708', '32.763068', 7),
(13, 'Apt. 522', 'Distinctio quaerat temporibus impedit voluptatem aliquid ratione ea. Provident occaecati nostrum facere cum. A dolorem quaerat quasi.', 40, 4, 2, 'rent', 650, 'cottage', 'daily', 95000, '11568 Kyra Burgs Apt. 019\nBethelview, GA 90662-1079', '-154.987923', '84.558338', 30),
(14, 'Suite 606', 'Fuga voluptas ut voluptatum voluptatibus voluptas sed labore sint. Qui laboriosam sunt eligendi itaque autem quae explicabo. Id qui nam non saepe ea laborum. Iure minus pariatur facere in. Exercitationem autem nostrum optio neque eum nemo nostrum.', NULL, 17, NULL, 'rent', 50, 'parcel', 'monthly', 34500, '2454 Kaylin Burg\nLuisfurt, IL 83620-2876', '47.205719', '-15.545004', 43),
(15, 'Apt. 298', 'Reprehenderit culpa culpa voluptas qui porro natus odit optio. Et ipsum architecto non aliquam ut. Nisi eaque ipsum laboriosam ea voluptas ea. Magni eveniet sunt totam eaque et nam nihil.', 43, NULL, 4, 'rent', 450, 'flat', 'hourly', 79000, '0621 Josiah Manor Apt. 687\nPort Ilene, NE 32938-4495', '126.743634', '-23.170279', 53),
(16, 'Apt. 833', 'Nesciunt expedita saepe eos cumque soluta cumque omnis. Praesentium vitae sint in eum amet quia voluptatem. Eius quisquam porro illum molestiae doloribus maxime.', 88, 32, 4, 'sale', 150, 'commercial', NULL, 112500, '638 Damion Islands\nReichertshire, WV 42794', '122.003462', '64.931681', 32),
(17, 'Apt. 056', 'Architecto consequatur et occaecati quos. Possimus fugiat fugiat qui omnis. Aut et nemo voluptas itaque rem autem. Harum quia nesciunt rerum officiis sit ea.', 189, 17, 11, 'rent', 100, 'cottage', 'monthly', 70000, '37154 Rodriguez Summit Apt. 641\nNew Justineshire, NH 92616', '66.690083', '-71.382491', 5),
(18, 'Apt. 069', 'Quisquam suscipit optio aliquid ut a et est. Nobis ut illum optio possimus quasi ab ipsa quos. Molestiae laudantium quae incidunt consectetur et molestiae dignissimos. Provident odit officiis voluptatem voluptas vel accusantium.', NULL, 10, NULL, 'sale', 300, 'parcel', NULL, 22000, '3917 King Flats Suite 443\nEast Willowfurt, ND 17910', '54.879198', '21.664118', 42),
(19, 'Suite 520', 'Architecto mollitia quas et natus dicta nulla. Officiis ullam voluptatem fugit ullam quo temporibus. Excepturi id dolorem et et enim facere molestiae. Aut rerum in eum dolorum aut voluptas.', NULL, 16, NULL, 'sale', 700, 'parcel', NULL, 84500, '7894 Homenick Branch Suite 092\nRobelmouth, RI 28746', '61.373328', '6.796312', 39),
(20, 'Apt. 390', 'Dolore voluptas laboriosam aut architecto. Voluptatibus omnis id molestias. Ducimus occaecati rerum excepturi exercitationem esse.', 65, 15, 5, 'rent', 550, 'cottage', 'daily', 157000, '499 Zion Fort\nNew Haileeton, AK 12822-1969', '-46.474584', '-62.551814', 25),
(21, 'Suite 462', 'Saepe doloribus architecto odit omnis cum. Culpa ratione id illo harum aut. Dolor aspernatur quo itaque doloremque sequi provident ad eius. Aut blanditiis illo sed.', 65, 29, 7, 'rent', 500, 'cottage', 'daily', 164500, '32595 Kuhn Mission\nCornellmouth, IA 09213', '175.194208', '36.096406', 19),
(22, 'Apt. 420', 'Placeat et voluptas quia iusto cumque. Qui veritatis dolor eaque a consequatur nemo id. Repellendus consectetur quibusdam voluptate aperiam sit ipsam fugiat qui.', 63, 40, 11, 'sale', 500, 'commercial', NULL, 52500, '6914 Coy Roads\nGreysonshire, MN 87541-3667', '42.379250', '-52.694806', 2),
(23, 'Apt. 026', 'Eius est accusamus ex unde deserunt. Veritatis sint et nulla dolorum. Vero sed ea totam eum quis repudiandae. Repudiandae non nulla aut.', 83, 11, 5, 'sale', 650, 'commercial', NULL, 9500, '9973 Norma Summit\nNew Shanon, MA 26660-8809', '138.768534', '-7.367535', 44),
(24, 'Suite 150', 'Voluptatem iusto occaecati iure voluptas possimus. Saepe quos nam consequuntur ea nihil. Minima esse doloremque aut reiciendis. Aspernatur officiis rerum porro quae blanditiis officiis qui.', 232, NULL, 3, 'sale', 300, 'flat', NULL, 173000, '55085 Jorge Station Apt. 791\nSouth Ludwig, NC 99675', '155.428988', '12.074962', 16),
(25, 'Suite 444', 'Iure possimus ratione a aperiam. Reiciendis aut cumque amet quaerat autem et.', 93, 10, 5, 'rent', 200, 'commercial', 'daily', 14000, '2798 Feil Estate Suite 813\nEloisafurt, NV 83993-2425', '61.693219', '-28.536523', 40),
(26, 'Apt. 922', 'Suscipit sapiente ea et sint et et earum. Sint est sed minus molestiae numquam maiores. Soluta repudiandae accusantium quis dolores ipsum rerum esse.', 95, NULL, 3, 'rent', 350, 'flat', 'daily', 89000, '2683 Sasha Crossroad\nEast Elizachester, CO 11338', '103.375908', '-15.835546', 35),
(27, 'Suite 193', 'Tempore neque qui facilis eligendi voluptatem facilis eius. Quas velit sed nesciunt vitae velit molestiae laborum. Distinctio sequi quam quos doloribus consequatur id aliquid. Sequi nihil quia debitis et consequatur.', 236, 14, 7, 'rent', 300, 'commercial', 'daily', 53500, '45814 Terry Course Apt. 591\nAmeliechester, NH 87878-0325', '-170.821690', '-66.734434', 54),
(28, 'Suite 293', 'Eius aperiam ab esse qui impedit. Dolorem blanditiis velit id mollitia rerum est minima ullam. Corrupti omnis alias similique provident voluptatem hic et.', 111, 17, 4, 'sale', 300, 'commercial', NULL, 33000, '922 Eichmann Forges Suite 561\nWest Sanford, NE 72927-9901', '-112.465508', '-53.073973', 28),
(29, 'Apt. 427', 'Officiis dolores temporibus provident ipsa. Dolores illum excepturi consequatur quibusdam ratione nostrum incidunt.', NULL, 29, NULL, 'rent', 500, 'parcel', 'daily', 120000, '3023 Smith Valley\nTerrancemouth, DC 71076-9159', '-68.836121', '39.754828', 29),
(30, 'Suite 796', 'Exercitationem ipsam porro minima suscipit qui magni dolorem. Accusamus consectetur doloribus ut. Harum sit rem et quis voluptate est eum. Itaque exercitationem ut voluptatibus earum aliquam dolor.', 291, 4, 8, 'rent', 600, 'commercial', 'monthly', 59000, '006 Shields Burgs\nSouth Corine, CO 13729', '65.217336', '-56.327948', 55),
(31, 'Apt. 812', 'Dolor velit id est ex. Et sed impedit maiores aliquam dolor sed aut aut. Officia maiores veniam aut ut error qui. Ea nihil velit ab aut.', 287, 14, 9, 'rent', 250, 'cottage', 'daily', 147000, '1337 Frederic Plains Apt. 684\nLake Abbie, MA 36794-2309', '4.072159', '-31.888802', 50),
(32, 'Suite 911', 'Omnis sit dolore impedit. Voluptatibus dolor reiciendis dignissimos minima. Adipisci rem nobis ex.', 162, NULL, 12, 'rent', 300, 'flat', 'daily', 114500, '6743 Metz Lakes Apt. 037\nEleazarborough, VT 79769-0043', '-66.558766', '-52.621959', 1),
(33, 'Suite 119', 'Alias excepturi beatae a nostrum rerum eligendi qui. Itaque occaecati ea repudiandae ipsum. Consequatur maxime ipsam adipisci enim.', 111, 10, 7, 'rent', 100, 'cottage', 'monthly', 119000, '89185 Ana Views\nMargarettebury, ME 15490', '141.019683', '-32.983908', 7),
(34, 'Apt. 132', 'Quo quidem et delectus tenetur. Porro vero expedita consequatur quis esse dicta. Et aut dolores similique aliquam nihil et quos. Ducimus minima dolorem et nihil maxime amet eveniet vero.', 254, NULL, 3, 'rent', 150, 'flat', 'hourly', 113500, '9309 Muriel Terrace\nNew Emilianoton, TN 95247', '-17.542564', '79.107355', 2),
(35, 'Apt. 238', 'Ut et voluptas voluptas minima iste atque. Assumenda provident mollitia autem voluptate ut quaerat deserunt.', 213, 13, 7, 'sale', 500, 'commercial', NULL, 166500, '51366 Murray Bridge\nWatsonview, MN 96276', '-128.226807', '47.941283', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `estate_id` int(10) unsigned NOT NULL,
  `preview` tinyint(1) NOT NULL,
  PRIMARY KEY (`image_id`),
  KEY `images_estate_id_index` (`estate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`image_id`, `image`, `estate_id`, `preview`) VALUES
(1, '0849d3f116b7839e8a23c1dcd100f939.jpg', 3, 0),
(2, '0c17ea7b57badb511c7e095833cc408b.jpg', 17, 0),
(3, '0e5a8949d31dc826da4d209653982ce1.jpg', 21, 1),
(4, '130acd8a1137b57319e9532401062e04.jpg', 2, 0),
(5, '24355243567743a03bda9e65248fa908.jpg', 35, 0),
(6, '29a8dca91b1e491ae01ae7768a4ee462.jpg', 4, 1),
(7, '2b542403e94c95fc8e19ebdc85020863.jpg', 32, 0),
(8, '310af6bb4238315639888741cd3f6088.jpg', 15, 0),
(9, '34a0f29d61f1da44c79415eb142803bd.jpg', 31, 0),
(10, '3670d446cbe0aaa2ff791369922caf4b.jpg', 1, 0),
(11, '459d3c12155384c5d03dcc693a2ffad7.jpg', 3, 0),
(12, '468c59e253332a5cf46955453fbbe0fe.jpg', 35, 0),
(13, '53aedf148b488382dbcc29e07014ad2f.jpg', 24, 1),
(14, '5cce3de2b32e1a8c5e735abe1ff6160b.jpg', 19, 0),
(15, '5d5db5b84e2dc795e5f08cc5d87bfda4.jpg', 19, 0),
(16, '6248116907b42b531d95f9faf4b071d4.jpg', 26, 1),
(17, '64930c2dfe8069aa1ff936f3f941af09.jpg', 23, 0),
(18, '668d75b466ffcd8427c8dbb5435fb200.jpg', 11, 0),
(19, '67d18002e1cf62244a3d9814b0a0acd5.jpg', 32, 1),
(20, '69b25dc2d1f9dd8539d727d16cac08f4.jpg', 18, 1),
(21, '6b0f29704cd4f75441d5b88d06c2f3c6.jpg', 15, 0),
(22, '6c3364536e8d2f7afd931566f09fbb10.jpg', 13, 0),
(23, '6ea2709afcb8865ab630e4c0d11ad284.jpg', 23, 0),
(24, '6f2f1c4ff291d25b1a76d797324f990c.jpg', 22, 1),
(25, '6faeec10879ba70cd7f97aa674571826.jpg', 28, 0),
(26, '70b63b366abb3292873c78cb9f78a0a5.jpg', 5, 0),
(27, '722fdd090c46218fa0d1a9d014b4e248.jpg', 23, 0),
(28, '7e54312fba81b82a074b8da44d2db87d.jpg', 4, 0),
(29, '8fc527f0f9cb51d1c17c6d877b640249.jpg', 16, 1),
(30, '8fc75841b62b16d811176fff231c54cc.jpg', 3, 0),
(31, '99c23f1ddc64986091d6d2c1bf5e305a.jpg', 20, 0),
(32, '9cad468ecbe35445144a9da31b7439f9.jpg', 18, 0),
(33, '9e9beb99726468aea93bc7ced6982824.jpg', 3, 0),
(34, '9ebda9550772941913a511993f43bd22.jpg', 16, 0),
(35, 'a214b258767236a4735ac4e0be607e2d.jpg', 30, 1),
(36, 'a8d14d4c9753adf767a7b9a027f0d589.jpg', 32, 0),
(37, 'aa29b8e0ab43e457097a9b4b50e264c1.jpg', 3, 1),
(38, 'b18d25eac07da04517857bfdeb54104e.jpg', 35, 0),
(39, 'c60e6e07e236a1b3c8efa4d7f96b76f2.jpg', 34, 1),
(40, 'c6b928ab14a254c250b3aa3ae3b9ec79.jpg', 29, 0),
(41, 'c86fb062abe2a62fa45a416b069e41f1.jpg', 30, 0),
(42, 'cf5b30a18158898ddb3aeb74714fa7a0.jpg', 4, 0),
(43, 'd3612556a594aea5467a58e4864e1ab0.jpg', 20, 1),
(44, 'dbdc6b8a98b118ea520537844cb6595c.jpg', 17, 1),
(45, 'e572d5744d77896d013f691cc47e7fee.jpg', 11, 1),
(46, 'ef03e08e9e941edc7fa5e105072d0585.jpg', 14, 0),
(47, 'f4b37a3b7f2c76812a1fb52565d82052.jpg', 4, 0),
(48, 'f963804d3e2a0c5c8a06667f80633c0a.jpg', 33, 0),
(49, 'f9ccd4fec4d7c4a02ee95712b5e8dd05.jpg', 35, 1),
(50, 'fd4a244b455c92da4e7757a5e2f62586.jpg', 19, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_05_20_182906_create_estates_table', 1),
('2015_05_20_182926_create_articles_table', 1),
('2015_05_20_182936_create_images_table', 1),
('2015_05_20_182946_create_districts_table', 1),
('2015_05_20_182956_create_towns_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `towns`
--

CREATE TABLE IF NOT EXISTS `towns` (
  `town_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `town` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`town_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `towns`
--

INSERT INTO `towns` (`town_id`, `town`) VALUES
(1, 'Anitafurt'),
(2, 'Robertsbury'),
(3, 'Port Jailyn'),
(4, 'West Mohammed'),
(5, 'West Amber'),
(6, 'Lake Tyrel'),
(7, 'North Colinview'),
(8, 'Collinstown'),
(9, 'New Darianaburgh'),
(10, 'Lake Jarred'),
(11, 'Lake Laurencehaven'),
(12, 'Gibsonport'),
(13, 'South Hollisborough'),
(14, 'East Toney'),
(15, 'East Reilly');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '$2y$10$wQR3pm2Nqmjmic88IYo0.eVsFRg9d06.yy3s7CxoUaJaSe/uwDACa', NULL, '2015-06-01 12:58:11', '2015-06-01 12:58:11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
