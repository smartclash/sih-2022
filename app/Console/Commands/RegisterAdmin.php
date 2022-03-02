<?php

namespace App\Console\Commands;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Validation\Rules\Password;

class RegisterAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'new:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add new admin to the system';

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
        $name = $this->ask('Name of the user');
        $email = $this->ask('Email of the user');
        $password = $this->secret('Password for the user');

        validator([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ], [
            'name' => 'required',
            'email' => ['required', 'unique:users'],
            'password' => ['required', Password::defaults()]
        ])->validate();

        $user = new User;

        $user->name = $name;
        $user->email = $email;
        $user->password = \Hash::make($password);
        $user->role = Role::Admin;

        $user->saveOrFail();

        return 0;
    }
}
