<?php get_header(); ?>
<section class="page_top l_content">
    <div class="m_top_container">
        <h1 class="page_top_ttl">
            お問い合わせありがとうございます。
        </h1>
        <p class="page_top_catchcopy">
            この度はお問い合わせありがとうございます。返信まで今しばらくお待ちください。＊仕事の進捗状況などよっては返信に時間がかかる場合があります。ご了承ください。
        </p>
        <div class="m_section_img__wrapper">
            <img 
            src="<?php echo esc_url( get_template_directory_uri() . '/img/undraw_Code_thinking_re_gka2.png' ); ?>" 
            alt="こちらはページトップの画像です" 
            class="m_section_img">
        </div>
        <div class="m_section_btn_wrapper">
            <a href="<?php echo esc_url(home_url()); ?>" class="m_section_btn_wrapper__btn">
                <button  class="m_section_btn_wrapper__btn__link">
                    トップに戻る
                </button>
            </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>