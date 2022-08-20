<?php

# Extract one character of a string
$teacher = 'Maurinio';
echo "<br>" . $teacher[0];

# Extract more character than one
$post = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit autem harum repellat impedit obcaecati voluptatem voluptas. Maiores consectetur molestiae error, architecto dolorum accusantium harum incidunt fuga, praesentium a ab itaque.';
$extract = substr($post, 0, 20);

echo "$extract... [ver mas]";

# Change a string into an array
$data = 'javascript, php, laravel';
$tags = explode(', ', $data);
echo "<pre>";
var_dump($tags);

# change an array to string
$array = ['javascript', 'php', 'laravel'];
$string = implode (', ', $array);
echo $string;

# Delete extreme spaces with trim
$courses = '    Este es un curso     ';
$courses = trim($courses);
echo "Quiero ver $courses y textos";