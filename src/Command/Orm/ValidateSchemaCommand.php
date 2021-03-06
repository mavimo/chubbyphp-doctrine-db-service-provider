<?php

declare(strict_types=1);

namespace Chubbyphp\DoctrineDbServiceProvider\Command\Orm;

use Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand as BaseValidateSchemaCommand;

final class ValidateSchemaCommand extends BaseValidateSchemaCommand
{
    use DoctrineOrmCommandTrait;
}
