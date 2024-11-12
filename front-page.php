<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
<?php  wp_head() ?>
</head>
<body> 
 
 <?php get_header()?>
 

 <!-- BANNER -->
      <section class="banner">
        
        <div class="container lg:px-[10rem]">
            <div class="banner__title border-b lg:py-[4rem] py-[2rem]">
                <h1 class=" text-7xl font-bold text-center lg:text-[15rem]"><?php the_fieLd('banner_title')?></h1>
            </div>
            <div class="banner__wrapper lg:flex lg:flex-row lg:gap-6 lg:mt-5">

            <?php
                $args= array(
                'post_type' => 'post',
                'posts_per_page' => -1,
            
                );
                $newQuery = new WP_Query($args);

            ?>

            <?php
                if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
            ?>
                    <div class="card__big py-3">
                       <?php if(has_post_thumbnail()){
                                the_post_thumbnail();
                                }
                        ?>

                        <div class="card__big--details flex flex-col gap-3">
                            <small class="text-gray mt-3"><?php the_field('banner_date') ?></small>
                            <h3 class=" text-3xl font-bold "><?php the_title()?></thead></h3>
                            <p class="text-gray"><?php the_excerpt() ?></p>

                            <a href="" class=" mb-6 hover:underline"><?php the_field('banner_read') ?></a>
                        </div>
                    </div>

                      <?php
                    endwhile;
                    else : 
                        echo "no available content  yet";
                    
                    endif;
                    wp_reset_postdata();
                    ?>




                    <div class="cards flex flex-col gap-6 lg:mt-3">
                        <?php
                        $args= array(
                        'post_type' => 'blog_post',
                        'posts_per_page' => 4,
                        
                        );
                        $newQuery = new WP_Query($args);
                    
                         ?>      

                        <?php
                            if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                        ?>

                        <div class="card__small flex flex-row gap-3">
                            <?php if(has_post_thumbnail()){
                                the_post_thumbnail();
                                }
                        ?>


                            <div class="card__small--details flex flex-col gap-3">
                                <small class="text-gray"><?php the_field('blog_date') ?></small>
                                <p class=" font-bold"><?php the_title() ?></p>
                                <a href="<?php the_permalink()?>" class="text-gray text-xs hover:underline"><?php the_field('blog_read') ?></a>
                            </div>
                        </div>
                        

                        <?php
                    endwhile;
                    else : 
                        echo "no available content  yet";
                    
                    endif;
                    wp_reset_postdata();
                    ?>
                    </div>


                    </div>
                  

            </div>
        </div>
      </section>

      <!-- LATEST STORY -->
       <section class="latestStory">
        <div class="container lg:px-[10rem]">
            <div class="latestStory__title mt-[5rem]">
                <h3 class=" text-center font-bold text-5xl">Latest Story</h3>
            </div>
            <div class="latestStory__wrapper ">

           

                <div class="card flex flex-col gap-6 lg:grid lg:grid-cols-3">

             <?php 
            if(have_rows('latest_story')) :
            while(have_rows('latest_story')) : the_row();
            ?>

                    <div class="cardss flex flex-col">
                        <?php if(get_sub_field('latest_img')) : ?>
                        <img class="mt-10" src="<?php echo get_sub_field('latest_img') ?>" alt="">
                        <?php endif; ?>

                        <div class="cardss--details flex flex-col gap-6">
                            <div class="small flex flex-row justify-between mt-2">
                                <small class="text-gray"><?php echo get_sub_field('latest_date') ?></small>
                                <small class="text-gray"><?php echo get_sub_field('latest_category') ?></small>
                            </div>

                            <h3 class=" text-2xl font-bold"><?php echo get_sub_field('latest_title') ?></h3>
                            <p class=""><?php echo get_sub_field('latest_description') ?></p>
                        </div>
                    </div>
                   
                     <?php 
        endwhile;
        else :
        echo "No content yet.";
        endif;
        ?>
                </div>

                
            </div>
        </div>
       </section>

       <!-- FEATURE NEW -->
        <section class="featureNew">
            <div class="container">
                <div class="featureNew__title flex flex-col gap-6 items-center">

                

                    <h3 class=" mt-[5rem] font-bold text-4xl">Feature New</h3>
                    <h4 class=" font-bold text-3xl text-center"><?php the_field('feature_title') ?></h4>
                    <p class=" text-justify"><?php the_field('feature_text') ?></p>
                    <?php if(get_field('feature_img')) :?>
                    <img src="<?php the_field('feature_img') ?>" alt="" />
                    <?php endif; ?>

                   



                </div>
                <div class="featureNew__wrapper">
                <div class="card__wrapper lg:flex lg:flex-row lg:gap-6 lg:mx-[11rem] lg:justify-center"> 
                <div class="card1">
                  <?php
                        $args= array(
                        'post_type' => 'feature',
                        'posts_per_page' => 3,
            
                        );
                        $newQuery = new WP_Query($args);

                    ?>

                    <?php
                    if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                    ?>

                   



                    
                       
                        <div class="cards__big mt-[5rem] lg:flex lg:flex-row lg:gap-6">
                            <div class="card__image">
                                 <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                        }
                        ?>

                            </div>
                        
                        <div class="cards__big--details flex flex-col gap-3">
                            <small class="text-gray mt-3"><?php the_field('feature_date') ?></small>
                            <h3 class=" text-2xl font-bold lg:max-w-[30rem]"><?php the_title() ?></h3>
                            <p class="text-gray lg:max-w-[30rem]"><?php the_field('feature_text') ?></p>
                        </div>

                        </div>  
                        
                         
                        <?php
                        endwhile;
                        else : 
                            echo "no available content  yet";
                        
                        endif;
                        wp_reset_postdata();
                        ?>
                       
                        
                    </div>

                    <div class="card2 flex flex-col gap-10 lg:mt-[5rem]">

                            <?php
                        $args= array(
                        'post_type' => 'new',
                        'posts_per_page' => 6,
            
                        );
                        $newQuery = new WP_Query($args);

                    ?>

                    <?php
                    if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                    ?>





                            <div class="card__small border-b border-grey ">
                                <small class="text-gray"><?php the_field('new') ?></small>
                                <p class=" font-bold mb-5"><?php the_title() ?></p>
                            </div>
                         
                            <?php
                        endwhile;
                        else : 
                            echo "no available content  yet";
                        
                        endif;
                        wp_reset_postdata();
                        ?>
                       
                        </div>
                         
                    </div>
                   </div>
            </div>
        </section>





        <?php get_footer()?>