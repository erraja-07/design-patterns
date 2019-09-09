<?php
class YouTube
{
  public function getVideoViewCount($id) {
    return 5000;
  }
}

interface YoutubeAdapterInterface
{
  public function getViews($i);
}

class YoutubeAdapter implements YoutubeAdapterInterface
{
  public $client;
  
  public function __construct(Youtube $client)
  {
    $this->client = $client;
  }
  
  public function getViews($id)
  {
    return $this->client->getVideoViewCount($id);
  }
}

$youtubeAdapter = new YoutubeAdapter(new Youtube);
echo $youtubeAdapter->getViews('abc');
?>
