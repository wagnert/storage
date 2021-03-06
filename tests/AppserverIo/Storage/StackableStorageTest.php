<?php

/**
 * AppserverIo\Storage\StackableStorageTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2015 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io/storage
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Storage;

/**
 * Test for the stackable storage implementation.
 *
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2015 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://github.com/appserver-io/storage
 * @link      http://www.appserver.io
 */
class StackableStorageTest extends \PHPUnit_Framework_TestCase
{

    /**
     * The storage instance to test.
     *
     * @var \AppserverIo\Storage\StackableStorage
     */
    protected $storage;

    /**
     * Initializes the storage instance to test.
     *
     * @return void
     */
    public function setUp()
    {
        $this->storage = new StackableStorage();
    }

    /**
     * Test if the default session name is returned correctly.
     *
     * @return void
     */
    public function testGetAndSet()
    {
        $this->storage->set('key', $value = 'A value');
        $this->assertSame($value, $this->storage->get('key'));
    }
}
