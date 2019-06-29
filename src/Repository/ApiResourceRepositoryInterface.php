<?php

namespace Hessnatur\SimpleRestCRUDBundle\Repository;

use Doctrine\ORM\QueryBuilder;

/**
 * @author Felix Niedballa <schreib@felixniedballa.de>
 */
interface ApiResourceRepositoryInterface
{
    /**
     * @return array|string[]
     */
    public static function getSortableFields(): array;

    /**
     * @return string
     */
    public static function getStandardSortField(): string;

    /**
     * @return string
     */
    public static function getStandardSortDirection(): string;

    /**
     * @param      $alias
     * @param null $indexBy
     *
     * @return QueryBuilder
     */
    public function createQueryBuilder($alias, $indexBy = null);
}
