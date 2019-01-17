<?php
/**
 * This file is part of event-engine/php-engine.
 * (c) 2018-2019 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace EventEngineExample\FunctionalFlavour\Process;

use EventEngineExample\FunctionalFlavour\Util\ApplyPayload;

class UserState
{
    use ApplyPayload;

    public $userId;
    public $username;
    public $email;
    public $failed;
}