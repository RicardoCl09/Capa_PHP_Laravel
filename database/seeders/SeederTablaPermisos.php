<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            // Roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borral-rol',
            // Blogs
            'ver-blog',
            'crear-blog',
            'editar-blog',
            'borral-blog'
        ];
        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
