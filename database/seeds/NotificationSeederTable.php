<?php

use Illuminate\Database\Seeder;

class NotificationSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Notification::class, 25)->create());
    }
}
