<?php defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;

class BlankController extends BaseController
{
    function display($cachable = false, $urlparams = [])
    {
        $this->default_view = 'shell';
        parent::display($cachable, $urlparams);
    }
}