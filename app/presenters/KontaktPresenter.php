<?php

class KontaktPresenter extends BasePresenter
{
    public function renderDefault()
    {
        $this->template->presenter = $this->getName();
    }
}