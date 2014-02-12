<?php

namespace Everon\Module\UserLogin\Controller;

use Everon\Dependency;
use Everon\Interfaces;
use Everon\Mvc\Controller as MvcController;

class Auth extends MvcController implements Interfaces\Controller
{
    public function form()
    {
        $redirect_url = '/url encoded';
        $this->getViewManager()->getView('Login')->set('form_action_url', "login/submit/session/adf24ds34/redirect/${redirect_url}?token=something&pif=2457");
        $this->getView()->set('canShowInfo', true);
    }

    public function submit()
    {
        $email = $this->getRequest()->getPostParameter('email');
        $password = $this->getRequest()->getPostParameter('password');

        $User = $this->getDomainManager()->getModel('User')->authenticate($email, $password);
        if ($User === null) {
            $this->getView()->submitOnError();
            return false;
        }
        else {
            $this->getView()->set('User', $User);
            $this->getView()->set('View.redirect_url', '/account');
        }
    }

}