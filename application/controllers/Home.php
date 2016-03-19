<?php

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'titulo' => 'Miriam Mendoza Decoraciones y Eventos',
			'contenido' => 'principal/home_view',
			'description' => 'Festejos el prado es una agencia de festejos ubicada en Caracas, Tiene una trayectoria de 38 años de servicio, tiempo el cual ha dejado constancia de calidad, profesionalismo, puntualidad y seriedad en todo momento. Junto con Miriam Mendoza Decoraciones y Eventos ofrecen un mobiliriario y decoraciones formando escenarios extraordinarios para sus eventos.',
			'keywords' => 'agencia de festejos, agencia de festejos en caracas, comidas para fiestas, comida para fiestas infantiles, festejos el prado, festejos en caracas, muebles fiesta, miriam mendoza',
			'menu' => 'home'
			);
		$this->load->view('plantilla', $data);
	}
}

?>