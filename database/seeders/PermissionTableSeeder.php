<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'iklan-properti-list',
            'iklan-properti-create',
            'iklan-properti-edit',
            'iklan-properti-delete',
            'iklan-premium-list',
            'iklan-premium-create',
            'iklan-premium-edit',
            'iklan-premium-delete',
            'properti-dijual-list',
            'properti-dijual-create',
            'properti-dijual-edit',
            'properti-dijual-delete',
            'properti-disewakan-list',
            'properti-disewakan-create',
            'properti-disewakan-edit',
            'properti-disewakan-delete', 
            'post-list',
            'post-create',
            'post-edit',
            'post-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
         ];
      
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         } 
    }
}
