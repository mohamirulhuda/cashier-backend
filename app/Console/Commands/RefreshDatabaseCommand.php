<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class RefreshDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh all migrations and seeds the default data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('migrate:fresh');
        $this->call('db:seed');
        $this->call('permission:create-role', ['name' => 'developer', 'guard' => 'api']);
        $this->call('permission:create-role', ['name' => 'admin', 'guard' => 'api']);
        $this->call('permission:create-role', ['name' => 'cashier', 'guard' => 'api']);
        $user = User::class;
        $user::find(1)->assignRole('developer');
        $user::find(2)->assignRole('admin');
        // $user::find(3)->assignRole('cashier');
        // $user::find(4)->assignRole('cashier');
        // $user::find(5)->assignRole('cashier');
        $this->info('Operation was successfully executed');
    }
}
