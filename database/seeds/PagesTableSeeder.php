<?php

use App\Page;
use App\Block;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $page = Page::create([
            'name'      => 'Landingpage Appxi',
            'slug'      => 'landingpage-appxi',
            'description' => 'Pagina de Destino',
            'direction' => 'welcome',
            'user_id' => 1,
            'details'   => json_encode([
                'title' => [
                    'type' => 'text',
                    'name' => 'title',
                    'label' => 'Titulo',
                    'value' => 'Empresa de desarrollo de software & hardware',
                    'width' => 6
                ],
                'image1' => [
                    'type' => 'image',
                    'name' => 'image1',
                    'label' => 'Imagen (600x670)',
                    'value' => 'myimage.png',
                    'width' => 6
                ],
                'button_text1' => [
                    'type' => 'text',
                    'name' => 'button_text1',
                    'label' => 'Texto Boton #1',
                    'value' => 'Consular',
                    'width' => 6
                ],
                'button_link1' => [
                    'type' => 'text',
                    'name' => 'button_link1',
                    'label' => 'Link Text #1',
                    'value' => '#',
                    'width' => 6
                ],
                'button_text2' => [
                    'type' => 'text',
                    'name' => 'button_text2',
                    'label' => 'Texto Boton #2',
                    'value' => 'Ver Productos',
                    'width' => 6
                ],
                'button_link2' => [
                    'type' => 'text',
                    'name' => 'button_link2',
                    'label' => 'Link Text #2',
                    'value' => '#productos',
                    'width' => 6
                ],

                'description_data' => [
                    'type' => 'rich_text_box',
                    'name' => 'description_data',
                    'label' => 'Descripcion',
                    'value' => 'creamos software a medida del cliente, incluyendo aplicaciones de negocios, integraci&oacute;n de sistemas existentes, programaci&oacute;n web, dispositivos m&oacute;viles y bases de datos utilizando herramientas de desarrollo actuales en el mercado.',
                    'width' => 12
                ]
            ])
        ]);

         //----------------------------------------------------------------------
         $page = Page::create([
            'name'        =>  'politica privacidad',
            'slug'        =>  'politica-privacidad',
            'user_id'     =>  1,
            'direction'   =>  'pages.generica',
            'description' =>  'Pagina de politicas y privacidad de HiStream.',
            'details'     =>   json_encode([
                'contenido1' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'contenido1',
                    'label'  => 'Parrafo',
                    'value'  => 'Soy un text',
                    'width'  => 12
                ],
            ])
        ]);
        $count=1;
        Block::create([
            'name'        => 'body',
            'title'       => 'Blocke Editor HTML',
            'description' => 'Blocke Generico para Editar el HTML',
            'page_id'     => $page->id,
            'position'    => $count++,
            'type'        => 'dinamyc-data',
            'details'     => json_encode([
                'body' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'body',
                    'label'  => 'Editor HTML',
                    'value'  => null,
                    'width'  => 12
                ]
            ])
        ]);


        //-------------------------------------------------------------
        $page = Page::create([
            'name'        =>  'terminos condiones',
            'slug'        =>  'terminos-condiones',
            'user_id'     =>  1,
            'direction'   =>  'pages.generica',
            'description' =>  'Pagina de terminos y condiones de HiStream.',
            'details'     =>   json_encode([
                'contenido' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'contenido',
                    'label'  => 'Parrafo',
                    'value'  => 'Soy un text',
                    'width'  => 12
                ],
            ])
        ]);
        $count=1;
        Block::create([
            'name'        => 'body',
            'title'       => 'Blocke Editor HTML',
            'description' => 'Blocke Generico para Editar el HTML',
            'page_id'     => $page->id,
            'position'    => $count++,
            'type'        => 'dinamyc-data',
            'details'     => json_encode([
                'body' => [
                    'type'   => 'rich_text_box',
                    'name'   => 'body',
                    'label'  => 'Editor HTML',
                    'value'  => null,
                    'width'  => 12
                ]
            ])
        ]);
    }
}
