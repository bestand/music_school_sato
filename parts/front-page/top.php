<div class="top-msgs">
    <h1 class="top-msgs__item_main">事務スキルの学習サイト<br>「事務×GYM」</h1>
    <h2 class="top-msgs__item_sub">充実のカリキュラムで「実務で使える」事務スキルが丸ごと学べる</h2>
</div>
<div class="top-btns">
    <?php if(is_user_logged_in()){
        $user = wp_get_current_user();
    ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>/account">
        <button class="top-btns__item_account btn"><p class="btn__p"><?php echo $user->user_login; ?> <i class="fas fa-user"></i></p></button>
    </a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>/logout">
        <button class="top-btns__item_logout btn"><p class="btn__p">ログアウト <i class="fas fa-sign-out"></i></p></button>
    </a>
    <?php }else{?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>/login">
        <button class="top-btns__item_login btn"><p class="btn__p">ログイン <i class="fas fa-sign-in"></i></p></button>
    </a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>/register">
        <button class="top-btns__item_register btn"><p class="btn__p">無料会員登録 <i class="fa-solid fa-pen-to-square"></i></p></button>
    </a>
    <?php }?>
</div>
<div class="top-imgs">
    <img class="top-imgs__item" src="<?php echo get_template_directory_uri(); ?>/asset/img/top-image.png">
</div>