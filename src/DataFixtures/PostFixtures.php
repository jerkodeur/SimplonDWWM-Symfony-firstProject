<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class PostFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $posts = [
            ['title' => "Valheim – Tout ce que vous devez savoir",
            'content' => '<p>Valheim, le jeu de survie massivement populaire dans le monde ouvert, vous transforme, vous et vos amis, en Vikings et vous d&eacute;pose au purgatoire, o&ugrave; vous devez tuer les rivaux d&rsquo;Odin et r&eacute;tablir l&rsquo;ordre.</p>

            <p>Notre guide vous donne des conseils et vous permet d&rsquo;augmenter vos chances de survie et de r&eacute;ussite</p>

            <h2>TOUT CE QUE VOUS DEVEZ SAVOIR POUR SURVIVRE &Agrave; VALHEIM</h2>


            <ul>
                <li>Ce que doivent &ecirc;tre vos premiers pas dans le jeu.</li>
                <li>Comment construire votre premi&egrave;re base.</li>
                <li>Comment vous pr&eacute;parer au premier combat de big boss.</li>
            </ul>

            <p>&nbsp;</p>

            <p><img alt="valheim valheim game valheim server valheim game download valheim gameplay valheim release date pål sverre valheim hagen valheim download anne ruth valheim aov switch valheim apv switch valheim arena of valor valheim build arena of valor valheim op dvoid valheim games like valheim valheim buy key hideka valheim how to install valheim on a pc how to make a valheim server how to start a valheim server how to visit valheim hof http en.m.wikipedia.org wiki p c3 a5l_sverre_valheim_hagen http spangenhelm.com valheim-hof-denmark-dedicated-odin-gods https dvoidis itch io valheim is valheim getting updated cd key valheim best price valheim valheim game key game code valheim" src="https://www.allkeyshop.com/blog/wp-content/uploads/valheim.jpg" style="height:341px; width:615px" /></p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <h2>ARBRES &Agrave; CIMES</h2>

            <p>&nbsp;</p>

            <p>Se plonger dans Valheim est un spectacle familier car il pr&eacute;sente de nombreuses caract&eacute;ristiques influenc&eacute;es par d&rsquo;autres jeux de survie.</p>

            <p>Apr&egrave;s un petit rep&eacute;rage, la premi&egrave;re chose &agrave; faire est de fabriquer les outils disponibles &agrave; partir du bois et de la pierre que vous pouvez trouver. Une hache et un marteau, et beaucoup de bois et de pierre seront un bon d&eacute;but.</p>

            <p>Ramassez du bois en frappant les arbres. Oui, le poin&ccedil;onnage. Et ramassez la pierre que vous voyez en la ramassant.</p>

            <p>&nbsp;</p>

            <p><img alt=" valheim valheim game valheim server valheim game download valheim gameplay valheim release date pål sverre valheim hagen valheim download anne ruth valheim aov switch valheim apv switch valheim arena of valor valheim build arena of valor valheim op dvoid valheim games like valheim valheim buy key hideka valheim how to install valheim on a pc how to make a valheim server how to start a valheim server how to visit valheim hof http en.m.wikipedia.org wiki p c3 a5l_sverre_valheim_hagen http spangenhelm.com valheim-hof-denmark-dedicated-odin-gods https dvoidis itch io valheim is valheim getting updated cd key valheim best price valheim valheim game key game code valheim" src="https://www.allkeyshop.com/blog/wp-content/uploads/valheim2.jpg" style="height:287px; width:512px" /></p>

            <p>&nbsp;</p>

            <p>La premi&egrave;re t&acirc;che consiste &agrave; fabriquer un &eacute;tabli. Pour ce faire, vous devez entrer dans l&rsquo;onglet &laquo;&nbsp;Artisanat&nbsp;&raquo; et s&eacute;lectionner la recette de l&rsquo;&eacute;tabli.</p>

            <p>L&rsquo;&eacute;tabli vous permet de fabriquer des outils et de construire un abri dans la zone qu&rsquo;il couvre.</p>

            <p>Ensuite, vous devez prot&eacute;ger votre &eacute;tabli en construisant un toit ou un mur. Vous serez constamment attaqu&eacute;.</p>

            <p>La t&acirc;che suivante consiste &agrave; construire un lit et &agrave; faire un feu de camp.</p>

            <p>Le feu de camp vous gardera au chaud et vous offrira une source de lumi&egrave;re pendant toute la nuit, et le lit sera votre point de frai si vous veniez &agrave; mourir.</p>

            <p>Si vous avez besoin de niveler le terrain pour construire, vous pouvez le faire en fabriquant une houe.</p>

            <p>Soyez aussi efficace que possible avec les ressources limit&eacute;es dont vous disposez, et vous pourrez peut-&ecirc;tre survivre la premi&egrave;re nuit</p>

            <p>&nbsp;</p>

            <h2>RENFORCEZ VOS COMP&Eacute;TENCES EN LES UTILISANT</h2>

            <p>&nbsp;</p>

            <p><img alt=" valheim valheim game valheim server valheim game download valheim gameplay valheim release date pål sverre valheim hagen valheim download anne ruth valheim aov switch valheim apv switch valheim arena of valor valheim build arena of valor valheim op dvoid valheim games like valheim valheim buy key hideka valheim how to install valheim on a pc how to make a valheim server how to start a valheim server how to visit valheim hof http en.m.wikipedia.org wiki p c3 a5l_sverre_valheim_hagen http spangenhelm.com valheim-hof-denmark-dedicated-odin-gods https dvoidis itch io valheim is valheim getting updated cd key valheim best price valheim valheim game key game code valheim" src="https://www.allkeyshop.com/blog/wp-content/uploads/valheim-skills.jpg" style="height:359px; width:637px" /></p>

            <p>&nbsp;</p>

            <p>Les comp&eacute;tences &agrave; Valheim sont similaires &agrave; celles des autres jeux du genre. En les utilisant davantage, vous augmentez votre exp&eacute;rience et votre niveau, ce qui vous rend plus efficace.</p>

            <p>Si vous voulez am&eacute;liorer votre technique de tir &agrave; l&rsquo;arc, faites quelques exercices de tir &agrave; la cible. Si vous voulez am&eacute;liorer votre niveau en combat &agrave; mains nues, utilisez vos poings et donnez des coups de poing.</p>

            <p>Avant de vous lancer dans un combat &agrave; l&rsquo;arc, n&rsquo;oubliez pas que vos armes ont une dur&eacute;e de vie limit&eacute;e. Ne les cassez pas trop t&ocirc;t.</p>

            <p>&nbsp;</p>

            <h4>BON &Agrave; SAVOIR : LES R&Eacute;PARATIONS SONT GRATUITES</h4>

            <p>&nbsp;</p>

            <p><img alt=" valheim valheim game valheim server valheim game download valheim gameplay valheim release date pål sverre valheim hagen valheim download anne ruth valheim aov switch valheim apv switch valheim arena of valor valheim build arena of valor valheim op dvoid valheim games like valheim valheim buy key hideka valheim how to install valheim on a pc how to make a valheim server how to start a valheim server how to visit valheim hof http en.m.wikipedia.org wiki p c3 a5l_sverre_valheim_hagen http spangenhelm.com valheim-hof-denmark-dedicated-odin-gods https dvoidis itch io valheim is valheim getting updated cd key valheim best price valheim valheim game key game code valheim" src="https://www.allkeyshop.com/blog/wp-content/uploads/valheim-repairs.jpg" style="height:364px; width:650px" /></p>

            <p>&nbsp;</p>

            <p>En ce qui concerne la durabilit&eacute;, si vous avez besoin de r&eacute;parer votre marteau ou votre hache &eacute;mouss&eacute;e, vous pouvez le faire en utilisant l&rsquo;&eacute;tabli.</p>

            <p>Tant que votre &eacute;tabli est utilisable, la r&eacute;paration de vos outils et de vos armes est gratuite.</p>

            <p>&nbsp;</p>

            <h2>ASSUREZ-VOUS DE DISPOSER D&rsquo;UN ESPACE DE RANGEMENT SUFFISANT</h2>

            <p>&nbsp;</p>

            <p><img alt=" valheim valheim game valheim server valheim game download valheim gameplay valheim release date pål sverre valheim hagen valheim download anne ruth valheim aov switch valheim apv switch valheim arena of valor valheim build arena of valor valheim op dvoid valheim games like valheim valheim buy key hideka valheim how to install valheim on a pc how to make a valheim server how to start a valheim server how to visit valheim hof http en.m.wikipedia.org wiki p c3 a5l_sverre_valheim_hagen http spangenhelm.com valheim-hof-denmark-dedicated-odin-gods https dvoidis itch io valheim is valheim getting updated cd key valheim best price valheim valheim game key game code valheim" src="https://www.allkeyshop.com/blog/wp-content/uploads/storage.jpg" style="height:358px; width:650px" /></p>

            <p>&nbsp;</p>

            <p>Les jeux de survie exigent une gestion minutieuse des stocks, et Valheim n&rsquo;est pas diff&eacute;rent.</p>

            <p>Tout en construisant et en rassemblant des ressources, il serait sage de construire des coffres d&egrave;s le d&eacute;but et de les placer dans votre base.</p>

            <p>Stockez les ressources et nettoyez r&eacute;guli&egrave;rement votre inventaire &agrave; l&rsquo;aide des coffres.</p>

            <p>&nbsp;</p>

            <h2>ARMES : ARCS, FL&Egrave;CHES, BOUCLIERS ET LANCES</h2>

            <p>&nbsp;</p>

            <p><img alt=" valheim valheim game valheim server valheim game download valheim gameplay valheim release date pål sverre valheim hagen valheim download anne ruth valheim aov switch valheim apv switch valheim arena of valor valheim build arena of valor valheim op dvoid valheim games like valheim valheim buy key hideka valheim how to install valheim on a pc how to make a valheim server how to start a valheim server how to visit valheim hof http en.m.wikipedia.org wiki p c3 a5l_sverre_valheim_hagen http spangenhelm.com valheim-hof-denmark-dedicated-odin-gods https dvoidis itch io valheim is valheim getting updated cd key valheim best price valheim valheim game key game code valheim" src="https://www.allkeyshop.com/blog/wp-content/uploads/weapons-1.jpg" style="height:350px; width:634px" /></p>

            <p>&nbsp;</p>

            <p>Vous voudrez une arme lorsque vous explorerez le monde, et vous en aurez besoin pour survivre.</p>

            <p>Le plus t&ocirc;t possible, fabriquez un arc. Vous pouvez non seulement attaquer &agrave; distance, mais aussi chasser le cerf.</p>

            <p>La fabrication de fl&egrave;ches en bois est simple, et il devrait &ecirc;tre facile de ramasser plus de bois quand on en a besoin.</p>

            <p>&nbsp;</p>

            <h2>VAINCRE L&rsquo;EIKTHYR : COMMENT SE PR&Eacute;PARER DE MANI&Egrave;RE OPTIMALE</h2>

            <p>&nbsp;</p>

            <p><img alt=" valheim valheim game valheim server valheim game download valheim gameplay valheim release date pål sverre valheim hagen valheim download anne ruth valheim aov switch valheim apv switch valheim arena of valor valheim build arena of valor valheim op dvoid valheim games like valheim valheim buy key hideka valheim how to install valheim on a pc how to make a valheim server how to start a valheim server how to visit valheim hof http en.m.wikipedia.org wiki p c3 a5l_sverre_valheim_hagen http spangenhelm.com valheim-hof-denmark-dedicated-odin-gods https dvoidis itch io valheim is valheim getting updated cd key valheim best price valheim valheim game key game code valheim" src="https://www.allkeyshop.com/blog/wp-content/uploads/Eikthyr.jpg" style="height:315px; width:512px" /></p>

            <p>&nbsp;</p>

            <p>Vous &ecirc;tes donc pr&ecirc;t pour votre premier patron, Eikthyr.</p>

            <p>Eikthyr, le cerf mystique, ne peut &ecirc;tre convoqu&eacute; qu&rsquo;&agrave; partir d&rsquo;un seul endroit. L&rsquo;autel mystique.</p>

            <p>Vous pouvez invoquer Eikthyr avec deux troph&eacute;es de cerf. Ils doivent &ecirc;tre dans votre inventaire.</p>

            <p>Les troph&eacute;es de cerfs sont collect&eacute;s par la chasse aux cerfs. C&rsquo;est une chute peu commune qui peut prendre un certain temps.</p>

            <p>Eikthyr n&rsquo;est pas tr&egrave;s puissant, bien qu&rsquo;il ait deux formes d&rsquo;attaque par la foudre. Il peut attaquer &agrave; distance et de pr&egrave;s.</p>

            <p>Vous aurez tr&egrave;s probablement un bouclier en bois et une arme de d&eacute;part, comme une lance. Ils seront suffisants pour vaincre Eikthyr tant que vous bloquez ses attaques et que vous vous &eacute;caillez avec votre arme.</p>

            <p>N&rsquo;oubliez pas qu&rsquo;il vaut la peine de vous reposer dans votre lit avant de vous battre et de retrouver la sant&eacute; qui vous manque.</p>',
            'img' => 'https://blog.cloudware.bg/wp-content/uploads/2021/05/MicrosoftTeams-image-2.jpg',
            'category' => 'Fantasy'
            ],
            ['title' => "On a testé… « Assassin’s Creed : Valhalla », le jeu d’exploration nordique qui n’est pas à l’ouest",
            'content' => '<p>La saga d&rsquo;Ubisoft, jusqu&rsquo;ici embourb&eacute;e dans ses automatismes, prend un nouveau d&eacute;part et se r&eacute;v&egrave;le plus prenante (et belle) que jamais.</p>

            <p>Eivor chevauche, triomphante, parmi les ruines d&rsquo;un monde ancien, les sabots de son cheval claquant sur une route pav&eacute;e par des hommes morts cinq ans plus t&ocirc;t. Eivor est l&rsquo;h&eacute;ro&iuml;ne d&rsquo;<em>Assassin&rsquo;s Creed&nbsp;: Valhalla</em>, sorti le 10&nbsp;novembre et disponible sur PC, Stadia, Xbox One, Xbox Series X|S, PlayStation 4 et PlayStation 5. Elle peut aussi en &ecirc;tre le h&eacute;ros, si on choisit un aspect &laquo;&nbsp;masculin&nbsp;&raquo; du personnage en d&eacute;but de partie du nouveau titre d&rsquo;Ubsioft &ndash; Eivor &eacute;tant un pr&eacute;nom, autant que l&rsquo;on puisse en juger, unisexe.</p>

            <p>Orpheline, elle a &eacute;t&eacute; recueillie enfant par un roi viking, puis &eacute;lev&eacute;e aux c&ocirc;t&eacute;s de son fr&egrave;re adoptif Sigurd pour former la paire de guerriers la plus redoutable de Scandinavie. Mais quand leur p&egrave;re, Styrbjorn, fait all&eacute;geance au roi de Norv&egrave;ge, bradant son ind&eacute;pendance contre un avenir pacifique, Eivor et Sigurd prennent leur drakkar et la mer pour se lancer &agrave; l&rsquo;assaut d&rsquo;un Far West m&eacute;di&eacute;val&nbsp;: l&rsquo;Angleterre.</p>

            <p>Comme tous les&nbsp;<em>Assassin&rsquo;s Creed&nbsp;</em>sortis avant lui,&nbsp;<em>Valhalla&nbsp;</em>est beaucoup de choses. A commencer par un jeu tr&egrave;s long, avec un contenu si riche qu&rsquo;il est impossible &agrave; d&eacute;tailler. On parle ici d&rsquo;une bonne soixantaine d&rsquo;heures au moins pour en faire le tour, selon la presse sp&eacute;cialis&eacute;e&nbsp;; nous &eacute;crivons ce test apr&egrave;s trente heures pass&eacute;es sur la Xbox Series X, la derni&egrave;re console de Microsoft.</p>

            <p>&nbsp;</p>

            <h2>Une &eacute;criture in&eacute;gale</h2>

            <p>Retenons juste qu&rsquo;<em>Assassin&rsquo;s Creed</em>&nbsp;n&rsquo;est plus, depuis&nbsp;<a href="https://www.lemonde.fr/pixels/article/2017/10/27/on-a-teste-assassin-s-creed-origins-morts-sur-le-nil_5206688_4408996.html">l&rsquo;&eacute;pisode&nbsp;<em>Origins</em>&nbsp;de 2017</a>, un jeu d&rsquo;assassin. Fini l&rsquo;&eacute;poque o&ugrave; l&rsquo;on r&ocirc;dait de toit en toit pour fondre sur sa proie avant de s&rsquo;enfuir dans la nuit &ndash; ou de finir empal&eacute; sur la lance d&rsquo;un garde. Plus que jamais dans&nbsp;<em>Valhalla</em>, la saga s&rsquo;assume guerri&egrave;re. On y chevauche librement &agrave; travers toute la moiti&eacute; est de l&rsquo;Angleterre, pillant des monast&egrave;res, attaquant des forteresses, seul ou entour&eacute; d&rsquo;une demi-douzaine d&rsquo;autres Vikings. Et si l&rsquo;approche discr&egrave;te est toujours possible, le jeu est ainsi con&ccedil;u qu&rsquo;il faudra fatalement, &agrave; un moment ou &agrave; un autre, sortir sa hache.</p>

            <p>La qu&ecirc;te principale, qui consiste &agrave; unifier un par un les royaumes saxons, aux commandes d&rsquo;une h&eacute;ro&iuml;ne qui aspire trop &agrave; mourir au combat pour accepter une paix sans gloire, est le pr&eacute;texte pour encha&icirc;ner les s&eacute;quences &eacute;piques, au cours de chapitres sc&eacute;naristiquement cloisonn&eacute;s, mais qui n&rsquo;interdisent jamais au joueur de vadrouiller &agrave; droite &agrave; gauche.</p>

            <p>Ce cloisonnement est un signe (le premier d&rsquo;une longue liste) que les d&eacute;veloppeurs ont r&eacute;solu certains probl&egrave;mes du pr&eacute;c&eacute;dent &eacute;pisode,&nbsp;<em><a href="https://www.lemonde.fr/pixels/article/2018/10/09/on-a-teste-assassin-s-creed-odyssey-le-jeu-de-role-qui-tutoie-presque-l-olympe_5366833_4408996.html">Assassin&rsquo;s Creed&nbsp;: Odyssey,&nbsp;</a></em><a href="https://www.lemonde.fr/pixels/article/2018/10/09/on-a-teste-assassin-s-creed-odyssey-le-jeu-de-role-qui-tutoie-presque-l-olympe_5366833_4408996.html">sorti en&nbsp;2018</a>. On y avait &agrave; tout moment le choix entre des dizaines et des dizaines de qu&ecirc;tes, toutes d&rsquo;&eacute;gale importance, et toutes, en fin de compte, insignifiantes &ndash; rendant impossible de s&rsquo;int&eacute;resser &agrave; ce qui se passait &agrave; l&rsquo;&eacute;cran.</p>

            <p>A tout moment, il est possible de retourner faire un tour en Norv&egrave;ge, pour s&rsquo;assurer que tout va bien et faire de jolies captures d&rsquo;&eacute;cran. Ubisoft</p>

            <p>Dans&nbsp;<em>Valhalla</em>, et c&rsquo;est rarissime dans un<em>&nbsp;Assassin&rsquo;s Creed</em>, on &eacute;prouve parfois un peu de plaisir &agrave; suivre l&rsquo;histoire. Bien s&ucirc;r, il faut trier le bon grain de l&rsquo;ivraie&nbsp;: la narration reste, comme toujours chez Ubisoft, le talon d&rsquo;Achille. Avalanche de personnages interchangeables, dialogues creux, enjeux n&eacute;buleux, qu&ecirc;tes secondaires r&eacute;guli&egrave;rement indigentes&hellip; Citons par exemple une mission annexe o&ugrave; il faut sortir des caisses d&rsquo;excr&eacute;ment de la maison d&rsquo;un archer nomm&eacute; D&eacute;golas, qui dispute la palme du mauvais go&ucirc;t avec celle o&ugrave; un couple nous demande de mettre leur feu &agrave; leur maison pour stimuler leur libido.</p>

            <p>Aussi, quand on tombe sur cette jolie qu&ecirc;te o&ugrave; une enfant surveille, angoiss&eacute;e, la derni&egrave;re feuille du ch&ecirc;ne d&eacute;plum&eacute; derri&egrave;re sa maison, parce que son p&egrave;re lui a promis qu&rsquo;il reviendrait de la guerre&nbsp;<em>&laquo;&nbsp;avant que les feuilles ne tombent des arbres&nbsp;&raquo;</em>, on se prend &agrave; r&ecirc;ver de ce que pourrait donner un<em>&nbsp;Assassin&rsquo;s Creed&nbsp;</em>int&eacute;gralement bien &eacute;crit.</p>

            <h2>Une exp&eacute;rience enfin vari&eacute;e</h2>

            <p>La m&eacute;diocrit&eacute; globale de l&rsquo;&eacute;criture est d&rsquo;autant plus rageante que cette copie 2020 est, pour le reste, impeccable. Tous les d&eacute;fauts d&rsquo;<em>Assassin&rsquo;s Creed&nbsp;</em>ont &eacute;t&eacute; identifi&eacute;s et corrig&eacute;s dans&nbsp;<em>Valhalla&nbsp;</em>par les &eacute;quipes d&rsquo;Ubisoft Montr&eacute;al. On saluera des combats dynamiques et enfin plaisants, des ennemis qui ne nous tombent plus tous dessus en m&ecirc;me temps, la progression par niveau bien moins frustrante, les &laquo;&nbsp;loot&nbsp;&raquo; (les armes et armures que l&rsquo;on ramasse) plus rares et donc gratifiants et, surtout, la vari&eacute;t&eacute; des situations rencontr&eacute;es.</p>

            <p>Outre la qu&ecirc;te principale et les &eacute;v&eacute;nements secondaires, on peut aussi piller des monast&egrave;res ou attaquer des villages, non pour en massacrer les habitants (on joue un Viking bien &eacute;lev&eacute;) mais pour collecter des ressources et construire de nouveaux b&acirc;timents dans son quartier g&eacute;n&eacute;ral.</p>

            <p>Une attaque du genre demandera de mettre la main sur les trois ou quatre tr&eacute;sors cach&eacute;s, auxquels on n&rsquo;acc&eacute;dera qu&rsquo;en r&eacute;solvant une petite &eacute;nigme &eacute;l&eacute;gamment int&eacute;gr&eacute;e &agrave; l&rsquo;environnement. Ici, on devra envoyer son corbeau en rep&eacute;rage pour d&eacute;busquer une fen&ecirc;tre ouverte dans un b&acirc;timent condamn&eacute;&nbsp;; l&agrave;, on ira tuer le garde qui poss&egrave;de une cl&eacute; indispensable, &agrave; moins qu&rsquo;on ne pr&eacute;f&egrave;re d&eacute;molir un mur fragilis&eacute; avec une jarre explosive&hellip; Corbeau, cl&eacute;, jarre&nbsp;: le cocktail m&eacute;lange souvent les m&ecirc;mes ingr&eacute;dients, mais toujours dans des combinaisons in&eacute;dites, tant et si bien qu&rsquo;on n&rsquo;a jamais l&rsquo;impression de faire deux fois la m&ecirc;me chose.</p>

            <p>Les passages en drakkar &eacute;tant finalement assez rares pass&eacute; les premi&egrave;res heures de jeu, on n&rsquo;aura malheureusement peu l&rsquo;occasion d&rsquo;entonner&nbsp;&laquo; Santiano&nbsp;&raquo; en vieux norrois. Ubisoft</p>

            <h2>Antiquit&eacute; post-apocalyptique</h2>

            <p>On se surprend aussi &agrave; faire dans cet<em>&nbsp;Assassin&rsquo;s Creed</em>&nbsp;quelque chose d&rsquo;assez inhabituel&nbsp;: fl&acirc;ner.&nbsp;<em>Valhalla&nbsp;</em>est m&ecirc;me un incroyable jeu de fl&acirc;nerie qui, plus encore que&nbsp;<em><a href="https://www.lemonde.fr/pixels/article/2015/05/18/on-a-teste-the-witcher-iii-traque-sauvage-la-chasse-est-ouverte_4635323_4408996.html">The Witcher 3</a>,&nbsp;</em>rappelle les bonnes heures du classique&nbsp;<em>The Elder Scrolls V&nbsp;: Skyrim</em>. Il ne faut pas s&rsquo;attendre &agrave; tomber sur un troll sous chaque pont ou &agrave; un dragon au sommet de chaque montagne (quoique), l&rsquo;Angleterre du IXe&nbsp;si&egrave;cle ne proposant pas la m&ecirc;me densit&eacute; d&rsquo;&eacute;v&eacute;nements fantastiques que la belle province imaginaire de Bordeciel.</p>

            <p>En revanche, les petits villages d&rsquo;<em>Assassin&rsquo;s Creed&nbsp;: Valhalla</em>, ses fermes isol&eacute;es et ses bruy&egrave;res color&eacute;es regorgent de surprises en tout genre, d&rsquo;&eacute;v&eacute;nements facultatifs et de qu&ecirc;tes secondaires, de tr&eacute;sors &agrave; d&eacute;couvrir et de comp&eacute;tences &agrave; d&eacute;bloquer. Plut&ocirc;t &eacute;l&eacute;gante, la boussole du jeu ne les indique qu&rsquo;avec de vagues marqueurs (un simple point jaune pour les tr&eacute;sors, un point bleut&eacute; pour les &eacute;v&eacute;nements) qui, parce qu&rsquo;ils ne d&eacute;voilent presque rien, poussent &agrave; suivre son instinct plut&ocirc;t que la qu&ecirc;te principale.</p>

            <p>Et si tout n&rsquo;est pas &agrave; tomber par terre dans&nbsp;<em>Valhalla</em>&nbsp;(les personnages secondaires sont souvent tr&egrave;s vilains et&nbsp;<a href="https://xboxclips.co/elodry/ca11724e-b41b-4fad-bfa8-56d6decde90e" rel="noopener" target="_blank" title="Nouvelle fenêtre">le jeu, en l&rsquo;&eacute;tat, est bourr&eacute; de petits bugs</a>), la nature, elle, est splendide. Qu&rsquo;elle explose de couleurs ou qu&rsquo;elle nous fasse patauger dans la tourbe sous une pluie sc&eacute;l&eacute;rate, l&rsquo;Angleterre de&nbsp;<em>Valhalla&nbsp;</em>est dense, vari&eacute;e et, sur Xbox Series X en tout cas, un des plus beaux environnements qu&rsquo;il nous ait &eacute;t&eacute; donn&eacute; de voir en jeu vid&eacute;o.</p>

            <p>Rarement la nature aura &eacute;t&eacute; plus luxuriante dans un jeu en monde ouvert. Ubisoft</p>

            <p>Au-del&agrave; de nos craintes li&eacute;es aux habituels d&eacute;fauts d&rsquo;<em>Assassin&rsquo;s Creed</em>, on avait pourtant une r&eacute;serve avant de mettre nos mains sur&nbsp;<em>Valhalla&nbsp;</em>: la d&eacute;ception de voir Ubisoft se contenter d&rsquo;un univers aussi peu original que celui des Vikings, alors que la saga a toujours mis en avant des p&eacute;riodes historiques rarement vues en jeu vid&eacute;o.</p>

            <p>C&rsquo;est la derni&egrave;re bonne surprise, et peut-&ecirc;tre la meilleure. Pass&eacute;e son introduction norv&eacute;gienne et ses interm&egrave;des mythologiques,&nbsp;<em>Valhalla&nbsp;</em>n&rsquo;est pas tant un jeu sur les Vikings mais un jeu sur le Haut Moyen Age, dans lequel on progresse parmi les ruines, les fant&ocirc;mes et les statues de l&rsquo;Empire romain, cinq si&egrave;cles &agrave; peine apr&egrave;s la chute de Rome. Oubliez le fantasme viking&nbsp;: on est l&agrave; pour se r&ecirc;ver empereur ou imp&eacute;ratrice, dans une Antiquit&eacute; post-apocalyptique joliment m&eacute;lancolique.</p>

            <p>Avec ses ruines romaines omnipr&eacute;sentes,&nbsp;&laquo;&nbsp;Assassin&rsquo;s Creed Valhalla&nbsp;&raquo; prend un tour post-apocalyptique inattendu. Ubisoft</p>

            <h2>L&rsquo;avis de Pixels</h2>

            <p><strong>On a aim&eacute;&nbsp;:</strong></p>

            <ul>
                <li>la nature, belle &agrave; tomber&nbsp;;</li>
                <li>l&rsquo;exploration, enfin int&eacute;ressante&nbsp;;</li>
                <li>les combats, r&eacute;jouissants.</li>
            </ul>

            <p><strong>On n&rsquo;a pas aim&eacute;&nbsp;:</strong></p>

            <ul>
                <li>les dialogues insipides&nbsp;;</li>
                <li>certaines qu&ecirc;tes vraiment mal &eacute;crites&nbsp;;</li>
                <li>les passages futuristes ou mythologiques, sans grand int&eacute;r&ecirc;t&nbsp;;</li>
                <li>pas mal de bugs au lancement.</li>
            </ul>

            <p><strong>C&rsquo;est plut&ocirc;t pour vous si&hellip;</strong></p>

            <ul>
                <li>vous aimez les Vikings,&nbsp;<em>Skyrim</em>&nbsp;et&nbsp;<em>The Witcher 3</em>&nbsp;;</li>
                <li>vous n&rsquo;aimez pas les Vikings mais vous voulez explorer un empire romain post-apocalyptique.</li>
            </ul>

            <p><strong>Ce n&rsquo;est plut&ocirc;t pas pour vous si&hellip;</strong></p>

            <ul>
                <li>vous aimez les exp&eacute;riences courtes et ramass&eacute;es&nbsp;;</li>
                <li>vous regrettez l&rsquo;&eacute;poque &laquo;&nbsp;assassin&nbsp;&raquo; d&rsquo;un<em>&nbsp;Assassin&rsquo;s Creed&nbsp;</em>devenu depuis tr&egrave;s guerrier.</li>
            </ul>',
            'img' => 'https://www.insert-coin.fr/wp-content/uploads/2020/11/lacoc72_AssassinsCreedValhalla_20201108_17-06-46.png',
            'category' => 'Action'
            ],
            ['title' => "Retour sur Doom Eternal. Un jeu vraiment d'enfer ?",
            'content' => '<p>En 2016 id Software revenait aux racines de la s&eacute;rie Doom avec un reboot jouissif, speed et d&eacute;licieusement bourrin qui remettait la licence au go&ucirc;t du jour. Tr&egrave;s bien accueilli par les joueurs et la critique, ID Software a mis rapidement en chantier une suite pour tenter de sublimer le retour en gr&acirc;ce de la franchise. Apr&egrave;s avoir d&eacute;j&agrave; renvoy&eacute; un bon paquet de cr&eacute;atures de lucifer d&rsquo;o&ugrave; elles viennent voici donc mes modestes impressions avec un peu de retard par rapport &agrave; la sortie du jeu.</p>

            <p>&nbsp;</p>
            
            <h2>HISTOIRE</h2>
            
            <p>N&#39;en d&eacute;plaise aux d&eacute;tracteurs de la franchise, le lore de Doom (oui il y en a un) n&#39;a jamais &eacute;t&eacute; aussi pr&eacute;sent que dans cet opus. De multiples portails dimensionnels se sont ouverts et vous devrez utiliser votre forteresse d&eacute;moniaque pour stopper l&#39;invasion et battre les pr&ecirc;tres de l&#39;enfer afin de lib&eacute;rer la terre de son emprise d&eacute;moniaque. Libre &agrave; vous de parfaire votre connaissance de l&#39;univers de la s&eacute;rie gr&acirc;ce au codex du jeu r&eacute;pertoriant le bestiaire, les lieux que vous visiterez ou encore l&#39;armement qui sera &agrave; votre disposition pour botter le train de ces supp&ocirc;ts de Satans. Pour les plus f&eacute;rus de l&#39;univers de Doom ou ceux qui souhaitent s&#39;y int&eacute;resser, vous serez aux anges. Il y a de la lecture, beaucoup de lecture. Dommage qu&#39;il n&#39;y a pas de voix off pour nous raconter tout &ccedil;a car c&#39;est tellement gargantuesque qu&#39;on est vite envahi par la fain&eacute;antise.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt=" " src="https://images.lindependant.fr/api/v1/images/view/5f58b97dd286c250ae6e4ee3/full/image.jpg?v=1" /></p>
            
            <p>id SOFTWARE, Bethesda Softworks</p>
            
            <p>&nbsp;</p>
            
            <h2><br />
            AMBIANCE</h2>
            
            <p>Pour cette mouture 2020 sortie fin Mars, l&#39;intro g&eacute;niale nous met tout de suite dans l&#39;ambiance &agrave; base de gros riffs de guitare en accordage diabolique pour un opening extra, digne de la fin d&#39;un training montage de film d&#39;action des ann&eacute;es 80. Le Doom Slayer est de retour et &ccedil;a va faire mal, tr&egrave;s mal !</p>
            
            <p>C&#39;est r&eacute;ussi c&ocirc;t&eacute; ambiance et direction artistiques. Grosses guitares, cr&eacute;atures d&eacute;moniaques ultra-agressives qui vont vous user physiquement apr&egrave;s vos sessions de jeu. Les niveaux sont&nbsp; gigantesques et on voit mal comment l&#39;enfer sur Terre pourrait &ecirc;tre pire sans compter qu&#39;une fois de plus, la bande-son sign&eacute;e Mick Gordon est une nouvelle fois excellente.</p>
            
            <h2>&nbsp;</h2>
            
            <p><img alt=" " src="https://images.lindependant.fr/api/v1/images/view/5f58b97dd286c261f4144215/full/image.jpg?v=1" /></p>
            
            <p>id SOFTWARE, Bethesda Softworks</p>
            
            <p><br />
            GAMEPLAY</p>
            
            <p>C&ocirc;t&eacute; gameplay les amateurs de la version 2016 seront ravis. Vous serez comme dans des chaussons d&egrave;s le d&eacute;but du jeu en constatant que vous pouvez toujours combiner d&eacute;placement rapide et un frag finalis&eacute; par un bon vieux glory kill des familles.</p>
            
            <p>Le gameplay de fast-fps &agrave; encore gagn&eacute; en intensit&eacute; en vous faisant gagner de la vitesse avec un dash et l&#39;ajout de verticalit&eacute; par des phases d&#39;escalade, de nombreux trap&egrave;zes et des phases plateformes qui vous permettront de prendre de la hauteur dans les ar&egrave;nes de combat. Soyons honn&ecirc;tes, les campeurs aux fusils sniper n&#39;auront pas la place de s&#39;exprimer dans ce FPS. Le gameplay de Doom est revenu &agrave; la base de la s&eacute;rie. Vous devrez &ecirc;tre constamment en mouvement pour pouvoir nettoyer les zones de la carte.</p>
            
            <p>Le Doom Slayer que vous incarnez aura &agrave; sa port&eacute;e de multiples am&eacute;liorations d&#39;armure, de comp&eacute;tences et de modification d&#39;armes avec la quantit&eacute; astronomique de possibilit&eacute;s &agrave; d&eacute;bloquer parfois dans des confrontations tout &agrave; fait optionnelles &agrave; r&eacute;aliser dans un temps limit&eacute; qui vous d&eacute;bloqueront des r&eacute;compenses. On se situe dans le haut du panier du genre FPS dans l&#39;aspect customisation de votre personnage. On est &agrave; la limite du FPS RPG avec un menu de customisation assez costaud &agrave; d&eacute;crypter au premier abord.</p>
            
            <p>Pour vos combats contre ces cr&eacute;atures venues du plus profond de l&#39;enfer, les d&eacute;veloppeurs d&#39;ID Software vous ont concoct&eacute; de superbes ar&egrave;nes de combats dignes des meilleurs maps multijoueurs. Bourr&eacute;es de secrets en tout genre, de vies suppl&eacute;mentaires et de bonus &agrave; r&eacute;cup&eacute;rer. Certains seront accessibles gr&acirc;ce &agrave; l&#39;exploration, la r&eacute;solution de quelques puzzles et par des phases de plateforme bienvenues mais pas toujours faciles. Les amateurs de compl&eacute;tion a 100% seront ravis car les d&eacute;veloppeurs ont pouss&eacute; le curseur &agrave; fond avec une multitude de choses &agrave; r&eacute;cup&eacute;rer. Pi&egrave;ces Pretor, batteries sentinelles, cl&eacute;s Slayer, runes, secrets, codes de triche, pour terminer un niveau &agrave; fond il faudra parfois s&#39;y reprendre a plusieurs fois. Les niveaux&nbsp; ne sont pas non plus avares en tremplins et en acc&eacute;l&eacute;rateurs pour augmenter de nouveau votre vitesse de d&eacute;placement lors des joutes contre les monstres ou vous serez arm&eacute;s jusqu&#39;aux dents.</p>
            
            <p>L&#39;armement est vari&eacute; et inclut bien s&ucirc;r les standards de la s&eacute;rie comme le shotgun et la tron&ccedil;onneuse et vous invite &agrave; utiliser chaque arme pour venir &agrave; bout de chaque cr&eacute;atures sensibles &agrave; diff&eacute;rentes munitions: grenades, plasma, roquettes etc.. Chacune dispose d&#39;un point faible et le jeu vous force &agrave; varier les plaisirs. La profondeur et les possibilit&eacute;s de gameplay sont nombreuses. Pour jouer comme un v&eacute;ritable pro gamer, il vous faudra un long temps d&#39;apprentissage. Le jeu en vaut la chandelle car le ballet macabre du Doom Slayer peut &ecirc;tre absolument magnifique lorsqu&#39;il est parfaitement ma&icirc;tris&eacute; par le joueur. Les glory kills, la tron&ccedil;onneuse et l&#39;utilisation du lance-flammes vous rendront divers bonus. Armure, vie ou munitions. Ma&icirc;triser cette m&eacute;canique est essentiel pour&nbsp; vous assurer la victoire dans les combats.</p>
            
            <h2>&nbsp;</h2>
            
            <p><img alt=" " src="https://images.lindependant.fr/api/v1/images/view/5f58b97ed286c23c0a3e6bdf/full/image.jpg?v=1" /></p>
            
            <p>id SOFTWARE, Bethesda Softworks</p>
            
            <p><br />
            TECHNIQUE</p>
            
            <p>Techniquement parlant le titre ne d&eacute;&ccedil;oit pas, une nouvelle fois le titre est rapide, ultra-fluide y compris dans sa version PS4 standard et s&#39;offre m&ecirc;me le luxe d&#39;apporter un peu de nouveaut&eacute; par un c&ocirc;t&eacute; contemplatif pour la premi&egrave;re fois dans la s&eacute;rie avec beaucoup de d&eacute;cors en ext&eacute;rieur. M&ecirc;me lors de combats charg&eacute;s en mobs, en rafales de tirs de toutes parts, aucun ralentissement n&#39;est &agrave; d&eacute;plorer. Le moteur de jeu tient la route et ne souffre &agrave; aucun moment.</p>
            
            <h2>&nbsp;</h2>
            
            <p><img alt=" " src="https://images.lindependant.fr/api/v1/images/view/5f58b97d3e4546588e497347/full/image.jpg?v=1" /></p>
            
            <p>id SOFTWARE, Bethesda Softworks</p>
            
            <p><br />
            CONCLUSION</p>
            
            <p>Pour terminer sur ces impressions diaboliques le titre vous proposera 15 a 20h de dur&eacute;e de vie. Disposant d&#39;une difficult&eacute; et d&#39;une exigence assez &eacute;lev&eacute;e qui ne sera pas au go&ucirc;t de tout le monde, le jeu saura ravir les fans de la s&eacute;rie. Pour les plus novices, il serait do</p>
            
            <p>En 2016 id Software revenait aux racines de la s&eacute;rie Doom avec un reboot jouissif, speed et d&eacute;licieusement bourrin qui remettait la licence au go&ucirc;t du jour. Tr&egrave;s bien accueilli par les joueurs et la critique, ID Software a mis rapidement en chantier une suite pour tenter de sublimer le retour en gr&acirc;ce de la franchise. Apr&egrave;s avoir d&eacute;j&agrave; renvoy&eacute; un bon paquet de cr&eacute;atures de lucifer d&rsquo;o&ugrave; elles viennent voici donc mes modestes impressions avec un peu de retard par rapport &agrave; la sortie du jeu.</p>
            
            <p>&nbsp;</p>
            
            <h2>HISTOIRE</h2>
            
            <p>N&#39;en d&eacute;plaise aux d&eacute;tracteurs de la franchise, le lore de Doom (oui il y en a un) n&#39;a jamais &eacute;t&eacute; aussi pr&eacute;sent que dans cet opus. De multiples portails dimensionnels se sont ouverts et vous devrez utiliser votre forteresse d&eacute;moniaque pour stopper l&#39;invasion et battre les pr&ecirc;tres de l&#39;enfer afin de lib&eacute;rer la terre de son emprise d&eacute;moniaque. Libre &agrave; vous de parfaire votre connaissance de l&#39;univers de la s&eacute;rie gr&acirc;ce au codex du jeu r&eacute;pertoriant le bestiaire, les lieux que vous visiterez ou encore l&#39;armement qui sera &agrave; votre disposition pour botter le train de ces supp&ocirc;ts de Satans. Pour les plus f&eacute;rus de l&#39;univers de Doom ou ceux qui souhaitent s&#39;y int&eacute;resser, vous serez aux anges. Il y a de la lecture, beaucoup de lecture. Dommage qu&#39;il n&#39;y a pas de voix off pour nous raconter tout &ccedil;a car c&#39;est tellement gargantuesque qu&#39;on est vite envahi par la fain&eacute;antise.</p>
            
            <p>&nbsp;</p>
            
            <p><img alt=" " src="https://images.lindependant.fr/api/v1/images/view/5f58b97dd286c250ae6e4ee3/full/image.jpg?v=1" /></p>
            
            <p>id SOFTWARE, Bethesda Softworks</p>
            
            <p>&nbsp;</p>
            
            <h2><br />
            AMBIANCE</h2>
            
            <p>Pour cette mouture 2020 sortie fin Mars, l&#39;intro g&eacute;niale nous met tout de suite dans l&#39;ambiance &agrave; base de gros riffs de guitare en accordage diabolique pour un opening extra, digne de la fin d&#39;un training montage de film d&#39;action des ann&eacute;es 80. Le Doom Slayer est de retour et &ccedil;a va faire mal, tr&egrave;s mal !</p>
            
            <p>C&#39;est r&eacute;ussi c&ocirc;t&eacute; ambiance et direction artistiques. Grosses guitares, cr&eacute;atures d&eacute;moniaques ultra-agressives qui vont vous user physiquement apr&egrave;s vos sessions de jeu. Les niveaux sont&nbsp; gigantesques et on voit mal comment l&#39;enfer sur Terre pourrait &ecirc;tre pire sans compter qu&#39;une fois de plus, la bande-son sign&eacute;e Mick Gordon est une nouvelle fois excellente.</p>
            
            <h2>&nbsp;</h2>
            
            <p><img alt=" " src="https://images.lindependant.fr/api/v1/images/view/5f58b97dd286c261f4144215/full/image.jpg?v=1" /></p>
            
            <p>id SOFTWARE, Bethesda Softworks</p>
            
            <p><br />
            GAMEPLAY</p>
            
            <p>C&ocirc;t&eacute; gameplay les amateurs de la version 2016 seront ravis. Vous serez comme dans des chaussons d&egrave;s le d&eacute;but du jeu en constatant que vous pouvez toujours combiner d&eacute;placement rapide et un frag finalis&eacute; par un bon vieux glory kill des familles.</p>
            
            <p>Le gameplay de fast-fps &agrave; encore gagn&eacute; en intensit&eacute; en vous faisant gagner de la vitesse avec un dash et l&#39;ajout de verticalit&eacute; par des phases d&#39;escalade, de nombreux trap&egrave;zes et des phases plateformes qui vous permettront de prendre de la hauteur dans les ar&egrave;nes de combat. Soyons honn&ecirc;tes, les campeurs aux fusils sniper n&#39;auront pas la place de s&#39;exprimer dans ce FPS. Le gameplay de Doom est revenu &agrave; la base de la s&eacute;rie. Vous devrez &ecirc;tre constamment en mouvement pour pouvoir nettoyer les zones de la carte.</p>
            
            <p>Le Doom Slayer que vous incarnez aura &agrave; sa port&eacute;e de multiples am&eacute;liorations d&#39;armure, de comp&eacute;tences et de modification d&#39;armes avec la quantit&eacute; astronomique de possibilit&eacute;s &agrave; d&eacute;bloquer parfois dans des confrontations tout &agrave; fait optionnelles &agrave; r&eacute;aliser dans un temps limit&eacute; qui vous d&eacute;bloqueront des r&eacute;compenses. On se situe dans le haut du panier du genre FPS dans l&#39;aspect customisation de votre personnage. On est &agrave; la limite du FPS RPG avec un menu de customisation assez costaud &agrave; d&eacute;crypter au premier abord.</p>
            
            <p>Pour vos combats contre ces cr&eacute;atures venues du plus profond de l&#39;enfer, les d&eacute;veloppeurs d&#39;ID Software vous ont concoct&eacute; de superbes ar&egrave;nes de combats dignes des meilleurs maps multijoueurs. Bourr&eacute;es de secrets en tout genre, de vies suppl&eacute;mentaires et de bonus &agrave; r&eacute;cup&eacute;rer. Certains seront accessibles gr&acirc;ce &agrave; l&#39;exploration, la r&eacute;solution de quelques puzzles et par des phases de plateforme bienvenues mais pas toujours faciles. Les amateurs de compl&eacute;tion a 100% seront ravis car les d&eacute;veloppeurs ont pouss&eacute; le curseur &agrave; fond avec une multitude de choses &agrave; r&eacute;cup&eacute;rer. Pi&egrave;ces Pretor, batteries sentinelles, cl&eacute;s Slayer, runes, secrets, codes de triche, pour terminer un niveau &agrave; fond il faudra parfois s&#39;y reprendre a plusieurs fois. Les niveaux&nbsp; ne sont pas non plus avares en tremplins et en acc&eacute;l&eacute;rateurs pour augmenter de nouveau votre vitesse de d&eacute;placement lors des joutes contre les monstres ou vous serez arm&eacute;s jusqu&#39;aux dents.</p>
            
            <p>L&#39;armement est vari&eacute; et inclut bien s&ucirc;r les standards de la s&eacute;rie comme le shotgun et la tron&ccedil;onneuse et vous invite &agrave; utiliser chaque arme pour venir &agrave; bout de chaque cr&eacute;atures sensibles &agrave; diff&eacute;rentes munitions: grenades, plasma, roquettes etc.. Chacune dispose d&#39;un point faible et le jeu vous force &agrave; varier les plaisirs. La profondeur et les possibilit&eacute;s de gameplay sont nombreuses. Pour jouer comme un v&eacute;ritable pro gamer, il vous faudra un long temps d&#39;apprentissage. Le jeu en vaut la chandelle car le ballet macabre du Doom Slayer peut &ecirc;tre absolument magnifique lorsqu&#39;il est parfaitement ma&icirc;tris&eacute; par le joueur. Les glory kills, la tron&ccedil;onneuse et l&#39;utilisation du lance-flammes vous rendront divers bonus. Armure, vie ou munitions. Ma&icirc;triser cette m&eacute;canique est essentiel pour&nbsp; vous assurer la victoire dans les combats.</p>
            
            <h2>&nbsp;</h2>
            
            <p><img alt=" " src="https://images.lindependant.fr/api/v1/images/view/5f58b97ed286c23c0a3e6bdf/full/image.jpg?v=1" /></p>
            
            <p>id SOFTWARE, Bethesda Softworks</p>
            
            <p><br />
            TECHNIQUE</p>
            
            <p>Techniquement parlant le titre ne d&eacute;&ccedil;oit pas, une nouvelle fois le titre est rapide, ultra-fluide y compris dans sa version PS4 standard et s&#39;offre m&ecirc;me le luxe d&#39;apporter un peu de nouveaut&eacute; par un c&ocirc;t&eacute; contemplatif pour la premi&egrave;re fois dans la s&eacute;rie avec beaucoup de d&eacute;cors en ext&eacute;rieur. M&ecirc;me lors de combats charg&eacute;s en mobs, en rafales de tirs de toutes parts, aucun ralentissement n&#39;est &agrave; d&eacute;plorer. Le moteur de jeu tient la route et ne souffre &agrave; aucun moment.</p>
            
            <h2>&nbsp;</h2>
            
            <p><img alt=" " src="https://images.lindependant.fr/api/v1/images/view/5f58b97d3e4546588e497347/full/image.jpg?v=1" /></p>
            
            <p>id SOFTWARE, Bethesda Softworks</p>
            
            <p><br />
            CONCLUSION</p>
            
            <p>Pour terminer sur ces impressions diaboliques le titre vous proposera 15 a 20h de dur&eacute;e de vie. Disposant d&#39;une difficult&eacute; et d&#39;une exigence assez &eacute;lev&eacute;e qui ne sera pas au go&ucirc;t de tout le monde, le jeu saura ravir les fans de la s&eacute;rie. Pour les plus novices, il serait dommage de vous g&acirc;cher le plaisir de jeu en ne baissant pas le niveau de difficult&eacute; le temps de se familiariser avec les bases. Une fois le solo boucl&eacute;, le titre dispose d&#39;une solide rejouablit&eacute; si vous souhaitez le terminer &agrave; 100%. Un battlemode 2v1 assez simpliste vous attend pour jouer en ligne et du contenu suppl&eacute;mentaire est r&eacute;guli&egrave;rement ajout&eacute; par des mises &agrave; jour avec notamment des d&eacute;fis quotidiens a remplir. Cet opus 2020 est extr&ecirc;mement r&eacute;ussi et propose un vrai challenge dans sa difficult&eacute; maximale ! Un FPS a rarement &eacute;t&eacute; aussi g&eacute;n&eacute;reux. Le pari de proposer une suite am&eacute;lior&eacute;e en tout point est rempli tant les am&eacute;liorations sont nombreuses. Doom Eternal s&#39;impose comme une valeur s&ucirc;re du shooter g&eacute;n&eacute;reux et bourrin qui mise tout sur sa campagne solo qui s&#39;installe sur tr&ocirc;ne du fast FPS faute de concurrence sur ce segment. Esp&eacute;rons quand m&ecirc;me pour le bien du genre, que son r&egrave;gne ne soit pas &eacute;ternel.</p>
            
            <p>mmage de vous g&acirc;cher le plaisir de jeu en ne baissant pas le niveau de difficult&eacute; le temps de se familiariser avec les bases. Une fois le solo boucl&eacute;, le titre dispose d&#39;une solide rejouablit&eacute; si vous souhaitez le terminer &agrave; 100%. Un battlemode 2v1 assez simpliste vous attend pour jouer en ligne et du contenu suppl&eacute;mentaire est r&eacute;guli&egrave;rement ajout&eacute; par des mises &agrave; jour avec notamment des d&eacute;fis quotidiens a remplir. Cet opus 2020 est extr&ecirc;mement r&eacute;ussi et propose un vrai challenge dans sa difficult&eacute; maximale ! Un FPS a rarement &eacute;t&eacute; aussi g&eacute;n&eacute;reux. Le pari de proposer une suite am&eacute;lior&eacute;e en tout point est rempli tant les am&eacute;liorations sont nombreuses. Doom Eternal s&#39;impose comme une valeur s&ucirc;re du shooter g&eacute;n&eacute;reux et bourrin qui mise tout sur sa campagne solo qui s&#39;installe sur tr&ocirc;ne du fast FPS faute de concurrence sur ce segment. Esp&eacute;rons quand m&ecirc;me pour le bien du genre, que son r&egrave;gne ne soit pas &eacute;ternel.</p>',
            'img' => 'https://thenerdy.com/wp-content/uploads/2019/06/E3-2019-Bethesda-Doom-Eternal-Trailer-07.jpg',
            'category' => 'Horreur'
            ],
        ];

        foreach($posts as $index => $post) {
            $post = new Post();
            $post->setTitle($posts[$index]['title']);
            $post->setContent($posts[$index]['content']);
            $post->setImage($posts[$index]['img']);
            $post->setCategory($this->getReference($posts[$index]['category']));
            $post->setUser($this->getReference('admin'));
            $post->setActive(true);

            $manager->persist($post);
        }

        $manager->flush();
    }

        public function getDependencies()
    {
        return array(
            CategoryFixtures::class,
            UserFixtures::class
        );
    }
}