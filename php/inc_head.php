<?php
  session_start();
  if( isset( $_SESSION[ 's_id' ] ) ) {
    $jb_login = TRUE;
  }
?>