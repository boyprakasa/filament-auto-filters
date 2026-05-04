<?php

namespace PtPlugins\FilamentAutoFilters\Enums;

enum FilterType: string
{
    case Direct = 'direct';
    case Relationship = 'relationship';
    case Json = 'json';
}
