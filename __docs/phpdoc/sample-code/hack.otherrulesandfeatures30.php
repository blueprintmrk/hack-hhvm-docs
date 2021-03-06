<?hh

interface UTI {
  public function utBar();
}

class UTA {
  public function utFoo(): void {
    echo "UTA:ut_foo()\n";
  }
}

class UTB extends UTA implements UTI {
  public function utBar(): void {
    echo "UTB:utBar()\n";
  }
}

function ut_xyz(UTA $a) {
  if ($a instanceof UTI) {
    $a->utBar();
  }
  $a->utFoo();
}

function main_ut() {
  $b = new UTB();
  ut_xyz($b);
}

main_ut();
