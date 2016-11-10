<?php

namespace GraphQL\Language\AST;

class InputObjectTypeDefinition extends Node implements TypeDefinition
{
    /**
     * @var string
     */
    protected $kind = Node::INPUT_OBJECT_TYPE_DEFINITION;

    /**
     * @var Name
     */
    public $name;

    /**
     * @var Directive[]
     */
    public $directives;

    /**
     * @var InputValueDefinition[]
     */
    public $fields;
}
