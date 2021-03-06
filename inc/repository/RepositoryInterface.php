<?php
/**
 * This file is part of the Patterns package.
 *
 * Copyright (c) 2013-2016 Pierre Cassat <me@e-piwi.fr> and contributors
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *      http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * The source code of this package is available online at 
 * <http://github.com/atelierspierrot/patterns>.
 */

namespace phplab\patterns\inc\repository;

/**
 * A simple interface to manage a model repository
 *
 * @author  piwi <me@e-piwi.fr>
 */
interface RepositoryInterface
{
    /**
     * @return array
     */
    public function getAll();

    /**
     * @param   string  $prop_name
     * @param   mixed   $value
     * @return  mixed
     */
    public function getOneBy($prop_name, $value);

    /**
     * @param   string  $prop_name
     * @param   mixed   $value
     * @return  bool
     */
    public function exists($prop_name, $value);
}
