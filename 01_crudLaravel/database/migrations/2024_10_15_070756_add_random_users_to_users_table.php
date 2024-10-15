<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'email_verified_at' => now(),
                'password' => 'password123',
                'remember_token' => bin2hex(random_bytes(10)),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane.smith@example.com',
                'email_verified_at' => now(),
                'password' => 'password456',
                'remember_token' => bin2hex(random_bytes(10)),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Alice',
                'last_name' => 'Johnson',
                'email' => 'alice.johnson@example.com',
                'email_verified_at' => now(),
                'password' => 'password789',
                'remember_token' => bin2hex(random_bytes(10)),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('users')->whereIn('email', [
            'john.doe@example.com',
            'jane.smith@example.com',
            'alice.johnson@example.com',
        ])->delete();
    }
};
