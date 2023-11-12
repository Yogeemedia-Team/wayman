<?php
/*
Template Name: Gallery
*/
 get_header();  ?>
<!-- post content start -->
        <div class="post-content" style="max-width: 100%">
            <div class="galleryPhoto">
                <div class="galleryContainer my-5 pb-5">
                    <h2 class="gallery-title mt-4 pt-1 fst-italic lh-sm text-center px-2 mb-5"><?php the_field('main_title');?></h2>
                    <div class="gallery">
                        <?php if( have_rows('gallery') ): 
                            $i=0;
                            ?>
                           
                            <?php while( have_rows('gallery') ): the_row(); 
                                $image = get_sub_field('image');
                                ?>
                                <input type="radio" name="controls" id="c<?php echo $i;?>" checked>
                                <img src="<?php echo $image['url'];?>" alt="" id="i<?php echo $i;?>" class="galleryImage">
                            <?php 
                        $i++;
                        endwhile; ?>
                        <?php endif; ?>
                        
                    </div>
    
                    <div class="thumbnails">
                         <?php if( have_rows('gallery') ): 
                             $i=0;
                            ?>
                           
                            <?php while( have_rows('gallery') ): the_row(); 
                                $image = get_sub_field('image');
                                ?>
                                <label class="thumbnailImage" for="c<?php echo $i;?>">
                                    <img src="<?php echo $image['url'];?>" alt="">
                                </label>
                                
                            <?php 
                        $i++;
                        endwhile; ?>
                        <?php endif; ?>
                        
    
                    </div>
                </div>
            </div>

        </div>
        <!-- post content end -->

    </div>
    <!-- main wrapper end -->



<?php get_footer(); ?>