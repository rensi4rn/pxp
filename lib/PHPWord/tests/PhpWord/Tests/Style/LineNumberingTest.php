<?php
/**
 * This file is part of PHPWord - A pure PHP library for reading and writing
 * word processing documents.
 *
 * PHPWord is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @link        https://github.com/PHPOffice/PHPWord
 * @copyright   2010-2014 PHPWord contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpWord\Tests\Style;

use PhpOffice\PhpWord\Style\LineNumbering;

/**
 * Test class for PhpOffice\PhpWord\Style\LineNumbering
 *
 * @coversDefaultClass \PhpOffice\PhpWord\Style\LineNumbering
 */
class LineNumberingTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test get/set
     */
    public function testGetSetProperties()
    {
        $object = new LineNumbering();
        $properties = array(
            'start' => array(1, 2),
            'increment' => array(1, 10),
            'distance' => array(null, 10),
            'restart' => array(null, 'continuous'),
        );
        foreach ($properties as $property => $value) {
            list($default, $expected) = $value;
            $get = "get{$property}";
            $set = "set{$property}";

            $this->assertEquals($default, $object->$get()); // Default value

            $object->$set($expected);

            $this->assertEquals($expected, $object->$get()); // New value
        }
    }
}
