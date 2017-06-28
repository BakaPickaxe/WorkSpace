public function getHouseList($floor = 1) {
  if (isset($this->levelhouse[$this->formatLevel($floor)])) {
  } else {
    return "=-=-=-=-= {$floor}층의 매물 목록 =-=-=-=-=";
  }
}
