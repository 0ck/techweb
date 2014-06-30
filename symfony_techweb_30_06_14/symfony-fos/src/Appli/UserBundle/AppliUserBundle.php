<?php

namespace Appli\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppliUserBundle extends Bundle
{
	public function getParent(){
		return 'FOSUserBundle';
	}
}
