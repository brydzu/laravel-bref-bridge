<?php declare(strict_types=1);

/**
 * User: bubba
 * Date: 2019-01-31
 * Time: 16:27
 */

namespace STS\Bref\Bridge\Console;

use Illuminate\Console\Command;
use STS\Bref\Bridge\Events\DeploymentRequested;

class Deploy extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'bref:deploy';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Package (zip) the application in preparation for deployment, upload it to S3, and generate the .stack.yaml';

    public function handle(): int
    {
        event(new DeploymentRequested);
        return 0;
    }
}
