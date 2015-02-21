<?php 
  function qna_setup() {
    register_nav_menus(
      array(
        'pri' =>  __( 'primary', 'z7_qna' ), 
        'sec' =>  __( 'sidebar', 'z7_qna' )
      )
    ); 
  }

  add_action( 'after_setup_theme', 'qna_setup' );
?>

