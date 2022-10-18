<?php

include __DIR__ . "/database_data.php";

$show_only = "";

$check_init_show_only =  isset( $_GET["show_only"] );

if ( $check_init_show_only ) {

    $show_only = strtolower ( $_GET["show_only"] );

    $result_filtered = [];

    foreach ( $data as $song ) {

        $check_show_all = strlen ( $show_only ) === 0;

        $check_genre = strtolower ( $song ["genre"] ) === $show_only;

        if ( $check_genre || $check_show_all ) {

            $result_filtered[] = $song;

        }

    }

    $data = $result_filtered;

}

?>