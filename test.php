MIT License
-----------

Copyright (c) 2021 Seyit Düzoylum
Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

<?php
    include "knn.php";

    $first = new knn();
    $data = [
        0 => ['x' => 30,
              'y' => 90,
              'z' => 'four'],

        1 => ['x' => 20,
              'y' => 50,
              'z' => 'four'],

        3 => ['x' => 10,
              'y' => 50,
              'z' => 'four'],

        4 => ['x' => 20,
              'y' => 62,
              'z' => 'four'],

        5 => ['x' => 8,
              'y' => 55,
              'z' => 'one']  
    ];

    $newPoint = ['x' => 10, 'y' => 60];
    $k = 2;
    
    echo $first->calculate($data, $newPoint, $k);

?>