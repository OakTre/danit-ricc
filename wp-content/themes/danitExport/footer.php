</main>
<footer class="footer">
  <div class="site-container footer__container">
    <div class="footer__block">
      <p class="footer__text">All right reserved 2022</p>
      <a class="footer__text" href="<?php echo get_privacy_policy_url(); ?>">Privacy policy</a>
    </div>
    <div class="footer__block">
      <ul class="socials footer__socials">
        <li class="socials__item">
          <a class="socials__link" href="<?php echo carbon_get_theme_option('social_linked'); ?>" target="_blank">
            <svg class="icon icon-in socials__link-icon" width="32" height="32">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#in"></use>
            </svg>
          </a>
        </li>
        <li class="socials__item">
          <a class="socials__link" href="<?php echo carbon_get_theme_option('social_wt'); ?>" target="_blank" >
            <svg class="icon icon-wa socials__link-icon" width="32" height="32">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#wa"></use>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>
</div>

</body>
<?php wp_footer(); ?>

</html>