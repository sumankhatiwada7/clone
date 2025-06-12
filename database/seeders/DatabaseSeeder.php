<?php


namespace Database\Seeders;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com'
        ]);

        //Seed categories
       $categories = [
           'Technology', 'Health', 'Lifestyle', 'Travel', 'Food',
            'Education', 'Finance', 'Entertainment', 'Sports', 'Fashion'
        ];

       foreach ($categories as $cat) {
           Category::firstOrCreate(['name' => $cat]);
        }

       // Seed posts
       Post::factory(50)->create();
    }
}