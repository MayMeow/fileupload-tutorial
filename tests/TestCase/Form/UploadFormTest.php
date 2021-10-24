<?php
declare(strict_types=1);

namespace App\Test\TestCase\Form;

use App\Form\UploadForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\UploadForm Test Case
 */
class UploadFormTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Form\UploadForm
     */
    protected $Upload;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->Upload = new UploadForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Upload);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Form\UploadForm::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
