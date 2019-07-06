<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
    		'nama'          => 'Neny Lukitasari',
    		'nip'           => '5115100018',
    		'role'          => '1',
    	]);
        // User::create([
        //     'nama'          => 'Ifa Nuraisyah, A.Md.',
        //     'nip'           => '',
        //     'role'          => '1',
        // ]);
        // User::create([
        //     'nama'          => 'Ir. Mutiah Salamah Chamid, M.Kes.',
        //     'nip'           => '',
        //     'role'          => '2',
        // ]);
        // User::create([
        //     'nama'          => 'Ir.Tony Bambang Musriyadi, PGDip',
        //     'nip'           => '',
        //     'role'          => '2',
        // ]);
        // User::create([
        //     'nama'          => 'Ir. Yusuf Kaelani, MSc.E.',
        //     'nip'           => '',
        //     'role'          => '2',
        // ]);
        // User::create([
        //     'nama'          => 'Rena Rosyiardani,SE.Ak.',
        //     'nip'           => '',
        //     'role'          => '2',
        // ]);
        // User::create([
        //     'nama'          => 'Muchammad Nurif, SE.MT',
        //     'nip'           => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Dra. Farida Agustini Wijayati, MS',
        //     'nip'           => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Dra. Harmami, MS',
        //     'nip'           => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Ir. Hesty Anita Kurniawati, MSc',
        //     'nip'           => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Drs. Mahmud Mustain,MSc.Ph.D',
        //     'nip'           => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Sarwosri,S.Kom.MT',
        //     'nip'           => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Ir. Zulkifli, MSc',
        //     'nip'           => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Ir. Moh. Farid, DEA',
        //     'nip'           => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Dra. Ita Ulfin, Msi',
        //     'nip'           => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Ir. Atiek Moesriati, M.Kes.',
        //     'nip'           => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Dr.Ir. Kuswandi, DEA',
        //     'nip'           => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Ridho Bayuaji,ST.MT.PhD.',
        //     'nip'           => '',
        //     'role'          => '3',
        // ]);
    }
}
