<!-- Tar hand om alla request?

typ getUrl -->

<?php

class UrlView {
  public function getUrl(){
    return key($_GET);
  }
}
