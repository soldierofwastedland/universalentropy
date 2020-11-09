<?php include '../../decide-lang.php';
require_once('../../common.php');
set_head(2, "mez", "Médecine"); ?>
<body>

<!-- Menu -->
<?php set_menu(2); ?>

<!-- Content -->
<div id="page">
    <div id="page_content">
        <div class="title">
            <span class="byline">Se faire soigner sur Erentia</span></div>
        <p>
            Sur Erentia cohabitent de nombreuses races, Humains compris, et toutes ont des biologies différentes. Un
            médecin sur l'île ne peut en général pas toutes les soigner, qu’il utilise la science ou un pouvoir de soin.
            En effet, même la magie de soin n’est pas universelle et peut donner le résultat inverse au résultat attendu
            sur certaines races. <br>
            Il existe 3 façons de se faire soigner sur Erentia :
        </p>
        <ul>
            <li>
                Par un médecin libéral qui a un diplôme pour exercer sur votre race. Dans les grandes villes c’est
                l’option la plus courante et la moins chère, mais il est difficile de trouver des médecins pour les
                races les plus rares. Certains spécialistes sont plus faciles à trouver que d’autres.
            </li>
            <li>
                Dans un hôpital ou une clinique privée. Il en existe un peu partout, il y aura forcément quelqu’un
                habilité à s’occuper de vous et ils peuvent à peu près tout soigner. Le prix est par contre exorbitant
                sans une bonne mutuelle.
            </li>
            <li>
                Par un médecin sans licence, ou quelqu’un ayant un pouvoir de soin, ou qui pratique la médecine
                traditionnelle. C’est l’option la moins chère, mais aussi la plus risquée. Le remboursement par une
                mutuelle est exclu, et rien n’indique que vous n’avez pas affaire à un charlatan ou quelqu’un qui n’a
                jamais soigné quiconque de votre race auparavant. Ce genre de médecins et de guérisseurs est toléré par
                les lois de l’île, mais si tout ne fonctionne pas comme prévu, aucun moyen légal ne pourra vous aider :
                vous étiez en tort dès le départ en faisant appel à un soigneur sans licence.
            </li>
        </ul>
        <p>
            Les mutuelles de l'île sont assez chères mais remboursent très bien. Il n’y a par contre pas de système de
            sécurité sociale. Pour les plus pauvres et hors des grandes villes, les médecins sans licence sont souvent
            la seule option possible.
        </p>
    </div>
    <!-- Sidebar -->
    <?php set_mezalando_sidebar(1); ?>
</div>

<!-- Portfolio -->
<?php set_portfolio(2);
// Footer
echo TXT_FOOTER;
// Copyright
echo TXT_COPYRIGHT; ?>
<script type="application/javascript" target="_parent" src="../../js/general_script.js"></script>
</body>
</html>
