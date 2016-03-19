<?php

class Servicios extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'titulo' => 'Servicios - Miriam Mendoza Decoraciones y Eventos',
			'contenido' => 'principal/servicios_view',
			'description' => 'Miriam Mendoza Decoraciones y Eventos junto a Festejos el Prado ofrecen un servicio impecable, ponemos a su disposicion una distinguida variedad de servicios tales como mobiliario, decoraciones, toldos, vajilla, cristaleria, cubierteria, alquiler de carros para bodas, comidas, pasapalos, postres, entre otros.',
			'keywords' => 'comidas para fiestas, comida para fiestas infantiles, decoracion para baby shower, decoración para cumpleaños, festejos el prado',
			'menu' => 'servicios'
			);
		$this->load->view('plantilla', $data);
	}
}

?>