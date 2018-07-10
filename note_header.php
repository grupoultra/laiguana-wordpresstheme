
    <div class="articulo-titulo">
        <span>
            <?php the_title() ?>
        </span>
    </div>

    <div class="articulo-barra">
        <div class="row">
            <div class="col-xs-12 col-md-4 text-center">
                <?php echo get_the_date() ?>
            </div>

            <div class="col-xs-6 col-md-2">
                <a target="_blank" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/fb-share-tag.png" alt="La Iguana Facebook" />
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
                <a class="twitter-shar-button" target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title()?> <?php the_permalink()?> @la_iguanatv">
                    Compartir via twitter
                </a>
            <script>
                const twitterButton = document.querySelector('.twitter-shar-button');

                if(twitterButton){
                  twitterButton.innerHTML ='<img src="<?php echo get_bloginfo('template_url') ?>/assets/img/tw-share-tag.png" alt="La Iguana Twitter" />';
                }
            </script>
            </div>
            <div class="col-xs-6 col-md-2">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/gp-share-tag.png" alt="La Iguana Google Plus"  onclick="return share('GP', '${nota.getPath()}')">
            </div>
            <div class="col-xs-6 col-md-2">
                    <a href="mailto:?&subject=Compartido a través de LaIguana.tv&body=<?php the_permalink() ?>">
                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/mail-share-tag.png"  alt="La Iguana Mail" >
                    </a>
            </div>
        </div>
    </div>
