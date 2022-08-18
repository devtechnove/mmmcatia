<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionTableSeeder extends Seeder
{
   
       private $permissions ,$secretaria_permissions,$tesoreria_permissions, $super_admin_permissions, $premium_permissions;

 
    public function __construct()
    {
        /*
        set the default permissions
        */
        $this->super_admin_permissions =  [

                                /* Usuarios */
                                'Ver Usuario',
                                'Registrar Usuario',
                                'Editar Usuario',
                                'Eliminar Usuario',
  
                                /* Asignar permisos */
                                'Asignar Permisos',                              
                               
                               
                                'Ver Permisos',
                                'CrearPermisos',
                                'Editar Permisos',
                                'Eliminar Permisos',
                                
                                /* Logins */
                                'Ver Logins',
                                'Ver LogSistema',

                                /* Roles */
                                'Ver Role',
                                'Registrar Role',
                                'Editar Role',
                                'Eliminar Role',

                                 /* Empresas */
                                'Ver  Empresa',
                                'Registrar Empresa',
                                'Editar Empresa',
                                'Eliminar Empresa',

                              ];
             $this->permissions =  [
                               
                                /* Logins */
                                'Ver Logins',
                                'Ver LogSistema',

                                'Ver Usuario',
                                'Registrar Usuario',
                                'Editar Usuario',
                                'Eliminar Usuario',

                            

                              ];


    }

    public function run()
      {
          // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        foreach ($this->super_admin_permissions as $permission)
        {
            Permission::create(['name' => $permission]);
        }

       


        // create the admin role and set all default permissions
        $role = Role::create(['name' => 'Administrador']);
        $role->givePermissionTo($this->permissions);

        // create the user role and set all user permissions
        $role = Role::create(['name' => 'Secretaría']);
        $role->givePermissionTo($this->secretaria_permissions);

        // create the user role and set all user permissions
        $role = Role::create(['name' => 'Tesorería']);
        $role->givePermissionTo($this->tesoreria_permissions);


         // create the admin role and set all default permissions
        $role = Role::create(['name' => 'Super Administrador']);
        $role->givePermissionTo($this->super_admin_permissions);

    }
}
