<?php

class Galeria extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'titulo' => 'Galería - Miriam Mendoza Decoraciones y Eventos',
			'contenido' => 'principal/galeria_view',
			'description' => 'Miriam Mendoza Decoraciones y Eventos junto a Festejos el Prado muestran su galeria de imagenes capturadas en diferentes eventos realizados, en ella se muestran diferentes decoraciones y comidas para bodas, baby shower, cumpleaños, etc.',
			'keywords' => 'alquiler de sillas, alquiler de toldos, comidas para cumpleaños, decoracion para baby shower, decoracion para bodas, decoraciones fiesta, dulces para cumpleaños, festejos el prado, miriam mendoza, muebles fiesta',
			'menu' => 'galeria'
			);
		$this->load->view('plantilla', $data);
	}
}

?>