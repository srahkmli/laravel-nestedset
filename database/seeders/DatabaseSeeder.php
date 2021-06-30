 <?php

    use App\Models\Internet;
    use Database\Seeders\User;
    use Faker\Factory;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {

            $this->call(User::class);

        }
    }
