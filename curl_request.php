<?php
/*
    Author: Tansen Khan
    This code takes the sparql as input and request to the service provider to generate output and give the
    graphical user interface json output
*/

$curl = curl_init();

$data = urlencode('{"query": "SELECT ?v4 WHERE { ?v4 ?v2 ?v6 ; ?v7 ?v3 . } ", "slots": [{"p": "is", "s": "v7", "o": "<http://lodqa.org/vocabulary/sort_of>"}, {"p": "is", "s": "v3", "o": "rdf:Class"}, {"p": "verbalization", "s": "v3", "o": "rivers"}, 
{"p": "is", "s": "v2", "o": "rdf:Property"}, {"p": "verbalization", "s": "v2", "o": "flow"},
{"p": "is", "s": "v6", "o": "rdf:Resource|rdfs:Literal"}, {"p": "verbalization", "s": "v6", "o": "Seoul"}], 
"score": "1.0", "question": "Which rivers flow through Seoul"}');

curl_setopt($curl, CURLOPT_URL, "http://121.254.173.77:2357/agdistis/run?data=" . $data);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($curl);
echo $output;
curl_close($curl);
?>