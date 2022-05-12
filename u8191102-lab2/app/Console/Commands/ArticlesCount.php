<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tag;

class ArticlesCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = ' tag:count {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'return the number of linked articles to tag with id {id}';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id = $this->argument('id');
        $size = Tag::find($id)->articles->count();
        $this->info('The number of articles linked to the tag with an ' . $id . ' = ' . $size);
    }
}
