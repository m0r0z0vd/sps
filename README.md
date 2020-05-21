# Simple pagination service

This service helps to implement a custom pagination.

## How to install
- `composer require m0r0z0vd/sps`

### Example usage
```
$data = new PaginationData();
$data->lastPage = 5;
$data->records = [
    [
        'email' => 'email@email.com'
    ],
    [
        'email' => 'some.email@email.com'
    ]
];
$helper = new SimplePaginationService();
$helper->generatePaginationBlock($data);
var_dump($data);
```
You will see:
```
class MDServices\Structures\PaginationData#1 (5) {
  public $firstPage =>
  int(1)
  public $currentPage =>
  int(1)
  public $lastPage =>
  int(5)
  public $records =>
  array(2) {
    [0] =>
    array(1) {
      'email' =>
      string(15) "email@email.com"
    }
    [1] =>
    array(1) {
      'email' =>
      string(20) "some.email@email.com"
    }
  }
  public $paginationBlock =>
  array(7) {
    [0] =>
    class MDServices\Structures\PageItem#3 (3) {
      public $toPage =>
      int(0)
      public $disabled =>
      bool(true)
      public $text =>
      string(2) "<<"
    }
    [1] =>
    class MDServices\Structures\PageItem#4 (3) {
      public $toPage =>
      int(1)
      public $disabled =>
      bool(true)
      public $text =>
      string(1) "1"
    }
    [2] =>
    class MDServices\Structures\PageItem#5 (3) {
      public $toPage =>
      int(2)
      public $disabled =>
      bool(false)
      public $text =>
      string(1) "2"
    }
    [3] =>
    class MDServices\Structures\PageItem#6 (3) {
      public $toPage =>
      int(3)
      public $disabled =>
      bool(false)
      public $text =>
      string(1) "3"
    }
    [4] =>
    class MDServices\Structures\PageItem#7 (3) {
      public $toPage =>
      int(4)
      public $disabled =>
      bool(false)
      public $text =>
      string(1) "4"
    }
    [5] =>
    class MDServices\Structures\PageItem#8 (3) {
      public $toPage =>
      int(5)
      public $disabled =>
      bool(false)
      public $text =>
      string(1) "5"
    }
    [6] =>
    class MDServices\Structures\PageItem#9 (3) {
      public $toPage =>
      int(2)
      public $disabled =>
      bool(false)
      public $text =>
      string(2) ">>"
    }
  }
}
```
