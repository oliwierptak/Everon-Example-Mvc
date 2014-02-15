<?php

namespace Everon\Module\Auth\Controller;

use Everon\Dependency;
use Everon\Interfaces;
use Everon\Mvc\Controller as MvcController;

class Login extends MvcController implements Interfaces\Controller
{
    public function form()
    {
        $url = $this->getUrl('login_submit');
        $this->getModule()->getView('Login')->set('form_action_url', $url);
        $this->getView()->set('canShowInfo', true);
    }

    public function submit()
    {
        $email = $this->getRequest()->getPostParameter('email');
        $password = $this->getRequest()->getPostParameter('password');

        $User = $this->getDomainManager()->getModel('User')->authenticate($email, $password);
        if ($User === null) {
            $this->getView('err')->submitOnError();
            return false;
        }
        else {
            $this->getView()->set('User', $User);
            $url = $this->getUrl('account');
            $this->getView()->set('View.redirect_url', $url);
        }
    }

}