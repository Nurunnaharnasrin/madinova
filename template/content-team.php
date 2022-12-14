<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Doctors</h5>
                <h1 class="display-4">Qualified Healthcare Professionals</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">

 <?php 
         
 
        $team_icon= get_post_meta(get_the_ID(),'team_icon',true);
        $team_icon_url= get_post_meta(get_the_ID(),'team_icon_url',true);
 
  ?>

        <?php
         $args = array(
        'post_type' => 'team',
        
        //'posts_per_page' => 5,
        );

        $this_query = new WP_Query( $args );

 
       if ( $this_query->have_posts() ) :  
       while ( $this_query->have_posts() ) :
        $this_query->the_post(); 
        
        if ( has_post_thumbnail() ) {
            $image_url = get_the_post_thumbnail_url(get_the_ID());
        }

        ?>




                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="<?php  echo $image_url;?>" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Doctor Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4"><?php the_title(); ?></h6>
                                <p class="m-0"><?php the_content(); ?></p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                <?php
                 $team_= get_post_meta(get_the_ID(),'team_',true);
                // $team_icon_url= get_post_meta(get_the_ID(),'team_icon_url',true);
               // $team_icon= get_post_meta(get_the_ID(),'team_icon',true);
               
                 
                
                if(!empty($team_)){
                  foreach((array)$team_ as $team_detail){
                                ?>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="

                            <?php echo esc_attr( $team_detail["team_icon_url"]) ; ?>">

                            <i class="<?php echo esc_attr( $team_detail["team_icon"]) ; ?>"></i></a>
                <?php
                 }
                }


                ?>

                             </div>
                        </div>
                    </div>
                </div>




                <?php
    endwhile;
     else : ?>
        <p><?php esc_html_e( 'Sorry, no posts found.' ); ?></p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>


                <!-- <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="<?php  echo get_theme_file_uri( 'img/team-2.jpg' );?>" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Doctor Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="<?php  echo get_theme_file_uri( 'img/team-3.jpg' );?>" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3>Doctor Name</h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4">Cardiology Specialist</h6>
                                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
                            </div>
                            <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>