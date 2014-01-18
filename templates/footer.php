<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
    
    <div class="col-sm-3">
    
    <?php if ( is_active_sidebar( 'footer-one' ) ) : ?>
<?php dynamic_sidebar( 'footer-one' ); ?>
<?php else : ?>
<p>Please activate some widgets</p>
<?php endif; ?>
    
    </div>
    
    <div class="col-sm-3">

    <?php if ( is_active_sidebar( 'footer-two' ) ) : ?>
<?php dynamic_sidebar( 'footer-two' ); ?>
<?php else : ?>
<p>Please activate some widgets</p>
<?php endif; ?>

    </div>
    
    <div class="col-sm-3">

    <?php if ( is_active_sidebar( 'footer-three' ) ) : ?>
<?php dynamic_sidebar( 'footer-three' ); ?>
<?php else : ?>
<p>Please activate some widgets</p>
<?php endif; ?>

    </div>
    
    <div class="col-sm-3">
    
        <?php if ( is_active_sidebar( 'footer-four' ) ) : ?>
<?php dynamic_sidebar( 'footer-four' ); ?>
<?php else : ?>
<p>Please activate some widgets</p>
<?php endif; ?>
    
    </div>
    
        </div>
        
           <div class="col-lg-12">
           
                   <?php if ( is_active_sidebar( 'footer-copyright' ) ) : ?>
<?php dynamic_sidebar( 'footer-copyright' ); ?>
<?php else : ?>
<p>Please activate some widgets</p>
<?php endif; ?>
                      
           </div>        
  </div>
</footer>
    
    
    
     


<?php wp_footer(); ?>
