# Print Array Nicely - Version 1.0 #

by 

* [@miamiruby](https://github.com/miamiruby) - Paul Kruger
* [@leoarce](https://github.com/leoarce) - Leo Arce

## Introduction ##
A brief summarization of what PR is:

> pr stops you having to use print_r to debug all the dam time

Other tools do this better... we just like KISS and Simple

## Features ##

- Print var with pre tags

## Installation ##

composer require miamiruby/pr

## Usage ##

Example:

```php

$moo = array('Mike' => 'evil','Mary' => 'good');
pr($moo);

Output:
<pre>
array(
  'Mike' => 'evil',
  'Mary' => 'good'
)
</pre>

```
## Contributing ##

Please refer to [CONTRIBUTING.md](https://github.com/miamiruby/pr/blob/master/CONTRIBUTING.md) for information on how to contribute to PR.
