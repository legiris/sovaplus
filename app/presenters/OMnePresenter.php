<?php

class OMnePresenter extends BasePresenter
{
    public function renderDefault()
    {
        $this->template->presenter = $this->getName();
    }
}