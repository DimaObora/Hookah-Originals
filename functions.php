<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 13.02.2018
 * Time: 1:01
 */

add_action( 'admin_menu', 'hookah_add_admin_menu' );
add_action( 'admin_init', 'hookah_settings_init' );

function hookah_add_admin_menu(  ) {
    add_options_page( 'hookah-originals', 'hookah-originals', 'manage_options', 'hookah-originals', 'hookah_options_page' );
}

function hookah_settings_init(  ) {
    register_setting( 'pluginPage', 'hookah_settings' );
    add_settings_section(
        'hookah_pluginPage_section',
        __( 'Настройки', 'wordpress' ),
        'hookah_settings_section_callback',
        'pluginPage'
    );
    add_settings_field(
        'hookah_text_field_0',
        __( 'Телефон', 'wordpress' ),
        'hookah_text_field_0_render',
        'pluginPage',
        'hookah_pluginPage_section'
    );

    add_settings_field(
        'hookah_text_field_1',
        __( 'Имя', 'wordpress' ),
        'hookah_text_field_1_render',
        'pluginPage',
        'hookah_pluginPage_section'
    );

    add_settings_field(
        'hookah_text_field_2',
        __( 'Стоимость аренды кальяна', 'wordpress' ),
        'hookah_text_field_2_render',
        'pluginPage',
        'hookah_pluginPage_section'
    );

    add_settings_field(
        'hookah_text_field_3',
        __( 'Стоимость дня аренды', 'wordpress' ),
        'hookah_text_field_3_render',
        'pluginPage',
        'hookah_pluginPage_section'
    );

    add_settings_field(
        'hookah_text_field_4',
        __( 'Вк апи токен', 'wordpress' ),
        'hookah_text_field_4_render',
        'pluginPage',
        'hookah_pluginPage_section'
    );

    add_settings_field(
        'hookah_text_field_5',
        __( 'Вк апи секрет', 'wordpress' ),
        'hookah_text_field_5_render',
        'pluginPage',
        'hookah_pluginPage_section'
    );

    add_settings_field(
        'hookah_text_field_6',
        __( 'id беседы', 'wordpress' ),
        'hookah_text_field_6_render',
        'pluginPage',
        'hookah_pluginPage_section'
    );

    add_settings_field(
        'hookah_text_field_7',
        __( 'Копирайт', 'wordpress' ),
        'hookah_text_field_7_render',
        'pluginPage',
        'hookah_pluginPage_section'
    );
}

function hookah_text_field_0_render(  ) {
    $options = get_option( 'hookah_settings' );
    ?>
    <input type='text' name='hookah_settings[hookah_text_field_0]' value='<?php echo $options['hookah_text_field_0']; ?>'>
    <?php
}

function hookah_text_field_1_render(  ) {
    $options = get_option( 'hookah_settings' );
    ?>
    <input type='text' name='hookah_settings[hookah_text_field_1]' value='<?php echo $options['hookah_text_field_1']; ?>'>
    <?php
}

function hookah_text_field_2_render(  ) {
    $options = get_option( 'hookah_settings' );
    ?>
    <input type='text' name='hookah_settings[hookah_text_field_2]' value='<?php echo $options['hookah_text_field_2']; ?>'>
    <?php
}

function hookah_text_field_3_render(  ) {
    $options = get_option( 'hookah_settings' );
    ?>
    <input type='text' name='hookah_settings[hookah_text_field_3]' value='<?php echo $options['hookah_text_field_3']; ?>'>
    <?php
}

function hookah_text_field_4_render(  ) {
    $options = get_option( 'hookah_settings' );
    ?>
    <input type='text' name='hookah_settings[hookah_text_field_4]' value='<?php echo $options['hookah_text_field_4']; ?>'>
    <?php
}

function hookah_text_field_5_render(  ) {
    $options = get_option( 'hookah_settings' );
    ?>
    <input type='text' name='hookah_settings[hookah_text_field_5]' value='<?php echo $options['hookah_text_field_5']; ?>'>
    <?php
}

function hookah_text_field_6_render(  ) {
    $options = get_option( 'hookah_settings' );
    ?>
    <input type='text' name='hookah_settings[hookah_text_field_6]' value='<?php echo $options['hookah_text_field_6']; ?>'>
    <?php
}

function hookah_text_field_7_render(  ) {
    $options = get_option( 'hookah_settings' );
    ?>
    <input type='text' name='hookah_settings[hookah_text_field_7]' value='<?php echo $options['hookah_text_field_7']; ?>'>
    <?php
}

function hookah_settings_section_callback(  ) {
    echo __( 'Настройки темы', 'wordpress' );
}

function hookah_options_page(  ) {
    ?>
    <form action='options.php' method='post'>
        <h2>hookah-originals</h2>
        <?php
        settings_fields( 'pluginPage' );
        do_settings_sections( 'pluginPage' );
        submit_button();
        ?>
    </form>
    <?php
}

?>