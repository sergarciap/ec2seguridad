<?php
/**
* Descripción  Configuración principal para el despliegue de elementos en la web}
* NOTA 1,      Hasta 2 niveles de sub menus.
* NOTA 2,      bo_mostrar => 0 (no despliega) y 1 (despliega).
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
    'header-bottom-wrap'   => array(
        'header__logo'     => 'assets/images/logo/logo-dark.png',
        'header-midle-box' => array(
            array(
                'lbl_menu' => 'Inicio',
                'href'     => '#',
                'sub_menu' => array(),
            ),
            array(
                'lbl_menu' => 'Servicios',
                'href'     => '#',
                'sub_menu' => array(
                    array(
                        'lbl_sub_menu' => 'Servicio 1',
                        'href'         => '#',
                        'sub_menu'     => array()
                    ),
                    array(
                        'lbl_sub_menu' => 'Servicio 2',
                        'href'         => '#',
                        'sub_menu'     => array()
                    ),
                ),
            ),
            array(
                'lbl_menu' => 'Nuestra Compañia',
                'href'     => '#',
                'sub_menu' => array(),
            ),
            array(
                'lbl_menu' => 'Soluciones TI/Proyectos',
                'href'     => '#',
                'sub_menu' => array(
                    array(
                        'lbl_sub_menu' => 'Creativerse School',
                        'href'         => '#',
                        'sub_menu'     => array()
                    ),
                    array(
                        'lbl_sub_menu' => 'Creativerse Risk',
                        'href'         => '#',
                        'sub_menu'     => array()
                    ),
                    array(
                        'lbl_sub_menu' => 'Creativerse iPoss',
                        'href'         => '#',
                        'sub_menu'     => array()
                    ),
                ),
            ),
            array(
                'lbl_menu' => 'Contáctanos',
                'href'     => '#',
                'sub_menu' => array(),
            ),
        ),
        'header-right-box'   => array(
            'language-menu'  => array(
                'bo_mostrar' => 1,
                'lbl_menu'   => 'Acerca de',
                'href'       => '#',
                'ls-sub-menu'=> array(
                    array(
                        'lbl_sub_menu' => 'Transformación Digital',
                        'href'         => '#',
                    ),
                    array(
                        'lbl_sub_menu' => 'Servicios Cloud (AWS)',
                        'href'         => 'https://aws.amazon.com/es/what-is-aws/',
                    ),
                ),
            ),
            'header-search-form' => array(
                'bo_mostrar'     => 1,
            ),
        )
    ),
    'infotechno-hero' => array(
        //imagenes
        'infotechno-hero-text'      =>array(
            'h6' => 'Diseño de TI & Consultoría',
            'h2' => 'Adáptate a los <br> Cambios y Tendencias Tecnológicas',
            'p'  => 'Diseño, administración & servicios de soporte de TI altamente personalizados.',
            'button'  => array(
                'lbl_menu' => 'Más Detalles',
                'href'     => '#',
            )
        ),
    )



);