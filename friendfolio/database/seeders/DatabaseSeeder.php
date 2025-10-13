<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Note;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $testUser = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Создадим заметки для каждого пользователя
        User::all()->each(function (User $user): void {
            Note::factory()->for($user)->count(3)->create();
        });

        // Пара дополнительных заметок для тестового пользователя
        Note::factory()->for($testUser)->count(2)->create();
    }
}
