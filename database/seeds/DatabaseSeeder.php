<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role comes before User seeder here.
        $this->call(RoleTableSeeder::class);
        // User seeder will use the roles above created.
        $this->call(UserTableSeeder::class);

        // see the Guides before the certifications due to FK constraints
        $this->call(GuideTableSeeder::class);
        $this->call(CertificationTableSeeder::class);
        $this->call(CertificationGuideTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(SocialMediaTableSeeder::class);

        $this->call(LogTypesTableSeeder::class);
        $this->call(LogTemplateTableSeeder::class);
        $this->call(RaftingLogsTableSeeder::class);
        $this->call(ClimbingLogsTableSeeder::class);
        $this->call(KayakingLogsTableSeeder::class);
    }
}
