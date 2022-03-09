<?php
/****************************** Json json_decode ****************************************** */

#arquivo data.json
//$json = file_get_contents("./data.json");

#json objeto
//$data = json_decode($json);

#json array true
//$data = json_decode($json,true);

//echo '<pre>';
//print_r($json);
//echo '</pre>';

#foreach objeto
/*foreach($data->Clientes as $clientes){
    //echo $clientes->id."<br>";
    //echo $clientes->nome."<br>";

    //echo '<pre>';
    //print_r($clientes);
    //echo '</pre>';
}*/

#foreach array
/*foreach($data['Clientes'] as $clientes){
  
    echo '<pre>';
    print_r($clientes);
    echo '</pre>';
    //echo $clientes['id'] . " <br> " . $clientes['nome'] . " <br> ";
}*/


/****************************** Json json_encode ****************************************** */
echo '<pre>';
$arrayClientes = [
    'Clientes'=>[
        [
        "id"=>'1',
        "nome"=>"pedro" 
        ],
        [
        "id"=>'2',
        "nome"=>"enzo" 
        ],
        [
        "id"=>'3',
        "nome"=>"clara" 
        ],
    ]
];
print_r(json_encode($arrayClientes));
?>