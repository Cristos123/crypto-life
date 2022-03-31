<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;

class RemoveUserAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:remove {email : The email address of the user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove a specific user from admin.';

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
        $email = $this->argument('email');
        $pass = $this->secret('Enter passphrase for super admin access');

        // while ($pass !== 'pAsSwOrD') {
        //     $this->error('Wrong passphrase!');
        //     $pass = $this->secret('Enter passphrase for super admin access');
        // }

        $role = Role::where('name', 'admin')->first();
        $user = User::where('email', $email)->first();

        if (is_null($user)) {
            return $this->error('User with specified email address does not exist.');
        }

        $responses = array();

        if ($user->hasRole(['admin'])) { //hasAnyRoles([])
            $user->removeRole($role);
        } else {
            $responses[] = "User is not an admin!";
        }

        if (count($responses) > 0) {
            foreach ($responses as $response) {
                $this->error($response);
            }

            return 0;
        }

        $this->info("User (".$email.") has now been stripped of admin priviledges");
    }
}
