<?php

declare(strict_types=1);

/*
 * Copyright (c) 2021 Kenji Suzuki
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/kenjis/ci3-to-4-upgrade-helper
 */

namespace Kenjis\CI3Compatible\Database;

class CI_DB extends CI_DB_query_builder
{
    /**
     * Insert ID
     *
     * @return  int
     */
    public function insert_id(): int
    {
        return $this->db->insertID();
    }

    /**
     * Affected Rows
     *
     * @return  int
     */
    public function affected_rows(): int
    {
        return $this->db->affectedRows();
    }

    /**
     * Set DB Prefix
     *
     * @return string
     */
    function set_dbprefix(string $prefix = ''): string
    {
        return $this->db->setPrefix($prefix);
    }

    /**
     * Prepends a database prefix
     *
     * @return string
     */
    function dbprefix(string $table): string
    {
        return $this->db->prefixTable($table);
    }

    /**
     * Protect Identifiers
     *
     * @return string
     */
    function protect_identifiers(string $table, bool $prefixSingle = false): string
    {
        return $this->db->protectIdentifiers($table, $prefixSingle);
    }
}
