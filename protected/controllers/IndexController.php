<?php


class IndexController extends Controller
{
  	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
	echo "hola desde el controlador";
	}
}