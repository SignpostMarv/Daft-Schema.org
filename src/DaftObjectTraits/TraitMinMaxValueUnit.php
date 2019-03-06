<?php
/**
* @author SignpostMarv
*/
declare(strict_types=1);

namespace SignpostMarv\DaftObject\SchemaOrg\DaftObjectTraits;

use SignpostMarv\DaftObject\TypeUtilities;

trait TraitMinMaxValueUnit
{
    use DaftObjectTrait;
    use HasMinMaxValue;
    use HasUnitCodeText;
}
