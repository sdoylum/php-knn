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

class knn{
      public function calculate($data, $newPoint,  $k){
            foreach ($data as $key => $value) {
                  $data[$key]['euclidean_distance'] = sqrt(pow($newPoint['x']-$value['x'], 2)+pow($newPoint['y']-$value['y'], 2));

            }

            $keys = array_column($data, 'euclidean_distance');
            array_multisort($keys, SORT_ASC, $data);
            $newArr = array_slice($data, 0, $k);
            $keysz = array_column($newArr, 'z');
            return key(array_count_values($keysz));
      }
}
