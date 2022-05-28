<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name'=>'Administrador']);
        $role2=Role::create(['name'=>'Profesor']);

        Permission::create(['name'=>'admin.home', 'description'=>'Ver el tablero'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.users.index', 'description'=>'Ver listado de usuarios'])->syncRoles([$role1]);
        /* Permission::create(['name'=>'admin.users.update', 'description'=>''])->syncRoles([$role1]); */
        Permission::create(['name'=>'admin.users.edit', 'description'=>'Asignar roles a usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.destroy', 'description'=>'Eliminar usuarios'])->syncRoles([$role1]);
        /* Permission::create(['name'=>'admin.users.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.store'])->syncRoles([$role1]); */

        Permission::create(['name'=>'admin.categories.index', 'description'=>'Ver listado de categorías'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.categories.create', 'description'=>'Crear categorías'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.categories.edit', 'description'=>'Editar categorías'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.categories.destroy', 'description'=>'Eliminar materias'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.tags.index', 'description'=>'Ver listado de etiquetas'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.tags.create', 'description'=>'Crear etiquetas'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.tags.edit', 'description'=>'Editar etiquetas'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.tags.destroy', 'description'=>'Eliminar etiquetas'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.posts.index', 'description'=>'Ver listado de asignaciones'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.posts.create', 'description'=>'Crear asignaciones'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.posts.edit', 'description'=>'Editar asignaciones'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.posts.destroy', 'description'=>'Eliminar asignaciones'])->syncRoles([$role1, $role2]);
    }
}
