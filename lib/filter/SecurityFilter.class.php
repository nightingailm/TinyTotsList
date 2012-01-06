<?php

/**
* Basic Security Filter (just asks for "Class Name")
*/
class SecurityFilter extends sfFilter
{
  public function execute($filterChain)
  {
    // Check if the user has been authenticated
    $user = $this->getContext()->getUser();
    $module = $this->getContext()->getModuleName();

    if ($module <> 'sfGuardAuth' && !$user->isAuthenticated())
    {
      // Send user to login page
      $this->getContext()->getController()->redirect('sf_guard_signin');
    }

    $filterChain->execute();

    return;
  }
}