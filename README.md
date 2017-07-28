# webba-dumper
Simple tool for pretty-printing the contents of a variable

## Examples
#### Array and objects

![Example](https://image.ibb.co/cOyMs5/webba_dumper.png)

#### Others types of variables

![Example](https://image.ibb.co/nreSX5/Untitled.png)

## Usage

```php
<?php
   $nestedArray = [123, [12 => "test"]];
   $string = "Hello there!";
   
   // Pretty print the variable
   dump($nestedArray);
  
   // or using non-array variables
   dump($string);
?>
```

## Note
Inside the dump() method, the PHP exit function will be called and ALL previous rendered HTML will be removed from the body tag
