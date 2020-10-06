<!-- bloc intro -->
<section class="s-stages">
    <p class="s-intro"><?php the_field('bloc-intro-stage') ?></p>
    <div class="separateur-orange"></div>    
</section>


<?php if( have_rows('bloc_stage') ): ?>
<?php while( have_rows('bloc_stage') ): the_row();

        $titreStage = get_sub_field('titre-stage');
        $contenuStage = get_sub_field('contenu-stage');
        $dureeStage = get_sub_field('duree-stage');
        $tarifStage = get_sub_field('tarif_stage');
        $btnStage = get_sub_field('btn-stage');
        $imgStage = get_sub_field('img-stage');
        
        ?>
        
<!-- bloc stage-->
<section class="s-stages">
    <div class="bloc-stage">
        <div class="text-stage">
            <h2><?php echo $titreStage; ?></h2>
            <p><?php echo $contenuStage; ?></p>
            <span><b><?php echo $dureeStage; ?></b></span><br>
            <span><b><?php echo $tarifStage; ?> €</b></span><br><br>
            <span>Intéressé par ce stage ?</span><br>
            <button><a href="<?php echo $btnStage; ?>">Contact</a></button>
        </div>
        <div class="img-stage">
            <img src="<?php echo $imgStage['url']; ?>">
        </div>
    </div>
</section>

<?php endwhile; ?>
<?php endif; ?>
<!-- separateur -->
<div class="separateur"></div>
