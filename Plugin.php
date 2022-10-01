<?php

namespace Kanboard\Plugin\AddMermaid;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        $this->hook->on('template:layout:js', array('template' => 'plugins/AddMermaid/Assets/js/mermaid.min.js'));
        $this->hook->on('template:layout:js', array('template' => 'plugins/AddMermaid/Assets/js/start_mermaid.js'));
    }

    public function getPluginName()
    {
        return 'AddMermaid';
    }

    public function getPluginDescription()
    {
        return t('Add rendering for mermaid.js diagrams.');
    }

    public function getPluginAuthor()
    {
        return 'Eugen Neuber';
    }

    public function getPluginVersion()
    {
        return '0.1.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.48';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/euneuber/AddMermaid';
    }

}
