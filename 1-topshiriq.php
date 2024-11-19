<?php
$countries = array(
    array(
        "nomi"=>"O'zbekiston",
        "aholi_soni"=>"32979000",
        "maydoni"=>"448978",
        "poytaxti"=>"Toshkent",
        "pul_birligi"=>"So'm",
    ),
    array(
        "nomi"=>"Qozog'iston",
        "aholi_soni"=>"18157078",
        "maydoni"=>"2724902",
        "poytaxti"=>"Nursulton",
        "pul_birligi"=>"Tanga",
    ),
    array(
        "nomi"=>"Turkmaniston",
        "aholi_soni"=>"5125693",
        "maydoni"=>"488100",
        "poytaxti"=>"Ashxobod",
        "pul_birligi"=>"Manat",
    ),
    array(
        "nomi"=>"Turkiya",
        "aholi_soni"=>"80121000",
        "maydoni"=>"783000",
        "poytaxti"=>"Ankara",
        "pul_birligi"=>"Turk lira",
    ),
    array(
        "nomi"=>"Rossiya",
        "aholi_soni"=>"143000000",
        "maydoni"=>"17340000",
        "poytaxti"=>"Mosva",
        "pul_birligi"=>"Rubl",
    ),
    array(
        "nomi"=>"Xitoy",
        "aholi_soni"=>"1347374000",
        "maydoni"=>"9596000",
        "poytaxti"=>"Pekin",
        "pul_birligi"=>"Yuan",
    ),
    array(
        "nomi"=>"AQSH",
        "aholi_soni"=>"327000000",
        "maydoni"=>"9631000",
        "poytaxti"=>"Washington",
        "pul_birligi"=>"Dollar",
    ),

);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Information</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">O'zbekiston va Qozog'iston haqida ma'lumot</h2>
    
    <table>
        <tr>
            <th>№</th>
            <th>Davlat nomi</th>
            <th>Aholi soni</th>
            <th>Maydoni</th>
            <th>Poytaxt</th>
            <th>Pul birligi</th>
        </tr>
        <?php
        $i = 1;
        foreach ($countries as $country) {
            echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<td>".$country['nomi']."</td>";
            echo "<td>".$country['aholi_soni']."</td>";
            echo "<td>".$country['maydoni']."</td>";
            echo "<td>".$country['poytaxti']."</td>";
            echo "<td>".$country['pul_birligi']."</td>";
            echo "</tr>";
        }
        ?>

    </table>

</body>
</html>
