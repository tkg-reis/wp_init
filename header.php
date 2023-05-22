<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/favicon.png' ); ?>" type="image/png" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header_container">
            <div class="header_logo">
                <img 
                src="<?php echo esc_url( get_template_directory_uri() . '/img/logo_transparent.png' ); ?>" 
                alt="" 
                class="header_logo__img">
            </div>
            <div class="header_container__toggle">
                <h2 class="header_container__toggle__txt">
                    メニュー
                </h2>
                <div class="header_container__toggle__circles">
                    <span class="header_container__toggle__circles__circle"></span>
                    <span class="header_container__toggle__circles__circle"></span>
                    <span class="header_container__toggle__circles__circle"></span>
                </div>
            </div>
            <div class="header_container__respMenu">
                <ul class="header_container__respMenu__list">
                    <li class="header_container__respMenu__item">
                        <a href="<?php echo esc_url(home_url()); ?>" class="header_container__respMenu__item__link">
                            トップページ
                        </a>
                    </li>
                    <li class="header_container__respMenu__item">
                        <a href="<?php echo esc_url(home_url('/person')); ?>" class="header_container__respMenu__item__link">
                            私について
                        </a>
                    </li>
                    <li class="header_container__respMenu__item">
                        <a href="<?php echo esc_url(home_url('/work_flow')); ?>" class="header_container__respMenu__item__link">
                            作業の流れ
                        </a>
                    </li>
                    <li class="header_container__respMenu__item">
                        <a href="<?php echo esc_url(home_url('/skill')); ?>" class="header_container__respMenu__item__link">
                            ホームページを作る上
                            <br>
                            でできること
                        </a>
                    </li>
                    <li class="header_container__respMenu__item">
                        <a href="<?php echo esc_url(home_url('/work')); ?>" class="header_container__respMenu__item__link">
                            実績
                        </a>
                    </li>
                    <li class="header_container__respMenu__item">
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="header_container__respMenu__item__link">
                            お知らせ・ブログ
                        </a>
                    </li>
                    <li class="header_container__respMenu__item">
                        <a href="<?php echo esc_url(home_url('/price')); ?>" class="header_container__respMenu__item__link">
                            料金について
                        </a>
                    </li>
                    <li class="header_container__respMenu__item">
                        <a href="<?php echo esc_url(home_url('/q_and_a')); ?>" class="header_container__respMenu__item__link">
                            よくある質問
                        </a>
                    </li>
                    <li class="header_container__respMenu__item">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header_container__respMenu__item__link">
                            お問い合わせ
                        </a>
                    </li>
                </ul>
            </div>
            <!-- more 1080px -->
            <!-- 都度項目変更 -->
            <div class="header_container__lists">
                <ul class="header_container__listTop">
                    <li class="header_container__itemTop">
                        <a href="<?php echo esc_url(home_url()); ?>" class="header_container__itemTop__link">
                            トップページ
                        </a>
                    </li>
                    <li class="header_container__itemTop">
                        <a href="<?php echo esc_url(home_url('/person')); ?>" class="header_container__itemTop__link">
                            私について
                        </a>
                    </li>
                    <li class="header_container__itemTop">
                        <a href="<?php echo esc_url(home_url('/skill')); ?>" class="header_container__itemTop__link">
                            ホームページを作る上でできること
                        </a>
                    </li>
                </ul>
                <ul class="header_container__listDown">
                    <li class="header_container__itemDown">
                        <a href="<?php echo esc_url(home_url('/work_flow')); ?>" class="header_container__itemDown__link">
                            作業の流れ
                        </a>
                    </li>
                    <li class="header_container__itemDown">
                        <a href="<?php echo esc_url(home_url('/work')); ?>" class="header_container__itemDown__link">
                            実績
                        </a>
                    </li>
                    <li class="header_container__itemDown">
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="header_container__itemDown__link">
                            お知らせ・ブログ
                        </a>
                    </li>
                    <li class="header_container__itemDown">
                        <a href="<?php echo esc_url(home_url('/price')); ?>" class="header_container__itemDown__link">
                            料金について
                        </a>
                    </li>
                    <li class="header_container__itemDown">
                        <a href="<?php echo esc_url(home_url('/q_and_a')); ?>" class="header_container__itemDown__link">
                            よくある質問
                        </a>
                    </li>
                    <li class="header_container__itemDown">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header_container__itemDown__link">
                            お問い合わせ
                        </a>
                        <!-- 都度変更 -->
                        <i class="fa-regular fa-paper-plane"></i>
                    </li>
                </ul>
            </div>
        </div>
        <a href="#header" class="m_topToBtn">
            <i class="fa-solid fa-circle-up"></i>
            <!-- 都度変更 -->
        </a>
    </header>