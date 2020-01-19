# Simple pagination helper

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
$helper = new PaginationHelper();
$helper->generatePaginationBlock($data);
var_dump($data);
```
You will see:
```
object(MDServices\Structures\PaginationData)#1 (5) {
  ["firstPage"]=>
  int(1)
  ["currentPage"]=>
  int(1)
  ["lastPage"]=>
  int(5)
  ["records"]=>
  array(2) {
    [0]=>
    array(1) {
      ["email"]=>
      string(15) "email@eamil.com"
    }
    [1]=>
    array(1) {
      ["email"]=>
      string(20) "some.email@eamil.com"
    }
  }
  ["paginationBlock"]=>
  array(7) {
    [0]=>
    object(MDServices\Structures\PageItem)#3 (3) {
      ["toPage"]=>
      int(0)
      ["disabled"]=>
      bool(true)
      ["text"]=>
      string(2) "<<"
    }
    [1]=>
    object(MDServices\Structures\PageItem)#4 (3) {
      ["toPage"]=>
      int(1)
      ["disabled"]=>
      bool(true)
      ["text"]=>
      string(1) "1"
    }
    [2]=>
    object(MDServices\Structures\PageItem)#5 (3) {
      ["toPage"]=>
      int(2)
      ["disabled"]=>
      bool(false)
      ["text"]=>
      string(1) "2"
    }
    [3]=>
    object(MDServices\Structures\PageItem)#6 (3) {
      ["toPage"]=>
      int(3)
      ["disabled"]=>
      bool(false)
      ["text"]=>
      string(1) "3"
    }
    [4]=>
    object(MDServices\Structures\PageItem)#7 (3) {
      ["toPage"]=>
      int(4)
      ["disabled"]=>
      bool(false)
      ["text"]=>
      string(1) "4"
    }
    [5]=>
    object(MDServices\Structures\PageItem)#8 (3) {
      ["toPage"]=>
      int(5)
      ["disabled"]=>
      bool(false)
      ["text"]=>
      string(1) "5"
    }
    [6]=>
    object(MDServices\Structures\PageItem)#9 (3) {
      ["toPage"]=>
      int(2)
      ["disabled"]=>
      bool(false)
      ["text"]=>
      string(2) ">>"
    }
  }
}
```
