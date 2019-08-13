<?php

use Illuminate\Database\Seeder;

class UsuarioAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert(
            ['usuario' => 'admin', 
            
            'password' => bcrypt('123'),
            'nombre'=>'Administrador'
            ]);

            DB::table('usuario')->insert(
                ['usuario' => 'juan', 
                
                'password' => bcrypt('123'),
                'nombre'=>'Juan'
                ]);

            DB::tale('usuario_rol')->insert(
                ['rol_id'=>1,
                'usuario_id'=>1,
                'estado'=>1
                ]);
                DB::tale('usuario_rol')->insert(
                    ['rol_id'=>2,
                    'usuario_id'=>2,
                    'estado'=>1
                    ]);
    }
}
