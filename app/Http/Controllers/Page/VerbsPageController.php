<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\PageController;

class VerbsPageController extends PageController
{
	protected function make()
	{
        parent::make();

		$this->setParam('subPage', 'spanish.verbs');
    }

}
