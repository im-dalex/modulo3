<section class="container">
            <div class="bg-primary text-center text-white p-3 m-2">
                <h2>Lista de Arrays</h1>
            </div>

            <div class="row container">

            <?php
                $array = [
                    [
                            'Nombre' => 'Mauro',
                            'Apellido' => 'Chojrin',
                            'Correo' => 'mauro.chojrin@leewayweb.com',
                    ],
                    [
                            'Nombre' => 'Alberto',
                            'Apellido' => 'Loffatti',
                            'Correo' => 'aloffatti@hotmail.com',
                    ],
                    [
                            'Nombre' => 'Foo',
                            'Apellido' => 'Bar',
                            'Correo' => 'foo_bar@example.com',
                    ]
                ];

            ?>

            <?php 
                foreach($array as $element){
                    echo '<div class="card text-white bg-info mb-3" style="max-width: 18rem;">';    
                    foreach($element as $item){
                        echo '<div class="card-header">'.$item.'</div>';
                       
                    }
                };
            ?>
            
        </section>