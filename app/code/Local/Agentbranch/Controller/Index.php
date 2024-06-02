<?php

class Agentbranch_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $agentBranch = $layout->createBlock('agentbranch/index');
        $child->addChild('agentbranch', $agentBranch);
        $layout->toHtml();
    }
}

?>