<?php
  session_start();

  // EXAMPLE - flash('register_success', 'You are now registered');
  // DISPLAY IN VIEW - echo flash('register_success');

  /**
   * Function handle basic flash messages when login/register, add, edit or delete
   * 
   * @param string the name type of message set as string
   * @param string the flash message to display in the HTML element set as string
   * @param string the CSS class to add on the 'div' element
   * 
   */
  function flash(string $name = '',string $message = '',string $class = 'txt-content alert alert-success') {
    if(!empty($name)){
      if(!empty($message) && empty($_SESSION[$name])){
        if(!empty($_SESSION[$name])){
          unset($_SESSION[$name]);
        }

        if(!empty($_SESSION[$name. '_class'])){
          unset($_SESSION[$name. '_class']);
        }

        $_SESSION[$name] = $message;
        $_SESSION[$name. '_class'] = $class;
      } elseif(empty($message) && !empty($_SESSION[$name])){
        $class = !empty($_SESSION[$name. '_class']) ? $_SESSION[$name. '_class'] : '';

        echo 
          '<div class="'
          .$class
          .'">'
            .'<p class="txt-content">'
              .$_SESSION[$name]
            .'</p>'
          .'</div>';



        unset($_SESSION[$name]);
        unset($_SESSION[$name. '_class']);
      }
    }
  }

  /**
   * Function if isLoggedIn, session is started
   * 
   * @return bool true if session start 
   */
  function isLoggedIn(): bool {
    if(isset($_SESSION['user_id'])){
      return true;
    } else {
      return false;
    }
  }

  /**
   * Function redirect to login page if not logged in
   */
  function redirectToLogin() {
    if(!isLoggedIn()){
        redirect('users/login');
    }
  }

?>