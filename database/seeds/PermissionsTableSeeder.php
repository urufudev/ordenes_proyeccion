<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([

            'name' => 'Navegar usuarios',
            'slug'=> 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de usuarios',
            'slug'=> 'users.show',
            'description' => 'Ver en detalle cada usuario del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de usuarios',
            'slug'=> 'users.create',
            'description' => 'Crear un usuario del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de usuarios',
            'slug'=> 'users.edit',
            'description' => 'Edita cualquier dato de un usuario del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar usuarios',
            'slug'=> 'users.destroy',
            'description' => 'Elimina cualquier usuario del sistema',
        
        ]);

        //Roles
        Permission::create([

            'name' => 'Navegar roles',
            'slug'=> 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de rol',
            'slug'=> 'roles.show',
            'description' => 'Ver en detalle cada rol del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de rol',
            'slug'=> 'roles.create',
            'description' => 'Crear un rol del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de roles',
            'slug'=> 'roles.edit',
            'description' => 'Edita cualquier dato de un usuario del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar rol',
            'slug'=> 'roles.destroy',
            'description' => 'Elimina cualquier rol del sistema',
        
        ]);

        //Años
        Permission::create([

            'name' => 'Navegar años',
            'slug'=> 'years.index',
            'description' => 'Lista y navega todos los años del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de años',
            'slug'=> 'years.show',
            'description' => 'Ver en detalle cada año del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de años',
            'slug'=> 'years.create',
            'description' => 'Crear un año del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de año',
            'slug'=> 'years.edit',
            'description' => 'Edita cualquier año del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar año',
            'slug'=> 'years.destroy',
            'description' => 'Elimina cualquier año del sistema',
        
        ]);

         //Gestiones
         Permission::create([

            'name' => 'Navegar gestiones',
            'slug'=> 'gestions.index',
            'description' => 'Lista y navega todas los gestiones del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de gestiones',
            'slug'=> 'gestions.show',
            'description' => 'Ver en detalle cada gestion del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de gestiones',
            'slug'=> 'gestions.create',
            'description' => 'Crear un gestiones del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de gestiones',
            'slug'=> 'gestions.edit',
            'description' => 'Edita cualquier gestion del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar gestiones',
            'slug'=> 'gestions.destroy',
            'description' => 'Elimina cualquier gestion del sistema',
        
        ]);

        //Instituciones
        Permission::create([

            'name' => 'Navegar instituciones',
            'slug'=> 'institutions.index',
            'description' => 'Lista y navega todas las instituciones del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de instituciones',
            'slug'=> 'institutions.show',
            'description' => 'Ver en detalle cada institucion del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de instituciones',
            'slug'=> 'institutions.create',
            'description' => 'Crear un instituciones del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de instituciones',
            'slug'=> 'institutions.edit',
            'description' => 'Edita cualquier institucion del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar instituciones',
            'slug'=> 'institutions.destroy',
            'description' => 'Elimina cualquier gestion del sistema',
        
        ]);

        //Nivel
        Permission::create([

            'name' => 'Navegar nivel',
            'slug'=> 'levels.index',
            'description' => 'Lista y navega todos los niveles del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de nivel',
            'slug'=> 'levels.show',
            'description' => 'Ver en detalle cada nivel del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de nivel',
            'slug'=> 'levels.create',
            'description' => 'Crear un nivel del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de nivel',
            'slug'=> 'levels.edit',
            'description' => 'Edita cualquier nivel del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar nivel',
            'slug'=> 'levels.destroy',
            'description' => 'Elimina cualquier nivel del sistema',
        
        ]);

        //Ordenes
        Permission::create([

            'name' => 'Navegar ordenes de proyeccion',
            'slug'=> 'orders.index',
            'description' => 'Lista y navega todas las ordenes de proyeccion del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de ordenes de proyeccion',
            'slug'=> 'orders.show',
            'description' => 'Ver en detalle cada ordenes de proyeccion del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de ordenes de proyeccion',
            'slug'=> 'orders.create',
            'description' => 'Crear una orden de proyeccion del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de ordenes de proyeccion',
            'slug'=> 'orders.edit',
            'description' => 'Edita cualquier orden de proyeccion del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar ordenes de proyeccion',
            'slug'=> 'orders.destroy',
            'description' => 'Elimina cualquier orden de proyeccion del sistema',
        
        ]);
    }
}
