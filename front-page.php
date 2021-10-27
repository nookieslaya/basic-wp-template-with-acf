<?php get_header();

$title = get_field('page_title');
$city = get_field('city');
$phone = get_field('phone_number');
$paragraph = get_field('paragraph')
?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

                <!-- <?php the_field('page_title');?> -->


            <?php if($title):?>
             <h1> <?php echo $title ?></h1>   
            <?php endif;?>

            <?php if($city):?>
                <h2><?php echo $city?></h2>
             <?php endif;?>

             <?php if($phone):?>
                    <h1><?php echo $phone?></h1>
            <?php endif?>

            <?php if($paragraph):?>
                <h3><?php echo $paragraph?></h3>
            <?php endif?>

            


    </div>
</section>

<?php get_footer();?>