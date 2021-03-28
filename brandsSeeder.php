<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class brandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Acura',
            'logo' => 'acura.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Alfa romeo',
            'logo' => 'alfa_romeo.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'AMC',
            'logo' => 'amc.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Aston Martin',
            'logo' => 'aston_martin.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Audi',
            'logo' => 'audi.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Avanti',
            'logo' => 'avanti.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Bentley',
            'logo' => 'bentley.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'BMW',
            'logo' => 'bmw.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Buick',
            'logo' => 'buick.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Cadillac',
            'logo' => 'cadillac.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Chevrolet',
            'logo' => 'chevrolet.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Chrysler',
            'logo' => 'chrysler.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Daewoo',
            'logo' => 'daewoo.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Daihatsu',
            'logo' => 'daihatsu.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Datsun',
            'logo' => 'datsun.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'DeLorean',
            'logo' => 'delorean.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Dodge',
            'logo' => 'dodge.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Eagle',
            'logo' => 'eagle.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Ferrari',
            'logo' => 'ferrari.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'FIAT',
            'logo' => 'fiat.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Fisker',
            'logo' => 'fisker.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Ford',
            'logo' => 'ford.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Freightliner',
            'logo' => 'freightliner.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Geo',
            'logo' => 'geo.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'GMC',
            'logo' => 'gmc.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Honda',
            'logo' => 'honda.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'HUMMER',
            'logo' => 'hummer.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Hyundai',
            'logo' => 'hyundai.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Infiniti',
            'logo' => 'infiniti.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Isuzu',
            'logo' => 'isuzu.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Jaguar',
            'logo' => 'jaguar.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Jeep',
            'logo' => 'jeep.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Kia',
            'logo' => 'kia.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Lamborghini',
            'logo' => 'lamborghini.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Lancia',
            'logo' => 'lancia.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Land Rover',
            'logo' => 'lexus.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Lexus',
            'logo' => 'lexus.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Lincoln',
            'logo' => 'lincoln.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Lotus',
            'logo' => 'lotus.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Maserati',
            'logo' => 'maserati.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Maybach',
            'logo' => 'maybach.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Mazda',
            'logo' => 'mazda.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'McLaren',
            'logo' => 'mclaren.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Mercedes-Benz',
            'logo' => 'mercedes.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Mercury',
            'logo' => 'mercury.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Merkur',
            'logo' => 'merkur.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'MINI',
            'logo' => 'mini.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Mitsubishi',
            'logo' => 'mitsubishi.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Nissan',
            'logo' => 'nissan.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Oldsmobile',
            'logo' => 'oldsmobile.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Peugeot',
            'logo' => 'peugeot.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Plymouth',
            'logo' => 'plymouth.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Pontiac',
            'logo' => 'pontiac.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Porsche',
            'logo' => 'porsche.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'RAM',
            'logo' => 'ram.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Renault',
            'logo' => 'renault.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Rolls-Royce',
            'logo' => 'rolls.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Saab',
            'logo' => 'saab.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Saturn',
            'logo' => 'saturn.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Scion',
            'logo' => 'scion.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Smart',
            'logo' => 'smart.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'SRT',
            'logo' => 'srt.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Sterling',
            'logo' => 'sterling.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Subaru',
            'logo' => 'subaru.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Suzuki',
            'logo' => 'suzuki.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Tesla',
            'logo' => 'tesla.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Toyota',
            'logo' => 'toyota.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Triumph',
            'logo' => 'triumph.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Volkswagen',
            'logo' => 'volkswagen.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Volvo',
            'logo' => 'volvo.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
        DB::table('brands')->insert([
            'name' => 'Yugo',
            'logo' => 'yugo.svg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'status' => 'A'
        ]);
    }
}
