<?php

namespace LaraUtil\AdminUser\Commands;

use Illuminate\Console\Command;

class AdminUserCommand extends Command
{
    public $signature = 'admin-user';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
