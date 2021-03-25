<section id="page-404" class="page-404-class" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-page.jpg') center center no-repeat;">
</section>

<section class="title-page">
    <div class="container">
        <h2>Página não encontrada :(</h2>
    </div>
</section>

<?php
$posts = get_posts(array(
'posts_per_page'  => -1,
'post_type'     => '404'
));

if( $posts ):
    foreach( $posts as $post ): 
        setup_postdata( $post );
?>

<section id="page-404" style="background:url(<?php the_field('imagem_de_fundo')?>) center center no-repeat; ">
		<div class="container">
            <h1><span>Erro!</span> <?php the_field('mensagem_1'); ?></h1>
            <h2><?php the_field('mensagem_2'); ?> <br/>
            <?php the_field('mensagem_3'); ?></h2>
            <div class="btn-voltar">
                <a title="Voltar" href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i> Voltar</a>
            </div>

        </div>
</section>

    <?php 
    endforeach; 
        wp_reset_postdata(); 
endif; 
?>