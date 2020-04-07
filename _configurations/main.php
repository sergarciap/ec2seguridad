<?php
/**
* Descripción  Configuración principal para el despliegue de elementos en la web
* @author	   Creativerse Team <creativerse.ltda@gmail.com>
* @param       no aplica
* @return      array
*/
return $main_config = 
array(
    'head' => array(
        'title'       => 'Creativerse - Soluciones tecnológicas de TI',
        'short-title' => 'Creativerse Ltda.',
        'icon'        => '' 
    ),
    'header-top-wrap' => array(
        'top-message' => '¡Hey!, ¿estás buscando integrar tecnologias de la información para optimizar tu negocio?. <a href="#">No dudes en contactarnos..</a>'
    ),
    'header-bottom-wrap' => array(
        'header__logo'     => 'assets/images/logo/logo-dark.png',
        'header-midle-box' => array(
                                array(
                                    'bo_disponible' => 'true',
                                    'lbl_menu'      => 'Inicio',
                                    'href'          => '#',
                                    'sub_menu'      => array(
                                        array(
                                            'lbl_sub_menu' => 'Infotechno',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Processing',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Appointment',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Services',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Resolutions',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Cybersecurity',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                    ),
                                ),
                                array(
                                    'bo_disponible' => 'true',
                                    'lbl_menu'      => 'Nuestra Compañia',
                                    'href'          => '#',
                                    'sub_menu'      => array(
                                        array(
                                            'lbl_sub_menu' => 'About Us',
                                            'href'         => '#',
                                            #NOTA, Manejaremos hasta este nivel de sub menus de momento.
                                            'sub_menu'     => array( 
                                                array(
                                                    'lbl_sub_menu' => 'About us 01',
                                                    'href'         => '#',
                                                ),
                                                array(
                                                    'lbl_sub_menu' => 'About us 02',
                                                    'href'         => '#',
                                                ),
                                            )
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Contact us',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Leadership',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Why choose us',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Our history',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'FAQs',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                    ),
                                ),
                                array(
                                    'bo_disponible' => 'true',
                                    'lbl_menu'      => 'Soluciones TI',
                                    'href'          => '#',
                                    'sub_menu'      => array(
                                        array(
                                            'lbl_sub_menu' => 'IT Services',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Managed IT Services',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Industries',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Business solution',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'IT Services Details',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                    ),
                                ),
                                array(
                                    'bo_disponible' => 'true',
                                    'lbl_menu'      => 'Elements',
                                    'href'          => '#',
                                    'sub_menu'      => array(
                                        array(
                                            'lbl_sub_menu' => 'IT Services',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Managed IT Services',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Industries',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Business solution',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'IT Services Details',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                    ),
                                ),
                                array(
                                    'bo_disponible' => 'true',
                                    'lbl_menu'      => 'Case Studies',
                                    'href'          => '#',
                                    'sub_menu'      => array(
                                        array(
                                            'lbl_sub_menu' => 'IT Services',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Managed IT Services',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Industries',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Business solution',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'IT Services Details',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                    ),
                                ),
                                array(
                                    'bo_disponible' => 'true',
                                    'lbl_menu'      => 'Blog',
                                    'href'          => '#',
                                    'sub_menu'      => array(
                                        array(
                                            'lbl_sub_menu' => 'IT Services',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Managed IT Services',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Industries',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'Business solution',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                        array(
                                            'lbl_sub_menu' => 'IT Services Details',
                                            'href'         => '#',
                                            'sub_menu'     => array()
                                        ),
                                    ),
                                ),
                            ),
        'header-right-box' => array(
        
        )
    )




    
);