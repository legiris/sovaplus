<?php

class OdkazyPresenter extends BasePresenter
{
    public function renderDefault()
    {
        $this->template->presenter = $this->getName();
    }
}