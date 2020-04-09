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
    'header-top-wrap' => array(
        'top-message' => '¡Hey!, ¿estás buscando integrar tecnologias de la información para optimizar tu negocio?. <a href="#">No dudes en contactarnos.</a>'
    ),
    #logo empresa, navegación, otros links, buscar.
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
    #Banner imagen, textos principales.
    'infotechno-hero' => array(
        //imagenes
        'infotechno-hero-text'      =>array(
            'h6' => 'Diseño de TI & Consultoría',
            'h2' => 'Adáptate a los <br> Avances y Tendencias Tecnológicas',
            'p'  => 'Diseño, administración & servicios de soporte de TI altamente personalizados.',
            'button'  => array(
                'lbl_menu' => 'Más Detalles',
                'href'     => '#',
            )
        ),
    ),
    #Proveedores, tecnologias, etc.
    'brand-logo-slider-area' => array(
        'bo_mostrar' => 0,
        //imagenes, proveedores, etc.
    ),
    #Servicios
    'feature-images-wrapper' => array(
        'section-sub-title'  => 'Nuestros Servicios',
        'heading'            => 'Para su negocio u organización,<br> ofrecemos <span class="text-color-primary">las mejores soluciones de TI.</span>',
        'feature-images__one'=> array(
            array(
                'img'     => 'assets/images/icons/mitech-box-image-style-01-image-01-100x108.png',
                'heading' => 'Diseño de TI',
                'text'    => 'Ofrecemos el diseño de TI más sensible y funcional para empresas y negocios en todo el mundo.',
                'href'    => '#'
            ),
            array(
                'img'     => 'assets/images/icons/mitech-box-image-style-01-image-02-100x108.png',
                'heading' => 'Gestión de TI',
                'text'    => 'Es posible administrar y transformar simultáneamente información de un servidor a otro.',
                'href'    => '#'
            ),
            array(
                'img'     => 'assets/images/icons/mitech-box-image-style-01-image-03-100x108.png',
                'heading' => 'Seguridad de datos',
                'text'    => 'Haga una copia de seguridad de su base de datos, almacénela en un lugar seguro mientras mantiene su accesibilidad.',
                'href'    => '#'
            ),
        ),
        'section-under-heading' => array(
            'text_p' => 'Los desafíos son solo oportunidades disfrazadas.',
            'text_s' => '¡Acepta el desafío!',
            'href'   => '#'
        )
    ),
    #Nuestra Compañia
    'our-experience-wrapper' => array(
        'section-title' => array(
            'section-sub-title' => 'Nuestra Compañia',
            'heading'           => 'We’ve been thriving in <span class="text-color-primary">38 years</span>',
            'text'              => 'Nos especializamos en servicios tecnológicos y relacionados con TI, tales como ingeniería de productos, gestión de garantías, construcción de nube, infraestructura, red, etc. Ponemos un fuerte énfasis en las necesidades de su negocio para encontrar las soluciones que mejor se adapten a su demanda.',
            'sider-title-button-box' => array(
                'lbl_button' => 'Únete a nosotros',
                'href'       => '#'
            )
        ),
        'ht-list' => array(
            array(
                'href'   => '#',
                'marker' => '01',
                'title'  => '¿Cómo ayudamos a tu negocio?'
            ),
            array(
                'href'   => '#',
                'marker' => '02',
                'title'  => '¿Porque deberias elegirnos?'
            ),
            array(
                'href'   => '#',
                'marker' => '03',
                'title'  => '¿En que nos destacamos?'
            ),
        ),
    ),
    'feature-large-images-wrapper' => array(
        'section-title-wrap' => array(
            'section-sub-title'     => 'Contratanos, por qué no?',
            'heading'               => '¿Cómo pretendemos <span class="text-color-primary"> sobresalir?</span>',
        ),
        'box-large-image__wrap' => array(
            array(
                'href'                     => '#',
                'img'                      => 'assets/images/box-image/blog-01-330x330.jpg',
                'heading'                  => 'Sistemas de gestión de creativerse',
                'box-large-image__content' => 'Nuestros expertos técnicos tienen talento para desarrollar <strong> software de gran calidad </strong> en función de las necesidades de los clientes, avances y tendencias tecnológicas.',
            ),
            array(
                'href'                     => '#',
                'img'                      => 'assets/images/box-image/mitech-home-infotechno-box-large-image-02-330x330.jpg',
                'heading'                  => 'Seguridad eficiente en los datos',
                'box-large-image__content' => 'Nuestros expertos técnicos tienen talento para desarrollar <strong> software de gran calidad </strong> en función de las necesidades de los clientes, avances y tendencias tecnológicas.',
            ),
            array(
                'href'                     => '#',
                'img'                      => 'assets/images/box-image/mitech-home-infotechno-box-large-image-03-330x330.jpg',
                'heading'                  => 'Tecnología multifunción confiable',
                'box-large-image__content' => 'Nuestros expertos técnicos tienen talento para desarrollar <strong> software de gran calidad </strong> en función de las necesidades de los clientes, avances y tendencias tecnológicas.',
            ),
        ),
        'section-under-heading' => array(
            'href' => '#',
            'lbl'  => 'Aprenda más sobre cómo trabajamos'
        )
    ),
    #Estadisticas
    'fun-fact-wrapper' => array(
        'bo_mostrar' => 0
    ),
    #Video Anuncio
    'infotechno-video-wrapper' => array(

    ),
    #Proyectos
    'projects-wrapper' => array(
        'section-title-wrap' => array(
            'section-sub-title' => 'Soluciones TI/Proyectos',
            'heading'           => 'Nuestros Proyectos que<span class="text-color-primary">&nbsp;destacamos</span>'
        ),
        'projects-wrap'         => array(
            array(
                'href'            => 'https://creativerse.school.app',
                'img'             => 'assets/images/projects/case-study-01-480x298.jpg',
                'heading'         => 'Creativerse School',
                'post-categories' => 'Cyber Security',
                'text'            => 'At Mitech, we have a holistic and integrated approach towards core modernization to experience technological evolution.',
            ),
            array(
                'href'            => '#',
                'img'             => 'assets/images/projects/case-study-02-480x298.jpg',
                'heading'         => 'Creativerse Risk',
                'post-categories' => 'Cyber Security',
                'text'            => 'The prospects for a company operating in this new market are varied and exciting. The potential…',
            ),
            array(
                'href'            => '#',
                'img'             => 'assets/images/projects/case-study-03-480x298.jpg',
                'heading'         => 'Creativerse Iposs',
                'post-categories' => 'Cyber Security',
                'text'            => 'The prospects for a company operating in this new market are varied and exciting. The potential…',
            ),
        ),
        'section-under-heading' => array(
            'text_p' => 'Los desafíos son solo oportunidades disfrazadas.',
            'text_s' => '¡Acepta el desafío!',
            'href'   => '#'
        )
    ),
    #Testimonios
    'testimonial-slider-area' => array(
        'bo_mostrar' => 0
    ),
    #Acerca de, noticias, tendencias, tecnologias, etc.
    'blog-section-wrapper' => array(

    ),
    #Contacto
    'contact-us-section-wrappaer' => array(

    ),
    #Footer
    'footer-area-wrapper' => array(

    )
);