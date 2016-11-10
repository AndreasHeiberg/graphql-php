<?php

namespace GraphQL\Language\AST;

class FragmentDefinition extends Node implements Definition, HasSelectionSet
{
    protected $kind = Node::FRAGMENT_DEFINITION;

    /**
     * @var Name
     */
    public $name;

    /**
     * @var NamedType
     */
    public $typeCondition;

    /**
     * @var array<Directive>
     */
    public $directives;

    /**
     * @var SelectionSet
     */
    public $selectionSet;
}
