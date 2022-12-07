<?php

//IMplementasi materi Array PHP

//1. Membuat Array PHP (general & Array Map)
$mhs = array("Ahmad", "Susanto", "Ahsan", "Kiki", "Amira", "Angga");
$dosen = ["Arif", "Sugito", "Willy", "Pecco", "Rossi"];
$fakultas = ["Teknik", "Kedokteran", "Humaniora", "FKIP", "Sosial"];

$data = [
    "nama" => "Ahmad Susanto",
    "alamat" => "Tangerang",
    "jurusan" => "Teknik Informatika",
    "email" => "ahmadsusanto912@gmail.com"
];

$dummy = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    )
);

var_dump($mhs);
var_dump($dosen);
var_dump($data);
var_dump($dummy);

//is_array() => return value boolean
// var_dump(is_array($mhs));

// array_change_key_case => Changes the case of all keys in an array => Either CASE_UPPER or CASE_LOWER (default)
$lower = array_change_key_case($data, CASE_LOWER);
$upper = array_change_key_case($data, CASE_UPPER);
// var_dump($lower);
// var_dump($upper);

//array_chunk — Split an array into chunks
$input_array = $dosen;
$chunk1 = array_chunk($input_array, 2);
$chunk2 = array_chunk($input_array, 2, true);
// var_dump($chunk1);
// var_dump($chunk2);

// array_column — Return the values from a single column in the input array
$first_names = array_column($dummy, 'first_name');
// var_dump($first_names);

// array_combine — Creates an array by using one array for keys and another for its values
$arr_combines = array_combine($fakultas, $dosen);
// var_dump($arr_combines);

// array_count_values — Counts all the values of an array
$count = array_count_values($mhs);
// var_dump($count);

// array_diff_assoc — Computes the difference of arrays with additional index check 
//Compares array against arrays and returns the difference
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
// var_dump($result);

// array_diff_key — Computes the difference of arrays using keys for comparison
$arr1= array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$arr2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);

// var_dump(array_diff_key($arr1, $arr2));

//rray_diff_uassoc
function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1:-1;
}

$warna1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$warna2 = array("a" => "green", "yellow", "red");
$hasil = array_diff_uassoc($warna1, $warna2, "key_compare_func");
// var_dump($hasil);

// array_fill_keys — Fill an array with values, specifying keys
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
// var_dump($a);

//array_fill => Fill an array with values = o start key value, 6 quantity value array, banaan value array
$bb = array_fill(0, 6, 'banana');
// var_dump($bb);

//Array_filter
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

$usekey = array_filter($arr, function($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY);

$useboth = array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH);

// var_dump($usekey);
// var_dump($useboth);

$entry = [
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => '',
    5 => '0',
    6 => 0,
];

// var_dump(array_filter($entry));

// array_flip — Exchanges all keys with their associated values in an array
$input = array("a" => 1, "b" => 1, "c" => 2);
$flipped = array_flip($input);

// var_dump($flipped);

// array_intersect — Computes the intersection of arrays
$st1 = array("a" => "green", "red", "blue");
$st2 = array("b" => "green", "yellow", "red");
$intersect = array_intersect($st1, $st2);

// var_dump($intersect);

// array_key_exists — Checks if the given key or index exists in the array
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}

// array_keys — Return all the keys or a subset of the keys of an array
$keys = array_keys($data);
// var_dump($keys);

// array_map — Applies the callback to the elements of the given arrays
$func = function(int $value): int {
    return $value * 2;
};
$map = array_map($func, range(1, 5));
// var_dump($map);

// array_merge — Merge one or more arrays & merge recursive
$merge = array_merge($mhs, $data);
// var_dump($merge);

$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive($ar1, $ar2);
// var_dump($result);