<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;

class PostFixtures extends Fixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $posts = [
            'title' => "Valheim – Tout ce que vous devez savoir",
            'content' => '<p>Valheim, le jeu de survie massivement populaire dans le monde ouvert, vous transforme, vous et vos amis, en Vikings et vous d&eacute;pose au purgatoire, o&ugrave; vous devez tuer les rivaux d&rsquo;Odin et r&eacute;tablir l&rsquo;ordre.</p>

            <p>Notre guide vous donne des conseils et vous permet d&rsquo;augmenter vos chances de survie et de r&eacute;ussite</p>

            <h2>TOUT CE QUE VOUS DEVEZ SAVOIR POUR SURVIVRE &Agrave; VALHEIM</h2>

            <p>&nbsp;</p>

            <p><img alt="valheim valheim game valheim server valheim game download valheim gameplay valheim release date pål sverre valheim hagen valheim download anne ruth valheim aov switch valheim apv switch valheim arena of valor valheim build arena of valor valheim op dvoid valheim games like valheim valheim buy key hideka valheim how to install valheim on a pc how to make a valheim server how to start a valheim server how to visit valheim hof http en.m.wikipedia.org wiki p c3 a5l_sverre_valheim_hagen http spangenhelm.com valheim-hof-denmark-dedicated-odin-gods https dvoidis itch io valheim is valheim getting updated cd key valheim best price valheim valheim game key game code valheim" src="https://www.allkeyshop.com/blog/wp-content/uploads/valheim.jpg" style="height:341px; width:615px" /></p>

            <p>&nbsp;</p>

            <ul>
                <li>Ce que doivent &ecirc;tre vos premiers pas dans le jeu.</li>
                <li>Comment construire votre premi&egrave;re base.</li>
                <li>Comment vous pr&eacute;parer au premier combat de big boss.</li>
            </ul>

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
            'img' => 'https://blog.cloudware.bg/wp-content/uploads/2021/05/MicrosoftTeams-image-2.jpg'
            ];

        $post = new Post();
        $post->setTitle($posts['title']);
        $post->setContent($posts['content']);
        $post->setImage($posts['img']);
        $post->setCategory($this->getReference('fantasy'));
        $post->setUser($this->getReference('admin'));

        $manager->persist($post);

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