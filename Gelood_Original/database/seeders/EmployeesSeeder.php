<?php

namespace Database\Seeders;

use App\Models\Employees;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employees::factory(5)->create();

        Employees::create([
            'id_employees' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '731ef6df-6171-33fd-bd05-93cd76db2cdd',
            'name_employees' => '(Admin) Aebil Taskari Rusydi',
            'email_employees' => 'aebiltaskari@pmi.co.id',
            'password_employees' => Hash::make(12345),
            'contact_employees' => '085256433390',
            'address_employees' => 'Jln A.Lamaggarung, Makassar'
        ]);

        Employees::create([
            'id_employees' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '2217c28f-d59c-3ab1-860c-d2cce27b2a9f',
            'name_employees' => '(Admin) Diyas Yakluna Baihaqi',
            'email_employees' => 'diyasyakluna@pmi.co.id',
            'password_employees' => Hash::make(12345),
            'contact_employees' => '087772934259',
            'address_employees' => 'Jln. Isekai timur, Medan'
        ]);

        Employees::create([
            'id_employees' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '0264db2d-0f84-32ef-b732-d56d7b3d0493',
            'name_employees' => '(Admin) Diandra Ridha Nurani',
            'email_employees' => 'diandraridha@pmi.co.id',
            'password_employees' => Hash::make(12345),
            'contact_employees' => '082145198847',
            'address_employees' => 'Jl bukan jokowi, Bandung'
        ]);

        Employees::create([
            'id_employees' => Uuid::uuid4()->toString() . "\n",
            'id_institutions' => '9e33b53c-d6e2-3b2b-9335-0c6b626981d3',
            'name_employees' => '(Admin) Magdalena Edelways Enjelina Pasaribu',
            'email_employees' => 'magdalnapasaribu@pmi.co.id',
            'password_employees' => Hash::make(12345),
            'contact_employees' => '081286226512',
            'address_employees' => 'Jln. aster ter, Batak'
        ]);
    }
}
