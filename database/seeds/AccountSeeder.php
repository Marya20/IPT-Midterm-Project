<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id'=>1,
                'acct_name'=>'Bagsoling D. Regular Account',
                'init_invest'=>5000,
                'start_date'=>'2020-03-02',
                'remarks'=>'Done with normal transcation'
            ],
            [
                'user_id'=>2,
                'acct_name'=>'Scott H. Regular Account',
                'init_invest'=>12000,
                'start_date'=>'2020-04-09',
                'remarks'=>'Done with normal transcation'
            ],
            [
                'user_id'=>3,
                'acct_name'=>'Homme S. Regular Account',
                'init_invest'=>10900,
                'start_date'=>'2020-04-01',
                'remarks'=>'Done with normal transcation'
            ],
        ];
    
        foreach($data as $acc){
            \App\Account::create($acc);
        }
       
    }
}
