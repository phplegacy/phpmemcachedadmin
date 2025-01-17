<?php
/**
 * Copyright 2010 Cyrille Mahieux
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations
 * under the License.
 *
 * ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°>
 *
 * Interface of communication to MemCache Server
 *
 * @author elijaa@free.fr
 *
 * @since 20/03/2010
 */

namespace App\Library\Command;

interface CommandInterface
{
    /**
     * Constructor
     */
    public function __construct();

    /**
     * Send stats command to server
     * Return the result if successful or false otherwise
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     *
     * @return array|bool
     */
    public function stats($server, $port);

    /**
     * Send stats settings command to server
     * Return the result if successful or false otherwise
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     *
     * @return array|bool
     */
    public function settings($server, $port);

    /**
     * Retrieve slabs stats
     * Return the result if successful or false otherwise
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     *
     * @return array|bool
     */
    public function slabs($server, $port);

    /**
     * Retrieve items from a slabs
     * Return the result if successful or false otherwise
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param int    $slab   Slab ID
     *
     * @return array|bool
     */
    public function items($server, $port, $slab);

    /**
     * Send get command to server to retrieve an item
     * Return the result
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param string $key    Key to retrieve
     *
     * @return string
     */
    public function get($server, $port, $key);

    /**
     * Set an item
     * Return the result
     *
     * @param string $server   Hostname
     * @param int    $port     Hostname Port
     * @param string $key      Key to store
     * @param mixed  $data     Data to store
     * @param int    $duration Duration
     *
     * @return string
     */
    public function set($server, $port, $key, $data, $duration);

    /**
     * Delete an item
     * Return the result
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param string $key    Key to delete
     *
     * @return string
     */
    public function delete($server, $port, $key);

    /**
     * Increment the key by value
     * Return the result
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param string $key    Key to increment
     * @param int    $value  Value to increment
     *
     * @return string
     */
    public function increment($server, $port, $key, $value);

    /**
     * Decrement the key by value
     * Return the result
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param string $key    Key to decrement
     * @param int    $value  Value to decrement
     *
     * @return string
     */
    public function decrement($server, $port, $key, $value);

    /**
     * Flush all items on a server after delay
     * Return the result
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param int    $delay  Delay before flushing server
     *
     * @return string
     */
    public function flush_all($server, $port, $delay);

    /**
     * Search for item
     * Return all the items matching parameters if successful, false otherwise
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param string $search
     * @param bool   $level  Level of detail
     * @param bool   $more   More action
     *
     * @return array
     */
    public function search($server, $port, $search, $level = false, $more = false);

    /**
     * Execute a telnet command on a server
     * Return the result
     *
     * @param string $server  Hostname
     * @param int    $port    Hostname Port
     * @param string $command Command to execute
     *
     * @return string
     */
    public function telnet($server, $port, $command);
}
