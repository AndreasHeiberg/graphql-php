<?php

namespace GraphQL\Language\AST;

class ObjectTypeDefinition extends Node implements TypeDefinition
{
    /**
     * @var string
     */
    protected $kind = NodeType::OBJECT_TYPE_DEFINITION;

    /**
     * @var Name
     */
    public $name;

    /**
     * @var NamedType[]
     */
    public $interfaces = [];

    /**
     * @var Directive[]
     */
    public $directives;

    /**
     * @var FieldDefinition[]
     */
    public $fields;
}
