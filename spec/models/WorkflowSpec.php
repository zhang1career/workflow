<?php

namespace spec\models;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Zhang1career\Workflow\Models\Workflow;

class WorkflowSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Workflow::class);
    }
}
