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
    		'username'      => '5115100018',
    		'role'          => '1',
    	]);
        User::create([
            'nama'          => 'M. Azka Yasin',
            'username'      => '5115100038',
            'role'          => '2',
        ]);
        User::create([
            'nama'          => 'Dwi Irsalina',
            'username'      => '5115100004',
            'role'          => '3',
        ]);

        // User::create([
        //     'nama'          => 'Ifa Nuraisyah, A.Md.',
        //     'username'      => '',
        //     'role'          => '1',
        // ]);
        // User::create([
        //     'nama'          => 'Ir. Mutiah Salamah Chamid, M.Kes.',
        //     'username'      => '',
        //     'role'          => '2',
        // ]);
        // User::create([
        //     'nama'          => 'Ir.Tony Bambang Musriyadi, PGDip',
        //     'username'      => '',
        //     'role'          => '2',
        // ]);
        // User::create([
        //     'nama'          => 'Ir. Yusuf Kaelani, MSc.E.',
        //     'username'      => '',
        //     'role'          => '2',
        // ]);
        // User::create([
        //     'nama'          => 'Rena Rosyiardani,SE.Ak.',
        //     'username'      => '',
        //     'role'          => '2',
        // ]);
        // User::create([
        //     'nama'          => 'Muchammad Nurif, SE.MT',
        //     'username'      => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Dra. Farida Agustini Wijayati, MS',
        //     'username'      => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Dra. Harmami, MS',
        //     'username'      => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Ir. Hesty Anita Kurniawati, MSc',
        //     'username'      => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Drs. Mahmud Mustain,MSc.Ph.D',
        //     'username'      => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Sarwosri,S.Kom.MT',
        //     'username'      => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Ir. Zulkifli, MSc',
        //     'username'      => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Ir. Moh. Farid, DEA',
        //     'username'      => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Dra. Ita Ulfin, Msi',
        //     'username'      => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Ir. Atiek Moesriati, M.Kes.',
        //     'username'      => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Dr.Ir. Kuswandi, DEA',
        //     'username'      => '',
        //     'role'          => '3',
        // ]);
        // User::create([
        //     'nama'          => 'Ridho Bayuaji,ST.MT.PhD.',
        //     'username'      => '',
        //     'role'          => '3',
        // ]);

    }
}
