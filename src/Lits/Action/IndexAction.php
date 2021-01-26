<?php

declare(strict_types=1);

namespace Lits\Action;

use Lits\Action;

final class IndexAction extends Action
{
    public function action(): void
    {
        $this->render($this->template());
    }
}
