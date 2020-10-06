    <!-- bloc intro -->
<section class="a-adherer">
    <p class="a-intro"><?php the_field('bloc-intro-adherer') ?></p>
    <div class="separateur-orange"></div>    
</section>

<!-- bloc adhesion personne physique -->
<section class="adh-pp a-adherer">
    <h2><?php the_field('titre-personne-physique-adherer'); ?></h2>
    <p><?php the_field('contenu-personne-physique-adherer'); ?></p>

    <?php 
    $adhesionLigne = get_field('adhesion_en_ligne');
    if( $adhesionLigne ): ?>
    <h4><?php echo $adhesionLigne['titre']; ?></h4><br>
    <p><?php echo $adhesionLigne['contenu']; ?></p>
    <button><a href="<?php the_field('btn-adhesion-ligne'); ?>">Adhérer en ligne</a></button><br>
    <span><?php echo $adhesionLigne['info-paiement']; ?></span><br>
    <?php endif; ?>
    <div class="separateur"></div>
    

    <?php 
    $adhesionCourrier = get_field('adhesion_courrier');
    if( $adhesionCourrier ): ?>
    <h4><?php echo $adhesionCourrier['titre']; ?></h4><br>
    <p><?php echo $adhesionCourrier['contenu-c']; ?></p>
    <button><a href="<?php the_field('btn-adhesion-courrier'); ?>">Bulletin d'adhésion</a></button><br>
    <span><?php echo $adhesionCourrier['info-paiement']; ?></span><br>
    <?php endif; ?>
    <div class="separateur"></div>
    
    <?php 
    $adhesionMineur = get_field('adhesion_mineur');
    if( $adhesionMineur ): ?>
    <h4><?php echo $adhesionMineur['titre']; ?></h4><br>
    <p><?php echo $adhesionMineur['contenu-m']; ?></p>
    <button><a href="<?php the_field('btn-adhesion-mineur'); ?>">Bulletin d'adhésion pour mineur</a></button><br>
    <?php endif; ?>
</section>

<!-- séparateur bleu -->
<div class='separateur-bleu'></div>

<!-- bloc adhésion personne morale -->
<section class="a-adherer">
    <h2><?php the_field('titre-personne-morale-adherer'); ?></h2>
    <p><?php the_field('contenu-personne-morale-adherer'); ?></p>
</section>

<!-- séparateur bleu -->
<div class='separateur-bleu'></div>

<!-- bloc faire un don -->
<section class="a-adherer">
    <h2><?php the_field('titre-faire-don-adherer'); ?></h2>
    <p><?php the_field('contenu-faire-don-adherer'); ?></p>
        <button><a href="<?php the_field('btn-faire-don-adherer'); ?>">Faire un don</a></button><br>
        <span><?php the_field('info_paiement-faire-don-adherer'); ?></span><br><br>
        <p><?php the_field('complement_info_paiement-adherer'); ?></p>
</section>

<!-- separateur -->
<div class="separateur"></div>