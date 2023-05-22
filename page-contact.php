<?php get_header(); ?>
    <section class="contact l_content">
        <div class="m_top_container">
            <div class="m_sec_ttl__wrapper">
                <h2 class="m_sec__ttl">
                    お問い合わせ
                </h2>
            </div>
            <div class="m_section_img__wrapper">
                <img 
                src="<?php echo esc_url( get_template_directory_uri() . '' ); ?>" 
                alt="こちらはページトップの画像です" 
                class="m_section_img">
            </div>
            <div class="m_section_textcontent">
                <p class="m_section_textcontent__text">
                    少しでもご不明点や質問、またご依頼などがあれば、こちらのフォームからお問い合わせください。お待ちしております。
                    <!-- 都度変更 -->
                </p>
            </div>
        </div>
        <?php the_content(); ?>
        <!-- form部分↑ contentで登録したコンタクトフォームをここに呼び出す-->
        <!-- 構成
        <div>
            <form action="">
                ○○○
            </form>
        </div>
        -->
        <p class="contact_submitAttention">
            ※返信にはお時間を頂く場合が御座います。
        </p>
    </section>
    
<?php get_footer(); ?>