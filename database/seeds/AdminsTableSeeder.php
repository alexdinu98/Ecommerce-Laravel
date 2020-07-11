<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            ['id'=>1, 'name'=>'admin','type'=>'admin','mobile'=>'0799468601','email'=>'admin@admin.com',
                'password'=>'$2y$10$5UE8StNBgTTyXkPDZv3elOP6RPobq6LvAxp1f1o6rdcIP3.HAfE1e', 'image'=>'','status'=>1],
            
        ];
        foreach ($adminRecords as $key => $record){
            \App\Admin::create($record);
        }
    }
}
