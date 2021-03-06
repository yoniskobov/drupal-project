<?php

namespace Drupal\Tests\aggregator\Functional;

use Drupal\Component\Render\FormattableMarkup;

/**
 * Update feed test.
 *
 * @group aggregator
 */
class UpdateFeedTest extends AggregatorTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Creates a feed and attempts to update it.
   */
  public function testUpdateFeed() {
    $remaining_fields = ['title[0][value]', 'url[0][value]', ''];
    foreach ($remaining_fields as $same_field) {
      $feed = $this->createFeed();

      // Get new feed data array and modify newly created feed.
      $edit = $this->getFeedEditArray();
      // Change refresh value.
      $edit['refresh'] = 1800;
      if (isset($feed->{$same_field}->value)) {
        $edit[$same_field] = $feed->{$same_field}->value;
      }
      $this->drupalPostForm('aggregator/sources/' . $feed->id() . '/configure', $edit, 'Save');
      $this->assertText('The feed ' . $edit['title[0][value]'] . ' has been updated.', new FormattableMarkup('The feed %name has been updated.', ['%name' => $edit['title[0][value]']]));

      // Verify that the creation message contains a link to a feed.
      $this->assertSession()->elementExists('xpath', '//div[@data-drupal-messages]//a[contains(@href, "aggregator/sources/")]');

      // Check feed data.
      $this->assertSession()->addressEquals($feed->toUrl('canonical'));
      $this->assertTrue($this->uniqueFeed($edit['title[0][value]'], $edit['url[0][value]']), 'The feed is unique.');

      // Check feed source.
      $this->drupalGet('aggregator/sources/' . $feed->id());
      $this->assertSession()->statusCodeEquals(200);
      $this->assertText($edit['title[0][value]'], 'Page title');

      // Set correct title so deleteFeed() will work.
      $feed->title = $edit['title[0][value]'];

      // Delete feed.
      $this->deleteFeed($feed);
    }
  }

}
