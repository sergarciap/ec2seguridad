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
    #Head, metadatos, etc.
    'head' => array(
        'title'       => 'Creativerse - Soluciones tecnológicas de TI',
        'short-title' => 'Creativerse Ltda.',
        'icon'        => ''
    ),
    #Mensaje inicial de la cabecera
    'header-top-bar-info' => array(
        'top-bar-left'  => '¡Hey!, ¿estás buscando integrar tecnologías para optimizar tu negocio?',
        'top-bar-right' => array(
            array(
                'href'      => 'tel:+56956937966',
                'icon'      => 'info-icon fa fa-phone',
                'info-text' => '<strong>+569 56937966</strong>'
            ),
            array(
                'icon'      => 'info-icon fa fa-comment-alt-lines',
                'info-text' => 'creativerse.ltda@gmail.com'
            )
        )
    ),
    #logo empresa, navegación, otros links, buscar.
    'header-bottom-wrap'   => array(
        'header__logo'     => array(
            'light-logo'       => '',//assets/images/logo/light-logo.png
            'dark-logo'        => ''//assets/images/logo/logo-dark.png
        ),
        'header__navigation'=> array(
            array(
                'href'     => 'javascript:void(0)',
                'lbl_menu' => 'Inicio',
                'sub_menu' => array()
            ),
            array(
                'lbl_menu' => 'Servicios',
                'href'     => 'javascript:void(0)',
                'sub_menu' => array(
                    array(
                        'href'         => 'javascript:void(0)',
                        'lbl_sub_menu' => 'Servicio 1',
                        'sub_menu'     => array()
                    ),
                    array(
                        'href'         => 'javascript:void(0)',
                        'lbl_sub_menu' => 'Servicio 2',
                        'sub_menu'     => array()
                    )
                )
            ),
            array(
                'href'     => 'javascript:void(0)',
                'lbl_menu' => 'Nuestra Compañia',
                'sub_menu' => array()
            ),
            array(
                'lbl_menu' => 'Soluciones TI/Proyectos',
                'href'     => 'javascript:void(0)',
                'sub_menu' => array(
                    array(
                        'lbl_sub_menu' => 'Creativerse School',
                        'href'         => 'javascript:void(0)',
                        'sub_menu'     => array()
                    ),
                    array(
                        'lbl_sub_menu' => 'Creativerse Risk',
                        'href'         => 'javascript:void(0)',
                        'sub_menu'     => array()
                    ),
                    array(
                        'lbl_sub_menu' => 'Creativerse iPoss',
                        'href'         => 'javascript:void(0)',
                        'sub_menu'     => array()
                    )
                )
            ),
            array(
                'href'     => 'javascript:void(0)',
                'lbl_menu' => 'Contáctanos',
                'sub_menu' => array()
            )
        )
    ),
    #Banner imagen, textos principales.
    'service-hero-wrapper' => array(
        'h3' => 'Servicios Tecnológicos Para',
        'h1' => 'Tu Organización',
        'p'  => 'Diseño, administración & servicios tecnológicos altamente personalizados.',
        'button_p'  => array(
            'href'  => 'javascript:void(0)',
            'lbl'   => 'Consulta gratis'
        ),
        'button_s'  => array(
            'href'  => 'javascript:void(0)',
            'lbl'   => 'Como trabajamos'
        )
    ),
    #Información y segmentación empresarial(pymes,etc.)
    'feature-images-wrappe' => array(
        'ht-box-images' => array(
            array(
                'box-image'    => array(
                    'default-image' => 'assets/images/icons/mitech-home-resolutions-box-image-01-100x98.png',
                    'hover-images'  => 'assets/images/icons/mitech-home-resolutions-box-image-01-hover-100x98.png'
                ),
                'content'      => array(
                    'heading' => 'Micro Empresas',
                    'text'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.',
                    'href'    => 'javascript:void(0)'
                )
            ),
            array(
                'box-image'   => array(
                    'default-image' => 'assets/images/icons/mitech-home-resolutions-box-image-02-100x98.png',
                    'hover-images'  => 'assets/images/icons/mitech-home-resolutions-box-image-02-hover-100x98.png'
                ),
                'content'     => array(
                    'heading' => 'Pymes',
                    'text'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.',
                    'href'    => 'javascript:void(0)'
                )
            ),
            array(
                'box-image'   => array(
                    'default-image' => 'assets/images/icons/mitech-home-resolutions-box-image-03-100x98.png',
                    'hover-images'  => 'assets/images/icons/mitech-home-resolutions-box-image-03-hover-100x98.png'
                ),
                'content'     => array(
                    'heading' => 'Grandes Compañias',
                    'text'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.',
                    'href'    => 'javascript:void(0)'
                )
            )
        ),
        'section-under-heading' => 'Los desafíos son solo oportunidades disfrazadas. <a href="javascript:void(0)">¡Contáctanos!</a>',
    ),
    #Servicios
    'feature-icon-wrapper' => array(
        'section-title-wrap'    => array(
            'section-sub-title' => 'Nuestros Servicios',
            'heading'           => 'Para su negocio u organización,<br> Ofrecemos <span class="text-color-primary"> las mejores soluciones TI.',
        ),
        'feature-list__two'=> array(
            array(
                'icon'       => 'assets/images/svg/linea-basic-heart.svg',
                'heading'    => 'Diseño de TI',
                'text'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.',
                'href'       => 'javascript:void(0)'
            ),
            array(
                'icon'       => 'assets/images/svg/linea-basic-case.svg',
                'heading'    => 'Gestión de TI',
                'text'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.',
                'href'       => 'javascript:void(0)'
            ),
            array(
                'icon'       => 'assets/images/svg/linea-basic-alarm.svg',
                'heading'    => 'Seguridad de datos',
                'text'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.',
                'href'       => 'javascript:void(0)'
            ),
            array(
                'icon'       => 'assets/images/svg/linea-basic-geolocalize-05.svg',
                'heading'    => 'Reforma empresarial',
                'text'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.',
                'href'       => 'javascript:void(0)'
            ),
            array(
                'icon'       => 'assets/images/svg/linea-ecommerce-money.svg',
                'heading'    => 'Plan de infraestructura',
                'text'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.',
                'href'       => 'javascript:void(0)'
            ),
            array(
                'icon'       => 'assets/images/svg/linea-basic-spread-text-bookmark.svg',
                'heading'    => 'Integraciones',
                'text'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut..',
                'href'       => 'javascript:void(0)'
            ),
        ),
        'feature-list-button-box' => array(
            'button_p'  => array(
                'href'  => 'javascript:void(0)',
                'lbl'   => 'Habla con un experto'
            ),
            'button_s'  => array(
                'href'  => 'javascript:void(0)',
                'lbl'   => 'Contáctanos ahora'
            )
        )
    ),


    #Flujo de proceso
    'gradation-process-area' => array(
        'gradation-title-wrap' => array(
            'section-sub-title' => 'CÓMO TRABAJAMOS',
            'heading' => 'Flujo del proceso <span class="text-color-primary"> <br>para concretar tu negocio</span>'
        ),
        'gradation-sub-heading' => array(
            'heading' => '<mark>05</mark> Etapas'
        )
    ),
    'ht-gradation' => array(
        array(
            'circle' => '1',
            'heading' => 'Contacto' ,
            'text' => 'Todo comienza cuando nos contactas, a través de nuestro formulario de contacto. En unos momentos nos estaremos comunicando contigo, para solicitarte información respecto a tu proyecto web.',
            'button-text' => '<span class="button-text" data-text="look more">
            Ver más </span>
            <span class="button-icon far fa-long-arrow-right"></span>'
        ),
        array(
            'circle' => '2',
            'heading' => 'Revisión' ,
            'text' => 'De acuerdo a la información obtenida, te propondremos una cotización aproximada del proyecto.',
            'button-text' => '<span class="button-text" data-text="look more">
            Ver más </span>
            <span class="button-icon far fa-long-arrow-right"></span>'
        ),
        array(
            'circle' => '3',
            'heading' => 'Interacción' ,
            'text' => 'De resultar todo bien, acordaremos una reunión vía chat o telefónica (lo que gustes), para que podamos ir construyendo conjuntamente lo que buscas en tu proyecto web. ',
            'button-text' => '<span class="button-text" data-text="look more">
            Ver más </span>
            <span class="button-icon far fa-long-arrow-right"></span>'
        ),
        array(
            'circle' => '4',
            'heading' => 'Propuestas y prototipo' ,
            'text' => 'En base a lo conversado en el punto anterior, te presentaremos una propuesta para el proyecto, seguida de un prototipo. Tú decides cuál se acomoda más a tus necesidades! ',
            'button-text' => '<span class="button-text" data-text="look more">
            Ver más </span>
            <span class="button-icon far fa-long-arrow-right"></span>'
        ),
        array(
            'circle' => '5',
            'heading' => 'Implementación' ,
            'text' => 'La última fase consiste en la concretación según lo requerido y dejar todo en marcha, para que puedas empezar a trabajar con tu proyecto web!',
            'button-text' => '<span class="button-text" data-text="look more">
            Ver más </span>
            <span class="button-icon far fa-long-arrow-right"></span>'
        )

        ),













    #Contacto
    'contact-us-area' => array(

    ),
    #footer
    'footer-area-wrapper' => array(
        'footer-area'     => array(
            array(
                'col'                  => 'col-lg-4 col-md-6 col-sm-6',
                'footer-widget__logo'  => 'assets/images/logo/dark-logo-160x48.png',
                'footer-widget__list'  => array(
                    '#2340000 Valparaíso, Valparaíso, Chile',
                    '<a href="mailto:creativerse.ltda@gmail.com" class="hover-style-link">creativerse.ltda@gmail.com</a>',
                    '<a href="tel:123344556" class="hover-style-link text-black font-weight--bold">(+569) 56937966</a>',
                    '<a href="http://www.creativerse.cl/" class="hover-style-link text-color-primary">www.creativerse.cl</a>'
                )
            ),
            array(
                'col'                  => 'col-lg-2 col-md-4 col-sm-6',
                'footer-widget__title' => 'Servicios TI',
                'footer-widget__list'  => array(
                    '<a href="javascript:void(0)" class="hover-style-link">Servicio TI 1</a>',
                    '<a href="javascript:void(0)" class="hover-style-link">Servicio TI 2</a>',
                    '<a href="javascript:void(0)" class="hover-style-link">Servicio TI 3</a>',
                    '<a href="javascript:void(0)" class="hover-style-link">Servicio TI 4</a>'
                )
            ),
            array(
                'col'                  => 'col-lg-2 col-md-4 col-sm-6',
                'footer-widget__title' => 'Enlaces rápidos',
                'footer-widget__list'  => array(
                    '<a href="javascript:void(0)" class="hover-style-link">Condiciones de pago</a>',
                    '<a href="javascript:void(0)" class="hover-style-link">Condiciones de pago</a>',
                    '<a href="javascript:void(0)" class="hover-style-link">Política de privacidad</a>',
                    '<a href="javascript:void(0)" class="hover-style-link">Donde encontrarnos</a>'
                )
            ),
            array(
                'col'                  => 'col-lg-2 col-md-4 col-sm-6',
                'footer-widget__title' => 'Soporte',
                'footer-widget__list'  => array(
                    '<a href="javascript:void(0)" class="hover-style-link">Foro de Soporte</a>',
                    '<a href="javascript:void(0)" class="hover-style-link">Ayuda &amp; FAQ</a>',
                    '<a href="javascript:void(0)" class="hover-style-link">Contáctanos</a>',
                    '<a href="javascript:void(0)" class="hover-style-link">Precios y planes</a>',
                    '<a href="javascript:void(0)" class="hover-style-link">Política de cookies</a>'
                )
            ),
            array(
                'col'                  => 'col-lg-2 col-md-4 col-sm-6',
                'section-space--mb_50' => 'true',
                'footer-widget__list'  => array(
                    '<a href="javascript:void(0)" class="image_btn"><img class="img-fluid" src="assets/images/icons/aeroland-button-google-play.jpg" alt=""></a>',
                    '<a href="javascript:void(0)" class="image_btn"><img class="img-fluid" src="assets/images/icons/aeroland-button-app-store.jpg" alt=""></a>',
                )
            )
        ),
        'footer-copyright-area'  => array(
            'copyright-text'     => '&copy;2020 Creativerse Ltda. <a href="http://www.creativerse.cl/">Todos los derechos reservados.</a>',
            'ht-social-networks' => array(
                '<a href="https://twitter.com" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary"><i class="fab fa-twitter link-icon"></i></a>',
                '<a href="https://facebook.com" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary"><i class="fab fa-facebook-f link-icon"></i></a>',
                '<a href="https://instagram.com" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary"><i class="fab fa-instagram link-icon"></i></a>',
                '<a href="https://linkedin.com" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary"><i class="fab fa-linkedin link-icon"></i></a>'
            ),
        )
    )
);
