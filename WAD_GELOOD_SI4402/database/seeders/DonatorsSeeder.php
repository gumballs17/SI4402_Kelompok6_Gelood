<?php

namespace Database\Seeders;

use App\Models\Donators;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class DonatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donators::factory(5)->create();

        Donators::create([
            'id_donators' => Uuid::uuid4()->toString() . "\n",
            'name_donators' => 'Aebil Taskari Rusydi',
            'email_donators' => 'aebiltaskari@gmail.com',
            'password_donators' => Hash::make(12345),
            'gender_donators' => 'male',
            'blood_type_donators' => 'O',
            'rhesus_type_donators' => 'negative',
            'contact_donators' => '085608845319',
            'address_donators' => 'Jl.Kediri Raya Weeh, Jawa Timur',
            'point_donators' => mt_rand(0, 100)
        ]);

        Donators::create([
            'id_donators' => Uuid::uuid4()->toString() . "\n",
            'name_donators' => 'Diyas Yakluna Baihaqi',
            'email_donators' => 'diyasyakluna@gmail.com',
            'password_donators' => Hash::make(12345),
            'gender_donators' => 'male',
            'blood_type_donators' => 'A',
            'rhesus_type_donators' => 'negative',
            'contact_donators' => '087772934259',
            'address_donators' => 'Jln. Isekai, mantep mantep aselole jos jos jos',
            'point_donators' => mt_rand(0, 100)
        ]);

        Donators::create([
            'id_donators' => Uuid::uuid4()->toString() . "\n",
            'name_donators' => 'Diandra Ridha Nurani',
            'email_donators' => 'diandraridha@gmail.com',
            'password_donators' => Hash::make(12345),
            'gender_donators' => 'male',
            'blood_type_donators' => 'A',
            'rhesus_type_donators' => 'negative',
            'contact_donators' => '082145198847',
            'address_donators' => 'Jl bukan jokowi no 69 kyoto, jepang',
            'point_donators' => mt_rand(0, 100)
        ]);

        Donators::create([
            'id_donators' => Uuid::uuid4()->toString() . "\n",
            'name_donators' => 'Magdalena Edelways Enjelina Pasaribu',
            'email_donators' => 'magdalnapasaribu@gmail.com',
            'password_donators' => Hash::make(12345),
            'gender_donators' => 'male',
            'blood_type_donators' => 'B',
            'rhesus_type_donators' => 'negative',
            'contact_donators' => '081286226512',
            'address_donators' => 'Jl. Aster, Kab. Tokyo - Japan',
            'point_donators' => mt_rand(0, 100)
        ]);
    }
}
