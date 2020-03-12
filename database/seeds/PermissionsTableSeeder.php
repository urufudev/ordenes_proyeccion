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

         //Oficina
         Permission::create([

            'name' => 'Navegar oficina',
            'slug'=> 'offices.index',
            'description' => 'Lista y navega todos los niveles del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de oficina',
            'slug'=> 'offices.show',
            'description' => 'Ver en detalle cada oficina del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de oficina',
            'slug'=> 'offices.create',
            'description' => 'Crear un oficina del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de oficina',
            'slug'=> 'offices.edit',
            'description' => 'Edita cualquier oficina del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar oficina',
            'slug'=> 'offices.destroy',
            'description' => 'Elimina cualquier oficina del sistema',
        
        ]);

        //Cargo
        Permission::create([

            'name' => 'Navegar cargo',
            'slug'=> 'positions.index',
            'description' => 'Lista y navega todos los cargos del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de cargo',
            'slug'=> 'positions.show',
            'description' => 'Ver en detalle cada cargo del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de cargo',
            'slug'=> 'positions.create',
            'description' => 'Crear un cargo del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de cargo',
            'slug'=> 'positions.edit',
            'description' => 'Edita cualquier cargo del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar cargo',
            'slug'=> 'positions.destroy',
            'description' => 'Elimina cualquier cargo del sistema',
        
        ]);

        //Regimen Laboral
        Permission::create([

            'name' => 'Navegar regimen laboral',
            'slug'=> 'laborals.index',
            'description' => 'Lista y navega todos los regimens laborales del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de regimen laboral',
            'slug'=> 'laborals.show',
            'description' => 'Ver en detalle cada regimen laboral del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de regimen laboral',
            'slug'=> 'laborals.create',
            'description' => 'Crear un regimen laboral del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de regimen laboral',
            'slug'=> 'laborals.edit',
            'description' => 'Edita cualquier regimen laboral del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar regimen laboral',
            'slug'=> 'laborals.destroy',
            'description' => 'Elimina cualquier regimen laboral del sistema',
        
        ]);

        //Regimen de Pensiones
        Permission::create([

            'name' => 'Navegar regimen de pensiones',
            'slug'=> 'regimes.index',
            'description' => 'Lista y navega todos los regimens de pensiones del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de regimen de pensiones',
            'slug'=> 'regimes.show',
            'description' => 'Ver en detalle cada regimen de pensiones del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de regimen de pensiones',
            'slug'=> 'regimes.create',
            'description' => 'Crear un regimen de pensiones del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de regimen de pensiones',
            'slug'=> 'regimes.edit',
            'description' => 'Edita cualquier regimen laborarl del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar regimen de pensiones',
            'slug'=> 'regimes.destroy',
            'description' => 'Elimina cualquier regimen de pensiones del sistema',
        
        ]);


        //AFP
        Permission::create([

            'name' => 'Navegar afp',
            'slug'=> 'afps.index',
            'description' => 'Lista y navega todos los afp del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de afp',
            'slug'=> 'afps.show',
            'description' => 'Ver en detalle cada afp del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de afp',
            'slug'=> 'afps.create',
            'description' => 'Crear un afp del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de afp',
            'slug'=> 'afps.edit',
            'description' => 'Edita cualquier afp del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar afp',
            'slug'=> 'afps.destroy',
            'description' => 'Elimina cualquier afp del sistema',
        
        ]);

        //Regimen Remunerativo
        Permission::create([

            'name' => 'Navegar regimen remunerativo',
            'slug'=> 'remuneratives.index',
            'description' => 'Lista y navega todos los regimen remunerativo del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de regimen remunerativo',
            'slug'=> 'remuneratives.show',
            'description' => 'Ver en detalle cada regimen remunerativo del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de regimen remunerativo',
            'slug'=> 'remuneratives.create',
            'description' => 'Crear un regimen remunerativo del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de regimen remunerativo',
            'slug'=> 'remuneratives.edit',
            'description' => 'Edita cualquier regimen remunerativo del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar regimen remunerativo',
            'slug'=> 'remuneratives.destroy',
            'description' => 'Elimina cualquier regimen remunerativo del sistema',
        
        ]);


        //Hora de Trabajo
        Permission::create([

            'name' => 'Navegar hora de trabajo',
            'slug'=> 'workdays.index',
            'description' => 'Lista y navega todos las horas de trabajo del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de hora de trabajo',
            'slug'=> 'workdays.show',
            'description' => 'Ver en detalle cada hora de trabajo del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de hora de trabajo',
            'slug'=> 'workdays.create',
            'description' => 'Crear un hora de trabajo del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de hora de trabajo',
            'slug'=> 'workdays.edit',
            'description' => 'Edita cualquier hora de trabajo del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar hora de trabajo',
            'slug'=> 'workdays.destroy',
            'description' => 'Elimina cualquier hora de trabajo del sistema',
        
        ]);

        //Resoluciones
        Permission::create([

            'name' => 'Navegar resoluciones',
            'slug'=> 'resolutions.index',
            'description' => 'Lista y navega todos las resoluciones del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de resolucion',
            'slug'=> 'resolutions.show',
            'description' => 'Ver en detalle cada resolucion del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de resoluciones',
            'slug'=> 'resolutions.create',
            'description' => 'Crear una resolucion del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de resoluciones',
            'slug'=> 'resolutions.edit',
            'description' => 'Edita cualquier resolucion del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar resoluciones',
            'slug'=> 'resolutions.destroy',
            'description' => 'Elimina cualquier resolucion del sistema',
        
        ]);


        //Interesados
        Permission::create([

            'name' => 'Navegar interesados',
            'slug'=> 'interesteds.index',
            'description' => 'Lista y navega todos las interesados del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de interesado',
            'slug'=> 'interesteds.show',
            'description' => 'Ver en detalle cada interesado del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de interesados',
            'slug'=> 'interesteds.create',
            'description' => 'Crear un interesado del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de interesados',
            'slug'=> 'interesteds.edit',
            'description' => 'Edita cualquier interesado del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar interesados',
            'slug'=> 'interesteds.destroy',
            'description' => 'Elimina cualquier interesado del sistema',
        
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
        Permission::create([

            'name' => 'Imprimir  orden presupuestal',
            'slug'=> 'orders.pdf',
            'description' => 'Imprimir la orden presupuestal.',
        
        ]);

         //Proveido Presupuestal
         Permission::create([

            'name' => 'Navegar proveido presupuestal',
            'slug'=> 'provideds.index',
            'description' => 'Lista y navega todos los proveido presupuestal del sistema',
        
        ]);
        Permission::create([

            'name' => 'Ver detalle de proveido presupuestal',
            'slug'=> 'provideds.show',
            'description' => 'Ver en detalle cada proveido presupuestal del sistema',
        
        ]);
        Permission::create([

            'name' => 'Creacion de proveido presupuestal',
            'slug'=> 'provideds.create',
            'description' => 'Crear un proveido presupuestal del sistema',
        
        ]);
        Permission::create([

            'name' => 'Edicion de proveido presupuestal',
            'slug'=> 'provideds.edit',
            'description' => 'Edita cualquier proveido presupuestal del sistema',
        
        ]);
        Permission::create([

            'name' => 'Eliminar proveido presupuestal',
            'slug'=> 'provideds.destroy',
            'description' => 'Elimina cualquier proveido presupuestal del sistema',
        
        ]);
        Permission::create([

            'name' => 'Imprimir  proveido presupuestal',
            'slug'=> 'provideds.pdf',
            'description' => 'Imprimir proveido presupuestal.',
        
        ]);
    }
}
