<?php
get_header();
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                        <?php
                        
                        if(have_posts()) {
                            the_title();
                            while( have_posts() ){
                                the_post();
                            }
                        }                        
                        ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php

get_footer(); //Skriver ut footer.php

?>