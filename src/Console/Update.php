<?php declare(strict_types=1);

/**
 * User: bubba
 * Date: 2019-02-02
 * Time: 16:24
 */

namespace STS\Bref\Bridge\Console;

use Illuminate\Console\Command;
use STS\Bref\Bridge\Events\UpdateRequested;

class Update extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'bref:update-lambda-code';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the code on lambda.';

    public function handle(): int
    {
        event(new UpdateRequested);
        return 0;
    }
}
