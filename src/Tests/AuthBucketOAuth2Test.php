<?php

/**
 * @file
 * Basic tests for authbucket_oauth2.
 */

namespace Drupal\authbucket_oauth2\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Tests authbucket_oauth2.
 *
 * @group authbucket_oauth2
 */
class AuthBucketOAuth2Test extends WebTestCase {
  public static $module = array('authbucket_oauth2');

  protected $profile = 'testing';

  public function testAuthBucketOAuth2Menu() {
    $this->drupalGet('');
    $this->assertResponse(200, 'The Home page is available.');
  }
}
