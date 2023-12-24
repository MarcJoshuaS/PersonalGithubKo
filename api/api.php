<?php
// URL of the JSON data
$url = "https://6525799a67cfb1e59ce755ee.mockapi.io/api/v1/post/";
// Create a stream context that disables SSL verification
$context = stream_context_create([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
    ],
]);
// Fetch the JSON data from the URL using the context
$jsonData = file_get_contents($url, false, $context);

// Check if the data was fetched successfully
if ($jsonData === false) {
    die("Failed to fetch JSON data from the URL.");
}
// Convert the JSON data to an associative array
$arrayData = json_decode($jsonData, true);

// Check if the JSON decoding was successful
if ($arrayData === null) {
    die("Failed to decode JSON data.");
}
//$data = array containing the API. All the code above is used to convert the API into a PHP Array
$data = $arrayData; 

//uncomment code below to view the $data content

// var_dump($data);    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>API Data Table</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>
    <body>

    
   <table class="table table-bordered">
   <thead>
       <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Avatar</th>
           <th>Created At</th>
       </tr>
   </thead>
   <tbody>
       <?php
       if (isset($data) && !empty($data)) {
           foreach ($data as $item) {
               echo "<tr>";
               echo "<td>{$item['id']}</td>";
               echo "<td>{$item['name']}</td>";
               echo "<td><img src='{$item['avatar']}' alt='{$item['name']}' ></td>";
               echo "<td>'{$item['createdAt']}</td>";
               echo "</tr>";
           }
       } else {
           echo "<tr><td colspan='4'>No data available.</td></tr>";
       }
       ?>

   </tbody>
</table>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
