<?php

error_log('----------- theme functions loading');

function app_setup_post_type() {
    error_log('----------- app_setup_post_type');
    error_log('register_post_type artist');

    $labels = array(
        'name' => _x( 'メンバー', 'team' ),
        'singular_name' => _x( 'メンバー', 'team' ),
        'add_new' => _x( '新規追加', 'team' ),
        'add_new_item' => _x( '新しいメンバープロフィールを追加', 'team' ),
        'edit_item' => _x( 'メンバープロフィールを編集', 'team' ),
        'new_item' => _x( '新しいメンバー', 'team' ),
        'view_item' => _x( 'メンバープロフィールを見る', 'team' ),
        'search_items' => _x( 'メンバー検索', 'team' ),
        'not_found' => _x( 'プロフィールが見つかりません', 'team' ),
        'not_found_in_trash' => _x( 'ゴミ箱にプロフィールはありません', 'team' ),
        'parent_item_colon' => _x( '親メンバー:', 'team' ),
        'menu_name' => _x( 'メンバー', 'team' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => '経歴紹介とか',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),

        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'team', $args );
    error_log('----------- app_setup_post_type team');
    //    register_post_type( 'artist', ['public' => 'true'] );
}

add_action( 'init', 'app_setup_post_type' );

error_log('----------- theme functions loading');