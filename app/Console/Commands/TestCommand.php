<?php

namespace App\Console\Commands;

use App\Models\Minion;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Builder;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $a = Minion::whereHas('keywords', function (Builder $query) {
            $query->where('name', 'Battlecry');
        })
            ->where('tier', 1)
            ->count();

        $b = Minion::where('tier', 1)
            ->count();

        \Log::info($a);
        \Log::info($b);
    }
}
