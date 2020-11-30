<?php

use Illuminate\Database\Seeder;

class BaivietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('baiviets')->insert([
            ['ten' => 'Trà sữa hoa đậu biếc','chude_id'=>'1','vungmien_id'=>'1','nguyenlieu'=>'M:muỗng canh - m: muỗng cafe, Hoa đậu biếc khô	10 hoa, Trà Sữa Royal "Blendy"	2 gói ,Soda	1 lon,Đá bi,Gia vị: đường','soche'=>'– Hoa đậu biếc ngâm với 50ml nước nóng, lọc lấy nước cốt – Pha 2 gói trà sữa Royal “Blendy” với 60ml nước sôi, khuấy tan, để nguội.','thuchien'=>'– Cho đá vào ly, rót trà sữa vào, rót soda lên trên, cuối cùng cho cốt hoa đậu biếc lên trên cùng. Trang trí hoa đậu biếc','cachdung'=>'– Khuấy đều và thưởng thức'],
        ]);
    }
}
