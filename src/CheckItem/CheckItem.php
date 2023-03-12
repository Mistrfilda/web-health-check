<?php

declare(strict_types = 1);


namespace App\CheckItem;


use App\Doctrine\Entity;
use App\Doctrine\SimpleUuid;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table('app_admin')]
class CheckItem implements Entity
{
	use SimpleUuid;

	#[ORM\Column(type: Types::STRING)]
	private string $urlToCheck;

	#[ORM\Column(type: Types::INTEGER)]
	private int|null $expectedResponseStatus;
}
