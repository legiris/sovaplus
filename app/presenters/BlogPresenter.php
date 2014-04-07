<?php

/**
 * Description of BlogPresenter
 *
 * @author Admin
 */
class BlogPresenter extends BasePresenter
{
    public function renderDefault()
    {
        $this->template->presenter = $this->getName();
    }
}