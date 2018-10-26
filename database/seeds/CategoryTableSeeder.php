<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert([
            [
                'name' => 'BIỂN BẢNG QUẢNG CÁO',
            ],
            [
                'name' => 'BIỂN LED CÁC LOẠI',
            ],
            [
                'name' => 'IN PHUN: BẠT, DECAL..',
            ],
            [
                'name' => 'IN OFFSET: TỜ RƠI, CARD...',
            ],
            [
                'name' => 'BIỂN CÔNG TY- PHÒNG BAN',
            ],
            [
                'name' => 'CHỮ (ĐỒNG,INOX,TÔN,MICA...)',
            ],
            [
                'name' => 'THẺ TÊN, HUY HIỆU CÀI ÁO',
            ],
            [
                'name' => 'BIỂN CHỨC DANH ĐỂ BÀN'
            ]
        ]);
    }
}
